<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php if (!empty($featured_categories)): ?>
<section class="bg-light text-center">
        <div class="container">
        <h2><?php echo trans("featured_categories"); ?></h2>
            <p><?php echo trans("featured_categories_exp"); ?></p>
            <div class="pad20"></div>
            <div class="row">
                <?php foreach ($featured_categories as $category): ?>
                <div class="col-sm-15">
                    <a href="<?php echo generate_category_url($category); ?>">
                        <div class="categorie">
                            <img src="<?php echo get_category_image_url($category); ?>" class="jouet-1">
                            <h4><?php echo category_name($category); ?></h4>
                        </div>
                     </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
