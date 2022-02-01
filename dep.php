<?php

$domen = $_SERVER["HTTP_X_FORWARDED_PROTO"].'://'.$_SERVER["HTTP_HOST"];
$publicKey = "48e7qUxn9T7RyYE1MVZswX1FRSbE6iyCj2gCRwwF3Dnh5XrasNTx3BGPiMsyXQFNKQhvukniQG8RTVhYm3iP6yWB3nTkcE4K2ZcqXNUzAXCBr9PrVoRaGMDiiaHR8BoerCdrf9vD8c6RuGhTDgkjBWSPhGCsehTd2UKoxmnFT2Zs1dbrdzVwe1hkhXnsM";

require("inc/site_config.php");
session_start();
$site_access = $_GET['access'];

$refer = $_GET['i'];
if($refer != '') {
  $_SESSION['ref'] = $refer;
  header('Location: /');
}
$sid = $_SESSION['hash'];

$selecter1 = "SELECT * FROM kot_user WHERE hash = '$sid'";
         $result4 = mysql_query($selecter1);
         $row = mysql_fetch_array($result4);
		 if($row)
		{
$img = $row['img'];	
          $login = $row['login'];
          $pass = $row['pass'];
          $balance = $row['balance'];
          $id = $row['id'];
          $social_link = $row['social'];
          $is_admin = $row['admin'];
          $is_ban = $row['ban'];
        }
if($social_link == '') {
  $social_link = "Не привязан";
}
$sql_select33 = "SELECT SUM(suma) FROM kot_payments WHERE user_id='$id'";
$result33 = mysql_query($sql_select33);
$row = mysql_fetch_array($result33);
if($row)
{	
$deps = $row['SUM(suma)'];
}
if ($deps > 200){
$st = '<div style="color:red;">[V.I.P]</div>';
}
if ($deps > 500){
$st = '<div style="color:red;">[PREMIUM]</div>';
}
if ($deps > 800){
$st = '<div style="color:red;">[PRO]</div>';
}

$login = "$login $st";
$select_deps = "SELECT * FROM kot_payments WHERE user_id = '$id' ORDER BY id DESC";
$result_deps = mysql_query($select_deps);
$select_refs = "SELECT * FROM kot_user WHERE ref_id = '$id'";
$result_ref = mysql_query($select_refs);
$sql_select222 = "SELECT * FROM kot_withdraws WHERE user_id = '$id' ORDER BY id DESC";
$result2 = mysql_query($sql_select222);
$img = substr($login, 0, 2);
$img = strtoupper($img);// аватарка 
//(не трогать)
//$img = '<img src='.$img.'>';

if($is_ban == 1) {
  header('Location: /ban');
} 
if($_SESSION['login'] != 1) {
  header('Location: /login');
}
if($_SESSION['login'] == 1) {
if($login == '' || $pass == '') {
  header('Location: /complete');
}
}
?>
<head>
<html class=js lang=ru>
<meta content="text/html; charset=UTF-8"http-equiv=Content-Type>

<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta content="Cabura"name=author>
<meta content="width=device-width,initial-scale=1,shrink-to-fit=no"name=viewport>
<title>Cabura.dog - развлечения и полноценный заработок ⚡</title>
<meta name="description" content="Cabura - бонус. кабура 100руб в день, кобура бонус при регистрации. Выплаты за 24 часа на любую платежную систему.">
<meta name="keywords" content="cabura кабура кобура нвути play2x hrust winado 1xbet тактики бонус Casino заработок халява деньги казино ставки nvuti">
<link href="favicon.png" rel="shortcut icon" type=image/x-icon>
<link href="favicon.png" rel="apple-touch-icon">

<meta property="og:description" content="Cabura - бонус. кабура 100руб в день, кобура бонус при регистрации. Выплаты за 24 часа на любую платежную систему.">
<meta property="og:image" content="https://cabura.dog/img/cabura.jpg">
<meta property="og:url" content="https://cabura.dog">
<meta name="twitter:card" content="favicon.png">
<meta name="application-name" content="Cabura">
<link rel="manifest" href="manifest.json">

<meta content=4ca61471e0965450 name=yandex-verification>
<meta content=d_eBzFu7pGPOmeS70Otia4ahZpDdU69hGvRP8dd62NE name=google-site-verification>
<meta content=notranslate name=google>
<meta content=nositelinkssearchbox name=google>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(62223148, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/62223148" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<link href="/files/all.css" rel="stylesheet">
<link href="/files/ionicons.css" rel="stylesheet">
<link href="/files/jqvmap.css" rel="stylesheet">

<link rel="stylesheet" href="/files/dfg_002.css">
<link rel="stylesheet" href="/files/dfg.css">
<link id="dfMode" rel="stylesheet" href="/files/skin.css">
<script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/61bII03-TtCmSUR7dw9MJF9q/recaptcha__ru.js"></script><script src="https://www.google.com/recaptcha/api.js?onload=renderRecaptchas&amp;render=explicit" async="" defer=""></script>
<script>
    window.renderRecaptchas = function() {
        var recaptchas = document.querySelectorAll('.g-recaptcha');
        for (var i = 0; i < recaptchas.length; i++) {
            grecaptcha.render(recaptchas[i], {
                sitekey: recaptchas[i].getAttribute('data-sitekey')
            });
        }
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script>
    $(document).ready(function(){
   if (!isNaN(window.location.pathname.split("/")[2]) && window.location.pathname.split("/")[1] == 'game'){
            $.ajax({
        type: 'POST',
        url: '/action.php',
        data: {
            type: "gameHistory",
            id: window.location.pathname.split("/")[2]
        },
        success: function (data) {
            $("#checkModal").modal("show");
            $("#checkModal .modal-body").html(data);
        }
        });
        }
        
        var conn1 = new WebSocket('wss://a.cabura.com');
				conn1.onmessage = function(e) {
				var kk = JSON.parse(e.data);
				$("#response").prepend(kk.new);
				//$("#oe").html(kk.count);
				$('#response').children().slice(20).remove();
				};
});
    
    
    
</script>

<script src="script.js"></script>
<script src="/files/jquery.js"></script>
<script src="/files/cbrd.js"></script>
<script src="/files/cookie.js"></script>
<script src="/files/bootstrap.js"></script>
<script src="/files/feather.js"></script>
<script src="/files/typehead.js"></script>
<script src="/files/perfect-scrollbar.js"></script>
<script src="/files/jquery_005.js"></script>
<script src="/files/jquery_006.js"></script>
<script src="/files/jquery_003.js"></script>
<script src="/files/Chart.js"></script><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
<script src="/files/dataTables.responsive.min.js"></script>
<script src="/files/responsive.dataTables.min.js"></script>
<script src="/files/dataTables.js"></script>
<script src="/files/jquery_002.js"></script>
<script src="/files/jquery_004.js"></script>
<script src="/files/moment.js"></script>
<script src="/files/daterangepicker.js"></script>
<script src="/files/odometer.js"></script>
<script src="/files/dfg_003.js"></script>
<script src="/files/dfg.js"></script>
<script src="/files/jquery-ui.min.js"></script>
<script src="/files/ion.js"></script>
<style type="text/css">.apexcharts-canvas {
  position: relative;
  user-select: none;
  /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
}


/* scrollbar is not visible by default for legend, hence forcing the visibility */
.apexcharts-canvas ::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 6px;
}

.apexcharts-canvas ::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0, 0, 0, .5);
  box-shadow: 0 0 1px rgba(255, 255, 255, .5);
  -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
}

.apexcharts-canvas.apexcharts-theme-dark {
  background: #343F57;
}

.apexcharts-inner {
  position: relative;
}

.apexcharts-text tspan {
  font-family: inherit;
}

.legend-mouseover-inactive {
  transition: 0.15s ease all;
  opacity: 0.20;
}

.apexcharts-series-collapsed {
  opacity: 0;
}

.apexcharts-tooltip {
  border-radius: 5px;
  box-shadow: 2px 2px 6px -4px #999;
  cursor: default;
  font-size: 14px;
  left: 62px;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  top: 20px;
  overflow: hidden;
  white-space: nowrap;
  z-index: 12;
  transition: 0.15s ease all;
}

.apexcharts-tooltip.apexcharts-theme-light {
  border: 1px solid #e3e3e3;
  background: rgba(255, 255, 255, 0.96);
}

.apexcharts-tooltip.apexcharts-theme-dark {
  color: #fff;
  background: rgba(30, 30, 30, 0.8);
}

.apexcharts-tooltip * {
  font-family: inherit;
}

.apexcharts-tooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-tooltip-title {
  padding: 6px;
  font-size: 15px;
  margin-bottom: 4px;
}

.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
  background: #ECEFF1;
  border-bottom: 1px solid #ddd;
}

.apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
  background: rgba(0, 0, 0, 0.7);
  border-bottom: 1px solid #333;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  display: inline-block;
  font-weight: 600;
  margin-left: 5px;
}

.apexcharts-tooltip-text-z-label:empty,
.apexcharts-tooltip-text-z-value:empty {
  display: none;
}

.apexcharts-tooltip-text-value,
.apexcharts-tooltip-text-z-value {
  font-weight: 600;
}

.apexcharts-tooltip-marker {
  width: 12px;
  height: 12px;
  position: relative;
  top: 0px;
  margin-right: 10px;
  border-radius: 50%;
}

.apexcharts-tooltip-series-group {
  padding: 0 10px;
  display: none;
  text-align: left;
  justify-content: left;
  align-items: center;
}

.apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
  opacity: 1;
}

.apexcharts-tooltip-series-group.apexcharts-active,
.apexcharts-tooltip-series-group:last-child {
  padding-bottom: 4px;
}

.apexcharts-tooltip-series-group-hidden {
  opacity: 0;
  height: 0;
  line-height: 0;
  padding: 0 !important;
}

.apexcharts-tooltip-y-group {
  padding: 6px 0 5px;
}

.apexcharts-tooltip-candlestick {
  padding: 4px 8px;
}

.apexcharts-tooltip-candlestick>div {
  margin: 4px 0;
}

.apexcharts-tooltip-candlestick span.value {
  font-weight: bold;
}

.apexcharts-tooltip-rangebar {
  padding: 5px 8px;
}

.apexcharts-tooltip-rangebar .category {
  font-weight: 600;
  color: #777;
}

.apexcharts-tooltip-rangebar .series-name {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

.apexcharts-xaxistooltip {
  opacity: 0;
  padding: 9px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
  transition: 0.15s ease all;
}

.apexcharts-xaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-xaxistooltip:after,
.apexcharts-xaxistooltip:before {
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-xaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-left: -6px;
}

.apexcharts-xaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-left: -7px;
}

.apexcharts-xaxistooltip-bottom:after,
.apexcharts-xaxistooltip-bottom:before {
  bottom: 100%;
}

.apexcharts-xaxistooltip-top:after,
.apexcharts-xaxistooltip-top:before {
  top: 100%;
}

.apexcharts-xaxistooltip-bottom:after {
  border-bottom-color: #ECEFF1;
}

.apexcharts-xaxistooltip-bottom:before {
  border-bottom-color: #90A4AE;
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top:after {
  border-top-color: #ECEFF1
}

.apexcharts-xaxistooltip-top:before {
  border-top-color: #90A4AE;
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
  border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
  border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-yaxistooltip {
  opacity: 0;
  padding: 4px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
}

.apexcharts-yaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-yaxistooltip:after,
.apexcharts-yaxistooltip:before {
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-yaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-top: -6px;
}

.apexcharts-yaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-top: -7px;
}

.apexcharts-yaxistooltip-left:after,
.apexcharts-yaxistooltip-left:before {
  left: 100%;
}

.apexcharts-yaxistooltip-right:after,
.apexcharts-yaxistooltip-right:before {
  right: 100%;
}

.apexcharts-yaxistooltip-left:after {
  border-left-color: #ECEFF1;
}

.apexcharts-yaxistooltip-left:before {
  border-left-color: #90A4AE;
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right:after {
  border-right-color: #ECEFF1;
}

.apexcharts-yaxistooltip-right:before {
  border-right-color: #90A4AE;
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip.apexcharts-active {
  opacity: 1;
}

.apexcharts-yaxistooltip-hidden {
  display: none;
}

.apexcharts-xcrosshairs,
.apexcharts-ycrosshairs {
  pointer-events: none;
  opacity: 0;
  transition: 0.15s ease all;
}

.apexcharts-xcrosshairs.apexcharts-active,
.apexcharts-ycrosshairs.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-ycrosshairs-hidden {
  opacity: 0;
}

.apexcharts-selection-rect {
  cursor: move;
}

.svg_select_points,
.svg_select_points_rot {
  opacity: 0;
  visibility: hidden;
}

.svg_select_points_l,
.svg_select_points_r {
  cursor: ew-resize;
  opacity: 1;
  visibility: visible;
  fill: #888;
}

.apexcharts-canvas.apexcharts-zoomable .hovering-zoom {
  cursor: crosshair
}

.apexcharts-canvas.apexcharts-zoomable .hovering-pan {
  cursor: move
}

.apexcharts-zoom-icon,
.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon,
.apexcharts-reset-icon,
.apexcharts-pan-icon,
.apexcharts-selection-icon,
.apexcharts-menu-icon,
.apexcharts-toolbar-custom-icon {
  cursor: pointer;
  width: 20px;
  height: 20px;
  line-height: 24px;
  color: #6E8192;
  text-align: center;
}

.apexcharts-zoom-icon svg,
.apexcharts-zoomin-icon svg,
.apexcharts-zoomout-icon svg,
.apexcharts-reset-icon svg,
.apexcharts-menu-icon svg {
  fill: #6E8192;
}

.apexcharts-selection-icon svg {
  fill: #444;
  transform: scale(0.76)
}

.apexcharts-theme-dark .apexcharts-zoom-icon svg,
.apexcharts-theme-dark .apexcharts-zoomin-icon svg,
.apexcharts-theme-dark .apexcharts-zoomout-icon svg,
.apexcharts-theme-dark .apexcharts-reset-icon svg,
.apexcharts-theme-dark .apexcharts-pan-icon svg,
.apexcharts-theme-dark .apexcharts-selection-icon svg,
.apexcharts-theme-dark .apexcharts-menu-icon svg,
.apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
  fill: #f3f4f5;
}

.apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
  fill: #008FFB;
}

.apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
.apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
.apexcharts-theme-light .apexcharts-reset-icon:hover svg,
.apexcharts-theme-light .apexcharts-menu-icon:hover svg {
  fill: #333;
}

.apexcharts-selection-icon,
.apexcharts-menu-icon {
  position: relative;
}

.apexcharts-reset-icon {
  margin-left: 5px;
}

.apexcharts-zoom-icon,
.apexcharts-reset-icon,
.apexcharts-menu-icon {
  transform: scale(0.85);
}

.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon {
  transform: scale(0.7)
}

.apexcharts-zoomout-icon {
  margin-right: 3px;
}

.apexcharts-pan-icon {
  transform: scale(0.62);
  position: relative;
  left: 1px;
  top: 0px;
}

.apexcharts-pan-icon svg {
  fill: #fff;
  stroke: #6E8192;
  stroke-width: 2;
}

.apexcharts-pan-icon.apexcharts-selected svg {
  stroke: #008FFB;
}

.apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
  stroke: #333;
}

