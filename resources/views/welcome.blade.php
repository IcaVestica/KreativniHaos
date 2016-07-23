<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        width: 100%;
        height: 400px;
      }
    </style>
  </head>
  <body> <!--setup bootstrap! -->
      <nav class="navbar navbar-default">
          <ul class="nav navbar-nav">
              <li>Home</li>
              <li>Profile</li>
          </ul> 
      </nav>
    <div id="map"></div>
    <script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
            center: {lat: 44.540, lng: -78.546},
            zoom: 8
        });
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYrgRobi4OUr5UCxosMfAnfIW2ECe8dSQ&callback=initMap">
    </script>
  </body>
</html>
