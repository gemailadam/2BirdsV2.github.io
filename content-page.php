<div class="main-zxc">
	<div class="row">
		<div class="page-zxc col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

		<?php 
		
		if (have_posts()) {
			while (have_posts()) {
				the_post();
				echo '<div id="post-';the_ID();echo '"';post_class();echo '>';

				echo '<div class="post-wrapper-zxc">';

					echo '<h1 class="page-title-zxc"><a href="';the_permalink();echo '">';
					the_title();
					echo'</a></h1>';

					echo '<div class="page-body-zxc">';
					the_content();
					echo '</div>';

				echo '</div>';

				echo "</div>";
			}
		}
		
		?>

		</div>
		<!-- page column width END -->
	</div>
	<!-- row END -->
</div>
<!-- row END -->