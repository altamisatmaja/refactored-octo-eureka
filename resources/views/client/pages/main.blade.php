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
                            <h1 class="wow fadeInUp" data-wow-delay=".75s">Sistem rekomendasi laptop
                            </h1>
                            <p class="wow fadeInUp lead" data-wow-delay="1s">
                                Sistem rekomendasi laptop yang akan membantu kamu untuk mencari laptop yang cocok buat kamu!
                            </p>
                            <div class="spacer-10"></div>
                            <a href="/rekomendasi" class="btn-main wow fadeInUp lead" data-wow-delay="1.25s">Cari
                                Rekomendasi</a>
                            <div class="mb-sm-30"></div>
                        </div>
                        <div class="col-md-6 xs-hide">
                            <img src="{{ asset('images/background/bg-laptop-2.png') }}" class="lazy img-fluid wow fadeIn"
                                data-wow-delay="1.25s" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-intro" class="no-top no-bottom ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="feature-box f-boxed style-3">
                            <i class="wow fadeInUp bg-color-2 i-boxed icon_laptop"></i>
                            <div class="text">
                                <h4 class="wow fadeInUp">Temukan Laptop yang Tepat</h4>
                                <p class="wow fadeInUp" data-wow-delay=".25s">Gunakan sistem rekomendasi berbasis algoritma
                                    cosine similarity untuk menemukan laptop yang sesuai dengan kebutuhan dan preferensi
                                    Anda.</p>
                            </div>
                            <i class="wm icon_laptop"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="feature-box f-boxed style-3">
                            <i class="wow fadeInUp bg-color-2 i-boxed icon_cloud-upload_alt"></i>
                            <div class="text">
                                <h4 class="wow fadeInUp">Analisis Kebutuhan Anda</h4>
                                <p class="wow fadeInUp" data-wow-delay=".25s">Sistem ini menganalisis spesifikasi
                                    laptop untuk memberikan rekomendasi laptop, seperti merek,
                                    penyimpanan, ram, dan
                                    harga.</p>
                            </div>
                            <i class="wm icon_cloud-upload_alt"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="feature-box f-boxed style-3">
                            <i class="wow fadeInUp bg-color-2 i-boxed icon_star"></i>
                            <div class="text">
                                <h4 class="wow fadeInUp">Referensi Terpercaya</h4>
                                <p class="wow fadeInUp" data-wow-delay=".25s">Dapatkan referensi laptop terbaik berdasarkan
                                    algoritma kami untuk memastikan Anda membuat
                                    pilihan yang tepat.</p>
                            </div>
                            <i class="wm icon_star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="spacer-50"></div>


    </div>
@endsection
