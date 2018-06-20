<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body>

<!-- Header start -->

  <header>
    <div class="container flex-container">
      <div class="logo">
       
          <h2>BLU<span>E</span>ASY</h2>
        
      </div>
      <nav>
        <!--<ul class="navigation flex-container">
          <li>
            <a href="#projects">HOME</a>
          </li>
          <li>
            <a href="#about">SERVICES</a>
          </li>
          <li>
            <a href="#features">FEATURES</a>
          </li>
          <li>
            <a href="#portfolio">PORTFOLIO</a>
          </li>
          <li>
            <a href="#contact">CONTACT</a>
          </li>
        </ul>-->
        <div>
        <?php
          wp_nav_menu( array(
          'menu'            => 'header-menu',
          'menu_class'      => 'navigation flex-container',
          ));
        ?>
        </div>
      </nav>
    </div>
  </header>

<!-- Header end -->
   
<!-- Hero start -->

   <main id="projects">
   <?php 
    $background_id = get_field('fono_nuotrauka', 47);
    $background_id = wp_get_attachment_image_src($background_id, 'full')[0];
    
   ?>
    
    <section class="hero" style="background-image: url(<?= $background_id?>)">
      <div  class="container flex-container">
        <h1>"I'M LOOKING FOR THE UNEXPECTED.<br>I'M LOOKING FOR THINGS I'VE NEVER SEEN BEFORE."</h1>
      </div>
    </section>

<!-- Hero end -->

<!-- Services start -->

     <?php
      $servicesQuery = new WP_Query( array(
        'post_type'                  =>'services'
      ));
     ?>
     <section class="SERVICES" >
      <div class="container">
        <div class="heading-container">
          <h2 id="about"><span>SER</span>VICES</h2>
        </div>
        
        <div class="items-list">
          <ul class="flex-container">
          <?php
            if( $servicesQuery->have_posts()):
              while( $servicesQuery->have_posts()):
                $servicesQuery->the_post();
          ?>
          <!-- Cia ciklas prasideda -->
            <li>
              <div class="image">
                <img src="<?php the_field('ikonos_kodas', get_the_ID());?>" alt="coffee">
              </div>
              <div class="name">
                <h5><?php the_title();?></h5>
              </div>
              <div class="SERVICES">
                <p><?php the_field('paslaugos_aprasymas', get_the_ID());?></p>
              </div>
            </li>
           <!-- Cia ciklas Pasibaigs -->
           <?php endwhile; endif; ?>
          <!--
            <li>
              <div class="image">
                <img src="assests/icons/computer.png" alt="computer">
              </div>
              <div class="name">
                <h5>INSTANT</h5>
              </div>
                <div class="SERVICES">
                  <p>Apple pie icingsweet.Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. tiramisu applicake jujubes.</p>
                </div>
            </li>

            <li>
              <div class="image">
                <img src="assests/icons/dslr.png" alt="dslr">
              </div>
              <div class="name">
                <h5>SERIOUS</h5>
              </div>
              <div class="SERVICES">
                <p>Apple pie icingsweet.Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. tiramisu applicake jujubes.</p>
              </div>
            </li>

            <li>
              <div class="image">
                <img src="assests/icons/frame.png" alt="frame">
              </div>
              <div class="name">
                <h5>FRAME</h5>
              </div>
              <div class="SERVICES">
                <p>Apple pie icingsweet.Brownie jelly-o applicake applicake sweet roll liquorice bear claw. Jujubes carrot cake cotton candy sweet tart brownie. tiramisu applicake jujubes.</p>
              </div>
            </li>
          -->
          </ul>
        </div>
      </div>
    </section>

<!-- Service end -->

<!-- About start -->

    <section class="container flex-container">
            <div class="portfolio">
                <h2 id="portfolio"><span>POR</span>TFOLIO</h2>
            </div>
            <div class="portfolio-meniu">
            <nav>
              <ul class="navigation flex-container">
                <li>
                  <a href="">ALL</a>
                </li>
                <li>
                  <a href="">PANORAMAS</a>
                </li>
                <li>
                  <a href="">PORTRAITS</a>
                </li>
                <li>
                  <a href="">MACRO</a>
                </li>
                <li>
                  <a href="">JOURNAL</a>
                </li>
              </ul>
            </nav>
            </div>
    </section>

