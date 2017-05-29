<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/zabuto_calendar.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">

    <link rel="stylesheet" href="assets/css/trackpad-scroll-emulator.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style1.css" type="text/css">

    <title></title>
<style type="text/css">
    .pttmapfil
    {
        background-color: #000;
        padding: 7px;
        color:#fff;
        border-bottom: 1px solid #fff;
        opacity: .8;
    }
</style>
</head>

<body class="homepage">
<div class="page-wrapper">


    <div id="page-content">
        <div class="hero-section full-screen has-map ">
            <div class="map-wrapper">
                <div class="map" id="map-homepage"></div>
            </div>
            <!--end map-wrapper-->
<style type="text/css">
    .iradio {

    border: 2px #fff solid;
    position: relative;
    height: 10px;
    width: 10px;
}


.iradio:hover {
  box-shadow:0 0 5px 0px orange inset;
}


.iradio:checked
{
    width: 16px;
    height: 16px;
    -webkit-appearance: none;
      background:orange;

}

</style>

            <div class="form search-form vertical opacity-90" style="width:100%">
                <div class="container" style="width:100%">
                    <form>
                        <div class="row">
                            <div class="col-md-2 col-sm-12">
                                <div class="wrapper clearfix" style="padding-left: 60px;">
                                  <div class="form-group" style="display: none">
                                        <input type="text" class="form-control" name="address" placeholder="Enter keyword">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group" style="display: none">
                                        <select class="form-control selectpicker" name="city">
                                            <option value="">Location</option>
                                            <option value="1">New York</option>
                                            <option value="2">Washington</option>
                                            <option value="3">London</option>
                                            <option value="4">Paris</option>
                                        </select>
                                    </div>
                                    <!--end form-group-->

                                    <!--end form-group-->



                                    <div class="form-group" >
                                        <button style="background-color: #000;opacity:.8;width: 80%;color: rgba(244, 122, 32, 1);padding-top: 2px;padding-bottom: 2px;" type="submit" data-ajax-response="map" data-ajax-data-file="assets/external/data_11.php"  ><input type="text" name="category9" value="DestinationBC" hidden>NEIGHBOURHOODS</button>
                                    </div> 


                                    <div class="form-group" >
                                        <button style="background-color: #000;opacity:.8;width: 80%;color: rgba(244, 122, 32, 1);padding-top: 2px;padding-bottom: 2px;" type="submit" data-ajax-response="map" data-ajax-data-file="assets/external/data_10.php"  ><input type="text" name="category8" value="Institution" hidden>SCHOOLS</button>
                                    </div>                                     

                                    <div class="form-group" >
                                        <button style="background-color: #000;opacity:.8;width: 80%;color: rgba(244, 122, 32, 1);padding-top: 2px;padding-bottom: 2px;" type="submit" data-ajax-response="map" data-ajax-data-file="assets/external/data_9.php"  ><input type="text" name="category7" value="Transit" hidden>TRANSIT ROUTES</button>
                                    </div> 

                                    <div class="form-group" >
                                        <button style="background-color: #000;opacity:.8;width: 80%;color: rgba(244, 122, 32, 1);padding-top: 2px;padding-bottom: 2px;" type="submit" data-ajax-response="map" data-ajax-data-file="assets/external/data_8.php"  ><input type="text" name="category6" value="Parks" hidden>PARKS</button>
                                    </div>                                 

                                    <div class="form-group" >
                                        <button style="background-color: #000;opacity:.8;width: 80%;color: rgba(244, 122, 32, 1);padding-top: 2px;padding-bottom: 2px;" type="submit" data-ajax-response="map" data-ajax-data-file="assets/external/data_7.php"  ><input type="text" name="category5" value="Bars" hidden>BARS</button>
                                    </div>

                                    <div class="form-group" >
                                        <button style="background-color: #000;opacity:.8;width: 80%;color: rgba(244, 122, 32, 1);padding-top: 2px;padding-bottom: 2px;" type="submit" data-ajax-response="map" data-ajax-data-file="assets/external/data_6.php"  ><input type="text" name="category4" value="pharmacy" hidden>PHARMACIES</button>
                                    </div>



                                    <div class="form-group" >
                                        <button style="background-color: #000;opacity:.8;width: 80%;color: rgba(244, 122, 32, 1);padding-top: 2px;padding-bottom: 2px;" type="submit" data-ajax-response="map" data-ajax-data-file="assets/external/data_5.php"  ><input type="text" name="category3" value="Hospitals" hidden>HOSPITALS</button>

                                    </div>

                                    <div class="form-group">
                                        <button style="background-color: #000;opacity:.8;width: 80%;color: rgba(244, 122, 32, 1);padding-top: 2px;padding-bottom: 2px;" type="submit" data-ajax-response="map" data-ajax-data-file="assets/external/data_4.php"  ><input type="text" name="category2" value="food" hidden>RESTAURANTS/COFFEE</button>

                                    </div>

                                    <!--end form-group-->
                                    
                                    <div class="form-group">
                                        <button style="background-color: #000;opacity:.8;width: 80%;color: rgba(244, 122, 32, 1);padding-top: 2px;padding-bottom: 2px;" type="submit" data-ajax-response="map" data-ajax-data-file="assets/external/data_2.php"  ><input type="text" name="category" value="Accommodation" hidden>HOTELS</button>

                                    </div>
                                    <div class="form-group">
                                        <button style="background-color: #000;opacity:.8;width: 80%;color: rgba(244, 122, 32, 1);padding-top: 2px;padding-bottom: 2px;" type="submit" data-ajax-response="map" data-ajax-data-file="assets/external/data_3.php"  ><input type="text" name="category1" value="DestinationBC " hidden>POINT OF INTEREST</button>

                                    </div>
                                    <!--<button style="background-color: #000;" type="submit" data-ajax-response="map" data-ajax-data-file="assets/external/data_2.php" data-ajax-auto-zoom="1" class="btn btn-primary pull-right darker sa">Search Now<i class="fa fa-search"></i></button> ------------- for zooming  -->
                                    <!--end form-group-->
                                </div>
                                <!--end wrapper-->
                            </div>
                            <!--end col-md-4-->



                                          <div class="col-md-10">

                        </div>
                        </div>
                        <!--end row-->
                    </form>
                    <!--end form-hero-->
                </div>
                <!--end container-->
            </div>
            <!--end search-form-->

        </div>
        <!--end hero-section-->

 <!--end container-->


    </div>
    <!--end page-content-->


    <!--end page-footer-->
</div>
<!--end page-wrapper-->
<a href="#page-header" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>

<script type="text/javascript" src="assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
<script type="text/javascript" src="assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="assets/js/markerclusterer_packed.js"></script>
<script type="text/javascript" src="assets/js/infobox.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.trackpad-scroll-emulator.min.js"></script>

<script type="text/javascript" src="assets/js/custom.js"></script>
<script type="text/javascript" src="assets/js/maps.js"></script>

<script>
    var optimizedDatabaseLoading = 0;
        var _latitude = 49.194553;
    var _longitude = -122.653084;
    var element = "map-homepage";
    var markerTarget = "infobox"; // use "sidebar", "infobox" or "modal" - defines the action after click on marker
    var sidebarResultTarget = ""; // use "sidebar", "modal" or "new_page" - defines the action after click on marker
    var showMarkerLabels = false; // next to every marker will be a bubble with title
    var mapDefaultZoom = 12; // default zoom
    heroMap(_latitude,_longitude, element, markerTarget, sidebarResultTarget, showMarkerLabels, mapDefaultZoom);
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/58bdb3ae70cdfb0937fbd30c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
