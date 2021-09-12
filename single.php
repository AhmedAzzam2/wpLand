<?php
/**
 * The Template for displaying all single posts.
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();

		get_template_part( 'content', 'single' );
?>


<?php

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
	endwhile;
endif;

wp_reset_postdata();

$count_posts = wp_count_posts();

if ( $count_posts->publish > '1' ) :
	$next_post = get_next_post();
	$prev_post = get_previous_post();
?>
<hr class="mt-5">
<div class="row justify-content-between mb-10">
	<?php
		if ( $prev_post ) {
			$prev_title = get_the_title( $prev_post->ID );
	?>
		<div class="col-6">
			
			<div class="row text-center mb-2 shadow-lg img">  
		<img src="<?php echo get_the_post_thumbnail_url( $prev_post->ID ) ?>" class="col-4 shadow" styLe=" height: 114px;">
		<a class="text-reset col-6 mx-auto"  href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" title="<?php echo esc_attr( $prev_title ); ?>"><?php echo esc_attr( $prev_title ); ?> 
	
			</a>
		
			<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
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
	<?php
		}
		if ( $next_post ) {
			$next_title = get_the_title( $next_post->ID );
	?>
	<div class="col-6">

        	<div class="row text-center mb-2 shadow-lg img">  
		<img src="<?php echo get_the_post_thumbnail_url( $next_post->ID ) ?>" class="shadow-lg col-4" styLe=" height: 114px;" >
		<a class="text-reset col-6 mx-auto"  href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" title="<?php echo esc_attr( $next_title ); ?>"><?php echo wp_kses_post( $next_title ); ?> </a>
	
		<ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
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
	<?php
		}
	?>
	
</div><!-- /.post-navigation -->

 
<?php
endif;

get_footer();
