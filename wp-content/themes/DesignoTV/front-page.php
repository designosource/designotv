<?php 

    /*
        
        Template name: Homepage
        
    */

?>

<?php get_header(); ?>
    
    <?php if(have_posts()): while(have_posts()): the_post(); ?>

        <!-- MOBILE NAV  -->
        <div class="mobile-nav">
            <div class="center-items">
                <a href="#programma">Programma</a>
                <a href="#behind-the-scenes">Achter de schermen</a>
                <a href="#info">Praktische info</a>
            </div>
        </div>

        <!-- HEADER  -->
        <header>
            <video autoplay muted width="100%" height="100%">
                <source src="" type="video/webm">
                <source src="" type="video/mp4">
            </video>
            <div class="back"></div>
            <nav>
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-designotv.svg" alt="Logo DesignoTV"></a>
                <div class="wrap-items">
                    <a href="#programma" class="click">Programma</a>
                    <a href="#behind-the-scenes" class="click">Achter de schermen</a>
                    <a href="#info" class="click">Praktische info</a>
                    <a href="https://www.eventbrite.com/e/designoshow-tickets-34099928805" target="_blank" class="btn-tickets">Tickets</a>
                </div>
            </nav>
        </header>

        <!-- DESIGNOSHOW -->
        <div class="wrap-designoshow">
            <div class="designoshow__block">
                <h1>
                    DESIGNO
                    <br><br>
                    SHOW
                    <br><br>
                    2017
                </h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus arcu velit, ornare facilisis accumsan accumsan, interdum sit amet massa. Fusce sit amet congue dui, a molestie nunc. Sed sit amet tempor risus, vitae accumsan libero. Aenean sem felis, efficitur eu dapibus ac, dignissim porta est. Sed varius ipsum varius magna aliquet, eget elementum ex tincidunt. In quis orci ac orci feugiat bibendum in vitae urna. Donec congue posuere justo. Duis id ante et odio vestibulum euismod. Sed velit urna, porta non faucibus at, iaculis a tortor.
                </p>
                <a href="#tickets">Bestel jouw tickets<img src="<?php echo get_template_directory_uri(); ?>/images/arrow-right.svg" alt="Arrow right"></a>
            </div>
            <div class="designoshow__block">
                <div class="wrap-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/test.jpg" alt="Programma">
                </div>
            </div>
        </div>

        <!-- PROGRAMMAGIDS -->
        <div class="wrap-programma" id="programma">
            <div class="programma__title">Programmagids</div>
            <ul>
                <li class="generatie">
                    <div class="overlay slider"></div>
                    <div class="wrap-generatie__block">
                        <div class="generatie__block">
                            <div class="time">19u00</div>
                            <div class="title">De zesde<br><br>generatie</div>
                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus arcu velit, ornare facilisis accumsan accumsan, interdum sit amet massa. Fusce sit amet congue dui, a molestie nunc. Sed sit amet tempor risus, vitae accumsan libero.
                            </div>
                        </div>
                    </div>
                </li>
                <li class="generatie">
                    <div class="overlay slider"></div>
                    <div class="wrap-generatie__block">
                        <div class="generatie__block">
                            <div class="time">19u00</div>
                            <div class="title">De zesde<br><br>generatie</div>
                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus arcu velit, ornare facilisis accumsan accumsan, interdum sit amet massa. Fusce sit amet congue dui, a molestie nunc. Sed sit amet tempor risus, vitae accumsan libero.
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="wrap-behindthescenes" id="behind-the-scenes">
            <div class="wrapper">
                <h1 class="behindthescenes__title">Achter de schermen</h1>
                <p class="behindthescenes__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus arcu velit, ornare facilisis accumsan accumsan, interdum sit amet massa. Fusce sit amet congue dui, a molestie nunc. Sed sit amet tempor risus, vitae accumsan libero. Aenean sem felis, efficitur eu dapibus ac, dignissim porta est. </p>
                <div class="behindthescenes__timeline">
                    <div class="line"></div>
                    <?php
                        $loop = new WP_Query( array( 'post_type' => 'achter_de_schermen', "posts_per_page" => 2) );
                        if ( $loop->have_posts() ) : $count = 0;?>

                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                          
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

        <!-- RESERVEER JOUW TICKETS -->
        <div class="wrap-reserveer" id="tickets">
            <div class="overlay tickets"></div>
            <div class="reserveer__block">
                <div class="title">Reserveer<br><br>jouw tickets</div>
                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus arcu velit, ornare facilisis accumsan accumsan, interdum sit amet massa. Fusce sit amet congue dui, a molestie nunc. Sed sit amet tempor risus, vitae accumsan libero.
                </div>
                <a href="https://www.eventbrite.com/e/designoshow-tickets-34099928805" target="_blank">Reserveer nu</a>
            </div>
        </div>

        <!-- PRAKTISCHE INFO -->
        <div class="wrap-info" id="info">
            <div class="wrap-info__block">
                <div class="wrap-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/maps.png" alt="Info">
                </div>
            </div>
            <div class="wrap-info__block">
                <div class="center-mobile">
                    <div class="title">
                        Prakt
                        <br><br>
                        ische
                        <br><br>
                        info
                    </div>
                    <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus arcu velit, ornare facilisis accumsan accumsan, interdum sit amet massa. Fusce sit amet congue dui, a molestie nunc. Sed sit amet tempor risus, vitae accumsan libero. Aenean sem felis, efficitur eu dapibus ac, dignissim porta est.
                    </div>
                    <div class="wrap-details">
                        <div class="left">
                            <div class="item">Waar?</div>
                            <div class="item">Wanneer?</div>
                            <div class="item">Deuren?</div>
                            <div class="item">Start show?</div>
                        </div>
                        <div class="right">
                            <div class="item">Stadsschouwburg Mechelen</div>
                            <div class="item">15 juni 2017</div>
                            <div class="item">18u00</div>
                            <div class="item">19u00</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>
