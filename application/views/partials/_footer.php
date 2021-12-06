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


<?php 
if(!isset($isAdminPage)) $isAdminPage = 0; 

$this->load->view("partials/_js_footer", ['isAdminPage' => $isAdminPage]); ?>

</html>