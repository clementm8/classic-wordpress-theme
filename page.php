<?php get_header(); ?>
<main>
    <div class="container">
        <?php the_post(); ?>
        <!-- is there a feature image set? -->
        <?php if (has_post_thumbnail()): ?>
            <?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
            <img src="<?= $featured_image[0]; ?>" alt='' class="img-fluid" />
        <?php endif; ?>

        <h1 class="page-title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
</main>

<?php get_footer(); ?>