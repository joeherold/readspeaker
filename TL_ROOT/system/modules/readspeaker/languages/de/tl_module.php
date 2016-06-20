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
$GLOBALS['TL_LANG']['tl_module']['rs_setting']            = array('ReadSpeaker Sprachkonfiguration wählen', 'Bitte wählen Sie eine der zuvor erstellen Konfigurationen.');
$GLOBALS['TL_LANG']['tl_module']['rs_readid']             = array('Layout-Bereiches, der vorgelesen werden soll', 'Zum Beispiel <strong>main</strong> oder <strong>left</strong> ... ');
$GLOBALS['TL_LANG']['tl_module']['language']              = array('Sprache', 'Geben Sie hier an, in welcher Sprache der Text vorgelesen werden soll.');
$GLOBALS['TL_LANG']['tl_module']['language_demo']         = array('Sprache', 'Geben Sie hier an, in welcher Sprache der Text vorgelesen werden soll.');
$GLOBALS['TL_LANG']['tl_module']['domain']                = array('Unter welcher Domain <sup><small>[INFO]</small></sup>', 'Bitte geben Sie hier Ihre freigegebene Domain an.');
$GLOBALS['TL_LANG']['tl_module']['note']                  = array('Notiz <sup><small>[INFO]</small></sup>', 'Hier können Sie eine Notiz angeben.');
$GLOBALS['TL_LANG']['tl_module']['speed']                 = array('Lesegeschwindigkeit', 'Hier können Sie die Lesegeschwindigkeit angeben.');
$GLOBALS['TL_LANG']['tl_module']['rs_player_title']       = array('Titel der Vorlese-Schaltfläche', 'Geben Sie hier den Titel der Vorlese-Schaltfläch ein');
$GLOBALS['TL_LANG']['tl_module']['rs_inColumn']['header'] = 'Kopfzeile';
$GLOBALS['TL_LANG']['tl_module']['rs_inColumn']['left']   = 'Linke Spalte';
$GLOBALS['TL_LANG']['tl_module']['rs_inColumn']['main']   = 'Hauptspalte';
$GLOBALS['TL_LANG']['tl_module']['rs_inColumn']['right']  = 'Rechte Spalte';
$GLOBALS['TL_LANG']['tl_module']['rs_inColumn']['footer'] = 'Fußzeile';


/**
 * Messages
 */
$GLOBALS['TL_LANG']['tl_module']['error']['error_no_settings'] = '<p class="tl_error">Bitte erstellen Sie zuvor eine <strong><a href="contao/main.php?do=readspeaker_settings&amp;act=create&amp;rt=%s&amp;ref=%s"><span class="tl_red"> Sprachkonfiguration</span> <img src="system/modules/readspeaker/assets/languages.gif" title="" ></a></strong></p>';


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_module']['readspeaker_legend'] = 'Readspeaker Player Einstellungen';

