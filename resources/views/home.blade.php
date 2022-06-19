@extends('layouts.index')
@push('title', 'Maps')
@section('content')
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Maps</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="#!">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span style="margin-right: 20px;">Maps</span></li>
            </ol>

        </div>
    </header>
    <!-- Start page -->
    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Peta Persebaran Posyandu</h2>
                </header>
                <div class="panel-body">
                    <div class="row m-b-xl">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-md-5 control-label">Lokasi</label>
                                <select class="col-md-7" data-plugin-selectTwo class="form-control" onchange="cari(this.value)">
                                    @foreach ($desa as $data)
                                    <option value="{{$data->id}}">{{$data->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="map"></div>
                </div>
            </section>
        </div>
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>
                    <h2 class="panel-title">Tambah Data Persebaran</h2>
                </header>
                <div class="panel-body">
                    <form method="POST" action="/" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="">
                                    <button type="submit" class="btn btn-primary">Tambah Data <i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Kecamatan</label>
                                    <select data-plugin-selectTwo class="form-control populate" id="kecamatan" name="kecamatan">
                                        <option selected disabled></option>
                                        @foreach($kecamatan as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Desa</label>
                                    <select data-plugin-selectTwo class="form-control populate" id="desa" name="desa">
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Longtitude</label>
                                    <input type="text" name="long" id="long" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Lattitude</label>
                                    <input type="text" name="lat" id="lat" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Posyandu</label>
                                    <input type="text" name="posyandu" id="posyandu" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="control-label">foto</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                    </form>
                </div>
            </section>

            <!--Tabel-->
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Titik Lokasi</h2>
                </header>
                <div class="panel-body">
                    <table class="table table-bordered table-striped mb-none" id="datatable-default">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Desa</th>
                                <th>Posyandu</th>
                                <th>Latitude</th>
                                <th>Longtitude</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($titik as $data)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->posyandu}}</td>
                                <td>{{$data->lat}}</td>
                                <td>{{$data->long}}</td>
                                <td class="actions">
                                    <a class="btn btn-warning" href="/titik/edit/{{$data->id}}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger" href="/titik/delete/{{$data->id}}" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
</section>
</div>
</div>
<!-- End page -->
</section>
</div>
@endsection
@push('style')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" />
<link rel="stylesheet" href="assets/Control.Coordinates.css">
<link rel="stylesheet" href="{{ asset('/template') }}/vendor/select2/select2.css" />

<style>
    #map {
        height: 68vh;
        width: 100%;
    }

    .label-bidang {
        font-size: 10pt;
        color: black;
        text-align: center;
    }
</style>
@endpush
@push('script_maps')
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/leaflet.textpath.js"></script>
<script src="assets/leaflet-hash.js"></script>
<script src="assets/Control.Coordinates.js"></script>

<script>
    var map = L.map('map').setView([-7.758072, 112.013957], 15);

    L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}', {
        maxZoom: 20,
        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    }).addTo(map);

    var geoMarker;
    $( document ).ready(function() {
        $.getJSON('titik/json', function(data) {
            $.each(data, function(index) {
                var marker = L.marker([parseFloat(data[index].lat), parseFloat(data[index].long)]).addTo(map);
                marker.bindPopup(data[index].posyandu + data[index].alamat).openPopup();
                // var html = '<h5>Nama Posyandu:  ' + data[index].posyandu + '<h5>';
                //     html+='<h5>Alamat:  ' + data[index].alamat +;
                  //html+='<img height="100px" src"assets/image/">'+detail[index].nama+;

                // L.popup()
                //                 .setLatLng([parseFloat(data[index].lat), parseFloat(data[index].long)])
                //                 .setContent(html)
                //                 .openOn(map);
            });
        });
    });

    //GEOJSON
    var geoLayer;
    $.getJSON('assets/map.geojson', function(json) {
        geoLayer = L.geoJson(json, {
            style: function(feature) {
                return {
                    fillOpacity: '0',
                    weight: '0',
                    opacity: '0',
                    color: 'green',
                    dashArray: '10 10',
                    lineCap: 'square'
                };
            },
            onEachFeature: function(feature, layer) {
                var desaLabel = L.divIcon({
                    className: 'label-bidang',
                    html: '<b>' + feature.properties.nama + '<b>',
                    iconSize: [100, 20]
                });
                L.marker(layer.getBounds().getCenter(), {
                    icon: desaLabel
                }).addTo(map);

                layer.on('click', (e) => {
                    //alert(feature.properties.nama)
                    $.getJSON('titik/desa/' + feature.properties.id, function(detail) {
                        $.each(detail, function(index) {
                            // alert(detail[index].nama);

                            //var html = '<h5>Nama Desa:  ' + detail[index].posyandu + '<h5>';
                            //  html+='<img height="100px" src"assets/image/">'+detail[index].nama+;

                            L.popup()
                                .setLatLng(layer.getBounds().getCenter())
                                .setContent(html)
                                .openOn(map);
                        });
                    });
                })
                layer.addTo(map);
            }
        });
    })

    function cari(id) {
        geoLayer.eachLayer(function(layer) {
            if (layer.feature.properties.id == id) {
                map.flyTo(layer.getBounds().getCenter(), 15);
                //layer.bindPopup(layer.feature.properties.nama);
            }
        });
        //map.flyTo(geoMarker[parseFloat(data[index].lat),parseFloat(data[index].long)], 15);
    }

    //Hash
    var hash = new L.hash(map);

    var c = new L.Control.Coordinates();
    c.addTo(map);
    map.on('click', function(e) {
        c.setCoordinates(e);
        $('#long').val(e.latlng.lng);
        $('#lat').val(e.latlng.lat);
    });
</script>
@endpush

@push('script')
<script src="{{ asset('/template') }}/vendor/select2/select2.js"></script>
<script>
    $('#kecamatan').change(function() {
        var kecamatan = $(this).find(':selected').val();
        if (kecamatan) {
            $.ajax({
                type: "get",
                url: "/getDesa/" + kecamatan,
                success: function(res) {
                    if (res) {
                        $("#desa").empty();
                        $.each(res, function(key, value) {
                            $("#desa").append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                }
            });
        }
    });
</script>
@endpush