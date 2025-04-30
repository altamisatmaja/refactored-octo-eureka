<footer class="footer-light">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Jenis Laptop Section -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h5>Jenis Laptop</h5>
                    @php
                        $laptopBrands = ['Asus', 'Acer', 'HP', 'Dell', 'Lenovo', 'Toshiba'];
                    @endphp
                    <ul>
                        @foreach (array_slice($laptopBrands, 0, 6) as $laptop)
                            <li>
                                <a href="{{ route('categories', strtolower($laptop)) }}">{{ $laptop }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- Cari Rekomendasi Section -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <a href="/rekomendasi">
                        <h5>Cari Rekomendasi</h5>
                    </a>
                </div>
            </div>

            <!-- Butuh Bantuan Section -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="widget">
                    <h5>Butuh bantuan?</h5>
                    <p>Jika ada saran atau keluhan, hubungi kami saja!</p>
                    <form action="blank.php" class="row form-dark" id="form_subscribe" method="post"
                        name="form_subscribe">
                        <div class="col text-center">
                            <input class="form-control" id="txt_subscribe" name="txt_subscribe"
                                placeholder="e.g email@exaple.com" type="text" />
                            <a href="#" id="btn-subscribe"><i class="arrow_right bg-color-secondary"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                    <div class="spacer-10"></div>
                    <small>Tenang, email anda aman!</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Subfooter Section (Centered) -->
    <div class="subfooter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="text-center">
                    <div class="de-flex-col">
                        <a href="/">
                            <h2 class="text-black">Laptopland</h2>
                            <p class="copy">&copy; Copyright 2024 - Laptopland</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
