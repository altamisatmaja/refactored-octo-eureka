@extends('client.layouts.app')

@section('content')


    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <!-- section begin -->
        <section id="subheader" class="text-light" data-bgimage="url({{ asset('images/background/subheader.jpg') }}) top">
            <div class="center-y relative text-center">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <h1>Rekomendasi</h1>
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
                    @if (!isset($products['data']) || empty($products['data']))
                        <section aria-label="section">
                            <div class="container">
                                <div class="row wow fadeIn">
                                    <div class="col-lg-7 offset-lg-1">
                                        <form id="form-create-item" class="form-border" method="GET"
                                            action="{{ route('product.recommendation') }}">
                                            <div class="field-set">

                                                <h5>Budget</h5>
                                                <input type="number" name="budget" id="item_title" class="form-control"
                                                    placeholder="e.g. '100000" />

                                                <div class="spacer-20"></div>
                                                <h5>Ram</h5>
                                                <input type="number" name="ram" id="item_title" class="form-control"
                                                    placeholder="e.g. '8" />

                                                <div class="spacer-20"></div>

                                                <h5>Tipe Penyimpanan</h5>
                                                <select name="storage_type" class="form-control">
                                                    <option value="" disabled selected>Pilih penyimpanan</option>
                                                    <option value="SSD">SSD</option>
                                                    <option value="HDD">HDD</option>
                                                </select>

                                                <div class="spacer-20"></div>
                                                <h5>Penyimpanan</h5>
                                                <input type="number" name="storage" id="item_title" class="form-control"
                                                    placeholder="e.g. '512" />

                                                <div class="spacer-20"></div>
                                                <h5>Tipe Prosesor</h5>
                                                <select name="processor" class="form-control">
                                                    <option value="" disabled selected>Pilih tipe prosesor</option>
                                                    <option value="Apple M1">Apple M1</option>
                                                    <option value="Apple M2">Apple M2</option>
                                                    <option value="Intel Core i7">Intel Core i7</option>
                                                    <option value="Intel Core i5">Intel Core i5</option>
                                                    <option value="Intel Core i3">Intel Core i3</option>
                                                    <option value="AMD Ryzen 7">AMD Ryzen 7</option>
                                                    <option value="AMD Ryzen 5">AMD Ryzen 5</option>
                                                    <option value="AMD Ryzen 3">AMD Ryzen 3</option>
                                                </select>

                                                <div class="spacer-20"></div>
                                                <h5>Ukuran Layar</h5>
                                                <input type="number" name="screen_size" id="item_title"
                                                    class="form-control" placeholder="e.g. '14" />

                                                <div class="spacer-single"></div>

                                                <input type="submit" class="btn-main" value="Cari rekomendasi">

                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </section>
                    @else
                        @foreach ($products['data'] as $product)
                            <div class="d-item col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="nft__item nft_type_music">
                                    <div class="nft__item_wrap">
                                        <a href="{{ route('produk.show', $product['slug']) }}">
                                            <img src="{{ asset($product['image']) }}" class="lazy nft__item_preview"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="nft__item_info">
                                        <a href="item-details.html">
                                            <h4>{{ $product['title'] }}</h4>
                                        </a>
                                        <div class="nft__item_price">
                                            Rp {{ $product['price'] }}<span>{{ $product['stock'] }} Stok</span>
                                        </div>
                                        <div class="nft__item_action">
                                            <a href="{{ route('produk.show', $product['slug']) }}">Lihat detail</a>
                                        </div>
                                        <div class="nft__item_like">
                                            <i class="fa fa-heart"></i><span>{{ $product['brand'] }}</span>
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

    {{-- <div id="infoModal" class="modal fade" tabindex="-1" aria-labelledby="infoModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoModalLabel">Yuk, isi formulir untuk mendapatkan rekomendasi</h5>
                </div>
                <div class="modal-body">
                    <p>Untuk mendapatkan rekomendasi laptop, harap lengkapi formulir yang tersedia terlebih dahulu.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="closeModalBtn">Oke siap</button>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="infoFixed" class="info-fixed">
        <div class="info-content">
            <h5 class="modal-title" id="infoModalLabel">Yuk, isi formulir untuk mendapatkan rekomendasi</h5>
            <p>Untuk mendapatkan rekomendasi laptop, harap lengkapi formulir yang tersedia terlebih dahulu.</p>
            <button type="button" class="btn btn-primary" id="closeInfoBtn">Oke siap</button>
        </div>
    </div>




    @push('js')
        <script>
            $(document).ready(function() {

                @if (!Auth::check() || !isset($products['data']) || empty($products['data']))
                    $('#infoModal').modal('show');

                    document.addEventListener('DOMContentLoaded', function() {
                        const closeInfoBtn = document.getElementById('closeInfoBtn');
                        const infoFixed = document.getElementById('infoFixed');

                        closeInfoBtn.addEventListener('click', function() {
                            infoFixed.style.display = 'none';
                        });
                    });
                @endif
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const closeInfoBtn = document.getElementById('closeInfoBtn');
                const infoFixed = document.getElementById('infoFixed');

                closeInfoBtn.addEventListener('click', function() {
                    infoFixed.style.display = 'none';
                });
            });
        </script>


        <script>
            $(document).ready(function() {

                $('#closeModalBtn').click(function() {
                    $('#infoModal').modal('hide');
                });
            });
        </script>
    @endpush
@endsection
