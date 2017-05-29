<link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
<link href="assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="assets/css/zabuto_calendar.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/trackpad-scroll-emulator.css" type="text/css">
<link rel="stylesheet" href="assets/css/style1.css" type="text/css">

<style type="text/css">
	.pttmapfil {
		background-color: #000;
		padding: 7px;
		color:#fff;
		border-bottom: 1px solid #fff;
		opacity: 0.8;
	}
</style>

<div class="page-wrapper" style="margin-bottom: -20px">
	<div id="page-content">
		<div class="hero-section  has-map has-sidebar">
			<div class="map-wrapper">
				<div class="map" id="map-homepage" style="height: 660px">
				</div>
			</div>
		</div>
	</div>
</div>

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
	var _latitude = 24.089253;
	var _longitude = -7.558594;
	var element = "map-homepage";
	var markerTarget = "infobox"; // use "sidebar", "infobox" or "modal" - defines the action after click on marker
	var sidebarResultTarget = "sidebar"; // use "sidebar", "modal" or "new_page" - defines the action after click on marker
	var showMarkerLabels = false; // next to every marker will be a bubble with title
	var mapDefaultZoom = 3; // default zoom
	heroMap(_latitude,_longitude, element, markerTarget, sidebarResultTarget, showMarkerLabels, mapDefaultZoom);
</script>
