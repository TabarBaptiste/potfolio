<!DOCTYPE html>
<html lang="en">

<?php
    $variable="prod";
?>
    <head>
    <title>Services</title>
    <meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
     <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/bgstretcher.js"></script>
    <script>
	$(function(){
      //  Initialize Backgound Stretcher
      $('BODY').bgStretcher({
        images: ['images/slide-1.jpg'], 
		imageWidth: 1600, 
		imageHeight: 964, 
		resizeProportionally:true	
       });	
    });
    </script>

    <!--[if lt IE 8]>
   <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
    <!--[if lt IE 9]>   
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
   <script src="js/html5shiv.js"></script>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>  
  <![endif]-->

    </head>
    <body>
<div class="extra-block"> 
      <!--==============================row-top=================================-->
      <!--==============================header=================================-->
      
      <?php  require_once 'header.php'; ?>
  
    <!--==============================content=================================-->
    <section id="content">  
  
    <div class="main-block">
    <div class="container_12">
          <div class="wrapper">
          <h3>Produits</h3>             
        <article class="grid_4">
              <figure class="img-rounded img-indent"><img src="imagesC/soin_visageC.jpg" alt="" /> </figure>
              <h4>Soin</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porta dapibus justo ut convallis. Curabitur nulla nunc, varius eget iaculis et, facilisis id magna. Nulla ut orci lectus, adipiscing interdum massa. Fusce lacinia enim rutrum turpis imperdiet vel.</p>
                <ul class="list">
                <li><a href="more.html">Soin du soin visage</a></li>
                <li><a href="more.html">Soin des mains</a></li>
              </ul>            
             <a href="more.html" class="button">More</a>
         </article>

        <article class="grid_4">
             
              <figure class="img-rounded img-indent"><img src="images/page3-img2.jpg" alt="" /> </figure>
              <h4>Spa Services</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porta dapibus justo ut convallis. Curabitur nulla nunc, varius eget iaculis et, facilisis id magna. Nulla ut orci lectus, adipiscing interdum massa. Fusce lacinia enim rutrum turpis imperdiet vel. </p>
                <ul class="list">
                <li><a href="more.html">Body Polishes</a></li>
                <li><a href="more.html">Body Wraps</a></li>
                <li><a href="more.html">Facials</a></li>
                <li><a href="more.html">Massage</a></li>
              </ul>            
             <a href="more.html" class="button">More</a>
         </article>

        <article class="grid_4">
             
              <figure class="img-rounded img-indent"><img src="images/page3-img3.jpg" alt="" /> </figure>
              <h4>Medi-Spa Services</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porta dapibus justo ut convallis. Curabitur nulla nunc, varius eget iaculis et, facilisis id magna. Nulla ut orci lectus, adipiscing interdum massa. Fusce lacinia enim rutrum turpis imperdiet vel. </p>
                <ul class="list">
                <li><a href="more.html">Botox</a></li>
                <li><a href="more.html">Restylane</a></li>
                <li><a href="more.html">Juvederm</a></li>
                <li><a href="more.html">Radiesse</a></li>
              </ul>            
             <a href="more.html" class="button">More</a>
         </article>
      </div>
     </div>
  </div>
 <section> 
  
 </div>
<div class="block"> 
      <!--==============================footer================================-->
      <footer>
    <div class="main aligncenter">
          <div class="privacy">Enigma   &copy; 2013 <span>|</span> <a href="index-5.html" rel="nofollow">Privacy Policy</a> <span>|</span> <strong>Website Template designed by <a href="http://store.templatemonster.com?aff=netsib1">TemplateMonster.com</a></strong> </div>
        </div>
  </footer>
    </div>
</body>
</html>