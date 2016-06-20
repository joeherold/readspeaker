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
 * Namespace
 */

namespace ReadSpeaker;

/**
 * Class FE_ReadSpeaker
 *
 * @copyright  webpixels Johannes Pichler 2013
 * @author     Johannes Pichler
 * @package    Devtools
 */
class FE_ReadSpeaker extends \Module {

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'mod_readspeaker';

    /**
     * Generate the module
     */
    protected function compile() {


        $dc   = \Contao\Database::getInstance();
        $row  = $dc->prepare('SELECT * FROM tl_rs_settings WHERE id = ?')->limit(1)->execute($this->rs_setting)->fetchAssoc();
        $href = '';
        if ($row) {


            $customerid = '6857';
            $lang       = $row['language_demo'];
            $speed      = $row['speed'];

            $readid = ($this->rs_readid ? $this->rs_readid : $this->strColumn);

            $stattype = \Contao\Environment::get('host');
            $url      = \Contao\Environment::get('base');
            $url2     = \Contao\Environment::get('requestUri');
            if ($url2 != '/')
                $url .= substr($url2, 1);

            if ($row['have_license']) {
                $customerid = $row['customer_id'];
                $lang       = $row['language'];
            }


            $protocol = \Contao\Environment::get('https');
            $ssl      = false;

            if (isset($protocol)) {
                if ('on' == strtolower($protocol))
                    $ssl = true;
                if ('1' == $protocol)
                    $ssl = true;
            }

            if (!$GLOBALS['RS_IN_HEAD']) {
                $GLOBALS['RS_IN_HEAD'] = true;
                if ($ssl) {
                    $GLOBALS['TL_HEAD'][] = '<script src="system/modules/readspeaker/assets/rs_ssl/ReadSpeaker.js?pids=embhl" type="text/javascript"></script>';
                } else {

                    $GLOBALS['TL_HEAD'][] = '<script src="http://f1.eu.readspeaker.com/script/' . $customerid . '/ReadSpeaker.js?pids=embhl" type="text/javascript"></script>';
                }
            }


            $GLOBALS['TL_HEAD'][] = '<script src="system/modules/readspeaker/assets/readspeaker.js"></script>';
            $GLOBALS['TL_HEAD'][] = '<script type="text/javascript">
                                    <!--
                                    window.rsConf = {general: {usePost: true}};
                                    //-->
                                    </script>';


            $href = '';
            if ($ssl) {
                $href .= "https://app.readspeaker.com/cgi-bin/rsent?";
            } else {
                $href .= "http://app.eu.readspeaker.com/cgi-bin/rsent?";
            }


            $href .= "customerid=" . $customerid;
            $href .= "&amp;lang=" . $lang;
            $href .= "&amp;readid=" . $readid;
            $href .= "&amp;url=" . urlencode($url);
            $href .= "&amp;stattype=" . $stattype;
        }



        $this->Template->href         = $href;
        $this->Template->button_title = $this->rs_player_title;
    }

}
