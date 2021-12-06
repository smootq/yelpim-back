<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php if (!empty($slider_items)):?>
<div class="index-main-slider <?php echo ($this->general_settings->slider_type == "boxed") ? "container container-boxed-slider" : "container-fluid"; ?>">
<section class="slider" <?= $this->rtl == true ? 'dir="rtl"' : ''; ?>>
        <div class="container">
            <div class="owl-carousel slide1 owl-theme">
                <?php foreach ($slider_items as $item):  ?>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-5 col-sm-offset-2">
                            <div class="title">
                                
                                <?php if(trim($item->link) != '') : ?>
                                    <a href="<?php echo html_escape($item->link); ?>">
                                <?php endif; ?>
                                    <h2><?php echo $item->title ?> </h2>
                                    <h3><?php echo $item->description ?></h3>
                                    <?php if (!empty($item->button_text)): ?>
                                        <button class="btn btn-slider" data-animation="<?php echo $item->animation_button; ?>" data-delay="0.9s" style="background-color: <?php echo $item->button_color; ?>;border-color: <?php echo $item->button_color; ?>;color: <?php echo $item->button_text_color; ?>"><?php echo html_escape($item->button_text); ?></button>
                                    <?php endif; ?>
                                <?php if(trim($item->link) != '') echo '</a>'; ?>
                           
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <a href="<?php echo html_escape($item->link); ?>">    
                                <img src="<?php echo base_url() . $item->image; ?>">
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
<?php endif; ?>