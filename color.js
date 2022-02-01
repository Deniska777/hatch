$(window).on('load', function () {
    if(Cookies.get('theme') == 'night'){
        changeCSS('/files/skin.css', '/night.css');
	Cookies('theme', 'night');
	
	$('#fnWrapper').html('<div class="custom-control custom-switch"><input autocomplete="off" checked type="checkbox" class="custom-control-input" id="customSwitch1" onchange="theme(day);"><label class="custom-control-label" for="customSwitch1" style="color:transparent">A</label></div>');
document.getElementById('customSwitch1').setAttribute("onchange","theme('day')")
	
}
if(Cookies.get('theme') == 'day'){
$('#night').hide();
$('#day').show();
	$('#fnWrapper').html('<div class="custom-control custom-switch"><input autocomplete="off"  type="checkbox" class="custom-control-input" id="customSwitch1" onchange="theme(day);"><label class="custom-control-label" for="customSwitch1" style="color:transparent">A</label></div>');
document.getElementById('customSwitch1').setAttribute("onchange","theme('night')")
}
if(Cookies.get('theme') != 'night' && Cookies.get('theme') != 'day') { // если куки не является ни тем, ни тем, то возвращаем ее к значению - день
	Cookies('theme', 'day');
}
  });

function delete_cookie ( cookie_name )
{
  var cookie_date = new Date ( );  // Текущая дата и время
  cookie_date.setTime ( cookie_date.getTime() - 1 );
  document.cookie = cookie_name += "=; expires=" + cookie_date.toGMTString();
}
function changeCSS(cssFile_old, cssFile_new) {
    var old_link = document.querySelector('link[href*="' + cssFile_old + '"]');

    if (old_link !== null) {
        var new_link = document.createElement("link");
        new_link.setAttribute("rel", "stylesheet");
        new_link.setAttribute("type", "text/css");
        new_link.setAttribute("href", cssFile_new + '?' + Date.now());

        document.getElementsByTagName("head").item(0).replaceChild(new_link, old_link);
    }
}
function theme(type) {
	delete_cookie('theme');
	if(type == 'night') {
	Cookies('theme', 'night');
$('#night').show();
$('#day').hide();
changeCSS('/files/skin.css', '/night.css');
	$('#fnWrapper').html('<div class="custom-control custom-switch"><input autocomplete="off" checked type="checkbox" class="custom-control-input" id="customSwitch1" onchange="theme(day);"><label class="custom-control-label" for="customSwitch1" style="color:transparent">A</label></div>');
document.getElementById('customSwitch1').setAttribute("onchange","theme('day')")
	}
	if(type == 'day') {
	    	Cookies('theme', 'day');
$('#night').hide();
$('#day').show();
	$('#fnWrapper').html('<div class="custom-control custom-switch"><input autocomplete="off"  type="checkbox" class="custom-control-input" id="customSwitch1" onchange="theme(day);"><label class="custom-control-label" for="customSwitch1" style="color:transparent">A</label></div>');
document.getElementById('customSwitch1').setAttribute("onchange","theme('night')")
changeCSS('/night.css', '/files/skin.css');
	}
	if(type != 'day' && type != 'night') {
		toastr["error"]("<b>Ошибка!</b><br>Theme is error");
	}
}