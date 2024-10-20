@extends('layouts.main')
@section('container')
<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Form Pengajuan</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Pengajuan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Form Pengajuan Perkara</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('form.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <!-- Tanggal -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                    </div>
                                </div>
                                
                                <!-- Nomor Perkara -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nomor_perkara">Nomor Perkara</label>
                                        <input type="text" class="form-control" id="nomor_perkara" name="nomor_perkara" placeholder="Masukkan nomor perkara" required>
                                    </div>
                                </div>
                                
                                <!-- Nama -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required>
                                    </div>
                                </div>
                                
                                <!-- Alamat -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat" required></textarea>
                                    </div>
                                </div>
                                
                                <!-- Nomor Telepon -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nomor_telepon">Nomor Telepon</label>
                                        <input type="tel" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Masukkan nomor telepon" required>
                                    </div>
                                </div>
                                
                                <!-- Pihak -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pihak">Pihak</label>
                                        <select class="form-control" id="pihak" name="pihak" required>
                                            <option value="penggugat">Penggugat</option>
                                            <option value="pemohon">Pemohon</option>
                                            <option value="tergugat">Tergugat</option>
                                            <option value="termohon">Termohon</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
@endsection
