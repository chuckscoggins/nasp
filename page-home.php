<?php
/*
Template Name: Home Page Template
*/
?>

<?php get_header(); ?>

  <div class="container">
    <div class="row">
      
		<!-- Start WOWSlider.com -->
		
		<!-- todo: move all styles to stylesheet, move images from original site location to new location -->
		
		<div style="float:left; margin-left:100px"><iframe src="http://naspweb.com/slider/index.html" style="width:685px;height:344px;max-width:100%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe></div>
		
		<!-- End WowSlider -->
		
		<div style="float:left; max-width:317px;">
			
			<img src="http://www.naspweb.com/images/home/nasp_is.jpg">
			<ul class="slider-item-box" style="max-width:302px; width:302px; height:278px; max-height:278; overflow:hidden">
			
			<!-- todo: make this content editable -->
				<li class="slider-item">IS YOUR NON-PROFIT PROVIDER OF EFFECTIVE & CONVENIENT WORKPLACE SAFETY TRAINING<br><img style="width:250px; margin-left:-20px; margin-top:5px" src="http://www.naspweb.com/images/home/content/divider.jpg"></li>
				<li class="slider-item">OFFERS 12 PROFESSIONAL & 28 TOPICAL SAFETY CERTIFICATION COURSES<br><img style="width:250px; margin-left:-20px; margin-top:5px" src="http://www.naspweb.com/images/home/content/divider.jpg"></li>
				<li class="slider-item">USES DISTANCE EDUCATION AND CLASSROOM TRAINING TO COVER A WIDE RANGE OF UP-TO-DATE TRAINING TOPICS<br><img style="width:250px; margin-left:-20px; margin-top:5px" src="http://www.naspweb.com/images/home/content/divider.jpg"></li>
				<li class="slider-item">ENSURES THAT SAFETY TRAINING IS EFFECTIVE & CONCISE WHILE EXCEEDING THE REQUIREMENTS OF OSHA REGULATIONS</li>
			
			</ul>
			
			
		</div>
		
    </div><!-- end .row-->
  </div> <!-- end .container-->

<div class="container home-three">
	<div class="row">
		<div class="col-md-8">
			<h1>Welcome</h1>
			<p><img src="http://www.naspweb.com/images/home/content/image1.jpg" align="right">The National Association of Safety Professionals is a non-profit membership organization providing training, consultative services, and third-party certifications that validate knowledge, skills and abilities in the area of workplace safety. The National Association of Safety Professionals (NASP) is the United States Division of the non-profit International Association of Safety Professionals (IASP). We currently have approximately 10,000 members with a client list (members, former members, and trainees) of approximately 30,000.</p>
			<p>The primary mission of the National Association of Safety Professionals is to provide safety professionals with innovative training opportunities and certification to assist them in carrying out their safety related functions with confidence while assuring a high level of competence.</p>
			<p><img src="http://www.naspweb.com/images/home/content/image2b.jpg" align="right">The NASP was formed in 2000 by a group of safety professionals. These men and women were safety trainers, consultants, and safety directors who wanted to provide cost effective workplace safety training and consulting to business and industry. The founders also desired to provide professional credentials to safety professionals who were largely self-taught, trained on the job, or educated by independent study. Today our roles include people from every background: from those trained and educated unconventionally to those holding safety related PHDs; from the part-time safety committee member to the international corporate safety director. <a href="/about">More >></a></p>
			<p>&nbsp;</p>
			<p><ul>
			<li>The NASP <a href="/jobmart">Job Mart</a> showcases a variety of safety related job openings in the US and abroad. If your company is seeking a safety professional for any type of safety related position then the Job Mart can be a valuable resource for you. <a href="/jobmart">More >></a></li>
<li><a href="/financialaid">Financial aid</a> in the form of scholarships is available to individuals who see workplace safety training but cannot afford the tuition. <a href="financialaid">More >></a> </li>
<li>Attention:  Course Report submission procedures have changed. <a href="/coursereportsmethod">More >></a></li>
			</ul></p>
		</div>
		<div class="col-md-4">
			<?php dynamic_sidebar('Home Sidebar'); ?>
		</div>
	</div> <!-- end .row-->
</div> <!-- end .container-->

<?php get_footer(); ?>
