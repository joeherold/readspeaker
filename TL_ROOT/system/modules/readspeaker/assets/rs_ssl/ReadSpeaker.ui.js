ReadSpeaker.ui=function(){var b=null,c=[],j=[],r=!1,m=function(){rspkr.log("[rspkr.ui] Attempting to add click events.");var a=$rs.get("."+rspkr.ui.rsbtnClass+" a.rsbtn_play"),b=null;$rs.isArray(a)||(a=[a]);for(var t=0,h=a.length;t<h;t++)if($rs.unregEvent(a[t],"click",ReadSpeakerDefer.clickhandler),b=a[t]?$rs.getAttr(a[t],"data-rsevent-id"):"_bogus_",rspkr.l.f.eq.store[b]&&rspkr.l.f.eq.store[b].click)rspkr.log("[rspkr.ui] Click event already existed on "+a[t],2);else{$rs.regEvent(a[t],"click",function(h){window.readpage(this);
if(h=h.originalEvent)h.cancelBubble=!0,h.preventDefault&&h.preventDefault(),h.stopPropagation&&h.stopPropagation(),h.returnValue=!1;return!1});rspkr.ui.addFocusHandler(a[t],!0,a[t].parentNode);if(-1!==a[t].getAttribute("href").search(/readclass=/))b=a[t].getAttribute("href").match(/readclass=[^&]+/gi)[0].replace("readclass=",""),p().Restore.Storage.readClass.push(b);else if(-1!==a[t].getAttribute("href").search(/readid=/)){for(var b=[],f=a[t].getAttribute("href").match(/readid=[^&]+/gi)[0].replace("readid=",
"").split(","),c=0;c<f.length;c++)b.push(f[c]);p().Restore.Storage.readId.push(b)}rspkr.log("[rspkr.ui] Added click event to: "+a[t],1)}},i=function(){rspkr.log("[rspkr.ui] Initiating global callbacks");rspkr.ui.rsbtnClass=rspkr.cfg.item("ui.rsbtnClass")||"rsbtn";window.readpage=function(a,b){rspkr.ui.initrun&&rspkr.ui.showPlayer(a,b)};window.rshlexit=function(a){(void 0===a||"false"===a)&&b.stop()};window.rshlinit=p().sync.init;window.rshlsetContent=p().sync.setContent;window.rshlsetId=p().sync.setId;
window.rshlsync=function(a,b){for(var h=a.split(","),f=b.split(","),u=0,c=a.length;u<c;u++)p().sync.execute(h[u],f[u])};var a=rspkr.c.data.browser;/iphone|ipad|ios/i.test(a.OS)?$rs.regEvent(document.body,"touchstart",function(a){rspkr.c.data.setSelectedText(a);return!0}):($rs.regEvent(document.body,"mousedown",function(a){rspkr.ui.setPointerPos(a);return!0}),$rs.regEvent(document.body,"mouseup",function(b){"opera"===a.name.toLowerCase()?setTimeout(function(){rspkr.c.data.setSelectedText(b)},50):rspkr.c.data.setSelectedText(b);
return!0}),$rs.regEvent(window,"mouseup",function(b){"opera"===a.name.toLowerCase()?setTimeout(function(){rspkr.c.data.setSelectedText(b)},50):rspkr.c.data.setSelectedText(b);return!0}),$rs.regEvent(document.body,"keydown",rspkr.ui.setPointerPos),$rs.regEvent(document.body,"keyup",function(a){rspkr.c.data.setSelectedText(a);return!0}))},e=function(){document.removeEventListener?document.removeEventListener("click",window.ReadSpeakerDefer.clickhandler):document.detachEvent&&document.detachEvent("onclick",
window.ReadSpeakerDefer.clickhandler);if(ReadSpeakerDefer.deferred){var a=ReadSpeakerDefer.deferred,b=null;if("a"!=a.tagName.toLowerCase()){for(b=a;"body"!=b.tagName.toLowerCase()&&!(b=b.parentNode,"a"==b.tagName.toLowerCase()););a=b}ReadSpeakerDefer.isRSLink(a)&&(rspkr.log("[rspkr.ui] Activating deferred element: "+a),$rs.removeClass(a.parentNode,"rsdeferred"),rspkr.ui.showPlayer(a));ReadSpeakerDefer.deferred=null}},s=null,g=function(){s&&(rspkr.log("[rspkr.ui.updateFocus] "+s.outerHTML),d(s))},
d=function(a){$rs.focus&&("function"==typeof $rs.focus&&a)&&$rs.focus(a)},n=function(b){if("iconon"==rspkr.st.get("hlicon")&&!r){var c=j.push(new a)-1;j[c].id=c;j[c].show(b);r=!0}},k=function(){"iconon"==rspkr.st.get("hlicon")&&r&&(j.pop().hide(),r=!1)},a=function(){var a=0,b=0,c=null,h=52,f=null,q=null,d=null,e=function(a){a=a||c;$rs.addClass(a,rspkr.ui.rsbtnClass+" rspopup");rspkr.cfg.item("general.useCompactPopupButton")&&$rs.addClass(a,"rscompact")},l=function(a){$rs.unregEvent(c,"mouseout",p);
window.clearTimeout(f);var h;h=c.clientWidth+10;var b,u;q=rspkr.ui.showPlayer(d,c,!0);b=q.getWidth();u=parseInt($rs.offset(c).left);rspkr.ui.viewport.width+$rs.scrollLeft(document)-u<b&&(h=parseInt($rs.css(c,"left"))-(b-(h-10)),$rs.css(c,"left",h+"px"));r=!1;$rs.unregEvent(d,"click",l);$rs.regEvent(d,"click",q.restart);a.originalEvent&&a.originalEvent.preventDefault&&a.originalEvent.preventDefault();return a.originalEvent.returnValue=!1},p=function(){f||(f=window.setTimeout(function(){i()},rspkr.cfg.item("general.popupCloseTime")||
2E3))},g=function(){f&&(window.clearTimeout(f),f=null)},n=function(a,b){var f=$rs.offset(document.body);$rs.css(c,{top:b-f.top+"px",left:a-f.left+"px",width:h+"px"})},i=function(){$rs.css(c,{display:"none",top:0,left:0});g();j.splice(null,1);r=!1;c.parentElement.removeChild(c)},k=rspkr.c.findFirstRSButton(),c=document.createElement("div");c.id=rspkr.getID();c.innerHTML=rspkr.cfg.item("ui.popupbutton").join("");e();d=$rs.findIn(c,"a.rsbtn_play");d.href=k?k.href:null;k||(d.href=rspkr.cfg.item("general.popupHref"));
var k=d.href.match(/lang=([^&;]*)/i).pop(),m=$rs.findIn($rs.get(c),"a.rsbtn_play span.rsbtn_text span");m&&(m.textContent=m.innerText=rspkr.cfg.getPhrase("listen",k,"en_us"));$rs.setAttr(d,"title",rspkr.cfg.getPhrase("listentoselectedtext",k,"en_us"));$rs.regEvent(d,"click",l);document.body.appendChild(c);return{setPos:n,show:function(f){g(f);if(f&&"none"==$rs.css(c,"display")){var d=c.cloneNode(!0);d.id=rspkr.getID();$rs.css(d,{display:"block",position:"absolute",top:0,left:0});document.body.appendChild(d);
h=$rs.outerWidth(d)+3;document.body.removeChild(d);d=f.pageX;f=f.pageY;b=f>rspkr.ui.pointerY?f-$rs.scrollTop(document)+36>rspkr.ui.viewport.height-46?f-56:f+20:10>f-$rs.scrollTop(document)-56?f+20:f-56;a=10>d-$rs.scrollLeft(document)?d+10:d-$rs.scrollLeft(document)>rspkr.ui.viewport.width-(h+10)?rspkr.ui.viewport.width+$rs.scrollLeft(document)-(h+10):d+0;n(a,b)}$rs.regEvent(c,"mouseout",p);$rs.regEvent(c,"mouseover",g);p(null);e();$rs.css(c,"display","block")},hide:i,id:null}},q={update:function(a,
c,d){"hlspeed"===a&&c!==d&&(a=a.replace("hl",""),rspkr.c.converter[a]&&"function"==typeof rspkr.c.converter[a]&&(c=rspkr.c.converter[a](c)),rspkr.c.data[a]=c,b.stop(),rspkr.pl.releaseAdapter())}},l=function(a,b,c,h,f,d){$rs.css(a,"background-color","rgb("+b+","+c+","+h+")");h<f?(h+=10,window.setTimeout(function(){l(a,b,c,h,f,d)},50)):d&&"function"===typeof d&&d.apply(a,[])},p=function(){return rspkr.XP?rspkr.XP:rspkr.HL};return{meta:{revision:"1618"},initrun:!1,init:function(){evt=rspkr.Common.addEvent;
ui=rspkr.ui;evt("onAfterModsLoaded",i);evt("onReady",m);evt("onReady",e);evt("onSelectedText",n);evt("onDeselectedText",k);evt("onSettingsChanged",q.update);evt("onAfterSyncInit",g);this.initrun=!0;rspkr.Common.dispatchEvent("onUIInitialized");rspkr.log("[rspkr.ui] Initialized!")},addFocusHandler:function(a,b,c){var h=b,f=c,f=f||a;void 0===h&&(h=!0);$rs.focusIn&&"function"==typeof $rs.focusIn&&($rs.focusIn(a,function(){$rs.addClass(f,"rsfocus");!0===h&&(s=a);rspkr.Common.dispatchEvent("onFocusIn",
window,[a,f])}),$rs.focusOut(a,function(){$rs.removeClass(f,"rsfocus");rspkr.Common.dispatchEvent("onFocusOut",window,[a,f])}))},focus:function(a){d(a)},updateFocus:function(){g()},showOverlay:function(a,c){var d=a,h;h=c||b.getContainer();var f=$rs.findIn(h,".rsbtn_status");0===f.length&&(f=document.createElement("span"),f.className="rsbtn_status_overlay",f.innerHTML='<span class="rsbtn_status"></span>',$rs.findIn(h,".rsbtn_exp").appendChild(f),f=$rs.findIn(h,".rsbtn_status"));"nosound"===d?(d='<a class="rsbtn_nosound">'+
rspkr.cfg.getPhrase("nosound")+"</a>",f.innerHTML=d,(d=$rs.findIn(h,".rsbtn_nosound"))&&$rs.regEvent(d,"click",function(){return b.nosound()})):f.innerHTML=d},settings:q,rsbtnClass:"",addClickEvents:function(){m()},initGlobalCallbacks:function(){i()},showPopupIcon:function(a){n(a)},processDeferred:function(){e()},showPlayer:function(a,d,q){var h;rspkr.log("[rspkr.ui.showPlayer]");var q=q||!1,f;if("string"==typeof a)b:{f=$rs.get("a");for(var e=0,l=f.length;e<l;e++)if(f[e].href&&f[e].href==a){f=f[e];
break b}f=!1}else f=a;e=null;rspkr.c.data.setParams("string"==typeof a?a:f.href);d&&!q?(e=$rs.get(d),$rs.addClass(e,rspkr.ui.rsbtnClass+" rsfloating"),rspkr.basicMode&&($rs.removeClass(e,"rshidden"),$rs.addClass(e,rspkr.ui.rsbtnClass+" rsvisible"))):e=$rs.closest(f,"div."+rspkr.ui.rsbtnClass);if(rspkr.cfg.item("survey.allowed")&&"1"===rspkr.c.cookie.readKey(rspkr.cfg.item("general.cookieName"),"nmbrdisplays"))rspkr.ui.Lightbox.show(rspkr.cfg.item("survey.url"),rspkr.cfg.item("ui.survey.buttons").join(),
!0),h=void 0;else{b:{a=e;for(h in c)if(c[h]&&c[h].getContainer&&c[h].getContainer()==a){h=c[h];break b}h=new rspkr.ui.Player(a);c.push(h)}b&&b!=h&&(b.close(!0),rspkr.c.dispatchEvent("onUIClosePlayer",b.getContainer(),[0<rspkr.c.data.selectedText.length?"textsel":"nosel"]));a=(a=b)?a.getID():null;rspkr.c.dispatchEvent("onUIShowPlayer",window,[a,h.getID()]);h.show();h=b=h}return h},pointerX:0,pointerY:0,setPointerPos:function(a){rspkr.ui.pointerX=a.pageX;rspkr.ui.pointerY=a.pageY;return!0},viewport:{width:$rs.width(window),
height:$rs.height(window)},popups:j,hl:function(a,b){window.setTimeout(function(){l(a,255,255,100,255,b)},200)},scroll:{INTERVAL:null,STEPS:25,scrollToElm:function(a){$rs.isVisible(a)&&this.initScroll(a)},scrollToAnchor:function(a){for(var b=$rs.get("a"),c=null,h=0;h<b.length;h++){var f=b[h];if(f.name&&f.name==a){c=f;break}}this.initScroll(c)},initScroll:function(a){if(a){for(var b=a.offsetTop,c=a;c.offsetParent&&c.offsetParent!=document.body;)c=c.offsetParent,b+=c.offsetTop;b-=50;clearInterval(rspkr.u.scroll.INTERVAL);
var c=rspkr.u.scroll.getCurrentYPos(),h=parseInt((b-c)/rspkr.u.scroll.STEPS);rspkr.u.scroll.INTERVAL=setInterval(function(){rspkr.u.scroll.scrollWindow(h,b,a)},10)}else document.location.hash=a},getCurrentYPos:function(){return document.body&&document.body.scrollTop?document.body.scrollTop:document.documentElement&&document.documentElement.scrollTop?document.documentElement.scrollTop:window.pageYOffset?window.pageYOffset:0},scrollWindow:function(a,b,c){var h=rspkr.u.scroll.getCurrentYPos(),f=h<b;
window.scrollTo(0,h+a);a=rspkr.u.scroll.getCurrentYPos();if(f!=a<b||h==a)window.scrollTo(0,b),clearInterval(rspkr.u.scroll.INTERVAL),"string"==typeof c&&(location.hash=c)}},activePlayer:b,getActivePlayer:function(){return b}}}();
ReadSpeaker.ui.Slider=function(){var b=this,c={handleClass:"",width:0,height:0,left:0,top:0,steps:-1,stepsize:-1,dir:"h",initval:-1,drop:null,start:null,dragging:null,click:null,labelDragHandle:"",labelStart:"",labelEnd:""},j={rsid:void 0,parent:void 0,ref:void 0},r=5,m=void 0,i=void 0,e=void 0,s=void 0,g=void 0,d=void 0,n=void 0,k=!1;this.initElement=function(a){if(!k){"string"==typeof a&&(a=document.getElementById(a));a.innerHTML+='<a href="javascript:void(0);" role="slider" class="keyLink" style="display:block; border:0;">&nbsp;</a>';
var b=a.getElementsByTagName("a"),b=b[b.length-1],d=-1<c.steps?c.steps:100;b.relatedElement=a;$rs.setAttr(b,"title",c.labelDragHandle);$rs.setAttr(b,"aria-label",c.labelDragHandle);$rs.setAttr(b,"aria-orientation","h"==c.dir?"horizontal":"vertical");$rs.setAttr(b,"aria-valuemin",0);$rs.setAttr(b,"aria-valuemax",d);$rs.setAttr(b,"aria-valuenow",c.initval||0);$rs.regEvent(a,"mousedown",this.startDragMouse);$rs.regEvent(b,"keyup",this.startDragKeys);$rs.regEvent(b,"dragstart",function(a){a.originalEvent&&
a.originalEvent.preventDefault&&a.originalEvent.preventDefault();return a.originalEvent.returnValue=!1});$rs.regEvent(a,"touchstart",this.touchStart);$rs.regEvent(j.parent,"mousedown",this.mouseClick)}};this.mouseClick=function(a){if(!k&&!$rs.hasClass(j.ref,"dragged")){var d=b.findPos(a.target),l=a.clientX-(d.left-c.left),a=a.clientY-(d.top-c.top);e=d.left;s=d.top;d=b.getCurrentVal({left:l,top:a});"function"==typeof c.click&&c.click(d,j);return!1}};this.findPos=function(a){var b=curTop=0;if(a.offsetParent){do b+=
a.offsetLeft,curTop+=a.offsetTop;while(a=a.offsetParent);return{left:b,top:curTop}}};this.startDragMouse=function(a){rspkr.log("[rspkr.ui.Slider] startDragMouse");if(!k){b.startDrag(this);var c=a||window.event;m=c.clientX;i=c.clientY;$rs.regEvent(document.body,"mousemove",b.dragMouse);$rs.regEvent(document.body,"mouseup",b.releaseElement)}a.preventDefault&&a.preventDefault();return!1};this.startDragKeys=function(a){a=a||window.event;rspkr.log("[rspkr.ui.Slider] startDragKeys "+a.keyCode);13==a.keyCode&&
!k&&(b.startDrag(this.relatedElement),g=d=0,$rs.regEvent(document.body,"keydown",b.dragKeys),$rs.regEvent(document.body,"keypress",b.switchKeyEvents),$rs.addClass(this.relatedElement,"rskeycontrolled"));a.preventDefault&&a.preventDefault();return a.returnValue=!1};this.touchStart=function(a){a=a.originalEvent;rspkr.log("[rspkr.ui.Slider] touchStart");k||(b.startDrag(a.target),m=a.touches[0].pageX,i=a.touches[0].pageY,$rs.regEvent(a.target,"touchmove",b.touchMove),$rs.regEvent(a.target,"touchend",
b.releaseElement));return!1};this.startDrag=function(a){rspkr.log("[rspkr.ui.Slider] startDrag");n&&b.releaseElement();e=a.offsetLeft;s=a.offsetTop;n=a;$rs.addClass(n,"dragged");"function"==typeof c.start&&c.start(j)};this.dragMouse=function(a){a=a||window.event;b.setPosition(a.clientX-m,a.clientY-i);b.valueChanged=!0;return!1};this.touchMove=function(a){a=a.originalEvent;a.preventDefault();b.setPosition(a.touches[0].pageX-m,a.touches[0].pageY-i);b.valueChanged=!0;return!1};this.dragKeys=function(a){a=
a||window.event;switch(a.keyCode){case 37:case 63234:b.valueChanged=!0;g-=r;break;case 38:case 63232:b.valueChanged=!0;d-=r;break;case 39:case 63235:b.valueChanged=!0;g+=r;break;case 40:case 63233:b.valueChanged=!0;d+=r;break;case 13:case 27:return b.releaseElement(),!1;case 9:return b.releaseElement(),!0;default:return rspkr.log("[rspkr.ui.Slider] return TRUE"),!0}!0===b.valueChanged&&(rspkr.c.dispatchEvent("onUISliderMove"),b.setPosition(g,d));a.originalEvent&&a.originalEvent.preventDefault&&a.originalEvent.preventDefault();
a.returnValue=!1;rspkr.log("[rspkr.ui.Slider] ready to return!");return!1};this.setPosition=function(a,d){var l,g=!1;l=a;var k=e,i=c.left,m=c.width,h="left";"v"==c.dir&&(l=d,k=s,i=c.top,m=c.height,h="top");l=k+l;-1<c.stepsize&&((l+i)%c.stepsize?l=c.stepsize*Math.ceil(l/c.stepsize)+i:g=!0);l>m+i?l=m+i:l<i&&(l=i);g||(n.style[h]=l+"px","function"==typeof c.dragging&&c.dragging(b.getCurrentVal(),j))};this.switchKeyEvents=function(){$rs.unregEvent(document.body,"keydown",b.dragKeys);$rs.unregEvent(document.body,
"keypress",b.switchKeyEvents);$rs.regEvent(document.body,"keypress",b.dragKeys)};this.releaseElement=function(){rspkr.log("[rspkr.ui.Slider] releaseElement");$rs.unregEvent(document.body,"mousemove",b.dragMouse);$rs.unregEvent(document.body,"mouseup",b.releaseElement);$rs.unregEvent(document.body,"keypress",b.dragKeys);$rs.unregEvent(document.body,"keypress",b.switchKeyEvents);$rs.unregEvent(document.body,"keydown",b.dragKeys);$rs.unregEvent(n,"touchmove",b.touchMove);$rs.unregEvent(n,"touchend",
b.releaseElement);$rs.removeClass(n,"dragged");$rs.removeClass(n,"rskeycontrolled");$rs.removeClass(n,"rsmousecontrolled");var a=b.getCurrentVal();n=null;"function"==typeof c.drop&&!0===b.valueChanged&&c.drop(a,j);return b.valueChanged=!1};this.getCurrentVal=function(a){var b=c.width,d="left",e=c.left;"v"==c.dir&&(b=c.height,d="top",e=c.top);var g=-1<c.steps?c.steps:100,b=-1<c.stepsize?c.stepsize:b/g,a=a?a[d]:$rs.css(j.ref,d).replace(/px/i,"");pos=Math.round(a)-e;a=Math.round(pos/b);"v"==c.dir&&(a=
g-a);rspkr.log("[rspkr.ui.Slider] currentval: "+a);return a};return{init:function(a,d){"string"==typeof a&&(a=document.getElementById(a));if(a){var e=a.id||"data-readspeaker-slider-id-"+Math.floor(2E4*Math.random());a.setAttribute("data-readspeaker-slider-id-","data-readspeaker-slider-parent-"+e);var g={width:function(){return $rs.width(a)},height:function(){return $rs.height(a)}};if("object"==typeof d)for(var i in d)d.hasOwnProperty(i)&&void 0!==c[i]&&(c[i]=d[i]);i=!1;var k;"rsbtn_volume_slider"===
a.className&&("jquery"===rspkr.l.f.currentLib()&&1.5>parseFloat(jQuery.fn.jquery))&&(k=a.parentNode.style.display,a.parentNode.style.display="block",i=!0);c.width=g.width();c.height=g.height();i&&(a.parentNode.style.display=k);-1<c.steps&&(c.stepsize=("h"==c.dir?c.width:c.height)/c.steps);g=document.createElement("span");g.setAttribute("data-readspeaker-slider-id-",e);g.className=c.handleClass||"rsbtn_progress_handle rsimg";a.appendChild(g);j.rsid=e;j.parent=a;j.ref=g;r=-1<c.stepsize?c.stepsize:r;
e=$rs.css(g,"left");null!==e&&(c.left=parseInt(e.replace(/px/i,"")));e=$rs.css(g,"top");null!==e&&(c.top=parseInt(e.replace(/px/i,"")));-1<c.initval&&this.jumpTo(c.initval);c.labelStart&&(e=document.createElement("span"),e.className="slider-label-start",e.innerHTML=c.labelStart,a.appendChild(e));c.labelEnd&&(e=document.createElement("span"),e.className="slider-label-end",e.innerHTML=c.labelEnd,a.appendChild(e));b.initElement(g)}},jumpTo:function(a){if(isNaN(a))return!1;var b=101,d=a;-1<c.steps&&(a=
Math.round(a),b=c.steps+1);if(-1<a&&a<b){var e=c.width,g=c.left,i="left";"v"==c.dir&&(e=c.height,g=c.top,i="top",a=b-1-a);j.ref.style[i]=e/(b-1)*a+g+"px";$rs.setAttr($rs.findIn(j.ref,"a.keyLink"),"aria-valuenow",d)}},getInstance:function(){return j},getContainer:function(){return j.parent},getAttr:function(a){return $rs.getAttr(j.parent,"data-readspeaker-"+a)},setAttr:function(a,b){$rs.setAttr(j.parent,"data-readspeaker-"+a,b)},releaseElement:function(){b.releaseElement()},startDragKeys:function(a,
c){b.startDragKeys.call(a,c)},disabled:function(){if(arguments)k=arguments[0];else return k}}};
ReadSpeaker.ui.Player=function(b){var c=rspkr.getID(),j=this,r=[],m=0,i=!1,e={_play:null,_pause:null,_stop:null,_vol:null,_settings:null,_dl:null,_closer:null,_powered:null,_get:function(a,f){var c,a="_"+a;c=b?this[a]&&0<this[a].length?this[a]:this[a]=$rs.findIn(b,f):null;return c==[]?null:c},play:function(){return this._get("play",".rsbtn_play")},pause:function(){return this._get("pause",".rsbtn_pause")},stop:function(){return this._get("stop",".rsbtn_stop")},vol:function(){return this._get("vol",
".rsbtn_volume")},settings:function(){return this._get("settings",".rsbtn_settings")},dl:function(){return this._get("dl",".rsbtn_dl")},powered:function(){return this._get("powered",".rsbtn_powered")},closer:function(){return this._get("closer",".rsbtn_closer")},nosound:function(){return this._get("nosound",".rsbtn_nosound")},setPlayPause:function(a){rspkr.log("[rspkr.ui.Player.setPlayPause("+a+")]");a=a?$rs.getAttr(this.pause(),"data-rsphrase-play"):$rs.getAttr(this.pause(),"data-rsphrase-pause");
$rs.setAttr(this.pause(),"title",rspkr.c.decodeEntities(a));$rs.findIn(this.pause(),".rsbtn_btnlabel").innerHTML=a}},s=!1,g=[],d={play:function(){rspkr.c.dispatchEvent("onUIBeforePlay");rspkr.log("[rspkr.ui.handlers.play]");g.progress&&g.progress.disabled(!1);d.setStateClass(b,"rsplaying");rspkr.basicMode&&d.setStateClass($rs.findIn(b,".rsbtn_exp"),"rsplaying");$rs.addClass($rs.findIn(b,".rsbtn_progress_container"),"rsloading");e.setPlayPause(!1);rspkr.pl.play();g.progress&&rspkr.c.addEvent("onBeforeSyncInit",
function(){rspkr.pl.getProgress.apply(rspkr.pl,[!0,k,j])});"flash"===rspkr.pl.adapter&&!rspkr.displog.onVolumeAdjusted&&rspkr.pl.setVolume(parseInt(rspkr.st.get("hlvol")||"100"));rspkr.c.dispatchEvent("onUIAfterPlay");rspkr.cfg.execCallback("cb.ui.play",b)},pause:function(){rspkr.log("[rspkr.ui.handlers.pause]");d.setStateClass(b,"rspaused");rspkr.basicMode&&d.setStateClass($rs.findIn(b,".rsbtn_exp"),"rspaused");e.setPlayPause(!0);rspkr.pl.pause();rspkr.pl.getProgress(!1);rspkr.c.dispatchEvent("onUIPause");
rspkr.cfg.execCallback("cb.ui.pause",b);rspkr.log("ReadSpeaker.ui.pause")},stop:function(){rspkr.log("[rspkr.ui.handlers.stop]");g.progress&&g.progress.disabled(!0);d.setStateClass(b,"rsstopped");$rs.removeClass($rs.findIn(b,".rsbtn_progress_container"),"rsloading");rspkr.basicMode&&d.setStateClass($rs.findIn(b,".rsbtn_exp"),"rsstopped");e.setPlayPause(!0);g.progress&&(g.progress.jumpTo(0),g.progress.setAttr("current",0),n(0));rspkr.pl.stop();rspkr.pl.getProgress(!1);rspkr.c.dispatchEvent("onUIStop",
b);rspkr.cfg.execCallback("cb.ui.stop",b);rspkr.log("ReadSpeaker.ui.stop")},setStateClass:function(a,b){a&&($rs.removeClass(a,"rspaused rsstopped rsplaying"),$rs.addClass(a,b))},vol:function(a){var c=$rs.findIn(b,".rsbtn_volume_container"),d=$rs.findIn(b,".rsbtn_volume"),a=a.originalEvent,e=function(a){var b=a.originalEvent,b=$rs.closest(b.srcElement||b.originalTarget,".rsbtn_volume_container");if("none"===$rs.css(c,"display"))return!1;if("click"===a.type){if(void 0===b||$rs.isArray(b)&&!b.length)$rs.css(c,
"display","none"),$rs.unregEvent(document.body,"click",e)}else"keyup"===a.type&&27===a.keyCode&&($rs.css(c,"display","none"),$rs.unregEvent(document.body,"keyup",e))};$rs.css(c,"left",d.offsetLeft+"px");$rs.css(c,"display","none"==$rs.css(c,"display")?"block":"none");"block"===$rs.css(c,"display")&&($rs.regEvent(document.body,"click",e),$rs.regEvent(document.body,"keyup",e));a&&a.stopPropagation&&a.stopPropagation();a.cancelBubble=!0;d=$rs.findIn(c,".keyLink");g.vol.startDragKeys(d,{keyCode:13});
return!1},settings:function(){this.pause();rspkr.ui.Lightbox.show(rspkr.st.getHTML(),rspkr.st.getButtons(),!0,function(a){rspkr.c.dispatchEvent("onSettingsLoaded",window,[]);rspkr.cfg.execCallback("cb.ui.settingsopened",a)})},close:function(a){var a=a||!1,c=rspkr.pl,d=!1;a||rspkr.cfg.execCallback("cb.ui.beforeclose",b);c.hasOwnProperty("getProgress")&&rspkr.pl.getProgress(!1);c.hasOwnProperty("releaseAdapter")&&rspkr.pl.releaseAdapter();g.progress&&(g.progress.jumpTo(0),g.progress.setAttr("current",
0));$rs.removeClass(b,"rsstopped rsplaying rspaused rsexpanded");if(rspkr.basicMode){var i;(i=$rs.findIn(b,".rsbtn_play"))&&$rs.removeClass(i,"rsexpanded")}$rs.hasClass(b,"rsfloating")&&($rs.removeClass(b,rspkr.ui.rsbtnClass),rspkr.basicMode&&($rs.removeClass(b,"rsvisible"),$rs.addClass(b,"rshidden")));e.setPlayPause(!0);$rs.hasClass(b,"rspopup")&&(d=!0,$rs.removeClass(b,"rspopup"),$rs.css(b,"display","none"),b.parentNode.removeChild(b));$rs.css(b,"width","auto");delete rspkr.displog.onVolumeAdjusted;
a||(rspkr.c.dispatchEvent("onUIClosePlayer",b,["userclick"]),rspkr.cfg.execCallback("cb.ui.close",b),rspkr.log("ReadSpeaker.ui.close: "+b));!a&&!1===d&&rspkr.ui.focus($rs.findIn($rs.get(b),".rsbtn_play"))},dl:function(){this.pause();var a=rspkr.c.data.getSaveData("dialog"),b=!1;rspkr.log("[rspkr.ui.handlers.dl] Savelink: "+a);rspkr.u.Lightbox.show(this.getDlDialog(),this.getDlButtons(),!0,function(){var c=$rs.get("#rsdl_button_accept"),d=$rs.get("#rsdl_button_decline");c&&$rs.regEvent(c,"click",function(){rspkr.u.Lightbox.hide();
b="iOS"!==rspkr.c.data.browser.OS&&0<rspkr.c.data.selectedHTML.length?!0:"iOS"!==rspkr.c.data.browser.OS&&!0===rspkr.cfg.item("general.usePost")?!0:!1;if(!0===b){var d=null;if(document.getElementById("dliframe"))d=document.getElementById("dliframe");else{if(document.selection)try{d=document.createElement('<iframe name="dliframe">')}catch(e){d=document.createElement("iframe")}else d=document.createElement("iframe");d.name="dliframe";d.setAttribute("id","dliframe");d.setAttribute("style","display: none; position: absolute;");
d.style.display="none";var g=document.getElementsByTagName("body"),i=null;0<g.length&&(i=g.item(0));if(i)i.appendChild(d);else return}d.src=a;return!1}$rs.setAttr(c,"href",a);return!0});d&&($rs.regEvent(d,"click",rspkr.u.Lightbox.hide),setTimeout(function(){rspkr.ui.focus(d)},200))})},getDlDialog:function(){var a=rspkr.cfg.item("ui.dldialog").join("\n"),b={};b.rsTERMS_OF_USE_HEADINGrs=rspkr.cfg.getPhrase("touheading");b.rsTERMS_OF_USE_BODYrs=rspkr.cfg.getPhrase("toubody");return rspkr.st.r().replaceTokens(a,
b)},getDlButtons:function(){var a=rspkr.cfg.item("ui.dlbuttons").join("\n"),b={};b.rsTERMS_OF_USE_ACCEPTrs=rspkr.cfg.getPhrase("touaccept");b.rsTERMS_OF_USE_DECLINErs=rspkr.cfg.getPhrase("toudecline");return rspkr.st.r().replaceTokens(a,b)},nosound:function(){var a=rspkr.c.data.getSaveData("link");$rs.setAttr(e.nosound(),"href",a);return!0}},n=function(a){var a=100<a?100:a,c=$rs.findIn(b,".rsbtn_progress_played");"object"===typeof c&&$rs.css(c,"width",a+"%");rspkr.cfg.execCallback("cb.ui.progresschanged",
b,[a])},k=function(c){if(c.length){var d=parseInt(c[0]),c=parseInt(c[1]),e=0==c?0:Math.round(100*(d/c)),i=$rs.findIn(b,".rsbtn_current_time"),k=$rs.findIn(b,".rsbtn_total_time"),l,m;s||(g.progress.jumpTo(e),n(e),i&&(i.innerHTML=l=a(d)),k&&(k.innerHTML=m=a(c)),rspkr.cfg.execCallback("cb.ui.timeupdated",b,[l,m]));g.progress.setAttr("current",d);g.progress.setAttr("buffered",c);rspkr.log("[rspkr.player.updateProgress] current time: "+d+" total time: "+c);0<d&&$rs.removeClass($rs.findIn(b,".rsbtn_progress_container"),
"rsloading")}},a=function(a){var a=a/1E3,b=parseInt(a%60),c=parseInt(a/60%60),a=parseInt(a/60/60%60);return(10>a?"0"+a:a.toString())+":"+(10>c?"0"+c:c.toString())+":"+(10>b?"0"+b:b.toString())},q=function(){s=!0},l=function(a){a=a/100*g.progress.getAttr("buffered")/1E3;rspkr.pl.setProgress(a);s=!1},p=function(a){l(a)},u=function(a){a=0>a?0:20*a;g.vol&&g.vol.jumpTo(a/20);rspkr.pl.setVolume(a);rspkr.st.set("hlvol",a);rspkr.cfg.execCallback("cb.ui.volumechanged",b,[a]);return!1},v=function(a,b){rspkr.log("[rspkr.ui.Player] focusIn("+
a.className+", "+b.className+")",5);if("keyLink"===a.className){var c="";$rs.hasClass(b,"volume_handle")?c="vol":$rs.hasClass(b,"progress_handle")&&(c="progress");g[c].startDragKeys(a,{keyCode:13})}},t=function(a,b){rspkr.log("[rspkr.ui.Player] focusOut("+a.className+")",5);if("keyLink"===a.className){var c="";$rs.hasClass(b,"volume_handle")?c="vol":$rs.hasClass(b,"progress_handle")&&(c="progress");g[c].releaseElement();s=!1}};return{init:function(){r.push([this.show,[]])},show:function(){$rs.rsid(b);
b.id=c=b.id||rspkr.getID();ui=rspkr.ui;$rs.hasClass(b,rspkr.ui.rsbtnClass)||$rs.addClass(b,rspkr.ui.rsbtnClass);if(0==$rs.findIn(b,".rsbtn_exp").length){var a=null,f=rspkr.cfg,k=$rs.hasClass(b,"rspopup")?f.item("ui.popupplayer"):f.item("ui.player"),f=rspkr.cfg.getPhrases(rspkr.c.data.getParam("lang")),a=document.createElement("span");a.className="rsbtn_exp rsimg rspart";a.innerHTML+=k.join("\n");b.appendChild(a);"fallback"===rspkr.pl.adapter&&rspkr.ui.showOverlay("nosound",b);if(f){e.pause()&&($rs.setAttr(e.pause(),
"data-rsphrase-pause",f.pause),$rs.setAttr(e.pause(),"data-rsphrase-play",f.play),$rs.setAttr(e.pause(),"title",rspkr.c.decodeEntities(f.pause)));e.stop()&&$rs.setAttr(e.stop(),"title",rspkr.c.decodeEntities(f.stop));e.vol()&&$rs.setAttr(e.vol(),"title",rspkr.c.decodeEntities(f.volume));e.settings()&&$rs.setAttr(e.settings(),"title",rspkr.c.decodeEntities(f.settings));e.dl()&&$rs.setAttr(e.dl(),"title",rspkr.c.decodeEntities(f.download));if(e.powered()){var a=$rs.findIn(e.powered(),".rsbtn_btnlabel"),
k=f.speechenabled.match(/.*href="([^"]*)"/i).pop(),n=document.createElement("p");n.innerHTML=f.speechenabled;n=n.innerText||n.textContent;a&&(a.innerHTML=f.speechenabled);$rs.setAttr(e.powered(),"title",n);$rs.setAttr(e.powered(),"data-readspeaker-href",k);$rs.regEvent(e.powered(),"click",function(){window.open($rs.getAttr(this,"data-readspeaker-href"))})}e.closer()&&$rs.setAttr(e.closer(),"title",rspkr.c.decodeEntities(f.closeplayer))}f=rspkr.c.data.browser;(!/safari/i.test(f.name)||!/iphone|ipad|ios/i.test(f.OS))&&
$rs.addClass(b,"rs-no-touch")}$rs.addClass(b,"rsexpanded");if(rspkr.basicMode){var j;(j=$rs.findIn(b,".rsbtn_play"))&&$rs.addClass(j,"rsexpanded")}if(!i){e.stop()&&($rs.regEvent(e.stop(),"click",function(){d.stop()}),ui.addFocusHandler(e.stop()));e.pause()&&($rs.regEvent(e.pause(),"click",function(){$rs.hasClass(b,"rsplaying")?d.pause():($rs.hasClass(b,"rsstopped")||$rs.hasClass(b,"rspaused"))&&d.play()}),ui.addFocusHandler(e.pause()));e.closer()&&($rs.regEvent(e.closer(),"click",function(){d.close()}),
ui.addFocusHandler(e.closer()));e.vol()&&($rs.regEvent(e.vol(),"click",function(a){d.vol(a)}),ui.addFocusHandler(e.vol()));e.dl()&&($rs.regEvent(e.dl(),"click",function(){return d.dl()}),ui.addFocusHandler(e.dl()));e.settings()&&($rs.regEvent(e.settings(),"click",function(){d.settings()}),ui.addFocusHandler(e.settings()));if($rs.findIn(b,".rsbtn_powered")&&(j=$rs.findIn(b,".rsbtn_powered .rsbtn_btnlabel a")))j.innerHTML='<span class="rsbtn_label_read">Read</span><span class="rsbtn_label_speaker">Speaker</span><span class="rsbtn_label_icon rsimg"></span>';
j=rspkr.cfg;$rs.isArray($rs.findIn($rs.get(b),".rsbtn_progress_container"))||(g.progress=new rspkr.ui.Slider,g.progress.init($rs.findIn($rs.get(b),".rsbtn_progress_container"),{handleClass:j.item("ui.progressHandleClass")||"rsbtn_progress_handle rsimg",dir:j.item("ui.progressDir")||"h",start:q,drop:l,click:p,labelDragHandle:j.getPhrase("sliderseek")}),g.progress.setAttr("current",0),g.progress.setAttr("buffered",0),f=$rs.findIn($rs.get(b),".rsbtn_progress_handle a"),ui.addFocusHandler(f,!1,f.parentNode));
$rs.isArray($rs.findIn($rs.get(b),".rsbtn_volume_slider"))||(f=rspkr.st.get("hlvol")||"100",f=5*(parseInt(f)/100),g.vol=new rspkr.ui.Slider,g.vol.init($rs.findIn(b,".rsbtn_volume_slider"),{handleClass:j.item("ui.volumeHandleClass")||"rsbtn_volume_handle rsimg",dir:j.item("ui.volumeDir")||"v",steps:5,initval:f,drop:u,click:u,labelDragHandle:j.getPhrase("slidervolumedesc")}),f=$rs.findIn($rs.get(b),".rsbtn_volume_handle a"),ui.addFocusHandler(f,!1,f.parentNode));rspkr.Common.addEvent("onFocusIn",v);
rspkr.Common.addEvent("onFocusOut",t);rspkr.cfg.execCallback("cb.ui.open",b);i=!0}g.progress&&"0"!=g.progress.getAttr("current")&&(rspkr.pl.releaseAdapter(),g.progress.setAttr("current",0));"fallback"!==rspkr.pl.adapter&&(d.play(),rspkr.ui.focus(e.pause()));j=(j=b)||b;j=$rs.clone(j,!0,!0);j.id=rspkr.getID();document.body.appendChild(j);$rs.css(j,{position:"absolute",top:"0",left:"0",display:"block",width:"auto"});$rs.css(j,"float","none");$rs.addClass(j,"rsexpanded");f=$rs.outerWidth(j)+3;j.style.display=
"none";document.body.removeChild(j);m=f;isNaN(m)||$rs.css(b,"width",m+(/[Ee]xplorer/.test(ReadSpeaker.c.data.browser.name)?1:0)+"px")},close:function(a){d.close(a)},stop:function(){d.stop()},nosound:function(){return d.nosound()},restart:function(){rspkr.log("[rspkr.ui.restart]");d.stop();window.setTimeout(function(){d.play()},500);return!1},updateProgress:function(a){k(a)},setProgress:function(a){l(a)},getContainer:function(){return b},getID:function(){return c},getWidth:function(){return m}}};
ReadSpeaker.ui.Lightbox=function(){var b=null,c=null,j=null,r=null,m=null,i=null,e,s=function(){$rs.css(i,"display","none");var b=$rs.height(window),c=$rs.height(document),g=parseInt($rs.css(document.documentElement,"width")),a=$rs.width(document),j=$rs.absOffset(document.body),l=0,p=0;isNaN(g)&&(g=$rs.width(window));j.left&&(p=j.left);j.top&&(l=j.top);$rs.css(m,{width:(a>g?a:g)+"px",height:(c>b?c:b)+"px",top:"-"+l+"px",left:"-"+p+"px"});$rs.css(i,"display","block");b=$rs.outerWidth(i);c=$rs.outerHeight(i);
g=$rs.width(window);a=$rs.height(window);c=e+80+50<a?e+80:a-50;i.style.height=c+"px";$rs.get("#rslightbox_content").style.height=c-80+"px";c>a?(i.style.top=$rs.scrollTop(document)+"px",i.style.marginTop="10px"):(i.style.top=a/2+"px",i.style.marginTop=-(c/2-$rs.scrollTop(document))+"px");b>g?(i.style.left=$rs.scrollLeft(document)+"px",i.style.marginLeft="0"):(i.style.left="50%",i.style.marginLeft=-(b/2-$rs.scrollLeft(document))+"px")},g=function(b){27===b.keyCode&&rspkr.ui.Lightbox.hide()};return{init:function(){var d=
rspkr.pub.Config;b=d.item("ui.overlay.overlayStyles");c=d.item("ui.overlay.contentStyles");j=d.item("ui.overlay.contentTemplate");rspkr.log("[rspkr.ui.Lightbox] Heartbeat!")},show:function(d,n,k,a){d=d||"";k=k||!1;m?(m.style.display="",i.style.display=""):(m=document.createElement("div"),m.id="rslightbox_overlay",i=document.createElement("div"),i.id="rslightbox_contentcontainer",i.innerHTML=rspkr.st.r().replaceTokens(j.join("\n"),{rsLIGHTBOX_CLOSE_LABELrs:rspkr.cfg.getPhrase("close")}),$rs.setAttr(m,
"style",b.join(";")),$rs.setAttr(i,"style",c.join(";")),document.body.appendChild(m),document.body.appendChild(i),rspkr.evt("onSettingsLoaded",{func:rspkr.st.r().handlers.changed.addButtonEvents,context:rspkr.st.r().handlers.changed,params:[this]}));var q=$rs.get("rslightbox_closer");rspkr.ui.addFocusHandler(q,!1);$rs.regEvent(q,"click",rspkr.ui.Lightbox.hide);$rs.regEvent(m,"click",rspkr.ui.Lightbox.hide);$rs.regEvent(document.body,"keyup",g);if((q=document.documentElement)&&document.all)q.style.overflowX=
q.style.overflowY="hidden";if(d!=r||k)$rs.get("#rslightbox_content").innerHTML="",$rs.css("#rslightbox_content","height","auto"),/^http/i.test(d)?$rs.findIn("#rslightbox_content","iframe").length||(k=document.createElement("iframe"),k.src=d,k.className="rslightbox-iframe",$rs.get("#rslightbox_content").appendChild(k)):"<"==d.substr(0,1)&&($rs.get("#rslightbox_content").innerHTML=d),$rs.get("#rslightbox_buttons").innerHTML=n,r=d;e=!rspkr.basicMode?$rs.get("#rslightbox_content").clientHeight:$rs.get("#rslightbox_content").scrollHeight;
d=$rs.findIn("#rslightbox_content",".rsform-row");for(k=0;k<d.length;k++){n=$rs.findIn(d[k],"input, a, select");$rs.isArray(n)||(n=[n]);for(q=0;q<n.length;q++)rspkr.ui.addFocusHandler(n[q],!1,d[k])}var l=$rs.findIn("#rslightbox_buttons",".rssettings-button-close");rspkr.ui.addFocusHandler(l,!1);(d=$rs.findIn("#rsform_wrapper",".rssettings-button-gotobottom"))&&!$rs.isArray(d)&&rspkr.ui.addFocusHandler(d,!1);(d=$rs.findIn("#rslightbox_buttons",".rssettings-button-gototop"))&&!$rs.isArray(d)&&rspkr.ui.addFocusHandler(d,
!1);var p=$rs.findIn("#rslightbox_content","input");$rs.isArray(p)&&0<p.length?setTimeout(function(){rspkr.ui.focus(p[0]);rspkr.Common.addEvent("onFocusIn",function(a){a.className&&$rs.hasClass(a,"rssettings-button-gototop")?rspkr.ui.focus(p[0]):a.className&&$rs.hasClass(a,"rssettings-button-gotobottom")&&rspkr.ui.focus(l)})},200):$rs.isArray(p)||setTimeout(function(){rspkr.ui.focus(p)},200);s();$rs.regEvent(window,"resize",s);"function"==typeof a&&a.apply(this,[i])},hide:function(){m.style.display=
"none";i.style.display="none";$rs.unregEvent(window,"resize",s);$rs.unregEvent($rs.get("#rslightbox_closer"),"click",rspkr.ui.Lightbox.hide);$rs.unregEvent(m,"click",rspkr.ui.Lightbox.hide);$rs.unregEvent(document.body,"keyup",g);var b;if((b=document.documentElement)&&document.all)b.style.overflowX=b.style.overflowY="auto";rspkr.ui.updateFocus()}}}();
