<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            html, body, #map-canvas { height: 100%; margin: 0; padding: 0;}
        </style>
        <script type="text/javascript" 
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1SHA_14e103exlDtkbq2i407qltGlf0o">
        </script>
        <script type="text/javascript">
            function initialize() {
                var mapOptions = {
                    center: { lat: 40.7577, lng: -73.9857},
                    zoom: 12
                };
                var map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>
    <body>
        <div id="map-canvas"></div>
    </body>
</html>