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
$GLOBALS['TL_LANG']['tl_rs_settings']['have_license']  = array('ReadSpeaker Lizenz vorhanden', 'Bitte geben Sie an, ob Sie eine ReadSpeaker Lizenz haben.');
$GLOBALS['TL_LANG']['tl_rs_settings']['customer_id']   = array('ReadSpeaker Kunden ID', 'Bitte geben Sie hier Ihre Kunden ID an.');
$GLOBALS['TL_LANG']['tl_rs_settings']['docreader_id']  = array('DocReader CID', 'Bitte geben Sie hier Ihre DocReader CID an (wenn vorhanden).');
$GLOBALS['TL_LANG']['tl_rs_settings']['language']      = array('Sprache VOLLVERSION', 'Geben Sie hier an, in welcher Sprache der Text vorgelesen werden soll.');
$GLOBALS['TL_LANG']['tl_rs_settings']['language_demo'] = array('Sprache DEMO', 'Geben Sie hier an, in welcher Sprache der Text vorgelesen werden soll.');
$GLOBALS['TL_LANG']['tl_rs_settings']['domain']        = array('Unter welcher Domain <small>[INFO]</small>', 'Bitte geben Sie hier Ihre freigegebene Domain an.');
$GLOBALS['TL_LANG']['tl_rs_settings']['note']          = array('Notiz <small>[INFO]</small>', 'Hier können Sie eine Notiz angeben.');
$GLOBALS['TL_LANG']['tl_rs_settings']['speed']         = array('Lesegeschwindigkeit', 'Hier können Sie die Lesegeschwindigkeit angeben.');

$GLOBALS['TL_LANG']['tl_rs_settings']['in _use']       = 'Ist %s mal in Verwendung.';
$GLOBALS['TL_LANG']['tl_rs_settings']['do_not_delete'] = 'Kann nicht gelöscht werden: <strong>%s</strong> x in Verwendung';

$GLOBALS['TL_LANG']['tl_rs_settings']['info']['min_one_config'] = '<p class="tl_info">Bitte legen Sie mindestens eine Konfiguration für eine Sprache an.</p>';
$GLOBALS['TL_LANG']['tl_rs_settings']['info']['more_configs']   = '<p class="tl_new">Sie können noch weitere Konfigurationen für Sprachen und Kunden IDs anlegen.</p>';
$GLOBALS['TL_LANG']['tl_rs_settings']['info']['usage'] = 'Verwendung:';
$GLOBALS['TL_LANG']['tl_rs_settings']['info']['usage_content'] = 'Inhaltselemente:';
$GLOBALS['TL_LANG']['tl_rs_settings']['info']['usage_modules'] = 'FE Module:';
$GLOBALS['TL_LANG']['tl_rs_settings']['info']['usage_parent'] = 'Befindet sich in:';
$GLOBALS['TL_LANG']['tl_rs_settings']['info']['usage_title'] = 'Titel:';
$GLOBALS['TL_LANG']['tl_rs_settings']['info']['usage_module_title'] = 'Modulename:';


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_rs_settings']['title_legend']                  = 'Title';
$GLOBALS['TL_LANG']['tl_rs_settings']['legend']['demo']                = 'DEMO<span style="font-weight: normal; float:right;">Eingeschränkter Funktionsumfang (150 Zeichen, Audio-PRE-ROLL)</span>';
$GLOBALS['TL_LANG']['tl_rs_settings']['legend']['customer_id']         = 'Lizensiert mit Kunden ID';
$GLOBALS['TL_LANG']['tl_rs_settings']['legend']['customer_id_missing'] = 'Kunden ID fehlt !';

/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_rs_settings']['new']    = array('Neu Konfiguration', 'Neue ReadSpeaker Konfiguration erstellen [Sprache, Lizenz, Url, Notiz]');
$GLOBALS['TL_LANG']['tl_rs_settings']['show']   = array('Details', 'Zeige Details von Sprachkonfiguration ID %s');
$GLOBALS['TL_LANG']['tl_rs_settings']['edit']   = array('Bearbeiten ', 'Sprachkonfiguration ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_rs_settings']['cut']    = array('Verschieben ', 'Sprachkonfiguration ID %s verschiebe');
$GLOBALS['TL_LANG']['tl_rs_settings']['copy']   = array('Duplizieren ', 'Sprachkonfiguration ID %s dupliziere');
$GLOBALS['TL_LANG']['tl_rs_settings']['delete'] = array('Löschen ', 'Sprachkonfiguration ID %s löschen');
