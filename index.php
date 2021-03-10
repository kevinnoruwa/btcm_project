<?php echo get_header() ?>


<section id="content">
    <h2><i class="fa fa-star" aria-hidden="true"></i> Recent post</h2>
    <div class="inside">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <a href="<?php the_permalink()?>">
        <div class="column">
            <div class="box">
                <div style="background: url('<?php the_post_thumbnail_url('medium'); ?>');" class="image">
                    <img src='<?php the_post_thumbnail_url('medium')?>' alt="">
                </div>
                <h3 class="title"><?php echo the_title()?></h3>
                <div class="small-text">
                    <div>
                        <span><?php echo get_the_date() ?></span>
                    </div>
                    <div>by Kev</div>
                </div>
            </div>
        </div>
        </a>
        <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

        
</section>


<section id ="side-bar">
    <div class="about-me-box">
        <div class="img">
            <img src="https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg" alt="">
        </div>
        <p>"I pledge allegiance to the Flag of the United States of America, and to the Republic for which it stands, one Nation under God, indivisible, with liberty and justice for all."</p>

        <nav class="icons">
            <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
            </a>
        </nav>
    </div>

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



 
<?php echo get_footer() ?>
