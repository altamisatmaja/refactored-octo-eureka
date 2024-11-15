<footer class="footer-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-1">
                <div class="widget">
                    <h5>Jenis Laptop</h5>
                    @php
                        $laptopBrands = [
                            'Asus',
                            'Acer',
                            'HP',
                            'Dell',
                            'Lenovo',
                            'Apple',
                            'MSI',
                            'Samsung',
                            'Toshiba',
                            'Razer',
                            'Sony',
                            'Huawei',
                            'Microsoft',
                            'Gigabyte',
                            'Alienware',
                            'LG',
                            'Fujitsu',
                            'Panasonic',
                        ];
                    @endphp
                    <ul>
                        @foreach (array_slice($laptopBrands, 0, 5) as $laptop)
                            <li>
                                <a href="{{ route('categories', strtolower($laptop)) }}">{{ $laptop }}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-1">
                <div class="widget">
                    <h5>Bantuan</h5>
                    <ul>
                        <li><a href="/rekomendasi">Cari rekomendasi</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="de-flex">
                        <div class="de-flex-col">
                            <a href="/">
                                <h2 class="text-black">Laptopland</h2>
                                <p class="copy">&copy;
                                    Copyright 2022 - Laptopland</p>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
