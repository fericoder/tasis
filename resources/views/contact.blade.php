@extends('master')

@section('content')


        <section class="breadcrumb_area">
            <img class="breadcrumb_shap" src="img/breadcrumb/banner_bg.png" alt="">
            <div class="container">
                <div class="breadcrumb_content text-center">
                    <h1 class=" f_700 f_size_50 w_color l_height50 mb_20">تماس باما</h1>
                    <p class="f_400 w_color f_size_16 l_height26">کاربر گرامی برای تماس می توانید در ساعات کاری (8 تا 17) از طریق شماره تماس های ذکر شده با ما تماس بگرید.</p>
                </div>
            </div>
        </section>

        <section class="contact_info_area sec_pad bg_color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 pr-0">
                        <div class="contact_info_item">
                            <h6 class=" f_size_20 t_color3 f_500 mb_20">دفتر مرکزی</h6>
                        <p class="f_400 f_size_15 f-byekan">تهران، خیابان ولیعصر(عج)، بالاتر از میدان ونک،خیابان خلیل زاده، پلاک 20 </p>
                        </div>
                        <div class="contact_info_item">
                            <h6 class=" f_size_20 t_color3 f_500 mb_20">اطلاعات تماس</h6>
                            <p class="f_400 f_size_15"><span class="f_400 t_color3">تلفن:</span> <a href="tel:3024437488" class="f-byekan">85910</a></p>
                            <p class="f_400 f_size_15"><span class="f_400 t_color3">نمابر:</span> <a href="tel:3024437488" class="f-byekan">88207072</a></p>
                            <p class="f_400 f_size_15"><span class="f_400 t_color3">ایمیل:</span> <a href="mailto:info@faradis.com">info@faradis.com</a></p>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-1">
                        <div class="contact_form">
                            <form action="http://droitthemes.com/html/saasland/saasland-rtl/contact_process.php" class="contact_form_box" method="post" id="contactForm" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group text_box">
                                            <input type="text" id="name" name="name" placeholder="نام و نام خانوادگی">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group text_box">
                                            <input type="text" name="email" id="email" placeholder="ایمیل">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group text_box">
                                            <input type="text" id="subject" name="subject" placeholder="موضوع">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group text_box">
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="لطفا پیام خود را یادداشت فرمایید"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn_three">ارسال پیام</button>
                            </form>
                            <div id="success">Your message succesfully sent!</div>
                            <div id="error">Opps! There is something wrong. Please try again</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mapbox2">
            <div id="mapBox" class="row m0" data-lat="40.701083" data-lon="-74.1522848" data-zoom="10" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-marker="img/map.png" data-mlat="40.701083" data-mlon="-74.1522848">
            </div>
        </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/propper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/wow/wow.min.js"></script>
    <script src="vendors/sckroller/jquery.parallax-scroll.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope-min.js"></script>
    <script src="vendors/magnify-pop/jquery.magnific-popup.min.js"></script>
    <script src="vendors/scroll/jquery.mCustomScrollbar.concat.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCO2fJ8DfdyKRIvmxp96MAG6BeNiCX27lQ&amp;callback=initMap"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- contact js -->
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/main-rtl.js"></script>


@endsection()
