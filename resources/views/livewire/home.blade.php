<div class="container">

    {{-- Carousel/Slider --}}
    <div class="slider">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#" data-slide-to=" " class="active"></li>
            </ol>
            <div class="carousel-inner">
                @foreach($sliders as $key => $slider)
                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                    <img src="{{url('assets/slider', $slider->gambar)}}" class="d-block w-100 ;" alt="...">
                </div>
                <div class="carousel-caption">
                    <h1 class="display-4">EXPLORE YOUR SELF WITH <br> <span class="font-weight-bold ">APOEY CAMPING</span></h1>
                    <hr class="my-2">
                    <p class="lead font-weight-bold m-4">JUAL BELI ALAT OUTDOOR / CAMPING / HIKING</p>
                    <a class="btn btn-primary btn-lg font-weight-bold mb-4" href="{{ route('products') }}" role="button">KUNJUNGI</a>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>



    {{-- PILIH KATEGORI  --}}
    <section class="pilih-outdoor mt-4">
        <h3><strong>Pilih Kategori</strong></h3>
        <div class="row mt-4">
            @foreach($outdoors as $outdoor)
            <div class="col">
                <a href="{{ route('products.outdoor', $outdoor->id) }}">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <img src="{{ url('assets/barang') }}/{{ $outdoor->gambar }}" class="img-fluid">
                            <p class="font-weight-bold pt-4">{{ $outdoor->jenis }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>

    {{-- BEST PRODUCT  --}}
    <section class="products mt-5 mb-5">
        <h3>
            <strong>Best Products</strong>
            <a href="{{ route('products') }}" class="btn btn-dark float-right"><i class="fas fa-eye"></i> Lihat Semua </a>
        </h3>
        <div class="row mt-4">
            @foreach($products as $product)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="{{ url('assets/barang') }}/{{ $product->gambar }}" class="img-fluid">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5><strong>{{ $product->nama }}</strong> </h5>
                                <h5>Rp. {{ number_format($product->harga) }}</h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <a href="{{ route('products.detail', $product->id) }}" class="btn btn-dark btn-block"><i class="fas fa-eye"></i> Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
