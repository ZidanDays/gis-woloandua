@extends('layouts-landing.main')

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
                    <br>
                    <button class="btn btn-primary" onclick="downloadMapData()">Download Peta (GeoJSON)</button>
                </div>
                <div class="card-body">
                    <!-- Dropdown untuk filter harga -->
                    <div class="mb-3">
                        <label for="price-filter" class="filter-label">Filter berdasarkan harga:</label>
                        <select id="price-filter" class="form-select filter-select" onchange="applyFilter()">
                            <option value="all">Semua Harga</option>
                            <option value="500000">Di bawah Rp. 500.000</option>
                            <option value="1000000">Rp. 500.000 - Rp. 1.000.000</option>
                            <option value="1500000">Di atas Rp. 1.000.000</option>
                        </select>
                    </div>

                    <!-- Map in a card with reduced size -->
                    <div id="map" style="height: 600px; border-radius: 10px; border: 1px solid #ddd;"></div>

                    <script>
                        // Initialize map with default view
                        const map = L.map("map").setView([1.3127, 124.8189], 13);

                        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                        }).addTo(map);

                        let allLayers = [];

                        function getRandomColor() {
                            const letters = "0123456789ABCDEF";
                            let color = "#";
                            for (let i = 0; i < 6; i++) {
                                color += letters[Math.floor(Math.random() * 16)];
                            }
                            return color;
                        }

                        function getStyle(feature, filePath) {
                            return {
                                color: "#000000",
                                weight: 2,
                                opacity: 0.8,
                                fillColor: filePath.includes("databaru.zip") ? getRandomColor() : null,
                                fillOpacity: filePath.includes("databaru.zip") ? 0.5 : 0,
                            };
                        }

                        function loadShapefile(filePath) {
                            fetch(filePath)
                                .then((response) => response.arrayBuffer())
                                .then((buffer) => {
                                    shp(buffer)
                                        .then((geojson) => {
                                            L.geoJSON(geojson, {
                                                style: (feature) => getStyle(feature, filePath),
                                                onEachFeature: function (feature, layer) {
                                                    let RPBULAT = parseFloat(
                                                        (feature.properties?.RPBULAT || "0").toString().replace(/[^0-9]/g, "")
                                                    );

                                                    if (isNaN(RPBULAT)) RPBULAT = 0;

                                                    const formattedPrice = RPBULAT.toLocaleString("id-ID", {
                                                        style: "currency",
                                                        currency: "IDR",
                                                        minimumFractionDigits: 0,
                                                    });

                                                    layer.bindPopup(`<b>Harga: ${formattedPrice}</b>`);
                                                    allLayers.push({ layer: layer, price: RPBULAT, filePath });
                                                },
                                            }).addTo(map);
                                        })
                                        .catch((error) => console.error("Error parsing shapefile:", error));
                                })
                                .catch((error) => console.error("Error loading ZIP file:", error));
                        }

                        loadShapefile("databaru.zip");
                        loadShapefile("Persil.zip");

                        function fadeIn(layer) {
                            const el = layer.getElement();
                            if (el) {
                                el.style.opacity = 0;
                                el.style.transition = "opacity 0.5s ease-in-out";
                                requestAnimationFrame(() => (el.style.opacity = 1));
                            }
                        }

                        function fadeOut(layer, callback) {
                            const el = layer.getElement();
                            if (el) {
                                el.style.transition = "opacity 0.5s ease-in-out";
                                el.style.opacity = 0;
                                setTimeout(() => {
                                    if (callback) callback();
                                }, 500);
                            } else if (callback) {
                                callback();
                            }
                        }

                        function applyFilter() {
                            const filterValue = document.getElementById("price-filter").value;

                            allLayers.forEach(({ layer, price, filePath }) => {
                                let shouldDisplay = filePath.includes("Persil.zip") || 
                                    (filterValue === "all") || 
                                    (filterValue === "500000" && price > 0 && price < 500000) || 
                                    (filterValue === "1000000" && price >= 500000 && price <= 1000000) || 
                                    (filterValue === "1500000" && price > 1000000);

                                if (shouldDisplay) {
                                    if (!map.hasLayer(layer)) {
                                        fadeIn(layer);
                                        layer.addTo(map);
                                    }
                                } else if (map.hasLayer(layer)) {
                                    fadeOut(layer, () => map.removeLayer(layer));
                                }
                            });
                        }

                        // Function to download map data as GeoJSON
                        function downloadMapData() {
                            const geojson = {
                                type: "FeatureCollection",
                                features: allLayers.map(({ layer }) => layer.toGeoJSON())
                            };

                            const blob = new Blob([JSON.stringify(geojson)], { type: "application/json" });
                            const url = URL.createObjectURL(blob);
                            const link = document.createElement("a");
                            link.href = url;
                            link.download = "peta_zona_nilai_tanah.geojson";
                            document.body.appendChild(link);
                            link.click();
                            document.body.removeChild(link);
                            URL.revokeObjectURL(url);
                        }
                    </script>

                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
@endsection
