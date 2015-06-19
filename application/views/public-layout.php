
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="An Unlimited WordPress News & Magazine Theme with WooCommerce Support">
    <meta name="keywords" content="magazine template, news template">
    <meta name="author" content="themejunkie">

    <!-- Title -->
    <title>SuperNews</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('asset'); ?>css/style.css"/>   
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('asset'); ?>css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('asset'); ?>css/prettyPhoto.css"/> 
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('asset'); ?>css/colors/default.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo config_item('asset'); ?>css/responsive.css"/>

    <!-- Favicon -->
    <link type="image/x-icon" href="images/favicon.png" rel="shortcut icon">

</head>

<body class="layout-narrow">

    <!-- Page / Start -->   
    <div id="page" class="hfeed site clearfix">
        <!-- Masthead / Start -->
        <header id="masthead" class="site-header container clearfix" role="banner">

            <div id="primary-bar" class="clearfix">
                
                <a id="primary-mobile-menu" href="#"><i class="fa fa-bars"></i> Primary Menu</a>

                <!-- Primary Navigation / Start -->
                <nav id="primary-nav">

                    <ul id="primary-menu" class="sf-menu">
                        <li><a href="about.html">About</a></li>         
                        <li>
                            <a href="#">Mega Menu</a>
                            <ol class="sf-mega links">
                                <li>
                                    <span class="column-heading">Homepage & Listings</span>
                                    <ol>
                                        <li><a href="index.html">Default Homepage</a></li>
                                        <li><a href="index2.html">Homepage V2</a></li>         
                                        <li><a href="listing_classic.html">Classic Listing</a></li>
                                        <li><a href="listing_grid1.html">Grid Listing 1</a></li>
                                        <li><a href="listing_grid2.html">Grid Listing 2</a></li>
                                        <li><a href="listing_blog.html">Blog Style Listing</a></li>
                                    </ol>
                                </li>                               
                                <li>
                                    <span class="column-heading">Pre-defined Pages</span>                                   
                                    <ol>
                                        <li><a href="page.html">Default Single Page</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="author.html">Author Page</a></li>
                                        <li><a href="category.html">Archive & Category Page</a></li>

                                        <li><a href="full_width.html">Full Width Page</a></li>
                                        <li><a href="search.html">Search Results</a></li>                                   
                                    </ol>
                                </li>
                                <li>
                                    <span class="column-heading">Post Styles</span>
                                    <ol>
                                        <li><a href="post.html">Default Single Post</a></li>
                                        <li><a href="post_full.html">Full Width Post</a></li>                
                                        <li><a href="post_video.html">Post with Video</a></li>
                                        <li><a href="post_gallery.html">Post with Gallery</a></li>
                                        <li><a href="post_reviews.html">Post with Reviews</a></li>

                                        <li><a href="post.html#comments">Comments Example</a></li>
                                    </ol>
                                </li>                               
                            </ol><!-- .sf-mega -->
                        </li>                                                           
                        <li>
                            <a href="layout_s1_content_s2.html">Layouts</a>
                            <ul>
                                <li><a href="layout_s1_content_s2.html">Side 1 / Content / Side 2</a></li>
                                <li><a href="layout_content_s1_s2.html">Content / Side 1 / Side 2</a></li>
                                <li><a href="layout_content_s2_s1.html">Content / Side 2 / Side 1</a></li>
                                <li><a href="layout_content_s2.html">Content / Side 2</a></li>
                                <li><a href="layout_s2_content.html">Side 2 / Content</a></li>          
                            </ul>
                        </li>
                        <li>
                            <a href="shop_full.html">Shop</a>
                            <ul>
                                <li><a href="shop_full.html">Shop (full width)</a></li>
                                <li><a href="shop_sidebar.html">Shop (sidebar)</a></li>                             
                                <li><a href="product_full.html">Product (full width)</a></li>
                                <li><a href="product_sidebar.html">Product (sidebar)</a></li>
                                <li><a href="cart_full.html">Shopping Cart (full width)</a></li>                    
                                <li><a href="cart_sidebar.html">Shopping Cart (sidebar)</a></li>                    
                            </ul>                   
                        </li>
                            
                        <li><a href="typography.html">Typography</a></li>
                    </ul>

                </nav>
                <!-- Primary Navigation / End -->

                <!-- Header Cart / Start -->
                <div class="header-cart">
                    <ul class="sf-menu">
                        <li>
                            <a href="cart_full.html"><i class="fa fa-shopping-cart"></i><span class="amount">&pound;128.00</span> (3 items)</a>
                            <ul>
                                <li class="desc">3 items in the shopping cart</li>
                                <li class="clearfix">
                                    <a href="product_full.html"><img src="images/demo/product1.jpg" alt="Product Name"/></a>
                                    <a href="product_full.html" class="product-title">Flying Ninja</a>
                                    <span class="quantity">Unit Price: $50.00</span>
                                    <span class="quantity">Quantity: 1</span>
                                    <a href="#" class="product-remove">x</a>
                                </li>
                                <li class="clearfix">
                                    <a href="product_full.html"><img src="images/demo/product2.jpg" alt="Product Name"/></a>
                                    <a href="product_full.html" class="product-title">Happy Ninja</a>
                                    <span class="quantity">Unit Price: $50.00</span>
                                    <span class="quantity">Quantity: 1</span>
                                    <a href="#" class="product-remove">x</a>
                                </li>
                                <li class="clearfix">
                                    <a href="product_full.html"><img src="images/demo/product3.jpg" alt="Product Name"/></a>
                                    <a href="product_full.html" class="product-title">Premium Quality</a>
                                    <span class="quantity">Unit Price: $28.00</span>
                                    <span class="quantity">Quantity: 1</span>
                                    <a href="#" class="product-remove">x</a>
                                </li>                           
                                <li class="clearfix">
                                    <p class="cart-total">Subtotal <strong class="amount">&pound;128.00</strong></p>
                                    <p><button class="add_to_cart_button">View Shopping Cart</button>
                                    <button class="button">Proceed to Checkout</button></p>
                                </li>
                            </ul>
                        </li>
                    </ul><!-- .sf-menu -->
                </div>
                <!-- Header Cart / End -->              

            </div><!-- #primary-bar --> 
            
            <div id="logo">
                <a href="index.html"><img src="images/logo.png" alt="Logo Title" /></a>
                <!-- <h1 class="site-title"><a href="index.html">SuperNews</a></h1> -->
            </div>

            <div class="header-ad">
                <a href="#"><img src="images/728x90.png" alt=""/></a>
            </div>

            <div class="clearfix"></div>

            <!-- Secondary Bar / Start -->
            <div id="secondary-bar" class="clearfix">

                <a id="secondary-mobile-menu" href="#"><i class="fa fa-bars"></i> <span>Secondary Menu</span></a>

                <!-- Secondary Navigation / Start -->
                <nav id="secondary-nav">
                    <ul id="secondary-menu" class="sf-menu">
                        <li class="home_item current_item"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                        <li>
                            <a href="#">Features</a>
                            <ol class="sf-mega links">
                                <li>
                                    <span class="column-heading">Homepage & Listings</span>
                                    <ol>
                                        <li><a href="index.html">Default Homepage</a></li>
                                        <li><a href="index2.html">Homepage V2</a></li>         
                                        <li><a href="listing_classic.html">Classic Listing</a></li>
                                        <li><a href="listing_grid1.html">Grid Listing 1</a></li>
                                        <li><a href="listing_grid2.html">Grid Listing 2</a></li>
                                        <li><a href="listing_blog.html">Blog Style Listing</a></li>
                                    </ol>
                                </li>                               
                                <li>
                                    <span class="column-heading">Pre-defined Pages</span>                                   
                                    <ol>
                                        <li><a href="page.html">Default Single Page</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="author.html">Author Page</a></li>
                                        <li><a href="category.html">Archive & Category Page</a></li>

                                        <li><a href="full_width.html">Full Width Page</a></li>
                                        <li><a href="search.html">Search Results</a></li>                                   
                                    </ol>
                                </li>
                                <li>
                                    <span class="column-heading">Post Styles</span>
                                    <ol>
                                        <li><a href="post.html">Default Single Post</a></li>
                                        <li><a href="post_full.html">Full Width Post</a></li>                
                                        <li><a href="post_video.html">Post with Video</a></li>
                                        <li><a href="post_gallery.html">Post with Gallery</a></li>
                                        <li><a href="post_reviews.html">Post with Reviews</a></li>

                                        <li><a href="post.html#comments">Comments Example</a></li>
                                    </ol>
                                </li>                               
                            </ol><!-- .sf-mega -->
                        </li>                                                                           
                        <li>
                            <a href="category.html">Mega Menu</a>
                            <div class="sf-mega posts">
                                <ol class="sub-cats">
                                    <li><a href="category.html">Sub Category 1</a></li>
                                    <li><a href="category.html">Sub Category 2</a></li>
                                    <li><a href="category.html">Sub Category 3</a></li>
                                    <li><a href="category.html">Sub Category 4</a></li>
                                    <li><a href="category.html">Sub Category 5</a></li>                     
                                </ol><!-- .sub-cats -->
                                <div class="cat-posts">
                                    <div class="post-list">
                                        <a class="clearfix" href="post.html">
                                            <img class="entry-thumbnail" src="images/demo/37-150x85.jpg" alt="Post Title"/>
                                            <h2 class="entry-title">Nulla enim consequat amet congue</h2>
                                            <div class="entry-meta">28 Aug, 2014</div>                                          
                                        </a>
                                    </div><!-- .post-list -->
                                    <div class="post-list">
                                        <a class="clearfix" href="post.html">
                                            <img class="entry-thumbnail" src="images/demo/38-150x85.jpg" alt="Post Title"/>
                                            <h2 class="entry-title">Euismod amet leo cras et massa</h2>
                                            <div class="entry-meta">28 Aug, 2014</div>                                          
                                        </a>
                                    </div><!-- .post-list -->                           
                                    <div class="post-list">
                                        <a class="clearfix" href="post.html">
                                            <img class="entry-thumbnail" src="images/demo/35-150x85.jpg" alt="Post Title"/>
                                            <h2 class="entry-title">Tincidunt quam enim ac a pede</h2>
                                            <div class="entry-meta">28 Aug, 2014</div>                                          
                                        </a>
                                    </div><!-- .post-list -->

                                </div><!-- .cat-posts -->
                            </div><!-- .sf-mega .posts-->
                        </li>
                            <li>
                                <a href="listing_grid1.html">Business</a>
                                <ul>
                                    <li>
                                        <a href="listing_grid1.html">Sub Menu 1</a>
                                        <ul>
                                            <li>
                                                <a href="listing_grid1.html">Sub Menu 1.1</a>
                                                <ul>
                                                    <li><a href="listing_grid1.html">Sub Menu 1.1.1</a></li>
                                                    <li><a href="listing_grid1.html">Sub Menu 1.1.2</a></li>
                                                    <li><a href="listing_grid1.html">Sub Menu 1.1.3</a></li>
                                                </ul>                                   
                                            </li>
                                            <li><a href="listing_grid1.html">Sub Menu 1.2</a></li>
                                            <li><a href="listing_grid1.html">Sub Menu 1.3</a></li>
                                        </ul>                           
                                    </li>
                                    <li><a href="listing_grid1.html">Sub Menu 2</a></li>
                                    <li><a href="listing_grid1.html">Sub Menu 3</a></li>
                                </ul>
                            </li>                       
                            <li><a href="listing_grid2.html">Travel</a></li>            
                            <li><a href="listing_blog.html">Lifestyle</a></li>                          
                            <li><a href="category.html">Culture</a></li>
                    </ul>
                </nav>
                <!-- Secondary Navigation / End -->

                <div class="header-search">

                    <i class="fa fa-search"></i>
                    <i class="fa fa-times"></i>

                    <div class="search-form">
                        <form action="search.html" id="searchform" method="get">
                            <input name="s" type="text" />
                            <button type="submit">Search</button>
                        </form>
                    </div><!-- .search-form -->       

                </div><!-- .header-search -->       

            </div>  
            <!-- Secondary Bar / End -->

        </header>
        <!-- Masthead / End -->

        <!-- Site Main / Start -->
        <main id="main" class="site-main container" role="main" style="display:block">

            <div id="primary" class="content-area column">

                <!-- Featured Content / Start -->
                <div id="featured-content" class="category-box clearfix">

                    <div id="news-ticker" class="clearfix">
                        <span class="text">Headlines</span>
                        <ul class="news-list">
                            <li class="news-item">
                                <a href="post.html" rel="bookmark">Tips for getting started in travel writing</a> - <span class="entry-date">45 minutes ago</span>
                            </li>
                            <li class="news-item">
                                <a href="post.html" rel="bookmark">4 Surprising health benefits of tea</a> - <span class="entry-date">3 hours ago</span>
                            </li>
                            <li class="news-item">
                                <a href="post.html" rel="bookmark">The world's best hotel restaurants in 2014</a> - <span class="entry-date">21 hours ago</span>
                            </li>                                                       
                        </ul>
                        <span class="headline-nav">
                            <a class="headline-prev" href="#"><i class="fa fa-angle-left"></i></a>
                            <a class="headline-next" href="#"><i class="fa fa-angle-right"></i></a>
                        </span><!-- headline-nav -->
                    </div><!-- .news-ticker -->

                    <div id="carousel-0" class="jcarousel">

                        <ul>

                            <li>
                                <article class="hentry clearfix">
                                    <a href="post.html"><img class="entry-thumbnail" src="images/demo/42-728x410.jpg" alt="Post Title"/></a>
                                    <h2 class="entry-title"><a href="post.html" rel="bookmark">A New York City Travel Guide</a></h2>
                                    <div class="entry-meta">
                                        <span class="entry-stars"></span>               
                                        <span class="entry-date">Oct. 16, 2014</span>
                                        <span class="entry-comments"><a href="post.html#comments">5 Comments</a></span>
                                    </div><!-- .entry-meta -->  
                                    <div class="entry-summary">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                
                                    </div><!-- .entry-summary -->

                                    <div class="more-link">
                                        <a href="post.html">Read the rest of this entry</a>
                                    </div><!-- .more-link -->

                                </article><!-- .hentry -->
                            </li><!-- slide #1 -->

                            <li>
                                <article class="hentry clearfix">

                                    <a href="post.html"><img class="entry-thumbnail" src="images/demo/45-728x410.jpg" alt="Post Title"/></a>

                                    <h2 class="entry-title"><a href="post.html" rel="bookmark">How to Become a Fashion Photographer</a></h2>

                                    <div class="entry-meta">
                                        <span class="entry-stars"></span>               
                                        <span class="entry-date">Oct. 16, 2014</span>
                                        <span class="entry-comments"><a href="post.html#comments">5 Comments</a></span>
                                    </div><!-- .entry-meta -->  

                                    <div class="entry-summary">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                
                                    </div><!-- .entry-summary -->

                                    <div class="more-link">
                                        <a href="post.html">Read the rest of this entry</a>
                                    </div><!-- .more-link -->   

                                </article><!-- .hentry -->
                            </li><!-- slide #2 -->

                            <li>
                                <article class="hentry clearfix">

                                    <a href="post.html"><img class="entry-thumbnail" src="images/demo/44-728x410.jpg" alt="Post Title"/></a>

                                    <h2 class="entry-title"><a href="post.html" rel="bookmark">Will It Shred: iPad Becomes a Skateboard</a></h2>

                                    <div class="entry-meta">
                                        <span class="entry-stars"></span>               
                                        <span class="entry-date">Sep. 09, 2014</span>
                                        <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                                    </div><!-- .entry-meta -->

                                    <div class="entry-summary">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.                
                                    </div><!-- .entry-summary -->

                                    <div class="more-link">
                                        <a href="post.html">Read the rest of this entry</a>
                                    </div><!-- .more-link -->

                                </article><!-- .hentry -->
                            </li><!-- slider #3 -->

                        </ul>

                        <p class="jcarousel-pagination-0"></p>      

                        <a href="#" class="jcarousel-control-prev"><i class="fa fa-chevron-left"></i></a>
                        <a href="#" class="jcarousel-control-next"><i class="fa fa-chevron-right"></i></a>                      

                    </div><!-- #carousel-0 -->

                </div>
                <!-- Featured Content / End -->

                <!-- Content Block #1 / Start -->
                <section class="content-block-1 category-box clearfix">

                    <h3 class="section-title"><a href="category.html">Editor's Choice</a><span class="see-all"><a href="category.html">More</a></span></h3>

                    <ul class="clearfix">

                        <li>
                            <a href="post.html"><img class="entry-thumbnail" src="images/demo/1-216x121.jpg" alt=""/></a>   
                            
                            <h2 class="entry-title"><a href="post.html">Local ice cream shop grand opening</a></h2>
                            
                            <div class="entry-meta">
                                <span class="entry-date">Sep. 15, 2014</span>
                                <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>                    
                            </div><!-- .entry-meta -->                   
                           
                            <div class="entry-summary">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...
                            </div><!-- .entry-summary -->
                            
                            <div class="more-link">
                                <a href="post.html">Read the rest of this entry</a>
                            </div><!-- .more-link -->
                        </li>

                        <li>
                            <a href="post.html"><img class="entry-thumbnail" src="images/demo/2-216x121.jpg" alt=""/></a>   
                            
                            <h2 class="entry-title"><a href="post.html">Fruit chemical may prevent organ damage</a></h2>
                            
                            <div class="entry-meta">
                                <span class="entry-date">Sep. 15, 2014</span>
                                <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>                    
                            </div><!-- .entry-meta -->                  
                            
                            <div class="entry-summary">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...
                            </div><!-- .entry-summary -->
                            
                            <div class="more-link">
                                <a href="post.html">Read the rest of this entry</a>
                            </div><!-- .more-link -->               
                        </li>

                        <li>
                            <a href="post.html"><img class="entry-thumbnail" src="images/demo/3-216x121.jpg" alt=""/></a>
                            
                            <h2 class="entry-title"><a href="post.html">Sailor's ship was hit by kamikaze</a></h2>
                            
                            <div class="entry-meta">
                                <span class="entry-date">Sep. 15, 2014</span>
                                <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>                    
                            </div><!-- .entry-meta -->       
                            
                            <div class="entry-summary">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...
                            </div><!-- .entry-summary -->
                            
                            <div class="more-link">
                                <a href="post.html">Read the rest of this entry</a>
                            </div><!-- .more-link -->                 
                        </li>

                    </ul>

                </section>
                <!-- Content Block #1 / End -->

                <div class="content-ad">
                    <a href="http://www.theme-junkie.com/"><img src="images/728x90.png" alt="Post Title"/></a>
                </div><!-- .content-ad -->

                <!-- Content Block #2 / Start -->
                <section class="content-block-2 category-box clearfix">

                    <h3 class="section-title"><a href="category.html">Reviews</a> <span class="see-all"><a href="category.html">More</a></span></h3>

                    <ul>

                        <li class="article-first">

                            <a href="post_reviews.html"><img class="entry-thumbnail" src="images/demo/4-344x193.jpg" alt=""/></a>
                            
                            <h2 class="entry-title"><a href="post_reviews.html">UK new car sales hit 2m mark</a></h2>
                            
                            <div class="entry-meta">
                                <span class="entry-stars"></span>               
                                <span class="entry-date">Sep. 15, 2014</span>
                                <span class="entry-comments"><a href="post_reviews.html#comments">3 Comments</a></span>                 
                            </div><!-- .entry-meta -->

                            <div class="entry-summary">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet...
                            </div><!-- .entry-summary -->
                            
                            <div class="more-link">
                                <a href="post_reviews.html">Read the rest of this entry</a>
                            </div><!-- .more-link -->

                        </li><!-- .article-first -->

                        <li class="article-list">

                            <a href="post_reviews.html"><img class="entry-thumbnail" src="images/demo/5-52x52.jpg" alt=""/></a>

                            <h2 class="entry-title"><a href="post_reviews.html">Tips for your house painting project</a></h2>

                            <div class="entry-meta">
                                <span class="entry-stars"></span>               
                                <span class="entry-date">Sep. 15, 2014</span>
                                <span class="entry-comments"><a href="post_reviews.html#comments">3 Comments</a></span>     
                            </div><!-- .entry-meta -->

                        </li><!-- .article-list -->

                        <li class="article-list">

                            <a href="post_reviews.html"><img class="entry-thumbnail" src="images/demo/6-52x52.jpg" alt=""/></a>

                            <h2 class="entry-title"><a href="post_reviews.html">BDS students take the White House</a></h2>

                            <div class="entry-meta">
                                <span class="entry-stars"></span>               
                                <span class="entry-date">Sep. 15, 2014</span>
                                <span class="entry-comments"><a href="post_reviews.html#comments">3 Comments</a></span>     
                            </div><!-- .entry-meta -->

                        </li><!-- .article-list -->

                        <li class="article-list">

                            <a href="post_reviews.html"><img class="entry-thumbnail" src="images/demo/7-52x52.jpg" alt=""/></a>

                            <h2 class="entry-title"><a href="post_reviews.html">Big plans for Seaview Marina</a></h2>

                            <div class="entry-meta">
                                <span class="entry-stars"></span>               
                                <span class="entry-date">Sep. 15, 2014</span>
                                <span class="entry-comments"><a href="post_reviews.html#comments">3 Comments</a></span>     
                            </div><!-- .entry-meta -->  

                        </li><!-- .article-list -->

                        <li class="article-list">

                            <a href="post_reviews.html"><img class="entry-thumbnail" src="images/demo/8-52x52.jpg" alt=""/></a>

                            <h2 class="entry-title"><a href="post_reviews.html">The changing pensions landscape</a></h2>

                            <div class="entry-meta">
                                <span class="entry-stars"></span>               
                                <span class="entry-date">Sep. 15, 2014</span>
                                <span class="entry-comments"><a href="post_reviews.html#comments">3 Comments</a></span>     
                            </div><!-- .entry-meta -->

                        </li><!-- .article-list -->

                    </ul>

                </section>
                <!-- Content Block #2 / End -->

                <div class="content-ad">
                    <a href="http://www.theme-junkie.com/"><img src="images/728x90.png" alt=""/></a>
                </div><!-- .content-ad --> 

                <!-- Content Block #3 / Start -->
                <section class="content-block-3 category-box clearfix">

                    <div class="block block-left">

                        <h3 class="section-title"><a href="category.html">World News</a><span class="see-all"><a href="category.html">More</a></span></h3>

                        <ul>

                            <li class="article-first">

                                <a href="post.html"><img class="entry-thumbnail" src="images/demo/9-344x193.jpg" alt=""/></a>

                                <h2 class="entry-title"><a href="post.html">USA locations for sunrise sunset calendar</a></h2>

                                <div class="entry-meta">
                                    <span class="entry-stars"></span>        
                                    <span class="entry-date">Sep. 15, 2014</span>
                                    <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                                </div><!-- .entry-meta -->

                                <div class="entry-summary">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet...
                                </div><!-- .entry-summary -->

                                <div class="more-link">
                                    <a href="post.html">Read the rest of this entry</a>
                                </div><!-- .more-link -->

                            </li><!-- .article-first -->

                            <li class="article-list clearfix">

                                <a href="post.html"><img class="entry-thumbnail" src="images/demo/10-52x52.jpg" alt=""/></a>

                                <h2 class="entry-title"><a href="post.html">The world's best photos of hippotigris</a></h2>

                                <div class="entry-meta">
                                    <span class="entry-date">Sep. 15, 2014</span>
                                    <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                                </div><!-- .entry-meta -->

                            </li><!-- .article-list -->

                            <li class="article-list clearfix">

                                <a href="post.html"><img class="entry-thumbnail" src="images/demo/11-52x52.jpg" alt=""/></a>

                                <h2 class="entry-title"><a href="post.html">Dell attempts to reinvent the desktop PC</a></h2>

                                <div class="entry-meta">
                                    <span class="entry-date">Sep. 15, 2014</span>
                                    <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                                </div><!-- .entry-meta -->

                            </li><!-- .article-list -->

                            <li class="article-list clearfix">

                                <a href="post.html"><img class="entry-thumbnail" src="images/demo/12-52x52.jpg" alt=""/></a>

                                <h2 class="entry-title"><a href="post.html">The "Love Actually" guide to London</a></h2>

                                <div class="entry-meta">
                                    <span class="entry-date">Sep. 15, 2014</span>
                                    <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                                </div><!-- .entry-meta -->

                            </li><!-- .article-list -->

                        </ul>

                    </div><!-- .block .block-left -->

                    <div class="block block-right">

                        <h3 class="section-title"><a href="category.html">Business</a><span class="see-all"><a href="category.html">More</a></span></h3>

                        <ul>

                            <li class="article-first">

                                <a href="post.html"><img class="entry-thumbnail" src="images/demo/13-344x193.jpg" alt=""/></a>

                                <h2 class="entry-title"><a href="post.html">5 Unusual ways to stay fit and active</a></h2>

                                <div class="entry-meta">
                                    <span class="entry-stars"></span>        
                                    <span class="entry-date">Sep. 15, 2014</span>
                                    <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                                </div><!-- .entry-meta -->

                                <div class="entry-summary">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum, libero id imperdiet...
                                </div><!-- .entry-summary -->

                                <div class="more-link">
                                    <a href="post.html">Read the rest of this entry</a>
                                </div><!-- .more-link -->

                            </li><!-- .article-first -->

                            <li class="article-list clearfix">

                                <a href="post.html"><img class="entry-thumbnail" src="images/demo/14-52x52.jpg" alt=""/></a>

                                <h2 class="entry-title"><a href="post.html">Robbie take long road to graduation</a></h2>

                                <div class="entry-meta">
                                    <span class="entry-date">Sep. 15, 2014</span>
                                    <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                                </div><!-- .entry-meta -->

                            </li><!-- .article-list -->

                            <li class="article-list clearfix">

                                <a href="post.html"><img class="entry-thumbnail" src="images/demo/15-52x52.jpg" alt=""/></a>

                                <h2 class="entry-title"><a href="post.html">Lake Oahe's population improves</a></h2>

                                <div class="entry-meta">
                                    <span class="entry-date">Sep. 15, 2014</span>
                                    <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                                </div><!-- .entry-meta -->

                            </li><!-- .article-list -->

                            <li class="article-list clearfix">

                                <a href="post.html"><img class="entry-thumbnail" src="images/demo/16-52x52.jpg" alt=""/></a>

                                <h2 class="entry-title"><a href="post.html">Missing Fryeburg woman returns home</a></h2>

                                <div class="entry-meta">
                                    <span class="entry-date">Sep. 15, 2014</span>
                                    <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>
                                </div><!-- .entry-meta -->

                            </li><!-- .article-list -->

                        </ul>

                    </div><!-- .block .block-right -->

                </section>
                <!-- Content Block #3 / End -->

                <div class="content-ad">
                    <a href="#"><img src="images/728x90.png" alt=""/></a>
                </div><!-- .content-ad -->

                <!-- Content Block #4 / Start -->
                <section class="content-block-4 category-box clearfix">

                    <div class="block block-left">

                        <h3 class="section-title"><a href="category.html">Travel</a><span class="see-all"><a href="category.html">More</a></span></h3>

                        <ul>
                            <li class="article-first">

                                <a href="post.html"><img class="entry-thumbnail" src="images/demo/17-216x121.jpg" alt=""/></a>

                                <h2 class="entry-title"><a href="post.html">Tips for getting started in travel writing</a></h2>

                                <div class="entry-meta">
                                    <span class="entry-date">Sep. 15, 2014</span>
                                    <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>     
                                </div><!-- .entry-meta -->

                                <div class="entry-summary">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...
                                </div><!-- .entry-summary -->

                                <div class="more-link">
                                    <a href="post.html">Read the rest of this entry</a>
                                </div><!-- .more-link -->

                            </li><!-- .article-first -->

                            <li class="article-list">
                                <h2 class="entry-title"><a href="post.html">Football, made from a plane</a></h2>
                            </li><!-- .article-list -->

                            <li class="article-list">
                                <h2 class="entry-title"><a href="post.html">Be a cowboy, save a horse</a></h2>
                            </li><!-- .article-list -->

                            <li class="article-list">
                                <h2 class="entry-title"><a href="post.html">Seat reclining sparks skirmish</a></h2>
                            </li><!-- .article-list -->
                        </ul>

                    </div><!-- .block .block-left -->

                    <div class="block block-center">

                        <h3 class="section-title"><a href="category.html">Lifestyle</a><span class="see-all"><a href="category.html">More</a></span></h3>

                        <ul>
                            <li class="article-first">

                                <a href="post.html"><img class="entry-thumbnail" src="images/demo/18-216x121.jpg" alt=""/></a>

                                <h2 class="entry-title"><a href="post.html">4 Surprising health benefits of tea</a></h2>

                                <div class="entry-meta">
                                    <span class="entry-date">Sep. 15, 2014</span>
                                    <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>     
                                </div><!-- .entry-meta -->

                                <div class="entry-summary">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...
                                </div><!-- .entry-summary -->

                                <div class="more-link">
                                    <a href="post.html">Read the rest of this entry</a>
                                </div><!-- .more-link -->

                            </li><!-- .article-first -->

                            <li class="article-list">
                                <h2 class="entry-title"><a href="post.html">Sculptures as thin as a hair</a></h2>
                            </li><!-- .article-list -->

                            <li class="article-list">
                                <h2 class="entry-title"><a href="post.html">Trieste, the city of fashion</a></h2>
                            </li><!-- .article-list -->

                            <li class="article-list">
                                <h2 class="entry-title"><a href="post.html">World's most stylish bookstores</a></h2>
                            </li><!-- .article-list -->
                        </ul>

                    </div><!-- .block .block-center -->

                    <div class="block block-right">

                        <h3 class="section-title"><a href="category.html">Culture</a><span class="see-all"><a href="category.html">More</a></span></h3> 

                        <ul>
                            <li class="article-first">

                                <a href="post.html"><img class="entry-thumbnail" src="images/demo/19-216x121.jpg" alt=""/></a>

                                <h2 class="entry-title"><a href="post.html">The world's best hotel restaurants in 2014</a></h2>

                                <div class="entry-meta">
                                    <span class="entry-date">Sep. 15, 2014</span>
                                    <span class="entry-comments"><a href="post.html#comments">3 Comments</a></span>     
                                </div><!-- .entry-meta -->

                                <div class="entry-summary">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...
                                </div><!-- .entry-summary -->

                                <div class="more-link">
                                    <a href="post.html">Read the rest of this entry</a>
                                </div><!-- .more-link -->

                            </li><!-- .article-first -->

                            <li class="article-list">
                                <h2 class="entry-title"><a href="post.html">19 ways to blow your bonus</a></h2>
                            </li><!-- .article-list -->

                            <li class="article-list">
                                <h2 class="entry-title"><a href="post.html">Best Los Angeles theme bars</a></h2>
                            </li><!-- .article-list -->

                            <li class="article-list">
                                <h2 class="entry-title"><a href="post.html">Africa's best places to eat</a></h2>
                            </li><!-- .article-list -->
                        </ul>

                    </div><!-- .block .block-right -->

                </section>
                <!-- Content Block #4 / End -->

            </div>
            <!-- Primary / End -->

            <!-- Sidebar #1 / Start -->
            <div class="sidbear sidebar1 column">

                <div class="widget widget_latest_posts">

                    <h3 class="widget-title"><strong>Latest News</strong></h3>

                    <ul>
                        <li>
                            <a href="post.html"><img class="entry-thumbnail" src="images/demo/20-160x90.jpg" alt="Post Title"/></a>
                            <h2 class="entry-title"><a href="post.html">Nullam dictum metus in metus auctor</a></h2>
                            <div class="entry-meta">
                                <span class="entry-date">Sep. 15, 2014</span>
                            </div><!-- .entry-meta -->  
                        </li>

                        <li>
                            <a href="post.html"><img class="entry-thumbnail" src="images/demo/21-160x90.jpg" alt="Post Title"/></a>
                            <h2 class="entry-title"><a href="post.html">Fusce volutpat elementum augue felis</a></h2>
                            <div class="entry-meta">
                                <span class="entry-date">Sep. 15, 2014</span>
                            </div><!-- .entry-meta -->      
                        </li>

                        <li>
                            <a href="post.html"><img class="entry-thumbnail" src="images/demo/22-160x90.jpg" alt="Post Title"/></a>
                            <h2 class="entry-title"><a href="post.html">Aenean efficitur enim vel ultrices laoreet</a></h2>
                            <div class="entry-meta">
                                <span class="entry-date">Sep. 15, 2014</span>
                            </div><!-- .entry-meta -->      
                        </li>

                        <li>
                            <a href="post.html"><img class="entry-thumbnail" src="images/demo/23-160x90.jpg" alt="Post Title"/></a>
                            <h2 class="entry-title"><a href="post.html">What are the benefits of eating oranges?</a></h2>
                            <div class="entry-meta">
                                <span class="entry-date">Sep. 15, 2014</span>
                            </div><!-- .entry-meta -->      
                        </li>

                    </ul>
                </div><!-- .widget .widget_latest_posts-->

                <div class="widget widget_latest_comments">

                    <h3 class="widget-title"><strong>Opinions</strong></h3>

                    <ul>
                        <li>
                            <a href="post.html#comments">
                                <img class="avatar" src="images/demo/comment-avatar1.jpg" alt="Author Name"/>
                                <h3 class="name">Jack Lenox</h3>
                                <div class="comment">
                                    If you make yourself an ass, don't complain if people ride you.
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="post.html#comments">
                                <img class="avatar" src="images/demo/comment-avatar2.jpeg" alt="Author Name"/>
                                <h3 class="name">Kevin Koehler</h3>
                                <div class="comment">
                                    Keep good men company and you shall be of the number.
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="post.html#comments">
                                <img class="avatar" src="images/demo/comment-avatar3.jpeg" alt="Author Name"/>
                                <h3 class="name">Ben Lowery</h3>
                                <div class="comment">
                                    Experience is the father of wisdom and memory the mother.
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="post.html#comments">
                                <img class="avatar" src="images/demo/comment-avatar4.jpeg" alt="Author Name"/>
                                <h3 class="name">Neha Gajjar</h3>
                                <div class="comment">
                                    Happy is the man who learns from the misfortunes of others.
                                </div>
                            </a>
                        </li>                                                       
                    </ul>

                </div><!-- .widget .widget_latest_comments -->

                <div class="widget">
                    <h3 class="widget-title"><strong>General Widget</strong></h3>
                    <ul>
                        <li><a href="#">Just Another List Item 1</a></li>
                        <li><a href="#">Just Another List Item 2</a></li>
                        <li><a href="#">Just Another List Item 3</a></li>                               
                    </ul>                       
                </div><!-- .widget -->

                <div class="widget widget_ads">
                    <h3 class="widget-title">Sponsor</h3>
                    <a href="#"><img src="images/ad_160x600.png" alt=""/></a>
                </div><!-- .widget .widget_ads -->

            </div>
            <!-- Sidebar #1 / End -->

            <!-- Sidebar #2 / Start -->
            <div id="secondary" class="widget-area widget-primary sidebar2 column" role="complementary">

                <div class="widget widget_ads">
                    <h3 class="widget-title">Advertisement</h3>
                    <a href="http://www.theme-junkie.com/" target="_blank"><img src="images/ad_300x250.png" alt="Ad Widget" /></a>
                </div><!-- .widget .widget_ads -->

                <div class="widget widget_social clearfix">
                    <ul>
                        <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i><span><strong>5,600</strong></span><span>Followers</span></a></li>
                        <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i><span><strong>1,986</strong></span><span>Fans</span></a></li>            
                        <li><a href="#" title="GooglePlus"><i class="fa fa-google-plus"></i><span><strong>1,300</strong></span><span>In Circle</span></a></li>
                        <li><a href="#" title="RSS"><i class="fa fa-rss"></i><span><strong>20,000</strong></span><span>Subscribers</span></a></li>
                    </ul>
                </div><!-- .widget .widget_social -->

                <div class="widget widget_newsletter">
                    <h3 class="widget-title">Newsletter</h3>
                    <div class="newsletter-container">
                    <p>Subscribe to our newsletter to receive breaking news by email.</p>    
                    <form role="form">
                        <input type="text" placeHolder="Enter your email...">
                        <button class="btn" type="button">Signup</button>
                    </form>
                    </div>
                </div><!-- .widget .widget_newsletter -->

                <div class="widget widget_tabs">

                    <!-- Tabs Nav -->
                    <ul class="tabs-nav">
                        <li class="active"><a href="#tab1" title="Popular"><i class="fa fa-star"></i></a></li>
                        <li><a href="#tab2" title="Latest"><i class="fa fa-clock-o"></i></a></li>
                        <li><a href="#tab3" title="Comments"><i class="fa fa-comments"></i></a></li>        
                        <li><a href="#tab4" title="Tags"><i class="fa fa-tags"></i></a></li>
                    </ul>

                    <!-- Tabs Container -->
                    <div class="tabs-container">

                        <div class="tab-content" id="tab1">
                            <ul>
                                <li class="clearfix">
                                    <a href="post.html" rel="bookmark"><img class="entry-thumbnail" src="images/demo/41-64x64.jpg" alt="Post Title" /></a>
                                    <h2 class="entry-title"><a href="post.html" rel="bookmark">Nulla enim consequat amet congue</a></h2>
                                    <div class="entry-meta">16 Aug, 2014</div>
                                </li>
                                <li class="clearfix">
                                    <a href="post.html" rel="bookmark"><img class="entry-thumbnail" src="images/demo/30-64x64.jpg" alt="Post Title" /></a>
                                    <h2 class="entry-title"><a href="post.html" rel="bookmark">Will It Shred: iPad Becomes a Skateboard</a></h2>
                                    <div class="entry-meta">15 Aug, 2014</div>
                                </li>
                                <li class="clearfix">
                                    <a href="post.html" rel="bookmark"><img class="entry-thumbnail" src="images/demo/20-64x64.jpg" alt="Post Title" /></a>
                                    <h2 class="entry-title"><a href="post.html" rel="bookmark">Phasellus lorem aliquam</a></h2>
                                    <div class="entry-meta">14 Aug, 2014</div>
                                </li>
                                <li class="clearfix">
                                    <a href="post.html" rel="bookmark"><img class="entry-thumbnail" src="images/demo/10-64x64.jpg" alt="Post Title" /></a>
                                    <h2 class="entry-title"><a href="post.html" rel="bookmark">Sed do eiusmod tempor incididunt</a></h2>
                                    <div class="entry-meta">13 Aug, 2014</div>
                                </li>                                                   
                            </ul>                   
                        </div>

                        <div class="tab-content" id="tab2">
                            <ul>
                                <li class="clearfix">
                                    <a href="post.html" rel="bookmark"><img class="entry-thumbnail" src="images/demo/20-64x64.jpg" alt="Post Title" /></a>
                                    <h2 class="entry-title"><a href="post.html" rel="bookmark">Fusce volutpat elementum augue felis</a></h2>
                                    <div class="entry-meta">16 Aug, 2014</div>
                                </li>
                                <li class="clearfix">
                                    <a href="post.html" rel="bookmark"><img class="entry-thumbnail" src="images/demo/21-64x64.jpg" alt="Post Title" /></a>
                                    <h2 class="entry-title"><a href="post.html" rel="bookmark">Etiam maximus lacinia posuere nisl</a></h2>
                                    <div class="entry-meta">16 Aug, 2014</div>
                                </li>
                                <li class="clearfix">
                                    <a href="post.html" rel="bookmark"><img class="entry-thumbnail" src="images/demo/22-64x64.jpg" alt="Post Title" /></a>
                                    <h2 class="entry-title"><a href="post.html" rel="bookmark">Aenean efficitur enim vel ultrices laoreet</a></h2>
                                    <div class="entry-meta">16 Aug, 2014</div>
                                </li>
                                <li class="clearfix">
                                    <a href="post.html" rel="bookmark"><img class="entry-thumbnail" src="images/demo/23-64x64.jpg" alt="Post Title" /></a>
                                    <h2 class="entry-title"><a href="post.html" rel="bookmark">What are the benefits of eating oranges?</a></h2>
                                    <div class="entry-meta">16 Aug, 2014</div>
                                </li>                                                   
                            </ul>         
                        </div>

                        <div class="tab-content" id="tab3">
                            <ul>
                                <li class="clearfix">
                                    <a href="post.html#comments"><img class="entry-thumbnail" src="images/demo/comment-avatar1.jpg" alt="Author Name" /></a>
                                    <a href="post.html#comments"><strong>Jack Lenox</strong><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...</span></a>
                                </li>
                                <li class="clearfix">
                                    <a href="post.html#comments"><img class="entry-thumbnail" src="images/demo/comment-avatar2.jpeg" alt="Author Name" /></a>
                                    <a href="post.html#comments"><strong>Kevin Koehler</strong><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...</span></a>
                                </li>
                                <li class="clearfix">
                                    <a href="post.html#comments"><img class="entry-thumbnail" src="images/demo/comment-avatar3.jpeg" alt="Author Name" /></a>
                                    <a href="post.html#comments"><strong>Ben Lowery</strong><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...</span></a>
                                </li>
                                <li class="clearfix">
                                    <a href="post.html#comments"><img class="entry-thumbnail" src="images/demo/comment-avatar4.jpeg" alt="Author Name" /></a>
                                    <a href="post.html#comments"><strong>Neha Gajjar</strong><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus rutrum...</span></a>
                                </li>                                           
                            </ul>           
                        </div>   

                        <div class="tab-content" id="tab4">
                            <a href="#">WordPress</a>
                            <a href="#">Themes</a>
                            <a href="#">Plugins</a>
                            <a href="#">Hosting</a>
                            <a href="#">Web Design</a>
                            <a href="#">Web Dev</a>
                            <a href="#">Domain Name</a>
                            <a href="#">WP Engine</a>
                            <a href="#">Affiliates</a>
                            <a href="#">bbPress</a>         
                        </div>

                    </div>

                </div><!-- .widget .widget_tabs -->
                
                <div class="widget widget_ads">
                    <h3 class="widget-title">Advertisement</h3>  
                    <a href="http://www.theme-junkie.com/" target="_blank"><img src="images/ad_300x250_2.png" alt="Ad Widget" /></a>
                </div><!-- .widget .widget_ads -->

                <div class="widget widget_twitter">
                    <h3 class="widget-title"><strong>Latest Tweets</strong></h3>
                    <ul>
                        <li>RT <a href="#">@envato</a>: <a href="#">#WordPress</a> 3.9.2 is now available as a security release. It is strongly advised to update immediately. <a href="#">http://t.co/PPcIPyrkZz</a> <span class="timestamp"><a href="#">3 hours ago</a></span></li>
                        <li>Heatwave Offer. Sign up for an annual plan and get 3 months of free WP Engine <a href="#">#WordPress</a> hosting! Code: "HeatWave14" <a href="#">http://t.co/bsg79FCgvy</a> <span class="timestamp"><a href="#">1 day ago</a></span></li>
                        <li>BOOM! Theme Junkie is now 5 years old and we've got some presents for you! <a href="#">http://t.co/koSdMC7duxy</a> <span class="timestamp"><a href="#">3 days ago</a></span></li>          
                    </ul>
                </div><!-- .widget .widget_twitter -->

                <div class="widget widget_125">
                    <h3 class="widget-title"><strong>Sponsors</strong></h3> 
                    <a href="#"><img src="images/demo/125x125c.png" alt=""/></a>
                    <a href="#"><img class="img-right" src="images/demo/125x125e.jpg" alt=""/></a>
                    <a href="#"><img src="images/demo/125x125d.jpg" alt=""/></a>
                    <a href="#"><img class="img-right" src="images/demo/125x125f.png" alt=""/></a>
                </div><!-- .widget.widget_125 -->

                <div class="widget">
                    <h3 class="widget-title"><strong>General Widget</strong></h3>
                    <ul>
                        <li><a href="#">Just Another List Item 1</a></li>
                        <li><a href="#">Just Another List Item 2</a></li>
                        <li><a href="#">Just Another List Item 3</a></li>                               
                    </ul>                       
                </div><!-- .widget -->
                
                <div class="widget widget_ads">
                    <h3 class="widget-title">Advertisement</h3>  
                    <a href="http://www.theme-junkie.com/" target="_blank"><img src="images/ad_300x600.jpeg" alt="Ad Widget" /></a>
                </div><!-- .widget .widget_ads -->

            </div>
            <!-- Secondary / End -->

            <div class="clearfix"></div>

            <!-- Sidebar #2 / End -->       

            <!-- Carousel-1 / Start -->
            <section id="carousel-1" class="carousel-loop container clearfix">

                <h3 class="section-title"><a href="category.html">Must See Videos</a></h3>

                <div class="jcarousel">
                    <ul>
                        <li>
                            <article class="hentry post">
                                <a class="video-thumbnail" href="post_video.html" rel="bookmark">
                                    <img class="entry-thumbnail" src="images/demo/24-222x125.jpg" alt="Post Title" />
                                    <div class="video-icon"><i class="fa fa-play"></i></div>
                                </a>                            
                                <h2 class="entry-title"><a href="post.html" rel="bookmark">What are the benefits of eating oranges?</a></h2>
                                <div class="entry-meta">
                                    <span class="entry-date">Sep. 15, 2014</span>
                                </div>  
                            </article>                          
                        </li>
                        <li>
                            <article class="hentry post">
                                <a class="video-thumbnail" href="post_video.html" rel="bookmark">
                                    <img class="entry-thumbnail" src="images/demo/25-222x125.jpg" alt="Post Title" />
                                    <div class="video-icon"><i class="fa fa-play"></i></div>
                                </a>                                                        
                                <h2 class="entry-title"><a href="post.html" rel="bookmark">How much does it cost to rescue a horse?</a></h2>
                                <div class="entry-meta">
                                    <span class="entry-date">Sep. 15, 2014</span>
                                </div>                                      
                            </article>                          
                        </li>
                        <li>
                            <article class="hentry post">
                                <a class="video-thumbnail" href="post_video.html" rel="bookmark">
                                    <img class="entry-thumbnail" src="images/demo/26-222x125.jpg" alt="Post Title" />
                                    <div class="video-icon"><i class="fa fa-play"></i></div>
                                </a>                                                        
                                <h2 class="entry-title"><a href="post.html" rel="bookmark">Lectures on mountain winter risks</a></h2>
                                <div class="entry-meta">
                                    <span class="entry-date">Sep. 15, 2014</span>
                                </div>  
                            </article>                          
                        </li>
                        <li>
                            <article class="hentry post">
                                <a class="video-thumbnail" href="post_video.html" rel="bookmark">
                                    <img class="entry-thumbnail" src="images/demo/27-222x125.jpg" alt="Post Title" />
                                    <div class="video-icon"><i class="fa fa-play"></i></div>
                                </a>                                                        
                                <h2 class="entry-title"><a href="post.html" rel="bookmark">Sea Creatures: 100 waves to help a kid</a></h2>
                                <div class="entry-meta">
                                    <span class="entry-date">Sep. 15, 2014</span>
                                </div>                                      
                            </article>                          
                        </li>
                        <li>
                            <article class="hentry post">
                                <a class="video-thumbnail" href="post_video.html" rel="bookmark">
                                    <img class="entry-thumbnail" src="images/demo/28-222x125.jpg" alt="Post Title" />
                                    <div class="video-icon"><i class="fa fa-play"></i></div>
                                </a>                                                        
                                <h2 class="entry-title"><a href="post.html" rel="bookmark">Top five most scathing book reviews</a></h2>
                                <div class="entry-meta">
                                    <span class="entry-date">Sep. 15, 2014</span>
                                </div>
                            </article>                          
                        </li>
                        <li>
                            <article class="hentry post">
                                <a class="video-thumbnail" href="post_video.html" rel="bookmark">
                                    <img class="entry-thumbnail" src="images/demo/29-222x125.jpg" alt="Post Title" />
                                    <div class="video-icon"><i class="fa fa-play"></i></div>
                                </a>                                                        
                                <h2 class="entry-title"><a href="post.html" rel="bookmark">Nulla enim consequat amet congue</a></h2>
                                <div class="entry-meta">
                                    <span class="entry-date">Sep. 15, 2014</span>
                                </div>
                            </article>                          
                        </li>
                        <li>
                            <article class="hentry post">
                                <a class="video-thumbnail" href="post_video.html" rel="bookmark">
                                    <img class="entry-thumbnail" src="images/demo/30-222x125.jpg" alt="Post Title" />
                                    <div class="video-icon"><i class="fa fa-play"></i></div>
                                </a>                        
                                <h2 class="entry-title"><a href="post.html" rel="bookmark">Euismod amet leo cras et massa</a></h2>
                                <div class="entry-meta">
                                    <span class="entry-date">Sep. 15, 2014</span>
                                </div>
                            </article>                          
                        </li>
                        <li>
                            <article class="hentry post">
                                <a class="video-thumbnail" href="post_video.html" rel="bookmark">
                                    <img class="entry-thumbnail" src="images/demo/31-222x125.jpg" alt="Post Title" />
                                    <div class="video-icon"><i class="fa fa-play"></i></div>
                                </a>                            
                                <h2 class="entry-title"><a href="post.html" rel="bookmark">Phasellus lorem aliquam</a></h2>
                                <div class="entry-meta">
                                    <span class="entry-date">Sep. 15, 2014</span>
                                </div>
                            </article>                          
                        </li> 
                        <li>
                            <article class="hentry post">
                                <a class="video-thumbnail" href="post_video.html" rel="bookmark">
                                    <img class="entry-thumbnail" src="images/demo/32-222x125.jpg" alt="Post Title" />
                                    <div class="video-icon"><i class="fa fa-play"></i></div>
                                </a>                        
                                <h2 class="entry-title"><a href="post.html" rel="bookmark">Tincidunt quam enim ac a pede</a></h2>
                                <div class="entry-meta">
                                    <span class="entry-date">Sep. 15, 2014</span>
                                </div>
                            </article>                          
                        </li>                                                                         
                    </ul>
                </div><!-- .jcarousel -->

                <a href="#" class="jcarousel-control-prev"><i class="fa fa-angle-left"></i></a>
                <a href="#" class="jcarousel-control-next"><i class="fa fa-angle-right"></i></a>

            </section>
            <!-- Carousel-1 / End -->

        </main>
        <!-- Site Main / End -->
        
        <!-- Footer / Start --> 
        <footer id="footer" class="container clearfix">

            <div class="footer-column footer-column-1">
                <div class="widget">
                    <h3 class="widget-title">About</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div><!-- .widget -->
            </div><!-- .footer-column .footer-column-1 -->

            <div class="footer-column footer-column-2">
                <div class="widget widget_posts_thumbnail">
                    <h3 class="widget-title">Popular Posts</h3>
                    <ul>
                        <li>
                            <a href="post.html" rel="bookmark"><img src="images/demo/44-52x52.jpg" class="entry-thumbnail" alt="Post Title" /></a>
                            <a href="post.html" rel="bookmark">How to skateboard for beginners</a>
                            <div class="entry-meta">
                                <span class="entry-date">Sep. 15, 2014</span>
                            </div>                                  
                        </li>                   
                        <li>
                            <a href="post.html" rel="bookmark"><img src="images/demo/17-52x52.jpg" class="entry-thumbnail" alt="Post Title" /></a>
                            <a href="post.html" rel="bookmark">Tips for getting started in travel writing</a>
                            <div class="entry-meta">
                                <span class="entry-date">Sep. 15, 2014</span>
                            </div>  
                        </li>
                        <li>
                            <a href="post.html" rel="bookmark"><img src="images/demo/34-52x52.jpg" class="entry-thumbnail" alt="Post Title" /></a>
                            <a href="post.html" rel="bookmark">New life for old building in East Rochester</a>
                            <div class="entry-meta">
                                <span class="entry-date">Sep. 15, 2014</span>
                            </div>                                  
                        </li>                                               
                    </ul>
                </div><!-- .widget .widget_posts_thumbnail -->
            </div><!-- .footer-column .footer-column-2 -->

            <div class="footer-column footer-column-3">
                <div class="widget widget_twitter">
                    <h3 class="widget-title"><strong>Latest Tweets</strong></h3>
                    <ul>
                        <li>RT <a href="#">@envato</a>: <a href="#">#WordPress</a> 3.9.2 is now available as a security release. It is strongly advised to update immediately. <a href="#">http://t.co/PPcIPyrkZz</a> <span class="timestamp"><a href="#">3 hours ago</a></span></li>
                        <li>Heatwave Offer. Sign up for an annual plan and get 3 months of free WP Engine <a href="#">#WordPress</a> hosting! Code: "HeatWave14" <a href="#">http://t.co/bsg79FCgvy</a> <span class="timestamp"><a href="#">1 day ago</a></span></li>       
                    </ul>
                </div><!-- .widget .widget_twitter -->
            </div><!-- .footer-column .footer-column-3 -->

            <div class="footer-column footer-column-4">
                <div class="widget widget_newsletter">
                    <h3 class="widget-title">Newsletter</h3>
                    <p>Make sure you don't miss interesting happenings by joining our newsletter program. We don't do spam.</p>     
                    <form role="form">
                        <input type="text" placeHolder="Enter your email...">
                        <button class="btn" type="button">Signup</button>
                    </form>     
                </div><!-- .widget .widget_newsletter -->
            </div><!-- .footer-column .footer-column-4 -->                          

            <!-- Site Bottom / Start -->
            <div id="site-bottom" class="container clearfix">

                <nav id="footer-nav">
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Subscribe</a></li>                                                  
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Advertise</a></li>                          
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </nav><!-- #footer-nav -->

                <div class="copyright">
                    &copy; 2014 <a href="index.html">SuperNews</a> &middot; Designed by <a href="http://www.theme-junkie.com/">Theme Junkie</a>
                </div><!-- .copyright -->

            </div>
            <!-- Site Bottom / End -->

        </footer>
        <!-- Footer / End -->   

    </div>
    <!-- Page / End -->

    <!-- JavaScripts -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.matchHeight.js"></script>     
    <script type="text/javascript" src="js/hoverIntent.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>  
    <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.sidr.min.js"></script>
    <script type="text/javascript" src="js/retina.js"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
    <script type="text/javascript" src="js/jquery.custom.js"></script>
    <script type="text/javascript" src="js/analytics.js"></script><!-- FOR DEMO ONLY --> 

</body>
</html>
