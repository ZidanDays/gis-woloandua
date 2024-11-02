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
                    <!-- Dropdown untuk filter harga -->
                    <label for="price-filter" class="filter-label">Filter berdasarkan harga:</label>
                    <select id="price-filter" class="filter-select" onchange="applyFilter()">
                        <option value="all">Semua Harga</option>
                        <option value="500000">Di bawah Rp. 500.000</option>
                        <option value="1000000">Rp. 500.000 - Rp. 1.000.000</option>
                        <option value="1500000">Di atas Rp. 1.000.000</option>
                    </select>

                    <!-- Div untuk menampilkan peta -->
                    <div id="map" style="height: 500px;"></div>

                    <script>
                    var allLayers = []; // Array untuk menyimpan semua layer

                    // Inisialisasi Leaflet map di lokasi Woloan Dua
                    var map = L.map('map').setView([1.3127, 124.8189], 13);

                    // Tambahkan tile dari OpenStreetMap
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                    }).addTo(map);

                    // Objek untuk menyimpan warna unik bagi setiap harga
                    const priceColorMap = {};

                    // Fungsi untuk menghasilkan warna acak (hex)
                    function getRandomColor() {
                        let letters = '0123456789ABCDEF';
                        let color = '#';
                        for (let i = 0; i < 6; i++) {
                            color += letters[Math.floor(Math.random() * 16)];
                        }
                        return color;
                    }

                    // Fungsi untuk mendapatkan atau menetapkan warna unik berdasarkan harga
                    function getColorByExactPrice(price) {
                        if (!priceColorMap[price]) {
                            priceColorMap[price] = getRandomColor();
                        }
                        return priceColorMap[price];
                    }

                    // Fungsi style untuk setiap polygon berdasarkan harga spesifiknya
                    function getStyle(feature) {
                        let RPBULAT = parseFloat(
                            (feature.properties?.RPBULAT || "0").toString().replace(/[^0-9]/g, "")
                        );

                        if (isNaN(RPBULAT)) RPBULAT = 0;

                        return {
                            color: "#000000", // Warna outline hitam
                            weight: 2,
                            opacity: 0.8,
                            fillColor: getColorByExactPrice(RPBULAT), // Warna unik berdasarkan harga
                            fillOpacity: 0.5,
                        };
                    }

                    // Tambahkan GeoJSON ke peta
                    fetch('databaru.zip')
                        .then(response => response.arrayBuffer())
                        .then(buffer => {
                            shp(buffer).then(function(geojson) {
                                // Gunakan variabel untuk geoJSON agar bisa dikendalikan
                                const geoLayer = L.geoJSON(geojson, {
                                    style: getStyle,
                                    onEachFeature: function(feature, layer) {
                                        let RPBULAT = parseFloat(
                                            (feature.properties?.RPBULAT || "0").toString()
                                            .replace(/[^0-9]/g, "")
                                        );

                                        if (isNaN(RPBULAT)) RPBULAT = 0;

                                        const formattedPrice = RPBULAT.toLocaleString("id-ID", {
                                            style: "currency",
                                            currency: "IDR",
                                            minimumFractionDigits: 0,
                                        });

                                        layer.bindPopup(`<b>Harga: ${formattedPrice}</b>`);

                                        allLayers.push({
                                            layer: layer,
                                            price: RPBULAT
                                        });
                                    }
                                }).addTo(map);
                            });
                        })
                        .catch(err => console.log("Error loading shapefile: ", err));

                    // Fungsi untuk menerapkan filter harga
                    function applyFilter() {
                        const filterValue = document.getElementById("price-filter").value;

                        allLayers.forEach(({
                            layer,
                            price
                        }) => {
                            let shouldDisplay = false;

                            // Log nilai harga untuk memastikan data benar
                            console.log(`Layer price: ${price}, Filter: ${filterValue}`);

                            // Kondisi pengecekan sesuai nilai filter
                            switch (filterValue) {
                                case "all":
                                    shouldDisplay = true;
                                    break;
                                case "500000":
                                    shouldDisplay = price > 0 && price < 500000;
                                    break;
                                case "1000000":
                                    shouldDisplay = price >= 500000 && price <= 1000000;
                                    break;
                                case "1500000":
                                    shouldDisplay = price > 1000000;
                                    break;
                                default:
                                    shouldDisplay = true;
                            }

                            // Tampilkan atau sembunyikan layer berdasarkan filter
                            if (shouldDisplay) {
                                if (!map.hasLayer(layer)) {
                                    layer.addTo(map); // Tampilkan layer jika sesuai filter
                                }
                            } else if (map.hasLayer(layer)) {
                                map.removeLayer(layer); // Hapus layer jika tidak sesuai filter
                            }
                        });
                    }
                    </script>

                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
@endsection