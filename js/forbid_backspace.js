document.onkeypress = forbidBackSpace;
document.onkeydown = forbidBackSpace;
function forbidBackSpace( e ) {
	var ev = e || window.event;
	var obj = ev.target || ev.srcElement;
	console.log(obj)
	var t = obj.type || obj.getAttribute( 'type' );
	var vReadOnly = obj.readOnly;
	var vDisabled = obj.disabled;
	vReadOnly = ( vReadOnly == undefined ) ? false : vReadOnly;
	vDisabled = ( vDisabled == undefined ) ? true : vDisabled;
	var flag1 = ev.keyCode == 8 && ( t == "password" || t == "text" || t == "textarea" ) && ( vReadOnly == true || vDisabled == true );
	var flag2 = ev.keyCode == 8 && t != "password" && t != "text" && t != "textarea";
	if ( flag2 || flag1 || ev.keyCode == 13) return false;
}