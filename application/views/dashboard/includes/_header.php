<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= html_escape($title); ?> - <?= trans("dashboard"); ?> - <?= html_escape($this->general_settings->application_name); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" type="image/png" href="<?php echo get_favicon($this->general_settings); ?>"/>
    <!-- Google Font -->
    <?php echo !empty($this->fonts->dashboard_font_url) ? $this->fonts->dashboard_font_url : ''; ?>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/font-icons/css/mds-icons.min.css"/>
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Datatables -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendor/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendor/datatables/jquery.dataTables_themeroller.css">
    <!-- Tags Input -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendor/tagsinput/jquery.tagsinput.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendor/pace/pace.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/vendor/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/plugins-1.8.css">

    <!-- template style --> 
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/global.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style-1.8.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/global-admin.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/skin-black-light.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/file-uploader/css/jquery.dm-uploader.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/file-uploader/css/styles.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/file-manager/file-manager.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/main-1.8.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/css/dashboard-1.8.css">
    
  
    <style>body, h1, h2, h3, h4, h5, h6 {
        <?php echo $this->fonts->dashboard_font_family; ?>
        }
    </style>
    <script>var directionality = "ltr";</script>
    <?php if ($this->rtl == true): ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/rtl.css">
        <script>var directionality = "rtl";</script>
    <?php endif; ?>
    <!-- jQuery 3 -->
    <script src="<?= base_url(); ?>assets/admin/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/file-uploader/js/jquery.dm-uploader.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/file-uploader/js/ui.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>.swal-overlay {z-index: 999999999;}</style>
    <script>
        var base_url = "<?= base_url(); ?>";
        var sys_lang_id = "<?= $this->selected_lang->id; ?>";
        var csfr_token_name = "<?= $this->security->get_csrf_token_name(); ?>";
        var csfr_cookie_name = "<?= $this->config->item('csrf_cookie_name'); ?>";
    </script>
