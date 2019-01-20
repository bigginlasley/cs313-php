<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Assignments</title>

<style>

body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bg_img-1 {
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


<div class="bg_img-1">
  <div class="caption">
  <span class="border">Comming Soon</span>
  </div>
</div>




<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
  <p style="text-align: center;">
  <?php
echo date ("D M d, Y G:i a");


?>
    </p>
  </div>
</div>

<div class="bg_img-1">
  <a href="index.php">
  <div class="caption">
  <span class="border">Check Back later</span>
  </div>
  </a>
</div>

</body>
</html>