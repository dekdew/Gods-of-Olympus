<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>MAP</title>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.10.1.min.js"></script>
</head>

<body>
    <div id="map" style="width: 500px; height: 400px;"></div>

    <script type="text/javascript">
        var locations = [
            ['Temple of Artemis', 37.9497392, 27.3640305, 'วิหารอาร์เทมิส'],
            ['Parthenon', 37.9715285, 23.7267166, 'วิหารพาร์เธนอน'],
            ['Temple of Zeus', 37.9693, 23.7331, 'วิหารโอลิมเปียนซุส '],
            ['Delphi Archaeological Museum', 38.4803028, 22.4997992, 'พิพิธภัณฑ์เดลฟี'],
            ['Temple of Poseidon', 37.6501925, 24.024587, 'วิหารโพไซดอน'],
            ['Delphi', 38.4823868, 22.5009699, 'มหาวิหารเดลฟี'],
            ['Sanctuary of Aphrodite', 34.7082499, 32.5739865, 'วิหารอโฟร์ได'],
            ['Temple of Hephaestus', 37.975595, 23.7214521, 'วิหารฮีเฟสตุส']

        ];

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: new google.maps.LatLng(51.530616, -0.123125),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });


        var infowindow = new google.maps.InfoWindow();
        var marker, i;
        var markers = new Array();

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });

            markers.push(marker);

            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(locations[i][0]+\n+locations[i][3]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }

        function AutoCenter() {
            //  Create a new viewpoint bound
            var bounds = new google.maps.LatLngBounds();
            //  Go through each...
            $.each(markers, function (index, marker) {
                bounds.extend(marker.position);
            });
            //  Fit these bounds to the map
            map.fitBounds(bounds);
        }
        AutoCenter();
    </script>
</body>

</html>