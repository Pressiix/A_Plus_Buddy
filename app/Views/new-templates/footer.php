</div>

<!--footer starts from here-->
<footer class="footer">
<div class="container bottom_border">
            <div class="row">
                <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Contact Us</h5>
                    <!--headin5_amrc-->
                    <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
                    <p><i class="fa fa-phone"></i> +91-9999878398 </p>
                    <p><i class="fa fa fa-envelope"></i> info@example.com </p>
                </div>


                <div class=" col-sm-4 col-md  col-6 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                    <!--headin5_amrc-->
                    <ul class="footer_ul_amrc">
                        <li><a href="#">Image Rectoucing</a></li>
                        <li><a href="#">Clipping Path</a></li>
                        <li><a href="#">Hollow Man Montage</a></li>
                        <li><a href="#">Ebay & Amazon</a></li>
                        <li><a href="#">Hair Masking/Clipping</a></li>
                        <li><a href="#">Image Cropping</a></li>
                    </ul>
                    <!--footer_ul_amrc ends here-->
                </div>


                <div class=" col-sm-4 col-md  col-6 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                    <!--headin5_amrc-->
                    <ul class="footer_ul_amrc">
                        <li><a href="#">Remove Background</a></li>
                        <li><a href="#">Shadows & Mirror Reflection</a></li>
                        <li><a href="#">Logo Design</a></li>
                        <li><a href="#">Vectorization</a></li>
                        <li><a href="#">Hair Masking/Clipping</a></li>
                        <li><a href="#">Image Cropping</a></li>
                    </ul>
                    <!--footer_ul_amrc ends here-->
                </div>


                <div class=" col-sm-4 col-md  col-12 col">
                    <h5 class="headin5_amrc col_white_amrc pt2 text-center">Follow us</h5>
                    <!--headin5_amrc ends here-->

                    <ul class="social_footer_ul">
                        <li><a href="#"><i class="fa fa-lg fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-lg fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
                    </ul>
                    <!--footer_ul2_amrc ends here-->
                </div>
            </div>
        </div>
</footer>
<footer class="footer last-footer">
   <div class="container">
        <p class="text-center">Copyright @<?= date('Y') ?> | <?= config('Params')->AppName ?></p>
    </div>
</footer>

<!-- Scripts -->

<script src="<?= base_url() ?>/assets/js/isotope.min.js?v=<?= config('Params')->AssetVersion ?>"></script>
    <script src="<?= base_url() ?>/assets/js/owl-carousel.js?v=<?= config('Params')->AssetVersion ?>"></script>
    <script src="<?= base_url() ?>/assets/js/lightbox.js?v=<?= config('Params')->AssetVersion ?>"></script>
    <script src="<?= base_url() ?>/assets/js/tabs.js?v=<?= config('Params')->AssetVersion ?>"></script>
    <script src="<?= base_url() ?>/assets/js/video.js?v=<?= config('Params')->AssetVersion ?>"></script>
    <script src="<?= base_url() ?>/assets/js/slick-slider.js?v=<?= config('Params')->AssetVersion ?>"></script>
    <script src="<?= base_url() ?>/assets/js/custom.js?v=<?= config('Params')->AssetVersion ?>"></script>
<script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    $(document).ready(function () {

        $('#province').change(function () {
            var province_id = $(this).val();
            // $('#sub_district').hide();
            // $('#sub_district').empty();
            // $('#district').hide();
            $('#province-form').removeClass('col-md-12');
            $('#province-form').addClass('col-md-6');
            $('#district').empty();
            if (province_id) {
                let dropdown = $('#district');

                dropdown.empty();

                dropdown.append('<option value="">กรุณาเลือกอำเภอ</option>');
                dropdown.prop('selectedIndex', 0);

                const url = '<?= base_url() ?>/service/district-data?province_id=' + province_id;
                console.log(url)
                // Populate dropdown with list of provinces
                $.getJSON(url, function (data) {
                    if (!jQuery.isEmptyObject(data)) {
                        dropdown.show();
                        $.each(data, function (key, entry) {
                            dropdown.append($('<option></option>').attr({
                                value: entry.id,
                                province: entry.province_id
                            }).text(entry.name_th));
                        })
                    } else {
                        dropdown.hide();
                    }
                });
            }
        })

    });
</script>
</body>

</html>