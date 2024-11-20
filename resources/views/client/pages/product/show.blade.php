@extends('client.layouts.app')

@section('content')
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>


        <section aria-label="section" class="mt90 sm-mt-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <img src="{{ asset($product->image) }}" class="img-fluid img-rounded mb-sm-30" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="item_info">
                            Sisa stok {{ $product->stock }}
                            <h2>{{ $product->title }}</h2>
                            <div class="item_info_views">
                                <div class="nft-item-price">
                                    <span>Rp {{ $product->price }}</span>
                                </div>
                            </div>
                        </div>
                        <p>{{ $product->description }}</p>

                        <div class="de_tab tab_simple">

                            <ul class="de_nav">
                                <li class="active"><span>Details</span></li>
                            </ul>

                            <div class="de_tab_content">
                                <div class="tab-1">
                                    <div class="row gx-2">
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <a href="#" class="nft_attr">
                                                <h5>Brand</h5>
                                                <h4>{{ $product->brand }}</h4>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <a href="#" class="nft_attr">
                                                <h5>RAM</h5>
                                                <h4>{{ $product->ram }} GB</h4>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <a href="#" class="nft_attr">
                                                <h5>Tipe penyimpanan</h5>
                                                <h4>{{ $product->type_storage }}</h4>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <a href="#" class="nft_attr">
                                                <h5>Prosesor</h5>
                                                <h4>{{ $product->processor }}</h4>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <a href="#" class="nft_attr">
                                                <h5>Ukuran Layar</h5>
                                                <h4>{{ $product->screen_size }}</h4>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <a href="#" class="nft_attr">
                                                <h5>Warna</h5>
                                                <h4>{{ $product->color }}</h4>
                                            </a>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <a href="#" class="nft_attr">
                                                <h5>OS</h5>
                                                <h4>{{ $product->os }}</h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="spacer-30"></div>
                                </div>

                            </div>

                            <div class="spacer-10"></div>


                        </div>

                    </div>
                </div>
            </div>
    </div>
    </section>


    </div>
    <!-- content close -->

    <!-- buy now -->
    <div class="modal fade" id="buy_now" tabindex="-1" aria-labelledby="buy_now" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered de-modal">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="p-3 form-border">
                        <h3>Checkout</h3>
                        You are about to purchase a <b>AnimeSailorClub #304</b> from <b>Monica Lucas</b>
                        <div class="spacer-single"></div>
                        <h6>Enter quantity. <span class="id-color-2">10 available</span></h6>
                        <input type="text" name="buy_now_qty" id="buy_now_qty" class="form-control" value="1" />
                        <div class="spacer-single"></div>
                        <div class="de-flex">
                            <div>Your balance</div>
                            <div><b>10.67856 ETH</b></div>
                        </div>
                        <div class="de-flex">
                            <div>Service fee 2.5%</div>
                            <div><b>0.00325 ETH</b></div>
                        </div>
                        <div class="de-flex">
                            <div>You will pay</div>
                            <div><b>0.013325 ETH</b></div>
                        </div>
                        <div class="spacer-single"></div>
                        <a href="wallet.html" target="_blank" class="btn-main btn-fullwidth">Add funds</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- place a bid -->
    <div class="modal fade" id="place_a_bid" tabindex="-1" aria-labelledby="place_a_bid" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered de-modal">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="p-3 form-border">
                        <h3>Place a Bid</h3>
                        You are about to place a bid for <b>AnimeSailorClub #304</b> from <b>Monica Lucas</b>
                        <div class="spacer-single"></div>
                        <h6>Your bid (ETH)</h6>
                        <input type="text" name="bid_value" id="bid_value" class="form-control"
                            placeholder="Enter bid" />
                        <div class="spacer-single"></div>
                        <h6>Enter quantity. <span class="id-color-2">10 available</span></h6>
                        <input type="text" name="bid_qty" id="bid_qty" class="form-control" value="1" />
                        <div class="spacer-single"></div>
                        <div class="de-flex">
                            <div>Your bidding balance</div>
                            <div><b>0.013325 ETH</b></div>
                        </div>
                        <div class="de-flex">
                            <div>Your balance</div>
                            <div><b>10.67856 ETH</b></div>
                        </div>
                        <div class="de-flex">
                            <div>Service fee 2.5%</div>
                            <div><b>0.00325 ETH</b></div>
                        </div>
                        <div class="de-flex">
                            <div>You will pay</div>
                            <div><b>0.013325 ETH</b></div>
                        </div>
                        <div class="spacer-single"></div>
                        <a href="wallet.html" target="_blank" class="btn-main btn-fullwidth">Place a bid</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')
    @endpush
@endsection
