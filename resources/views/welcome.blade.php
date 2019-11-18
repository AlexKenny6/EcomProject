<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700i|Roboto">

        <link href="css/fontawesome/css/fontawesome.css" rel="stylesheet">
        <link href="css/fontawesome/css/brands.css" rel="stylesheet">
        <link href="css/fontawesome/css/solid.css" rel="stylesheet">

        <title>Laravel</title>



    </head>
    <body>
        <header>
            <div class="top-nav container">
                <div class="logo">
                    CSS Grid Example
                </div>
                <ul>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Cart</a></li>
                </ul>
            </div> <!-- end of top-nav -->

            <div class="hero container">
                <div class="hero-copy">
                    <h1>CSS grid example</h1>
                    <p>Some paragraph text</p>
                    <a href="#" class="button button-white">Button 1</a>
                    <a href="#" class="button button-white">Button 2</a>
                </div>
            </div> <!-- end of buttons -->

            <div class="hero-image">
                <img src="#" alt="Hero image">
            </div>
        </header>
        <!-- End of header -->

        <div class="featured-section">
            <div class="container">
                <h1 class="text-center">CSS Grid Example</h1>
                <p class="section-description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae blanditiis cum deleniti doloribus ea eaque fugiat laboriosam rerum saepe unde?
                </p>
                <div class="text-center button-container">
                    <a href="#" class="button">Featured</a>
                    <a href="#" class="button">On Sale</a>
                </div>

                <div class="products text-center">
                    <div class="product">
                        <a href="#"><img src="img/example-shoes.jpg" alt="Product"></a>
                        <a href="#"><div class="product-name">Product 1</div></a>
                        <div class="product-price">$999</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/example-shoes.jpg" alt="Product"></a>
                        <a href="#"><div class="product-name">Product 1</div></a>
                        <div class="product-price">$999</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/example-shoes.jpg" alt="Product"></a>
                        <a href="#"><div class="product-name">Product 1</div></a>
                        <div class="product-price">$999</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/example-shoes.jpg" alt="Product"></a>
                        <a href="#"><div class="product-name">Product 1</div></a>
                        <div class="product-price">$999</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/example-shoes.jpg" alt="Product"></a>
                        <a href="#"><div class="product-name">Product 1</div></a>
                        <div class="product-price">$999</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/example-shoes.jpg" alt="Product"></a>
                        <a href="#"><div class="product-name">Product 1</div></a>
                        <div class="product-price">$999</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/example-shoes.jpg" alt="Product"></a>
                        <a href="#"><div class="product-name">Product 1</div></a>
                        <div class="product-price">$999</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/example-shoes.jpg" alt="Product"></a>
                        <a href="#"><div class="product-name">Product 1</div></a>
                        <div class="product-price">$999</div>
                    </div>
                </div>
                <!-- end product -->

                <div class="text-center button-container">
                    <a href="#" class="button">View more products</a>
                </div>
            </div>
            <!-- End of container -->
        </div>
        <!-- End of featured products -->

        <div class="blog-section">
            <div class="container">
                <h1 class="text-center">Our Blog Posts</h1>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, reprehenderit?</p>

                <div class="blog-posts">
                    <div class="blog-post">
                        <a href="#"><img src="#" alt="Blog Post Pic"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                        <div class="blog-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </div>
                    </div>
                    <div class="blog-post">
                        <a href="#"><img src="#" alt="Blog Post Pic"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                        <div class="blog-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </div>
                    </div>
                    <div class="blog-post">
                        <a href="#"><img src="#" alt="Blog Post Pic"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                        <div class="blog-description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </div>
                    </div>
                </div>
                <!-- End of blog posts -->
            </div>
            <!-- End of blog container -->
        </div>
        <!-- End of blog area -->

        <footer>
            <div class="footer-content container">
                <div class="made-width">Made With <i class="fa fa-heart"></i> and <i class="fas fa-mug-hot"></i> by Alex Kenny</div>
                <ul>
                    <li>Follow Me @</li>
                    <li><a href="#"><i class="fa fa-globe"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
            <!-- End of Footer Container -->
        </footer>
        <!-- End of Footer -->

    </body>
</html>
