<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

<section class="about hero">
	<div class="container">
		<div class="row col-lg-10 col-lg-offset-1">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="row">
				<div class="col-sm-6">
					<header>
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header>
					<p>ROI.works Search Marketing makes it easy for corporations and their advertising agencies to get a steady stream of new customers. </p>
					<a href="#data" class="btn btn-lg btn-primary">Hire us <i class="glyphicon glyphicon-chevron-right"></i></a>
				</div>
				<div class="col-sm-6 col-md-5 col-lg-4">
					<!-- <img src="<?php bloginfo('template_directory'); ?>/library/images/services-light.gif" class="img-responsive oversize"> -->
					&nbsp;
				</div>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>
<section class="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-12">
				<div class="row">
					<div class="col-sm-3 ">
						<div class="well">
							<h3>About</h3>
							<ul class="">
								<?php wp_list_pages('sort_column=menu_order&exclude=44&title_li=&child_of=12&link_before=<i class="glyphicon glyphicon-chevron-right"></i>'); ?>
							</ul>
						</div>
					</div>
					<div class="col-sm-9">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="row">
							<div class="col-sm-12">
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
									<?php the_content(); ?>
								</article> <!-- end article -->
							</div>
						</div>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>
<?php get_footer(); ?>