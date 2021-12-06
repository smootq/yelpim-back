<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!--print banner-->
<?php if (!empty($ad_space)):
    $ad_codes = get_ad_codes($ad_space);
    if (!empty($ad_codes)):
        if (trim($ad_codes->ad_code_728) != '') : ?>
            <div class="<?php echo(isset($class) ? $class : ''); ?>">
                <?php echo $ad_codes->ad_code_728; ?>
            </div>
        <?php endif;
        if (trim($ad_codes->ad_code_468) != ''): ?>
            <div class="<?php echo(isset($class) ? $class : ''); ?>">
                <?php echo $ad_codes->ad_code_468; ?>
            </div>
        <?php endif;
        if (trim($ad_codes->ad_code_250) != ''): ?>
            <div class="<?php echo(isset($class) ? $class : ''); ?>">
                <?php echo $ad_codes->ad_code_250; ?>
            </div>
        <?php endif;
    endif;
endif; ?>


