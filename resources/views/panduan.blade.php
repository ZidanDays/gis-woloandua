@extends('layouts-landing.main')

@section('container')
<br>
<br>
<br>
<div class="container my-5">
    <h1 class="text-center mb-4">Panduan Penggunaan Web GIS untuk Zona Nilai Tanah di Woloan Dua</h1>

    <div class="mb-4">
        <h2>Tujuan Pembangunan Web GIS</h2>
        <p>Web GIS ini bertujuan untuk memudahkan masyarakat dalam mengakses informasi mengenai zona nilai tanah atau harga tanah di daerah Woloan Dua. Platform ini diharapkan membantu masyarakat, investor, dan pihak terkait lainnya dalam mengambil keputusan yang lebih baik berdasarkan data yang akurat.</p>
    </div>

    <div class="mb-4">
        <h2>1. Memulai Aplikasi dan Navigasi Halaman Beranda</h2>
        <p>Setelah membuka aplikasi Web GIS melalui browser, pengguna akan disambut oleh halaman beranda website. Di halaman ini, Anda akan menemukan informasi umum mengenai tujuan dan manfaat dari Web GIS ini. Untuk melihat peta interaktif dengan zona nilai tanah, ikuti langkah berikut:</p>
        <ul>
            <li>Pastikan Anda berada di halaman utama, ditandai dengan tampilan beranda setelah membuka website.</li>
            <li>Di bagian atas halaman, terdapat menu header yang terdiri dari beberapa link, yaitu <strong>Beranda</strong>, <strong>Peta</strong>, dan <strong>Panduan</strong>.</li>
            <li>Untuk mengakses peta, klik link <strong>Peta</strong> di header. Anda akan diarahkan ke halaman peta interaktif yang menampilkan zona nilai tanah di Woloan Dua.</li>
            <li>Jika Anda memerlukan bantuan mengenai cara menggunakan aplikasi ini, klik link <strong>Panduan</strong> di header untuk melihat petunjuk lengkapnya.</li>
        </ul>
    </div>

    <div class="mb-4">
        <h2>2. Menavigasi Peta</h2>
        <p>Di halaman peta, Anda dapat melakukan berbagai interaksi untuk melihat detail zona nilai tanah. Berikut adalah beberapa cara menavigasi peta:</p>
        <ul>
            <li><strong>Zoom In/Out:</strong> Gunakan scroll mouse atau tombol zoom (+/-) di bagian kanan bawah peta untuk memperbesar atau memperkecil tampilan peta.</li>
            <li><strong>Pan:</strong> Klik dan tahan pada peta, lalu seret ke arah yang Anda inginkan untuk melihat area lain.</li>
            <li><strong>Pilih Lokasi:</strong> Klik pada area tertentu di peta untuk menampilkan informasi detail nilai tanah di lokasi tersebut.</li>
        </ul>
    </div>

    <div class="mb-4">
        <h2>3. Menampilkan Informasi Detail Zona Nilai Tanah</h2>
        <p>Setiap area di peta memiliki informasi nilai tanah yang dapat Anda lihat dengan mengkliknya. Detail yang ditampilkan meliputi:</p>
        <ul>
            <li><strong>Harga Tanah:</strong> Estimasi harga tanah per meter persegi di lokasi tersebut.</li>
            <li><strong>Kategori Zona:</strong> Kategori seperti zona komersial, pemukiman, atau zona hijau.</li>
            {{-- <li><strong>Tanggal Pembaruan:</strong> Waktu terakhir data zona diperbarui untuk memastikan informasi yang akurat.</li> --}}
        </ul>
    </div>

    <div class="mb-4">
        <h2>4. Menggunakan Layer Data</h2>
        <p>Peta menyediakan beberapa layer data yang dapat Anda aktifkan atau nonaktifkan sesuai kebutuhan. Untuk mengelola layer, buka menu layer yang terletak di sisi peta dan centang layer yang diinginkan, seperti layer akses jalan atau rencana pengembangan.</p>
    </div>

    <div class="mb-4">
        <h2>5. Mencari Data Spesifik</h2>
        <p>Gunakan fitur pencarian di atas peta untuk menemukan lokasi tertentu dengan cepat. Masukkan nama lokasi atau kata kunci terkait, dan peta akan melakukan zoom ke lokasi yang dicari dengan informasi yang relevan.</p>
    </div>

    <div class="mb-4">
        <h2>6. Mengunduh Data</h2>
        <p>Anda juga dapat mengunduh data GIS dalam format seperti GeoJSON atau Shapefile untuk kebutuhan analisis atau dokumentasi lebih lanjut melalui opsi unduh di menu atau toolbar aplikasi.</p>
    </div>

    <div class="mb-4">
        <h2>7. Bantuan dan Dukungan</h2>
        <p>Untuk bantuan lebih lanjut, Anda dapat mengunjungi halaman bantuan atau menghubungi tim dukungan kami melalui formulir kontak di situs ini.</p>
    </div>
    
    <div class="mb-4">
        <h2>8. Pembaruan Data Zona Nilai Tanah</h2>
        <p>Data zona nilai tanah diperbarui secara berkala untuk menjaga akurasi informasi. Pastikan Anda mengakses versi data terbaru yang ditampilkan di peta.</p>
    </div>
</div>
@endsection
