<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php if (!empty($slider_items)):
    $this->load->view("partials/_main_slider");
endif; ?>

<!-- featured categories -->
<?php if (item_count($featured_categories) > 0 && $this->general_settings->featured_categories == 1): ?>
    <?php $this->load->view("partials/_featured_categories"); ?>
<?php endif; ?>

<!-- featured products -->
<?php if ($this->general_settings->index_promoted_products == 1 && $this->general_settings->promoted_products == 1 && !empty($promoted_products)): ?>
    <?php $this->load->view("product/_featured_products"); ?>
<?php endif; ?>

<!-- last added products -->
<?php if ($this->general_settings->index_latest_products == 1 && !empty($latest_products)): ?>
    <?php $this->load->view("product/_last_added_products"); ?>
<?php endif; ?>

<!--- special offers -->
<?php $this->load->view('product/_special_offers', ['index_categories' => $index_categories]); ?>

<section class="bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="icon">
                        <img src="assets/img/icon01.svg">
                        <h4>Lorem Ipsum dolor</h4>
                        <p>Le Lorem Ipsum est simplement du faux texte employe dans la composition</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="icon">
                        <img src="assets/img/icon02.svg">
                        <h4>Lorem Ipsum dolor</h4>
                        <p>Le Lorem Ipsum est simplement du faux texte employe dans la composition</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="icon">
                        <img src="assets/img/icon03.svg">
                        <h4>Lorem Ipsum dolor</h4>
                        <p>Le Lorem Ipsum est simplement du faux texte employe dans la composition</p>
                    </div>
                </div>
            </div>
        </div>
    </section>