<?php 

/* 
*Template Name: Page with sidebar
*/

get_header(); ?>

    <main class="container page section with-sidebars">

        <div class="page-content">
            <?php while(have_posts(  )): the_post(); ?>

                <h1 class="text-center text-primary"><?php the_title() ;?></h1>

                <?php 
                    if( has_post_thumbnail() ):
                    the_post_thumbnail('blog', array('class' => 'featured-image'));
                    endif;
                ?>

            <?php the_content() ;?>

            <?php endwhile ;?>
        </div>

        <aside>
            <h2>Sidebar Here</h2>
        </aside>
    </main>

<?php get_footer(); ?> 