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
 * Class BE_RS_Contact
 *
 * @copyright  webpixels Johannes Pichler 2013
 * @author     Johannes Pichler
 * @package    Devtools
 */
class BE_RS_Contact extends \BackendModule {

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'be_readspeaker_contact';

    /**
     * Construct the module
     */
    public function __construct() {
        parent::__construct();
        
        
        // Add the help style sheet
        $GLOBALS['TL_CSS'][] = 'system/modules/readspeaker/assets/contact.css||static';
        
        
        
    }
    /**
     * Generate the module
     */
    protected function compile() {
        $banner = new RS_Messages();
        $this->Template->topBanner = $banner->renderBeModulesReadSpeakerTop($GLOBALS['TL_LANG']['MOD']['readspeaker_contact'][0],$GLOBALS['TL_LANG']['MOD']['readspeaker_contact'][1]);
        $contact_url = 'http://www.readspeaker.com/contact-us/';
        if ($GLOBALS['TL_LANGUAGE'] == "de") {
             $contact_url = 'http://www.readspeaker.com/de/kontaktieren-sie-uns/';
        }
        $this->Template->openInNewWindow = $banner->renderOpenInNewWindow($contact_url);
    }

}
