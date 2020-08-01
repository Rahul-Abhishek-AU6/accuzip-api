<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();?>
<!------------------------------------------Banner ------------------------------------------------->
 <section class="banner">
        <div id="main-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item item-1 active">
                    <img src="<?php echo esc_url(get_template_directory_uri());?>/img/ramka-white-belye-fon-frame-spring-flowers-tsvety-floral.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-center">
                        <h5>It is a long established </h5>
                        <h2> fact that a reader distracted</h2>
                        <a href="#0" class="btn btn-outline-primary">MORE INFO</a>
                    </div>
                </div>
                <div class="carousel-item item-1">
                    <img src="<?php echo esc_url(get_template_directory_uri());?>/img/pink-wooden-background-floral-flowers-spring-rozovyi-fon-der.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>It is a long established </h5>
                        <h2> fact that a reader distracted</h2>
                        <a href="#0" class="btn btn-outline-dark">MORE INFO</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#main-carousel" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#main-carousel" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
	<!----------------------------------------------------------------------------------------->
	 <section class="delivery__area py-4">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="row">
                        <div class="col-3"><i class="flaticon-smartphone"></i></div>
                        <div class="col">
                            <h5>Expert Support</h5>
                            <p><a href="#0">support@vividcluster.com</a> </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col-3"><i class="flaticon-shipped"></i></div>
                         <div class="col">
                            <h5>Cash On Delivery</h5>
                            <p> On Order Above ₹ 499</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col-3"><i class="flaticon-bargain"></i></div>
                        <div class="col">
                            <h5>Buyer discount</h5>
                            <p>Special Offer Every Month</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col-3"><i class="flaticon-gift"></i></div>
                        <div class="col">
                            <h5>Excellent quality</h5>
                            <p>Over 4K happy clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!----------------------------------------------------------------------------------------->
    <section class="catagories ">
        <div class="container">
            <div class="row grid">
                <div class="col-md-6">
                   
                <figure class="effect-ravi">
                    <img src="https://cdn.pixabay.com/photo/2016/01/19/17/48/woman-1149911_960_720.jpg" alt="img12" />
                    <figcaption>
                        <div>
                            <h2>ACCESSORIES </h2>
                            <p>ACCESSORIES  - Buy ACCESSORIES Online for men & women at best price in India.</p>
                        </div>
                        <a href="<?php echo esc_url(home_url('/'));?>product-category/accessories/">View more</a>
                    </figcaption>
                </figure>
           
                 
                </div>
                <div class="col-md-6">
                     <figure class="effect-ravi">
                    <img src="https://cdn.pixabay.com/photo/2017/06/02/14/11/girl-2366438_960_720.jpg" alt="img1" />
                    <figcaption>
                        <div>
                            <h2>WEDDING <span>COLLECTION</span></h2>
                            <p>WEDDING COLLECTION - Shop from the latest collection of WEDDING COLLECTION  for women & girls online.</p>
                        </div>
                        <a href="<?php echo esc_url(home_url('/'));?>product-category/wedding-collection/">View more</a>
                    </figcaption>
                </figure>
                </div>
            </div>
        </div>
    </section>
	<!----------------------------------------------------------------------------------------->
    <section class="popular">
        <div class="container">
            <header><meta charset="windows-1252">
                <h2>POPULAR COLLECTIONS</h2>
            </header>

            <div class="owl-carousel owl-theme owl-popular">
                <div class="item">
                    <div class="box">
                        <img src="<?php echo esc_url(get_template_directory_uri());?>/img/home-cat-01.png" alt="">
                        <div class="box-data">
                            <h4>Earrings</h4>
                            <a href="<?php echo esc_url(home_url('/'));?>product-category/ring/" class="btn">See the collection</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="<?php echo esc_url(get_template_directory_uri());?>/img/home-cat-01.png" alt="">
                        <div class="box-data">
                            <h4>kaleera</h4>
                            <a href="<?php echo esc_url(home_url('/'));?>product-category/kaleera/" class="btn">See the collection</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="<?php echo esc_url(get_template_directory_uri());?>/img/home-cat-01.png" alt="">
                        <div class="box-data">
                            <h4>Jewellery Set</h4>
                            <a href="<?php echo esc_url(home_url('/'));?>product-category/jewellery-set/" class="btn">See the collection</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="<?php echo esc_url(get_template_directory_uri());?>/img/home-cat-01.png" alt="">
                        <div class="box-data">
                            <h4>Bows</h4>
                            <a href="<?php echo esc_url(home_url('/'));?>product-category/bow/" class="btn">See the collection</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="<?php echo esc_url(get_template_directory_uri());?>/img/home-cat-01.png" alt="">
                        <div class="box-data">
                            <h4>footwear</h4>
                            <a href="<?php echo esc_url(home_url('/'));?>product-category/footwear/" class="btn">See the collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-------------------------------NEW PRODUCT ---------------------------------------------------------->
    <section class="popular products">
        <div class="container">
            <header>
               <h2>NEW PRODUCTS</h2>
            </header>
            <div class="row">
		   <?php  
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => 6
    );
    $loop = new WP_Query( $args );
    //	 echo '<pre>'; print_r($loop); 
    while ( $loop->have_posts() ) : $loop->the_post();
        global $product;
          $link=get_permalink();
      $img_url=get_the_post_thumbnail_url();
          $title= get_the_title();
        $id= get_the_id();
       $_product = wc_get_product( $id );
         $total_price= $_product->get_regular_price();
 $sale_price= $_product->get_sale_price();
  //$sale_prices = $_product->get_price();
  ?>
                <div class="col-md-4">
                    <div class="product__box text-center">
                        <div class="product__box-img">
                            <img src="<?php echo $img_url;?>" alt="">
                            <h4><a href="<?php echo $link ;?>" target="_blank"> View Details</a> </h4>
                        </div>
                        <div class="product__box-data">
                            <ul class="product__bag">
                              <li> 
                                    <a href="<?php echo esc_url(home_url('/'));?>product/?add_to_wishlist=<?php echo $id ?>">Add to Wishlist</a></li>
                                <li> <a href="<?php echo esc_url(home_url('/'));?>product/?add-to-cart=<?php echo $id ?>">Add to Cart</a></li>
                            </ul>
                            <div class="product-detail">
                                <h5> <a href="<?php echo $link ;?>" target="_blank"> <?php echo $title ;?> </a></h5>
                                <p><span class="old-price"> ₹ <?php echo $total_price;?> </span> ₹<?php echo $sale_price;?> </p>
                            </div>
                        </div>

                    </div>
                </div>
