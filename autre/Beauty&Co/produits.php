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
        images: ['images/slide-2.jpg'], 
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
          <h3>Nos Produits</h3>             
        <article class="grid_4">
              <figure class="img-rounded img-indent"><img class="prods" src="images/chevre.jpg" alt="" /> </figure>
              <h4>Savon au Lait </h4>
              <ul class="list">
                <li><a href="chevrebio.php">De Chèvre bio</a></li>
                <li><a href="more.html">De Chèvre d'argan</a></li>
                <li><a href="more.html">D'Ânesse</a></li>
              </ul>            
             <a href="more.html" class="button">Plus</a>
         </article>

        <article class="grid_4">
             
              <figure class="img-rounded img-indent"><img class="prods" src="images/argan.jpg" alt="" /> </figure>
              <h4>Huile </h4>  
              <ul class="list">
                <li><a href="argans.php">D'Argan</a></li>
                <li><a href="jojoba.html">De Jojoba</a></li>
              </ul>     
             <a href="more.html" class="button">Plus</a>
         </article>

        <article class="grid_4">
             
              <figure class="img-rounded img-indent"><img class="prods" src="images/coffret.jpg" alt="" /> </figure>
              <h4>Les coffrets</h4>
              <ul class="list">
                <li><a href="more.html">Duo Ricin-Coco</a></li>
                <li><a href="more.html">Duo Ricin-Argan</a></li>
                <li><a href="more.html">Trio Argan-Ricin-Coco</a></li>
              </ul>             
             <a href="more.html" class="button">Plus</a>
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