<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<link rel="stylesheet" href="assets/css/lightslider.css">

<section class="breadcrumbs">
    <div class="container">
        <ul class="clean">
            <li><a href="<?php echo lang_base_url(); ?>"><?php echo trans("home"); ?></a></li>
            <?php 
                if (!empty($parent_categories_tree)):
                    foreach ($parent_categories_tree as $item):?>
                        <li>
                            <img src="assets/img/go.svg" alt="">
                        </li>
                        <li><a href="<?php echo generate_category_url($item); ?>"><?php echo category_name($item); ?></a></li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li><?= trans("products"); ?></li>
                <?php endif; ?>
                <li>
                    <img src="assets/img/go.svg" alt="">
                </li>
                <li class="breadcrumb-item active"><?= html_escape($title); ?></li>
        </ul>
    </div>
</section>

<section class="bg-light details-product">
            <div class="container">
                <div class="row">
                <?php echo form_open(get_product_form_data($product)->add_to_cart_url, ['id' => 'form_add_cart']); ?>
                    <input type="hidden" name="product_id" value="<?php echo $product->id; ?>">
                    <div class="col-sm-6">
                        <ul id="lightSlider">
                            <?php foreach ($product_images as $image): ?>
                            <li data-thumb="uploads/images/<?php echo $image->image_small ?>">
                                    <div class="option">
                                        <button class="like" type="submit"></button>
                                        <button class="share"></button>
                                    </div>
                                    <img src="uploads/images/<?php echo $image->image_default ?>" />
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h4><?= html_escape($title); ?></h4>
                        <p><?php echo character_limiter(get_shop_name_product($product), 30, '..'); ?></p>
                        <div class="row form-box">
                            <div class="col-sm-6">
                                <div class="product-add-to-cart-container">
                                    <div class="number-spinner" style="width: auto !important; ">
                                        <div class="form-group input-group">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-default btn-spinner-minus" data-dir="dwn">-</button>
                                                </span>
                                            <input type="text" class="form-control text-center" name="product_quantity" value="1" style="background: none;padding: 5px;height: 42px !important;border: 1px solid #666 !important;min-width: 100px;">
                                            <span class="input-group-btn">
                                                    <button type="button" class="btn btn-default btn-spinner-plus" data-dir="up">+</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="form-group select">
                                    <span>Taille</span>
                                    <select name="" id="" class="form-control">
                                        <option value="">S</option>
                                        <option value="">M</option>
                                        <option value="">XL</option>
                                    </select>
                                </div>-->
                            </div>
                            <!--<div class="col-sm-6">
                                <div class="form-group select">
                                    <span>Couleurs</span>
                                    <select name="" id="" class="form-control">
                                        <option value="" class="vert">Vert foncé</option>
                                        <option value="">toto</option>
                                        <option value="">tata</option>
                                    </select>
                                </div>
                            </div>-->
                        </div>
                        <div class="pad10"></div>
                        <p>
                            <span class="price xl"><?php echo  price_formatted($product->price, $product->currency); ?> </span>
                        </p>
                        <p><?php echo trans("sku"); ?> :  <?php echo html_escape($product->sku); ?></p>
                        <div class="row">
                            <div class="col-sm-4">
                                <p>Livraison : $ 4 </p>
                            </div>
                            <div class="col-sm-8">
                                <p>
                                    <a href="" class="link">Voir les modes de
                                        livraison</a>
                                </p>
                            </div>
                        </div>
                        <div class="pad10"></div>
                        <?php if ($product->is_sold != 1): ?>
                            <div class="row  product-add-to-cart-container">
                                <div class="col-sm-7">
                                    <button class="button3 btn-product-cart">Add to cart</button>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php echo form_close(); ?>
                </div>

                <div class="pad20"></div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="box3">
                            <div class="headtitle">
                                Description 
                            </div>
                            <div class="body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p><span>Brand</span> Rosemine / Sophie
                                            Siman</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><span>Item</span> B088P7FWL7</p>
                                    </div>
                                </div>
                                <p class="pad10">
                                    <?= !empty($product_details->description) ? $product_details->description : ''; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box3">
                            <div class="headtitle">
                                <?php echo character_limiter(get_shop_name_product($product), 30, '..'); ?>
                            </div>
                            <div class="body">
                                <img src="img/ninebot.png" alt=""
                                    class="img-responsive">
                                <div class="pad10"></div>
                                <p>Le Lorem Ipsum est simplement du faux texte
                                    employé dans la composition et la mise en
                                    page avant impression.
                                    Le Lorem Ipsum est simplement du faux texte
                                    employé dans la composition et la mise en
                                    page avant impression.</p>
                                <p>
                                    <a href="" class="button5">Voir la boutique</a>
                                </p>
                            </div>
                        </div>
                        <div class="box3">
                            <div class="headtitle">
                                Avis clients
                            </div>
                            <div class="body">
                                <p>
                                    <span class="price">4,7 / 5</span>
                                    pour + de 5 000 ventes
                                </p>
                                <hr>
                                <div class="pad10">
                                    <p class="text-right"><span
                                            class="pull-left">Sébastien</span>17/02/2020</p>
                                    <p>Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard
                                        dummy
                                        text </p>
                                </div>
                                <div class="pad10">
                                    <p class="text-right"><span
                                            class="pull-left">Sébastien</span>17/02/2020</p>
                                    <p>Lorem Ipsum is simply dummy text of the
                                        printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard
                                        dummy
                                        text </p>
                                </div>
                                <p class="text-center">
                                    <a href="" class="link">Voir tous les
                                        commentaires clients</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>