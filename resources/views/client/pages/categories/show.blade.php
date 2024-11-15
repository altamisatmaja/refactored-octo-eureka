@extends('client.layouts.app')

@section('content')
    <div class="no-bottom no-top mt90" id="content">
        <div id="top"></div>
        <!-- section begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <div class="col-lg-12">
                <div class="text-center">
                    <h2>Laptop {{ $brands }}</h2>
                    <div class="small-border bg-color-2"></div>
                </div>
            </div>

            <!-- section begin -->
            <section aria-label="section">
                <div class="container">
                    <div class="row wow fadeIn">
                        @if($products->isEmpty())
                            <div class="col-md-12 text-center">
                                <p>Data produk tidak tersedia.</p>
                            </div>
                        @else
                            @foreach ($products as $product)
                                <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                    <div class="nft__item nft_type_music">
                                        <div class="nft__item_wrap">
                                            <a href="{{ route('produk.show', $product->slug) }}">
                                                <img src="{{ asset($product->image) }}" class="lazy nft__item_preview" alt="">
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
                        @endif

                    </div>
                </div>
            </section>

        </div>

    </div>
    @push('js')
    @endpush
@endsection
