<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Wrapper -->
<section class="breadcrumbs">
        <div class="container">
            <ul class="clean">
                <li><a href=""><?= trans('home') ?></a></li>
                <li>
                    <img src="img/go.svg" alt="">
                </li>
                <li><?= trans('cart') ?></li>
            </ul>
        </div>
    </section>
<section class="bg-light panier-box">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="box2">
                    
                        <h2><?php echo trans("my_cart"); ?> (<?php echo get_cart_product_count(); ?>)</h2> 

                        <?php if (!empty($cart_items)):
                                        foreach ($cart_items as $cart_item):?>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="panier-img">
                                    <img src="<?php echo get_product_image($cart_item->product_id, 'image_small') ?>" alt="" class="cover-img">
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <h4><?php echo $cart_item->product_title; ?></h4>
                                <p><?php echo trans('quantity').' : ' . $cart_item->quantity ?> x <?php echo $cart_item->currency .' '.$cart_item->unit_price; ?> </p>
                            </div>
                            <div class="col-sm-3">
                                <div class="price2">
                                    <?php echo $cart_item->currency .' '.$cart_item->total_price; ?>
                                    <span>Total</span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        <div class="pad20"></div>
                        <!--<h4>Moyens de livraisons</h4>
                        <div class="pad10"></div>
                        <div class="row radiogroupe">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="radio" id="test1" name="radio-group1" >
                                    <label for="test1">
                                        <img src="assets/img/dhl.svg" alt="">
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="radio" id="test2" name="radio-group1" >
                                    <label for="test2">
                                        <img src="assets/img/fed.svg" alt="">
                                    </label>
                                </div>
                            </div>
                        </div>-->
               
                        <h4>Modes de paiments</h4>

                        <div class="pad10"></div>
                        <div class="row radiogroupe">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="radio" id="test3" name="radio-group2" >
                                    <label for="test3">
                                        <img src="<?php echo base_url(); ?>assets/img/payment/visa.svg" alt="visa">
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="radio" id="test4" name="radio-group2" >
                                    <label for="test4">
                                    <img src="<?php echo base_url(); ?>assets/img/payment/mastercard.svg" alt="mastercard">
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="radio" id="test5" name="radio-group2" >
                                    <label for="test5">
                                    <img src="<?php echo base_url(); ?>assets/img/payment/maestro.svg" alt="maestro">
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="radio" id="test6" name="radio-group2" >
                                    <label for="test6">
                                    <img src="<?php echo base_url(); ?>assets/img/payment/amex.svg" alt="amex">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--<h4>Paiement en plusieurs fois sans frais</h4>
                        <div class="pad10"></div>
                        <div class="row frais">
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="radio" id="test7" name="radio-group3" >
                                    <label for="test7">
                                        Comptant <span>629,90 €</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="radio" id="test8" name="radio-group3" >
                                    <label for="test8">
                                        3x <span>170,31€</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="radio" id="test9" name="radio-group3" >
                                    <label for="test9">
                                        4x <span>125,31€</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="radio" id="test10" name="radio-group3" >
                                    <label for="test10">
                                        5x <span>103,30€</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="radio" id="test11" name="radio-group3" >
                                    <label for="test11">
                                        10x <span>53,05€</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="radio" id="test12" name="radio-group3" >
                                    <label for="test12">
                                        A partir de <span>15€ /mois</span>
                                    </label>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box2">
                        <h4>Bilan panier</h4>
                        <div class="pad10"></div>
                        <ul class="clean list-panier">
                            <li>Nombres d'articles <span class="pull-right">1</span></li>
                            <li>Sous-total <span class="pull-right"><?= price_decimal($cart_total->subtotal, $cart_total->currency); ?></span> </li>
                            
                        </ul>
                        <div class="pad10"></div>
                        <div class="total">
                            <div class="row">
                                <div class="col-sm-6">
                                    Total
                                </div>
                                <div class="col-sm-6 text-right">
                                    <?= price_decimal($cart_total->total, $cart_total->currency); ?>
                                </div>
                            </div>
                        </div>
                        <div class="pad10"></div>
                        <?php if (empty($cart_total->is_stock_available)): ?>
                                            <a href="javascript:void(0)" class="btn btn-block button3"><?php echo trans("continue_to_checkout"); ?></a>
                        <?php else:
                            if (empty($this->auth_check) && $this->general_settings->guest_checkout != 1): ?>
                                                <a href="#" class="btn btn-block button3" data-toggle="modal" data-target="#loginModal"><?php echo trans("continue_to_checkout"); ?></a>
                                            <?php else:
                                                if ($cart_has_physical_product == true && $this->product_settings->marketplace_shipping == 1): ?>
                                                    <a href="<?php echo generate_url("cart", "shipping"); ?>" class="btn btn-block button3"><?php echo trans("continue_to_checkout"); ?></a>
                                                <?php else: ?>
                                                    <a href="<?php echo generate_url("cart", "payment_method"); ?>" class="btn btn-block button3"><?php echo trans("continue_to_checkout"); ?></a>
                                                <?php endif;
                                            endif;
                                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>