<?php    endwhile;
        wp_reset_query(); ?>
</div>
	 <div class="text-center my-3">
	 <a href="<?php echo esc_url(home_url('/'));?>product/" class="btn btn-outline-danger"> All Products</a>
	 </div>
 </div>
    </section>
	<!------------------------------------------------------------------------------------------------>	
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-none d-lg-block">
                    <ol class="carousel-indicators tabs">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                            <figure>
                                <img src="<?php echo esc_url(get_template_directory_uri());?>/img/justin.png" class="img-fluid" alt="Justin">
                            </figure>
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1">
                            <figure>
                                <img src="<?php echo esc_url(get_template_directory_uri());?>/img/priyanka.png" class="img-fluid" alt="Priyanka">
                            </figure>
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2">
                            <figure>
                                <img src="<?php echo esc_url(get_template_directory_uri());?>/img/maya.png" class="img-fluid" alt="maya">
                            </figure>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div id="carouselExampleIndicators" data-interval="false" class="carousel slide" data-ride="carousel">
                        <h3>WHAT OUR CLIENTS SAY</h3>
                        <h1>TESTIMONIALS</h1>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="quote-wrapper">
                                    <p> I ordered a beautiful custom made set for my Mehndhi function, statement rings for my bridesmaids, floral buds for my Jaggo hairstyle and bangle sets for my wedding guests and was so impressed with the quality and customer service I received from the beginning! Would highly recommend Vivid flora for all your wedding accessory needs! Thank you so much to the team !!!</p>
                                    <h3>Justine Pannu</h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="quote-wrapper">
                                    <p>Thank you for the prompt services, premium quality product with beautiful detailing and customer service according to our needs. You made our event memorable with such an amazing jewellery and favors...thank you team😊</p>
                                    <h3>Priyanka Singh </h3>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="quote-wrapper">
                                    <p>I ordered choker from vivid cluster, they delivered beautiful premium quality product as i have seen in picture !!</p>
                                    <h3>Maya Biliye</h3>
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <!--------------------------------------- BLOG    ---------------------------------------------------------->
    <section class="popular products home__blog bg-white">
    <div class="container">
       <header>
       <h2>OUR BLOG</h2>
        </header>
      <div  class="owl-carousel owl-theme owl-blog">
      <?php
global $post;
$args = array( 'posts_per_page' => 6, 'offset'=> 0, 'category' => 69 );
  $my_posts = new WP_Query($args);
$result = new WP_Query( $args ); 
   while ( $my_posts->have_posts() ) : $my_posts->the_post();
          $link=get_permalink();
       $img_url=get_the_post_thumbnail_url();
          $title= get_the_title();
           $content = get_the_content();
		   $content = strip_tags($content);
        $id= get_the_id();
   //$postcategories = wp_get_post_categories( $id );
  ?>
                <div class="item">
                    <div class="box">
                        <img src="<?php echo $img_url;?>" alt="">                        
                        <h4><a href="<?php echo get_the_category( $id )[1]->link;?>"><?php echo get_the_category( $id )[1]->name ;?></a></h4>
                        <h3><a href="<?PHP echo $link;?>"><?php echo $title ;?> </a></h3>
                        <p> <?php echo substr($content, 0, 100); ?> </p></p>
                        <h6> <?php echo get_the_date();?></h6>
                    </div>
                </div>
               <?php    endwhile; 
               wp_reset_query(); ?>                             
            </div>
        </div>
    </section>
	 <!--------------------------------------- INSTAFEED  ---------------------------------------------------------->
	 
   

	

   <?php get_footer(); ?>
