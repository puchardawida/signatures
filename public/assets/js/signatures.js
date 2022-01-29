function select(id) {
    var $temp = $("<input>");
    $temp.val(window.getSelection().selectAllChildren(document.getElementById(id))).select();
    document.execCommand("copy");
    $temp.remove();
}
$("#download-signature").on("click", function(){
    select("signature");
    alert("Skopiowano. Postępuj dalej zgodnie z instrukcją.");
});

$("#download-html-code").on('click', function(){
    var $temp = $("<input>");
    $("#sign").append($temp);
    $signature = $("#signature").html();	  
    $temp.val('<html><head><meta charset="UTF-8"></head><body>'+$signature+'</body></html>').select();
    document.execCommand("copy");
    $temp.remove();
    alert("Kod stopki został zapisany w schowku.");
});