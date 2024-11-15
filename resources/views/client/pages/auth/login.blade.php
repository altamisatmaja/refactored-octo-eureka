@extends('client.layouts.app')

@section('content')
    <div class="no-bottom no-top" id="content">
        <div id="top"></div>

        <section class="full-height relative no-top no-bottom vertical-center"
            data-bgimage="url({{ asset('images/background/subheader.jpg') }}) top" data-stellar-background-ratio=".5">
            <div class="overlay-gradient t50">
                <div class="center-y relative">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5 text-light wow fadeInRight" data-wow-delay=".5s">
                                <div class="spacer-10"></div>
                                <h1>Sistem rekomendasi laptop</h1>
                                <p class="lead">Sistem rekomendasi laptop yang akan membantu kamu untuk mencari laptop
                                    yang cocok buat kamu!</p>
                            </div>

                            <div class="col-lg-4 offset-lg-2 wow fadeIn" data-wow-delay=".5s">
                                <div class="box-rounded padding40" data-bgcolor="#ffffff">
                                    <h3 class="mb10">Masuk</h3>
                                    <p>Masuk untuk mencoba fitur rekomendasi. Belum punya akun? <a href="/daftar">daftar
                                            disini<span></span></a>.
                                    </p>
                                    <form name="contactForm" id='contact_form' class="form-border" method="post"
                                        action='blank.php'>

                                        <div class="field-set">
                                            <input type='text' name='email' id='email' class="form-control"
                                                placeholder="username">
                                        </div>

                                        <div class="field-set">
                                            <input type='password' name='password' id='password' class="form-control"
                                                placeholder="password">
                                        </div>

                                        <div class="field-set">
                                            <input type='submit' id='send_message' value='Masuk'
                                                class="btn btn-main btn-fullwidth color-2">
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="spacer-single"></div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    @push('js')
    @endpush
@endsection
