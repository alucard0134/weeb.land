<!DOCTYPE animu>
<html>
<head>
<style>
#video {
  position: fixed;
  top: 0; right: 0; bottom: 0; left: 0;
  overflow: hidden;
}
#video > video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
@media (min-aspect-ratio: 16/9) {
  #video > a > video { height: 300%; top: -100%; }
}
@media (max-aspect-ratio: 16/9) {
  #video > a > video { width: 300%; left: -100%; }
}
@supports (object-fit: cover) {
  #video > a >video {
    top: 0; left: 0;
    width: 100%; height: 100%;
    object-fit: cover;
  }
}
/* weeb Header Style */
@font-face {
	font-family: "qt";
    src: url(https://dr0p.it/n4kl.ttf) format("truetype");
}
.weeb-top {
    line-height: 24px;
    padding-top: 5px;
    font-size: 30px;
    background: #fff;
    background: rgba(33, 33, 33, 0.9);
    text-transform: uppercase;
    z-index: 9999;
    position: absolute;
    width: 100%;
    top: 0;
    left: 0;
    font-family: 'qt';
    box-shadow: 1px 0px 2px rgba(0,0,0,0.2);
}
.weeb-top a {
    padding: 0px 10px;
    letter-spacing: 1px;
    color: #bfbfbf;
    display: inline-block;
    text-decoration: none;
}
.weeb-top a:hover {
    background: none;
    color: pink;
}
.weeb-top span.right{
    float: right;
    padding-right: 5px;
}
.weeb-top span.center{
    float: center;
}
.weeb-top span.right a{
    float: left;
    display: block;
}
</style>
</head>
<body>
  <div class="weeb-top">
    <a href="https://weeb.land">weeb.land</a>
    <span class="center">
    <input type=range id=volume min=0 max=1 step=0.1 value=0.5 onchange='AdjustVolume(video,this.value)'>
	<span class="right">
      <a href="https://w0bm.com">w0bm.com</a>
        <div class="clr"></div>
      </span>
      </div>
  <div id="video">
  <a href="/"><video autoplay loop id="animu" src="<?php $faggotShit = file('webm.txt'); $faggotShit = array_combine($faggotShit, $faggotShit); echo $faggotShit[array_rand($faggotShit)]; ?>" type="video/webm"></video></a>
</div>
<script>
//check if volume is stored, else set at half volume and call it a day wewlad
    if (localStorage.getItem('volume') != null) {
        var video = document.getElementById('animu');
        video.volume = localStorage.getItem('volume');
    } else if (localStorage.getItem('volume') == null) {
        var video = document.getElementById('animu');
        video.volume = 0.5;
    }

//set current volume slider volume
document.getElementById("volume").value = video.volume

//some varible because i cba to neat it up and shove it into the function below
var video = document.getElementById('animu');

//when you move that shit slider this happens
function AdjustVolume(video,value) {
  video.volume = value;
  localStorage.setItem('volume', video.volume);
}
</script>
</body>
</html>
