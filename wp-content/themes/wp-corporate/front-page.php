<?php
/**
 * The front page template file.
 *
 * @package WP_Corporate
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<!-- Hero Section -->
		<section class="hero">
			<div class="l-container">
				<div class="hero__inner l-asymmetric-grid">
					
					<div class="hero__text-box l-asymmetric-grid__item">
						<h2 class="hero__catchphrase">
							<span class="hero__catchphrase-inner">
								伝統と革新が、<br>
								交差する瞬間に。<br>
								次の100年を創る。
							</span>
						</h2>
					</div>

					<div class="hero__image-box l-asymmetric-grid__item">
						<figure class="hero__figure">
							<?php
							// Placeholder or dynamic image.
							// In a real theme, this might be a custom field or featured image.
							?>
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-factory.jpg' ); ?>" 
								 alt="伝統的な工場と最新技術の融合" 
								 class="hero__img"
								 loading="lazy">
						</figure>
					</div>

				</div>
			</div>
		</section>

		<!-- Products Section (Preview) -->
		<section class="products-preview l-container">
			<h3 class="section-title">主要製品</h3>
			<div class="l-asymmetric-grid">
				<?php
				$args = [
					'post_type'      => 'products',
					'posts_per_page' => 3,
				];
				$products_query = new WP_Query( $args );

				if ( $products_query->have_posts() ) :
					while ( $products_query->have_posts() ) :
						$products_query->the_post();
						?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'product-card l-asymmetric-grid__item' ); ?>>
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="product-card__image">
									<?php the_post_thumbnail( 'large' ); ?>
								</div>
							<?php endif; ?>
							<h4 class="product-card__title"><?php the_title(); ?></h4>
						</article>
						<?php
					endwhile;
					wp_reset_postdata();
				else :
					echo '<p>製品情報の準備中です。</p>';
				endif;
				?>
			</div>
		</section>

	</main>
</div>

<?php
get_footer();
