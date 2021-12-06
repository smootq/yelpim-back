<script src="<?= base_url(); ?>assets/js/jquery-3.5.1.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/24b7f338c4.js"></script>
<script src="<?= base_url(); ?>assets/js/owl.carousel.js"></script>
<script src="<?= base_url(); ?>assets/js/lightslider.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins-1.8.js"></script>
<script src="<?= base_url(); ?>assets/js/global.js"></script>
<?php if($isAdminPage ): ?>
    <script src="<?= base_url(); ?>assets/admin/js/dashboard-1.8.js"></script>
    <script src="<?= base_url(); ?>assets/admin/js/main-1.8.js"></script>
<?php endif; ?>


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