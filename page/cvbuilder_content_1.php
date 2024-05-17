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
<div id="doc2" class="yui-t7">
	<div id="inner">
	
		<div id="hd">
			<div class="yui-gc">
				<div class="yui-u first">
					<h1><?=@$resume['name']?></h1>
					<h2><?=@$resume['headline']?></h2>
				</div>

				<div class="yui-u">
					<div class="contact-info">
						<h3><a id="pdf" href="" onclick="window.print()">Download PDF</a></h3>
						<h3><a href="mailto:name@yourdomain.com"><?=@$contact->email?></a></h3>
						<h3><?=@$contact->mobile?></h3>
						<h3><?=@$contact->address?></h3>
					</div><!--// .contact-info -->
				</div>
			</div><!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Objective</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
								<?=@$resume['objective']?>
							</p>
						</div>
					</div><!--// .yui-gf -->

					
					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Skills<h2>
						</div>
						<div class="yui-u">
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
								<ul class="talent">
								<li><?=@$skill?></li>
							</ul>
								  <?php
							   }
							}
							?>
						</div>
					</div><!--// .yui-gf-->

					<div class="yui-gf">
	
						<div class="yui-u first">
							<h2>Experience</h2>
						</div><!--// .yui-u -->

						<div class="yui-u">
                      <?php 
					    if(count($experience)<1)
						{
							  ?>
							  <div class="job">
								
								<h3>Fresher</h3>

						</div>
							  <?php
						}
					       foreach($experience as $exp)
						   {
							?>
							<div class="job">
								<h2><?=@$exp->company?></h2>
								<h3><?=@$exp->jobrole?></h3>
								<h4><?=@$exp->w_duration?></h4>
								<p><?=@$exp->work_desc?></p>
							</div>
							<?php
						   }
					  ?>
						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
						<?php 
						if(count($education)<1)
						{
							 ?>
							  <div class="job">
								
								<h3>No Education</h3>

						</div>
							 <?php
						}
						foreach($education as $edu)
						{
							?>
							<div class="yui-u">
							<h2><?=@$edu->college?></h2>
							<h3><?=@$edu->course?>&mdash; <strong><?=@$edu->e_duration?></strong> </h3>
							<hr>
						    </div>
							<?php
						}
						?>
						
					</div><!--// .yui-gf -->


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<div id="ft">
			<p><?=@$resume['name']?>&mdash; <a href=""><?=@$contact->email?></a> &mdash; <?=@$contact->mobile?></p>
		</div><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->
