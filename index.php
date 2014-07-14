<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Number one
 */

get_header(); ?>


<div id="">
		<section class="featured">
			<div class="container"> 
				<div class="row mar-bot40">
					<div class="col-md-6 col-md-offset-3">
						
						<div class="align-center">
							<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" data-0="line-height:90px;" data-300="line-height:50px;">
								<?php 
								$descsite=get_option( 'desc_site');
								echo '<img src="'.$descsite[0].'" style="max-width: 150px; max-height: 150px;width: 150px;height: 150px;"></a>	'
								?>
							<h2 class="slogan">	<?php echo $descsite[1];?></h2>
							<p>
								<?php echo $descsite[2]; ?>
							</p>	
						</div>
					</div>
				</div>
			</div>
		</section>
</div>	


<div id="">	
		<!-- services -->
		<section id="section-services" class="section pad-bot30 bg-white">
		<div class="container"> 
		<div class="section-header" style="margin-bottom:30px;">
					    <h2 class="section-heading animated" data-animation="bounceInUp">Services</h2>
		</div>
            <?php 
            $n=count(get_option('imgservice')); 

            $x='imgservice';
            $titleserv='titleservice';
            $descserv='descservice';

for ($i=0; $i < $n; $i++) { 
             

			echo '<div class="col-lg-4" >';
				echo '<div class="align-center">';
					echo '<img src="'.get_option($x)[$i].'" style="height:120px;width:130px;margin-top:5px; max-width:120px;max-height:120px;">';
					echo '<h4 class="text-bold hserv" >'.get_option( $titleserv)[$i].'</h4>';
						echo ' <div class="box">';
     					 echo '  <div class="text">'.get_option( $descserv)[$i].'  </div>';
  					   echo '  </div>	';		
				echo '</div>';
			echo '</div>';
				}
				
		
			echo '</div>'	;
?>
	

		</div>
		</section>
			



</div>
<div id="">
		<!-- spacer section:testimonial -->
		<section id="testimonials" class="section" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">				
					<div class="col-lg-12">
							<div class="align-center">
										<div class="testimonial pad-top40 pad-bot40 clearfix">
											<h5>
												Nunc velit risus, dapibus non interdum quis, suscipit nec dolor. Vivamus tempor tempus mauris vitae fermentum. In vitae nulla lacus. Sed sagittis tortor vel arcu sollicitudin nec tincidunt metus suscipit.Nunc velit risus, dapibus non interdum.
											</h5>
											<br/>
											<span class="author">&mdash; MIKE DOE <a href="#">www.siteurl.com</a></span>
										</div>

								</div>
							</div>
					</div>
				
			</div>	
		</div>	
		</section>
			
		<!-- about -->
		<section id="section-about" class="section appear clearfix">
		<div class="container">

				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6">
						<div class="section-header">
							<h2 class="section-heading animated" data-animation="bounceInUp">Our Team</h2>
						</div>
					</div>
				</div>

					<div class="row align-center mar-bot40">
									            <?php 
            $n=count(get_option('imgteam')); 

            $x='imgteam';
            $namemem='nameteam';
            $descmem='descteam';

for ($i=0; $i < $n; $i++) { 
             

						echo'<div class="col-md-3">';
				echo'<div class="team-member">';
					echo'<figure class="member-photo"><img src="'.get_option($x)[$i].'" alt="" /></figure>';
					echo'<div class="team-detail">';
						echo'<h4>'.get_option( $namemem)[$i].'</h4>';
						echo'<span>'.get_option( $descmem)[$i].'</span>';
					echo'</div>';
				echo'</div>';
			echo'</div>';
				}
				
		
			echo '</div>'	;
?>
					</div>
						
		</div>
		</section>
		<!-- /about -->
</div>
<div id="">		
		<!-- spacer section:stats -->
		<section id="parallax1" class="section pad-top40 pad-bot40" data-stellar-background-ratio="0.5">
			<div class="container">
            <div class="align-center pad-top40 pad-bot40">
                <blockquote class="bigquote color-white">Indoctum accusamus comprehensam</blockquote>
				<p class="color-white">Bootstraptaste</p>
            </div>
			</div>	
		</section>
</div>
<div id="">		
		<!-- section works -->
		<section id="section-works" class="section appear clearfix">
			<div class="container">
				
				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6">
						<div class="section-header">
							<h2 class="section-heading animated" data-animation="bounceInUp" style="margin-bottom:20px;">Blog</h2>
						</div>
					</div>
				</div>
								                          <div class="row">
                          <nav id="filter" class="col-md-12 text-center">
                            <ul>

<?php $ar = array();
 while ( have_posts() ) : the_post(); 

$x=get_the_category();

$d = get_object_vars($x[0]);

$n=count($ar);

