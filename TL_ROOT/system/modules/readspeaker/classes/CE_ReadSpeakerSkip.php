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
 * Class CE_ReadSpeakerSkip
 *
 * @copyright  webpixels Johannes Pichler 2013
 * @author     Johannes Pichler
 * @package    Devtools
 */
class CE_ReadSpeakerSkip extends \ContentElement {

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'be_readspeaker_skip';

    /**
     * Generate the module
     */
    
    public function generate() {


        if (TL_MODE == 'BE') {
            $objTemplate = new \BackendTemplate('be_wildcard');

            $objTemplate->wildcard = '<img height="30px;" src="system/modules/readspeaker/assets/skip.gif" ><img src="system/modules/readspeaker/assets/ReadSpeaker_logo.png" style="margin-top:10px;height:20px; float:right;">';
            
            $objTemplate->title    = $this->headline;
            $objTemplate->id       = $this->id;
            $objTemplate->link     = $this->name;
            $objTemplate->href     = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

           return $objTemplate->parse();
        }
        return parent::generate();
    } 
    
   protected function compile() {
        
       
        
        

    }

}
