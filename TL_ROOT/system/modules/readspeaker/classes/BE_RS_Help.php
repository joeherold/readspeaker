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
 * Class BE_RS_Help
 *
 * @copyright  webpixels Johannes Pichler 2013
 * @author     Johannes Pichler
 * @package    Devtools
 */
class BE_RS_Help extends \BackendModule {

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'be_readspeaker_help';

    /**
     * Construct the module
     */
    
    public function __construct() {
        parent::__construct();
        
        
        // Add the help style sheet
        $GLOBALS['TL_CSS'][] = 'system/modules/readspeaker/assets/help.css||static';
        
        // Add the help javascript
        $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/readspeaker/assets/help.js';
        
        if ($GLOBALS['TL_LANGUAGE'] == "de") {
            $this->strTemplate = 'be_readspeaker_help_de';
        }
        
    }
    
    protected function compile() {

        $banner = new RS_Messages();
        $this->Template->topBanner = $banner->renderBeModulesReadSpeakerTop($GLOBALS['TL_LANG']['MOD']['readspeaker_help'][0],$GLOBALS['TL_LANG']['MOD']['readspeaker_help'][1]);

        
    }

}
