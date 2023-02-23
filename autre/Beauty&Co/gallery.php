<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Gallery</title>
    <meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="css/style.css">
     <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/jquery.fancybox.css" >
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/bgstretcher.js"></script>
    <script src="js/jquery.elastislide.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script>
	$(document).ready(function() {	
      //  Initialize Backgound Stretcher
      $('BODY').bgStretcher({
        images: ['images/slide-1.jpg'], 
		imageWidth: 1600, 
		imageHeight: 964, 
		resizeProportionally:true	
       });
	$('#carousel').elastislide({imageW :300,margin: 20,minItems: 3});   
	$('.magnifier').fancybox();   
		

	$(".view").hover(
	function(){$(this).find("img").stop().animate({opacity:0.5},"normal")},
	function(){$(this).find("img").stop().animate({opacity:1},"normal")})
	})  
	     	
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
      <div class="row-top">
    <div class="main">
          <ul class="list-soc">
        <li><a href="#"><img alt="" src="images/soc-icon1.png"></a></li>
        <li><a href="#"><img alt="" src="images/soc-icon2.png"></a></li>
      </ul>
        </div>
  </div>
      
      <!--==============================header=================================-->
      
      <?php  require_once 'header.php'; ?>
  
    <!--==============================content=================================-->
    <section id="content">    
    <div class="main-block">
    <div class="main">
     <h3>Our Gallery</h3>
        
   <div id="carousel" class="es-carousel-wrapper ">
          <div class="es-carousel">
            <ul>
             <li>                    
              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img1.jpg" alt="" /><span></span></a> </figure>   
              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img4.jpg" alt="" /><span></span></a></figure>  
              </li>
              
              <li>             
              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img2.jpg" alt="" /><span></span></a> </figure>   
              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img5.jpg" alt="" /><span></span></a> </figure>  
              </li> 
              
              <li>             
              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img3.jpg" alt="" /><span></span></a> </figure>   
              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img6.jpg" alt="" /><span></span></a> </figure>  
              </li> 
             <li>                    
              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img1.jpg" alt="" /><span></span></a> </figure>   
              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img4.jpg" alt="" /><span></span> </a></figure>  
              </li>
              
              <li>             
              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img2.jpg" alt="" /><span></span></a> </figure>   
              <figure class="img-rounded"><a  class="view magnifier" data-fancybox-group="gallery" href="images/image-blank.png" title=""><img src="images/page4-img5.jpg" alt="" /><span></span></a> </figure>  
              </li>
            </ul>
          </div>
        </div>
     </div>
  </div>
 </section> 
  
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