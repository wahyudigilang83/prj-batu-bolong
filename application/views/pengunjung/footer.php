<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4 ">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="<?= base_url("pengunjung/c_pengunjung/index/") ?>">
                                <img src="<?= base_url('template_pengunjung/img/Logo_berwarna.png') ?>" alt="">
                            </a>
                        </div>
                        <p>Jl. Pantai Batu Bolong, Canggu, Kec. Kuta Utara, <br> Kabupaten Badung, Bali <br>
                            <a href="#">0362-6969696</a> <br>
                            <a href="#">batubolongteam@gmail.com</a>
                        </p>


                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Our Links
                        </h3>
                        <ul class="links">
                            <li><a href="<?= base_url("pengunjung/c_pengunjung/index/") ?>">Home</a></li>
                            <li><a href="<?= base_url("pengunjung/c_pengunjung/stand/") ?>">Stand</a></li>
                            <li><a href="<?= base_url("pengunjung/c_pengunjung/ticket/") ?>"> Tiket</a></li>
                            <li><a href="<?= base_url("pengunjung/c_pengunjung/tunai/") ?>"> Top Up</a></li>
                            <li><a href="<?= base_url("pengunjung/c_pengunjung/history/") ?>"> History</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Our Destinations
                        </h3>
                        <ul class="links double_links">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15777.347251006091!2d115.12138131596457!3d-8.659482100442547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2478621f5b693%3A0xa157bd1e893b4293!2sPantai%20Batu%20Bolong!5e0!3m2!1sid!2sid!4v1673853567557!5m2!1sid!2sid" width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Instagram
                        </h3>
                        <div class="instagram_feed">
                            <div class="single_insta">
                                <a href="#">
                                    <img src="<?= base_url('template_pengunjung/img/instagram/1.png') ?>" alt="">
                                </a>
                            </div>
                            <div class="single_insta">
                                <a href="#">
                                    <img src="<?= base_url('template_pengunjung/img/instagram/2.png') ?>" alt="">
                                </a>
                            </div>
                            <div class="single_insta">
                                <a href="#">
                                    <img src="<?= base_url('template_pengunjung/img/instagram/3.png') ?>" alt="">
                                </a>
                            </div>
                            <div class="single_insta">
                                <a href="#">
                                    <img src="<?= base_url('template_pengunjung/img/instagram/4.png') ?>" alt="">
                                </a>
                            </div>
                            <div class="single_insta">
                                <a href="#">
                                    <img src="<?= base_url('template_pengunjung/img/instagram/5.png') ?>" alt="">
                                </a>
                            </div>
                            <div class="single_insta">
                                <a href="#">
                                    <img src="<?= base_url('template_pengunjung/img/instagram/6.png') ?>" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | Para Pejuang Senja <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Batu Bolong Team</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Modal -->
<div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="serch_form">
                <input type="text" placeholder="Search">
                <button type="submit">search</button>
            </div>
        </div>
    </div>
</div>
<!-- link that opens popup -->
<!--     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->
<!-- JS here -->
<script>
    function hitungJumlah() {
        var x = document.getElementById("inputJumlah").value;
        var y = document.getElementById("inputHarga").value;
        if (isNaN(x)) {
            document.getElementById("inputJumlah").innerHTML = "Masukkan bilangan yang valid!";
            return;
        }
        // Penanganan input yang kosong
        if (y === "") {
            y = y || 10000;
        }
        var z = (parseInt(x) * parseInt(y)).toLocaleString();
        document.getElementById("Total").innerHTML = z;
    }
    document.getElementById("inputHarga").addEventListener("input", hitungJumlah);
    document.getElementById("inputJumlah").addEventListener("input", hitungJumlah);
</script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<script src="<?= base_url('template_pengunjung/js/vendor/modernizr-3.5.0.min.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/vendor/jquery-1.12.4.min.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/popper.min.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/isotope.pkgd.min.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/ajax-form.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/waypoints.min.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/jquery.counterup.min.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/imagesloaded.pkgd.min.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/scrollIt.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/jquery.scrollUp.min.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/wow.min.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/nice-select.min.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/jquery.slicknav.min.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/plugins.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/gijgo.min.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/slick.min.js') ?>"></script>




<!--contact js-->
<script src="<?= base_url('template_pengunjung/js/contact.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/jquery.ajaxchimp.min.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/jquery.form.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/jquery.validate.min.js') ?>"></script>
<script src="<?= base_url('template_pengunjung/js/mail-script.js') ?>"></script>


<script src="<?= base_url('template_pengunjung/js/main.js') ?>"></script>
<script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }
    });
</script>
</body>

</html>