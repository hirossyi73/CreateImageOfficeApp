$(function () {
    Office.initialize = function (reason) {
        // Button Event
        $('#button_createImage').on('click', function () {
            // XMLHttpRequest作成
            var oReq = new XMLHttpRequest();
            oReq.open('POST', 'createimage.php', true);
            oReq.responseType = 'arraybuffer';

            oReq.onload = function (ev) {
                var stream = oReq.response;
                // Set Office
                Office.context.document.setSelectedDataAsync(_arrayBufferToBase64(stream),
                {
                    coercionType: Office.CoercionType.Image
                },
                 function (asyncResult) {
                     if (asyncResult.status == "failed") {
                     }
                 });
            };
            
            var params = $.param({
                Mark: $("[name='Mark']:checked").val()
                , FontSize: $('#FontSize').val()
            });
            //XMLHttpRequestでPOST送信するための内容
            oReq.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            oReq.setRequestHeader("Content-length", params.length);
            oReq.setRequestHeader("Connection", "close");

            oReq.send(params);
        });
    };
});


function _arrayBufferToBase64( buffer ) {
    var binary = '';
    var bytes = new Uint8Array( buffer );
    var len = bytes.byteLength;
    for (var i = 0; i < len; i++) {
        binary += String.fromCharCode( bytes[ i ] );
    }
    return window.btoa( binary );
}