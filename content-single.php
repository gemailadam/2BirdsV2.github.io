<div class="main-zxc">
	<div class="row">
		<div class="page-zxc col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

		<?php
		if (have_posts()) {
			while (have_posts()) {
				the_post();
				$logo_zxc=get_template_directory_uri() .'/images/circle.jpg';
				echo '<div id="post-';the_ID();echo '"';post_class();echo '>';

					echo '<div class="postedby">';

						echo '<p class="date-zxc">';
						echo '<a href="';the_permalink();echo '">';
						echo get_the_date('d-m-Y');
						echo '</a>';
						echo '</p>';

						echo '<p class="author-zxc">BY : ';
						the_author_posts_link();
						echo '</p>';

						echo '<p class="category-zxc">';
						the_category();
						echo '</p>';

					echo '</div>';
					echo '<!-- END post by class -->';


					echo '<div class="thumbnail-zxc">';
						the_post_thumbnail();
					echo '</div>';
					echo '<!-- END thumbnail class  -->';


					echo '<div class="avatar-zxc">';
					echo get_avatar( get_the_author_meta( 'ID' ), 64 );
					echo '</div>';
					echo '<!-- END avatar class  -->';

					echo '<div class="single-post-zxc title-zxc">';
					echo '<h1><a href="';the_permalink();echo '">';the_title();echo'</a></h1>';
						the_content();
					echo '</div>';
					echo '<!-- END single-post and title classes  -->';
					
				echo '</div>';
			}
		}

		echo '<div class="prevnext-zxc">';
		previous_post_link( );next_post_link( );
		echo '</div>';


		?>

		</div>
		<!-- page column width END -->
	</div>
	<!-- row END -->
</div>
<!-- main END you may change this if you want sidebar-->