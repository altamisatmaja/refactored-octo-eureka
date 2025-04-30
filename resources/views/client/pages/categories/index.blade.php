@extends('client.layouts.app')

@section('content')
    <div class="no-bottom no-top mt90" id="content">
        <div id="top"></div>
        <section id="section-category" class="no-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2>Jenis Laptop</h2>
                            <div class="small-border bg-color-2"></div>
                        </div>
                    </div>
                    @foreach ($laptopBrands as $index => $brand)
                        <div class="col-md-2 col-sm-4 col-6 mb-sm-30 wow fadeInRight item-spacing"
                            data-wow-delay="{{ 0.1 * ($index + 1) }}s">
                            <a href="{{ route('categories', strtolower($brand['name'])) }}"
                                class="icon-box style-2 rounded">
                                <img src="{{ asset($brand['icon']) }}" style="height: 30px" alt="">
                                <span>{{ $brand['name'] }}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
    @push('js')
    @endpush
@endsection
