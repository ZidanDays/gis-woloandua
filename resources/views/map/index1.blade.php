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

                    <!-- Leaflet JS Script -->
                    <script>
                        // Inisialisasi map dengan posisi pada Woloan Dua
                        var map = L.map('map').setView([1.3127, 124.8189], 13); // Sesuaikan dengan koordinat Woloan Dua
                        
                        // Tile layer dari OpenStreetMap
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                        }).addTo(map);
                        
                        // Menggambar poligon (batas wilayah) di map
                        var boundaryCoordinates = [
                            [1.318746, 124.800752],
                            [1.315398, 124.793113],
                            [1.319217, 124.792363],
                            [1.320931, 124.794538],
                            [1.323800, 124.797120],
                            [1.323935, 124.800383],
                            [1.324317, 124.801478],
                            [1.324898, 124.801319],
                            [1.325582, 124.802783],
                            [1.325500, 124.806917],
                            [1.319652, 124.806831],
                            [1.319875, 124.811892],
                            [1.313008, 124.812854],
                            [1.312624, 124.812241],
                            [1.311595, 124.806999],
                            [1.312072, 124.806696],
                            [1.312289, 124.806094],
                            [1.312118, 124.804390],
                            [1.308949, 124.800416],
                            [1.312117, 124.801397],
                        ];

                        var wilayahACoordinates = [
                            [1.321711, 124.800087],
                            [1.322166, 124.801999],
                            [1.320892, 124.802393],
                            [1.320194, 124.800330]
                        ];
                        
                        var boundaryPolygon = L.polygon(boundaryCoordinates, {
                            color: 'blue',
                            fillColor: '#3388ff',
                            fillOpacity: 0.4
                        }).addTo(map);

                        var wilayahAPolygon = L.polygon(wilayahACoordinates, {
                            color: 'purple',
                            fillColor: '#88ff',
                            fillOpacity: 0.4
                        }).addTo(map);



                        wilayahyAPolygon.bindPopup("Ini adalah batas wilayah Woloan Dua").openPopup();
                        boundaryPolygon.bindPopup("Ini adalah batas wilayah Woloan Dua").openPopup();
                        
                        // Koordinat untuk garis merah
                        var lineCoordinates = [
                            [1.321711, 124.800087],
                            [1.322166, 124.801999],
                            [1.320892, 124.802393],
                            [1.320194, 124.800330]
                        ];
                        
                        // Menggambar garis poligon (polyline) dengan warna merah
                        var polyline = L.polyline(lineCoordinates, {
                            color: 'red',      // Warna garis
                            weight: 4          // Ketebalan garis
                        }).addTo(map);
                        
                        // Menambahkan popup pada garis
                        polyline.bindPopup("Ini adalah garis batas untuk Titik A").openPopup();
                    </script>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
@endsection
