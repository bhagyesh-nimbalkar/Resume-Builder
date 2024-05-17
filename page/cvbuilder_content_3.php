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
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sample Resume</title>
  <link rel="stylesheet" href="./style.css">
 <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html {
  height: 100%;
}

body {
  min-height: 100%;
  background: #eee;
  font-family: "Lato", sans-serif;
  font-weight: 400;
  color: #222;
  font-size: 14px;
  line-height: 26px;
  padding-bottom: 50px;
}

.container {
  max-width: 700px;
  background: #fff;
  margin: 0px auto 0px;
  box-shadow: 1px 1px 2px #DAD7D7;
  border-radius: 3px;
  padding: 40px;
  margin-top: 50px;
}

.header {
  margin-bottom: 30px;
}
.header .full-name {
  font-size: 40px;
  text-transform: uppercase;
  margin-bottom: 5px;
}
.header .first-name {
  font-weight: 700;
}
.header .last-name {
  font-weight: 300;
}
.header .contact-info {
  margin-bottom: 20px;
}
.header .email,
.header .phone {
  color: #999;
  font-weight: 300;
}
.header .separator {
  height: 10px;
  display: inline-block;
  border-left: 2px solid #999;
  margin: 0px 10px;
}
.header .position {
  font-weight: bold;
  display: inline-block;
  margin-right: 10px;
  text-decoration: underline;
}

.details {
  line-height: 20px;
}
.details .section {
  margin-bottom: 40px;
}
.details .section:last-of-type {
  margin-bottom: 0px;
}
.details .section__title {
  letter-spacing: 2px;
  color: #54AFE4;
  font-weight: bold;
  margin-bottom: 10px;
  text-transform: uppercase;
}
.details .section__list-item {
  margin-bottom: 40px;
}
.details .section__list-item:last-of-type {
  margin-bottom: 0;
}
.details .left,
.details .right {
  vertical-align: top;
  display: inline-block;
}
.details .left {
  width: 60%;
}
.details .right {
  tex-align: right;
  width: 39%;
}
.details .name {
  font-weight: bold;
}
.details a {
  text-decoration: none;
  color: #000;
  font-style: italic;
}
.details a:hover {
  text-decoration: underline;
  color: #000;
}
.details .skills__item {
  margin-bottom: 10px;
}
.details .skills__item .right input {
  display: none;
}
.details .skills__item .right label {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: #C3DEF3;
  border-radius: 20px;
  margin-right: 3px;
}
.details .skills__item .right input:checked + label {
  background: #79A9CE;
}
 </style>
</head>
<body>
<!-- partial:index.partial.html -->
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>

<div class="container">
  <div class="header mm">
    <div class="full-name">
      <span class="first-name font-monospace"><?=@$resume['name']?></span> 
    </div>
    <div class="contact-info">
      <span class="email">Email: </span>
      <span class="email-val"><?=@$contact->email?></span>
      <span class="separator"></span>
      <span class="phone">Phone: </span>
      <span class="phone-val"><?=@$contact->mobile?></span>
    </div>
    
    <div class="about">
      <span class="position"><?=@$resume['headline']?></span>
      <span class="desc">
        <?=@$resume['objective']?>
      </span>
    </div>
  </div>
   <div class="details">
    <div class="section">
      <div class="section__title">Experience</div>
      <div class="section__list">
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
        <div class="section__list-item">
          <div class="left">
            <div class="name"><?=@$exp->company?></div>
            <div class="addr"><?=@$exp->jobrole?></div>
          </div>
          <div class="right">
            <div class="name"><?=@$exp->w_duration?></div>
            <div class="desc"><?=@$exp->work_desc?></div>
          </div>
          <?php
                           }} 
          ?>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="section__title">Education</div>
      <div class="section__list">
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
        <div class="section__list-item">
          <div class="left">
            <div class="name"><?=@$edu->college?></div>
            <div class="addr"><?=@$edu->course?></div>
          </div>
          <div class="right">
            <div class="name"><?=@$edu->e_duration?></div>
          </div>
        </div>
        <?php 
                        }}
        ?>
        <div class="section__list-item">
          
          
        </div>
                        
      </div>
      
  </div>
 
     <div class="section">
       <div class="section__title">Skills</div>
       <div class="skills">
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
							   foreach($skills as $skill)
							   {
								  ?>
         <div class="skills__item">
           <div class="left"><div class="name">
             <?=@$skill?>
             </div></div>
           <div class="right">
                          <input  id="ck1" type="checkbox" checked/>

             <label for="ck1"></label>
                          <input id="ck2" type="checkbox" checked/>

              <label for="ck2"></label>
                         <input id="ck3" type="checkbox" />

              <label for="ck3"></label>
                           <input id="ck4" type="checkbox" />
            <label for="ck4"></label>
                          <input id="ck5" type="checkbox" />
              <label for="ck5"></label>

           </div>
         </div>
         <?php 
                               }}
         ?>
       </div>
       
       </div>
     <div class="section">
       <button type="button" class="btn btn-outline-dark" onclick="window.print()">Download Pdf</button>
     </div>
     </div>
  </div>
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script> 
  </script>
</body>
</html>
