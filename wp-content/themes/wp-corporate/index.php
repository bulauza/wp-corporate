<?php
/**
 * Main template file.
 *
 * @package WP_Corporate
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile;
	else :
		echo '<p>内容が見つかりませんでした。</p>';
	endif;
	?>
</main>

<?php
get_footer();
