<?php
/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();

$page_id = get_option( 'page_for_posts' );
?>
<div class="row"> 
   
<section class="pt-4">
	<div class="container">
		<div class="row">
			<div class="col-md-12" style='direction: ltr;'>
				<!-- Title -->
        <div class="m-0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-fill" viewBox="0 0 16 16">
  <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A5.921 5.921 0 0 1 5 6.708V2.277a2.77 2.77 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354z"/>
</svg>  pin</div>
				<div class="mb-4 d-md-flex justify-content-between align-items-center">
					<div class="m-0"> </div>
				</div>
				<div class="tiny-slider arrow-hover arrow-blur arrow-dark arrow-round shadow-lg">
					<div class="tiny-slider-inner"
						data-autoplay="true"
						data-hoverpause="true"
						data-gutter="24"
						data-arrow="false"
						data-dots="false"
						data-items-xl="4" 
						data-items-md="3" 
						data-items-sm="2" 
						data-items-xs="1">

						<!-- Card item START -->
						<?php echo wpb_rand_posts2(); ?>
						<!-- Card item END -->
						

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Section END -->
	<div class="col-md-12 ">
        <div class="m-0"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-post" viewBox="0 0 16 16">
  <path d="M4 3.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-8z"/>
  <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
</svg>  new posts</div>
		<?php
			get_template_part( 'archive', 'loop' );
		?>
	</div><!-- /.col -->
</div><!-- /.row -->



<!-- Divider -->
<div class="container"><div class="border-bottom border-primary border-2 opacity-1"></div></div>
 

</main>
<!-- **************** MAIN CONTENT END **************** -->



<?php

get_footer();
