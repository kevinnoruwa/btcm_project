<?php echo get_header() ?>

<?php 
         // setting uo the pod service 
            $mypod = pods("my_post");
            $mypod->find("name ASC");
?>
<section id="content">
    <h2><i class="fa fa-star" aria-hidden="true"></i> Recent post</h2>
    <div class="inside">
    <?php while($mypod->fetch()) : ?>
       <?php
        // get our varibles 
          $article_name= $mypod->field('article_name');
          $permalink = $mypod->field('permalink');
          $post_date = $mypod->field('post_date ');
          $article_date = $mypod->field('article_date');
          $article_time= $mypod->field('article_time');

          $row = $mypod->row();
                $post_id = $row['ID'];
                if (!function_exists('get_post_featured_image')) {
                  function get_post_featured_image($post_id, $size) {
                    $return_array = [];
                    $image_id = get_post_thumbnail_id($post_id);
                    $image = wp_get_attachment_image_src($image_id, $size);
                    $image_url = $image[0];
                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                    $image_post = get_post($image_id);
                    $image_caption = $image_post->post_excerpt;
                    $image_description = $image_post->post_content;
                    $return_array['id'] = $image_id;
                    $return_array['url'] = $image_url;
                    $return_array['alt'] = $image_alt;
                    $return_array['caption'] = $image_caption;
                    $return_array['description'] = $image_description;
                    return $return_array;
                  }
                }
                $image_properties = get_post_featured_image($post_id, 'full');


         
          ?>
          
    
        <a href="<?php echo $permalink?>">
        <div class="column">
            <div class="box">
                <div class="image">
                    <img src='<?php echo $image_properties[url]; ?>' alt="">
                </div>
                <h3 class="title"><?php echo $article_name ?></h3>
                <div class="small-text">
                    <div>
                        <span><?php echo $article_date ?></span>
                        <span><?php echo $article_time ?></span>
                    </div>
                    <div> by kev</div>
                </div>
            </div>
        </div>
        </a>
        <?php endwhile; ?>
    </div>

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