.apexcharts-toolbar {
  position: absolute;
  z-index: 11;
  max-width: 176px;
  text-align: right;
  border-radius: 3px;
  padding: 0px 6px 2px 6px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.apexcharts-menu {
  background: #fff;
  position: absolute;
  top: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 3px;
  right: 10px;
  opacity: 0;
  min-width: 110px;
  transition: 0.15s ease all;
  pointer-events: none;
}

.apexcharts-menu.apexcharts-menu-open {
  opacity: 1;
  pointer-events: all;
  transition: 0.15s ease all;
}

.apexcharts-menu-item {
  padding: 6px 7px;
  font-size: 12px;
  cursor: pointer;
}

.apexcharts-theme-light .apexcharts-menu-item:hover {
  background: #eee;
}

.apexcharts-theme-dark .apexcharts-menu {
  background: rgba(0, 0, 0, 0.7);
  color: #fff;
}

@media screen and (min-width: 768px) {
  .apexcharts-canvas:hover .apexcharts-toolbar {
    opacity: 1;
  }
}

.apexcharts-datalabel.apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-pie-label,
.apexcharts-datalabels,
.apexcharts-datalabel,
.apexcharts-datalabel-label,
.apexcharts-datalabel-value {
  cursor: default;
  pointer-events: none;
}

.apexcharts-pie-label-delay {
  opacity: 0;
  animation-name: opaque;
  animation-duration: 0.3s;
  animation-fill-mode: forwards;
  animation-timing-function: ease;
}

.apexcharts-canvas .apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-hide .apexcharts-series-points {
  opacity: 0;
}

.apexcharts-gridline,
.apexcharts-annotation-rect,
.apexcharts-tooltip .apexcharts-marker,
.apexcharts-area-series .apexcharts-area,
.apexcharts-line,
.apexcharts-zoom-rect,
.apexcharts-toolbar svg,
.apexcharts-annotations-rects,
.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-radar-series path,
.apexcharts-radar-series polygon {
  pointer-events: none;
}


/* markers */

.apexcharts-marker {
  transition: 0.15s ease all;
}

@keyframes opaque {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}


/* Resize generated styles */

@keyframes resizeanim {
  from {
    opacity: 0;
  }
  to {
    opacity: 0;
  }
}

.resize-triggers {
  animation: 1ms resizeanim;
  visibility: hidden;
  opacity: 0;
}

.resize-triggers,
.resize-triggers>div,
.contract-trigger:before {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.resize-triggers>div {
  background: #eee;
  overflow: auto;
}

.contract-trigger:before {
  width: 200%;
  height: 200%;
}</style></head>
<body class="page-profile df-roboto" style="font-family: -apple-system, BlinkMacSystemFont, sans-serif!important;">
<div class="navbar navbar-header navbar-header-fixed mob-head" style="position: fixed;top: 0;left: 0;right: 0;z-index: 999;">
<a href="" id="mainMenuOpen" class="burger-menu"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
<line x1="3" y1="12" x2="21" y2="12"></line>
<line x1="3" y1="6" x2="21" y2="6"></line>
<line x1="3" y1="18" x2="21" y2="18"></line>
</svg></a>
<div class="navbar-brand d-md-none" style="width:100px!important">
<a href="/" class="df-logo tx-26 "><?=$sitename;?></a>
</div>
<div class="navbar-right">
<div onclick="window.location.href='/'" class="dropdown dropdown-notification  d-md-none" id="backArr" style="display: none;">
<a class="" data-toggle="dropdown" style="color:#8f9dae">
<svg viewBox="0 0 24 22" width="22" height="25" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
<line x1="19" y1="12" x2="5" y2="12"></line>
<polyline points="12 19 5 12 12 5"></polyline>
</svg>
</a>
</div>
</div>
</div>
<style>

.gameinc.present span, .gameinc:hover span {
    background: #0168fa!important;
    background: linear-gradient(45deg, #1c65c9 0%, #2c80ff 100%)!important;
}


        @media (max-width: 992px) {
        .mg-header {
            margin-top: 55px;
            z-index: 998!important;
        }
        .mg-content {
            margin-top: 90px;
            z-index: 998!important;
        }
     }
    
    </style>
<header class="navbar navbar-header navbar-header-fixed mg-header" style="max-width: 1180px;margin-right: auto;margin-left: auto;position: fixed;top: 0;left: 0;right: 0;z-index: 999;">
<div class="navbar-brand d-none d-sm-flex" style="width:100px!important">
<a href="/" class="df-logo tx-26 "><?=$sitename;?></a>
</div>
<div id="navbarMenu" class="navbar-menu-wrapper">
<div class="navbar-menu-header">
<a href="/" class="df-logo"><?=$sitename;?></a>
<a id="mainMenuClose" href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
<line x1="18" y1="6" x2="6" y2="18"></line>
<line x1="6" y1="6" x2="18" y2="18"></line>
</svg></a>
</div>
<ul class="nav navbar-menu">
<li class="nav-item"><a href="/" class="nav-link"> Главная</a></li>
<li class="nav-item" datait="about"><a href="/about" class="nav-link"> Как играть</a></li>
<li class="nav-item" datait="faq"><a href="/faq" class="nav-link"> FAQ</a></li>
<li class="nav-item" datait="ref"><a href="/ref" class="nav-link"> Рефералы</a></li>
<li class="nav-item" datait="bonus"><a href="/bonus" class="nav-link"> Бонусы</a></li>
<li class="nav-item" datait="support"><a href="/support" class="nav-link"> Контакты</a></li>
</ul>
</div>
<style>
            .new-mes {
                fill: rgba(250, 1, 1, 0.06)!important;
                color: #fa7001eb!important;
            }
            
            .ind-top
            {
            fill: rgba(0, 23, 55, 0.04);
            }
            .ind-top:hover
            {
                fill: rgba(1, 104, 250, 0.2);
                color: #0168fa;
            }
            
            
        
            
        </style>
<div class="navbar-right mg-l-100   d-sm-flex">
<div class="dropdown dropdown-profile ">
<a class="dropdown-link ">
<div class="avatar avatar d-none d-sm-flex"><span class="avatar-initial rounded-circle bg-dark"><?=$img;?></span></div>
<div class=" pd-l-10 " href="#userSettings" data-toggle="modal" style="cursor:pointer">
<span class="d-flex tx-13 tx-color-03 tx-light " style="margin-top: 3px;"><?=$login;?> <img src="https://www.flaticon.com/premium-icon/icons/svg/2071/2071885.svg" class="mg-l-5 mg-t-2 d-none" width="15" height="15"></span>
<h4 id="userBalance" mybalance="0" class="mg-b-3 odometer odometer-auto-theme" style="margin-top: -1px!important; width: max-content;"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value"><?=$balance;?></span></span></span></span></span></div></h4>
</div>
<svg viewBox="0 0 24 24" width="15" height="15" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq122 tx-dark mg-l-4">
<polyline points="6 9 12 15 18 9"></polyline>
</svg>
</a>
</div>
</div>
<div class="d-md-none d-block mg-t-8 mg-l-15">
<a href="/withdraw" class="btn btn-white btn-uppercase bt-mob" style="max-width:150px;cursor:pointer">Вывод</a>
<a href="/dep"  class="btn btn-brand-01 btn-uppercase mg-l-5 bt-mob" style="border-color: #2576ea;background: linear-gradient(45deg, #1c65c9 0%, #2c80ff 100%);">Пополнить</a>
</div>
<div>
<div  style="display:none;"class="d-none d-md-none  dropdown-profile ">
<a class="dropdown-link " href="#userSettings" data-toggle="modal">
<div class="pd-l-15 ">
<span class="d-flex tx-15 tx-color-03 tx-light login-mob" style="margin-top: 3px;"><?=$login;?> <img src="https://www.flaticon.com/premium-icon/icons/svg/2071/2071885.svg" class="mg-l-5 mg-t-4 yt-login d-none" width="15" height="15"></span>
<h4 class="mg-b-3 balance-mob odometer odometer-auto-theme" id="userBalanceMobile" style="margin-top: -3px;"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value"><?=$balance;?></span></span></span></span></span></div></h4>
</div>
<svg viewBox="0 0 24 24" width="12" height="12" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq122 tx-dark mg-l-5">
<polyline points="6 9 12 15 18 9"></polyline>
</svg>
</a>
</div>
</div>
<div class="navbar-right d-none d-sm-flex" style="width:220px!important">
<a href="/withdraw" class="btn btn-white btn-uppercase flex-fill mg-r-10" style="max-width:150px;cursor:pointer">Вывод</a>
<a href="/dep"  class="btn btn-brand-01 btn-uppercase mg-l-5 bt-mob" style="border-color: #2576ea;background: linear-gradient(45deg, #1c65c9 0%, #2c80ff 100%);">Пополнить</a>
</div>
</header>
<div class="content content-fixed mg-content">
<div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
<div class="cont-des d-none mexe-let">
<h1>Cabura | Кабура</h1>
<p>Самые прибыльные и интересные игры <b>Кабура онлайн</b> представлены на данном официальном сайте. </p>
<p>Лучшие возможности для игры на официальном сайте Cabura лицензионные игры, бонусы и быстрые платежные методы для всех игроков.</p>
<h2>Кабура промокод</h2>
<p>Играть на нашем сайте Кабура - просто и прибыльно! </p>
<p>Играть онлайн пользователь может без депозита своих средств в игру <b>Cabura</b> онлайн это значит, что бонусы не требуют обязательного пополнения счета. Мы гарантируем честную игру, большие промокоды и быстрый вывод средств. Участвуйте в чемпионатах и лотереях, забирайте промокоды за активную игру. Все онлайн игры предоставлены на нашем официальном сайте без изменения функционала, каждую игру проверяйте на честность.</p>
<h3>Мобильная версия</h3>
<p>Для игры в Cabura вы можете использовать свой настольный компьютер либо мобильную версию официального сайта для мобильного телефона. Мобильное приложение очень удобно для тех, кто редко бывает дома. </p>
<p>Независимо от того, на каком устройстве вы хотите играть, какую операционную систему вы используете или какой браузер вы предпочитаете - дома или в дороге: все наши онлайн слоты были оптимизированы для настольных ПК, устройств Android, а также для iPhone и iPad.</p>
<h4>Cabura бонус</h4>
<p>Если вы ищете еще больше стимулов, чтобы насладиться на нашем игровом веб-сайте, то у нас есть билет как раз для вас. Приветственный бонус - от 5 монет на лицевой счет мгновенно. Большие промокоды и бонусы от известных ютуберов и блогеров.</p>
<table>
<tbody>
<tr>
<th colspan="2">Особенности Cabura | Кабура</th>
</tr>
<tr>
<td>Начало функционирования</td>
<td>2020</td>
</tr>
<tr>
<td>Платформы и мобильная версия</td>
<td>Desktop, iOS 10+, Android</td>
</tr>
<tr>
<td>Валюты</td>
<td>RUB, USD, EUR</td>
</tr>
<tr>
<td>Минимальный депозит</td>
<td>От 1 руб</td>
</tr>
<tr>
<td>Минимальная выплата</td>
<td>50 руб</td>
</tr>
<tr>
<td>Скорость вывода</td>
<td>до 24 часов</td>
</tr>
<tr>
<td>Способы пополнений</td>
<td>Ecopayz, МТС, Билайн, Мегафон, Теле2, W1, Wire Transfer, Связной, OkPay, Visa, Mastercard</td>
</tr>
<tr>
<td>Способы вывода</td>
<td>Visa, Mastercard, Wire Transfer, Связной, OkPay, Bitcoin, Skrill, Сбербанк.Онлайн, Альфа-клик</td>
</tr>
<tr>
<td>Бонусы</td>
<td>Промокоды и раздачи</td>
</tr>
</tbody>
</table>
</div>
<div class="row ">
<div class="col-sm-6 col-lg-2 mg-t-10">

<div class="align-items-center justify-content-between mg-b-20 d-none d-sm-flex">
<h2 class="tx-uppercase tx-semibold mg-b-0 ch-gm" style="color: #031a61;">Выбор игры</h2>
</div>
<ul class="list-unstyled media-list mg-b-15 d-none d-sm-block">
<li onclick="window.location.href='https://cabura.dog/dice1'" class="media align-items-center mg-t-15 gameinc ">
<div class="avatar"><span class="avatar-initial rounded bg-dark men-gam" style="box-shadow: 0 5px 23px 0 rgba(59, 72, 99, 0.25);"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box">
<path d="M12.89 1.45l8 4A2 2 0 0 1 22 7.24v9.53a2 2 0 0 1-1.11 1.79l-8 4a2 2 0 0 1-1.79 0l-8-4a2 2 0 0 1-1.1-1.8V7.24a2 2 0 0 1 1.11-1.79l8-4a2 2 0 0 1 1.78 0z"></path>
<polyline points="2.32 6.16 12 11 21.68 6.16"></polyline>
<line x1="12" y1="22.76" x2="12" y2="11"></line>
</svg></span></div>
<div class="media-body pd-l-15">
<h6 class="mg-b-2"><a href="https://cabura.dog/dice1" class="link-01 tx-18">Dice</a></h6>
</div>
</li>
<li onclick="window.location.href='https://cabura.dog/mine1'" id="menumines" class="media align-items-center mg-t-15 gameinc ">
<a href="mines">
<div class="avatar"><span class="avatar-initial rounded bg-dark men-gam" style="box-shadow: 0 5px 23px 0 rgba(59, 72, 99, 0.25);"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512" class="iconify tx-22" data-icon="ion-md-grid" data-inline="false"><path d="M409.6 64H102.4C81.3 64 64 81.3 64 102.4v307.2c0 21.1 17.3 38.4 38.4 38.4h307.2c21.1 0 38.4-17.3 38.4-38.4V102.4c0-21.1-17.3-38.4-38.4-38.4zM179.2 409.6h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm115.2 230.4h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm115.2 230.4h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8zm0-115.2h-76.8v-76.8h76.8v76.8z" fill="currentColor"></path></svg></span></div>
<div class="media-body pd-l-15">
<h6 class="mg-b-2"><a href="https://cabura.dog/mine1" class="link-01 tx-18">Mines</a></h6>
</div>
</li>
<li onclick="window.location.href='/coin'" class="media align-items-center mg-t-15 gameinc ">
<div class="avatar"><span class="avatar-initial rounded bg-dark men-gam" style="box-shadow: 0 5px 23px 0 rgba(59, 72, 99, 0.25);">
    <svg width="1em" height="1em"  class="iconify tx-22  "><use xlink:href="#icon-coinflip"><svg fill="currentColor"   id="icon-coinflip" viewBox="0 0 32 32"><path d="M16 0c8.838 0 16 7.164 16 16s-7.162 16-16 16c-8.836 0-16-7.164-16-16s7.164-16 16-16zM20.697 11.539c-1.35-2.626-3.012-4.073-4.68-4.073s-3.33 1.446-4.681 4.073c-1.081 2.103-1.808 4.718-1.808 6.507 0 3.577 2.911 6.487 6.488 6.487s6.487-2.911 6.487-6.488c0-1.788-0.726-4.403-1.808-6.507z"></path></svg></use></svg>
      </span></div>
<div class="media-body pd-l-15">
<h6 class="mg-b-2"><a href="https://cabura.dog/coin" class="link-01 tx-18">Coin</a></h6>
</div>
</li>
<li onclick="window.location.href='/wheel'" class="media align-items-center mg-t-15 gameinc  ">
<div class="avatar"><span class="avatar-initial rounded bg-dark men-gam" style="box-shadow: 0 5px 23px 0 rgba(59, 72, 99, 0.25);">
    <svg width="1em" height="1em"  class="iconify tx-22  "><use xlink:href="#icon-wheel"><svg fill="currentColor"   id="icon-wheel" viewBox="0 0 32 32"><path d="M8.752 6.112c1.556-1.144 3.39-1.932 5.381-2.237v-3.763c-3.019 0.351-5.781 1.542-8.047 3.334l2.666 2.666zM3.875 14.133c0.306-1.991 1.093-3.825 2.237-5.381l-2.666-2.666c-1.792 2.267-2.983 5.028-3.334 8.047h3.763zM28.554 6.086l-2.666 2.666c1.145 1.556 1.932 3.39 2.237 5.382h3.763c-0.351-3.020-1.542-5.781-3.334-8.047zM17.867 3.875c1.991 0.306 3.826 1.093 5.382 2.237l2.666-2.666c-2.267-1.792-5.028-2.983-8.047-3.334v3.763zM28.125 17.867c-0.305 1.991-1.093 3.826-2.237 5.382l2.666 2.666c1.792-2.267 2.983-5.028 3.334-8.047h-3.763zM23.249 25.888c-1.556 1.145-3.39 1.932-5.382 2.237v3.763c3.019-0.351 5.781-1.542 8.047-3.334l-2.666-2.666zM6.112 23.249c-1.144-1.556-1.932-3.39-2.237-5.382h-3.763c0.351 3.019 1.542 5.781 3.334 8.047l2.666-2.666zM14.133 28.125c-1.991-0.305-3.825-1.093-5.382-2.237l-2.666 2.666c2.267 1.792 5.028 2.983 8.047 3.334v-3.763h0.001z"></path></svg></use></svg>
      </span></div>
<div class="media-body pd-l-15">
<h6 class="mg-b-2"><a href="https://cabura.dog/wheel" class="link-01 tx-18">Wheel</a></h6>
</div>
</li>

</ul>
</div>
<div class="col-lg-10 col-xl-10 mg-t-10" id="loadPage" style="height: 100vh; display: none;">
<div class="spinner-border">
<span class="sr-only">Loading...</span>
</div>
</div>
<div style="display: contents;" >
<div class="col-lg-8 col-xl-8 mg-t-10 " style="margin-bottom:500px">
<div class="card">
<div class="card-header pd-t-20 pd-b-0 bd-b-0">
<h4 class="mg-b-5 ">Пополнение баланса</h4>
<p class="tx-13  mg-b-0 tx-light">Выберите платежную систему:</p>
</div>
<div class="card-body pd-20 bd-b pd-b-20">
<div class="row">
<div class="col-12">

<div class="d-none d-sm-flex flex-row justify-content-start">
<div class="bd-gray-500 bd-1 bd wd-150 ht-65 bg-gray-100 btn-deposit d-inline-flex align-items-center justify-content-center" onclick="$('#qiwi').show();$('#fk').hide();$('#depositSystem').val('3'); $('.btn-deposit').removeClass('bd-gray-500 bd-1 bd') ;$(this).addClass('bd-gray-500 bd-1 bd')"><svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="80" viewBox="0 0 29.573537 13.433727" version="1.1">
<g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1" transform="translate(-48.845523,-338.5318)">
<g id="g5493" transform="matrix(0.26458333,0,0,0.26458333,48.943684,337.05093)" style="fill:none">
<path class="qdt" id="path5489" d="m 54.406,34.313 h 1.737 v 3.893 h 1.255 l 2.252,-3.893 h 1.899 l -2.703,4.569 v 0.032 L 61.71,43.9 H 59.747 L 57.43,39.717 H 56.176 V 43.9 h -1.738 v -9.588 h -0.032 z m 11.197,2.542 c 2.09,0 3.796,1.512 3.796,3.603 0,2.124 -1.673,3.604 -3.764,3.604 -2.092,0 -3.765,-1.48 -3.765,-3.604 -0.032,-2.123 1.641,-3.603 3.733,-3.603 z m 5.147,0.16 h 1.641 v 5.406 h 2.156 v -5.405 h 1.64 v 5.405 h 2.156 v -5.405 h 1.641 V 43.9 h -9.17 v -6.885 z m 14.093,-0.16 c 1.962,0 3.056,1.448 3.056,3.25 a 4.8,4.8 0 0 1 -0.064,0.675 h -4.73 c 0.097,1.19 1.03,1.834 2.06,1.834 0.707,0 1.415,-0.322 1.962,-0.74 l 0.676,1.223 c -0.708,0.61 -1.77,0.997 -2.767,0.997 -2.285,0 -3.7,-1.641 -3.7,-3.604 0,-2.155 1.447,-3.635 3.507,-3.635 z m 3.86,5.598 c 0.837,-0.129 1.448,-0.836 1.448,-3.282 v -2.155 h 5.02 V 43.9 h -1.706 v -5.502 h -1.673 v 0.772 c 0,2.992 -0.804,4.73 -3.089,4.794 v -1.512 z m 11.358,-5.598 c 1.962,0 3.056,1.448 3.056,3.25 a 4.8,4.8 0 0 1 -0.064,0.675 h -4.73 c 0.097,1.19 1.03,1.834 2.06,1.834 0.707,0 1.415,-0.322 1.962,-0.74 l 0.676,1.223 c -0.708,0.61 -1.77,0.997 -2.767,0.997 -2.284,0 -3.7,-1.641 -3.7,-3.604 0,-2.155 1.448,-3.635 3.507,-3.635 z m 4.472,0.16 h 1.705 v 2.639 h 0.837 l 1.673,-2.638 h 1.898 l -2.188,3.281 v 0.033 l 2.445,3.57 h -1.994 l -1.802,-2.798 h -0.9 V 43.9 H 104.5 v -6.885 h 0.032 z m -38.93,5.567 c 1.126,0 2.059,-0.869 2.059,-2.156 0,-1.255 -0.933,-2.156 -2.06,-2.156 -1.125,0 -2.026,0.87 -2.026,2.156 0,1.287 0.9,2.156 2.027,2.156 z M 86.162,39.59 c 0,-0.901 -0.612,-1.448 -1.384,-1.448 -0.868,0 -1.512,0.579 -1.673,1.448 z m 15.218,0 c 0,-0.901 -0.611,-1.448 -1.383,-1.448 -0.87,0 -1.513,0.579 -1.674,1.448 z" inkscape:connector-curvature="0" style="fill:#2d3540" />
<path id="path5491" d="M 78.44,13.432 V 29.68 a 0.44,0.44 0 0 1 -0.45,0.45 h -3.314 a 0.44,0.44 0 0 1 -0.45,-0.45 V 13.432 a 0.44,0.44 0 0 1 0.45,-0.45 h 3.314 a 0.44,0.44 0 0 1 0.45,0.45 z m 25.868,-0.45 c 0.129,0 0.29,0.064 0.45,0.193 0.097,0.096 0.097,0.257 0.065,0.386 l -5.47,16.28 a 0.458,0.458 0 0 1 -0.418,0.29 h -2.96 c -0.193,0 -0.354,-0.097 -0.418,-0.29 L 92.37,20.35 89.185,29.84 a 0.458,0.458 0 0 1 -0.418,0.29 h -2.96 c -0.193,0 -0.354,-0.096 -0.418,-0.29 l -5.47,-16.28 c -0.032,-0.128 -0.032,-0.257 0.064,-0.385 0.065,-0.129 0.226,-0.193 0.354,-0.193 h 3.7 c 0.193,0 0.354,0.128 0.419,0.321 l 2.927,9.62 3.218,-9.62 a 0.458,0.458 0 0 1 0.418,-0.29 h 2.606 c 0.193,0 0.354,0.097 0.418,0.29 l 3.218,9.62 2.928,-9.62 a 0.444,0.444 0 0 1 0.418,-0.321 h 3.7 z m 5.598,0 c 0.225,0 0.418,0.193 0.45,0.45 V 29.68 a 0.44,0.44 0 0 1 -0.45,0.45 h -3.314 a 0.44,0.44 0 0 1 -0.45,-0.45 V 13.432 a 0.44,0.44 0 0 1 0.45,-0.45 z m -37.611,16.57 c 0.193,0.225 0.032,0.546 -0.258,0.546 H 67.983 A 0.519,0.519 0 0 1 67.565,29.905 L 66.89,29.069 c -1.416,0.9 -3.09,1.448 -4.859,1.448 -4.954,0 -8.976,-4.022 -8.976,-8.977 0,-4.955 4.022,-8.977 8.976,-8.977 4.955,0 8.977,4.022 8.977,8.977 0,1.77 -0.515,3.443 -1.416,4.858 l 2.703,3.153 z m -33.88,7.882 c 0.837,0.322 1.159,1.576 1.223,2.123 0.129,0.998 -0.16,1.384 -0.482,1.384 -0.322,0 -0.773,-0.386 -1.255,-1.158 -0.483,-0.773 -0.676,-1.641 -0.418,-2.092 0.16,-0.29 0.514,-0.418 0.933,-0.257 z m -4.89,3.636 c 0.515,0 1.094,0.225 1.609,0.675 0.997,0.837 1.287,1.802 0.772,2.51 -0.29,0.354 -0.772,0.579 -1.319,0.579 -0.547,0 -1.126,-0.193 -1.512,-0.547 -0.901,-0.772 -1.158,-2.06 -0.58,-2.767 0.226,-0.29 0.58,-0.45 1.03,-0.45 z m -11.26,9.298 c -12.227,0 -22.136,-9.91 -22.136,-22.136 0,-12.226 9.91,-22.135 22.135,-22.135 12.226,0 22.136,9.91 22.136,22.135 0,4.15 -1.158,8.044 -3.12,11.358 -0.065,0.096 -0.226,0.064 -0.258,-0.065 -0.772,-5.437 -4.086,-8.43 -8.912,-9.33 -0.419,-0.065 -0.483,-0.322 0.064,-0.386 1.48,-0.129 3.571,-0.097 4.665,0.096 0.064,-0.547 0.097,-1.126 0.097,-1.705 0,-8.076 -6.564,-14.64 -14.64,-14.64 -8.075,0 -14.639,6.564 -14.639,14.64 0,8.076 6.564,14.64 14.64,14.64 h 0.675 a 19.749,19.749 0 0 1 -0.29,-3.958 c 0.033,-0.901 0.226,-1.03 0.612,-0.322 2.027,3.507 4.923,6.66 10.585,7.915 4.633,1.03 9.266,2.22 14.253,8.558 0.45,0.547 -0.225,1.126 -0.74,0.676 -5.083,-4.505 -9.716,-5.985 -13.931,-5.985 -4.73,0.033 -7.947,0.644 -11.197,0.644 z m 41.986,-24.42 -1.77,-2.156 c -0.192,-0.225 -0.031,-0.579 0.258,-0.579 h 3.732 c 0.193,-0.515 0.29,-1.094 0.29,-1.673 0,-2.67 -1.995,-4.987 -4.73,-4.987 -2.734,0 -4.73,2.317 -4.73,4.987 0,2.67 1.996,4.955 4.73,4.955 0.772,0.032 1.545,-0.193 2.22,-0.547 z" inkscape:connector-curvature="0" style="fill:#ff8c00" />
</g>
</g>
</svg>
</div>
<div class="wd-150 ht-65 bg-gray-100 mg-l-5 btn-deposit d-inline-flex align-items-center justify-content-center " onclick="$('#fk').show();$('#qiwi').hide();$('#depositSystem').val('1'); $('.btn-deposit').removeClass('bd-gray-500 bd-1 bd') ;$(this).addClass('bd-gray-500 bd-1 bd')">
<h5 class="mg-t-6">Другое</h5>
</div>


</div>
<div class="d-sm-none d-block ">
<div class="row row-xs">
<div class="col-6">
<div class="bd-gray-500 bd-1 bd wd-150 ht-65 bg-gray-100 btn-deposit d-inline-flex align-items-center justify-content-center" onclick="$('#depositSystem').val('3');$('#qiwi').show();$('#fk').hide(); $('.btn-deposit').removeClass('bd-gray-500 bd-1 bd') ;$(this).addClass('bd-gray-500 bd-1 bd')" style="height: 55px!important;width: 100%!important;"><svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="80" viewBox="0 0 29.573537 13.433727" version="1.1">
<g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1" transform="translate(-48.845523,-338.5318)">
<g id="g5493" transform="matrix(0.26458333,0,0,0.26458333,48.943684,337.05093)" style="fill:none">
<path class="qdt" id="path5489" d="m 54.406,34.313 h 1.737 v 3.893 h 1.255 l 2.252,-3.893 h 1.899 l -2.703,4.569 v 0.032 L 61.71,43.9 H 59.747 L 57.43,39.717 H 56.176 V 43.9 h -1.738 v -9.588 h -0.032 z m 11.197,2.542 c 2.09,0 3.796,1.512 3.796,3.603 0,2.124 -1.673,3.604 -3.764,3.604 -2.092,0 -3.765,-1.48 -3.765,-3.604 -0.032,-2.123 1.641,-3.603 3.733,-3.603 z m 5.147,0.16 h 1.641 v 5.406 h 2.156 v -5.405 h 1.64 v 5.405 h 2.156 v -5.405 h 1.641 V 43.9 h -9.17 v -6.885 z m 14.093,-0.16 c 1.962,0 3.056,1.448 3.056,3.25 a 4.8,4.8 0 0 1 -0.064,0.675 h -4.73 c 0.097,1.19 1.03,1.834 2.06,1.834 0.707,0 1.415,-0.322 1.962,-0.74 l 0.676,1.223 c -0.708,0.61 -1.77,0.997 -2.767,0.997 -2.285,0 -3.7,-1.641 -3.7,-3.604 0,-2.155 1.447,-3.635 3.507,-3.635 z m 3.86,5.598 c 0.837,-0.129 1.448,-0.836 1.448,-3.282 v -2.155 h 5.02 V 43.9 h -1.706 v -5.502 h -1.673 v 0.772 c 0,2.992 -0.804,4.73 -3.089,4.794 v -1.512 z m 11.358,-5.598 c 1.962,0 3.056,1.448 3.056,3.25 a 4.8,4.8 0 0 1 -0.064,0.675 h -4.73 c 0.097,1.19 1.03,1.834 2.06,1.834 0.707,0 1.415,-0.322 1.962,-0.74 l 0.676,1.223 c -0.708,0.61 -1.77,0.997 -2.767,0.997 -2.284,0 -3.7,-1.641 -3.7,-3.604 0,-2.155 1.448,-3.635 3.507,-3.635 z m 4.472,0.16 h 1.705 v 2.639 h 0.837 l 1.673,-2.638 h 1.898 l -2.188,3.281 v 0.033 l 2.445,3.57 h -1.994 l -1.802,-2.798 h -0.9 V 43.9 H 104.5 v -6.885 h 0.032 z m -38.93,5.567 c 1.126,0 2.059,-0.869 2.059,-2.156 0,-1.255 -0.933,-2.156 -2.06,-2.156 -1.125,0 -2.026,0.87 -2.026,2.156 0,1.287 0.9,2.156 2.027,2.156 z M 86.162,39.59 c 0,-0.901 -0.612,-1.448 -1.384,-1.448 -0.868,0 -1.512,0.579 -1.673,1.448 z m 15.218,0 c 0,-0.901 -0.611,-1.448 -1.383,-1.448 -0.87,0 -1.513,0.579 -1.674,1.448 z" inkscape:connector-curvature="0" style="fill:#2d3540" />
<path id="path5491" d="M 78.44,13.432 V 29.68 a 0.44,0.44 0 0 1 -0.45,0.45 h -3.314 a 0.44,0.44 0 0 1 -0.45,-0.45 V 13.432 a 0.44,0.44 0 0 1 0.45,-0.45 h 3.314 a 0.44,0.44 0 0 1 0.45,0.45 z m 25.868,-0.45 c 0.129,0 0.29,0.064 0.45,0.193 0.097,0.096 0.097,0.257 0.065,0.386 l -5.47,16.28 a 0.458,0.458 0 0 1 -0.418,0.29 h -2.96 c -0.193,0 -0.354,-0.097 -0.418,-0.29 L 92.37,20.35 89.185,29.84 a 0.458,0.458 0 0 1 -0.418,0.29 h -2.96 c -0.193,0 -0.354,-0.096 -0.418,-0.29 l -5.47,-16.28 c -0.032,-0.128 -0.032,-0.257 0.064,-0.385 0.065,-0.129 0.226,-0.193 0.354,-0.193 h 3.7 c 0.193,0 0.354,0.128 0.419,0.321 l 2.927,9.62 3.218,-9.62 a 0.458,0.458 0 0 1 0.418,-0.29 h 2.606 c 0.193,0 0.354,0.097 0.418,0.29 l 3.218,9.62 2.928,-9.62 a 0.444,0.444 0 0 1 0.418,-0.321 h 3.7 z m 5.598,0 c 0.225,0 0.418,0.193 0.45,0.45 V 29.68 a 0.44,0.44 0 0 1 -0.45,0.45 h -3.314 a 0.44,0.44 0 0 1 -0.45,-0.45 V 13.432 a 0.44,0.44 0 0 1 0.45,-0.45 z m -37.611,16.57 c 0.193,0.225 0.032,0.546 -0.258,0.546 H 67.983 A 0.519,0.519 0 0 1 67.565,29.905 L 66.89,29.069 c -1.416,0.9 -3.09,1.448 -4.859,1.448 -4.954,0 -8.976,-4.022 -8.976,-8.977 0,-4.955 4.022,-8.977 8.976,-8.977 4.955,0 8.977,4.022 8.977,8.977 0,1.77 -0.515,3.443 -1.416,4.858 l 2.703,3.153 z m -33.88,7.882 c 0.837,0.322 1.159,1.576 1.223,2.123 0.129,0.998 -0.16,1.384 -0.482,1.384 -0.322,0 -0.773,-0.386 -1.255,-1.158 -0.483,-0.773 -0.676,-1.641 -0.418,-2.092 0.16,-0.29 0.514,-0.418 0.933,-0.257 z m -4.89,3.636 c 0.515,0 1.094,0.225 1.609,0.675 0.997,0.837 1.287,1.802 0.772,2.51 -0.29,0.354 -0.772,0.579 -1.319,0.579 -0.547,0 -1.126,-0.193 -1.512,-0.547 -0.901,-0.772 -1.158,-2.06 -0.58,-2.767 0.226,-0.29 0.58,-0.45 1.03,-0.45 z m -11.26,9.298 c -12.227,0 -22.136,-9.91 -22.136,-22.136 0,-12.226 9.91,-22.135 22.135,-22.135 12.226,0 22.136,9.91 22.136,22.135 0,4.15 -1.158,8.044 -3.12,11.358 -0.065,0.096 -0.226,0.064 -0.258,-0.065 -0.772,-5.437 -4.086,-8.43 -8.912,-9.33 -0.419,-0.065 -0.483,-0.322 0.064,-0.386 1.48,-0.129 3.571,-0.097 4.665,0.096 0.064,-0.547 0.097,-1.126 0.097,-1.705 0,-8.076 -6.564,-14.64 -14.64,-14.64 -8.075,0 -14.639,6.564 -14.639,14.64 0,8.076 6.564,14.64 14.64,14.64 h 0.675 a 19.749,19.749 0 0 1 -0.29,-3.958 c 0.033,-0.901 0.226,-1.03 0.612,-0.322 2.027,3.507 4.923,6.66 10.585,7.915 4.633,1.03 9.266,2.22 14.253,8.558 0.45,0.547 -0.225,1.126 -0.74,0.676 -5.083,-4.505 -9.716,-5.985 -13.931,-5.985 -4.73,0.033 -7.947,0.644 -11.197,0.644 z m 41.986,-24.42 -1.77,-2.156 c -0.192,-0.225 -0.031,-0.579 0.258,-0.579 h 3.732 c 0.193,-0.515 0.29,-1.094 0.29,-1.673 0,-2.67 -1.995,-4.987 -4.73,-4.987 -2.734,0 -4.73,2.317 -4.73,4.987 0,2.67 1.996,4.955 4.73,4.955 0.772,0.032 1.545,-0.193 2.22,-0.547 z" inkscape:connector-curvature="0" style="fill:#ff8c00" />
</g>
</g>
</svg>
</div>

</div>
<div class="col-sm col-6 mg-t-10">
<div class="wd-150 ht-65 bg-gray-100 btn-deposit d-inline-flex align-items-center justify-content-center" onclick="$('#fk').show();$('#qiwi').hide();$('#depositSystem').val('1'); $('.btn-deposit').removeClass('bd-gray-500 bd-1 bd') ;$(this).addClass('bd-gray-500 bd-1 bd')" style="height: 55px!important;width: 100%!important;">
<h5 class="mg-t-6">Другое</h5>
</div>
</div>
</div>
<div class="row-md">
</div>
</div>


<form id="qiwi" action="https://oplata.qiwi.com/create">
<div class="form-group mg-t-15" style="display:none;">
<div id="" class="input-group tx-light tx-16 col-6 pd-0">
<input name="account" value="<?=$id;?>" autocomplete="off" class="form-control tx-normal " style="border-top-right-radius: 5px;border-bottom-right-radius: 5px; " placeholder="">
</div>
</div>
<div class="form-group mg-t-15"  style="display:none;">
<div id="" class="input-group tx-light tx-16 col-6 pd-0">
<input name="successUrl" value="<?=$domen;?>" autocomplete="off" class="form-control tx-normal " style="border-top-right-radius: 5px;border-bottom-right-radius: 5px; " placeholder="">
</div>
</div>
<div class="form-group mg-t-15"  style="display:none;">
<div id="" class="input-group tx-light tx-16 col-6 pd-0">
<input name="publicKey" value="<?=$publicKey;?>" autocomplete="off" class="form-control tx-normal " style="border-top-right-radius: 5px;border-bottom-right-radius: 5px; " placeholder="">
</div>
</div>

<div class="form-group mg-t-15">
<label class="tx-normal la-mob">Сумма:</label>
<div id="the-basics" class="input-group tx-light tx-16 col-6 pd-0">
<input name="amount" autocomplete="off" class="form-control tx-normal " style="border-top-right-radius: 5px;border-bottom-right-radius: 5px; " placeholder="">
</div>


<span class="nav-line-profile badge bt-com" style="margin-top:10px; background-color: #e5e9f2;color: #8392a5;">Комиссия: 0%</span>
</div>
<button type="submit" class="btn btn-primary tx-normal btn-la-mob" style="padding: 8px 18px;">Далее</button>
</form>




<form style="display:none;"id="fk">
	
	<div class="form-group mg-t-15">
<label class="tx-normal la-mob">Сумма:</label>
<div id="the-basics" class="input-group tx-light tx-16 col-6 pd-0">
<input id="depositSize" autocomplete="off" class="form-control tx-normal " placeholder="">
</div>


<span class="nav-line-profile badge bt-com" style="margin-top:10px; background-color: #e5e9f2;color: #8392a5;">Комиссия: 0%</span>
</div>
<button  id="depositButton" onclick="deposit_default()" class="btn btn-primary tx-normal btn-la-mob" style="padding: 8px 18px;">Далее</button>
</form>

<script src="../script/js.cookie.js">
</script>
<script src="../script/jquery-latest.min.js"></script>
<script src="../script/jquery.bundle.js"></script>
<script src="../script/script.js"></script>
    
    <script src="../ajax/functions.js"></script>
 
    <script src="../ajax/func.js"></script>
    <script src="https://d3js.org/d3-path.v1.min.js"></script>
	<script src="https://d3js.org/d3-shape.v1.min.js"></script> 
	
	
	
<div class="table-responsive mg-t-30 ">
<div class="table-responsive">
                <table class="table tnx-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Дата</th>
                            <th>Сумма</th>

                        </tr><!-- tr -->
                    </thead><!-- thead -->
                    <tbody id="lastDepN">
                        <?php 
while($row = mysql_fetch_array($result_deps)) {
 
$id_dep = $row['id'];
$date_dep = $row['data'];
$sum_dep = $row['suma']; 
echo "<tr>
                    <td>$id_dep</td>
                    <td>$date_dep</td>
                    <td>$sum_dep</td>
                    </tr>";

  }
  
                                      ?>              
                                      </tbody><!-- tbody -->
                    <center id="loadpw" style="display:none">Загрузка...</center>
                </table>

</table>
</div>
</div>
<script>
                            
                               function withdraw() {
                        if ($('#WithdrawSize').val() == '' || $('#walletNumber').val() == '' || $('#withdrawSystem').val() == '') {
                            $('#error_withdraw').show();
                            return $('#error_withdraw').html('Заполните все поля');
                        }
                       $.ajax({
                                                                                type: 'POST',
                                                                                url: 'action.php',
beforeSend: function() {
$('#btnwt').html('<div class="loader" style="height:23px;width:23px"></div>');
$("#succes_withdraw").hide(); 
  $("#error_withdraw").hide(); 
										},	
                                                                                data: {
                                                                                    type: "withdrawuser",
           system: $('#withdrawSystem').val(),
           wallet: $('#walletNumber').val(),                                        sum: $('#WithdrawSize').val()                                   
           },
                                        success: function(data) {
                                            var obj = jQuery.parseJSON(data);
                                            if (obj.success == "success") {
    
$("#btnwt").html('Вывести');                          
                    $("#succes_withdraw").show();                          
					$("#succes_withdraw").html("Выплата успешно создана"); 
					  $("#withdrawT").load("withdraw.php #withdrawT"); 
                                              $('#userBalance').attr('myBalance', obj.new_balance);
                                                                        updateBalance(obj.balance, obj.new_balance);
                                                                return 
                                            }else{
                 $("#btnwt").html('Вывести'); 
                $("#error_withdraw").show();                               
				$("#error_withdraw").html(obj.error);
		 $("#withdrawT").load("withdraw.php #withdrawT"); 
                                            }
                                        }   
   });
}
function removeWithdrawUser(deletew) {
  $.ajax({
                                                                                type: 'POST',
                                                                                url: 'action.php',
beforeSend: function() {

										},	
                                                                                data: {
                                                                                    type: "deletewithdraw",
           del: deletew
                                           
           },
                                        success: function(data) {
                                            var obj = jQuery.parseJSON(data);
                                            if (obj.success == "success") {
                   $("#withdrawT").load("withdraw.php #withdrawT");                          
                                                    $('#userBalance').attr('myBalance', obj.new_balance);
                                                                        updateBalance(obj.balance, obj.new_balance);
                                                                return 
                                            }else{
                $("#withdrawT").load("withdraw.php #withdrawT"); 
                                            }
                                        }   
   });
}
                            function removeWithdraw(id) {
                        $.ajax({
                            type: 'POST',
                            url: 'action.php',
                            data: {
                                type: "removeWithdraw",
                                sid: Cookies.get('sid'),
                                id: id
                            },
                            success: function(data) {
                                var obj = jQuery.parseJSON(data);
                                if ('success' in obj) {
                                    $('#' + id + '_his').fadeOut('slow');
                                    updateBalance(obj.success.balance, obj.success.new_balance);
                                }
                            }
                        });
                    }


                    function showWithdrawHistory(start) {

                        $.ajax({
                            type: 'POST',
                            url: 'action.php',
                            data: {
                                type: "withdrawHistory",
                                sid: Cookies.get('sid'),
                                start: start
                            },
                            success: function(data) {
                                if (data == 'null') {
                                    $("#withdrawHistoryLoad").hide();
                                    return $("#gnext").hide();
                                }
                                var obj = jQuery.parseJSON(data);
                                if ('success' in obj) {
                                    $("#withdrawHistoryLoad").hide();
                                    var tt = $('#withdrawT').html();
                                    $('#withdrawT').html(tt + obj.success.add);
                                    $('#gnext').html(obj.success.next);
                                }
                            }
                        });

                    }

                        </script>
</div>
</div>
</div>
<!-- tbody -->
                </table>
</div>
</div>
</div>
<div class="modal fade" id="modalSignIn" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered wd-sm-400" role="document">
<div class="modal-content">
<div class="modal-body pd-20 pd-sm-40">
<a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</a>
<div>
<h4>Авторизация</h4>
<p class="tx-color-03 tx-thin"></p>
<a href="https://cabura.dog/login.php" class="btn btn-outline-facebook btn-block mg-b-15"><i class="ion ion-logo-vk"></i> Войти через Вконтакте</a>
<div class="form-group">
<label>Логин</label>
<input id="userLogin" class="form-control" placeholder="">
</div>
<div class="form-group">
<div class="d-flex justify-content-between mg-b-5">
<label class="mg-b-0-f">Пароль</label>
</div>
<input id="userPass" type="password" class="form-control" placeholder="">
</div>
<div style="transform: scale(0.75);margin-top: -17px;" class="g-recaptcha justify-content-center align-self-center" data-sitekey="6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk&amp;co=aHR0cHM6Ly9jYWJ1cmEuY29tOjQ0Mw..&amp;hl=ru&amp;v=61bII03-TtCmSUR7dw9MJF9q&amp;size=normal&amp;cb=601q2gdr8x6h" width="304" height="78" role="presentation" name="a-1r50eisdq2q6" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
<div id="error_enter" class="alert alert-danger tx-center tx-red" role="alert" style="color: rgb(219, 52, 69);padding: 9px;display:none"></div>
<button id="butEnter" class="btn btn-primary btn-block" onclick="login()">Войти</button>
<div class="tx-13 mg-t-20 tx-center">Нет аккаунта? <a data-dismiss="modal" aria-label="Close" href="#modalSignUp" data-toggle="modal">Создать аккаунт</a></div>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="modalSignUp" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered wd-sm-400" role="document">
<div class="modal-content">
<div class="modal-body pd-20 pd-sm-40">
<a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</a>
<div>
<h4>Создание аккаунта</h4>
<div class="form-group">
<label>Логин</label>
<input id="userRegsiter" type="text" class="form-control" placeholder="">
</div>
<div class="form-group">
<label>Пароль</label>
<input id="userPassRegister" type="password" class="form-control" placeholder="">
</div>
<div class="form-group">
<label>Повторите пароль</label>
<input id="userPassRegister1" type="password" class="form-control" placeholder="">
</div>
<div class="form-group">
Создавая аккаунт, вы соглашаетесь с <a href="terms" target="_blanc">пользовательским соглашением</a> и <a href="policy" target="_blanc">политикой конфеденциальности</a>.
</div>
<div style="transform: scale(0.75);margin-top: -17px;" class="g-recaptcha justify-content-center align-self-center" data-sitekey="6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk&amp;co=aHR0cHM6Ly9jYWJ1cmEuY29tOjQ0Mw..&amp;hl=ru&amp;v=61bII03-TtCmSUR7dw9MJF9q&amp;size=normal&amp;cb=bjn6tx2r71yg" width="304" height="78" role="presentation" name="a-9aqpvwkuwxal" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
<div id="error_register" class="alert alert-danger tx-center tx-red" role="alert" style="color: rgb(219, 52, 69);padding: 9px;display:none"></div>
<button id="butRegister" onclick="register()" class="btn btn-primary btn-block">Создать аккаунт</button>
<div class="tx-13 mg-t-20 tx-center">Есть аккаунт? <a data-dismiss="modal" aria-label="Close" href="#modalSignIn" data-toggle="modal">Войти</a></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
                                    
                                    function login() {
                                if ($('#userLogin').val().length < 4) {
                                    $('#error_enter').css('display', 'block');
                                    return $('#error_enter').html('Логин от 4 символов');
                                }
                                if ($('#userPass').val() == '') {
                                    $('#error_enter').css('display', 'block');
                                    return $('#error_enter').html('Введите пароль');
                                }

                                if ($('#g-recaptcha-response').val() == '') {
                                    $('#error_enter').css('display', 'block');
                                    return $('#error_enter').html('Поставьте галочку');
                                }
                                $.ajax({
                                    type: 'POST',
                                    url: '/action.php',
                                    beforeSend: function() {
                                        
                                        $('#butEnter').html('<div class="spinner-border spinner-border-sm tx-white link-03 tx-medium tx-spacing--0 tx-10"></div>');
                                        $('#butEnter').addClass('disabled');
                                        $('#error_enter').hide();
                                        
                                    },
                                    data: {
                                        type: "login",
                                        login: $('#userLogin').val(),
                                        rc: $('#g-recaptcha-response').val(),
                                        pass: $('#userPass').val()
                                    },
                                    success: function(data) {
                                        
                                

                                        var obj = jQuery.parseJSON(data);
                                        if ('success' in obj) {
                                            Cookies.set('sid', obj.success.sid, { expires: 365,path: '/',secure:true });
                                            Cookies.set('login', $('#userLogin').val(), { expires: 365,path: '/',secure:true });
                                            window.location.href = '';
                                            // return false;
                                        }else{
                                            $('#butEnter').html('Войти');
                                        $('#butEnter').removeClass('disabled');
                                            grecaptcha.reset();
                                       
                                        $('#error_enter').html(obj.error);
                                        $('#error_enter').css('display', 'block');
                                        }


                                    }
                                });
                            }
                            
                            function register() {
                                if ($('#userRegsiter').val().length < 4) {
                                    $('#error_register').css('display', 'block');
                                    return $('#error_register').html('Логин от 4 символов');
                                }
                                if ($('#userPassRegister').val() == '') {
                                    $('#error_register').css('display', 'block');
                                    return $('#error_register').html('Введите пароль');
                                }
                                if ($('#userPassRegister1').val() !== $('#userPassRegister').val()) {
                                    $('#error_register').css('display', 'block');
                                    return $('#error_register').html('Пароли не совпадают');
                                }
                            

                                if ($('#g-recaptcha-response-1').val() == '') {
                                    $('#error_register').css('display', 'block');
                                    return $('#error_register').html('Поставьте галочку');
                                }
                                $.ajax({
                                    type: 'POST',
                                    url: '/action.php',
                                    beforeSend: function() {
                                        $('#butRegister').html('<div class="spinner-border spinner-border-sm tx-white link-03 tx-medium tx-spacing--0 tx-10"></div>').addClass('disabled');
                                        $('#error_register').hide();
                                    },
                                    data: {
                                        type: "register",
                                        login: $('#userRegsiter').val(),
                                        ref: Cookies.get('ref'),
                                        rc: $('#g-recaptcha-response-1').val(),
                                        pass: $('#userPassRegister').val()
                                    },
                                    success: function(data) {
                                        $('#butRegister').html('Зарегистрироваться').removeClass('disabled');
                                        $('#error_register').hide();
                                        var obj = jQuery.parseJSON(data);
                                        if ('success' in obj) {
                                            Cookies.set('sid', obj.success.sid, { expires: 365,path: '/',secure:true });
                                            Cookies.set('login', $('#userLogin').val(), { expires: 365,path: '/',secure:true });
                                            window.location.href = '';
                                            // return false;
                                        }else{
                                            grecaptcha.reset(1);
                                       
                                        $('#error_register').html(obj.error);
                                        $('#error_register').show();
                                        }


                                    }
                                });
                            }
                        
                                    
                                    
                                    
                                </script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="/files/js.js"></script>
<script src="/files/dfg_002.js"></script>
<div class="modal fade" id="firstBonus" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered wd-sm-400" role="document">
<div class="modal-content">
<div class="modal-body pd-20 pd-sm-40">
<a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</a>
<div id="wizard1" role="application" class="wizard clearfix">
<div class="steps clearfix align-items-center justify-content-center">
<ul role="tablist">
<li role="tab" class="first done" aria-disabled="false" aria-selected="true"><a id="wizard1-t-0" href="#wizard1-h-0" aria-controls="wizard1-p-0"><span class="current-info audible">current step: </span><span class="number ">1</span></a></li>
<li role="tab" class="current" aria-disabled="true"><a id="wizard1-t-1" href="#wizard1-h-1" aria-controls="wizard1-p-1"><span class="number">2</span></a></li>
</ul>
</div>
<div class="content clearfix " style="min-height:0!important">
<h3 id="wizard1-h-0" tabindex="-1" class="title current tx-center ">Подпишитесь на <a href="https://vk.com/cabura3" target="_blank" style="text-decoration: underline;">нашу группу</a></h3>
<center id="error_bonuss1" class="tx-danger" style="display:none"></center>
</div>
<div class="actions ">
<a href="#" id="bonBut" onclick="getBonus()" class="tx-center ">Получить</a>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
        
        function getBonus() {

                $.ajax({
                                            type: 'POST',
                                            url: '/action.php',
                                             beforeSend: function(data) {
                                                        $('#bonBut').addClass('disabled');
                                                    },
                                            data: {
                                                type: 'getBonus',
                                                sid: Cookies.get('sid'),
                                                a:  Cookies.get('ab')
                                            },
                                            success: function(data) {
                                                $('#error_bonuss1').hide();
                                                $('#bonBut').removeClass('disabled');
                                             var obj = jQuery.parseJSON(data);
                                                if ('success' in obj) {
                                                    $('#firstBonus').modal('toggle');
                                                    $(".absh").hide();
                                                        updateBalance(obj.success.balance, obj.success.new_balance);
                                                         updateBalanceMobile(obj.success.balance, obj.success.new_balance);
                                                
                                                    return;
                                                   
                                                } 
                                                if ('error' in obj) {
                                                    $('#error_bonuss1').show();
                                                    return $('#error_bonuss1').html(obj.error.text);
                                                }
                                            }
                                        });
               
                    
            }
            
            function hideBonus() {
                        $.ajax({
                            type: 'POST',
                            url: '/action.php',
                            data: {
                                type: "hideBonus",
                                sid: Cookies.get('sid'),
                            },
                            success: function(data) {
                                var obj = jQuery.parseJSON(data);
                                if ('success' in obj) {
                                    $('#firstBonus').modal('toggle');
                                }
                            }
                        });
                    }
            
        
        
    </script>
<div class="modal fade" id="userSettings" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered " role="document">
<div class="modal-content">
<div class="modal-body pd-x-25 pd-sm-x-30 pd-t-40 pd-sm-t-20 pd-b-15 pd-sm-b-20">
<a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</a>
<div class="nav-wrapper mg-b-20 tx-13">
<div>
<nav class="nav nav-line tx-medium">
<a href="#performance" class="nav-link active" data-toggle="tab">Настройки</a>
</nav>
</div>
</div>
<div class="tab-content">
<div id="performance" class="tab-pane fade active show">
<h6>Темная тема</h6>
<div class="row row-xs mg-t-15">
<div class="col-lg-4">
 <div class="d-md-flex">
<div id="fnWrapper" class="parsley-input">
<div class="custom-control custom-switch">
<input autocomplete="off" type="checkbox" class="custom-control-input" id="customSwitch1" onchange="Cookies.set('tm','1');location.reload(); "><label class="custom-control-label" for="customSwitch1" style="color:transparent">A</label>
</div>
</div>
</div>
</div>
</div> <hr>
<h6>Смена пароля</h6>
<div class="row row-xs mg-t-15">
<div class="col-lg-4">
<div class="d-md-flex ">
<div id="fnWrapper" class="parsley-input">
<input type="password" id="resetPass" name="firstname" class="form-control " placeholder="Старый пароль" autocomplete="off" data-parsley-class-handler="#fnWrapper" required="">
</div>
</div>
</div>
<div class="col-lg-4">
<div class="d-md-flex ">
<div id="lnWrapper" class="parsley-input ">
<input type="password" id="resetPassRepeat" name="lastname" class="form-control " placeholder="Новый пароль" autocomplete="off" data-parsley-class-handler="#lnWrapper" required="">
</div>
</div>
</div>
<div class="col-lg-4">
<button onclick="resetPass()" class="btn btn-block btn-primary tx-normal rpbss">Сохранить</button>
</div>
<span id="error_resetPass" class="tx-danger mg-t-15" style="display:none">Пароль</span>
<span id="succes_resetPass" class="tx-success mg-t-15" style="display:none">Пароль изменен</span>
<script>

                                        function resetPass() {
										if ($('#resetPass').val() == ''){
										$('#error_resetPass').show();
										return $('#error_resetPass').html('Введите пароль');
										}
										if ($('#resetPass').val().length < 5){
										$('#error_resetPass').show();
										return $('#error_resetPass').html('Пароль от 5 символов');
										}
									if ($('#resetPass').val() != $('#resetPassRepeat').val()){
										$('#error_resetPass').show();
										return $('#error_resetPass').html('Пароли не совпадают');
									}
									$.ajax({
                                        type: 'POST',
                                        url: 'action.php',
										beforeSend: function() {
										    $('.rpbss').addClass("disabled");
											$('#error_resetPass').hide();
											$('#succes_resetPass').hide();
										},	
                                        data: {
                                            type: "resetPassPanel",
                                            sid: Cookies.get('sid'),
                                            newPass: $('#resetPass').val()
                                        },
                                        success: function(data) {
                                            $('.rpbss').removeClass("disabled");
                                            var obj = jQuery.parseJSON(data);
                                            if ('success' in obj) {
                                               $("#succes_resetPass").show();
											  Cookies.set('sid', obj.success.sid, { path: '/',secure:true });
																						 return false;
                                            }else{
												$('#error_resetPass').show();
												return $('#error_resetPass').html(obj.error.text);
											}
                                        }
                                    });
                                    
                                }
								</script>
</div>
<hr>
<h6 class="d-none">Аккаунт Вконтакте</h6>
<div class="row row-xs mg-t-15 d-none">
<div class="col-lg-4">
<div class="d-md-flex">
<div id="fnWrapper" class="parsley-input">
<a href="" target="_blank">https://werwr.wrer</a>
</div>
</div>
</div>
</div>
<hr>
<div class="row row-xs mg-t-15">
<div class="col-lg-12">
<div class="d-md-flex">
<button type="submit" class="btn btn-outline-primary btn-block tx-normal" onclick="Cookies.remove('sid');location.href = '';">Выйти из аккаунта</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="checkModal" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true" onclick="22">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-body pd-x-25 pd-sm-x-30 pd-t-40 pd-sm-t-20 pd-b-15 pd-sm-b-20">
<div class="text-center">
<div class="spinner-border"></div>
</div>
</div>
</div>
</div>
<script>
                                    
                                    $("#checkModal").on('hide.bs.modal', function(){
    history.pushState(null, null, '/');
  });
  
                                    </script>
</div>
<div class="modal fade" id="depositModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" style="display: none;" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content tx-14">
<div class="modal-header">
<h4 class="mg-b-5 ">Пополнение баланса</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">
<div class="form-group mg-b-5">
<label class="tx-normal la-mob">Выберите платежную систему:</label>
</div>
<div class="d-none d-sm-flex flex-row justify-content-start">
<div class="wd-150 ht-65 bg-gray-100 btn-deposit d-inline-flex align-items-center justify-content-center" onclick="$('#depositSystem').val('3'); $('.btn-deposit').removeClass('bd-gray-500 bd-1 bd') ;$(this).addClass('bd-gray-500 bd-1 bd')"><svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="80" viewBox="0 0 29.573537 13.433727" version="1.1">
<g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1" transform="translate(-48.845523,-338.5318)">
<g id="g5493" transform="matrix(0.26458333,0,0,0.26458333,48.943684,337.05093)" style="fill:none">
<path class="qdt" id="path5489" d="m 54.406,34.313 h 1.737 v 3.893 h 1.255 l 2.252,-3.893 h 1.899 l -2.703,4.569 v 0.032 L 61.71,43.9 H 59.747 L 57.43,39.717 H 56.176 V 43.9 h -1.738 v -9.588 h -0.032 z m 11.197,2.542 c 2.09,0 3.796,1.512 3.796,3.603 0,2.124 -1.673,3.604 -3.764,3.604 -2.092,0 -3.765,-1.48 -3.765,-3.604 -0.032,-2.123 1.641,-3.603 3.733,-3.603 z m 5.147,0.16 h 1.641 v 5.406 h 2.156 v -5.405 h 1.64 v 5.405 h 2.156 v -5.405 h 1.641 V 43.9 h -9.17 v -6.885 z m 14.093,-0.16 c 1.962,0 3.056,1.448 3.056,3.25 a 4.8,4.8 0 0 1 -0.064,0.675 h -4.73 c 0.097,1.19 1.03,1.834 2.06,1.834 0.707,0 1.415,-0.322 1.962,-0.74 l 0.676,1.223 c -0.708,0.61 -1.77,0.997 -2.767,0.997 -2.285,0 -3.7,-1.641 -3.7,-3.604 0,-2.155 1.447,-3.635 3.507,-3.635 z m 3.86,5.598 c 0.837,-0.129 1.448,-0.836 1.448,-3.282 v -2.155 h 5.02 V 43.9 h -1.706 v -5.502 h -1.673 v 0.772 c 0,2.992 -0.804,4.73 -3.089,4.794 v -1.512 z m 11.358,-5.598 c 1.962,0 3.056,1.448 3.056,3.25 a 4.8,4.8 0 0 1 -0.064,0.675 h -4.73 c 0.097,1.19 1.03,1.834 2.06,1.834 0.707,0 1.415,-0.322 1.962,-0.74 l 0.676,1.223 c -0.708,0.61 -1.77,0.997 -2.767,0.997 -2.284,0 -3.7,-1.641 -3.7,-3.604 0,-2.155 1.448,-3.635 3.507,-3.635 z m 4.472,0.16 h 1.705 v 2.639 h 0.837 l 1.673,-2.638 h 1.898 l -2.188,3.281 v 0.033 l 2.445,3.57 h -1.994 l -1.802,-2.798 h -0.9 V 43.9 H 104.5 v -6.885 h 0.032 z m -38.93,5.567 c 1.126,0 2.059,-0.869 2.059,-2.156 0,-1.255 -0.933,-2.156 -2.06,-2.156 -1.125,0 -2.026,0.87 -2.026,2.156 0,1.287 0.9,2.156 2.027,2.156 z M 86.162,39.59 c 0,-0.901 -0.612,-1.448 -1.384,-1.448 -0.868,0 -1.512,0.579 -1.673,1.448 z m 15.218,0 c 0,-0.901 -0.611,-1.448 -1.383,-1.448 -0.87,0 -1.513,0.579 -1.674,1.448 z" inkscape:connector-curvature="0" style="fill:#2d3540"></path>
<path id="path5491" d="M 78.44,13.432 V 29.68 a 0.44,0.44 0 0 1 -0.45,0.45 h -3.314 a 0.44,0.44 0 0 1 -0.45,-0.45 V 13.432 a 0.44,0.44 0 0 1 0.45,-0.45 h 3.314 a 0.44,0.44 0 0 1 0.45,0.45 z m 25.868,-0.45 c 0.129,0 0.29,0.064 0.45,0.193 0.097,0.096 0.097,0.257 0.065,0.386 l -5.47,16.28 a 0.458,0.458 0 0 1 -0.418,0.29 h -2.96 c -0.193,0 -0.354,-0.097 -0.418,-0.29 L 92.37,20.35 89.185,29.84 a 0.458,0.458 0 0 1 -0.418,0.29 h -2.96 c -0.193,0 -0.354,-0.096 -0.418,-0.29 l -5.47,-16.28 c -0.032,-0.128 -0.032,-0.257 0.064,-0.385 0.065,-0.129 0.226,-0.193 0.354,-0.193 h 3.7 c 0.193,0 0.354,0.128 0.419,0.321 l 2.927,9.62 3.218,-9.62 a 0.458,0.458 0 0 1 0.418,-0.29 h 2.606 c 0.193,0 0.354,0.097 0.418,0.29 l 3.218,9.62 2.928,-9.62 a 0.444,0.444 0 0 1 0.418,-0.321 h 3.7 z m 5.598,0 c 0.225,0 0.418,0.193 0.45,0.45 V 29.68 a 0.44,0.44 0 0 1 -0.45,0.45 h -3.314 a 0.44,0.44 0 0 1 -0.45,-0.45 V 13.432 a 0.44,0.44 0 0 1 0.45,-0.45 z m -37.611,16.57 c 0.193,0.225 0.032,0.546 -0.258,0.546 H 67.983 A 0.519,0.519 0 0 1 67.565,29.905 L 66.89,29.069 c -1.416,0.9 -3.09,1.448 -4.859,1.448 -4.954,0 -8.976,-4.022 -8.976,-8.977 0,-4.955 4.022,-8.977 8.976,-8.977 4.955,0 8.977,4.022 8.977,8.977 0,1.77 -0.515,3.443 -1.416,4.858 l 2.703,3.153 z m -33.88,7.882 c 0.837,0.322 1.159,1.576 1.223,2.123 0.129,0.998 -0.16,1.384 -0.482,1.384 -0.322,0 -0.773,-0.386 -1.255,-1.158 -0.483,-0.773 -0.676,-1.641 -0.418,-2.092 0.16,-0.29 0.514,-0.418 0.933,-0.257 z m -4.89,3.636 c 0.515,0 1.094,0.225 1.609,0.675 0.997,0.837 1.287,1.802 0.772,2.51 -0.29,0.354 -0.772,0.579 -1.319,0.579 -0.547,0 -1.126,-0.193 -1.512,-0.547 -0.901,-0.772 -1.158,-2.06 -0.58,-2.767 0.226,-0.29 0.58,-0.45 1.03,-0.45 z m -11.26,9.298 c -12.227,0 -22.136,-9.91 -22.136,-22.136 0,-12.226 9.91,-22.135 22.135,-22.135 12.226,0 22.136,9.91 22.136,22.135 0,4.15 -1.158,8.044 -3.12,11.358 -0.065,0.096 -0.226,0.064 -0.258,-0.065 -0.772,-5.437 -4.086,-8.43 -8.912,-9.33 -0.419,-0.065 -0.483,-0.322 0.064,-0.386 1.48,-0.129 3.571,-0.097 4.665,0.096 0.064,-0.547 0.097,-1.126 0.097,-1.705 0,-8.076 -6.564,-14.64 -14.64,-14.64 -8.075,0 -14.639,6.564 -14.639,14.64 0,8.076 6.564,14.64 14.64,14.64 h 0.675 a 19.749,19.749 0 0 1 -0.29,-3.958 c 0.033,-0.901 0.226,-1.03 0.612,-0.322 2.027,3.507 4.923,6.66 10.585,7.915 4.633,1.03 9.266,2.22 14.253,8.558 0.45,0.547 -0.225,1.126 -0.74,0.676 -5.083,-4.505 -9.716,-5.985 -13.931,-5.985 -4.73,0.033 -7.947,0.644 -11.197,0.644 z m 41.986,-24.42 -1.77,-2.156 c -0.192,-0.225 -0.031,-0.579 0.258,-0.579 h 3.732 c 0.193,-0.515 0.29,-1.094 0.29,-1.673 0,-2.67 -1.995,-4.987 -4.73,-4.987 -2.734,0 -4.73,2.317 -4.73,4.987 0,2.67 1.996,4.955 4.73,4.955 0.772,0.032 1.545,-0.193 2.22,-0.547 z" inkscape:connector-curvature="0" style="fill:#ff8c00"></path>
</g>
</g>
</svg>
</div>
<div class="wd-150 ht-65 bg-gray-100 mg-l-5 btn-deposit d-inline-flex align-items-center justify-content-center" onclick="$('#depositSystem').val('2'); $('.btn-deposit').removeClass('bd-gray-500 bd-1 bd') ;$(this).addClass('bd-gray-500 bd-1 bd')"><svg width="80" height="38" viewBox="0 0 160 38" fill="none" xmlns="http://www.w3.org/2000/svg">
<path class="qdt qdt1" d="M136.851 36.6707C136.851 33.4144 136.851 30.1772 136.851 26.9209C136.851 19.1005 136.851 11.2801 136.851 3.45991V2.05076C141.312 2.22208 145.696 1.59364 149.961 2.86958C151.962 3.40809 153.723 4.57671 154.969 6.19255C156.216 7.80839 156.877 9.78059 156.849 11.8006C157.007 13.9038 156.443 15.9984 155.246 17.7561C154.05 19.5137 152.287 20.8351 150.235 21.5126L149.022 21.9316L155.265 30.3295C156.849 32.4623 158.414 34.6141 160 36.766H153.386C153.398 36.6968 153.398 36.6258 153.386 36.5566C150.157 32.0433 146.928 27.5302 143.602 23.0551C143.407 22.7695 142.897 22.6933 142.349 22.4457V36.766L136.851 36.6707ZM142.448 6.69722V17.9134C144.555 18.1033 146.677 17.7895 148.63 16.9995C149.573 16.5642 150.363 15.869 150.904 15.0002C151.443 14.1313 151.708 13.1273 151.668 12.1128C151.626 11.0984 151.279 10.1182 150.669 9.2942C150.06 8.4702 149.214 7.83856 148.24 7.47793C146.399 6.77374 144.414 6.50608 142.448 6.69722Z" fill="#637388"></path>
<path class="qdtP" d="M20.4255 36.6705C20.4497 36.3847 20.5073 36.1028 20.5965 35.8306L37.1056 0.725464C37.2025 0.515373 37.3553 0.305434 37.5262 0L43.2591 12.7897L53.4816 35.5824C53.6102 35.9372 53.7131 36.3009 53.7872 36.6705H48.1692C47.0422 34.0934 45.9531 31.4973 44.7884 28.9202C44.6886 28.7793 44.5599 28.6607 44.4117 28.5719C44.2635 28.4832 44.0987 28.4263 43.9277 28.4048C39.4185 28.4048 34.9092 28.4048 30.4 28.4048C30.2396 28.415 30.0839 28.4616 29.9447 28.5411C29.8056 28.6204 29.6861 28.7305 29.5968 28.863C28.3928 31.4782 27.228 34.1316 26.0617 36.766L20.4255 36.6705ZM42.418 23.3081L37.2781 11.6062L31.9474 23.3081H42.418Z" fill="#637388"></path>
<path class="qdt qdt1" d="M83.7447 36.7277C83.7447 34.469 83.7447 32.2103 83.7447 29.9323C83.7447 21.0889 83.7447 12.2516 83.7447 3.42092V2.0426H103.45V6.94303H89.3607V15.7291H103.154V20.7826H89.3607V31.7508H103.489V36.766L83.7447 36.7277Z" fill="#637388"></path>
<path class="qdt qdt1" d="M110.298 36.7277C110.298 34.469 110.298 32.2103 110.298 29.9323C110.298 21.0889 110.298 12.2516 110.298 3.42092V2.0426H130.003V6.94303H115.914V15.7291H129.709V20.7826H115.914V31.7508H130.043V36.766L110.298 36.7277Z" fill="#637388"></path>
<path class="qdtP" d="M0 2.07118C3.70553 2.07118 7.43086 1.91825 11.0969 2.31995C13.5302 2.56168 15.7797 3.71949 17.3862 5.55717C18.9913 7.39484 19.8318 9.77369 19.7375 12.2081C19.8226 14.6387 19.0003 17.0143 17.4287 18.8759C15.8571 20.7376 13.6503 21.9531 11.2321 22.2876C9.31249 22.6128 7.39127 22.6128 5.47162 22.7657V36.766H0V2.07118ZM5.47162 17.6973C7.58429 17.9587 9.73046 17.7161 11.7307 16.9897C12.6654 16.5829 13.4481 15.8923 13.9649 15.0164C14.4816 14.1404 14.7081 13.124 14.6108 12.1124C14.6701 11.1014 14.3996 10.0985 13.8387 9.2538C13.2779 8.4089 12.4572 7.76792 11.5012 7.42653C9.55263 6.82459 7.49918 6.62925 5.47162 6.85276V17.6973Z" fill="#637388"></path>
<path class="qdtP" d="M63.2962 36.766C63.2962 32.1508 63.2962 27.5356 63.2962 22.9205C63.2777 22.185 63.0772 21.4648 62.7117 20.8226C59.3223 14.9868 55.8743 9.18909 52.4463 3.3724C52.232 3.01002 52.0361 2.64778 51.7447 2.11381C53.6923 2.11381 55.6399 2.11381 57.4904 2.11381C57.7834 2.11381 58.1334 2.51421 58.3092 2.81936C60.7056 6.82425 63.0618 10.8484 65.4381 14.8724L66.0611 15.8832L68.166 12.3359C70.0165 9.20817 71.8669 6.09963 73.6587 2.95293C73.7944 2.64992 74.0289 2.39851 74.3234 2.23685C74.6195 2.0752 74.9603 2.01185 75.2949 2.05657C76.911 2.05657 78.5486 2.05657 80.3404 2.05657C80.0675 2.55238 79.8917 2.89568 79.6974 3.21991C76.217 9.132 72.7366 15.0377 69.2562 20.9369C69.0018 21.3204 68.8476 21.7593 68.8091 22.2148C68.8091 27.0398 68.8091 31.8648 68.8091 36.7089L63.2962 36.766Z" fill="#637388"></path>
</svg></div>
<div class="wd-150 ht-65 bg-gray-100 mg-l-5 btn-deposit d-inline-flex align-items-center justify-content-center" onclick="$('#depositSystem').val('2'); $('.btn-deposit').removeClass('bd-gray-500 bd-1 bd') ;$(this).addClass('bd-gray-500 bd-1 bd')"><svg xmlns="http://www.w3.org/2000/svg" width="100" viewBox="0 0 143.49 40">
<defs>
<style>
                                        .cls-1 {
                                            fill: #00364d;
                                        }

                                        .cls-2 {
                                            fill: #009a61;
                                        }

                                        .cls-3 {
                                            fill: #fff;
                                        }

                                    </style>
</defs>
<title>advcash</title>
<path class="cls-1 qdt" d="M9.17,27A6.29,6.29,0,0,1,5,28.62a4.67,4.67,0,0,1-5-4.77,4.05,4.05,0,0,1,2.57-4,11.88,11.88,0,0,1,3.85-.92L9,18.72v-.55c0-1.65-1.1-2.39-2.94-2.39a8.6,8.6,0,0,0-3.85,1.1L.92,14.5A12.49,12.49,0,0,1,6.61,13c4,0,5.87,1.83,5.87,5.32V24.4a11.36,11.36,0,0,0,.37,3.85H9.72Zm-2.39-5.5a3.91,3.91,0,0,0-2.2.55,1.93,1.93,0,0,0-.92,1.65,2,2,0,0,0,2.2,2,4.9,4.9,0,0,0,2.94-1.1V21.47Z"></path>
<path class="cls-1 qdt" d="m14.68 21.1c0-4.77 3.49-7.89 8.07-7.89a7.53 7.53 0 0 1 2 0.18v-7.15h3.67v21.47a13.41 13.41 0 0 1-5.5 1.1c-4.57-0.19-8.24-2.75-8.24-7.71zm10.09 4.22v-8.81a5.66 5.66 0 0 0-1.83-0.18 4.48 4.48 0 0 0-4.59 4.77 4.24 4.24 0 0 0 4.59 4.59c0.55-0.19 1.28-0.19 1.83-0.37z"></path>
<path class="cls-1 qdt" d="m29.72 13.58h3.85l3.67 10.09 3.67-10.09h3.67l-6.05 14.86h-2.75z"></path>
<path class="cls-2" d="M45.14,21.1A7.72,7.72,0,0,1,53,13.21a10.07,10.07,0,0,1,4,.92v3.12a6.2,6.2,0,0,0-3.67-1.1c-2.75,0-4.4,2-4.4,4.77,0,3.12,1.65,4.77,4.22,4.77a7,7,0,0,0,3.49-.92l1.1,2.57a10,10,0,0,1-5.14,1.47A7.37,7.37,0,0,1,45.14,21.1Z"></path>
<path class="cls-2" d="M67.52,27a6.29,6.29,0,0,1-4.22,1.65,4.67,4.67,0,0,1-5-4.77,4.05,4.05,0,0,1,2.57-4,11.88,11.88,0,0,1,3.85-.92l2.57-.18v-.55c0-1.65-1.1-2.39-2.94-2.39a8.6,8.6,0,0,0-3.85,1.1L59.27,14.5A12.49,12.49,0,0,1,65,13c4,0,5.87,1.83,5.87,5.32V24.4a11.36,11.36,0,0,0,.37,3.85H68.07Zm-2.39-5.5a3.91,3.91,0,0,0-2.2.55A1.93,1.93,0,0,0,62,23.67a2,2,0,0,0,2.2,2,4.9,4.9,0,0,0,2.94-1.1V21.47Z"></path>
<path class="cls-2" d="M73.76,24.4a7.53,7.53,0,0,0,4,1.28c1.47,0,2.57-.37,2.57-1.65,0-2.57-7-1.65-7-6.42,0-2.57,2.2-4.4,5.69-4.4a15.77,15.77,0,0,1,4.4.73v3.12a10.88,10.88,0,0,0-4.22-.92c-1.28,0-2,.37-2,1.28,0,2.39,7,1.47,7,6.61,0,3.3-2.75,4.59-6.06,4.59a10.94,10.94,0,0,1-5.5-1.47Z"></path>
<path class="cls-2" d="M86.24,6.24h3.67v9a8,8,0,0,1,5-2c2.39,0,4.77,1.1,4.77,5.32v9.72H96V19.63c0-1.83-.37-3.3-2.2-3.3A6.08,6.08,0,0,0,90.09,18V28.26H86.42v-22Z"></path>
<circle class="cls-2" cx="123.49" cy="20" r="20"></circle>
<polygon class="cls-3" points="112.84 30.64 123.12 8.07 123.85 15.96 117.06 30.46"></polygon>
<polygon class="cls-1" points="113.58 21.1 133.03 21.1 130.83 23.85 115.41 23.85"></polygon>
<polygon class="cls-1" points="110.28 16.15 135.96 16.15 133.76 18.9 112.11 18.9"></polygon>
<polygon class="cls-3" points="133.39 30.64 123.12 8.07 122.39 15.96 129.17 30.46"></polygon>
</svg></div>
<div class="wd-150 ht-65 bg-gray-100 mg-l-5 btn-deposit d-inline-flex align-items-center justify-content-center" onclick="$('#depositSystem').val('4'); $('.btn-deposit').removeClass('bd-gray-500 bd-1 bd') ;$(this).addClass('bd-gray-500 bd-1 bd')">

</div>
<div class="wd-150 ht-65 bg-gray-100 mg-l-5 btn-deposit d-inline-flex align-items-center justify-content-center " onclick="$('#depositSystem').val('1'); $('.btn-deposit').removeClass('bd-gray-500 bd-1 bd') ;$(this).addClass('bd-gray-500 bd-1 bd')">
<h5 class="mg-t-6">Другое</h5>
</div>
</div>
<div class="d-sm-none d-block ">
<div class="row row-xs">
<div class="col-6">
<div class="wd-150 ht-65 bg-gray-100 btn-deposit d-inline-flex align-items-center justify-content-center" onclick="$('#depositSystem').val('3'); $('.btn-deposit').removeClass('bd-gray-500 bd-1 bd') ;$(this).addClass('bd-gray-500 bd-1 bd')" style="height: 55px!important;width: 100%!important;"><svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" width="80" viewBox="0 0 29.573537 13.433727" version="1.1">
<g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1" transform="translate(-48.845523,-338.5318)">
<g id="g5493" transform="matrix(0.26458333,0,0,0.26458333,48.943684,337.05093)" style="fill:none">
<path class="qdt" id="path5489" d="m 54.406,34.313 h 1.737 v 3.893 h 1.255 l 2.252,-3.893 h 1.899 l -2.703,4.569 v 0.032 L 61.71,43.9 H 59.747 L 57.43,39.717 H 56.176 V 43.9 h -1.738 v -9.588 h -0.032 z m 11.197,2.542 c 2.09,0 3.796,1.512 3.796,3.603 0,2.124 -1.673,3.604 -3.764,3.604 -2.092,0 -3.765,-1.48 -3.765,-3.604 -0.032,-2.123 1.641,-3.603 3.733,-3.603 z m 5.147,0.16 h 1.641 v 5.406 h 2.156 v -5.405 h 1.64 v 5.405 h 2.156 v -5.405 h 1.641 V 43.9 h -9.17 v -6.885 z m 14.093,-0.16 c 1.962,0 3.056,1.448 3.056,3.25 a 4.8,4.8 0 0 1 -0.064,0.675 h -4.73 c 0.097,1.19 1.03,1.834 2.06,1.834 0.707,0 1.415,-0.322 1.962,-0.74 l 0.676,1.223 c -0.708,0.61 -1.77,0.997 -2.767,0.997 -2.285,0 -3.7,-1.641 -3.7,-3.604 0,-2.155 1.447,-3.635 3.507,-3.635 z m 3.86,5.598 c 0.837,-0.129 1.448,-0.836 1.448,-3.282 v -2.155 h 5.02 V 43.9 h -1.706 v -5.502 h -1.673 v 0.772 c 0,2.992 -0.804,4.73 -3.089,4.794 v -1.512 z m 11.358,-5.598 c 1.962,0 3.056,1.448 3.056,3.25 a 4.8,4.8 0 0 1 -0.064,0.675 h -4.73 c 0.097,1.19 1.03,1.834 2.06,1.834 0.707,0 1.415,-0.322 1.962,-0.74 l 0.676,1.223 c -0.708,0.61 -1.77,0.997 -2.767,0.997 -2.284,0 -3.7,-1.641 -3.7,-3.604 0,-2.155 1.448,-3.635 3.507,-3.635 z m 4.472,0.16 h 1.705 v 2.639 h 0.837 l 1.673,-2.638 h 1.898 l -2.188,3.281 v 0.033 l 2.445,3.57 h -1.994 l -1.802,-2.798 h -0.9 V 43.9 H 104.5 v -6.885 h 0.032 z m -38.93,5.567 c 1.126,0 2.059,-0.869 2.059,-2.156 0,-1.255 -0.933,-2.156 -2.06,-2.156 -1.125,0 -2.026,0.87 -2.026,2.156 0,1.287 0.9,2.156 2.027,2.156 z M 86.162,39.59 c 0,-0.901 -0.612,-1.448 -1.384,-1.448 -0.868,0 -1.512,0.579 -1.673,1.448 z m 15.218,0 c 0,-0.901 -0.611,-1.448 -1.383,-1.448 -0.87,0 -1.513,0.579 -1.674,1.448 z" inkscape:connector-curvature="0" style="fill:#2d3540"></path>
<path id="path5491" d="M 78.44,13.432 V 29.68 a 0.44,0.44 0 0 1 -0.45,0.45 h -3.314 a 0.44,0.44 0 0 1 -0.45,-0.45 V 13.432 a 0.44,0.44 0 0 1 0.45,-0.45 h 3.314 a 0.44,0.44 0 0 1 0.45,0.45 z m 25.868,-0.45 c 0.129,0 0.29,0.064 0.45,0.193 0.097,0.096 0.097,0.257 0.065,0.386 l -5.47,16.28 a 0.458,0.458 0 0 1 -0.418,0.29 h -2.96 c -0.193,0 -0.354,-0.097 -0.418,-0.29 L 92.37,20.35 89.185,29.84 a 0.458,0.458 0 0 1 -0.418,0.29 h -2.96 c -0.193,0 -0.354,-0.096 -0.418,-0.29 l -5.47,-16.28 c -0.032,-0.128 -0.032,-0.257 0.064,-0.385 0.065,-0.129 0.226,-0.193 0.354,-0.193 h 3.7 c 0.193,0 0.354,0.128 0.419,0.321 l 2.927,9.62 3.218,-9.62 a 0.458,0.458 0 0 1 0.418,-0.29 h 2.606 c 0.193,0 0.354,0.097 0.418,0.29 l 3.218,9.62 2.928,-9.62 a 0.444,0.444 0 0 1 0.418,-0.321 h 3.7 z m 5.598,0 c 0.225,0 0.418,0.193 0.45,0.45 V 29.68 a 0.44,0.44 0 0 1 -0.45,0.45 h -3.314 a 0.44,0.44 0 0 1 -0.45,-0.45 V 13.432 a 0.44,0.44 0 0 1 0.45,-0.45 z m -37.611,16.57 c 0.193,0.225 0.032,0.546 -0.258,0.546 H 67.983 A 0.519,0.519 0 0 1 67.565,29.905 L 66.89,29.069 c -1.416,0.9 -3.09,1.448 -4.859,1.448 -4.954,0 -8.976,-4.022 -8.976,-8.977 0,-4.955 4.022,-8.977 8.976,-8.977 4.955,0 8.977,4.022 8.977,8.977 0,1.77 -0.515,3.443 -1.416,4.858 l 2.703,3.153 z m -33.88,7.882 c 0.837,0.322 1.159,1.576 1.223,2.123 0.129,0.998 -0.16,1.384 -0.482,1.384 -0.322,0 -0.773,-0.386 -1.255,-1.158 -0.483,-0.773 -0.676,-1.641 -0.418,-2.092 0.16,-0.29 0.514,-0.418 0.933,-0.257 z m -4.89,3.636 c 0.515,0 1.094,0.225 1.609,0.675 0.997,0.837 1.287,1.802 0.772,2.51 -0.29,0.354 -0.772,0.579 -1.319,0.579 -0.547,0 -1.126,-0.193 -1.512,-0.547 -0.901,-0.772 -1.158,-2.06 -0.58,-2.767 0.226,-0.29 0.58,-0.45 1.03,-0.45 z m -11.26,9.298 c -12.227,0 -22.136,-9.91 -22.136,-22.136 0,-12.226 9.91,-22.135 22.135,-22.135 12.226,0 22.136,9.91 22.136,22.135 0,4.15 -1.158,8.044 -3.12,11.358 -0.065,0.096 -0.226,0.064 -0.258,-0.065 -0.772,-5.437 -4.086,-8.43 -8.912,-9.33 -0.419,-0.065 -0.483,-0.322 0.064,-0.386 1.48,-0.129 3.571,-0.097 4.665,0.096 0.064,-0.547 0.097,-1.126 0.097,-1.705 0,-8.076 -6.564,-14.64 -14.64,-14.64 -8.075,0 -14.639,6.564 -14.639,14.64 0,8.076 6.564,14.64 14.64,14.64 h 0.675 a 19.749,19.749 0 0 1 -0.29,-3.958 c 0.033,-0.901 0.226,-1.03 0.612,-0.322 2.027,3.507 4.923,6.66 10.585,7.915 4.633,1.03 9.266,2.22 14.253,8.558 0.45,0.547 -0.225,1.126 -0.74,0.676 -5.083,-4.505 -9.716,-5.985 -13.931,-5.985 -4.73,0.033 -7.947,0.644 -11.197,0.644 z m 41.986,-24.42 -1.77,-2.156 c -0.192,-0.225 -0.031,-0.579 0.258,-0.579 h 3.732 c 0.193,-0.515 0.29,-1.094 0.29,-1.673 0,-2.67 -1.995,-4.987 -4.73,-4.987 -2.734,0 -4.73,2.317 -4.73,4.987 0,2.67 1.996,4.955 4.73,4.955 0.772,0.032 1.545,-0.193 2.22,-0.547 z" inkscape:connector-curvature="0" style="fill:#ff8c00"></path>
</g>
</g>
</svg>
</div>
</div>
<div class="col-sm col-6">
<div class="wd-150 ht-65 bg-gray-100 btn-deposit d-inline-flex align-items-center justify-content-center " onclick="$('#depositSystem').val('2'); $('.btn-deposit').removeClass('bd-gray-500 bd-1 bd') ;$(this).addClass('bd-gray-500 bd-1 bd')" style="height: 55px!important;width: 100%!important;"><svg width="80" height="38" viewBox="0 0 160 38" fill="none" xmlns="http://www.w3.org/2000/svg">
<path class="qdt qdt1 " d="M136.851 36.6707C136.851 33.4144 136.851 30.1772 136.851 26.9209C136.851 19.1005 136.851 11.2801 136.851 3.45991V2.05076C141.312 2.22208 145.696 1.59364 149.961 2.86958C151.962 3.40809 153.723 4.57671 154.969 6.19255C156.216 7.80839 156.877 9.78059 156.849 11.8006C157.007 13.9038 156.443 15.9984 155.246 17.7561C154.05 19.5137 152.287 20.8351 150.235 21.5126L149.022 21.9316L155.265 30.3295C156.849 32.4623 158.414 34.6141 160 36.766H153.386C153.398 36.6968 153.398 36.6258 153.386 36.5566C150.157 32.0433 146.928 27.5302 143.602 23.0551C143.407 22.7695 142.897 22.6933 142.349 22.4457V36.766L136.851 36.6707ZM142.448 6.69722V17.9134C144.555 18.1033 146.677 17.7895 148.63 16.9995C149.573 16.5642 150.363 15.869 150.904 15.0002C151.443 14.1313 151.708 13.1273 151.668 12.1128C151.626 11.0984 151.279 10.1182 150.669 9.2942C150.06 8.4702 149.214 7.83856 148.24 7.47793C146.399 6.77374 144.414 6.50608 142.448 6.69722Z" fill="#637388"></path>
<path class="qdtP" d="M20.4255 36.6705C20.4497 36.3847 20.5073 36.1028 20.5965 35.8306L37.1056 0.725464C37.2025 0.515373 37.3553 0.305434 37.5262 0L43.2591 12.7897L53.4816 35.5824C53.6102 35.9372 53.7131 36.3009 53.7872 36.6705H48.1692C47.0422 34.0934 45.9531 31.4973 44.7884 28.9202C44.6886 28.7793 44.5599 28.6607 44.4117 28.5719C44.2635 28.4832 44.0987 28.4263 43.9277 28.4048C39.4185 28.4048 34.9092 28.4048 30.4 28.4048C30.2396 28.415 30.0839 28.4616 29.9447 28.5411C29.8056 28.6204 29.6861 28.7305 29.5968 28.863C28.3928 31.4782 27.228 34.1316 26.0617 36.766L20.4255 36.6705ZM42.418 23.3081L37.2781 11.6062L31.9474 23.3081H42.418Z" fill="#637388"></path>
<path class="qdt qdt1" d="M83.7447 36.7277C83.7447 34.469 83.7447 32.2103 83.7447 29.9323C83.7447 21.0889 83.7447 12.2516 83.7447 3.42092V2.0426H103.45V6.94303H89.3607V15.7291H103.154V20.7826H89.3607V31.7508H103.489V36.766L83.7447 36.7277Z" fill="#637388"></path>
<path class="qdt qdt1" d="M110.298 36.7277C110.298 34.469 110.298 32.2103 110.298 29.9323C110.298 21.0889 110.298 12.2516 110.298 3.42092V2.0426H130.003V6.94303H115.914V15.7291H129.709V20.7826H115.914V31.7508H130.043V36.766L110.298 36.7277Z" fill="#637388"></path>
<path class="qdtP" d="M0 2.07118C3.70553 2.07118 7.43086 1.91825 11.0969 2.31995C13.5302 2.56168 15.7797 3.71949 17.3862 5.55717C18.9913 7.39484 19.8318 9.77369 19.7375 12.2081C19.8226 14.6387 19.0003 17.0143 17.4287 18.8759C15.8571 20.7376 13.6503 21.9531 11.2321 22.2876C9.31249 22.6128 7.39127 22.6128 5.47162 22.7657V36.766H0V2.07118ZM5.47162 17.6973C7.58429 17.9587 9.73046 17.7161 11.7307 16.9897C12.6654 16.5829 13.4481 15.8923 13.9649 15.0164C14.4816 14.1404 14.7081 13.124 14.6108 12.1124C14.6701 11.1014 14.3996 10.0985 13.8387 9.2538C13.2779 8.4089 12.4572 7.76792 11.5012 7.42653C9.55263 6.82459 7.49918 6.62925 5.47162 6.85276V17.6973Z" fill="#637388"></path>
<path class="qdtP" d="M63.2962 36.766C63.2962 32.1508 63.2962 27.5356 63.2962 22.9205C63.2777 22.185 63.0772 21.4648 62.7117 20.8226C59.3223 14.9868 55.8743 9.18909 52.4463 3.3724C52.232 3.01002 52.0361 2.64778 51.7447 2.11381C53.6923 2.11381 55.6399 2.11381 57.4904 2.11381C57.7834 2.11381 58.1334 2.51421 58.3092 2.81936C60.7056 6.82425 63.0618 10.8484 65.4381 14.8724L66.0611 15.8832L68.166 12.3359C70.0165 9.20817 71.8669 6.09963 73.6587 2.95293C73.7944 2.64992 74.0289 2.39851 74.3234 2.23685C74.6195 2.0752 74.9603 2.01185 75.2949 2.05657C76.911 2.05657 78.5486 2.05657 80.3404 2.05657C80.0675 2.55238 79.8917 2.89568 79.6974 3.21991C76.217 9.132 72.7366 15.0377 69.2562 20.9369C69.0018 21.3204 68.8476 21.7593 68.8091 22.2148C68.8091 27.0398 68.8091 31.8648 68.8091 36.7089L63.2962 36.766Z" fill="#637388"></path>
</svg></div>
</div>
<div class="col-sm col-6 mg-t-10">
<div class="wd-150 ht-65 bg-gray-100 btn-deposit d-inline-flex align-items-center justify-content-center " onclick="$('#depositSystem').val('2'); $('.btn-deposit').removeClass('bd-gray-500 bd-1 bd') ;$(this).addClass('bd-gray-500 bd-1 bd')" style="height: 55px!important;width: 100%!important;"><svg xmlns="http://www.w3.org/2000/svg" width="100" viewBox="0 0 143.49 40">
<defs>
<style>
                                                .cls-1 {
                                            fill: #00364d;
                                        }

                                        .cls-2 {
                                            fill: #009a61;
                                        }

                                        .cls-3 {
                                            fill: #fff;
                                        }

                                    </style>
</defs>
<title>advcash</title>
<path class="cls-1 qdt" d="M9.17,27A6.29,6.29,0,0,1,5,28.62a4.67,4.67,0,0,1-5-4.77,4.05,4.05,0,0,1,2.57-4,11.88,11.88,0,0,1,3.85-.92L9,18.72v-.55c0-1.65-1.1-2.39-2.94-2.39a8.6,8.6,0,0,0-3.85,1.1L.92,14.5A12.49,12.49,0,0,1,6.61,13c4,0,5.87,1.83,5.87,5.32V24.4a11.36,11.36,0,0,0,.37,3.85H9.72Zm-2.39-5.5a3.91,3.91,0,0,0-2.2.55,1.93,1.93,0,0,0-.92,1.65,2,2,0,0,0,2.2,2,4.9,4.9,0,0,0,2.94-1.1V21.47Z"></path>
<path class="cls-1 qdt" d="m14.68 21.1c0-4.77 3.49-7.89 8.07-7.89a7.53 7.53 0 0 1 2 0.18v-7.15h3.67v21.47a13.41 13.41 0 0 1-5.5 1.1c-4.57-0.19-8.24-2.75-8.24-7.71zm10.09 4.22v-8.81a5.66 5.66 0 0 0-1.83-0.18 4.48 4.48 0 0 0-4.59 4.77 4.24 4.24 0 0 0 4.59 4.59c0.55-0.19 1.28-0.19 1.83-0.37z"></path>
<path class="cls-1 qdt" d="m29.72 13.58h3.85l3.67 10.09 3.67-10.09h3.67l-6.05 14.86h-2.75z"></path>
<path class="cls-2" d="M45.14,21.1A7.72,7.72,0,0,1,53,13.21a10.07,10.07,0,0,1,4,.92v3.12a6.2,6.2,0,0,0-3.67-1.1c-2.75,0-4.4,2-4.4,4.77,0,3.12,1.65,4.77,4.22,4.77a7,7,0,0,0,3.49-.92l1.1,2.57a10,10,0,0,1-5.14,1.47A7.37,7.37,0,0,1,45.14,21.1Z"></path>
<path class="cls-2" d="M67.52,27a6.29,6.29,0,0,1-4.22,1.65,4.67,4.67,0,0,1-5-4.77,4.05,4.05,0,0,1,2.57-4,11.88,11.88,0,0,1,3.85-.92l2.57-.18v-.55c0-1.65-1.1-2.39-2.94-2.39a8.6,8.6,0,0,0-3.85,1.1L59.27,14.5A12.49,12.49,0,0,1,65,13c4,0,5.87,1.83,5.87,5.32V24.4a11.36,11.36,0,0,0,.37,3.85H68.07Zm-2.39-5.5a3.91,3.91,0,0,0-2.2.55A1.93,1.93,0,0,0,62,23.67a2,2,0,0,0,2.2,2,4.9,4.9,0,0,0,2.94-1.1V21.47Z"></path>
<path class="cls-2" d="M73.76,24.4a7.53,7.53,0,0,0,4,1.28c1.47,0,2.57-.37,2.57-1.65,0-2.57-7-1.65-7-6.42,0-2.57,2.2-4.4,5.69-4.4a15.77,15.77,0,0,1,4.4.73v3.12a10.88,10.88,0,0,0-4.22-.92c-1.28,0-2,.37-2,1.28,0,2.39,7,1.47,7,6.61,0,3.3-2.75,4.59-6.06,4.59a10.94,10.94,0,0,1-5.5-1.47Z"></path>
<path class="cls-2" d="M86.24,6.24h3.67v9a8,8,0,0,1,5-2c2.39,0,4.77,1.1,4.77,5.32v9.72H96V19.63c0-1.83-.37-3.3-2.2-3.3A6.08,6.08,0,0,0,90.09,18V28.26H86.42v-22Z"></path>
<circle class="cls-2" cx="123.49" cy="20" r="20"></circle>
<polygon class="cls-3" points="112.84 30.64 123.12 8.07 123.85 15.96 117.06 30.46"></polygon>
<polygon class="cls-1" points="113.58 21.1 133.03 21.1 130.83 23.85 115.41 23.85"></polygon>
<polygon class="cls-1" points="110.28 16.15 135.96 16.15 133.76 18.9 112.11 18.9"></polygon>
<polygon class="cls-3" points="133.39 30.64 123.12 8.07 122.39 15.96 129.17 30.46"></polygon>
</svg></div>
</div>
<div class="col-sm col-6 mg-t-10">
<div class="wd-150 ht-65 bg-gray-100 btn-deposit d-inline-flex align-items-center justify-content-center" onclick="$('#depositSystem').val('4'); $('.btn-deposit').removeClass('bd-gray-500 bd-1 bd') ;$(this).addClass('bd-gray-500 bd-1 bd')" style="height: 55px!important;width: 100%!important;">
<div class="wd-150 ht-65 bg-gray-100 mg-l-5 btn-deposit d-inline-flex align-items-center justify-content-center" onclick="$('#depositSystem').val('4'); $('.btn-deposit').removeClass('bd-gray-500 bd-1 bd') ;$(this).addClass('bd-gray-500 bd-1 bd')">

</div>
</div>
</div>
<div class="col-sm col-6 mg-t-10">
<div class="wd-150 ht-65 bg-gray-100 btn-deposit d-inline-flex align-items-center justify-content-center" onclick="$('#depositSystem').val('1'); $('.btn-deposit').removeClass('bd-gray-500 bd-1 bd') ;$(this).addClass('bd-gray-500 bd-1 bd')" style="height: 55px!important;width: 100%!important;">
<h5 class="mg-t-6">Другое</h5>
</div>
</div>
</div>
<div class="row-md">
</div>
</div>
<div class="form-group mg-t-15">
<label class="tx-normal la-mob">Сумма:</label>
<div id="the-basics" class="input-group tx-light tx-16 col-6 pd-0">
<input id="depositSize" autocomplete="off" class="form-control tx-normal " style="border-top-right-radius: 5px;border-bottom-right-radius: 5px; " placeholder="">
<input id="depositSystem" autocomplete="off" class="form-control tx-normal d-none" placeholder="">
</div>
<span class="nav-line-profile badge bt-com" style="margin-top:10px; background-color: #e5e9f2;color: #8392a5;">Комиссия: 0%</span>
</div>
<button id="depositButton" onclick="deposit()" class="btn btn-primary tx-normal btn-la-mob" style="padding: 8px 18px;">Далее</button>
<button id="error_deposit" style="margin-left: 7px; padding: 8px 22px; pointer-events: none; display:none" class="btn tx-medium btn-la-mob bg-danger-dice tx-white bd-0 btn-sel-d "></button>
<script>
                       
<div class="table-responsive mg-t-30 ">
<div class="table-responsive">
<table class="table table-sm mg-b-0 table-deposit">
<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">Дата</th>
<th scope="col">Сумма</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
    $('#checkModal').on('show.bs.modal', function (e) {
        var gi = $(e.relatedTarget).attr('gameid');
        
        if (isNaN(window.location.pathname.split("/")[2]) && window.location.pathname.split("/")[1] !== 'game'){
        $.ajax({
        type: 'POST',
        url: '/action.php',
        data: {
            type: "gameHistory",
            id: gi
        },
        success: function (data) {
            history.pushState(null, null, '/game/' + gi);
            $("#checkModal .modal-body").html(data);
        }
    });
        
        
        
        $(this).find('#modalGameId').html(gi);
        }
    });





        $('[data-toggle="tooltip"]').tooltip();

      

        $(".js-range-slider").ionRangeSlider({

            skin: "round",
            min: 2,
            max: 24,
            from: 3,
            grid: true,


        });
        route();
        
        

    </script>

<div class="footer hash-mob ft-ct">
<footer class="footer container" style="border:0">
<div>
<span>© 2020 Cabura.dog ALL RIGHTS RESERVED </span>

</div>
<div>
<nav class="nav">
<a href="terms" class="nav-link">Пользовательское соглашение</a>
<a href="policy" class="nav-link">Политика конфеденциальности</a>
</nav>
</div>
</footer>
</div>
<div class="content content-fixed hash-mob ft-ct d-none">
<footer>
<div class="text-center d-none">

<svg class="mg-t-4 mg-l-15" width="72" height="26" viewBox="0 0 72 26">
<path fill="#637388" fill-rule="evenodd" d="M17.614 22.796c2.243 0 4.676.76 7.37 3.118.27.236.629-.057.393-.35-2.647-3.303-5.095-3.932-7.536-4.463-2.986-.65-4.523-2.31-5.593-4.133-.213-.363-.309-.3-.328.167-.023.57.016 1.325.146 2.067-.12.005-.242.004-.364.004-4.272 0-7.736-3.422-7.736-7.644 0-4.22 3.464-7.643 7.736-7.643s7.736 3.422 7.736 7.643c0 .3-.015.598-.049.889-.565-.1-1.677-.112-2.457-.045-.293.025-.252.16-.03.2 2.557.456 4.314 2.022 4.716 4.863.009.066.095.085.13.029a11.405 11.405 0 0 0 1.656-5.936C23.404 5.177 18.165 0 11.702 0S0 5.177 0 11.562c0 6.386 5.24 11.564 11.702 11.564 1.715 0 3.416-.33 5.912-.33zm.871-4.198c.52.435.68.952.404 1.317-.153.2-.401.31-.699.31a1.25 1.25 0 0 1-.796-.285c-.474-.409-.613-1.071-.304-1.448.121-.147.317-.228.553-.228.285 0 .585.119.842.334zm2.402-1.104c.077.506-.085.716-.248.716-.177 0-.4-.205-.663-.61-.26-.4-.355-.86-.226-1.092.085-.153.263-.22.487-.136.434.162.605.819.65 1.122zm16.222-2.648l-1.35-1.604a.258.258 0 0 1 .202-.423h2.822c.134-.395.21-.817.21-1.256 0-2.008-1.513-3.74-3.589-3.74-2.077 0-3.59 1.732-3.59 3.74 0 2.009 1.513 3.716 3.59 3.716.63 0 1.206-.16 1.705-.433zm6.104 2.71c.147.16.026.417-.194.417h-3.08a.424.424 0 0 1-.325-.15l-.522-.62a6.816 6.816 0 0 1-3.688 1.078c-3.75 0-6.8-3.013-6.8-6.718 0-3.704 3.05-6.718 6.8-6.718s6.8 3.014 6.8 6.718c0 1.336-.399 2.58-1.081 3.627l2.09 2.365zM71.666 5.153h-2.514a.333.333 0 0 0-.334.33v12.158c0 .182.15.33.334.33h2.514a.332.332 0 0 0 .334-.33V5.485c0-.183-.15-.331-.334-.331zm-4.23 0h-2.812a.334.334 0 0 0-.32.232l-2.226 7.185-2.446-7.193a.334.334 0 0 0-.317-.224h-1.962a.334.334 0 0 0-.318.224l-2.445 7.193-2.226-7.185a.334.334 0 0 0-.32-.232h-2.812a.337.337 0 0 0-.271.136.322.322 0 0 0-.046.295l4.13 12.164a.334.334 0 0 0 .318.224h2.232c.144 0 .271-.09.317-.223l2.422-7.107 2.422 7.107a.334.334 0 0 0 .317.223h2.232c.144 0 .272-.09.317-.224l4.131-12.164a.322.322 0 0 0-.046-.295.337.337 0 0 0-.271-.136zm-19.586.33v12.158c0 .182-.15.33-.334.33h-2.514a.332.332 0 0 1-.334-.33V5.485c0-.183.15-.331.334-.331h2.514c.184 0 .334.148.334.33z"></path>
</svg>

</div>
</footer>
</div>

<script>history.pushState(null, null, window.location.pathname.split("?")[0]);</script>

<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1002"></defs><polyline id="SvgjsPolyline1003" points="0,0"></polyline><path id="SvgjsPath1004" d="M0 0 "></path></svg><div class="backdrop"></div><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="проверка recaptcha" src="https://www.google.com/recaptcha/api2/bframe?hl=ru&amp;v=61bII03-TtCmSUR7dw9MJF9q&amp;k=6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk&amp;cb=7w6o8i2lc5e" name="c-1r50eisdq2q6" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="проверка recaptcha" src="https://www.google.com/recaptcha/api2/bframe?hl=ru&amp;v=61bII03-TtCmSUR7dw9MJF9q&amp;k=6LeelqAUAAAAANC5GR_WWHaMeDH45EPA6gTZ1WAk&amp;cb=jp74d9x2f4ov" name="c-9aqpvwkuwxal" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div></body></html>

<script src="/color.js"></script>