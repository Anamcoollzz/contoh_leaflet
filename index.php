<!DOCTYPE html>
<html>
<head>
	<title>Contoh Leaflet</title>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
	<style>
		#mapid { height: 500px; }
	</style>
</head>
<body>
	<div id="mapid"></div>
	<script>
		var mymap = L.map('mapid').setView([51.505, -0.09], 13);
		var access_token = 'pk.eyJ1Ijoia3VubmFtIiwiYSI6ImNrMzN2d2tubjAzNW0zY3Blc2w3NjhidHQifQ.xcO_3S_vzh-9nlzbHuamoA';
		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token='+access_token, {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			maxZoom: 18,
			id: 'mapbox.streets',
			accessToken: 'your.mapbox.access.token'
		}).addTo(mymap);
		var marker = L.marker([51.5, -0.09]).addTo(mymap);
	</script>
</body>
</html>