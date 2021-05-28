<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">History</li>
                </ol>
                <a href="{{ route('keranjang') }}" class="btn btn-primary font-weight-bold"><i class="fas fa-arrow-left"> Kembali</i></a>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row mt-4">
        <div class="col">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Tanggal Pesan</td>
                            <td>Kode Pemesanan</td>
                            <td>Pesanan</td>
                            <td>Status</td>
                            <td><strong>Total Harga</strong></td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @if(is_array($pesanans) || is_object($pesanans))
                        <?php $no = 1 ?>
                        @forelse ($pesanans as $pesanan)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $pesanan->created_at }}</td>
                            <td>{{ $pesanan->kode_pemesanan }}</td>
                            <td>
                                <?php $pesanan_details = \App\PesananDetail::where('pesanan_id', $pesanan->id)->get(); ?>
                                @foreach ($pesanan_details as $pesanan_detail)
                                <img src="{{ url('assets/barang') }}/{{ $pesanan_detail->product->gambar }}" class="img-fluid" width="50">
                                {{ $pesanan_detail->product->nama }}
                                <br>
                                @endforeach
                            </td>
                            <td>
                                @if($pesanan->status == 1)
                                Belum Lunas
                                @else
                                Lunas
                                @endif
                            </td>
                            <td><strong>Rp. {{ number_format($pesanan->total_harga) }}</strong></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">Data Kosong</td>
                        </tr>
                        @endforelse
                        @else
                        <tr>
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>ANDA BELUM LOGIN <br> Silahkan anda Login Terlebih Dahulu <br> <a href="{{ route('login') }}" class="btn btn-primary font-weight-bold mt-2"><i class="fas fa-user"> LOGIN</i></a></strong>

                            </div>
                        </tr>
                        @endif


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @if(is_array($pesanans) || is_object($pesanans))
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <p>Untuk pembayaran silahkan dapat transfer di rekening dibawah ini : </p>
                    <div class="media">
                        <img class="mr-3" src="{{ url('assets/bca2.png') }}" alt="Bank BCA" width="60">
                        <div class="media-body">
                            <h5 class="mt-0">BANK BCA</h5>
                            No. Rekening 2832278824 an. <strong>Arba Adhy Pamungkas</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
