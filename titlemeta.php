<title>jargrafika.com</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
<link href="css/radio.css" rel="stylesheet"/>
<style>
*, *:before, *:after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

@font-face {
  font-family: pfs-bold;
  src: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/PFSquareSansPro-Bold.otf");
}

.drop {
  width: 100%;
  margin: 5em auto;
  font-family: pfs-bold;
  color: #c4c4c4;
  text-transform: uppercase;
  position: relative;
  transition: width 0.5s;
  will-change: width;
}
.drop .option {
  padding: 1em;
  cursor: pointer;
  background-color: #f5f5f5;
}
.drop .option:not(.active) {
  display: none;
  opacity: 0;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}
.drop.visible {
  -webkit-animation: bounce 1s;
          animation: bounce 1s;
  width: 100%;
}
.drop.visible:before, .drop.visible:after {
  border-color: #fff;
}
.drop.visible:before {
  opacity: 0;
}
.drop.visible:after {
  opacity: 1;
}
.drop.visible .option {
  color: #c4c4c4;
  display: block;
}
.drop.opacity .option {
  -webkit-transform: translateZ(0);
          transform: translateZ(0);
  opacity: 1;
}
.drop.opacity .option:nth-child(0) {
  transition: opacity 0.5s 0s, -webkit-transform 0.5s 0s;
  transition: opacity 0.5s 0s, transform 0.5s 0s;
  transition: opacity 0.5s 0s, transform 0.5s 0s, -webkit-transform 0.5s 0s;
}
.drop.opacity .option:nth-child(1) {
  transition: opacity 0.5s 0.1s, -webkit-transform 0.5s 0.1s;
  transition: opacity 0.5s 0.1s, transform 0.5s 0.1s;
  transition: opacity 0.5s 0.1s, transform 0.5s 0.1s, -webkit-transform 0.5s 0.1s;
}
.drop.opacity .option:nth-child(2) {
  transition: opacity 0.5s 0.2s, -webkit-transform 0.5s 0.2s;
  transition: opacity 0.5s 0.2s, transform 0.5s 0.2s;
  transition: opacity 0.5s 0.2s, transform 0.5s 0.2s, -webkit-transform 0.5s 0.2s;
}
.drop.opacity .option:nth-child(3) {
  transition: opacity 0.5s 0.3s, -webkit-transform 0.5s 0.3s;
  transition: opacity 0.5s 0.3s, transform 0.5s 0.3s;
  transition: opacity 0.5s 0.3s, transform 0.5s 0.3s, -webkit-transform 0.5s 0.3s;
}
.drop.opacity .option:nth-child(4) {
  transition: opacity 0.5s 0.4s, -webkit-transform 0.5s 0.4s;
  transition: opacity 0.5s 0.4s, transform 0.5s 0.4s;
  transition: opacity 0.5s 0.4s, transform 0.5s 0.4s, -webkit-transform 0.5s 0.4s;
}
.drop.opacity .option:nth-child(5) {
  transition: opacity 0.5s 0.5s, -webkit-transform 0.5s 0.5s;
  transition: opacity 0.5s 0.5s, transform 0.5s 0.5s;
  transition: opacity 0.5s 0.5s, transform 0.5s 0.5s, -webkit-transform 0.5s 0.5s;
}
.drop.opacity .option:nth-child(6) {
  transition: opacity 0.5s 0.6s, -webkit-transform 0.5s 0.6s;
  transition: opacity 0.5s 0.6s, transform 0.5s 0.6s;
  transition: opacity 0.5s 0.6s, transform 0.5s 0.6s, -webkit-transform 0.5s 0.6s;
}
.drop.opacity .option:nth-child(7) {
  transition: opacity 0.5s 0.7s, -webkit-transform 0.5s 0.7s;
  transition: opacity 0.5s 0.7s, transform 0.5s 0.7s;
  transition: opacity 0.5s 0.7s, transform 0.5s 0.7s, -webkit-transform 0.5s 0.7s;
}
.drop.opacity .option:nth-child(8) {
  transition: opacity 0.5s 0.8s, -webkit-transform 0.5s 0.8s;
  transition: opacity 0.5s 0.8s, transform 0.5s 0.8s;
  transition: opacity 0.5s 0.8s, transform 0.5s 0.8s, -webkit-transform 0.5s 0.8s;
}
.drop.opacity .option:nth-child(9) {
  transition: opacity 0.5s 0.9s, -webkit-transform 0.5s 0.9s;
  transition: opacity 0.5s 0.9s, transform 0.5s 0.9s;
  transition: opacity 0.5s 0.9s, transform 0.5s 0.9s, -webkit-transform 0.5s 0.9s;
}
.drop.withBG .option {
  transition: background-color 0.1s;
}
.drop.withBG .option:not(.placeholder):hover {
  background-color: #fc636b;
	color: #fff;
}
.drop.withBG .option:not(.placeholder).active {
  background-color: #fc636b;
	color: #fff;
}
.drop:after, .drop:before {
  content: "";
  position: absolute;
  top: 1.5em;
  right: 1em;
  width: 0.75em;
  height: 0.75em;
  border: 0.2em solid #86919a;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
  transition: opacity 0.2s;
}
.drop:before {
  border-left: none;
  border-top: none;
  top: 1.2em;
}
.drop:after {
  border-right: none;
  border-bottom: none;
  opacity: 0;
}

.mini-hack {
  opacity: 0;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}
</style>
<?php
$connDB = mysqli_connect('localhost','root','','db_perusahaan') or die("Connection to db_perushaaan failed".mysqli_error());
$connClientDB = mysqli_connect('localhost','root','','db_client') or die("Connection to Client Database failed");
$connKode = mysqli_connect('localhost','root','','kode_harga') or die("Connection to kode_harga database failed");
?>