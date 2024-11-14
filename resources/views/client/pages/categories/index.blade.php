@extends('client.layouts.app')

@section('content')
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>
        <!-- section begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <!-- section begin -->
            <section id="subheader" class="text-light" data-bgimage="url({{ asset('images/background/subheader.jpg') }}) top">
                <div class="center-y relative text-center">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-12 text-center">
                                <h1>Jenis Laptop</h1>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section close -->




            <!-- section begin -->
            <section aria-label="section">
                <div class="container">
                    <div class="row wow fadeIn">
                        <div class="col-lg-12">

                            <div class="items_filter">
                                <form action="blank.php" class="row form-dark" id="form_quick_search" method="post"
                                    name="form_quick_search">
                                    <div class="col text-center">
                                        <input class="form-control" id="name_1" name="name_1"
                                            placeholder="search item here..." type="text" /> <a href="#"
                                            id="btn-submit"><i class="fa fa-search bg-color-secondary"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>

                                <div id="item_category" class="dropdown">
                                    <a href="#" class="btn-selector">All categories</a>
                                    <ul>
                                        <li class="active"><span>All categories</span></li>
                                        <li><span>Art</span></li>
                                        <li><span>Music</span></li>
                                        <li><span>Domain Names</span></li>
                                        <li><span>Virtual World</span></li>
                                        <li><span>Trading Cards</span></li>
                                        <li><span>Collectibles</span></li>
                                        <li><span>Sports</span></li>
                                        <li><span>Utility</span></li>
                                    </ul>
                                </div>

                                <div id="buy_category" class="dropdown">
                                    <a href="#" class="btn-selector">Buy Now</a>
                                    <ul>
                                        <li class="active"><span>Buy Now</span></li>
                                        <li><span>On Auction</span></li>
                                        <li><span>Has Offers</span></li>
                                    </ul>
                                </div>

                                <div id="items_type" class="dropdown">
                                    <a href="#" class="btn-selector">All Items</a>
                                    <ul>
                                        <li class="active"><span>All Items</span></li>
                                        <li><span>Single Items</span></li>
                                        <li><span>Bundles</span></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        @foreach ($products as $product)
                            <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="nft__item nft_type_music">
                                    <div class="nft__item_wrap">
                                        <a href="{{ route('produk.show', $product->slug) }}">
                                            <img src="{{ asset($product->image) }}" class="lazy nft__item_preview"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="nft__item_info">
                                        <a href="item-details.html">
                                            <h4>{{ $product->title }}</h4>
                                        </a>
                                        <div class="nft__item_price">
                                            Rp {{ $product->price }}<span>{{ $product->stock }} Stok</span>
                                        </div>
                                        <div class="nft__item_action">
                                            <a href="{{ route('produk.show', $product->slug) }}">Lihat detail</a>
                                        </div>
                                        <div class="nft__item_like">
                                            <i class="fa fa-heart"></i><span>{{ $product->brand }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-md-12 text-center">
                            <a href="#" id="loadmore" class="btn-main wow fadeInUp lead">Load more</a>
                        </div>
                    </div>
                </div>
            </section>

        </div>

    </div>
    @push('js')
    @endpush
@endsection
