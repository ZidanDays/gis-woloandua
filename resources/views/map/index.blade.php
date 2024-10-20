@extends('layouts.main')

@section('container')
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->

        <!-- [ Main Content ] start -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Map View</h5>
                </div>
                <div class="card-body">
                    <!-- Div untuk menampilkan peta -->
                    <div id="map" style="height: 500px;"></div>

                    <script>
                        // Inisialisasi Leaflet map
                        var map = L.map('map').setView([1.3127, 124.8189], 13);
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                        }).addTo(map);
                      
                        // Memuat shapefile (pastikan file .shp dan pendukungnya berada di tempat yang benar)
                        fetch('DATA WOLOAN DUA_WOLOAN SATU UTARA.zip') // Shapefile harus dalam format ZIP
                          .then(response => response.arrayBuffer())
                          .then(buffer => {
                              shp(buffer).then(function (geojson) {
                                  L.geoJSON(geojson).addTo(map); // Menampilkan shapefile sebagai GeoJSON di Leaflet
                              });
                          });
                      </script>
                      
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
@endsection
