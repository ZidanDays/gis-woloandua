<div class="container">
    <!-- Header Section -->
    <div class="header">
        <h3>FORMULIR PERMINTAAN AKTA CERAI</h3>
    </div>

    @foreach ($perkara as $p)
        

    <!-- Detail Section -->
    <div class="details">
        <p>Permintaan Akta Cerai</p>
        {{-- <p>Tanggal        : ...........................................</p> --}}
        <p>Tanggal: {{ $p->tanggal ? $p->tanggal : '-' }}</p>

        <p>Nomor Perkara  : {{ $p->nomor_perkara ? $p->nomor_perkara : '-' }}</p>
    </div>



    <div class="details">
        <p>Kami menyampaikan kepada Saudara/i:</p>
        <table class="no-border">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{ $p->nama ? $p->nama : '-' }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $p->alamat ? $p->alamat : '-' }}</td>
            </tr>
            <tr>
                <td>No. Telepon</td>
                <td>:</td>
                <td>{{ $p->nomor_telepon ? $p->nomor_telepon : '-' }}</td>
            </tr>
            <tr>
                <td>Sebagai Pihak</td>
                <td>:</td>
                <td>{{ $p->pihak ? $p->pihak : '-' }}</td>
            </tr>
        </table>
    </div>
    

    <!-- Table Section -->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Hal terkait Permohonan Akta Cerai</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Bentuk Akta Cerai yang Tersedia</td>
                <td></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Biaya yang Dibutuhkan</td>
                <td>PNBP Rp</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Waktu Penyediaan</td>
                <td></td>
            </tr>
        </tbody>
    </table>
<br>
    <!-- Footer Section -->
    <div class="footer">
        <p>Amurang, {{ $p->tanggal ? $p->tanggal : '-' }}</p>
        <br>
        <br>
        <br>
        <br>
        <p>{{ $p->nama ? $p->nama : '-' }}</p>
    </div>
</div>

@endforeach