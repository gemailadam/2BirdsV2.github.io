<div class="main-zxc">
	<div class="row">
		<div class="page-zxc col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
		<!-- page column width Start -->
		<div id="content" class="narrowcolumn author-zxc">

		<!-- This sets the $curauth variable -->

		<?php
		$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
		?>

		<h2>عن الكاتب <?php echo $curauth->nickname; ?></h2>
		<dl>
		<dt>الموقع الالكتروني الرسمي</dt>
		<dd><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></dd>
		<dt>لمحة عن الكاتب</dt>
		<dd><?php echo $curauth->user_description; ?></dd>
		</dl>

		<h2>نشر بواسطة <?php echo $curauth->nickname; ?>:</h2>

		<ul>
		<!-- The Loop -->

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<li>
		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>">
		<?php the_title(); ?></a>,
		<?php the_time('d M Y'); ?> in <?php the_category('&');?>
		</li>

		<?php endwhile; else: ?>
		<p><?php _e('لا يوجد منشورات للكاتب حتى الان'); ?></p>

		<?php endif; ?>

		<!-- End Loop -->

		</ul>
		</div>
		<!-- page column width END -->
		</div>

	</div>
</div>