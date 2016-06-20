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
 * Class RS_Messages
 *
 * @copyright  webpixels Johannes Pichler 2013
 * @author     Johannes Pichler
 * @package    Devtools
 */
class RS_Messages extends \Controller
{
    
    public function addBannerReadSpeakerTop($heading_1 = null, $heading_2 = null){
        return \Message::addRaw($this->renderReadSpeakerTop($heading_1, $heading_2));
    }
    
    public function addBannerNotForgetEndContentElement(){
        return \Message::addRaw('<p class="tl_info">' . $GLOBALS['TL_LANG']['CTE']['rs_content_not_forget_end'] . '</p>');
    }
    
    public function addBannerPossibleDocReaderFileTypes(){
        return \Message::addRaw('<div style="margin:0px -18px 0px -18px; padding:5px 0px; overflow:hidden;"><div style="overflow:hidden;border-bottom: 1px solid #bbb;box-shadow:0px 0px 5px 0px #999; padding:5px 25px; text-align: left; position:relative;">
                <h2 style="margin:3px 0px;">ReadSpeaker docReader:</h2>
                <style>
                .docReaderMessage {margin: 0px; padding:0px;margin-right:25px;float:left;}                
                .docReaderMessage li {list-style:bullet;margin:2px 0px;}
                </style>
                <ul class="docReaderMessage">
                    <li>ePub (.epub)</li>
                    <li>Microsoft Excel (.xls, .xlsx)</li>
                    <li>Microsoft PowerPoint (.pps, .ppt, .pptx)</li>
                    <li>Microsoft Word (.doc, .docx)</li>

                </ul>

                <ul class="docReaderMessage">

                    <li>OpenOffice/OpenDocument Presentation (.odp)</li>
                    <li>OpenOffice/OpenDocument Spreadsheet (.ods)</li>
                    <li>OpenOffice/OpenDocument Text (.odt)</li>
                    <li>Portable Document Format (.pdf)</li>
                </ul>

                </div></div>');
    }
    
    public function renderReadSpeakerTop($heading_1 = null, $heading_2 = null){
        return  '<div style="border-top: 1px solid #bbb; padding:5px 25px;margin:10px -18px 20px -18px; text-align: left; position:relative; height: 50px;background: url(system/modules/readspeaker/assets/RS_BG.png) top left;"><a  style="float:right; margin-top:5px;" href="http://www.readspeaker.com" target="_blank" alt="ReadSpeaker"><img src="system/modules/readspeaker/assets/ReadSpeaker_logo.png" alt="ReadSpeaker"></a><h1 style="color:#000;font-size:15px; line-height:25px; vertical-align:base;  margin:0;padding:0;">' . $heading_1 . '</h1><h2 style="font-size:10px; line-height:20px; vertical-align:base;  margin:0;padding:0;">' . $heading_2 . '</h2><div style="position:absolute; top:60px;left:0;right:0;height: 10px;background: url(system/modules/readspeaker/assets/topmenu-glow.png) top left;"></div></div>';
    }
    
    public function renderBeModulesReadSpeakerTop($heading_1 = null, $heading_2 = null){
        return  '<div style="padding:5px 25px;margin:0; text-align: left; position:relative; height: 50px;background: url(system/modules/readspeaker/assets/RS_BG.png) top left;"><a  style="float:right; margin-top:5px;" href="http://www.readspeaker.com" target="_blank" alt="ReadSpeaker"><img src="system/modules/readspeaker/assets/ReadSpeaker_logo.png" alt="ReadSpeaker"></a><h1 style="color:#000;font-size:15px; line-height:25px; vertical-align:base;  margin:0;padding:0;">' . $heading_1 . '</h1><h2 style="font-size:10px; line-height:20px; vertical-align:base;  margin:0;padding:0;">' . $heading_2 . '</h2><div style="position:absolute; top:60px;left:0;right:0;height: 10px;background: url(system/modules/readspeaker/assets/topmenu-glow.png) top left;"></div></div>';
    }
    
    public function renderOpenInNewWindow($url = null) {
        return '<div class="tl_version_panel" style="padding-bottom: 10px;"><a href="'.$url.'"  class="tl_submit" target="_blank" style="display:inline-block;">'.$GLOBALS['TL_LANG']['MSC']['rs_open_in_new_window'].'</a></div>';
    }
    
}



?>