</head>
<body class="hold-transition skin-black-light sidebar-mini">
<div class="wrapper">
<header>
        <?php $this->load->view("partials/_top_bar"); ?>
        
        <div class="menu">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                    <a href="<?php echo lang_base_url(); ?>"><img src="<?php echo get_logo($this->general_settings); ?>" alt="logo" class="img-responsive"></a>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-groupe search <?= $this->general_settings->multi_vendor_system != 1 ? ' top-search-bar-single-vendor' : ''; ?>">
                            <?php echo form_open(generate_url('search'), ['id' => 'form_validate_search', 'class' => 'form_search_main', 'method' => 'get']); ?>
                            <?php if ($this->general_settings->multi_vendor_system == 1): ?>                                    
                                <input type="hidden" class="search_type_input" name="search_type" value="product">
                                    <input type="text" name="search" maxlength="300" pattern=".*\S+.*" id="input_search" class="form-control" value="<?php echo (!empty($filter_search)) ? $filter_search : ''; ?>" placeholder="<?php echo trans("search_exp"); ?>" required autocomplete="off">
                                    <button class="btn btn-default btn-search"><i class="icon-search"></i></button>
                                    <div id="response_search_results" class="search-results-ajax"></div>
                                <?php else: ?>
                                    <input type="text" name="search" maxlength="300" pattern=".*\S+.*" id="input_search" class="form-control input-search" value="<?php echo (!empty($filter_search)) ? $filter_search : ''; ?>" placeholder="<?php echo trans("search_products"); ?>" required autocomplete="off">
                                    <input type="hidden" class="search_type_input" name="search_type" value="product">
                                    <button class="btn btn-default btn-search"><i class="icon-search"></i></button>
                                    <div id="response_search_results" class="search-results-ajax"></div>
                                <?php endif; ?>
                            <?php echo form_close(); ?>
                        </div>

                    </div>
                    <!--<div class="col-sm-3">
                        <div class="plus">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form-groupe select">
                                        <select class="">
                                            <option>Categories</option>
                                            <option>........</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-groupe select">
                                        <select class="">
                                            <option>Aide</option>
                                            <option>........</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm-4">
                                    <div class="panier">
                                        <img src="img/panier.svg" alt="">
                                        <span>2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </header>

    section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="box-white">
                        <div class="profile  text-center">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type="file" id="file" accept=".png, .jpg, .jpeg">
                                    <label for="file">
                                        <img src="assets/img/edit2.svg">
                                    </label>
                                </div>
                                <div class="avatar-preview">
                                <img src="<?php echo get_user_avatar($this->auth_user); ?>" class="img-circle" alt="">
                                </div>
                            </div>
                            <h5><?= trans("hi") . ", " . get_shop_name($this->auth_user); ?></h5>
                           
                        </div>
                    </div>
                    <div class="box-white">
                    <ul class="sidebar-menu" data-widget="tree">
                    <li class="header"><?php echo trans("navigation"); ?></li>
                    <li class="nav-home">
                        <a href="<?php echo dashboard_url(); ?>">
                            <i class="fa fa-home"></i> <span><?php echo trans("dashboard"); ?></span>
                        </a>
                    </li>
                    <li class="header"><?php echo trans("products"); ?></li>
                    <li class="nav-add-product">
                        <a href="<?= generate_dash_url("add_product"); ?>">
                            <i class="fa fa-file"></i>
                            <span><?php echo trans("add_product"); ?></span>
                        </a>
                    </li>
                    <?php if ($this->auth_user->role == "admin" || ($this->auth_user->role != "admin" && $this->general_settings->vendor_bulk_product_upload == 1)): ?>
                        <li class="nav-bulk-product-upload">
                            <a href="<?= generate_dash_url("bulk_product_upload"); ?>">
                                <i class="fa fa-cloud-upload"></i>
                                <span><?php echo trans("bulk_product_upload"); ?></span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <li class="treeview<?php is_admin_nav_active(['products', 'pending-products', 'hidden-products', 'expired-products', 'sold-products', 'drafts']); ?>">
                        <a href="#">
                            <i class="fa fa-shopping-basket"></i>
                            <span><?php echo trans("products"); ?></span>
                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="nav-products"><a href="<?= generate_dash_url("products"); ?>"><?= trans("products"); ?></a></li>
                            <li class="nav-pending-products"><a href="<?= generate_dash_url("pending_products"); ?>"><?= trans("pending_products"); ?></a></li>
                            <li class="nav-hidden-products"><a href="<?= generate_dash_url("hidden_products"); ?>"><?= trans("hidden_products"); ?></a></li>
                            <?php if ($this->general_settings->membership_plans_system == 1): ?>
                                <li class="nav-expired-products"><a href="<?= generate_dash_url("expired_products"); ?>"><?= trans("expired_products"); ?></a></li>
                            <?php endif; ?>
                            <li class="nav-sold-products"><a href="<?= generate_dash_url("sold_products"); ?>"><?= trans("sold_products"); ?></a></li>
                            <li class="nav-drafts"><a href="<?= generate_dash_url("drafts"); ?>"><?= trans("drafts"); ?></a></li>
                        </ul>
                    </li>
                    <?php if ($this->is_sale_active): ?>
                        <li class="header"><?php echo trans("sales"); ?></li>
                        <li class="treeview<?php is_admin_nav_active(['sales', 'completed-sales', 'sale']); ?>">
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span><?php echo trans("sales"); ?></span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="nav-sales"><a href="<?= generate_dash_url("sales"); ?>"><?= trans("active_sales"); ?></a></li>
                                <li class="nav-completed-sales"><a href="<?= generate_dash_url("completed_sales"); ?>"><?= trans("completed_sales"); ?></a></li>
                            </ul>
                        </li>
                        <li class="nav-earnings">
                            <a href="<?= generate_dash_url("earnings"); ?>">
                                <i class="fa fa-money"></i>
                                <span><?php echo trans("earnings"); ?></span>
                            </a>
                        </li>
                        <li class="treeview<?php is_admin_nav_active(['withdraw-money', 'payouts', 'set-payout-account']); ?>">
                            <a href="#">
                                <i class="fa fa-credit-card-alt" style="font-size: 14px;"></i>
                                <span><?php echo trans("payouts"); ?></span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="nav-withdraw-money"><a href="<?= generate_dash_url("withdraw_money"); ?>"><?= trans("withdraw_money"); ?></a></li>
                                <li class="nav-payouts"><a href="<?= generate_dash_url("payouts"); ?>"><?= trans("payouts"); ?></a></li>
                                <li class="nav-set-payout-account"><a href="<?= generate_dash_url("set_payout_account"); ?>"><?= trans("set_payout_account"); ?></a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <?php if (is_bidding_system_active()): ?>
                        <li class="nav-quote-requests">
                            <a href="<?= generate_dash_url("quote_requests"); ?>">
                                <i class="fa fa-tag"></i>
                                <span><?php echo trans("quote_requests"); ?></span>
                                <?php $new_quote_requests_count = get_new_quote_requests_count($this->auth_user->id);
                                if (!empty($new_quote_requests_count)):?>
                                    <span class="pull-right-container">
                              <small class="label label-success pull-right"><?= $new_quote_requests_count; ?></small>
                            </span>
                                <?php endif; ?>
                            </a>
                        </li>
                    <?php endif; ?>
                    <li class="header"><?php echo trans("payments"); ?></li>
                    <li class="treeview<?php is_admin_nav_active(['payment-history']); ?>">
                        <a href="#">
                            <i class="fa fa-credit-card"></i>
                            <span><?php echo trans("payment_history"); ?></span>
                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if ($this->general_settings->membership_plans_system == 1): ?>
                                <li class="nav-payment-history"><a href="<?= generate_dash_url("payment_history"); ?>?payment=membership"><?= trans("membership_payments"); ?></a></li>
                            <?php endif; ?>
                            <li class="nav-payment-history"><a href="<?= generate_dash_url("payment_history"); ?>?payment=promotion"><?= trans("promotion_payments"); ?></a></li>
                        </ul>
                    </li>
                    <?php if ($this->general_settings->product_comments == 1 || $this->general_settings->reviews == 1): ?>
                        <li class="header"><?php echo trans("comments"); ?></li>
                        <?php if ($this->general_settings->product_comments == 1): ?>
                            <li class="nav-comments">
                                <a href="<?= generate_dash_url("comments"); ?>">
                                    <i class="fa fa-comments"></i>
                                    <span><?php echo trans("comments"); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if ($this->general_settings->reviews == 1): ?>
                            <li class="nav-reviews">
                                <a href="<?= generate_dash_url("reviews"); ?>">
                                    <i class="fa fa-star"></i>
                                    <span><?php echo trans("reviews"); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                    <li class="header"><?php echo trans("settings"); ?></li>
                    <li class="nav-shop-settings">
                        <a href="<?= generate_dash_url("shop_settings"); ?>">
                            <i class="fa fa-cog"></i>
                            <span><?php echo trans("shop_settings"); ?></span>
                        </a>
                    </li>
                    <li class="nav-shipping-settings">
                        <a href="<?= generate_dash_url("shipping_settings"); ?>">
                            <i class="fa fa-truck"></i>
                            <span><?php echo trans("shipping_settings"); ?></span>
                        </a>
                    </li>
                </ul>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="box-white d1">
                        <div class="row">