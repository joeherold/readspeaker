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
 * Table tl_rs_settings
 */
$GLOBALS['TL_DCA']['tl_rs_settings'] = array
    (
    // Config
    'config'      => array
        (
        'dataContainer'     => 'Table',
        'enableVersioning'  => false,
        'onload_callback'   => array(
            array('tl_rs_settings', 'writeMessage')
        ),
        'onsubmit_callback' => array(
            array('tl_rs_settings', 'onsubmit_callback')
        ),
        
        'sql'               => array
            (
            'keys' => array
                (
                'id' => 'primary'
            )
        )
    ),
    // List
    'list'        => array
        (
        'sorting'           => array
            (
            'mode'        => 1,
            'fields'      => array('customer_id DESC', 'have_license', 'language', 'language_demo'),
            'flag'        => 11,
            'panelLayout' => 'sort;'
        ),
        'label'             => array
            (
            'fields'         => array('language', 'language_demo', 'have_license', 'domain', 'note', 'customer_id'),
            'format'         => '%s %s %s %s',
            'label_callback' => array('tl_rs_settings', 'rowLabel'),
            'group_callback' => array('tl_rs_settings', 'groupLabel')
        ),
        'global_operations' => array
            (
            'all' => array
                (
                'label'      => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'       => 'act=select',
                'class'      => 'header_edit_all',
                'attributes' => 'onclick="Backend.getScrollOffset();" accesskey="e"'
            )
        ),
        'operations'        => array
            (
            'edit'   => array
                (
                'label' => &$GLOBALS['TL_LANG']['tl_rs_settings']['edit'],
                'href'  => 'act=edit',
                'icon'  => 'edit.gif'
            ),
            'copy'   => array
                (
                'label' => &$GLOBALS['TL_LANG']['tl_rs_settings']['copy'],
                'href'  => 'act=copy',
                'icon'  => 'copy.gif'
            ),
            'delete' => array
                (
                'label'           => &$GLOBALS['TL_LANG']['tl_rs_settings']['delete'],
                'href'            => 'act=delete',
                'icon'            => 'delete.gif',
                'attributes'      => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"',
                'button_callback' => array('tl_rs_settings', 'deleteItem')
            ),
            'show'   => array
                (
                'label' => &$GLOBALS['TL_LANG']['tl_rs_settings']['show'],
                'href'  => 'act=show',
                'icon'  => 'show.gif'
            )
        )
    ),
    // Edit
    'edit'        => array
        (
        'buttons_callback' => array()
    ),
    // Palettes
    'palettes'    => array
        (
        '__selector__' => array('have_license'),
        'default'      => 'have_license,language_demo,domain,note,rs_settings_usage;',
        'have_license' => 'have_license, customer_id,docreader_id,language,domain,note,rs_settings_usage;'
    ),
    // Subpalettes
    'subpalettes' => array
    (
    ),
    // Fields
    'fields'      => array
        (
        'id'                => array
            (
            'sql' => "int(10) unsigned NOT NULL auto_increment"
        ),
        'tstamp'            => array
            (
            'sql' => "int(10) unsigned NOT NULL default '0'"
        ),
        'have_license'      => array(
            'label'     => &$GLOBALS['TL_LANG']['tl_rs_settings']['have_license'],
            'exclude'   => true,
            'sorting'   => true,
            'filter'    => true,
            'search'    => true,
            'inputType' => 'checkbox',
            'eval'      => array(
                'submitOnChange' => true,
                'tl_class'       => 'long clr'),
            'sql'       => "char(1) NOT NULL default ''"
        ),
        'customer_id'       => array
            (
            'label'     => &$GLOBALS['TL_LANG']['tl_rs_settings']['customer_id'],
            'exclude'   => true,
            'sorting'   => true,
            'filter'    => true,
            'search'    => true,
            'inputType' => 'text',
            'eval'      => array(
                'mandatory' => true,
                'maxlength' => 10,
                'multiple'  => false,
                'size'      => 1,
                'tl_class'  => 'w50'
            ),
            'sql'       => "varchar(10) NOT NULL default ''"
        ),
        'docreader_id'      => array
            (
            'label'     => &$GLOBALS['TL_LANG']['tl_rs_settings']['docreader_id'],
            'exclude'   => true,
            'sorting'   => true,
            'filter'    => true,
            'search'    => true,
            'inputType' => 'text',
            'eval'      => array(
                'mandatory' => false,
                'maxlength' => 10,
                'multiple'  => false,
                'size'      => 1,
                'tl_class'  => 'w50'
            ),
            'sql'       => "varchar(10) NOT NULL default ''"
        ),
        'note'              => array
            (
            'label'     => &$GLOBALS['TL_LANG']['tl_rs_settings']['note'],
            'exclude'   => true,
            'sorting'   => false,
            'filter'    => false,
            'search'    => false,
            'inputType' => 'text',
            'eval'      => array(
                'mandatory' => false,
                'maxlength' => 255,
                'multiple'  => false,
                'rows'      => 2,
                'tl_class'  => 'w50'
            ),
            'sql'       => "varchar(255) NOT NULL default ''"
        ),
        'domain'            => array
            (
            'label'     => &$GLOBALS['TL_LANG']['tl_rs_settings']['domain'],
            'exclude'   => true,
            'sorting'   => false,
            'filter'    => false,
            'search'    => false,
            'inputType' => 'text',
            'eval'      => array(
                'mandatory' => false,
                'maxlength' => 255,
                'rgxp'      => 'url',
                'tl_class'  => 'w50 clr'
            ),
            'sql'       => "varchar(255) NOT NULL default ''"
        ),
        'language'          => array
            (
            'label'            => &$GLOBALS['TL_LANG']['tl_rs_settings']['language'],
            'exclude'          => true,
            'sorting'          => false,
            'filter'           => false,
            'search'           => false,
            'inputType'        => 'select',
            'options_callback' => array('tl_rs_settings', 'getFullLanguageArray'),
            //'options'   => array("ar_ar", "nl_be", "zh_hk", "zh_cn", "cs_cz", "da_dk", "nl_nl", "en_au", "en_in", "en_sc", "en_za", "en_uk", "en_us", "fo_fo", "fi_fi", "sv_fi", "fr_fr", "de_de", "el_gr", "hi_in", "it_it", "ja_jp", "ko_kr", "no_nb", "no_nn", "pl_pl", "pt_pt", "pt_br", "ro_ro", "ru_ru", "es_us", "es_es", "ca_es", "eu_es", "gl_es", "ca_es", "sv_se", "tr_tr", "cy_cy"),
            'reference'        => &$GLOBALS['TL_LANG']['MSC']['rs_language_codes'],
            'eval'             => array(
                'mandatory'      => true,
                'maxlength'      => 10,
                'tl_class'       => 'w50',
                'submitOnChange' => true,
                'chosen'         => true
            ),
            'sql'              => "varchar(10) NOT NULL default ''"
        ),
        'language_demo'     => array
            (
            'label'            => &$GLOBALS['TL_LANG']['tl_rs_settings']['language_demo'],
            'exclude'          => true,
            'sorting'          => false,
            'filter'           => false,
            'search'           => false,
            'inputType'        => 'select',
            'options_callback' => array('tl_rs_settings', 'getDemoLanguageArray'),
            //'options'   => array("en_us", "de_de", "fr_fr"),
            'reference'        => &$GLOBALS['TL_LANG']['MSC']['rs_language_codes'],
            'eval'             => array(
                'mandatory'      => true,
                'maxlength'      => 10,
                'tl_class'       => 'w50',
                'submitOnChange' => true,
                'chosen'         => true
            ),
            'sql'              => "varchar(10) NOT NULL default ''"
        ),
        'rs_settings_usage' => array(
            'input_field_callback' => array('tl_rs_settings', 'showUsage')
        )
    )
);

