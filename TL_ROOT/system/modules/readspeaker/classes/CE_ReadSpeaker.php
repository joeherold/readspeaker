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
 * Class CE_ReadSpeaker
 *
 * @copyright  webpixels Johannes Pichler 2013
 * @author     Johannes Pichler
 * @package    Devtools
 */
class CE_ReadSpeaker extends \ContentElement {

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_readspeaker';

    /**
     * Generate the module
     */
    public function generate() {


        if (TL_MODE == 'BE') {


            $objTemplate           = new \BackendTemplate('be_wildcard');
            $objTemplate->wildcard = sprintf('<style> %s </style>', '.rsbtn{position:relative;height:26px;margin-bottom:10px;z-index:100;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}.rsfloating{display:none}.rsbtn.rsfloating{display:block}.rsbtn span,.rsbtn a{position:relative;display:block;margin:0;padding:0;text-decoration:none}.rsbtn span,.rsbtn a:focus{border:0}.rsbtn .rsbtn_play{text-decoration:none;font-family:"Lucida Grande","Lucida Sans","Lucida",sans-serif;font-size:12px;font-weight:normal;font-style:normal;line-height:16px;color:#333;position:static;display:inline;margin:auto;padding:inherit;float:left}.rsbtn .rsimg,#rslightbox_logo.rsimg,.rsbtn a.rsimg{background:transparent url(system/modules/readspeaker/assets/player/rs_button.png) no-repeat scroll 0 0}.rsbtn .rspart{position:relative;float:left;height:26px}.rsbtn .rsbtn_left .rsbtn_text{font-family:"Lucida Grande","Lucida Sans","Lucida",sans-serif;font-size:12px;font-weight:normal;font-style:normal;line-height:16px;margin:5px 10px;padding-left:20px;background:transparent url(system/modules/readspeaker/assets/player/icon_16px.gif) no-repeat scroll 0 0}.rsdeferred .rsbtn_left .rsbtn_text span{padding-right:20px;background:transparent url(system/modules/readspeaker/assets/player/rs_loader_anim.gif) no-repeat scroll top right}.rsbtn .rsbtn_right.rsimg,.rsbtn .rsbtn_pause{width:42px;background-position:0 -26px}.rsbtn a:hover .rsbtn_right,.rsbtn.rsfocus .rsbtn_right.rsimg{background-position:-42px -26px}.rsbtn .rsbtn_right.rsimg.rsanim{background:transparent url(system/modules/readspeaker/assets/player/play-anim.gif) no-repeat scroll 0 0}.rsbtn.rsexpanded .rsbtn_right.rsimg{display:none}.rsbtn .rsbtn_pause .rsbtn_btnlabel,.rsbtn .rsbtn_stop .rsbtn_btnlabel,.rsbtn .rsbtn_volume .rsbtn_btnlabel,.rsbtn .rsbtn_settings .rsbtn_btnlabel,.rsbtn .rsbtn_dl .rsbtn_btnlabel,.rsbtn .rsbtn_closer .rsbtn_btnlabel,.rsbtn .rsbtn_powered .rsbtn_btnlabel{display:none}.rsbtn.rsplaying .rsbtn_pause{display:none;background-position:0 -78px}.rsbtn.rsfloating .rsbtn_pause{background-position:0 -412px}.rsbtn.rsexpanded .rsbtn_pause,.rsbtn.rsexpanded.rsplaying .rsbtn_pause{display:block}.rsbtn.rsexpanded.rs-no-touch .rsbtn_pause.rsimg:hover,.rsbtn.rsexpanded.rs-no-touch .rsbtn_pause.rsimg.rsfocus{background-position:-42px -78px}.rsbtn.rsexpanded.rsfloating.rs-no-touch .rsbtn_pause.rsimg:hover,.rsbtn.rsexpanded.rsfloating.rs-no-touch .rsbtn_pause.rsimg.rsfocus{background-position:-42px -412px}.rsbtn.rsexpanded.rsstopped .rsbtn_pause,.rsbtn.rsexpanded.rspaused .rsbtn_pause{background-position:0 -280px}.rsbtn.rsexpanded.rsstopped.rs-no-touch .rsbtn_pause:hover,.rsbtn.rsexpanded.rspaused.rs-no-touch .rsbtn_pause:hover,.rsbtn.rsexpanded.rsstopped.rs-no-touch .rsbtn_pause.rsfocus,.rsbtn.rsexpanded.rspaused.rs-no-touch .rsbtn_pause.rsfocus{background-position:-42px -280px}.rsbtn.rsexpanded.rsfloating.rsstopped .rsbtn_pause,.rsbtn.rsexpanded.rsfloating.rspaused .rsbtn_pause{background-position:0 -386px}.rsbtn.rsexpanded.rsfloating.rsstopped.rs-no-touch .rsbtn_pause:hover,.rsbtn.rsexpanded.rsfloating.rspaused.rs-no-touch .rsbtn_pause:hover,.rsbtn.rsexpanded.rsfloating.rspaused.rs-no-touch .rsbtn_pause.rsfocus{background-position:-42px -386px}.rsbtn .rsbtn_exp.rsimg{display:none;background:0}.rsbtn.rsexpanded .rsbtn_exp{display:block}.rsbtn .rsbtn_stop.rsimg{left:-5px;margin-right:-5px;width:42px;background-position:0 -104px}.rsbtn.rsexpanded.rs-no-touch .rsbtn_stop.rsimg:hover,.rsbtn.rsexpanded.rs-no-touch .rsbtn_stop.rsimg.rsfocus{background-position:-42px -104px}.rsbtn .rsbtn_player.rsimg{position:relative;z-index:120;background-position:0 -130px;background-repeat:repeat-x}.rsbtn .rsbtn_player .rsplaypart{float:left}.rsbtn .rsbtn_progress_container.rsimg{position:relative;width:50px;height:10px;border:1px solid #555;background-repeat:repeat-x;background-position:0 -376px;margin:8px 5px 0 3px}.rsbtn .rsbtn_progress_container .rsbtn_progress_loaded{position:relative;width:1%;height:100%;background-color:#ccc}.rsbtn .rsbtn_progress_container .rsbtn_progress_played.rsimg{position:absolute;top:0;left:0;height:100%;width:1%;background-position:0 -208px}.rsbtn .rsbtn_progress_container .rsbtn_progress_handle.rsimg{position:absolute;left:-11px;top:-7px;width:20px;height:24px;background-position:0 -183px}.rsbtn.rs-no-touch .rsbtn_progress_container .rsbtn_progress_handle.rsimg:hover,.rsbtn.rs-no-touch .rsbtn_progress_container .rsbtn_progress_handle.rsimg.rsfocus{background-position:-20px -183px}.rsbtn.rsstopped .rsbtn_progress_container .rsbtn_progress_handle.rsimg,.rsbtn.rsstopped.rs-no-touch .rsbtn_progress_container .rsbtn_progress_handle.rsimg:hover{opacity:.6;background-position:0 -183px;cursor:default}.rsbtn .rsbtn_progress_container.rsloading{background:transparent url(system/modules/readspeaker/assets/player/timeline-anim.gif) repeat-x scroll 0 0}.rsbtn .rsbtn_volume.rsimg{position:relative;width:20px;height:20px;background-position:0 -218px;margin-top:3px;margin-right:2px}.rsbtn.rs-no-touch .rsbtn_volume.rsimg:hover,.rsbtn.rs-no-touch .rsbtn_volume.rsimg.rsfocus{background-position:-20px -218px}.rsbtn .rsbtn_volume_container.rsimg{position:absolute;height:70px;width:26px;bottom:-65px;left:0;border:0;background-position:0 -306px;display:none;z-index:120}.rsbtn .rsbtn_volume_container.rsimg .rsbtn_volume_slider{border:0;position:absolute;top:15px;left:3px;width:22px;height:40px}.rsbtn .rsbtn_volume_slider .rsbtn_volume_handle.rsimg{position:absolute;top:-7px;left:0;width:20px;height:14px;background-position:-41px -184px}.rsbtn.rs-no-touch .rsbtn_volume_slider .rsbtn_volume_handle.rsimg:hover,.rsbtn.rs-no-touch .rsbtn_volume_slider .rsbtn_volume_handle.rsimg.rsfocus{background-position:-62px -184px}.rsbtn .rsbtn_settings.rsimg,.rsbtn .rsbtn_dl.rsimg{width:20px;height:20px;background-position:0 -238px;margin-top:3px}.rsbtn.rs-no-touch .rsbtn_settings.rsimg:hover,.rsbtn.rs-no-touch .rsbtn_settings.rsimg.rsfocus{background-position:-20px -238px}.rsbtn .rsbtn_dl.rsimg{background-position:0 -258px}.rsbtn.rs-no-touch .rsbtn_dl.rsimg:hover,.rsbtn.rs-no-touch .rsbtn_dl.rsimg.rsfocus{background-position:-20px -258px}.rsbtn .rsbtn_closer.rsimg{width:27px;background-position:0 -156px}.rsbtn.rs-no-touch .rsbtn_closer.rsimg:hover,.rsbtn.rs-no-touch .rsbtn_closer.rsimg.rsfocus{background-position:-27px -156px}.rsbtn.rsfloating .rsbtn_closer.rsimg{width:27px;background-position:-104px -156px}.rsbtn.rsfloating.rs-no-touch .rsbtn_closer.rsimg:hover,.rsbtn.rsfloating.rs-no-touch .rsbtn_closer.rsimg.rsfocus{background-position:-131px -156px}.rsbtn .rsbtn_powered{position:absolute;right:7px;top:27px;height:10px;z-index:110;color:#999;font-family:"Lucida Grande","Lucida Sans","Lucida",sans-serif;font-weight:normal;font-style:normal;line-height:10px;font-size:10px;background:0;cursor:pointer}.rsbtn .rsbtn_powered a,.rsbtn .rsbtn_powered span{font-family:"Lucida Grande","Lucida Sans","Lucida",sans-serif;font-weight:normal;font-style:normal;line-height:10px;font-size:10px;display:inline}.rsbtn .rsbtn_powered .rsbtn_btnlabel{display:inline}.rsbtn .rsbtn_powered .rsbtn_btnlabel a span.rsbtn_label_read{color:#e60}.rsbtn .rsbtn_powered .rsbtn_btnlabel a span.rsbtn_label_speaker{color:#33a}.rsbtn .rsbtn_powered .rsbtn_btnlabel a span.rsbtn_label_icon.rsimg{position:relative;top:1px;width:11px;height:9px;margin-left:2px;padding-right:11px;background-position:-137px -490px}.rsbtn.rs_whitelogo .rsbtn_powered,.rsbtn.rs_whitelogo .rsbtn_powered .rsbtn_btnlabel a span.rsbtn_label_read,.rsbtn.rs_whitelogo .rsbtn_powered .rsbtn_btnlabel a span.rsbtn_label_speaker{color:#fff}.rsbtn.rs_whitelogo .rsbtn_powered .rsbtn_btnlabel a span.rsbtn_label_icon.rsimg{background-position:-285px -490px}.rsbtn.rs_blacklogo .rsbtn_powered,.rsbtn.rs_blacklogo .rsbtn_powered .rsbtn_btnlabel a span.rsbtn_label_read,.rsbtn.rs_blacklogo .rsbtn_powered .rsbtn_btnlabel a span.rsbtn_label_speaker{color:#000}.rsbtn.rs_blacklogo .rsbtn_powered .rsbtn_btnlabel a span.rsbtn_label_icon.rsimg{background-position:-433px -490px}.rsbtn_exp span.rsbtn_status_overlay{position:absolute;z-index:140;top:1px;left:0;width:92%;height:93%;background:#eee;opacity:.9;-ms-filter:"alpha(opacity=90)";filter:alpha(opacity=90)}.rsbtn_exp .rsbtn_status_overlay span.rsbtn_status{position:relative;color:#000;text-align:center;font-size:11px;font-family:Verdana;margin-top:4px}.rsbtn_exp .rsbtn_status_overlay a.rsbtn_nosound{text-decoration:none;cursor:pointer}.rsbtn_exp .rsbtn_status_overlay a.rsbtn_nosound:hover,.rsbtn_exp .rsbtn_status_overlay a.rsbtn_nosound.rsfocus{text-decoration:underline}#rslightbox_contentcontainer{text-align:left}#rslightbox_closer{display:block;position:absolute;top:-21px;right:-21px;width:42px;height:42px;background:transparent url(system/modules/readspeaker/assets/player/rs_button.png) no-repeat scroll 0 -599px;z-index:1002}#rslightbox_closer:hover,#rslightbox_closer.rsfocus{background-position:-42px -599px}#rslightbox_closer .rsbtn_btnlabel{display:none}#rslightbox_content{position:relative;margin:0 10px 10px;border:1px solid #ccc;top:30px}#rslightbox_content iframe{width:100%;height:99%;border:0}#rslightbox_content fieldset{border:0;border-top:1px solid #999;margin-top:10px}#rslightbox_logo.rsimg{position:absolute;top:3px;left:10px;width:134px;height:22px;background-position:0 -499px}#rslightbox_closer{font-family:"Lucida Sans","Lucida Grande",Lucida,Sans-Serif;font-size:12px;line-height:1.3em}#rslightbox_content,#rslightbox_buttons{font-family:"Lucida Grande","Lucida Sans",Lucida,Sans-Serif;font-size:12px;line-height:1.3em;color:#000;background:#fff}#rslightbox_contentcontainer #rslightbox_content form{width:auto;text-align:left}#rslightbox_content .rsform-row{padding:10px;margin-top:10px;background:#eee;border:1px dotted #fff}#rslightbox_content .rsform-row.rsfocus{border:1px dotted #000}#rslightbox_content .rsform-row:first-child,#rslightbox_content .rsform-row-nospace{margin-top:0}#rslightbox_content label{margin-right:20px;display:inline}#rslightbox_content input[type=radio]{margin:0 5px 0 0;width:auto;display:inline;-webkit-appearance:radio}#rslightbox_content .rsform-row select{width:auto}#rslightbox_content ul.rsform-colorlist{list-style:none;padding:0;margin:0}#rslightbox_content ul.rsform-colorlist li{float:left;margin-left:5px;padding:1px}#rslightbox_content ul.rsform-colorlist li:first-child{margin-left:0}#rslightbox_content ul.rsform-colorlist li a{position:relative;display:block;text-decoration:none;color:#000;padding:5px}#rslightbox_content ul.rsform-colorlist li:hover{border:1px solid #ccc;padding:0}#rslightbox_content .dimmed ul.rsform-colorlist li:hover{border-color:#fff}#rslightbox_content .dimmed ul.rsform-colorlist li a{cursor:default}#rslightbox_content ul.rsform-colorlist li.rsform-colorlist-active,#rslightbox_content .dimmed ul.rsform-colorlist li.rsform-colorlist-active{border:1px solid #33a;padding:0}#rslightbox_content ul.rsform-colorlist li a span.rsform-colorlist-box{display:block;position:relative;width:16px;height:16px;border:1px solid #000}#rslightbox_content ul.rsform-colorlist li a.rsform-colorlist-style-underline span.rsform-colorlist-box,#rslightbox_content ul.rsform-colorlist li a.rsform-colorlist-style-none span.rsform-colorlist-box{display:none}#rslightbox_content ul.rsform-colorlist li a span.rsform-colorlist-label{margin-left:4px}#rslightbox_content ul.rsform-colorlist li a.rsform-colorlist-style-underline span.rsform-colorlist-label,#rslightbox_content ul.rsform-colorlist li a.rsform-colorlist-style-none span.rsform-colorlist-label{margin-left:0;font-size:12px;line-height:1.3em}#rslightbox_content ul.rsform-colorlist li a span.rsform-colorlist-label.rsform-colorlist-style-color{position:absolute;display:none}#rslightbox_content div.rsform-colorlist-label,#rslightbox_content .rsform-radio-label{margin-bottom:5px}#rslightbox_content #rsform_wrapper{margin:10px}#rslightbox_content .rsform-info-toggle{background:transparent url(system/modules/readspeaker/assets/player/help.png) no-repeat scroll 0 0;padding-left:16px;padding-bottom:1px;margin-left:10px;cursor:pointer;text-decoration:none}#rslightbox_content .rsform-row.dimmed .rsform-info-toggle{cursor:default}#rslightbox_content .rsform-info-container{display:none;padding:5px;margin-top:5px;background:#ffd;color:#333;border:1px dotted #777}#rslightbox_content .rsform-slider{position:relative;width:80%;height:5px;border:1px solid #555;background-repeat:repeat-x;background-position:0 -521px;margin:10px 20px 20px}#rslightbox_content .rsform-slider-handle{position:absolute;left:-11px;top:-10px;width:22px;height:26px;background-position:-54px -156px;border:0}#rslightbox_content .rsform-slider-handle a{text-decoration:none}#rslightbox_content .slider-label-start,#rslightbox_content .slider-label-end{position:absolute;top:12px;left:-5%}#rslightbox_content .slider-label-end{left:auto;right:-5%}#rslightbox_buttons{margin:0 10px;padding-top:5px}#rsdl_container{background:#fff}#rsdl_container .rsdl_textwrapper{padding:20px}.rspopup{z-index:1000}#rslightbox_buttons{background:#eee;position:absolute;bottom:20px}#rslightbox_buttons a.rsdialog-button{position:relative;padding:5px;border:1px solid #777;border-radius:3px;color:#000;text-decoration:none;background:#ccc;background:-moz-linear-gradient(top,#eee 0,#ccc 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,#eee),color-stop(100%,#ccc));background:-webkit-linear-gradient(top,#eee 0,#ccc 100%);background:-o-linear-gradient(top,#eee 0,#ccc 100%);background:-ms-linear-gradient(top,#eee 0,#ccc 100%);background:linear-gradient(to bottom,#eee 0,#ccc 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#eeeeee",endColorstr="#cccccc",GradientType=0)}#rslightbox_buttons a.rsdialog-button:hover,#rslightbox_buttons a.rsdialog-button:focus{background:#eee;background:-moz-linear-gradient(top,#fff 0,#ddd 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,#fff),color-stop(100%,#ddd));background:-webkit-linear-gradient(top,#fff 0,#ddd 100%);background:-o-linear-gradient(top,#fff 0,#ddd 100%);background:-ms-linear-gradient(top,#fff 0,#ddd 100%);background:linear-gradient(to bottom,#fff 0,#ddd 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#ffffff",endColorstr="#dddddd",GradientType=0)}.rsbtn.rspopup{position:absolute;background:transparent;height:36px;display:none}.rsbtn.rspopup .rspart{height:36px}.rsbtn.rspopup .rsbtn_left{background-position:0 -527px}.rsbtn.rspopup.rscompact .rsbtn_left{width:34px}.rsbtn.rspopup.rscompact .rsbtn_left .rsbtn_text{width:0;overflow:hidden;padding-left:16px;margin-right:0}.rsbtn.rspopup .rsbtn_left .rsbtn_text{margin-top:10px;margin-left:15px;padding-left:20px}.rsbtn.rspopup .rsbtn_right{width:47px;background-position:-99px -26px}.rsbtn.rspopup a:hover .rsbtn_right{background-position:-171px -26px}.rsbtn.rspopup.rscompact .rsbtn_right,.rsbtn.rspopup.rscompact a:hover .rsbtn_right{width:14px;background-position:-132px -26px}.rsbtn.rspopup.rsexpanded .rsbtn_pause{background-position:-99px -73px}.rsbtn.rspopup.rsexpanded.rs-no-touch .rsbtn_pause.rsimg:hover,.rsbtn.rspopup.rsexpanded.rs-no-touch .rsbtn_pause.rsimg.rsfocus{background-position:-171px -73px}.rsbtn.rspopup.rsexpanded.rsstopped .rsbtn_pause,.rsbtn.rspopup.rsexpanded.rspaused .rsbtn_pause{background-position:-397px -26px}.rsbtn.rspopup.rsexpanded.rsstopped.rs-no-touch .rsbtn_pause:hover,.rsbtn.rspopup.rsexpanded.rspaused.rs-no-touch .rsbtn_pause:hover,.rsbtn.rspopup.rsexpanded.rsstopped.rs-no-touch .rsbtn_pause.rsfocus,.rsbtn.rspopup.rsexpanded.rspaused.rs-no-touch .rsbtn_pause.rsfocus{background-position:-397px -73px}.rsbtn.rspopup .rsbtn_stop{background-position:-243px -73px}.rsbtn.rspopup.rs-no-touch .rsbtn_stop.rsimg:hover,.rsbtn.rspopup.rs-no-touch .rsbtn_stop.rsimg.rsfocus{background-position:-318px -73px}.rsbtn.rspopup .rsbtn_player{background-position:0 -563px}.rsbtn.rspopup .rsbtn_progress_container{margin-top:13px}.rsbtn.rspopup .rsbtn_volume,.rsbtn.rspopup .rsbtn_settings,.rsbtn.rspopup .rsbtn_dl{margin-top:8px}.rsbtn.rspopup .rsbtn_volume_container{bottom:-55px}.rsbtn.rspopup .rsbtn_closer{background-position:-173px -156px;width:32px}.rsbtn.rspopup .rsbtn_closer,.rsbtn.rsfloating .rsbtn_closer{background-position:-173px -156px;width:32px}.rsbtn.rspopup .rsbtn_closer.rsimg:hover,.rsbtn.rspopup .rsbtn_closer.rsimg.rsfocus{background-position:-220px -156px}.rsbtn.rspopup .rsbtn_powered{display:none}.dimmed{-ms-filter:"alpha(opacity=50)";filter:alpha(opacity=50);opacity:.5}.hidden{display:none}.rs_accessible_hidden{position:absolute!important;top:-9999px!important;left:-9999px!important}.rsbtn a.rsbtn_abouthelp{background:url(system/modules/readspeaker/assets/player/rs_button.png) no-repeat scroll -84px -386px transparent;height:26px;width:30px;float:left;margin-right:-5px;z-index:101}.rsbtn a.rsbtn_abouthelp:hover{background-position:-115px -386px}.rsbtn a.rsbtn_abouthelp span{display:none}');
            $objTemplate->wildcard .= '<img style="margin-top:10px;margin-right:10px;height:20px; float:right;" src="system/modules/readspeaker/assets/ReadSpeaker_logo.png" >';


            $objTemplate->wildcard .= sprintf('
                                            <div id="readspeaker_content_button_129" class="ce_readspeaker rs_skip rsbtn rs_preserve" style="margin: 0px 10px;">
                                                <span class="rsbtn_play" accesskey="L" title="" >
                                                    <span class="rsbtn_left rsimg rspart">
                                                        <span class="rsbtn_text">
                                                            <span>%s</span>

                                                        </span>
                                                    </span>
                                                    <span class="rsbtn_right rsimg rsplay rspart"></span>
                                                </span>
                                            </div>

                                        ', $this->rs_player_title);

            $dc  = \Contao\Database::getInstance();
            $row = $dc->prepare('SELECT * FROM tl_rs_settings WHERE id = ?')->limit(1)->execute($this->rs_setting)->fetchAssoc();
            $objTemplate->wildcard .= '<div style="padding:5px 10px;">';
            if ($row) {

                if ($row['have_license']) {
                    $objTemplate->wildcard .= '<p class="tl_info">' . $GLOBALS['TL_LANG']['MOD']['readspeaker_settings'][0] . ': ' . 'ID: ' . $row['customer_id'] . ' - ' . $GLOBALS['TL_LANG']['MSC']['rs_language_codes'][$row['language']] . ' ' . ($row['domain'] ? '<span class="tl_green">[' . $row['domain'] . ']</span>' : '') . ' ' . ($row['note'] ? '<span class="tl_blue" >[' . $row['note'] . ']</span>' : '') . '</p>';
                } else {
                    $objTemplate->wildcard .= '<p class="tl_info">' . $GLOBALS['TL_LANG']['MOD']['readspeaker_settings'][0] . ': ' . 'DEMO - ' . $GLOBALS['TL_LANG']['MSC']['rs_language_codes'][$row['language_demo']] . ' ' . ($row['domain'] ? '<span class="tl_green">[' . $row['domain'] . ']</span>' : '') . ' ' . ($row['note'] ? '<span class="tl_blue" >[' . $row['note'] . ']</span>' : '') . '</p>';
                }
            } else {
                $objTemplate->wildcard .= '<p class="tl_error">' . $GLOBALS['TL_LANG']['tl_content']['rs_no_settings'] . '</p>';
            }
            $objTemplate->wildcard .= '</div>';



            $objTemplate->title = $this->headline;
            $objTemplate->id    = $this->id;
            $objTemplate->link  = $this->name;
            $objTemplate->href  = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $objTemplate->parse();
        }
        return parent::generate();
    }

    protected function compile() {


        global $objPage;



        $dc     = \Contao\Database::getInstance();
        $row    = $dc->prepare('SELECT * FROM tl_rs_settings WHERE id = ?')->limit(1)->execute($this->rs_setting)->fetchAssoc();
        $href   = '';
        $readid = "readid_" . ($this->id);
        if ($row) {

            $customerid = '6857';
            $lang       = $row['language_demo'];
            $speed      = $row['speed'];

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
        $this->Template->readid       = $readid;
    }

}
