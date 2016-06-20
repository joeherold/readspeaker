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
 * Table tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('ReadspeakerContentCallback', 'writeMessage');
$GLOBALS['TL_DCA']['tl_content']['palettes']['rs_content_ce']   = '{type_legend},name,type;{readspeaker_legend},rs_player_title,rs_setting;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['rs_content_end']  = '{type_legend},name,type;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['rs_content_skip'] = '{type_legend},name,type;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['rs_content_read'] = '{type_legend},name,type;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['rs_content_doc']  = '{type_legend},type,headline;{readspeaker_legend},rs_player_title,rs_setting;{source_legend},singleSRC;{dwnconfig_legend},linkTitle,titleText;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';



$GLOBALS['TL_DCA']['tl_content']['fields']['rs_setting'] = array(
    'label'            => &$GLOBALS['TL_LANG']['tl_content']['rs_setting'],
    'exclude'          => true,
    'search'           => true,
    'inputType'        => 'select',
    'options_callback' => array('ReadspeakerContentCallback', 'getConfiguration'),
    'eval'             => array(
        'mandatory'          => true,
        'rgxp'               => 'digit',
        'decodeEntities'     => true,
        'maxlength'          => 255,
        'fieldType'          => 'radio',
        'tl_class'           => 'w50',
        'submitOnChange'     => true,
        'includeBlankOption' => true,
        'chosen'             => true),
    'sql'              => "int(10) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['rs_player_title'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['rs_player_title'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'text',
    'eval'      => array(
        'mandatory'      => true,
        'rgxp'           => 'extnd',
        'decodeEntities' => true,
        'maxlength'      => 255,
        'fieldType'      => 'radio',
        'tl_class'       => 'w50',),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['rs_readid'] = array(
    'label'            => &$GLOBALS['TL_LANG']['tl_content']['rs_readid'],
    'exclude'          => true,
    'search'           => true,
    'inputType'        => 'radio',
    'options_callback' => array('ReadspeakerContentCallback', 'getLayoutSections'),
    'reference'        => &$GLOBALS['TL_LANG']['tl_content']['rs_inColumn'],
    'eval'             => array(
        'mandatory'      => true,
        'rgxp'           => '',
        'decodeEntities' => true,
        'maxlength'      => 255,
        'fieldType'      => 'radio',
        'tl_class'       => 'long'),
    'sql'              => "varchar(255) NOT NULL default 'main'"
);

class ReadspeakerContentCallback extends Backend {

    

    public function __construct() {
        parent::__construct();
    }

    public function writeMessage(DataContainer $dc) {
        Message::reset();
        if (TL_MODE == 'BE' && Input::get('act') && Input::get('act') == 'edit') {

            $banner = new ReadSpeaker\RS_Messages();

            $db     = \Contao\Database::getInstance();
            $module = $db->prepare("SELECT * FROM tl_content WHERE id = ?")->execute($dc->id)->row();


            if ($module) {

                $rs_banner        = false;
                $rs_doc_banner    = false;
                $rs_ce_end_banner = false;

                switch ($module['type']) {
                    case 'rs_content_ce':
                        $rs_banner        = true;
                        $rs_ce_end_banner = true;
                        break;
                    case 'rs_content_end':
                        $rs_banner        = true;
                        break;
                    case 'rs_content_doc':
                        $rs_banner        = true;
                        $rs_doc_banner    = true;
                        break;

                    case 'rs_content_skip':
                        $rs_banner = true;
                        break;
                    case 'rs_content_read':
                        $rs_banner = true;
                        break;

                    default:
                        break;
                }

                if ($rs_banner) {

                    $banner->addBannerReadSpeakerTop($GLOBALS['TL_LANG']['CTE'][$module['type']][0], $GLOBALS['TL_LANG']['CTE'][$module['type']][1]);
                    if ($rs_ce_end_banner)
                        $banner->addBannerNotForgetEndContentElement();
                    if ($rs_doc_banner)
                        $banner->addBannerPossibleDocReaderFileTypes();
                }
            }
        }
    }

    public function getLayoutSections($param) {

        if ($GLOBALS['TL_CONFIG']['customSections']) {
            $custom = explode(',', $GLOBALS['TL_CONFIG']['customSections']);
            array_walk($custom, function(&$value) {
                        $value = trim($value);
                    });

            return array_merge(array('main', 'left', 'right', 'header', 'footer'), $custom);
        }

        return array('main', 'left', 'right', 'header', 'footer');
    }

    public function getConfiguration($param) {


        $options = array(
            'order' => 'language, language_demo ASC'
        );

        $dc        = Database::getInstance();
        $obj       = $dc->prepare('SELECT * FROM tl_rs_settings ORDER BY have_license,language, language_demo ASC')->execute()->fetchAllAssoc();

        $returner = array();

        foreach ($obj as $key => $row) {


            if ($row['have_license']) {
                $returner['ID: ' . $row['customer_id']][$row['id']] = $GLOBALS['TL_LANG']['MSC']['rs_language_codes'][$row['language']] . ' ' . ($row['domain'] ? '[' . $row['domain'] . ']' : '');
            } else {
                $returner['DEMO'][$row['id']] = $GLOBALS['TL_LANG']['MSC']['rs_language_codes'][$row['language_demo']] . ' ' . ($row['domain'] ? '[' . $row['domain'] . ']' : '');
            }
        }
        asort($returner, SORT_STRING);
        return $returner;
    }

}

?>