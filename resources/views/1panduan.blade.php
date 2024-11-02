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
                            <h5 class="m-b-10">Panduan Penggunaan Sistem</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Panduan Penggunaan Sistem</a></li>
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
                    <h5>Panduan Penggunaan Aplikasi</h5>
                </div>
                <div class="card-body">
                    <!-- Panduan Penggunaan -->
                    <h6>1. Pendahuluan</h6>
                    <p><b>Peta Zona Nilai Tanah di Kelurahan Woloan Dua</b> adalah sebuah sistem berbasis web yang menampilkan informasi terkait zona dan nilai tanah di wilayah Woloan Dua. Sistem ini memudahkan pengguna dalam melihat peta tanah serta melakukan pencarian berdasarkan harga tanah.</p>

                    <h6>2. Fitur Utama</h6>
                    <ul>
                        <li>Peta interaktif yang menampilkan informasi zona nilai tanah berdasarkan warna.</li>
                        <li>Fitur filter untuk menyaring zona tanah berdasarkan rentang harga tertentu.</li>
                        <li>Informasi detail zona tanah yang ditampilkan dalam bentuk popup.</li>
                        <li>Layer tambahan yang memberikan informasi pendukung lainnya.</li>
                    </ul>

                    <h6>3. Cara Menggunakan Sistem</h6>

                    <h6>3.1. Menampilkan Peta</h6>
                    <p>Setelah login, pilih menu <b>"Peta Zona Nilai Tanah"</b>. Peta interaktif akan menampilkan berbagai zona tanah dengan warna yang berbeda, yang mengindikasikan nilai tanah di setiap zona.</p>

                    <h6>3.2. Melihat Detail Zona</h6>
                    <p>Klik salah satu zona tanah di peta untuk melihat informasi harga tanah pada zona tersebut. Popup akan muncul dan menampilkan harga tanah dalam format Rupiah.</p>

                    <h6>3.3. Filter Berdasarkan Harga</h6>
                    <p>Gunakan dropdown <b>"Filter berdasarkan harga"</b> yang tersedia di atas peta untuk memilih rentang harga. Sistem akan otomatis menampilkan hanya zona-zona tanah yang sesuai dengan kriteria harga yang Anda pilih.</p>

                    <h6>4. Tips Penggunaan</h6>
                    <p>
                        <ul>
                            <li>Gunakan fitur zoom dan filter harga untuk melihat detail zona tanah dengan lebih jelas.</li>
                            <li>Jika Anda menemukan kesalahan data, segera hubungi admin untuk memperbarui informasi tersebut.</li>
                        </ul>
                    </p>

                    <h6>5. Solusi Masalah Umum</h6>
                    <ul>
                        <li><b>Peta tidak muncul:</b> Pastikan koneksi internet Anda stabil, dan gunakan browser yang kompatibel seperti Google Chrome atau Mozilla Firefox.</li>
                        <li><b>Tidak ada zona yang sesuai dengan filter:</b> Coba pilih filter dengan rentang harga yang lebih umum atau lebih luas untuk melihat zona yang mungkin relevan.</li>
                    </ul>

                    <h6>6. Kontak Bantuan</h6>
                    <p>Jika Anda mengalami masalah atau memerlukan bantuan, silakan hubungi tim support melalui email di <a href="mailto:support@woloanduasystem.com">support@woloanduasystem.com</a> atau telepon di (0431) 123-4567.</p>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
@endsection
