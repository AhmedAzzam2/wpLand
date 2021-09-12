<?php
/**
 * Sidebar Template.
 */

if ( is_active_sidebar( 'primary_widget_area' ) || is_archive() || is_single() ) :
?>
<div id="sidebar" class="col-md-3 order-md-first col-sm-12 oder-sm-last">
	<?php
		if ( is_active_sidebar( 'primary_widget_area' ) ) :
	?>
		<div id="widget-area" class="widget-area" role="complementary">
			<?php
				dynamic_sidebar( 'primary_widget_area' );

				if ( current_user_can( 'manage_options' ) ) :
			?>
				<span class="edit-link"><a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>" class="badge badge-secondary"><?php esc_html_e( 'Edit', 'wpland' ); ?></a></span><!-- Show Edit Widget link -->
			<?php
				endif;
			?>
		</div><!-- /.widget-area -->
	<?php
		endif;

		if ( is_archive() || is_single() ) :
	?>
		<div class="bg-faded sidebar-nav">
			<div id="primary-two" class="widget-area">
				<?php
					$output = '<div class="recentposts text-center">';
						$recentposts_query = new WP_Query( 'posts_per_page=5' ); // Max. 5 posts in Sidebar!
						$month_check = null;
						if ( $recentposts_query->have_posts() ) :
							$output .= '<div><h3>' . esc_html__( 'Recent Posts', 'wpland' ) . '</div></li>';
							while ( $recentposts_query->have_posts() ) :
								$recentposts_query->the_post();
								$output .= '<div style="width:222px; " class=" mb-2 shadow-lg img" >'; 

								$output .= '  
		'.get_the_post_thumbnail($post->ID,'full').'
		<a class="text-reset" href="' . esc_url( get_the_permalink() ) . '" title="' . sprintf( esc_attr__( 'Permalink to %s', 'wpland' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark">' . apply_filters( 'the_title', get_the_title() ) . '</a> ';
								$output .= '</div>';
							endwhile;
						endif;
						wp_reset_postdata();
					$output .= '</div>';

					echo $output;
				?> 
			</div><!-- /#primary-two -->
		</div>
	<?php
		endif;
	?>
</div><!-- /#sidebar -->
<?php
	endif;
?>
