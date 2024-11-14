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
                            <p>Siap untuk melakukan penjualan</p>
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
                        <p>Jual beli laptop dengan bantuan sistem rekomendasi untuk mempermudah pengambilan keputusan
                            membeli</p>

                        <div class="spacer-10"></div>

                        <form name="contactForm" id='contact_form' class="form-border" method="post" action='blank.php'>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Nama:</label>
                                        <input type='text' name='name' id='name' class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Email Address:</label>
                                        <input type='text' name='email' id='email' class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Username:</label>
                                        <input type='text' name='username' id='username' class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Telepon:</label>
                                        <input type='text' name='phone' id='phone' class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Password:</label>
                                        <input type='text' name='password' id='password' class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="field-set">
                                        <label>Ulangi Password:</label>
                                        <input type='text' name='re-password' id='re-password' class="form-control">
                                    </div>
                                </div>


                                <div class="col-md-12">

                                    <div id='submit' class="pull-left">
                                        <input type='submit' id='send_message' value='Daftar Sekarang'
                                            class="btn btn-main color-2">
                                    </div>

                                    <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                    <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.
                                    </div>
                                    <div class="clearfix"></div>

                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>


    </div>
    @push('js')
    @endpush
@endsection
