<section id="portfolio">

    <div class="intro-wrap">

        <div class="row narrow section-intro with-bottom-sep animate-this">
            <div class="col-twelve">
                <h3>Showcase</h3>
                <h1>See Our Featured Projects.</h1>

                <p class="lead">Our professional crew of drywall tapers has many years of experience which is more then evident in our drywall finishes. Profesional taping starts with a professional drywall taper, professional tools and quality products, with pristine crack free results to a level 5 finish, and with an ease and consistency never before seen within the industry. Our project picture listed below.</p>
            </div>
        </div> <!-- end row section-intro -->


        <div class="gallery-work">
            <!-- <div class="row align-items-center">
                <div class="col text-center">
                    <div class="new_arrivals_sorting">
                        <ul class="arrivals_grid_sorting clearfix button-group filters-button-group categories-filters"> -->
                            <?php
                            /* $args = array(
                                'show_option_all' => 'All',
                                'exclude' => '1',
                                'title_li'  => __('')
                            );

                            wp_list_categories($args);
 */
                            ?>
                        <!-- </ul>
                    </div>
                </div>
            </div> -->

            <?php
            $args = array('post_type' => 'project','posts_per_page' => -1);
            $myQuery = new WP_Query($args);
            ?>


        </div><!-- .gallery-work -->


        <div class="new_arrivals">
            <div class="container">
                <?php if ($myQuery->have_posts()) : ?>
                    <div class="row">
                        <div class="col">
                            <div class="product-grid">
                                <!-- Product 1 -->
                                <div class="port-view">
                                    <div class="containers">
                                        <?php while ($myQuery->have_posts()) : $myQuery->the_post(); ?>
                                            <?php
                                            $category = '';
                                            $catloop = get_the_category($myQuery->the_ID());
                                            $count  = count($catloop);
                                            for ($i = 0; $i < $count; $i++) {
                                                $category .= $catloop[$i]->cat_name . ' ';
                                            }
                                            ?>
                                            <div class="<?php echo $category; ?>post-categories">
                                                <div class="product-item trans projectItem" style="float:left;" data-id="22" data-pop="<?php echo get_the_post_thumbnail_url(); ?>">
                                                    <div class="product discount product_filter port_height" style="border-right: 1px solid rgb(233, 233, 233);">
                                                        <div class="product_image pis">
                                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" style="padding:15px;">
                                                        </div>
                                                        <!-- <div class="favorite favorite_left"></div> -->
                                                        <!-- <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-$20</span></div>  -->
                                                        <div class="product_info">
                                                            <h6 class="product_name"><?php the_title(); ?></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endif; ?>
                </div>
            </div>





        </div> <!-- end intro-wrap -->




</section>