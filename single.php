<?php
get_header()

?>




<section id="show-page">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1 class=""><?php echo the_title() ?></h1>
    <div style="background: center center no-repeat url('<?php  ?>');" class="image">
        <img src='<?php the_post_thumbnail_url('medium')?>' alt="">
    </div>
    <p class="content"><?php the_content()?></p>
    <?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</section>


<footer id="footer" >
    <div class="inside">
        <div class="icon">
            <img src="https://yt3.ggpht.com/yti/ANoDKi4Dk1P6ljahb5fvBDUETe96CZ3FClHFk_xxZZ6V=s88-c-k-c0x00ffffff-no-rj-mo" alt="">
            <h4 class="footer-title">Breaking the chains media inc.</h4>
            <span class="small-text">&copy; 2021 - All Rights Reserved</span>
        </div>
        <div class="extra-links">
            <ul>
                <a href="/">Home</a>
                
                <a href="/">About</a>
                
                <a href="">Privacy</a>
                <a href="">Twitter</a>

                <a href="">Facebook</a>
            </ul>
        </div>
    </div>
</footer>


<?php get_footer() ?>
