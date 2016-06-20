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
 * Class BE_RS_CustomerPortal
 *
 * @copyright  webpixels Johannes Pichler 2013
 * @author     Johannes Pichler
 * @package    Devtools
 */
class BE_RS_CustomerPortal extends \BackendModule {

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'be_readspeaker_customer_portal';

    /**
     * Generate the module
     */
    protected function compile() {
        $banner = new RS_Messages();
        $this->Template->topBanner = $banner->renderBeModulesReadSpeakerTop($GLOBALS['TL_LANG']['MOD']['readspeaker_customerportal'][0],$GLOBALS['TL_LANG']['MOD']['readspeaker_customerportal'][1]);
        $this->Template->openInNewWindow = $banner->renderOpenInNewWindow('https://app.readspeaker.com/portal');
    }

}
