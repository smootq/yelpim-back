<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="lef">
                        <a href="<?php echo lang_base_url(); ?>"><img src="<?php echo get_logo($this->general_settings); ?>" style="max-width: 100% !important" alt="logo"></a>
                        <p><?= $this->settings->about_footer; ?></p>
                        <?php $this->load->view('partials/_social_links', ['show_rss' => true]); ?>
                    </div>
                </div>

                <?php if (!empty($this->menu_links)): $link_group = 0; $i=0; $open = true; $close=false; ?>
                    <?php  foreach ($this->menu_links as $menu_link): ?>
                        
                        <?php 
                            if ($i % 4 == 0) {$link_group++; $open=true; }
                            if ($i % 4 == 3) {$close=true; }
                            if($open) : ?>
                            <div class="col-sm-3">
                                <?php if($link_group == 1) : ?>
                                    <h3><?php echo trans("footer_quick_links"); ?></h3>
                                    
                                <?php endif; ?>
                                <ul class="clean">                                
                        <?php $open = false; endif; ?>
                        <?php if($link_group == 1 && $i == 0) : ?>
                            <li><a href="<?php echo lang_base_url(); ?>"><?php echo trans("home"); ?></a></li>
                        <?php endif; ?>
                        <?php 
                            $item_link = generate_menu_item_url($menu_link);
                            if (!empty($menu_link->page_default_name)):
                                $item_link = generate_url($menu_link->page_default_name);
                            endif; ?>
                                <li><a href="<?= $item_link; ?>"><?php echo html_escape($menu_link->title); ?></a></li>
               

                        <?php if($close) echo '</ul></div>'; $close=false; ?>

                    <?php $i++; endforeach; ?>

                <?php else: ?>
                    <div class="col-sm-3">
                        <ul class="clean">
                            <li><a href="<?php echo lang_base_url(); ?>"><?php echo trans("home"); ?></a></li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </footer>


<!--<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-12 col-md-3 footer-widget">
                            <div class="row-custom">
                                <div class="footer-logo">
                                    <a href="<?php echo lang_base_url(); ?>"><img src="<?php echo get_logo($this->general_settings); ?>" alt="logo"></a>
                                </div>
                            </div>
                            <div class="row-custom">
                                <div class="footer-about">
                                    <?= $this->settings->about_footer; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 footer-widget">
                            <div class="nav-footer">
                                <div class="row-custom">
                                    <h4 class="footer-title"><?php echo trans("footer_quick_links"); ?></h4>
                                </div>
                                <div class="row-custom">
                                    <ul>
                                        <li><a href="<?php echo lang_base_url(); ?>"><?php echo trans("home"); ?></a></li>
                                        <?php if (!empty($this->menu_links)):
                                            foreach ($this->menu_links as $menu_link):
                                                if ($menu_link->location == 'quick_links'):
                                                    $item_link = generate_menu_item_url($menu_link);
                                                    if (!empty($menu_link->page_default_name)):
                                                        $item_link = generate_url($menu_link->page_default_name);
                                                    endif; ?>
                                                    <li><a href="<?= $item_link; ?>"><?php echo html_escape($menu_link->title); ?></a></li>
                                                <?php endif;
                                            endforeach;
                                        endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 footer-widget">
                            <div class="nav-footer">
                                <div class="row-custom">
                                    <h4 class="footer-title"><?php echo trans("footer_information"); ?></h4>
                                </div>
                                <div class="row-custom">
                                    <ul>
                                        <?php if (!empty($this->menu_links)):
                                            foreach ($this->menu_links as $menu_link):
                                                if ($menu_link->location == 'information'):
                                                    $item_link = generate_menu_item_url($menu_link);
                                                    if (!empty($menu_link->page_default_name)):
                                                        $item_link = generate_url($menu_link->page_default_name);
                                                    endif; ?>
                                                    <li><a href="<?= $item_link; ?>"><?php echo html_escape($menu_link->title); ?></a></li>
                                                <?php endif;
                                            endforeach;
                                        endif; ?>

                                        <?php if (!empty($this->menu_links)):
                                            foreach ($this->menu_links as $menu_link):
                                                if ($menu_link->location == 'information'):?>
                                                <?php endif;
                                            endforeach;
                                        endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3 footer-widget">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="footer-title"><?php echo trans("follow_us"); ?></h4>
                                    <div class="footer-social-links">
                         
                                        <?php $this->load->view('partials/_social_links', ['show_rss' => true]); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="newsletter">
                                        <h4 class="footer-title"><?php echo trans("newsletter"); ?></h4>
                                        <?php echo form_open('add-to-subscribers-post', ['id' => 'form_validate_newsletter']); ?>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="newsletter-inner">
                                                    <div class="d-table-cell">
                                                        <input type="email" class="form-control" name="email" placeholder="<?php echo trans("enter_email"); ?>" maxlength="250" required>
                                                    </div>
                                                    <div class="d-table-cell align-middle">
                                                        <button class="btn btn-default"><?php echo trans("subscribe"); ?></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php echo form_close(); ?>

                                        <div class="row">
                                            <div class="col-12">
                                                <div id="newsletter" class="m-t-5">
                                                    <?php if ($this->session->flashdata('news_error')):
                                                        echo '<span class="text-danger">' . $this->session->flashdata('news_error') . '</span>';
                                                    endif;
                                                    if ($this->session->flashdata('news_success')):
                                                        echo '<span class="text-success">' . $this->session->flashdata('news_success') . '</span>';
                                                    endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright">
                        <?php echo html_escape($this->settings->copyright); ?>
                    </div>
                    <div class="footer-payment-icons">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo base_url(); ?>assets/img/payment/visa.svg" alt="visa" class="lazyload">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo base_url(); ?>assets/img/payment/mastercard.svg" alt="mastercard" class="lazyload">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo base_url(); ?>assets/img/payment/maestro.svg" alt="maestro" class="lazyload">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo base_url(); ?>assets/img/payment/amex.svg" alt="amex" class="lazyload">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="<?php echo base_url(); ?>assets/img/payment/discover.svg" alt="discover" class="lazyload">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>-->



