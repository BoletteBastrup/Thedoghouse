<footer>
	<div class="footer">
	<div class="container-fluid">
		<div class="row">
		<div class="col-xs-6 col-sm-4 col-md-4">
		<h1>Kontakt:</h1>
		<img id="tel" src="images/tel.png" alt="telefon icon"/><a href="tel:35106560" id="nr">35106560</a>
		<br>
		<img id="kuvert" src="images/email.png" alt="email"/><a href="mailto:someone@example.com?Subject=Hello%20again" target="_top" id="email">Info@thedoghouse.dk</a>
		<br>
		<a href="https://www.google.dk/maps/place/TheDogHouse/@56.1297748,10.1614013,17z/data=!3m1!4b1!4m5!3m4!1s0x464c401c81ec8b0b:0x4d06e598670afcb7!8m2!3d56.1297748!4d10.16359" target="_blank"><p id="add">Adresse: Stenkildevej 4, 8260 Viby J</p></a>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-4">
		<h1>Åbningstider:</h1>
		<p>Mandag til fredag: 10 - 17.30</p>
		<p>Lørdag: 10 - 14.00</p>	
		<p>Søndag: Lukket </p>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-4">
		<h1 class="folgos">Følg os:</h1>
		<a href="facebook.php" target="_blank"><img id="face" alt="facebook icon" src="images/face.png"/></a>
		<a href="instagram.php" target="_blank"><img id="insta" alt="instagram icon" src="images/insta.png"/></a>
			</div>
		 	
	</div>
		</div>
		</div>
		<div id="map"></div>
		<script>function myMap() {
	var myCenter = new google.maps.LatLng(56.12979,10.16353);
	var mapCanvas = document.getElementById("map");
	var mapOptions = {center: myCenter, zoom: 16};
	var map = new google.maps.Map(mapCanvas, mapOptions);
	var marker = new google.maps.Marker({position:myCenter});
	marker.setMap(map);

	 var infowindow = new google.maps.InfoWindow({
    content: "TheDogHouse!"});
	infowindow.open(map,marker);
}</script>
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSHzQYUWifM3JQMoUdqpkg1WNchBUlLRc&callback=myMap"></script>
</footer>