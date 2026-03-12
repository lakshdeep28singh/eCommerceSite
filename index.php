<?php
/* Template Name: Custom Page Template */

// Include header
include get_template_directory() . '/header.html';
?>

<main id="main-content" class="site-main">
    <div class="container">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
        ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
        <?php
            endwhile;
        else :
            echo '<p>No content found.</p>';
        endif;
        ?>
    </div>
</main>

<?php
// Include footer
include get_template_directory() . '/footer.html';
?>