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
                    Benieuwd naar de websites, apps, peer projects en andere projecten waar Designosource zich het afgelopen jaar op gestort heeft? Of ben je gewoon benieuwd naar de werkwijze en de studenten? Op <b style="font-weight:bold">15 juni 2017</b> stelt de 6de generatie van Designosource voor jullie haar projecten voor in een totaal vernieuwde eindshow. <b style="font-weight:bold">Een unieke én inspirerende tv-beleving</b> vol verrassingen staat jullie te wachten in het prachtige decor van de Stadsschouwburg in Mechelen.
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
                <li class="generatie" style="background-image:url(https://scontent-bru2-1.xx.fbcdn.net/v/t35.0-12/18552922_1537447059612416_1622789525_o.jpg?oh=c6b3ccbfb43608aa7b80b9c675c09348&oe=59265FC3)">
                    <div class="overlay slider"></div>
                    <div class="wrap-generatie__block">
                        <div class="generatie__block">
                            <div class="time">19u00</div>
                            <div class="title">De zesde<br><br>generatie</div>
                            <div class="text">
                                De start van onze eigen late night talkshow. Yaron en Damon ontvangen samen spraakmakende Designosource-gasten én zorgen voor enorm veel fun met leuke tussendoortjes.
                            </div>
                        </div>
                    </div>
                </li>
                <li class="generatie">
                    <div class="overlay slider"></div>
                    <div class="wrap-generatie__block">
                        <div class="generatie__block">
                            <div class="time">20u30</div>
                            <div class="title">De Nacht<br><br>van het<br><br>gouden ei</div>
                            <div class="text">
                                Leer de Designosource studenten beter kennen tijdens deze receptie. Om het jaar in stijl af te sluiten bieden we graag een hapje en een drankje aan zodat we deze avond samen feestelijk kunnen beleven.
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="wrap-behindthescenes" id="behind-the-scenes">
            <div class="wrapper">
                <h1 class="behindthescenes__title">Achter de schermen</h1>
                <p class="behindthescenes__text">Benieuwd hoe onze Designoshow dit jaar tot stand is gekomen? Spot ons enthousiasme via deze exclusieve behind-the-scenes content. </p>
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
                    Reserveer nu je gratis tickets voor deze spetterende tv-avond en beleef de IMD-spirit van op de eerste rij tijdens DesignoTV.
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
                        De show vindt plaats in de Mechelse Stadsschouwburg, 8 minuten stappen van de gratis parking <b style="font-weight:bold">het Douaneplein</b>. Vanaf <b style="font-weight:bold">18u00</b> gaan de deuren open zodat je om <b style="font-weight:bold">19u00</b> kunt genieten van een wervelende Designoshow.
                    </div>
                    <div class="wrap-details">
                        <div class="left">
                            <div class="item">Waar</div>
                            <div class="item">Wanneer</div>
                            <div class="item">Deuren</div>
                            <div class="item">Start show</div>
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
