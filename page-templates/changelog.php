<?php
/**
 * Template Name: Changelog
 *
 */

get_header(); ?>

<header class="entry-header">
	<?php affwp_the_title(); ?>

	<?php
	$excerpt = $post->post_excerpt;
	
	if ( $excerpt )
		echo '<h2>' . $excerpt . '</h2>';
	?>
</header>

<div id="primary" class="content-area">
	<div class="wrapper">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php
				// Page thumbnail and title.
				affwp_post_thumbnail();

			//	affwp_the_title();
			?>

			<div class="entry-content">
				<?php
					$changelog = wpautop( get_post_meta( affwp_get_affiliatewp_id(), '_edd_sl_changelog', true ), true );
					echo apply_filters( 'the_content', $changelog );
				?>
			</div>
		</article>
	</div>
</div>
<?php
get_footer();
