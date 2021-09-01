<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package braveandwray
 * @subpackage baw.base
 * @since braveandwray 1.0
 */

include 'post/load-vars.php';

?>

<article <?php post_class('post post--box post-projekt'); ?> id="post-<?php the_ID(); ?>">
	<div class="post-inner">

		<?php if(! $hide_images) { ?>
            <?php if( has_post_thumbnail() ) { ?>
                <?php if(! $hide_links) { ?>
                    <a aria-label="<?= get_the_title(); ?>" class="post-image" href="<?= esc_url( get_permalink()) ?>">
                        <?php } else { ?>
                        <div class="post-image">
                            <?php } ?>
                            <?php the_post_thumbnail(); ?>
                            <?php if(! $hide_links) { ?>
                    </a>
                    <?php } else { ?>
                </div>
                <?php } ?>
            <?php } ?>
		<?php } ?>

		<div class="post-content">
			<?php include 'post/header.php'; ?>
			<?php if(! $hide_descr) { ?>
				<?php the_excerpt(); ?>
			<?php } ?>
			<?php include 'post/footer.php'; ?>
		</div>

	</div>

</article>
