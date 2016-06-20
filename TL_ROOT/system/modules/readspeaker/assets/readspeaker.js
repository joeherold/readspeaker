/**
 * trigger a DOM event via script to inform, that ReadSpeaker has changed content of readid and starts reading.
 */

// enable new CustomEvent to IE9 and IE10
(function () {
  function CustomEvent ( event, params ) {
    params = params || { bubbles: false, cancelable: false, detail: undefined };
    var evt = document.createEvent( 'CustomEvent' );
    evt.initCustomEvent( event, params.bubbles, params.cancelable, params.detail );
    return evt;
   };

  CustomEvent.prototype = window.CustomEvent.prototype;

  window.CustomEvent = CustomEvent;
})();

// Bubble an "onRsContentChanged" event to the document
var previous_rs_container = '';
ReadSpeaker.q(
        function() {
    
            ReadSpeaker.Common.addEvent('onAfterContentChange',
                    function() {
                        if (previous_rs_container == '') {
previous_rs_container = ReadSpeaker.Common.data.params.readid;
}
                        var myEvent = new CustomEvent('onRsContentChanged', {
                            bubbles: true,
                            cancelable: true,
                            detail: {
                                container: previous_rs_container
                            }
                        });
                        
                        document.dispatchEvent(myEvent);
previous_rs_container = ReadSpeaker.Common.data.params.readid;
                        
                        

                    }
            )
        }

);