class tl_rs_settings extends Backend {

    public function sortLang($langArray = array()) {
        asort($GLOBALS['TL_LANG']['MSC']['rs_language_codes'], SORT_STRING);
        $returner = array();
        foreach ($GLOBALS['TL_LANG']['MSC']['rs_language_codes'] as $key => $value) {
            if (in_array($key, $langArray)) {
                $returner[] = $key;
            }
        }
        return $returner;
    }

    public function getFullLanguageArray() {
        $all = array("ar_ar", "nl_be", "zh_hk", "zh_cn", "cs_cz", "da_dk", "nl_nl", "en_au", "en_in", "en_sc", "en_za", "en_uk", "en_us", "fo_fo", "fi_fi", "sv_fi", "fr_fr", "de_de", "el_gr", "hi_in", "it_it", "ja_jp", "ko_kr", "no_nb", "no_nn", "pl_pl", "pt_pt", "pt_br", "ro_ro", "ru_ru", "es_us", "es_es", "ca_es", "eu_es", "gl_es", "ca_es", "sv_se", "tr_tr", "cy_cy");
        return $this->sortLang($all);
    }

    public function getDemoLanguageArray() {
        $all = array("en_us", "de_de", "fr_fr");
        return $this->sortLang($all);
    }

    public function writeMessage(DataContainer $dc) {
        
        //$banner->addBannerNewWindow($GLOBALS['TL_LANG']['CTE'][$module['type']][0], $GLOBALS['TL_LANG']['CTE'][$module['type']][1]);
        $banner = new ReadSpeaker\RS_Messages();
        Message::reset();
        $banner->addBannerReadSpeakerTop($GLOBALS['TL_LANG']['MOD']['readspeaker_settings'][0],$GLOBALS['TL_LANG']['MOD']['readspeaker_settings'][1]);
        

        $count_settings = ReadSpeaker\RsSettingsModel::countAll();

        if (!Contao\Input::get('act')) {
            if ($count_settings == 0) {

                Message::addRaw($GLOBALS['TL_LANG']['tl_rs_settings']['info']['min_one_config']);
            } else if ($count_settings > 0) {

                Message::addRaw($GLOBALS['TL_LANG']['tl_rs_settings']['info']['more_configs']);
            }
        }
    }

