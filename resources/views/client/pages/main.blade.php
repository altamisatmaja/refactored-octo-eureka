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
                            <h6 class="wow fadeInUp" data-wow-delay=".5s"><span class="text-uppercase id-color-2">Gigaland
                                    Market</span></h6>
                            <div class="spacer-10"></div>
                            <h1 class="wow fadeInUp" data-wow-delay=".75s">Create, sell or collect digital items.
                            </h1>
                            <p class="wow fadeInUp lead" data-wow-delay="1s">
                                Unit of data stored on a digital ledger, called a blockchain, that certifies a
                                digital asset to be unique and therefore not interchangeable</p>
                            <div class="spacer-10"></div>
                            <a href="explore.html" class="btn-main wow fadeInUp lead" data-wow-delay="1.25s">Explore</a>
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
                                <h4 class="wow fadeInUp">Set up your wallet</h4>
                                <p class="wow fadeInUp" data-wow-delay=".25s">Sed ut perspiciatis unde omnis iste
                                    natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                            </div>
                            <i class="wm icon_wallet"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="feature-box f-boxed style-3">
                            <i class="wow fadeInUp bg-color-2 i-boxed icon_cloud-upload_alt"></i>
                            <div class="text">
                                <h4 class="wow fadeInUp">Add your NFT's</h4>
                                <p class="wow fadeInUp" data-wow-delay=".25s">Sed ut perspiciatis unde omnis iste
                                    natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                            </div>
                            <i class="wm icon_cloud-upload_alt"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-sm-30">
                        <div class="feature-box f-boxed style-3">
                            <i class="wow fadeInUp bg-color-2 i-boxed icon_tags_alt"></i>
                            <div class="text">
                                <h4 class="wow fadeInUp">Sell your NFT's</h4>
                                <p class="wow fadeInUp" data-wow-delay=".25s">Sed ut perspiciatis unde omnis iste
                                    natus error sit voluptatem accusantium doloremque laudantium, totam rem.</p>
                            </div>
                            <i class="wm icon_tags_alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-collections" class="no-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2>Hot Collections</h2>
                            <div class="small-border bg-color-2"></div>
                        </div>
                    </div>
                    <div id="collection-carousel" class="owl-carousel wow fadeIn">

                        <div class="nft_coll">
                            <div class="nft_wrap">
                                <a href="collection.html"><img src="{{ asset('images/collections/coll-1.jpg') }}"
                                        class="lazy img-fluid" alt=""></a>
                            </div>
                            <div class="nft_coll_pp">
                                <a href="collection.html"><img class="lazy pp-coll"
                                        src="{{ asset('images/author/author-1.jpg') }}" alt=""></a>
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="nft_coll_info">
                                <a href="collection.html">
                                    <h4>Abstraction</h4>
                                </a>
                                <span>ERC-192</span>
                            </div>
                        </div>

                        <div class="nft_coll">
                            <div class="nft_wrap">
                                <a href="collection.html"><img src="{{ asset('images/collections/coll-2.jpg') }}"
                                        class="lazy img-fluid" alt=""></a>
                            </div>
                            <div class="nft_coll_pp">
                                <a href="collection.html"><img class="lazy pp-coll"
                                        src="{{ asset('images/author/author-2.jpg') }}" alt=""></a>
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="nft_coll_info">
                                <a href="collection.html">
                                    <h4>Patternlicious</h4>
                                </a>
                                <span>ERC-61</span>
                            </div>
                        </div>

                        <div class="nft_coll">
                            <div class="nft_wrap">
                                <a href="collection.html"><img src="{{ asset('images/collections/coll-3.jpg') }}"
                                        class="lazy img-fluid" alt=""></a>
                            </div>
                            <div class="nft_coll_pp">
                                <a href="collection.html"><img class="lazy pp-coll"
                                        src="{{ asset('images/author/author-3.jpg') }}" alt=""></a>
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="nft_coll_info">
                                <a href="collection.html">
                                    <h4>Skecthify</h4>
                                </a>
                                <span>ERC-126</span>
                            </div>
                        </div>

                        <div class="nft_coll">
                            <div class="nft_wrap">
                                <a href="collection.html"><img src="{{ asset('images/collections/coll-3.jpg') }}"
                                        class="lazy img-fluid" alt=""></a>
                            </div>
                            <div class="nft_coll_pp">
                                <a href="collection.html"><img class="lazy pp-coll"
                                        src="{{ asset('images/author/author-3.jpg') }}" alt=""></a>
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="nft_coll_info">
                                <a href="collection.html">
                                    <h4>Cartoonism</h4>
                                </a>
                                <span>ERC-73</span>
                            </div>
                        </div>

                        <div class="nft_coll">
                            <div class="nft_wrap">
                                <a href="collection.html"><img src="{{ asset('images/collections/coll-3.jpg') }}"
                                        class="lazy img-fluid" alt=""></a>
                            </div>
                            <div class="nft_coll_pp">
                                <a href="collection.html"><img class="lazy pp-coll"
                                        src="{{ asset('images/author/author-3.jpg') }}" alt=""></a>
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="nft_coll_info">
                                <a href="collection.html">
                                    <h4>Virtuland</h4>
                                </a>
                                <span>ERC-85</span>
                            </div>
                        </div>

                        <div class="nft_coll">
                            <div class="nft_wrap">
                                <a href="collection.html"><img src="{{ asset('images/collections/coll-3.jpg') }}"
                                        class="lazy img-fluid" alt=""></a>
                            </div>
                            <div class="nft_coll_pp">
                                <a href="collection.html"><img class="lazy pp-coll"
                                        src="{{ asset('images/author/author-3.jpg') }}" alt=""></a>
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="nft_coll_info">
                                <a href="collection.html">
                                    <h4>Papercut</h4>
                                </a>
                                <span>ERC-42</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
