<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
 // Allow from any origin
    if (isset($_SERVER['HTTP_ORIGIN'])) {
        // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
        // you want to allow, and if so:
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }
    
    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
        
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            // may also be using PUT, PATCH, HEAD etc
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         
        
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
    
    }
?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dynamic Videos</title>
    <script src="assets/js/anime.min.js"></script>
    <!--<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/keyframe.js"></script>
	<link rel="stylesheet" href="assets/css/style.css">	
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
</head>
<body>
    <script>
        $(document).ready(function(){
			$("#audioIntro source").attr("src","https://translate.google.com/translate_tts?ie=UTF-8&q="+"Welcome to iParhai!"+"&tl=en&total=1&idx=0&prev=input&client=tw-ob.mp3");
        });
    </script>       
    <audio controls autoplay loop hidden="" style="display: none;" id="audioBg">
        <source src="" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>

    <audio controls autoplay id="audioIntro" autoplay>
        <source src="" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio> 
    
    <audio controls id="audioIntro2">
        <source src="" type="audio/mpeg">
        Your browser does not support the audio tag.
    </audio>
</body>
</html>