<!-- About end -->

<!-- Portfolio start -->

    <?php
      $portfolioQuery = new WP_Query( array(
        'post_type'                  =>'portfolio'
      ));
     ?>
    <section class="portfolio">
        <div class="container">
          <div class="items-list">
            <ul class="pictures">
            <?php
            if( $portfolioQuery->have_posts()):
              while( $portfolioQuery->have_posts()):
                $portfolioQuery->the_post();
          ?>
            <!-- Ciklas prasideda cia -->
              <li>
                <div class="foto"><div class="text">+</div></div>
                <img src="<?php the_field('portfolio_img', get_the_ID());?>" alt="bridge" class="over">
              </li>
            <!-- Ciklas baigiasi cia -->
            <?php endwhile; endif; ?>
  <!--
              <li>
                <div class="foto"><div class="text">+</div></div>
                <img src="assests/images/two.jpg" alt="smog" class="over">
              </li>

              <li>
                <div class="foto"><div class="text">+</div></div>
                <img src="assests/images/three.jpg" alt="roks" class="over">
              </li>

              <li>
                <div class="foto"><div class="text">+</div></div>
                <img src="assests/images/four.jpg" alt="tree" class="over">
              </li>

              <li>
                <div class="foto"><div class="text">+</div></div>
                <img src="assests/images/five.jpg" alt="house" class="over">
              </li>

              <li>
                <div class="foto"><div class="text">+</div></div>
                <img src="assests/images/six.jpg" alt="wave" class="over">
              </li>

              <li>
                <div class="foto"><div class="text">+</div></div>
                <img src="assests/images/seven.jpg" alt="peak" class="over">
              </li>

              <li>
                <div class="foto"><div class="text">+</div></div>
                <img src="assests/images/eight.jpg" alt="snow" class="over">
              </li>
  -->
            </ul>
          </div>
        </div>
    </section>

<!-- Portfolio end -->

<!-- Video start -->
  <?php
      $videoQuery = new WP_Query( array(
        'post_type'                  =>'just_default'
      ));
     ?>
    <div class="video">
      <div class="container">
        <div class="row">
          <div class="just col-lg-4">
             <h3><span>JUS</span>T DEFAULT SECTION</h3>
             <?php
            if( $videoQuery->have_posts()):
              while( $videoQuery->have_posts()):
                $videoQuery->the_post();
          ?>
             <p><?php the_field('just_paragraph', get_the_ID());?></p>
             <?php endwhile; endif; ?>
             <a class="button" href="">Visit me</a>
          </div>
          <div class="col-lg-8">
            <iframe src="https://player.vimeo.com/video/175629655" width="150%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

<!-- Video end -->

<!-- Twitter start -->
  <?php
      $twitterQuery = new WP_Query( array(
        'post_type'                  =>'twitter'
      ));
     ?>
    <div class="twitter">
      <div class="container">
        <div class="row ">
            <h2><span>TWI</span>TTER</h2>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <?php
            if( $twitterQuery->have_posts()):
              while( $twitterQuery->have_posts()):
                $twitterQuery->the_post();
          ?>
            <p><?php the_field('twitter', get_the_ID());?></p>
            <?php endwhile; endif; ?>
        </div>
      </div>
    </div>

<!-- Twitter end -->

