<?php
/**
 * Created by PhpStorm.
 * User: sons
 * Date: 2018-05-17
 * Time: 오후 11:13
 */

get_header();

while( have_posts()) :
    the_post();
?>
    <a href="<?php echo get_permalink(); ?>">
        <h1><?php //the_title(); ?></h1>
    </a>
    <br/>

    <?php //the_content(); ?>

    <br/><br/>
<?php
endwhile;

get_footer();
?>
