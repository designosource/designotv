<?php 

    /*
        
        Template name: Homepage
        
    */

?>

<?php get_header(); ?>
    


        <!-- MOBILE NAV  -->
        <div class="mobile-nav">
            <div class="center-items">
                <a href="<?php echo site_url(); ?>">Terug naar homepage</a>
            </div>
        </div>

        <!-- HEADER  -->
        <header class="small">
            <div class="back"></div>
            <nav>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-designotv.svg" alt="Logo DesignoTV"></a>
                <div class="wrap-items">
                    <a href="<?php echo site_url(); ?>">Terug naar homepage</a>
                    <a href="https://www.eventbrite.com/e/designoshow-tickets-34099928805" target="_blank" class="btn-tickets">Tickets</a>
                </div>
            </nav>
        </header>


        <div class="wrap-behindthescenes" id="behind-the-scenes">
            <div class="wrapper">
                <h1 class="behindthescenes__title">Achter de schermen</h1>
                <p class="behindthescenes__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus arcu velit, ornare facilisis accumsan accumsan, interdum sit amet massa. Fusce sit amet congue dui, a molestie nunc. Sed sit amet tempor risus, vitae accumsan libero. Aenean sem felis, efficitur eu dapibus ac, dignissim porta est. </p>
                <div class="behindthescenes__timeline">
                    <div class="line"></div>


                            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                          
                            <?php if($count % 2 == 0): ?>
                                <div class="item right">
                            <?php else: ?>
                                <div class="item left">
                            <?php endif; ?>
                                    <?php $video = get_field("video"); ?>
                                    <?php $color = get_field("color"); ?>
                                    <div class="col">
                                        <?php if(!empty($video)): ?>
                                            <div class="image <?php echo $color; ?>">
                                                <video width="100%">
                                                  <source src="<?php echo $video; ?>" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            </div>
                                        <?php else: ?>
                                            <div class="image purple">
                                                <img src="<?php the_field("image"); ?>">
                                            </div>
                                        <?php endif; ?>
                                        
                                          
                                        <h2><?php the_title(); ?></h2>
                                        <?php the_content(); ?>
                                    </div>
                                </div>

                        <?php $count++; endwhile; ?>
                    <?php endif; ?>
                
                </div>
            </div>
        </div>


<?php get_footer(); ?>
