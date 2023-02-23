<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Contacts</title>
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
    <script src="js/forms.js"></script>

    <script>
	$(document).ready(function() {	
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
          <div class="wrapper border-vert">
        <article class="grid_5">
              <h3>Adresse</h3>
              <div class="map">
              <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=l%C3%A9onard%20de%20vinci%2077000&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                <style>
                .mapouter{
                  position:relative;
                  text-align:right;
                  height:500px;
                  width:600px;
                  }
                </style>
                <style>
                .gmap_canvas{
                  overflow:hidden;
                  background:none!important;
                  height:500px;width:440px;
                  }
                </style>
                </div></div></div>
             
             <dl class="address">
                <dt><div class="beauty">Beauty and Co</div><br>
                <img class="logo_pos" src="images\logo_position.png">2bis rue Edouard Branly,<br>
                &nbsp;&nbsp;&nbsp;&nbsp;Melun</dt>
                <!-- <dd> <span>Freephone:</span> +1 800 559 6580 </dd>
                <dd> <span>Telephone:</span> +1 800 603 6035 </dd>
                <dd> <span>FAX:</span> +1 800 889 9898 </dd>  -->  
                
              </dl>
              
        
         </article>
        <article class="grid_5 prefix_2">
              <h3>Contact </h3>
             
    <!-- <form id="contact-form">
          <div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong> </div>
          <fieldset>
            <div>
              <label class="name">
                <input type="text" value="Name:">
                <br>
                <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
            </div>
            <div>
              <label class="email">
                <input type="email" value="E-mail:">
                <br>
                <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
            </div>
            <div>
              <label class="phone">
                <input type="tel" value="Phone:">
                <br>
                <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
            </div>
            <div>
              <label class="message">
                <textarea>Message:</textarea>
                <br>
                <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
            </div>
            <div class="buttons-wrapper"><a class="button" data-type="reset">Clear</a><a class="button" data-type="submit">Send</a></div>

          </fieldset>
        </form> -->
        <p class="chevrebio">Pour nous contacter utilisez les différents liens ci-dessous.<p>
        <dl class="address">
            <h5 class="cont">• Adresse-mail: &nbsp;&nbsp;<a href="mailto:rodrigues.loic@hotmail.com">beautyandco@gmail.com</a></h5>
        </dl>
        <dl class="address">
            <h5 class="cont">• Numéro: <br>&nbsp;&nbsp;<a href="tel:XXXXXXXXXX">XX XX XX XX XX</a></h5>
        </dl>

        <h5><a href="https://www.instagram.com/?hl=fr"><img class="logo_insta" src="images\insta_logo.png"><br>Beauty And Co</h5></a>

     </article>
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

<style>
                .logo_insta{
                  width: 90px;
                  height: 90px;}
              <style>