<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package   ReadSpeaker
 * @author    Johannes Pichler
 * @license   LGPL
 * @copyright webpixels Johannes Pichler 2013
 */
/**
 * Table tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['config']['onload_callback'][]       = array('ReadspeakerModulesCallback', 'writeMessage');
$GLOBALS['TL_DCA']['tl_module']['palettes']['mod_rs']                = '{title_legend},name,type;{readspeaker_legend},rs_player_title,rs_readid,rs_setting;{expert_legend:hide},guests,cssID,space;';
$GLOBALS['TL_DCA']['tl_module']['palettes']['mod_rs_skip_from_here'] = '{title_legend},name,type;{expert_legend:hide},guests,cssID,space;';
$GLOBALS['TL_DCA']['tl_module']['palettes']['mod_rs_read_from_here'] = '{title_legend},name,type;{expert_legend:hide},guests,cssID,space;';




$GLOBALS['TL_DCA']['tl_module']['fields']['rs_setting'] = array(
    'label'            => &$GLOBALS['TL_LANG']['tl_module']['rs_setting'],
    'exclude'          => true,
    'search'           => true,
    'inputType'        => 'select',
    'options_callback' => array('ReadspeakerModulesCallback', 'getConfiguration'),
    'eval'             => array(
        'mandatory'          => true,
        'rgxp'               => 'digit',
        'decodeEntities'     => true,
        'maxlength'          => 255,
        'fieldType'          => 'radio',
        'tl_class'           => 'w50',
        'includeBlankOption' => true,
        'chosen'             => true),
    'sql'              => "int(10) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rs_player_title'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_module']['rs_player_title'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'text',
    'eval'      => array(
        'mandatory'      => true,
        'rgxp'           => 'extnd',
        'decodeEntities' => true,
        'maxlength'      => 255,
        'fieldType'      => 'radio',
        'tl_class'       => 'long'),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_module']['fields']['rs_readid'] = array(
    'label'            => &$GLOBALS['TL_LANG']['tl_module']['rs_readid'],
    'exclude'          => true,
    'search'           => true,
    'inputType'        => 'select',
    'options_callback' => array('ReadspeakerModulesCallback', 'getLayoutSections'),
    'reference'        => &$GLOBALS['TL_LANG']['tl_module']['rs_inColumn'],
    'eval'             => array(
        'mandatory'          => true,
        'rgxp'               => '',
        'decodeEntities'     => true,
        'maxlength'          => 255,
        'fieldType'          => 'radio',
        'tl_class'           => 'w50',
        'includeBlankOption' => true,
        'chosen'             => true),
    'sql'              => "varchar(255) NOT NULL default 'main'"
);

class ReadspeakerModulesCallback extends Backend {

    public function writeMessage($dc) {
        $banner = new ReadSpeaker\RS_Messages();
        Message::reset();
        $db     = \Contao\Database::getInstance();
        $module = $db->prepare("SELECT * FROM tl_module WHERE id = ?")->execute($dc->id)->row();

        $rs_banner = false;
        switch ($module['type']) {
            case 'mod_rs':
                $rs_banner = true;
                break;
            case 'mod_rs_skip_from_here':
                $rs_banner = true;
                break;
            case 'mod_rs_read_from_here':
                $rs_banner = true;
                break;

            default:
                break;
        }

        if ($rs_banner) {
            $banner->addBannerReadSpeakerTop($GLOBALS['TL_LANG']['FMD'][$module['type']][0],$GLOBALS['TL_LANG']['FMD'][$module['type']][1]);
        }
    }

    public function getLayoutSections($param) {

        if ($GLOBALS['TL_CONFIG']['customSections']) {
            $custom = explode(',', $GLOBALS['TL_CONFIG']['customSections']);
            array_walk($custom, function(&$value) {
                        $value = trim($value);
                    });

            return array_merge(array('header', 'left', 'right', 'main', 'footer'), $custom);
        }

        return array('main', 'left', 'right', 'header', 'footer');
    }

    public function getConfigurationLabels() {
        $dc  = Database::getInstance();
        $obj = $dc->prepare('SELECT * FROM tl_rs_settings')->execute()->fetchAllAssoc();
    }

    public function getConfiguration($param) {

        $dc        = Database::getInstance();
        $obj       = $dc->prepare('SELECT * FROM tl_rs_settings ORDER BY have_license,language, language_demo ASC')->execute()->fetchAllAssoc();
        $returner  = array();
        $error     = true;
        $edit_link = '<a href="contao/main.php?do=readspeaker_settings&act=edit&id=%s&amp;rt=%s&ref=%s" title="" class="edit"><img src="system/themes/default/images/edit.gif" width="12" height="16" alt="Edit "></a>';


        if (count($obj) >= 1) {
            $error = false;
            foreach ($obj as $key => $row) {

                if ($row['have_license']) {
                    $returner['ID: ' . $row['customer_id']][$row['id']] = $GLOBALS['TL_LANG']['MSC']['rs_language_codes'][$row['language']] . ' ' . ($row['domain'] ? '[' . $row['domain'] . ']' : ''); // . ' ' . ($row['note'] ? '<span class="tl_blue" >[' . $row['note'] . ']</span>' : '');
                } else {
                    $returner['DEMO'][$row['id']] = $GLOBALS['TL_LANG']['MSC']['rs_language_codes'][$row['language_demo']] . ' ' . ($row['domain'] ? '[' . $row['domain'] . ']' : ''); // . ' ' . ($row['note'] ? '<span class="tl_blue" >[' . $row['note'] . ']</span>' : '');
                }
            }
        }
        if ($error) {


            $session                           = $this->Session->get('referer');
            $session[TL_REFERER_ID]['current'] = substr(\Environment::get('requestUri'), strlen(TL_PATH) + 1);

            $this->Session->set('referer', $session);



            Message::addRaw(sprintf($GLOBALS['TL_LANG']['tl_module']['error']['error_no_settings'], REQUEST_TOKEN, TL_REFERER_ID));
        }

        return $returner;
    }

}

?>