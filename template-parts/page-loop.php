<?php while(have_posts(  )): the_post(); ?>

    <h1 class="text-center text-primary"><?php the_title() ;?></h1>

        <?php 
            if( has_post_thumbnail() ):
                the_post_thumbnail('blog', array('class' => 'featured-image'));
            endif;
        ?>

        <?php the_content() ;?>

<?php endwhile ;?>

<!-- Keep up the good work Huff! -->