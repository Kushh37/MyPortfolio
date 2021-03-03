<!DOCTYPE html>
<html lang="en">
<head>
    <title>Heet-Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--links-->
        <?php require_once "links.php"; ?>
	<!--/links-->
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    
    <!--Horizontal Navbar-->
        <?php require_once "navbar.php"; ?>
    <!--/Horizontal Navbar-->
    
    <!--Home-->
    <section class="hero-wrap js-fullheight">
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
                <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
                <div class="text text-center">
                    <span class="subheading">Hello! I am</span>
                    <h1>Heet Patel</h1>
                        <h2>I'm a 
                            <span
                                class="txt-rotate"
                                data-period="400"
                                data-rotate='[ "Web Designer. ", "Developer. ", "Mobile App Developer. ", "Freelancer. ", "Model. " ]'></span>
                        </h2>
                </div>
                </div>
            </div>
        </div>
    </section>
	<!--/Home-->
  <!--About Me-->
    <?php require_once "aboutme.php"; ?>
	<!--/About Me-->

	<!--Resume-->
    <section class="ftco-section ftco-no-pb goto-here" id="resume-section">
    	<div class="container">
    		<div class="row">
				<!--Vertical Navbar-->
    			<?php require_once "verticalnavbar.php";?>
				<!--/Vertical Navbar-->
				<!--Skills-->
					<?php require_once "skills.php"; ?>
				<!--/Skills-->
				<!--Tools-->
					<?php require_once "tools.php"; ?>
				<!--/Tools-->
				<!--Education-->
          <?php require_once "education.php"; ?>
				<!--/Education-->                     
        <!--Experience-->
          <?php require_once "experience.php"; ?>
        <!--/Experience-->
        <!--awards-->
				  <?php require_once "awards.php"; ?>
        <!--/awards-->
        </div>
    	</div>
	  </section>
  <!--/Resume-->
  <!--project--> 
    <?php require_once "project.php"; ?>
  <!--/project-->
  <!--Contact me-->
    <?php require_once "contactme.php";?>
  <!--/contact Me-->
  <!-- Copyright -->
    <div class="row">
      <div class="col-md-12 text-center">
    <!--<p>
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        </p>-->
      </div>
    </div>
  <!-- Copyright -->
  <!--Scripts-->
  <?php require_once "scripts.php"; ?>
  <!--/Scripts-->
</body>
</html>