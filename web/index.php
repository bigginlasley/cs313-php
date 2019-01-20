<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Homepage</title>

<style>

body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bg_img-1, .bg_img-2 {
  position: relative;
  opacity: 0.65;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bg_img-1 {
  background-image: url("Side.jpg");
  min-height: 100%;
}

.bg_img-2 {
  background-image: url("lookingdown.jpg");
  min-height: 80%;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

/* Turn off parallax scrolling for tablets and phones */
/* Grabbed some of this from W3Schools */
@media only screen and (max-device-width: 1024px) {
  .bg_img-1, .bg_img-2 {
    background-attachment: scroll;
  }
}
</style>
</head>
<body data-gr-c-s-loaded="true">

<?php



?>


<div class="bg_img-1">
  <div class="caption">
  <span class="border">What will you do?</span>
  </div>
</div>


<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">Snowmobiliing</h3>
  <p>Imagine this, your sitting at the bottom of a mountain looking up at the unmarked snow. You're out in the cold open air. Feeling it sting your nose as you breate in. Feeling the seld glide over the powder. If you haven't exereinced this you're missing out. Snowmobilling is one of my favorite things to do during the winter. Dipping your sled cutting into the poweder as you turn up the mountain. Squeezing the throttle, feeling the sled cut deeper as it turns up the hill. Pressing down on your back foot making your sled cut tighter before taking off up the mountain. Unmarked snow, it's yours for the taking. </p>
</div>


<div class="bg_img-2">
</div>


<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
  <p>I just wanted to show some pretty cool things about snowmobiling off. It's one of my favortie things to do. The only time I've heard someone having a bad time is when they get cold, and yeah that sucks. As long as you have the proper gear, it's a really fun time.</p>
  </div>
</div>


<div class="bg_img-1">
  <a href="assignments.php">
  <div class="caption">
  <span class="border">Assignments</span>
  </div>
  </a>
</div>

</body>
</html>