<!-- Who is start -->
    <?php 
    $background_id = get_field( 'who_back', 97 );
    $background_id = wp_get_attachment_image_src($background_id, 'full')[0];
    ?>

    <?php
      $johnQuery = new WP_Query( array(
        'post_type'                  =>'john'
      ));
     ?>
    
    <div class="who-is" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(<?= $background_id?>);background-size:cover;background-position: 50% 50%;">
      <div class="container">
        <div class="row">
            <div class="heading">
              <h2 id="features"><span>WHO</span> IS JOHN DOE</h2>
            </div>  
          <div class="paragraph">
            <ul>
            <?php
            if( $johnQuery->have_posts()):
              while( $johnQuery->have_posts()):
                $johnQuery->the_post();
          ?>
              <li>
                <p><?php the_field('john_text', get_the_ID());?></p>
              </li>
              <?php endwhile; endif; ?>
              <!-- <li> -->
                <!-- <p>Pudding dessert jujubes tiramisu gingerbread croissant tiramisu applicake. Sesame snaps sugar plum cotton candy chocolate bonbon lemon drops candy canes cotton candy. Cake toffee pie bear claw pastry.</p> -->
              <!-- </li> -->
                <!-- <li> -->
                  <!-- <p>Muffin chupa chups jelly beans sweet pie applicake. Croissant chocolate cake I love pudding. Ice cream I love powder pudding apple pie marshmallow. Cupcake marzipan oat cake bonbon I love candy canes toffee.</p> -->
                <!-- </li> -->
                
                  <div class="social">
                    <div class="box"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                    <div class="box"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
                    <div class="box"><i class="fa fa-dribbble" aria-hidden="true"></i></div>
                    <div class="box"><i class="fa fa-coffee" aria-hidden="true"></i></div>
                  </div>
            </ul>
          </div>
        </div>
      </div>
    </div>

<!-- Who is end -->
   
<!-- Testimonial Start -->
  <?php
      $testimonialQuery = new WP_Query( array(
        'post_type'                  =>'testimonials'
      ));
     ?>
    <div class="testimonials">
      <div class="container">
        <div class="row">
          <div class="heading" >
            <h><span>TES</span>TIMONIALS</h2>
          </div>
            <i class="fa fa-quote-right" aria-hidden="true"></i>
          <div class="quote">
          <?php
            if( $testimonialQuery->have_posts()):
              while( $testimonialQuery->have_posts()):
                $testimonialQuery->the_post();
          ?>
              <p><?php the_field('testimonials_text', get_the_ID());?></p>
              <?php endwhile; endif; ?>
              <div class="bottom">-Walter White</div>
          </div>

        </div>
      </div>
    </div>

<!-- Testimonial end -->
    
<!-- Contact start -->
    
  <?php 
    $background_id = get_field( 'contact_back', 102 );
    $background_id = wp_get_attachment_image_src($background_id, 'full')[0];  
  ?>
  <?php
      $addressQuery = new WP_Query( array(
        'post_type'                  =>'address'
      ));
     ?>
    <div id="contact" class="contact" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(<?= $background_id?>);background-size:cover;background-position: 50% 50%;" >
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <h2 id="contact"><span>CON</span>TACT</h2>
            <p class="title">FULL NAME</p>
            <input class="input" type="text">
            <p class="title">EMAIL</p>
            <input class="input" type="text">
          </div>
          <div class="col-md-6">
            <div class="contactone"></div>
            <?php
            if( $addressQuery->have_posts()):
              while( $addressQuery->have_posts()):
                $addressQuery->the_post();
          ?>
            <p><?php the_field('address', get_the_ID());?></p>
            <?php endwhile; endif; ?>
            <address>
              Linda Newman<br>
              W325 State Road 123<br>
              Mondovi, WI(Wisconsin) 98746-54321<br>
              (715)946-1234
            </address>
          </div>
          <div class="col-md-12 ">
            <p class="title">MESSAGE</p>
            <textarea class="input message" type="text"></textarea>
          </div>
          <div class="col-md-4">
            <div class="box">
              <a href="" class="button">Message</a>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </main>

<!-- Contact end -->

<!-- Footer start -->
  
    <footer>
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-xs-10">
              <ul>
                <li><a href="#projects">Home</a></li>
                <li>|</li>
                <li><a href="#about">Services</a></li>
                <li>|</li>
                <li><a href="#features">Features</a></li>
                <li>|</li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li>|</li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
            <div class="col-xs-2">
              <div class="box">
                <p>2018&#169</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

<!-- Footer end -->

</body>
</html>