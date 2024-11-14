@extends('client.layouts.app')

@section('content')
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <section id="section-hero" aria-label="section" class="no-top no-bottom vh-100"
            data-bgimage="url({{ asset('images/background/bg-shape-1.jpg') }}) bottom">
            <div class="v-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="spacer-single"></div>
                            <h6 class="wow fadeInUp" data-wow-delay=".5s"><span class="text-uppercase id-color-2">Laptopland
                                    Rekomendasi Laptop</span></h6>
                            <div class="spacer-10"></div>
                            <h1 class="wow fadeInUp" data-wow-delay=".75s">Jual, beli atau menjadi penjual.
                            </h1>
                            <p class="wow fadeInUp lead" data-wow-delay="1s">
                                Jual beli laptop dengan bantuan sistem rekomendasi untuk mempermudah pengambilan keputusan
                                membeli</p>
                            <div class="spacer-10"></div>
                            <a href="/rekomendasi" class="btn-main wow fadeInUp lead" data-wow-delay="1.25s">Cari
                                Rekomendasi</a>
                            <div class="mb-sm-30"></div>
                        </div>
                        <div class="col-md-6 xs-hide">
                            <img src="{{ asset('images/misc/nft.png') }}" class="lazy img-fluid wow fadeIn"
                                data-wow-delay="1.25s" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-intro" class="no-top no-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="feature-box f-boxed style-3">
                            <i class="wow fadeInUp bg-color-2 i-boxed icon_wallet"></i>
                            <div class="text">
                                <h4 class="wow fadeInUp">Atur Dompet Anda</h4>
                                <p class="wow fadeInUp" data-wow-delay=".25s">Siapkan dompet digital Anda untuk memulai
                                    transaksi jual beli laptop dengan lebih mudah dan aman.</p>
                            </div>
                            <i class="wm icon_wallet"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="feature-box f-boxed style-3">
                            <i class="wow fadeInUp bg-color-2 i-boxed icon_cloud-upload_alt"></i>
                            <div class="text">
                                <h4 class="wow fadeInUp">Tambah Laptop Anda</h4>
                                <p class="wow fadeInUp" data-wow-delay=".25s">Tambahkan laptop yang ingin Anda jual ke
                                    platform kami dan bantu calon pembeli menemukan produk terbaik.</p>
                            </div>
                            <i class="wm icon_cloud-upload_alt"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="feature-box f-boxed style-3">
                            <i class="wow fadeInUp bg-color-2 i-boxed icon_tags_alt"></i>
                            <div class="text">
                                <h4 class="wow fadeInUp">Jual Laptop Anda</h4>
                                <p class="wow fadeInUp" data-wow-delay=".25s">Jual laptop Anda dengan mudah menggunakan
                                    sistem rekomendasi kami untuk memastikan harga yang tepat dan menarik bagi pembeli.</p>
                            </div>
                            <i class="wm icon_tags_alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
