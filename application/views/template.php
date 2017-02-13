<?php
if (!defined('APPPATH'))
	exit('No direct script access allowed');
/**
 * views/template.php
 *
 * Pass in $pagetitle (which will in turn be passed along)
 * and $pagebody, the name of the content view.
 *
 * ------------------------------------------------------------------------
 */
?>
<!DOCTYPE html>
<!--
++++++++++++++++++++++++++++++++++++++++++++++++++++++
AUTHOR : Vijayan PP
PROJECT :NIM
VERSION : 1.1
++++++++++++++++++++++++++++++++++++++++++++++++++++++
-->
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devidev-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{pagetitle}</title>
    
    <!-- [ FONT-AWESOME ICON ] 
        =========================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/library/font-awesome-4.3.0/css/font-awesome.min.css">

    <!-- [ PLUGIN STYLESHEET ]
        =========================================================================================================================-->

    <link rel="shortcut icon" type="image/x-icon" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/magnific-popup.css">
    <!-- [ Boot STYLESHEET ]
        =========================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/library/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/library/bootstrap/css/bootstrap.css">
        <!-- [ DEFAULT STYLESHEET ] 
        =========================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/color/rose.css">
        
</head>
<body >
<!-- [WRAPPER ]
=============================================================================================================================-->
<div class="wrapper">
  <!-- [NAV]
 ============================================================================================================================-->    
   <!-- Navigation
    ==========================================-->
    <nav  class=" nim-menu navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-inner">
            {menubar} 
        </div>
      </div><!-- /.container-fluid -->
    </nav>

   <!-- [/MAIN-HEADING]
 ============================================================================================================================--> 
   <section class="main-heading white-background black">
    <div class="overlay">
        <div class="container">
            <h1 class="main-heading-title">{pagetitle}</h1>
        </div>
    </div>    
   </section>

 <!-- [content]
 ============================================================================================================================-->
 <section class="aboutus white-background black" id="one">
     <div class="container">
        {content} 
     </div>
 </section>

  <!-- [FOOTER]
 ============================================================================================================================-->
 
<footer class="site-footer section-spacing text-center " id="eight">
    <div class="container">
        <div class="row"><small>&copy; 2017 Team Goji: Deric Mccadden, Brody McCrone, Eva Yu, Robert Arendac, Trista Huang.</small>
        </div>
    </div>
</footer>

 
 
 <!-- [/FOOTER]
 ============================================================================================================================-->
 
</div>
 

<!-- [ /WRAPPER ]
=============================================================================================================================-->

    <!-- [ DEFAULT SCRIPT ] -->
    <script src="library/modernizr.custom.97074.js"></script>
    <script src="library/jquery-1.11.3.min.js"></script>
        <script src="library/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>  
    <!-- [ PLUGIN SCRIPT ] -->
        <script src="library/vegas/vegas.min.js"></script>
    <script src="js/plugins.js"></script>
        <!-- [ TYPING SCRIPT ] -->
         <script src="js/typed.js"></script>
         <!-- [ COUNT SCRIPT ] -->
         <script src="js/fappear.js"></script>
       <script src="js/jquery.countTo.js"></script>
    <!-- [ SLIDER SCRIPT ] -->  
        <script src="js/owl.carousel.js"></script>
         <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/SmoothScroll.js"></script>
        
        <!-- [ COMMON SCRIPT ] -->
    <script src="js/common.js"></script>
  
</body>


</html>
