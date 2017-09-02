<?php get_header(); ?>

<!-- Slider section
    ================================================== -->


<section id="slider" class="slider" data-type="background" data-speed="2">
    <div class="container">
        <div class="row">
        	<div class="slider-wrapper">
        		<div class="col-sm-4 col-sm-offset-1 col-xs-4 col-xs-offset-0">
	            	<div class="vert-align">
	            		<div class="mid">
		                    <img class="img-responsive" width="242" src="wp-content/uploads/2017/08/phone-vertical.png">
		                </div>
	            	</div>
	            </div>
	            <div class="col-sm-7 col-xs-7">
	            	<div class="vert-align">
	            		<div class="mid">
		                    <img class="img-responsive" width="490" src="wp-content/uploads/2017/08/phone-horizontal.png">
		                </div>
	            	</div>
	            </div>
        	</div>
        </div>
    </div>
</section> <!-- End Slider section -->

<div class="bg-bottom red"></div> <!-- Slider bottom -->


<!-- Services section
    ================================================== -->

<section id="services" class="services">
    <div class="container">
        <div class="row">
            <h2>Our Services</h2>
            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        </div>
        <div class="row icon-wrap">
            <div class="col-sm-4 col-xs-12">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                    	<div class="circle circle-purple">
                    		<div class="circle-inner">
                    			<span class="icon icon-pen"></span>
                    		</div>
                    	</div>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <h4>Custom Design</h4>
                        <p>Curabitur vestibulum eget mauris quis laoreet. Phasellus in quam laoreet, viverra lacus ut, ultrices velit.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                    	<div class="circle circle-purple">
                    		<div class="circle-inner">
		                    	<span class="icon icon-bulb"></span>
		                    </div>
		                </div>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <h4>Inovative Ideas</h4>
                        <p>Quisque luctus, quam eget molestie commodo, lacus purus cursus purus, nec rutrum tellus dolor id lorem.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                    	<div class="circle circle-purple">
                    		<div class="circle-inner">
 			                   	<span class="icon icon-heart"></span>
 			                </div>
 			            </div>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <h4>Love Is The Answer</h4>
                        <p>Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis. Quisque condimentum.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                    	<div class="circle circle-purple">
                    		<div class="circle-inner">
 			                   	<span class="icon icon-phone"></span>
 			             	</div>
 			            </div>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <h4>Responsive Layout</h4>
                        <p>Sed porttitor placerat rhoncus. In at nunc tellus. Maecenas blandit nunc ligula. Praesent elit leo.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                    	<div class="circle circle-purple">
                    		<div class="circle-inner">
 			                   	<span class="icon icon-bubble"></span>
 			                </div>
 			           </div>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <h4>24 / 7 Support</h4>
                        <p>Vivamus vel quam lacinia, tincidunt dui non, vehicula nisi. Nulla a sem erat. Pellentesque egestas venenatis lorem.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                    	<div class="circle circle-purple">
                    		<div class="circle-inner">
		                    	<span class="icon icon-star"></span>
		                    </div>
		                </div>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <h4>Feel Like A Star</h4>
                        <p>Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- End Services section -->


<div class="bg-bottom white"></div> <!-- Services bottom -->

<section class="portfolio">
	<div class="container">
		<div class="row">
			<h2>Portfolio</h2>
			<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
		</div>
		<div class="row">
			<div class="portfolio-wrapper">
				<?php
					$tiles = array(

							'bird',
							'boat',
							'castle',
							'envelope',
							'eyes',
							'girl',
							'monster',
							'robot',
							'sdk',
							'skunk',
							'space',
							'text'
						);

					foreach ($tiles as $tile ) { ?>
						<div class="col-md-3 col-sm-4">
							<div class="portfolio-img">
								<img class="img-responsive center-block" max-width="220" src="/wp-content/uploads/2017/08/project-tile-<?php echo $tile; ?>.jpg">
							</div>
						</div>
					<?php }
				?>
			</div>
		</div>
	</div>
</section>


<!-- About section
    ================================================== -->


<section id="about" class="about">
    <div class="container">
        <div class="row">
            <h2>About Us</h2>
            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        </div>
        <div class="row">
        	<div class="img-row">
        		<div class="col-sm-4">
                    <img class="img-responsive" max-width="300" src="wp-content/uploads/2017/08/photo-2.jpg">
                    <h4>Adam Jensen</h4>
                    <p>Quisque luctus, quam eget molestie commodo, lacus purus cursus purus, nec rutrum tellus dolor id lorem.</p>

	            </div>
	            <div class="col-sm-4">

	                   <img class="img-responsive" max-width="300" src="wp-content/uploads/2017/08/photo.jpg">
	                    <h4>Desmond Miles</h4>
	                    <p>Curabitur vestibulum eget mauris quis laoreet. Phasellus in quam laoreet, viverra lacus ut, ultrices velit.</p>

	            </div>
	            <div class="col-sm-4">

	                    <img class="img-responsive" max-width="300" src="wp-content/uploads/2017/08/photo-1.jpg">
	                    <h4>Scolara Visari</h4>
	                    <p>Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis. Quisque condimentum.</p>
	            </div>
        	</div>

        </div>
    </div>
</section> <!-- End About section -->


<div class="bg-bottom white"></div> <!-- About bottom -->


<!-- Quote section
    ================================================== -->


<section id="quote" class="quote">
    <div class="container">
        <div class="row">
            <h2>Get a Quote</h2>
            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>

            <!-- Form
            ================================================== -->

            <form class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="name" class="form-control" placeholder="Name (Required)">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="email" class="form-control" placeholder="Email (Required)">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="email" class="form-control" placeholder="Subject">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="form-control" rows="7" placeholder="Describe your project in detail..."></textarea>
                    </div>
                </div>
            </form> <!-- End form -->
        </div>
    </div>
</section> <!-- End Quote section -->

<div class="bg-bottom red"></div> <!-- Quote bottom -->



<?php get_footer(); ?>