    public function showUsage($dc) {

        $db     = Database::getInstance();
        $db_row = $db->prepare('SELECT * FROM tl_content WHERE type LIKE ? AND rs_setting = ?')->execute('rs_content%', $dc->id);


        $content_elems = $db_row->fetchAllAssoc();


        $content_count = $db_row->numRows;

        $db_row2 = $db->prepare('SELECT * FROM tl_module WHERE type = ? AND rs_setting = ?')->execute('mod_rs', $dc->id);

        $module_elems = $db_row2->fetchAllAssoc();
        $module_count = $db_row2->numRows;

        $heading = false;
        $strBuffer1 = '';
        $strBuffer2 = '';
       

        if ($content_elems) {
            $heading = true;
            $strBuffer1 .= '<table style="width:100%;margin-bottom:25px;"><tr><th>'.$GLOBALS['TL_LANG']['tl_rs_settings']['info']['usage_content'].'</th><th></th><th>'.$GLOBALS['TL_LANG']['tl_rs_settings']['info']['usage_parent'].'</th><th>'.$GLOBALS['TL_LANG']['tl_rs_settings']['info']['usage_title'].'</th></tr>';
            foreach ($content_elems as $value) {

                $strBuffer1 .= '<tr><td style="width:45%;">' . $GLOBALS['TL_LANG']['CTE'][$value['type']][0] . ' [ ID:' . $value['id'] . ' ]</td><td style="width:5%;"><div style="width:50px;text-align:center;">&rarr;</div></td><td>' . $value['ptable'] . '  [ ID:' . $value['pid'] . ' ] ';
                $parent = $db->prepare('SELECT * FROM ' . $value['ptable'] . ' WHERE id =?')->execute($value['pid'])->row();
                $strBuffer1 .= '<td><em>' . $parent['title'] . '</em></td>';
                $strBuffer1 .= '</tr>';
            }
            $strBuffer1 .= '</table>';
        }


        if ($module_elems) {
            $heading = true;
            $strBuffer2 .= '<table style="width:100%;margin-bottom:25px;"><tr><th>'.$GLOBALS['TL_LANG']['tl_rs_settings']['info']['usage_modules'].'</th><th></th><th>'.$GLOBALS['TL_LANG']['tl_rs_settings']['info']['usage_module_title'].'</th></tr>';
            foreach ($module_elems as $value) {


                $strBuffer2 .= '<tr><td style="width:45%;">'.$GLOBALS['TL_LANG']['FMD'][$value['type']][0]. ' [ ID:' . $value['id'] . ' ]</td><td style="width:5%;"><div style="width:50px;text-align:center;">&rarr;</div></td><td>'.$value['name'].'</td></tr>';
            }
            $strBuffer2 .= '</table>';
        }
        
        return ($heading ? '<div class="long clr" style="padding:20px 0px;"><p class="tl_info">'.$GLOBALS['TL_LANG']['tl_rs_settings']['info']['usage'].'</p><br>' : '<div class="long clr">').$strBuffer1 . $strBuffer2.'</div>';
    }

