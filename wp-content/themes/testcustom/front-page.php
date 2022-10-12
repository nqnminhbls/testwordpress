<?php get_header(); ?>

<?php $value = get_field("hero"); ?>
<section class="bg-1 h-900x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white">

                                <h5><b><?php echo $value['small_title'] ?></b></h5>
                                <h1 class="mt-30 mb-15"><?php echo $value['main_title'] ?></h1>

                                <?php if ($value['link']) : ?>
                                        <h5>
                                                <a href="<?php echo $value['link']; ?>" class="btn-primaryc plr-25"><b><?php echo $value['link_text']; ?></b></a>

                                        </h5>
                                <?php endif; ?>
                        </div>
                </div>
        </div>
</section>

<?php $info = get_field('main_infomation')  ?>
<section class="story-area left-text center-sm-text pos-relative">
        <div class="abs-tbl bg-2 w-20 z--1 dplay-md-none"></div>
        <div class="abs-tbr bg-3 w-20 z--1 dplay-md-none"></div>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="<?php bloginfo('template_directory'); ?>/images/heading_logo.png" alt="">
                        <h2>Our Story</h2>
                </div>

                <div class="row">
                        <div class="col-md-6">
                                <p class="mb-30"><?php echo $info['left_side'] ?> </p>
                        </div><!-- col-md-6 -->

                        <div class="col-md-6">
                                <p class="mb-30"><?php echo $info['right_side'] ?> </p>
                        </div><!-- col-md-6 -->
                </div><!-- row -->
        </div><!-- container -->
</section>


<section class="story-area bg-seller color-white pos-relative">
        <div class="pos-bottom triangle-up"></div>
        <div class="pos-top triangle-bottom"></div>
        <div class="container">

                <?php if (have_rows('best_sellers')) : ?>
                        <div class="heading">
                                <img class="heading-img" src="<?php bloginfo('template_directory'); ?>/images/heading_logo.png" alt="">
                                <h2>Best Sellers</h2>
                        </div>

                        <div class="row">
                                <?php while (have_rows('best_sellers')) : the_row();
                                        $image = get_sub_field('image');
                                        $title = get_sub_field('title');
                                        $price = get_sub_field('price');
                                        $link = get_sub_field('link');
                                        $offer = get_sub_field('offer');
                                ?>

                                        <div class="col-lg-3 col-md-4  col-sm-6 ">
                                                <div class="center-text mb-30">
                                                        <div class="ïmg-200x mlr-auto pos-relative">
                                                                <?php if ($offer) : ?>
                                                                        <h6 class="ribbon-cont">
                                                                                <div class="ribbon primary"></div><b>OFFER</b>
                                                                        </h6>
                                                                <?php endif ?>
                                                                <img src="<?php echo $image['sizes']['product_image_small']; ?>" alt="">
                                                        </div>
                                                        <h5 class="mt-20"><?php echo $title; ?></h5>
                                                        <h4 class="mt-5">$<b><?php echo $price; ?></b></h4>
                                                        <?php if ($link) : ?>
                                                                <h6 class="mt-20"><a href="<?php echo $link; ?>" class="btn-brdr-primary plr-25"><b>Order Now</b></a></h6>
                                                        <?php endif; ?>
                                                </div>
                                                <!--text-center-->
                                        </div><!-- col-md-3 -->



                                <?php endwhile; ?>
                        </div><!-- row -->
                <?php endif; ?>
                <h6 class="center-text mt-40 mt-sm-20 mb-30"><a href="#" class="btn-primaryc plr-25"><b>SEE TODAYS MENU</b></a></h6>
        </div><!-- container -->
</section>


<section>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="<?php bloginfo('template_directory'); ?>/images/heading_logo.png" alt="">
                        <h2>Our Menu</h2>
                </div>

                <?php if (have_rows('our_menu')) : ?>
                        <div class="row">
                                <div class="col-sm-12">
                                        <ul class="selecton brdr-b-primary mb-70">
                                                <?php while (have_rows('our_menu')) : the_row();
                                                        $category_name = get_sub_field('category_name');
                                                        $menu_items = get_sub_field('category');
                                                ?>
                                                        <li><a class="active" href="<?php echo sanitize_title($category_name) ?>" data-select="*"><b><?php echo sanitize_title($category_name) ?></b></a></li>
                                                <?php endwhile; ?>
                                        </ul>
                                </div>
                                <!--col-sm-12-->
                        </div>
                        <!--row-->
                <?php endif; ?>

                <?php if (have_rows('our_menu')) : ?>
                        <div class="row">

                                <?php while (have_rows('our_menu')) : the_row();
                                        $category_name = get_sub_field('category_name');
                                        $menu_items = get_sub_field('category');
                                ?>
                                        <div class="col-md-6 food-menu <?php echo sanitize_title($category_name); ?>">

                                                <?php if (have_rows('category')) : ?>

                                                        <?php while (have_rows('category')) : the_row();
                                                                $title = get_sub_field('title');
                                                                $description = get_sub_field('description');
                                                                $price = get_sub_field('price');
                                                        ?>
                                                              <div class="sided-90x mb-30 ">
                                                                        <div class="s-left"><img class="br-3" src="<?php bloginfo('template_directory'); ?>/images/menu-1-120x120.jpg" alt="Menu Image"></div>
                                                                        <!--s-left-->
                                                                        <div class="s-right">
                                                                                <h5 class="mb-10"><b><?php echo $title; ?></b><b class="color-primary float-right">$<?php echo $price; ?></b></h5>
                                                                                <p class="pr-70"><?php echo $description; ?> </p>
                                                                        </div>
                                                                        <!--s-right-->
                                                                </div><!-- sided-90x -->  
                                                        <?php endwhile; ?>


                                                <?php endif; ?>

                                        </div><!-- food-menu -->
                                <?php endwhile; ?>

                        </div>
                        <!--row-->
                <?php endif; ?>


                <h6 class="center-text mt-40 mt-sm-20 mb-30"><a href="#" class="btn-primaryc plr-25"><b>SEE TODAYS MENU</b></a></h6>
        </div><!-- container -->
</section>

<?php get_footer(); ?>