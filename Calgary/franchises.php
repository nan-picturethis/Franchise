<!DOCTYPE html>
<html lang="en">

<head>
<script type="text/javascript">
   
 $(function(){
  // here the code for text minimiser and maxmiser by faisal khan
    var minimized_elements = $('p.text-viewer');
    
    minimized_elements.each(function(){    
        var t = $(this).text();        
        if(t.length < 500) return;
        
        $(this).html(
            t.slice(0,500)+'<span>... </span><a href="#" class="more"> Read More>> </a>'+
            '<span style="display:none;">'+ t.slice(500,t.length)+' <a href="#" class="less"> << Less </a></span>'
        );
    }); 
    
    $('a.more', minimized_elements).click(function(event){
        event.preventDefault();
        $(this).hide().prev().hide();
        $(this).next().show();        
    });
    
    $('a.less', minimized_elements).click(function(event){
        event.preventDefault();
        $(this).parent().hide().prev().show().prev().show();    
    });
});
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
    <title>Picturethistoday Inc</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        
    <![endif]-->
    
    
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92563266-1', 'auto');
  ga('send', 'pageview');

</script>
    
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
<?php include("header.php"); ?>
    <section   style="background: url(images/background.jpg);text-align: center" >
        <div class="container nopadding" style="width: 100%;">
            <div class="row nopadding">
                <div class="col-lg-12 nopadding">
                    <h1   style="padding-bottom: 60px;padding-top:90px;color: #fff;">JOIN OUR FRANCHISE TEAM</h1><br>
</div>
            </div>
        </div>
    </section>

    <!-- Intro Section -->
    <section id="about" class="about-section" >
        <div class="container nopadding" style="width: 100%;">
            <div class="row nopadding">
                <div class="col-lg-12 nopadding">
                    <p class="ptt_about22">
                   We are a highly innovative team with entrepreneurial spirit and a brilliant concept. We are welcoming like-minded franchisees from around the world to help us change the way people buy, lease, renovate and furnish properties.  The only qualifications are an internet connection, a genuine passion for hard work and a determination to build a meaningful business. <br>
<a href="http://re3d.ca/view/sandbox" target="_blank"><img src="images/tryit.png" style="padding-top:40px;"></a>
</p>
</div>
            </div>
        </div>
    </section>







<style type="text/css">
iframe {
    display:block;
}
</style>

<div class="container" style=" width:100%;margin-bottom: -40px; padding-left:0px;padding-right:0px; ">
      <iframe src="https://player.vimeo.com/video/206659830?version=3?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=https://player.vimeo.com/video/206659830?version=3" frameborder="0" style="width: 100%;height: 400px" allowfullscreen></iframe>
</div>





    <!-- Intro Section -->
    <section id="about" class="about-section" >
        <div class="container nopadding" style="width: 100%;color: #FFF;background-color: #3a3a3a;">
            <div class="row nopadding">
                <div class="col-lg-12 nopadding">
<h1 style="font-weight: bold;background-color: #3a3a3a;padding-top:80px">BENEFITS</h1> <br>
<div class="col-lg-12" style="background-color: #3a3a3a;">
<div class="col-lg-6 " style="text-align: right;width: 30%;margin-left: 20%;background-color: #3a3a3a;padding-right: 40px;padding-bottom: 40px">
<h3>Initial + Ongoing Training</h3>
We support our franchise partners with initial and ongoing training and seminars. Every franchise is knowledgeable about our products and current trends, and participate in continuous professional improvement activities.
</div>
<div class="col-lg-6 " style="text-align: left;width: 30%;margin-right: 20%;padding-left:40px">
<h3>We are Here to Help</h3>
Software and marketing support are always available. Just tell us what you need and we will do everything we can to make it happen. Our first priority is helping to ensure the success and growth of your company.
</div>
</div>
<div class="col-lg-12" style="background-color: #3a3a3a;padding-bottom: 100px;">

<div class="col-lg-6 " style="text-align: right;width: 30%;margin-left: 20%;padding-right: 40px;padding-bottom: 40px">
<h3>Co-Branded Marketing</h3>
Branded websites are created and hosted free of charge for franchise partners. Links on our corporate site take clients directly to franchise websites. We love to talk about our franchise partners in blogs and marketing campaigns, and provide a franchise referral service through social media. 
</div>
<div class="col-lg-6 " style="text-align: left;width: 30%;margin-right: 20%;padding-left:40px">
<h3>Join an Industry Leader</h3>
Our company is taking the real estate and furnishing industries to a whole new level. With some of the best developers and designers from around the globe, we intend to maintain that lead role by continuously adding new features and finding new technologies.  
</div>
</div>
            </div>
        </div>

    </section>











    <!-- Services Section -->
    <section id="process" class="process-section" style="background-color: #fff;padding-top:50px;padding-bottom:50px;">
        <div class="container" style="padding-top:65px;padding-bottom:50px">
            <div class="row" >
