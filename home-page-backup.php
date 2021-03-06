<?php
/*
Template Name: Home Page Backup
*/
?>

<?php get_header(); ?>
<section class="hero white">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<h1>Turn visitors into customers</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-lg-5 col-lg-offset-1">
						<h2>We help you make more money.</h2>
						<ul>
							<li>Get more page visits and customer sign ups.</li>
							<li>Improve visibility in search engines.</li>
							<li>Increase your conversion rate.</li>
							<li>Generate more revenue.</li>
						</ul>
						<p class="flat text-center"><a href="?page_id=10" class="btn btn-lg btn-primary">View case studies &raquo;</a></p>
					</div>
					<div class="col-sm-6 relative">
						<img src="<?php bloginfo('template_directory'); ?>/library/images/monitor.png" alt="" class="img-responsive">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="results grey">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<h1 class="flat">Compelling Results</h1>
						<p class="intro">We effectively move the needle for our clients with data-driven decisions.</p>
					</div>
				</div>
				<div class="row">
					<!-- Bootstrap Carousel -->
					<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="false">
						<div class="carousel-inner">
							<div class="item active">
								<?php
									global $post;
									$args = array( 'posts_per_page' => 3, 'category_name' => 'results', 'order' => 'ASC', 'orderby' => 'date' );
									$myposts = get_posts( $args );
									foreach( $myposts as $post ) :  setup_postdata($post);
								?>
								<div class="col-sm-3">
									<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>')">
										<h1><?php the_title(); ?></h1>
										<em><?php the_field('the_figure'); ?></em>
										<?php the_field('performance_metric'); ?> <?php the_field('time_frame'); ?>
										<!--<p class="flat text-center"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Find out how <i class="glyphicon glyphicon-chevron-right"></i></a></p>-->
									</article> <!-- end article -->
								</div>
								<!-- Close the loop -->
								<?php endforeach; ?>
								<?php wp_reset_postdata(); ?>
							</div>
							<div class="item">
								<?php
									global $post;
									$args = array( 'posts_per_page' => 3, 'category_name' => 'results', 'order' => 'ASC', 'orderby' => 'date', 'offset' => '3' );
									$myposts = get_posts( $args );
									foreach( $myposts as $post ) :  setup_postdata($post);
								?>
								<div class="col-sm-3 ">
									<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>')">
										<h1><?php the_title(); ?></h1>
										<em><?php the_field('the_figure'); ?></em>
										<?php the_field('performance_metric'); ?><br/> <?php the_field('time_frame'); ?>
										<!--<p class="flat text-center"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Find out how <i class="glyphicon glyphicon-chevron-right"></i></a></p>-->
									</article> <!-- end article -->
								</div>
								<!-- Close the loop -->
								<?php endforeach; ?>
								<?php wp_reset_postdata(); ?>
							</div>
							<div class="item">
								<?php
									global $post;
									$args = array( 'posts_per_page' => 3, 'category_name' => 'results', 'order' => 'ASC', 'orderby' => 'date', 'offset' => '6' );
									$myposts = get_posts( $args );
									foreach( $myposts as $post ) :  setup_postdata($post);
								?>
								<div class="col-sm-3">
									<article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting" style="background-image: url('<?php the_field('company_logo'); ?>')">
										<h1><?php the_title(); ?></h1>
										<em><?php the_field('the_figure'); ?></em>
										<?php the_field('performance_metric'); ?><br/> <?php the_field('time_frame'); ?>
										<!--<p class="flat text-center"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Find out how <i class="glyphicon glyphicon-chevron-right"></i></a></p>-->
									</article> <!-- end article -->
								</div>
								<!-- Close the loop -->
								<?php endforeach; ?>
								<?php wp_reset_postdata(); ?>
							</div>
						</div>
						<ol class="carousel-indicators">
							<li data-target="#carousel" data-slide-to="0" class="active"></li>
							<li data-target="#carousel" data-slide-to="1" class=""></li>
							<li data-target="#carousel" data-slide-to="2" class=""></li>
						</ol>
						<a class="left carousel-control" href="#carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a class="right carousel-control" href="#carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 text-center"><a href="#" class="btn btn-lg btn-primary">View more case studies <i class="glyphicon glyphicon-chevron-right"></i></a></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="how blue">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="flat">Our Services</h1>
				<p class="intro text-center">The foundation of our work is divided into three core departments.</p>
				<br><br>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-sm-4 bucket">
						<h2>Design &amp; Build</h2>
						<i class="icon rwd"></i>
						<ul>
							<li><a href="#">UX Research</a></li>
							<li><a href="#">User Testing</a></li>
							<li><a href="#">Responsive Web Design</a></li>
						</ul>
					</div>
					<div class="col-sm-4 bucket">
						<h2>Digital Marketing</h2>
						<i class="icon ppc"></i>
						<ul>
							<li><a href="#">SEM &amp; PPC</a></li>
							<li><a href="#">Display Advertising</a></li>
							<li><a href="#">Social</a></li>
						</ul>
					</div>
					<div class="col-sm-4 bucket">
						<h2>Measurement</h2>
						<i class="icon analytics"></i>
						<ul>
							<li><a href="#">Analytics</a></li>
							<li><a href="#">A/B Testing</a></li>
							<li><a href="#">Conversion Rate Optimization</a></li>
						</ul>
					</div>
				</div>
				<div class="row hide">
					<div class="col-lg-2 col-lg-offset-1 bucket">
						<i class="icon seo"></i>
						<h2>SEO</h2>
					</div>
					<div class="col-lg-2 bucket">
						<i class="icon rwd"></i>
						<h2>Responsive Design</h2>
					</div>
					<div class="col-lg-2 bucket">
						<i class="icon ppc"></i>
						<h2>Pay Per Click</h2>
					</div>
					<div class="col-lg-2 bucket">
						<i class="icon conversion"></i>
						<h2>Conversion <br class="visible-lg">Optimization</h2>
					</div>
					<div class="col-lg-2 bucket">
						<i class="icon ux"></i>
						<h2>UX</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="faq grey">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<h1>Frequently Asked Questions</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 col-md-8 col-md-offset-2">
						<?php if(get_field('faq')): ?>
		 
							<div class="panel-group" id="accordion">

							<?php while(has_sub_field('faq')): ?>

								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_sub_field('faq_id'); ?>" class="collapsed">
												<i class="glyphicon glyphicon-chevron-right"></i><i class="glyphicon glyphicon-chevron-down"></i>	<?php the_sub_field('faq_question'); ?>
											</a>
										</h4>
									</div>
									<div id="collapse<?php the_sub_field('faq_id'); ?>" class="panel-collapse collapse">
										<div class="panel-body">
											<?php the_sub_field('faq_answer'); ?>
										</div>
									</div>
								</div>
						
							<?php endwhile; ?>
						
							</div>
						
						<?php endif; ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($){
		$('.icon').addClass('shown');

		// Accordion
		$('#collapse1').addClass('in').parent().find('.panel-heading a').removeClass('collapsed');
	});
</script>

<?php get_footer(); ?>
