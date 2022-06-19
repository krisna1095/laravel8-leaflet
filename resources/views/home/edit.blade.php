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
                                    <button type="submit" class="btn btn-primary">Add <i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Kecamatan</label>
                                    <select data-plugin-selectTwo class="form-control populate" id="kecamatan" name="kecamatan">
                                        <option selected disabled></option>
                                        @foreach($kecamatan as $kecamatan)
                                        <option value="{{ $kecamatan->id }}">{{ $kecamatan->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Desa</label>
                                    <select data-plugin-selectTwo class="form-control populate" id="desa" name="desa">
                                        <option value="{{ $titik->desa_id }}">{{ $titik->DesaModel->nama }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Longtitude</label>
                                    <input type="text" name="long" id="long" value="{{ $titik->long }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Lattitude</label>
                                    <input type="text" name="lat" id="lat" value="{{ $titik->lat }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Posyandu</label>
                                    <input type="text" name="posyandu" id="posyandu" value="{{ $titik->posyandu }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" value="{{ $titik->alamat }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">foto</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                    </form>
                </div>
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

    var marker = L.marker([<?= $titik->lat; ?>, <?= $titik->long; ?>]).addTo(map);

    map.on('click', function(e) {
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