<?php use Roots\Sage\Titles; ?>

<article <?php post_class(); ?>>
    <header>
        <p class="post-title"><?php the_title(); ?></p>
        <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>
</article>
