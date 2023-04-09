@extends('web-site.base.main')

@section('content')

<div class="wrapper">
    <!-- ============================================================= TOP NAVIGATION ============================================================= -->

    <!-- ============================================================= HEADER : END ============================================================= -->

    <!-- ========================================= MAIN ========================================= -->
    <main id="contact-us" class="inner-bottom-md pb-0">

        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <section class="section leave-a-message">
                        <h2 class="bordered">Contact Us</h2>
                        <p class="text-center"><u><b>Massage to Kiblah (Pvt) Ltd</b></u></p>
                        <form id="contact-form" class="contact-form cf-style-1 inner-top-xs" method="post">
                            <div class="row field-row">
                                <div class="col-xs-12 col-sm-6">
                                    <label>Your Name*</label>
                                    <input class="le-input">
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label>Your Email*</label>
                                    <input class="le-input">
                                </div>
                            </div><!-- /.field-row -->

                            <div class="field-row">
                                <label>Subject</label>
                                <input type="text" class="le-input">
                            </div><!-- /.field-row -->

                            <div class="field-row">
                                <label>Your Message</label>
                                <textarea rows="8" class="le-input"></textarea>
                            </div><!-- /.field-row -->

                            <div class="buttons-holder">
                                <button type="submit" class="le-button huge">Send Message</button>
                            </div><!-- /.buttons-holder -->
                        </form><!-- /.contact-form -->
                    </section><!-- /.leave-a-message -->
                </div><!-- /.col -->

                <div class="col-md-4">
                    <section class="our-store section inner-left-xs">
                        <h2 class="bordered">Head Office</h2>
                        <address style="line-height: 24px;">
                            Kiblah (Pvt) Ltd,<br />
                            187/A, Kalyana Road,<br />
                            Sainthamaruthu-06,<br />
                            Kalmunai.<br />
                            Sri Lanka<br />

                            Hotline/Fax : +9467 222 9998<br />
                            web : www.kiblah.lk<br />
                            email : info@kiblah.lk
                        </address>


                        <h2 class="bordered">Branch Office</h2>
                        <table class="contactTable mb-2">
                            <tr>
                                <td>
                                    <p class="mb-0">1. Sainthamaruthu :</p>
                                </td>
                                <td>
                                    <p class="mb-0">+9467 431 4343</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-0">2. Sammanthurai :</p>
                                </td>
                                <td>
                                    <p class="mb-0">+9467 432 4343</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-0">3. Akkaraipattu :</p>
                                </td>
                                <td>
                                    <p class="mb-0">+9467 431 5353</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-0">4. Pottuvil :</p>
                                </td>
                                <td>
                                    <p class="mb-0"> +9467 312 9998</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-0">5. Colombo :</p>
                                </td>
                                <td></td>
                            </tr>
                        </table>

            <br/>
                        <h2 class="bordered">Managing Director</h2>
                        <p class="mb-1">Mr.M.Y.M.Jameel
                        </p>

                        <table class="contactTable mb-2">
                            <tr>
                                <td>
                                    <p class="mb-0">Mob :</p>
                                </td>
                                <td>
                                    <p class="mb-0">+9475 929 9998</p>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <p class="mb-0">+9471 929 9998</p>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <p class="mb-0">+9476 792 9998</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-0">email :</p>
                                </td>
                                <td>
                                    <p class="mb-0"> director@kiblah.lk</p>
                                </td>
                            </tr>

                        </table>

                    </section><!-- /.our-store -->
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </main>
    <!-- ========================================= MAIN : END ========================================= -->

    <!-- ============================================================= FOOTER : END ============================================================= -->
</div><!-- /.wrapper -->



@endsection