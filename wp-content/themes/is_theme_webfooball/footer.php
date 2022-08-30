<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Is_theme_webfooball
 */
global $ls_options;

?>
<footer class="footer">
            <div class="container container-width">
                <div class="row">
                    <div class="col-xl-4 footer-border">
                        <div class="footer-logo">
                            <img src="<?php echo $ls_options['logo-footer']['url']; ?>" alt="" />
                        </div>
                        <div class="footer-text">
                            Giấy phép: Số 29/GP-TTĐT của Bộ Thông tin - Truyền thông ngày 11/02/2010 và GP số 53/GP-STTTT của Sở Thông tin và Truyền thông TP. Hồ Chí Minh cấp ngày 4/8/2021.<br>
                            Chịu trách nhiệm nội dung: Nhà báo, TS. Võ Danh Hải.<br>
                            Bongda.com.vn giữ bản quyền nội dung trên website này. Cấm sao chép dưới mọi hình thức nếu không có sự chấp thuận bằng văn bản.<br>
                            Vận hành và phát triển bởi Công ty Cổ phần Yêu Thể Thao.
                        </div>
                    </div>
                    <div class="col-xl-4 footer-contact-border">
                        <h3 class="footer-heading">liên hệ:</h3>
                        <ul class="footer-list">
                            <li class="footer-list-item">
                                <div class="footer-list-item__icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <span>Địa chỉ: </span>  <?php echo $ls_options['addft']; ?>
                            </li>
                            <li class="footer-list-item">
                                <div class="footer-list-item__icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <span>Điện thoại:</span>  <?php echo $ls_options['hotline']; ?></span>
                            </li>
                            <li class="footer-list-item">
                                <div class="footer-list-item__icon">
                                    <i class="fa-solid fa-fax"></i>
                                </div>
                                <span>Fax:</span>  <?php echo $ls_options['hotline-1']; ?>
                            </li>
                            <li class="footer-list-item">
                                <div class="footer-list-item__icon">
                                    <i class="fa-solid fa-circle-exclamation"></i>
                                </div>
                                <span>Quảng cáo:</span> <?php echo $ls_options['hotline-2']; ?>.
                            </li>
                            <li class="footer-list-item">
                                <div class="footer-list-item__icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <span>Liên hệ quảng cáo:</span>  <?php echo $ls_options['emailft-1']; ?>
                            </li>
                            <li class="footer-list-item">
                                <div class="footer-list-item__icon">
                                    <i class="fa-solid fa-paper-plane"></i>
                                </div>
                                <span>Tòa soạn & hỗ trợ:</span>  <?php echo $ls_options['hotline-3']; ?>
                            </li>
                            <li class="footer-list-item">
                                <div class="footer-list-item__icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <span>Email:</span> <?php echo $ls_options['emailft-2']; ?>
                            </li>
                        </ul>
                        <div class="footer-social">
                            <ul class="footer-social-list">
                                <li class="footer-social-list__item">
                                    <i class="fa-solid fa-user"></i>
                                </li>
                                <li class="footer-social-list__item">
                                    <i class="fa-solid fa-cloud-arrow-down"></i>
                                </li>
                                <li class="footer-social-list__item">
                                    <i class="fa-brands fa-youtube"></i>
                                </li>
                                <li class="footer-social-list__item">
                                    <i class="fa-brands fa-google-plus-g"></i>
                                </li>
                                <li class="footer-social-list__item">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </li>
                                <li class="footer-social-list__item">
                                    <i class="fa-solid fa-rss"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="footer-download">
                            <h3 class="footer-download-heading">
                                DOWNLOAD ỨNG DỤNG TRÊN MOBILE:
                            </h3>
                            <div class="footer-download-app">
                                <div class="footer-download-app__apple">
                                    <i class="fa-brands fa-apple"></i>
                                </div>
                                <div class="footer-download-app__android">
                                    <a href="https://play.google.com/store/apps/details?id=com.tamkhoatech.bongda">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-android2" viewBox="0 0 16 16">
                                            <path d="m10.213 1.471.691-1.26c.046-.083.03-.147-.048-.192-.085-.038-.15-.019-.195.058l-.7 1.27A4.832 4.832 0 0 0 8.005.941c-.688 0-1.34.135-1.956.404l-.7-1.27C5.303 0 5.239-.018 5.154.02c-.078.046-.094.11-.049.193l.691 1.259a4.25 4.25 0 0 0-1.673 1.476A3.697 3.697 0 0 0 3.5 5.02h9c0-.75-.208-1.44-.623-2.072a4.266 4.266 0 0 0-1.664-1.476ZM6.22 3.303a.367.367 0 0 1-.267.11.35.35 0 0 1-.263-.11.366.366 0 0 1-.107-.264.37.37 0 0 1 .107-.265.351.351 0 0 1 .263-.11c.103 0 .193.037.267.11a.36.36 0 0 1 .112.265.36.36 0 0 1-.112.264Zm4.101 0a.351.351 0 0 1-.262.11.366.366 0 0 1-.268-.11.358.358 0 0 1-.112-.264c0-.103.037-.191.112-.265a.367.367 0 0 1 .268-.11c.104 0 .19.037.262.11a.367.367 0 0 1 .107.265c0 .102-.035.19-.107.264ZM3.5 11.77c0 .294.104.544.311.75.208.204.46.307.76.307h.758l.01 2.182c0 .276.097.51.292.703a.961.961 0 0 0 .7.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h1.343v2.182c0 .276.097.51.292.703a.972.972 0 0 0 .71.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h.76c.291 0 .54-.103.749-.308.207-.205.311-.455.311-.75V5.365h-9v6.404Zm10.495-6.587a.983.983 0 0 0-.702.278.91.91 0 0 0-.293.685v4.063c0 .271.098.501.293.69a.97.97 0 0 0 .702.284c.28 0 .517-.095.712-.284a.924.924 0 0 0 .293-.69V6.146a.91.91 0 0 0-.293-.685.995.995 0 0 0-.712-.278Zm-12.702.283a.985.985 0 0 1 .712-.283c.273 0 .507.094.702.283a.913.913 0 0 1 .293.68v4.063a.932.932 0 0 1-.288.69.97.97 0 0 1-.707.284.986.986 0 0 1-.712-.284.924.924 0 0 1-.293-.69V6.146c0-.264.098-.491.293-.68Z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <p class="footer-download-text">
                                Bản quyền và phát triển bởi Công ty Cổ phần Yêu Thể Thao
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

<?php wp_footer(); ?>

</body>
</html>
