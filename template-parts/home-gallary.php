<?php
$args = array('post_type' => 'gallery', 'posts_per_page' => -1, 'orderby' => array('meta_value_num' => 'ASC', 'ID' => 'ASC'));
$myQuery = new WP_Query($args);
?>

<section class="pb_section" pb_gallary_v1 data-section="gallary" id="section-gallary" style="padding: 17rem 0 !important;">

    <div class="multiple-items pb_slide_v1">

        <?php if ($myQuery->have_posts()) : ?>
            <?php while ($myQuery->have_posts()) : $myQuery->the_post() ?>
                <div class="projectItem" data-pop="<?php echo get_the_post_thumbnail_url(); ?>">
                    <a href="<?php the_permalink(); ?>" class="link-block">
                        <div style="height:220px;">
                            <img style="max-height:468px;" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="slide-text">
                            <h2 style="text-transform: capitalize !important;"><?php the_title(); ?></h2>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>


</section>