    public function groupLabel($group, $mode, $field, $row, $dc) {


        if ($row['have_license'] == '1' && $row['customer_id']) {
            return '<div style="padding: 20px 0px;">' . $GLOBALS['TL_LANG']['tl_rs_settings']['legend']['customer_id'] . ': ' . $group . '</div>';
        } else if ($row['have_license'] == '1' && !$row['customer_id']) {
            return '<div style="padding: 20px 0px;"><p class="tl_error">' . $GLOBALS['TL_LANG']['tl_rs_settings']['legend']['customer_id_missing'] . '</p></div>';
        } else {
            return '<div style="padding: 20px 0px;">' . $GLOBALS['TL_LANG']['tl_rs_settings']['legend']['demo'] . '</div>';
        }
    }

    public function rowLabel($row, $label, $dc, $array_from_label_fields) {
        $db     = Database::getInstance();
        $db_row = $db->prepare('SELECT * FROM tl_content WHERE type LIKE ? AND rs_setting = ?')->execute('rs_content%', $row['id']);

        $content_count = $db_row->numRows;

        $db_row2      = $db->prepare('SELECT * FROM tl_module WHERE type = ? AND rs_setting = ?')->execute('mod_rs', $row['id']);
        $module_count = $db_row2->numRows;
        if ($row['have_license']) {
            return '<div style="padding: 10px 5px;"><strong>' . $array_from_label_fields[0] . '</strong>' . ($row['docreader_id'] ? ' <small class="tl_grey"> + docReader</small>' : '') . ($array_from_label_fields[3] ? ' <small class="tl_blue" >[' . $array_from_label_fields[3] . ']</small>' : '') . ' ' . ($array_from_label_fields[4] ? '<small class="tl_grey">[' . $array_from_label_fields[4] . ']</small>' : '') . ($content_count + $module_count > 0 ? '<div class="tl_red tl_small" style="margin-top: 10px;" >(' . sprintf($GLOBALS['TL_LANG']['tl_rs_settings']['do_not_delete'], $content_count + $module_count) . ')</div>' : '') . '</div>';
        } else {
            return '<div style="padding: 10px 5px;"><strong>' . $array_from_label_fields[1] . '</strong>' . ' <small class="tl_grey">+ docReader</small>' . ($array_from_label_fields[3] ? ' <small class="tl_blue" >[' . $array_from_label_fields[3] . ']</small>' : '') . ' ' . ($array_from_label_fields[4] ? '<small class="tl_grey">[' . $array_from_label_fields[4] . ']</small>' : '') . '' . ($content_count + $module_count > 0 ? '<div class="tl_red tl_small" style="margin-top: 10px;" >(' . sprintf($GLOBALS['TL_LANG']['tl_rs_settings']['do_not_delete'], $content_count + $module_count) . ')</div>' : '') . '</div>';
            ;
        }
    }

    public function onsubmit_callback(DataContainer $dc) {

        $db     = Database::getInstance();
        $setObj = $db->prepare('SELECT * FROM tl_rs_settings WHERE id = ?')->limit(1)->execute($dc->id);
        $item   = $setObj->fetchAssoc();
        if (!$item['have_license']) {

            $item['customer_id']  = 'DEMO';
            $item['docreader_id'] = '';
            $item['language']     = $item['language_demo'];
        }



        if ($item['have_license'] && $item['customer_id'] == 'DEMO') {
            $item['customer_id'] = '';
            $item['language']    = $item['language_demo'];
        }

        $db->prepare("UPDATE tl_rs_settings %s WHERE id = ?")->set($item)->execute($dc->id);
    }

    public function deleteItem($row, $href, $label, $title, $icon, $attributes) {

        $db     = Database::getInstance();
        $db_row = $db->prepare('SELECT * FROM tl_content WHERE type = ? AND rs_setting = ?')->execute('rs_content_ce', $row['id']);

        $content_count = $db_row->numRows;

        $db_row2      = $db->prepare('SELECT * FROM tl_module WHERE type = ? AND rs_setting = ?')->execute('mod_rs', $row['id']);
        $module_count = $db_row2->numRows;
        $count        = $content_count + $module_count;
        return ($count == 0) ? '<a href="' . $this->addToUrl($href . '&amp;id=' . $row['id']) . '" title="' . specialchars($title) . '"' . $attributes . '>' . Image::getHtml($icon, $label) . '</a> ' : Image::getHtml(preg_replace('/\.gif$/i', '_.gif', $icon)) . ' ';
    }

}