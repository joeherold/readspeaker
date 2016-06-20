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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_rs_settings']['have_license']  = array('ReadSpeaker license available', 'Please check, if you have a ReadSpeaker license.');
$GLOBALS['TL_LANG']['tl_rs_settings']['customer_id']   = array('ReadSpeaker Customer ID', 'Please enter your customer ID (if available).');
$GLOBALS['TL_LANG']['tl_rs_settings']['docreader_id']  = array('DocReader CID', 'Please enter your docReader CID.');
$GLOBALS['TL_LANG']['tl_rs_settings']['language']      = array('Language FULL-VERSION', 'Please define the language you want to use.');
$GLOBALS['TL_LANG']['tl_rs_settings']['language_demo'] = array('Language DEMO', 'Please define the language you want to use.');
$GLOBALS['TL_LANG']['tl_rs_settings']['domain']        = array('Corresponding domain <small>[INFO]</small>', 'Please enter your activated domain corresponding to your language.');
$GLOBALS['TL_LANG']['tl_rs_settings']['note']          = array('Note <small>[INFO]</small>', 'You may enter a note here.');
$GLOBALS['TL_LANG']['tl_rs_settings']['speed']         = array('Reading speed', 'Define the reading speed.');

$GLOBALS['TL_LANG']['tl_rs_settings']['in _use']       = '%s times in use.';
$GLOBALS['TL_LANG']['tl_rs_settings']['do_not_delete'] = 'Not deletable: <strong>%s</strong> x in use';

$GLOBALS['TL_LANG']['tl_rs_settings']['info']['min_one_config'] = '<p class="tl_info">Please create at least one language-configuration.</p>';
$GLOBALS['TL_LANG']['tl_rs_settings']['info']['more_configs']   = '<p class="tl_new">You may add more language-configurations.</p>';
$GLOBALS['TL_LANG']['tl_rs_settings']['info']['usage'] = 'Usage:';
$GLOBALS['TL_LANG']['tl_rs_settings']['info']['usage_content'] = 'Content Elements:';
$GLOBALS['TL_LANG']['tl_rs_settings']['info']['usage_modules'] = 'FE Modules:';
$GLOBALS['TL_LANG']['tl_rs_settings']['info']['usage_parent'] = 'Is Child of:';
$GLOBALS['TL_LANG']['tl_rs_settings']['info']['usage_title'] = 'Title:';
$GLOBALS['TL_LANG']['tl_rs_settings']['info']['usage_module_title'] = 'Module Name:';

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_rs_settings']['title_legend']                  = 'Title';
$GLOBALS['TL_LANG']['tl_rs_settings']['legend']['demo']                = 'DEMO<span style="font-weight: normal; float:right;">restricted functionaliyt (150 characters, audio-pre-roll)</span>';
$GLOBALS['TL_LANG']['tl_rs_settings']['legend']['customer_id']         = 'Licensed with Customer ID';
$GLOBALS['TL_LANG']['tl_rs_settings']['legend']['customer_id_missing'] = 'Customer ID missing !';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_rs_settings']['new']    = array('New Language-Configuration', 'Create new ReadSpeaker language-configuration [language, license, domain, note]');
$GLOBALS['TL_LANG']['tl_rs_settings']['show']   = array('Details', 'Zeige Details von Lnaguage-Configuration ID %s');
$GLOBALS['TL_LANG']['tl_rs_settings']['edit']   = array('Edit ', 'edit lnaguage-configuration ID %s');
$GLOBALS['TL_LANG']['tl_rs_settings']['cut']    = array('Move ', 'move lnaguage-configuration ID %s');
$GLOBALS['TL_LANG']['tl_rs_settings']['copy']   = array('Copy ', 'copy lnaguage-configuration ID %s');
$GLOBALS['TL_LANG']['tl_rs_settings']['delete'] = array('Delete ', 'delete lnaguage-configuration ID %s');
