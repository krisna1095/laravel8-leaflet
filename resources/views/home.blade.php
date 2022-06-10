<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #map {
            height: 68vh;
            width: 100%;
        }
    </style>
</head>

<body>
    <div>
        <p>Cari Lokasi</p>
        <select onchange="cari(this.value)">
            @foreach ($titik as $data)
                <option value="{{$data->id}}">{{$data->nama}}</option>
            @endforeach
        </select>
    </div>
    <br>
<div id="map"></div>
</body>

<script>
    var map = L.map('map').setView([-7.758072, 112.013957], 15);

    L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    }).addTo(map);

    var geoMarker;
    $( document ).ready(function() {    
    $.getJSON('titik/json', function(data){
        $.each(data, function(index){
            //alert(data[index].nama);
            var marker = L.marker([parseFloat(data[index].lat),parseFloat(data[index].long)]).addTo(map);
            marker.bindPopup(data[index].nama).openPopup();
        });
    });
    });

    //Polygon
    var latlngs = [
        [
            -7.731744459336142,
            112.0120096206665
            ],
            [
                -7.7382082391296505,
              112.00595855712889
            ],
            [
                -7.73637967989305,
                112.01484203338622
            ],
            [
                -7.731744459336142,
                112.0120096206665
            ]
    ];

    var polygon = L.polygon(latlngs, {color: 'red'}).addTo(map);
    polygon.setStyle({
        color: 'green',
        weight: '5',
        height: '2',
        lineCap: 'square'
    })
    map.fitBounds(polygon.getBounds());
    polygon.on('click', (e)=>{
        alert("ini Polygon")
    });

    //GEOJSON
    $.getJSON('assets/map.geosjon', function(json){
        geoLayer = L.geoJson(json, {
            style: function(feature) {
                return {
                    fillOpacity: '0.5',
                    weight: '5',
                    opacity: '1',
                    color: 'green'
                };
            },
            onEachFeature: function(feature, layer) {
                layer.addTo(map);
            }
        });
    })
    // function cari($id){
    //     map.flyTo(geoMarker[parseFloat(data[index].lat),parseFloat(data[index].long)], 15);
    // };
</script>

</html>