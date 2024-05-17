<?php
 $resume['contact'] = str_replace('\\',"",$resume['contact']);
 $resume['skills'] = str_replace('\\',"",$resume['skills']);
 $resume['experience'] = str_replace('\\',"",$resume['experience']);
 $resume['education'] = str_replace('\\',"",$resume['education']);

 $contact = json_decode($resume['contact']);
 $skills = json_decode($resume['skills']);
 $experience = json_decode($resume['experience']);
 $education = json_decode($resume['education']);
?>
<html lang="en"><head>
  <meta charset="UTF-8">
  

    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">

    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">

    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111">



  
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
  
<style>
    
@import url("https://fonts.googleapis.com/css?family=Montserrat");
* {
  outline: none;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

html,
body {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  transition: 0.5s;
  background: #ffffff;
  cursor: default;
  font-family: "Montserrat", sans-serif;
  font-size: 16px;
}

a {
  text-decoration: none;
  color: #ffffff;
  display: block;
  transition-duration: 0.3s;
}

ul {
  list-style-type: none;
  padding: 0;
}

h3 {
  color: #ffb300;
  margin: 10px 0;
  text-transform: lowercase;
  font-size: 1.25em;
}

.resume {
  width: 960px;
  background: #1a237e;
  color: #ffffff;
  margin: 20px auto;
  box-shadow: 10px 10px #0e1442;
  position: relative;
  display: flex;
}

.resume .base,
.resume .func {
  box-sizing: border-box;
  float: left;
}

.resume .base > div,
.resume .func > div {
  padding-bottom: 10px;
}

.resume .base > div:last-of-type,
.resume .func > div:last-of-type {
  padding-bottom: 0;
}

.resume .base {
  width: 30%;
  padding: 30px 15px;
  background: #283593;
  color: #ffffff;
}

.resume .base .profile {
  background: #ffb300;
  padding: 30px 15px 40px 15px;
  margin: -30px -15px 45px -15px;
  position: relative;
  z-index: 2;
}

.resume .base .profile::after {
  content: "";
  position: absolute;
  background: #303f9f;
  width: 100%;
  height: 30px;
  bottom: -15px;
  left: 0;
  transform: skewY(-5deg);
  z-index: -1;
}

.resume .base .profile .photo img {
  width: 100%;
  border-radius: 50%;
}

.resume .base .profile .photo {
  display: flex;
  justify-content: center;
  align-items: center;
}

.resume .base .profile .fa-rocket {
  font-size: 100px;
  text-align: center;
  margin: auto;
  color: #283593;
}

.resume .base .profile .info {
  text-align: center;
  color: #ffffff;
}

.resume .base .profile .info .name {
  margin-top: 10px;
  margin-bottom: 0;
  font-size: 1.75em;
  text-transform: lowercase;
  color: #1a237e;
}

.resume .base .profile .info .job {
  margin-top: 10px;
  margin-bottom: 0;
  font-size: 1.5em;
  text-transform: lowercase;
  color: #283593;
}

.resume .base .contact div {
  line-height: 24px;
}

.resume .base .contact div a:hover {
  color: #fdd835;
}

.resume .base .contact div a:hover span::after {
  width: 100%;
}

.resume .base .contact div:hover i {
  color: #fdd835;
}

.resume .base .contact div i {
  color: #ffb300;
  width: 20px;
  height: 20px;
  font-size: 20px;
  text-align: center;
  margin-right: 15px;
  transition-duration: 0.3s;
}

.resume .base .contact div span {
  position: relative;
}

.resume .base .contact div span::after {
  content: "";
  position: absolute;
  background: #fdd835;
  height: 1px;
  width: 0;
  bottom: 0;
  left: 0;
  transition-duration: 0.3s;
}

.resume .base .follow .box {
  text-align: center;
  vertical-align: middle;
}

.resume .base .follow .box a {
  display: inline-block;
  vertical-align: text-bottom;
}

.resume .base .follow .box a:hover i {
  background: #fdd835;
  border-radius: 5px;
  transform: rotate(45deg) scale(0.8);
}

.resume .base .follow .box a:hover i::before {
  transform: rotate(-45deg) scale(1.5);
}

.resume .base .follow .box i {
  display: inline-block;
  font-size: 30px;
  background: #ffb300;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  line-height: 60px;
  color: #283593;
  margin: 0 10px 10px 10px;
  transition-duration: 0.3s;
}

.resume .base .follow .box i::before {
  transition-duration: 0.3s;
}

.resume .base .follow .box i.fa::before {
  display: block;
}

.resume .func {
  width: 100%;
  padding: 30px;
}

.resume .func:hover > div {
  transition-duration: 0.5s;
}

.resume .func:hover > div:hover h3 i {
  transform: scale(1.25);
}

.resume .func:hover > div:not(:hover) {
  opacity: 0.5;
}

.resume .func h3 {
  transition-duration: 0.3s;
  margin-top: 0;
}

.resume .func h3 i {
  color: #283593;
  background: #ffb300;
  width: 42px;
  height: 42px;
  font-size: 20px;
  line-height: 42px;
  border-radius: 50%;
  text-align: center;
  vertical-align: middle;
  margin-right: 8px;
  transition-duration: 0.3s;
}

.resume .func .work,
.resume .func .edu {
  float: left;
}

.resume .func .work small,
.resume .func .edu small {
  display: block;
  opacity: 0.7;
}

.resume .func .work ul li,
.resume .func .edu ul li {
  position: relative;
  margin-left: 15px;
  padding-left: 25px;
  padding-bottom: 15px;
}

.resume .func .work ul li:hover::before,
.resume .func .edu ul li:hover::before {
  -webkit-animation: circle 1.2s infinite;
          animation: circle 1.2s infinite;
}

.resume .func .work ul li:hover span,
.resume .func .edu ul li:hover span {
  color: #fdd835;
}

@-webkit-keyframes circle {
  from {
    box-shadow: 0 0 0 0px #fdd835;
  }
  to {
    box-shadow: 0 0 0 6px rgba(255, 255, 255, 0);
  }
}

@keyframes circle {
  from {
    box-shadow: 0 0 0 0px #fdd835;
  }
  to {
    box-shadow: 0 0 0 6px rgba(255, 255, 255, 0);
  }
}
.resume .func .work ul li:first-of-type::before,
.resume .func .edu ul li:first-of-type::before {
  width: 10px;
  height: 10px;
  left: 1px;
}

.resume .func .work ul li:last-of-type,
.resume .func .edu ul li:last-of-type {
  padding-bottom: 3px;
}

.resume .func .work ul li:last-of-type::after,
.resume .func .edu ul li:last-of-type::after {
  border-radius: 1.5px;
}

.resume .func .work ul li::before,
.resume .func .work ul li::after,
.resume .func .edu ul li::before,
.resume .func .edu ul li::after {
  content: "";
  display: block;
  position: absolute;
}

.resume .func .work ul li::before,
.resume .func .edu ul li::before {
  width: 7px;
  height: 7px;
  border: 3px solid #ffffff;
  background: #ffb300;
  border-radius: 50%;
  left: 3px;
  z-index: 1;
}

.resume .func .work ul li::after,
.resume .func .edu ul li::after {
  width: 3px;
  height: 100%;
  background: #ffffff;
  left: 5px;
  top: 0;
}

.resume .func .work ul li span,
.resume .func .edu ul li span {
  transition-duration: 0.3s;
}

.resume .func .work {
  width: 48%;
  background: #283593;
  padding: 15px;
  margin: 0 4% 15px 0;
}

.resume .func .edu {
  width: 48%;
  background: #283593;
  padding: 15px;
}

.resume .func .skills-prog {
  clear: both;
  background: #283593;
  padding: 15px;
}

.resume .func .skills-prog ul {
  margin-left: 15px;
}

.resume .func .skills-prog ul li {
  margin-bottom: 8px;
  display: flex;
  align-items: center;
  transition-duration: 0.3s;
}

.resume .func .skills-prog ul li:hover {
  color: #fdd835;
}

.resume .func .skills-prog ul li:hover .skills-bar .bar {
  background: #fdd835;
  box-shadow: 0 0 0 1px #fdd835;
}

.resume .func .skills-prog ul li span {
  display: block;
  width: 120px;
}

.resume .func .skills-prog ul li .skills-bar {
  background: #ffffff;
  height: 2px;
  width: calc(100% - 120px);
  position: relative;
  border-radius: 2px;
}

.resume .func .skills-prog ul li .skills-bar .bar {
  position: absolute;
  top: -1px;
  height: 4px;
  background: #ffb300;
  box-shadow: 0 0 0 #ffb300;
  border-radius: 5px;
}

.resume .func .skills-soft {
  clear: both;
  background: #283593;
  padding: 15px;
  margin: 15px 0 0;
}

.resume .func .skills-soft ul {
  display: flex;
  justify-content: space-between;
  text-align: center;
}

.resume .func .skills-soft ul li {
  position: relative;
}

.resume .func .skills-soft ul li:hover svg .cbar {
  stroke: #fdd835;
  stroke-width: 4px;
}

.resume .func .skills-soft ul li:hover span,
.resume .func .skills-soft ul li:hover small {
  transform: scale(1.2);
}

.resume .func .skills-soft ul li svg {
  width: 95%;
  fill: transparent;
  transform: rotate(-90deg);
}

.resume .func .skills-soft ul li svg circle {
  stroke-width: 1px;
  stroke: #ffffff;
}

.resume .func .skills-soft ul li svg .cbar {
  stroke-width: 3px;
  stroke: #ffb300;
  stroke-linecap: round;
}

.resume .func .skills-soft ul li span,
.resume .func .skills-soft ul li small {
  position: absolute;
  display: block;
  width: 100%;
  top: 52%;
  transition-duration: 0.3s;
}

.resume .func .skills-soft ul li span {
  top: 40%;
}

.resume .func .interests {
  background: #283593;
  margin: 15px 0 0;
  padding: 15px;
}

.resume .func .interests-items {
  box-sizing: border-box;
  padding: 0 0 15px;
  width: 100%;
  text-align: center;
  display: flex;
  justify-content: space-between;
}

.resume .func .interests-items div {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100px;
  height: 100px;
  border-radius: 50%;
}

.resume .func .interests-items div:hover i {
  transform: scale(1.2);
}

.resume .func .interests-items div:hover span {
  color: #fdd835;
  transition-duration: 0.3s;
}

.resume .func .interests-items div i {
  font-size: 45px;
  width: 60px;
  height: 60px;
  line-height: 60px;
  color: #ffb300;
  transition-duration: 0.3s;
}

.resume .func .interests-items div span {
  display: block;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no"  id="down">
  <div class="resume">
  <div class="base">
    <div class="profile">
      <div class="photo">
        <!--<img src="" /> -->
        <i class="fas fa-rocket"></i>
      </div>
      <div class="info">
        <h1 class="name"><?=@$resume['name']?></h1>
        <h2 class="job"><?=@$resume['headline']?></h2>
      </div>
    </div>
    <div class="about">
      <h3>About Me</h3>
      <span class="text-break">
      <?=@$resume['objective']?>
</span>
    </div>
    <div class="contact container">
      <h3>Contact Me</h3>
      <div class="call"><a href="tel:123-456-7890"><i class="fas fa-phone"></i><span><?=@$contact->mobile?></span></a></div>
      <div class="address"><a href="https://goo.gl/maps/fiTBGT6Vnhy"><i class="fas fa-map-marker"></i><span><?=@$contact->address?></span></a>
      </div>
      <div class="email "><a href="mailto:astronaomical@gmail.com"><i class="fas fa-envelope"></i><span class="text-wrap"><?=@$contact->email?></span></a></div>
    </div>
    <div class="follow">
      <h3>Follow Me</h3>
      <div class="box">
        <a href="https://www.facebook.com/astronaomical/" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/astronaomical/" target="_blank"><i class="fab fa-instagram "></i></a>
        <a href="https://www.pinterest.com/astronaomical/" target="_blank"><i class="fab fa-pinterest"></i></a>
        <a href="https://www.linkedin.com/in/naomi-weatherford-758385112/" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a href="https://codepen.io/astronaomical/" target="_blank"><i class="fab fa-codepen"></i></a>
        <a href="https://www.behance.net/astronaomical" target="_blank"><i class="fab fa-behance"></i></a>
      </div>
    </div>
  </div>
  <div class="func">
    <div class="work">
      <h3><i class="fa fa-briefcase"></i>Experience</h3>
      <ul>
        <?php 
					    if($experience == null or count($experience)<1)
						{
							  ?>
							  <div class="job">
								
								<h3>Fresher</h3>

						</div>
							  <?php
						}
            else
            {
					    foreach($experience as $exp)
						   {
							?>
            <li><span><?=@$exp->company?></span><small><?=@$exp->jobrole?></small><small><?=@$exp->w_duration?></small><small><?=@$exp->about?></small></li>
            <?php
                 }
                }
                           ?>
      </ul>
    </div>
    <div class="edu">
      <h3><i class="fa fa-graduation-cap"></i>Education</h3>
      <ul>
        <?php 
						if($education == null or count($education)<1)
						{
							 ?>
							  <div class="job">
								
								<h3>No Education</h3>

						</div>
							 <?php
						}
                        else{
						foreach($education as $edu)
						{
							?>
        <li><span><?=@$edu->college?></span><small><?=@$edu->course?></small><small><?=@$edu->e_duration?></small></li>
        <?php 
                        }
                    }
                        ?>
                        
      </ul>
    </div>
    <div class="skills-prog">
      <h3><i class="fas fa-code"></i>Programming Skills</h3>
      <ul>
        <?php
						   if($skills==null or count($skills)<1)
						    {
							  ?>
							  <div class="job">
								
								<h3>No Skills</h3>

						       </div> 
						<?php
							}
							else
							{
                                 function randomNumber($len)
{
    static $track = [];
    
    $min = 1 . str_repeat(0, $len - 1);
    $max = str_repeat(9, $len);
    $num = mt_rand($min, $max);
    
    // if was generated before, try again
    if (in_array($num, $track))
    {
        return random($len);
    }
    
    // store and return
    return $track[] = $num;

}
							   foreach($skills as $skill)
							   {
                                $num = randomNumber(2);
								  ?>
        <li data-percent="<?=$num?>"><span><?=@$skill?></span>
          <div class="skills-bar">
            <div class="bar" style="transition-duration: 0.5s;" ></div>
          </div>
        </li>
        <?php 
              //$x=mt_rand(0,100);
                               }}
        ?>

      </ul>
    </div>
    <div class="skills-soft">
      <h3><i class="fas fa-bezier-curve"></i>Software Skills</h3>
      <ul>
        <li data-percent="<?=randomNumber(2)?>">
          <svg viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="45"></circle>
            <circle class="cbar" cx="50" cy="50" r="45" style="stroke-dashoffset: 28.2743px; stroke-dasharray: 282.743px; transition-duration: 0.3s;"></circle>
          </svg><span>Illustrator</span><small>90%</small>
        </li>
        <li data-percent="<?=randomNumber(2)?>">
          <svg viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="45"></circle>
            <circle class="cbar" cx="50" cy="50" r="45" style="stroke-dashoffset: 70.6858px; stroke-dasharray: 282.743px; transition-duration: 0.3s;"></circle>
          </svg><span>Photoshop</span><small>75%</small>
        </li>
        <li data-percent="<?=randomNumber(2)?>">
          <svg viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="45"></circle>
            <circle class="cbar" cx="50" cy="50" r="45" style="stroke-dashoffset: 42.4115px; stroke-dasharray: 282.743px; transition-duration: 0.3s;"></circle>
          </svg><span>InDesign</span><small>85%</small>
        </li>
        <li data-percent="<?=randomNumber(2)?>">
          <svg viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="45"></circle>
            <circle class="cbar" cx="50" cy="50" r="45" style="stroke-dashoffset: 98.9602px; stroke-dasharray: 282.743px; transition-duration: 0.3s;"></circle>
          </svg><span>Dreamweaver</span><small>65%</small>
        </li>
      </ul>
    </div>
     <button type="button" class="mt-5 btn btn-outline-warning fw-bold" onclick="window.print()">Download Pdf</button>

</div>
  </div>
</div>
</div>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</body></html>