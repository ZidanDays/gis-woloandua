// Inisialisasi peta dan atur tampilan awal
const map = L.map("map").setView([1.3127, 124.8189], 13); // Koordinat awal

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  attribution:
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
}).addTo(map);

let allLayers = [];

// Fungsi untuk menghasilkan warna acak
function getRandomColor() {
  const letters = "0123456789ABCDEF";
  let color = "#";
  for (let i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

// Fungsi untuk mengatur style setiap poligon dengan kondisi warna
function getStyle(feature, filePath) {
  return {
    color: "#000000",
    weight: 2,
    opacity: 0.8,
    fillColor: filePath.includes("WOLOAN DUA ADM.zip")
      ? getRandomColor()
      : null, // Tidak ada warna untuk Persil.zip
    fillOpacity: filePath.includes("WOLOAN DUA ADM.zip") ? 0.5 : 0, // Opasitas 0 untuk Persil.zip
  };
}

// Fungsi untuk memuat dan menampilkan shapefile
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
                (feature.properties?.RPBULAT || "0")
                  .toString()
                  .replace(/[^0-9]/g, "")
              );

              if (isNaN(RPBULAT)) RPBULAT = 0;

              const formattedPrice = RPBULAT.toLocaleString("id-ID", {
                style: "currency",
                currency: "IDR",
                minimumFractionDigits: 0,
              });

              layer.bindPopup(`<b>Harga: ${formattedPrice}</b>`);
              layer.on("click", () => {
                alert(`Harga: ${formattedPrice}`);
              });

              // Menambahkan file path ke dalam objek layer
              allLayers.push({ layer: layer, price: RPBULAT, filePath });
            },
          }).addTo(map);
        })
        .catch((error) => console.error("Error parsing shapefile:", error));
    })
    .catch((error) => console.error("Error loading ZIP file:", error));
}

// Memuat file pertama dengan warna acak
loadShapefile("assets/WOLOAN DUA ADM.zip");

// Memuat file kedua tanpa warna isi
loadShapefile("assets/Persil.zip");

// Fungsi untuk menambahkan animasi fade-in ke layer
function fadeIn(layer) {
  const el = layer.getElement();
  if (el) {
    el.style.opacity = 0;
    el.style.transition = "opacity 0.5s ease-in-out"; // Animasi selama 0.5 detik
    requestAnimationFrame(() => (el.style.opacity = 1));
  }
}

// Fungsi untuk menambahkan animasi fade-out sebelum menghapus layer
function fadeOut(layer, callback) {
  const el = layer.getElement();
  if (el) {
    el.style.transition = "opacity 0.5s ease-in-out";
    el.style.opacity = 0;
    setTimeout(() => {
      if (callback) callback(); // Hapus layer setelah animasi selesai
    }, 500); // Waktu sesuai durasi animasi
  } else if (callback) {
    callback();
  }
}

// Modifikasi fungsi applyFilter untuk menambahkan efek animasi
function applyFilter() {
  const filterValue = document.getElementById("price-filter").value;

  allLayers.forEach(({ layer, price, filePath }) => {
    let shouldDisplay = false;

    // Tetap tampilkan file Persil.zip terlepas dari filter
    if (filePath.includes("Persil.zip")) {
      shouldDisplay = true;
    } else {
      // Terapkan filter untuk file lain
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
    }

    if (shouldDisplay) {
      if (!map.hasLayer(layer)) {
        fadeIn(layer); // Animasi saat layer ditampilkan
        layer.addTo(map);
      }
    } else if (map.hasLayer(layer)) {
      fadeOut(layer, () => map.removeLayer(layer)); // Animasi saat layer dihapus
    }
  });
}
