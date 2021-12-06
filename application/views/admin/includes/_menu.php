<div class="col-sm-3">
        <div class="box-white">
                <div class="profile  text-center">
                        <div class="avatar-upload">
                                <div class="avatar-preview">
                                        <div class="user-panel">
                                                <div class="pull-left image">
                                                        <img src="<?php echo get_user_avatar($this->auth_user); ?>" class="img-circle" alt="">
                                                </div>
                                                <div class="pull-left info">
                                               
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <h5><?php echo $this->auth_user->username; ?></h5>
                        <p><a href="#"><i class="fa fa-circle text-success"></i> <?php echo trans("online"); ?></a></p>
                </div>
                
        </div>
        <div class="box-white">
                <ul class="menu2 clean">
                        <li class="nav-home">
                        <a href="<?php echo admin_url(); ?>">
                                <i class="fa fa-home"></i> <span><?php echo trans("home"); ?></span>
                        </a>
                        </li>
                        <!--<li class="nav-navigation nav-hide">
                        <a href="<?php //echo admin_url(); ?>navigation">
                                <i class="fa fa-th"></i>
                                <span><?php //echo trans("navigation"); ?></span>
                        </a>
                        </li>-->
                        <li class="nav-slider ">
                        <a href="<?php echo admin_url(); ?>slider">
                                <i class="fa fa-sliders"></i>
                                <span><?php echo trans("slider"); ?></span>
                        </a>
                        </li>
                        <li class="nav-homepage-manager nav-hide">
                        <a href="<?php echo admin_url(); ?>homepage-manager">
                                <i class="fa fa-clone"></i>
                                <span><?php echo trans("homepage_manager"); ?></span>
                        </a>
                        </li>
                        <li class="header"><?php echo trans("orders"); ?></li>
                        <li class="treeview<?php is_admin_nav_active(['orders', 'transactions', 'order-bank-transfers', 'invoices', 'order-details']); ?>">
                        <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span><?php echo trans("orders"); ?></span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                                <li class="nav-orders"><a href="<?php echo admin_url(); ?>orders"> <?php echo trans("orders"); ?></a></li>
                                <li class="nav-transactions"><a href="<?php echo admin_url(); ?>transactions"> <?php echo trans("transactions"); ?></a></li>
                                <li class="nav-order-bank-transfers"><a href="<?php echo admin_url(); ?>order-bank-transfers"> <?php echo trans("bank_transfer_notifications"); ?></a></li>
                                <li class="nav-invoices"><a href="<?php echo admin_url(); ?>invoices"> <?php echo trans("invoices"); ?></a></li>
                        </ul>
                        </li>
                        <li class="nav-digital-sales nav-hide">
                        <a href="<?php echo admin_url(); ?>digital-sales">
                                <i class="fa fa-shopping-bag"></i>
                                <span><?php echo trans("digital_sales"); ?></span>
                        </a>
                        </li>
                        <li class="treeview<?php is_admin_nav_active(['earnings', 'seller-balances', 'update-seller-balance']); ?>">
                        <a href="#">
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <span><?php echo trans("earnings"); ?></span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                                <li class="nav-earnings"><a href="<?php echo admin_url(); ?>earnings"> <?php echo trans("earnings"); ?></a></li>
                                <li class="nav-seller-balances"><a href="<?php echo admin_url(); ?>seller-balances"> <?php echo trans("seller_balances"); ?></a></li>
                        </ul>
                        </li>
                        <li class="treeview<?php is_admin_nav_active(['add-payout', 'payout-requests', 'completed-payouts', 'payout-settings']); ?>">
                        <a href="#">
                                <i class="fa fa-credit-card" aria-hidden="true"></i>
                                <span><?php echo trans("payouts"); ?></span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                                <li class="nav-add-payout"><a href="<?php echo admin_url(); ?>add-payout"> <?php echo trans("add_payout"); ?></a></li>
                                <li class="nav-payout-requests"><a href="<?php echo admin_url(); ?>payout-requests"> <?php echo trans("payout_requests"); ?></a></li>
                                <li class="nav-completed-payouts"><a href="<?php echo admin_url(); ?>completed-payouts"> <?php echo trans("completed_payouts"); ?></a></li>
                                <li class="nav-payout-settings"><a href="<?php echo admin_url(); ?>payout-settings"> <?php echo trans("payout_settings"); ?></a></li>
                        </ul>
                        </li>
                        <li class="header"><?php echo trans("products"); ?></li>
                        <li class="treeview<?php is_admin_nav_active(['products', 'special-offers', 'pending-products', 'hidden-products', 'expired-products', 'drafts', 'deleted-products', 'product-details', 'sold-products']); ?>">
                        <a href="#">
                                <i class="fa fa-shopping-basket angle-left" aria-hidden="true"></i>
                                <span><?php echo trans("products"); ?></span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                                <li><a href="<?php echo admin_url(); ?>products"> <?php echo trans("products"); ?></a></li>
                                <li class="nav-special-offers"><a href="<?php echo admin_url(); ?>special-offers"> <?php echo trans("special_offers"); ?></a></li>
                                <li class="nav-pending-products"><a href="<?php echo admin_url(); ?>pending-products"> <?php echo trans("pending_products"); ?></a></li>
                                <li class="nav-hidden-products"><a href="<?php echo admin_url(); ?>hidden-products"> <?php echo trans("hidden_products"); ?></a></li>
                                <?php if ($this->general_settings->membership_plans_system == 1): ?>
                                <li class="nav-expired-products"><a href="<?php echo admin_url(); ?>expired-products"> <?php echo trans("expired_products"); ?></a></li>
                                <?php endif; ?>
                                <li class="nav-sold-products"><a href="<?php echo admin_url(); ?>sold-products"> <?php echo trans("sold_products"); ?></a></li>
                                <li class="nav-drafts"><a href="<?php echo admin_url(); ?>drafts"> <?php echo trans("drafts"); ?></a></li>
                                <li class="nav-deleted-products"><a href="<?php echo admin_url(); ?>deleted-products"> <?php echo trans("deleted_products"); ?></a></li>
                                <li><a href="<?php echo generate_dash_url("add_product"); ?>" target="_blank"> <?php echo trans("add_product"); ?></a></li>
                                <li><a href="<?php echo generate_dash_url("bulk_product_upload"); ?>"> <?php echo trans("bulk_product_upload"); ?></a></li>
                        </ul>
                        </li>
                        <li class="nav-hide treeview<?php is_admin_nav_active(['featured-products', 'featured-products-pricing', 'featured-products-transactions']); ?>">
                        <a href="#">
                                <i class="fa fa-dollar" aria-hidden="true"></i>
                                <span><?php echo trans("featured_products"); ?></span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                                <li class="nav-featured-products"><a href="<?php echo admin_url(); ?>featured-products"> <?php echo trans("products"); ?></a></li>
                                <li class="nav-featured-products-pricing"><a href="<?php echo admin_url(); ?>featured-products-pricing"> <?php echo trans("pricing"); ?></a></li>
                                <li class="nav-featured-products-transactions"><a href="<?php echo admin_url(); ?>featured-products-transactions"> <?php echo trans("transactions"); ?></a></li>
                        </ul>
                        </li>
                        <li class="nav-quote-requests nav-hide">
                        <a href="<?php echo admin_url(); ?>quote-requests">
                                <i class="fa fa-tag"></i> <span><?php echo trans("quote_requests"); ?></span>
                        </a>
                        </li>
                        <li class="treeview<?php is_admin_nav_active(['categories', 'add-category', 'update-category', 'bulk-category-upload']); ?>">
                        <a href="#">
                                <i class="fa fa-folder-open"></i>
                                <span><?php echo trans("categories"); ?></span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                                <li class="nav-categories"><a href="<?php echo admin_url(); ?>categories"> <?php echo trans("categories"); ?></a></li>
                                <li class="nav-add-category"><a href="<?php echo admin_url(); ?>add-category"> <?php echo trans("add_category"); ?></a></li>
                                <?php if (is_admin()): ?>
                                <li class="nav-bulk-category-upload"><a href="<?php echo admin_url(); ?>bulk-category-upload"> <?php echo trans("bulk_category_upload"); ?></a></li>
                                <?php endif; ?>
                        </ul>
                        </li>
                        <li class="nav-hide treeview<?php is_admin_nav_active(['add-custom-field', 'custom-fields', 'update-custom-field', 'custom-field-options']); ?>">
                        <a href="#">
                                <i class="fa fa-plus-square-o"></i>
                                <span><?php echo trans("custom_fields"); ?></span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                                <li class="nav-add-custom-field"><a href="<?php echo admin_url(); ?>add-custom-field"> <?php echo trans("add_custom_field"); ?></a></li>
                                <li class="nav-custom-fields"><a href="<?php echo admin_url(); ?>custom-fields"> <?php echo trans("custom_fields"); ?></a></li>
                        </ul>
                        </li>

                        <li class="header"><?php echo trans("content"); ?></li>
                        <li class="nav-hide treeview<?php is_admin_nav_active(['add-page', 'pages', 'update-page']); ?>">
                        <a href="#">
                                <i class="fa fa-file"></i>
                                <span><?php echo trans("pages"); ?></span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                                <li class="nav-add-page"><a href="<?php echo admin_url(); ?>add-page"> <?php echo trans("add_page"); ?></a></li>
                                <li class="nav-pages"><a href="<?php echo admin_url(); ?>pages"> <?php echo trans("pages"); ?></a></li>
                        </ul>
                        </li>
                        <li class="treeview<?php is_admin_nav_active(['blog-add-post', 'blog-posts', 'blog-categories', 'update-blog-post', 'update-blog-category']); ?>">
                        <a href="#">
                                <i class="fa fa-file-text"></i>
                                <span><?php echo trans("blog"); ?></span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                                <li class="nav-blog-add-post"><a href="<?php echo admin_url(); ?>blog-add-post"> <?php echo trans("add_post"); ?></a></li>
                                <li class="nav-blog-posts"><a href="<?php echo admin_url(); ?>blog-posts"> <?php echo trans("posts"); ?></a></li>
                                <li class="nav-blog-categories"><a href="<?php echo admin_url(); ?>blog-categories"> <?php echo trans("categories"); ?></a></li>
                        </ul>
                        </li>
                        <li class="treeview<?php is_admin_nav_active(['countries', 'states', 'cities', 'add-country', 'add-state', 'add-city', 'update-country', 'update-state', 'update-city']); ?>">
                        <a href="#">
                                <i class="fa fa-map-marker"></i>
                                <span><?php echo trans("location"); ?></span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                                <li class="nav-countries"><a href="<?php echo admin_url(); ?>countries"> <?php echo trans("countries"); ?></a></li>
                                <li class="nav-states"><a href="<?php echo admin_url(); ?>states"> <?php echo trans("states"); ?></a></li>
                                <li class="nav-cities"><a href="<?php echo admin_url(); ?>cities"> <?php echo trans("cities"); ?></a></li>
                        </ul>
                        </li>
                        <li class="header"><?php echo trans("membership"); ?></li>
                        <li class="treeview<?php is_admin_nav_active(['membership-plans', 'transactions-membership']); ?>">
                        <a href="#">
                                <i class="fa fa-adjust"></i>
                                <span><?php echo trans("membership"); ?></span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                                <li class="nav-membership-plans"><a href="<?php echo admin_url(); ?>membership-plans"> <?php echo trans("membership_plans"); ?></a></li>
                                <li class="nav-transactions-membership"><a href="<?php echo admin_url(); ?>transactions-membership"> <?php echo trans("transactions"); ?></a></li>
                        </ul>
                        </li>
                        <li class="nav-shop-opening-requests">
                        <a href="<?php echo admin_url(); ?>shop-opening-requests">
                                <i class="fa fa-question-circle"></i>
                                <span><?php echo trans("shop_opening_requests"); ?></span>
                        </a>
                        </li>
                        <li class="treeview<?php is_admin_nav_active(['add-administrator', 'administrators', 'vendors', 'members', 'edit-user']); ?>">
                        <a href="#">
                                <i class="fa fa-users"></i>
                                <span><?php echo trans("users"); ?></span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                                <li class="nav-add-administrator"><a href="<?php echo admin_url(); ?>add-administrator"> <?php echo trans("add_administrator"); ?></a></li>
                                <li class="nav-administrators"><a href="<?php echo admin_url(); ?>administrators"> <?php echo trans("administrators"); ?></a></li>
                                <li class="nav-vendors"><a href="<?php echo admin_url(); ?>vendors"> <?php echo trans("vendors"); ?></a></li>
                                <li class="nav-members"><a href="<?php echo admin_url(); ?>members"> <?php echo trans("members"); ?></a></li>
                        </ul>
                        </li>
                        <li class="header"><?php echo trans("management_tools"); ?></li>
                        <li class="nav-storage">
                        <a href="<?php echo admin_url(); ?>storage">
                                <i class="fa fa-cloud-upload"></i>
                                <span><?php echo trans("storage"); ?></span>
                        </a>
                        </li>
                        <li class="nav-cache-system nav-hide">
                        <a href="<?php echo admin_url(); ?>cache-system">
                                <i class="fa fa-database"></i>
                                <span><?php echo trans("cache_system"); ?></span>
                        </a>
                        </li>
                        <li class="nav-seo-tools nav-hide">
                        <a href="<?php echo admin_url(); ?>seo-tools">
                                <i class="fa fa-wrench"></i> <span><?php echo trans("seo_tools"); ?></span>
                        </a>
                        </li>
                        <li class="nav-ad-spaces">
                        <a href="<?php echo admin_url(); ?>ad-spaces">
                                <i class="fa fa-dollar"></i> <span><?php echo trans("ad_spaces"); ?></span>
                        </a>
                        </li>
                        <li class="nav-contact-messages">
                        <a href="<?php echo admin_url(); ?>contact-messages">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                <span><?php echo trans("contact_messages"); ?></span>
                        </a>
                        </li>
                        <li class="nav-reviews">
                        <a href="<?php echo admin_url(); ?>reviews">
                                <i class="fa fa-star"></i>
                                <span><?php echo trans("reviews"); ?></span>
                        </a>
                        </li>
                        <li class="treeview<?php is_admin_nav_active(['pending-product-comments', 'pending-blog-comments', 'product-comments', 'blog-comments']); ?>">
                        <a href="#">
                                <i class="fa fa-comments"></i>
                                <span><?php echo trans("comments"); ?></span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                                <?php if ($this->general_settings->comment_approval_system == 1): ?>
                                <li class="nav-pending-product-comments"><a href="<?php echo admin_url(); ?>pending-product-comments"> <?php echo trans("product_comments"); ?></a></li>
                                <li class="nav-pending-blog-comments"><a href="<?php echo admin_url(); ?>pending-blog-comments"> <?php echo trans("blog_comments"); ?></a></li>
                                <?php else: ?>
                                <li class="nav-product-comments"><a href="<?php echo admin_url(); ?>product-comments"> <?php echo trans("product_comments"); ?></a></li>
                                <li class="nav-blog-comments"><a href="<?php echo admin_url(); ?>blog-comments"> <?php echo trans("blog_comments"); ?></a></li>
                                <?php endif; ?>
                        </ul>
                        </li>
                        <li class="nav-abuse-reports">
                        <a href="<?php echo admin_url(); ?>abuse-reports">
                                <i class="fa fa-warning" aria-hidden="true"></i>
                                <span><?php echo trans("abuse_reports"); ?></span>
                        </a>
                        </li>
                        <li class="nav-hide treeview<?php is_admin_nav_active(['send-email-subscribers', 'subscribers']); ?>">
                        <a href="#">
                                <i class="fa fa-envelope-o"></i> <span><?php echo trans("newsletter"); ?></span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                                <li class="nav-send-email-subscribers">
                                <a href="<?php echo admin_url(); ?>send-email-subscribers"><?php echo trans("send_email_subscribers"); ?></a>
                                </li>
                                <li class="nav-subscribers">
                                <a href="<?php echo admin_url(); ?>subscribers"><?php echo trans("subscribers"); ?></a>
                                </li>
                        </ul>
                        </li>
                        <li class="header text-uppercase"><?php echo trans("settings"); ?></li>
                        <li class="nav-hide nav-preferences">
                        <a href="<?php echo admin_url(); ?>preferences">
                                <i class="fa fa-check-square-o"></i>
                                <span><?php echo trans("preferences"); ?></span>
                        </a>
                        </li>
                        <li class="nav-hide treeview<?php is_admin_nav_active(['settings', 'languages', 'social-login', 'update-language', 'translations', 'email-settings']); ?>">
                        <a href="#">
                                <i class="fa fa-cog"></i>
                                <span><?php echo trans("general_settings"); ?></span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                                <li class="nav-settings"><a href="<?php echo admin_url(); ?>settings"> <?php echo trans("general_settings"); ?></a></li>
                                <li class="nav-languages"><a href="<?php echo admin_url(); ?>languages"> <?php echo trans("language_settings"); ?></a></li>
                                <li class="nav-email-settings"><a href="<?php echo admin_url(); ?>email-settings"> <?php echo trans("email_settings"); ?></a></li>
                                <li class="nav-social-login"><a href="<?php echo admin_url(); ?>social-login"> <?php echo trans("social_login"); ?></a></li>
                        </ul>
                        </li>
                        <li class="nav-product-settings nav-hide">
                        <a href="<?php echo admin_url(); ?>product-settings">
                                <i class="fa fa-list-ul"></i> <span><?php echo trans("product_settings"); ?></span>
                        </a>
                        </li>
                        <li class="nav-hide treeview<?php is_admin_nav_active(['payment-settings', 'currency-settings']); ?>">
                        <a href="#">
                                <i class="fa fa-credit-card-alt"></i>
                                <span><?php echo trans("payment_settings"); ?></span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                                <li class="nav-payment-settings"><a href="<?php echo admin_url(); ?>payment-settings"> <?php echo trans("payment_settings"); ?></a></li>
                                <li class="nav-currency-settings"><a href="<?php echo admin_url(); ?>currency-settings"> <?php echo trans("currency_settings"); ?></a></li>
                        </ul>
                        </li>
                        <li class="treeview<?php is_admin_nav_active(['visual-settings', 'font-settings']); ?>">
                        <a href="#">
                                <i class="fa fa-paint-brush"></i>
                                <span><?php echo trans("visual_settings"); ?></span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                                <li class="nav-visual-settings"><a href="<?php echo admin_url(); ?>visual-settings"> <?php echo trans("visual_settings"); ?></a></li>
                                <li class="nav-hide nav-font-settings"><a href="<?php echo admin_url(); ?>font-settings"> <?php echo trans("font_settings"); ?></a></li>
                        </ul>
                        </li>


                        <li class="nav-hide treeview<?php is_admin_nav_active(['system-settings', 'route-settings']); ?>">
                        <a href="#">
                                <i class="fa fa-cogs"></i>
                                <span><?php echo trans("system_settings"); ?></span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                                <li class="nav-system-settings"><a href="<?php echo admin_url(); ?>system-settings"> <?php echo trans("system_settings"); ?></a></li>
                                <li class="nav-route-settings"><a href="<?php echo admin_url(); ?>route-settings"> <?php echo trans("route_settings"); ?></a></li>
                        </ul>
                        </li>
                </ul>
        </div>
</div>