$var=0;
for ($i=0; $i <$n ; $i++) { 
	if ($ar[$i] == $d["name"]) {
		$var=1;		
	}

}
if ($var==1) {

}
else
{

if ($d["name"] == "Non classé")
{
	$par=array_push($ar,"Non-classe");
}
else
{
	$par=array_push($ar,$d["name"]);
}

	
}



endwhile; 
$n=count($ar);
						
                             echo  '<li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>';
for ($i=0; $i <$n ; $i++) { 

                             echo  ' <li><a href="#"  class="btn-theme btn-small" data-filter=".'.$ar[$i].'" >'.$ar[$i].'</a></li>';                    
                           }
                              ?>
                            
                            </ul>
                          </nav>


                          <div class="col-md-12">
                            <div class="row">
                              <div class="portfolio-items isotopeWrapper clearfix" id="3">
 <?php while ( have_posts() ) : the_post(); ?>
                           <?php      
							$x=get_the_category();

							$d = get_object_vars($x[0]);

							if ($d["name"] == "Non classé")
{
				echo '<article class="col-md-4 isotopeItem Non-classe">';
}
else
{
				echo '<article class="col-md-4 isotopeItem '.$d["name"].'">';
}
?>
									<div class="portfolio-item">

                         
				
<?php 


 $img = the_post_thumbnail('large');
 

?>
			



										 <div class="portfolio-desc align-center">
											<div class="folio-info">
												<?php	echo '<h5><a href="'.get_permalink().'">'.get_the_title().'</a></h5>';?>
											<?php	echo '	<a href="'.get_permalink().'" class="fancybox"><i class="fa fa-plus fa-2x"></i></a>';?>
											 </div>										   
										 </div>
									</div>
                                </article>

                                			<?php endwhile; ?>
                                </div>
                                        
							</div>
                                     

							</div>
                        </div>
				
			</div>
		</section>
		<section id="parallax2" class="section parallax" data-stellar-background-ratio="0.5">	
            <div class="align-center pad-top40 pad-bot40">
                <blockquote class="bigquote color-white">Indoctum accusamus comprehensam</blockquote>
				<p class="color-white">Bootstraptaste</p>
            </div>
		</section>
</div>
<div id="">
		<!-- contact -->
		<section id="section-contact" class="section appear clearfix">
			<div class="container">
				
				<div class="row mar-bot40">
					<div class="col-md-offset-3 col-md-6">
						<div class="section-header">
							<h2 class="section-heading animated" data-animation="bounceInUp">Contact us</h2>
							<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="cform" id="contact-form">
							<div id="sendmessage">
								 Your message has been sent. Thank you!
							</div>
							<form action="contact/contact.php" method="post" role="form" class="contactForm">
							  <div class="form-group">
								<label for="name">Your Name</label>
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
								<label for="email">Your Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
								<label for="subject">Subject</label>
								<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="maxlen:4" data-msg="Please enter at least 8 chars of subject" />
								<div class="validation"></div>
							  </div>
							  <div class="form-group">
								<label for="message">Message</label>
								<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
								<div class="validation"></div>
							  </div>
							  
							  <button type="submit" class="btn btn-theme pull-left">SEND MESSAGE</button>
							</form>

						</div>
					</div>
					<!-- ./span12 -->
				</div>
				
			</div>
		</section>

</div>
<div id="">		
	<section id="footer" class="section footer">
		<div class="container">
			<div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
				<div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>				
				</div>
			</div>

			<div class="row align-center copyright">
					<div class="col-sm-12"><p>Copyright &copy; 2014 Amoeba - by <a href="http://bootstraptaste.com">Bootstraptaste</a></p></div>
			</div>
		</div>

	</section>
	<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>	

	<script src="wp-content/themes/number-one/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="wp-content/themes/number-one/js/jquery.js"></script>
	<script src="wp-content/themes/number-one/js/jquery.easing.1.3.js"></script>
    <script src="wp-content/themes/number-one/js/bootstrap.min.js"></script>
	<script src="wp-content/themes/number-one/js/jquery.isotope.min.js"></script>
	<script src="wp-content/themes/number-one/js/jquery.nicescroll.min.js"></script>
	<script src="wp-content/themes/number-one/js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="wp-content/themes/number-one/js/skrollr.min.js"></script>		
	<script src="wp-content/themes/number-one/js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script src="wp-content/themes/number-one/js/jquery.localscroll-1.2.7-min.js"></script>
	<script src="wp-content/themes/number-one/js/stellar.js"></script>
	<script src="wp-content/themes/number-one/js/jquery.appear.js"></script>
	<script src="wp-content/themes/number-one/js/validate.js"></script>
    <script src="wp-content/themes/number-one/js/main.js"></script>
 
</html>