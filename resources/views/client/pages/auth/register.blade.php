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
                            <h1>Daftar</h1>
                            <p>Sistem rekomendasi laptop</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->


        <section aria-label="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <h3>Belum punya akun? Daftar sekarang.</h3>
                        <p>Sistem rekomendasi laptop yang akan membantu kamu untuk mencari laptop yang cocok buat kamu!</p>

                        <div class="spacer-10"></div>

                        <form name="contactForm" id='contact_form' class="form-border" method="post"
                            action='{{ route('register') }}'>
                            @csrf

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Nama</label>
                                        <input type='text' name='name' id='name' class="form-control"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Alamat email</label>
                                        <input type='text' name='email' id='email' class="form-control"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Password</label>
                                        <input type='password' name='password' id='password' class="form-control">
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Ulangi Password</label>
                                        <input type='password' name='password_confirmation' id='re-password'
                                            class="form-control">
                                        @error('password_confirmation')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div id='submit' class="pull-left">
                                        <input type='submit' value='Daftar Sekarang' class="btn btn-main color-2">
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