<div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 ppt-col12" style="text-align:center; " align="center">
<section>
<h1 style="padding-top:20px">FRANCHISE WORKFLOW </h1>
</section>
<section>
  <div class="col-lg-5 col-xs-5 col-sm-12 col-md-12 ppt-tbl"><hr class="hrnew">
  </div>
  <div class="col-lg-2 col-xs-2 col-sm-12 col-md-12 ppt-tblm">         
  <p> 1</p>
  </div>
  <div class="col-lg-5 col-xs-5 col-sm-12 col-md-12 ppt-tbl">
  <hr class="hrnew">
  </div>
</section>
<div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 " style="text-align:center;padding-top:15px;padding-bottom:15px;" align="center">
<p style="text-align:center;" align="center">
Laser measurement creates 3D floor plans onsite
</p>
</div>

<section>

  <div class="col-lg-5 col-xs-5 col-sm-12 col-md-12 ppt-tbl"><hr class="hrnew">
  </div>
  <div class="col-lg-2 col-xs-2 col-sm-12 col-md-12 ppt-tblm">         
  <p> 2</p>
  </div>
  <div class="col-lg-5 col-xs-5 col-sm-12 col-md-12 ppt-tbl">
  <hr class="hrnew">
  </div>
  </section>

<div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 " style="text-align:center;padding-top:15px;padding-bottom:15px;" align="center">

  <p>Stage homes with custom furnishing, colour schemes and décor
</p>
</div>


<section>
  <div class="col-lg-5 col-xs-5 col-sm-12 col-md-12 ppt-tbl"><hr class="hrnew">
  </div>
  <div class="col-lg-2 col-xs-2 col-sm-12 col-md-12 ppt-tblm">         
  <p> 3</p>
  </div>
  <div class="col-lg-5 col-xs-5 col-sm-12 col-md-12 ppt-tbl">
  <hr class="hrnew">
  </div>
  </section>

<div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 " style="text-align:center;padding-top:15px;padding-bottom:15px;" align="center">

  <p>Embed 3D presentations directly into realtor’s website</p>
</div>

<section>

  <div class="col-lg-5 col-xs-5 col-sm-12 col-md-12 ppt-tbl"><hr class="hrnew">
  </div>
  <div class="col-lg-2 col-xs-2 col-sm-12 col-md-12 ppt-tblm">         
  <p> 4</p>
  </div>
  <div class="col-lg-5 col-xs-5 col-sm-12 col-md-12 ppt-tbl">
  <hr class="hrnew">
  </div>
 </section>

<div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 " style="text-align:center;padding-top:15px;padding-bottom:25px;" align="center">
  <p>Our online software lets you keep track of your realtor clients,
<br> schedule work and create realtor invoices  </p>
  </div>
</div>
            </div>
        </div>
    </section>
<style>
.ppt-tbl
{
padding-left:0px;
padding-right:0px;
width: 47.5%;

}
.ppt-tblm
{
padding-left:0px;
padding-right:0px;
width:5%;
}
.hrnew
{
width:100%; 
height:0px; 
background: #3a3a3a;
}
.ppt-col12
{
color:#3a3a3a;
border-right:#3a3a3a solid 1px;
border-left:#3a3a3a solid 1px;
border-top:#3a3a3a solid 1px;
border-bottom:#3a3a3a solid 1px;
padding-left: 0px;
padding-right: 0px;
}
hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 1px solid #3a3a3a;
}
</style>










<style type="text/css">
    /* carousel */
#quote-carousel 
{
  padding: 0 10px 30px 10px;
  margin-top: 30px;
}

/* Control buttons  */
#quote-carousel .carousel-control
{
  background: none;
  color: #222;
  font-size: 2.3em;
  text-shadow: none;
  margin-top: 30px;
}
/* Previous button  */
#quote-carousel .carousel-control.left 
{
  left: -12px;
}
/* Next button  */
#quote-carousel .carousel-control.right 
{
  right: -12px !important;
}
/* Changes the position of the indicators */
#quote-carousel .carousel-indicators 
{
  right: 50%;
  top: auto;
  bottom: 0px;
  margin-right: -19px;
}
/* Changes the color of the indicators */
#quote-carousel .carousel-indicators li 
{
  background: #c0c0c0;
}
#quote-carousel .carousel-indicators .active 
{
  background: #333333;
}
#quote-carousel img
{
  width: 250px;
  height: 100px
}
/* End carousel */