<?php if (!isset($_COOKIE["modesy_cookies_warning"]) && $this->settings->cookies_warning): ?>
    <div class="cookies-warning">
        <div class="text"><?php echo $this->settings->cookies_warning_text; ?></div>
        <a href="javascript:void(0)" onclick="hide_cookies_warning();" class="icon-cl"> <i class="icon-close"></i></a>
    </div>
<?php endif; ?>

<!-- Scroll Up Link -->
<a href="javascript:void(0)" class="scrollup"><i class="icon-arrow-up"></i></a>
<script src="<?= base_url(); ?>assets/js/jquery-3.5.1.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins-1.8.js"></script>

<script src="<?= base_url(); ?>assets/js/script-1.8.js"></script>


<!-- new --> 
<script src="<?= base_url(); ?>assets/js/jquery-1.11.0.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/24b7f338c4.js"></script>
<script src="<?= base_url(); ?>assets/js/owl.carousel.js"></script>
<script src="<?= base_url(); ?>assets/js/lightslider.js"></script>
        <script>
         $('#lightSlider').lightSlider({
            gallery: true,
            item: 1,
            loop:true,
            slideMargin: 0,
            thumbItem: 9
        });
    </script>
<script type="text/javascript">
        $(document).ready(function () {
            $('.slide1').owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                center: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                }
            })
        });
        $(document).ready(function () {
            $('.slide2').owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                center: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 3,
                    },
                }
            })
        });
        $(document).ready(function () {
            $('.slide3').owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 4,
                    },
                }
            })
        });
        $(document).ready(function () {
            $('.slide4').owlCarousel({
                loop: true,
                margin: 20,
                nav: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    922: {
                        items: 3,
                    },
                    1200: {
                        items: 6,
                    },
                }
            })
        });
    </script>
<!-- end new-->


<?php if (!empty($this->session->userdata('mds_send_email_data'))): ?>
<script>$(document).ready(function () {var data = JSON.parse(<?= json_encode($this->session->userdata("mds_send_email_data"));?>);if (data) {data[mds_config.csfr_token_name] = $.cookie(mds_config.csfr_cookie_name);data["sys_lang_id"] = mds_config.sys_lang_id;$.ajax({type: "POST", url: "<?= base_url(); ?>mds-send-email-post", data: data, success: function (response) {}});}});</script>
<?php endif;$this->session->unset_userdata('mds_send_email_data'); ?>
<?php if (check_cron_time() == true): ?>
<script>$.ajax({type: "POST", url: "<?= base_url(); ?>mds-run-internal-cron"});</script>
<?php endif; ?>
<script>$('<input>').attr({type: 'hidden', name: 'sys_lang_id', value: '<?= $this->selected_lang->id; ?>'}).appendTo('form[method="post"]');</script>
<script>
<?php if (!empty($index_categories)):foreach ($index_categories as $category):?>
if ($('#category_products_slider_<?= $category->id; ?>').length != 0) {
$('#category_products_slider_<?= $category->id; ?>').slick({autoplay: false, autoplaySpeed: 4900, infinite: true, speed: 200, swipeToSlide: true, rtl: mds_config.rtl, cssEase: 'linear', prevArrow: $('#category-products-slider-nav-<?= $category->id; ?> .prev'), nextArrow: $('#category-products-slider-nav-<?= $category->id; ?> .next'), slidesToShow: 5, slidesToScroll: 1, responsive: [{breakpoint: 992, settings: {slidesToShow: 4, slidesToScroll: 1}}, {breakpoint: 768, settings: {slidesToShow: 3, slidesToScroll: 1}}, {breakpoint: 576, settings: {slidesToShow: 2, slidesToScroll: 1}}]});}
<?php endforeach;
endif; ?>
<?php if ($this->general_settings->pwa_status == 1): ?>
if ('serviceWorker' in navigator) {window.addEventListener('load', function () {navigator.serviceWorker.register('<?= base_url();?>pwa-sw.js').then(function (registration) {}, function (err) {console.log('ServiceWorker registration failed: ', err);}).catch(function (err) {console.log(err);});});} else {console.log('service worker is not supported');}
<?php endif; ?>
</script>

<?php if (!empty($video) || !empty($audio)): ?>
<script src="<?= base_url(); ?>assets/vendor/plyr/plyr.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/plyr/plyr.polyfilled.min.js"></script>
<script>
const player = new Plyr('#player');$(document).ajaxStop(function () {const player = new Plyr('#player');});const audio_player = new Plyr('#audio_player');
$(document).ajaxStop(function () {const player = new Plyr('#audio_player');});
$(document).ready(function () {setTimeout(function () {$(".product-video-preview").css("opacity", "1");}, 300);setTimeout(function () {$(".product-audio-preview").css("opacity", "1");}, 300);});
</script>
<?php endif; ?>
<?= $this->general_settings->google_analytics; ?>
<?= $this->general_settings->custom_javascript_codes;  ?>

</body>
</html>
