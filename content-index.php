<?php
/**
 * The template for displaying content in the index.php template.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12' ); ?>>


	<div class="card shadow-lg text-center">
		<!-- Card img -->
		<div class="position-relative">
			<img class="card-img shadow-lg" style="height: 333px; border-radius:1rem" src="<?php echo the_post_thumbnail_url( ) ?>" >
			<div class="card-img-overlay d-flex align-items-start flex-column p-3">
				<!-- Card overlay bottom -->
				<div class="w-100 mt-auto">
					<!-- Card category --> 
				</div>
			</div>
		</div>
		<div class="card-body px-0 pt-3">
			<h4 class="card-title">
				
			<a class="btn-link text-reset fw-bold" href="<?php the_permalink(); ?>"
					title="<?php printf( esc_attr__( 'Permalink to %s', 'wpland' ), the_title_attribute( 'echo=0' ) ); ?>"
					rel="bookmark">
					<?php the_title(); ?>
				</a>
			</h4>
			<!-- Card info -->
			<ul class="nav nav-divider align-items-center small d-none d-sm-inline-block">
				<li class="nav-item">
					<div class="nav-link">
						<div class="d-flex align-items-center position-relative">
							<div class="avatar avatar-xs">

							<?php 
							$img = esc_attr( get_the_author_meta( 'image', $post->post_author ) );
							if ($img) {
								echo '<img class="avatar-img rounded-circle" src="'.$img.'" alt="avatar">';
							}
							elseif( get_avatar( get_the_author_meta( 'ID' ), 60 ) ){
								echo get_avatar( get_the_author_meta( 'ID' ), 60 );
							} ?>							</div>
							<span class="ms-3"><? get_avatar_data( ) ?><a href="<?php ECHO get_author_posts_url($post->post_author)  ?>"
									class="stretched-link text-reset btn-link"><?php ECHO get_author_name()  ?></a></span>
						</div>
					</div>
				</li>
				<li class="nav-item"> <?php echo  get_the_date() ?></li>
			</ul>
		</div>
	</div>

 
</article><!-- /#post-<?php the_ID(); ?> -->