.item blockquote {
    border-left: none; 
    margin: 0;
}

.item blockquote img {
    margin-bottom: 10px;
}

.item blockquote p:before {
    content: "\f10d";
    font-family: 'Fontawesome';
    float: left;
    margin-right: 10px;
}



/**
  MEDIA QUERIES
*/

/* Small devices (tablets, 768px and up) */
@media (min-width: 768px) { 
    #quote-carousel 
    {
      margin-bottom: 0;
      padding: 0 40px 30px 40px;
    }
    
}

/* Small devices (tablets, up to 768px) */
@media (max-width: 768px) { 
    
    /* Make the indicators larger for easier clicking with fingers/thumb on mobile */
    
    #quote-carousel .carousel-indicators {
        bottom: -20px !important;  
    }
    #quote-carousel .carousel-indicators li {
        display: inline-block;
        margin: 0px 5px;
        width: 15px;
        height: 15px;
    }
    #quote-carousel .carousel-indicators li.active {
        margin: 0px 5px;
        width: 20px;
        height: 20px;
    }
}
</style>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<script type="text/javascript">
    $(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });
});
</script>
<div class="container" style="width:100%;background-color: #efeeee;">
  <div class="row">
    <div class='col-md-offset-2 col-md-8 text-center'>
    </div>
  </div>
  <div class='row'>
    <div class='col-md-offset-2 col-md-8'>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
        <!-- Bottom Carousel Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#quote-carousel" data-slide-to="1"></li>
          <li data-target="#quote-carousel" data-slide-to="2"></li>
          <li data-target="#quote-carousel" data-slide-to="3"></li>

        </ol>
        
        <!-- Carousel Slides / Quotes -->
        <div class="carousel-inner">
        
          <!-- Quote 1 -->
                    <div class="item active">
            <blockquote>
              <div class="row" style="width: 80%;margin-left: 10%;margin-right: 10%;">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="images/richard.png" style="width: 100px;height:100px;">
                  <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">-->
                </div>
                <div class="col-sm-9">
                  <p class="ptt_testimonial">I was absolutely blown-away by both the product and the business concept.
I just had to be part of it.</p>
                  <small>Richard Hillier, Franchise Owner, Toronto</small>
                </div>
              </div>
            </blockquote>
          </div>

          <div class="item">
            <blockquote>
              <div class="row" style="width: 80%;margin-left: 10%;margin-right: 10%;">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="images/bryan.png" style="width: 100px;height:100px;">
                  <!--<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/kolage/128.jpg" style="width: 100px;height:100px;">-->
                </div>
                <div class="col-sm-9">
                  <p class="ptt_testimonial">From my first contact with Ev by email, then by phone, and then meeting in person, I have been impressed. She has built a great group of enthusiastic people, where the concept that challenges can't be overcome doesn't exist.</p>
                  <small>Bryan Murray, Franchise Owner, Calgary</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 2 -->
          <div class="item">
            <blockquote>
              <div class="row" style="width: 80%;margin-left: 10%;margin-right: 10%;">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="images/luis.png" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p class="ptt_testimonial"> I’m very excited about my current opportunity with
Picture This…</p>
                  <small>Luis Ambrosio, Franchise Owner, London, ON</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 3 -->
          <div class="item">
            <blockquote>
              <div class="row" style="width: 80%;margin-left: 10%;margin-right: 10%;">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="images/nick.png" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p class="ptt_testimonial">The details in these plans are stunning and the ability to transform properties is absolutely amazing. Home buyers will fall in love with this program.</p>
                  <small>Nick Scott, Franchise Owner, New Brunswick</small>
                </div>
              </div>
            </blockquote>
          </div>
        </div>
        
        <!-- Carousel Buttons Next/Prev -->
        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
      </div>                          
    </div>
  </div>
</div>












   <section id="about" class="about-section">
        <div class="container nopadding" style="width: 100%;">
            <div class="row nopadding" >
                <div class="col-lg-12 nopadding" >
                    <p class="ptt_about" style="padding-bottom:70px;padding-top:80px;">
<a href="mailto:hello@picturethis.today"><img src="images/becomefran.png"></a>
</p>
</div>
            </div>
        </div>
    </section>


    
    <?php include("map.php"); ?>

    
<?php include("footer.php"); ?>




    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>