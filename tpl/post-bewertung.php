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


$data = get_field('review_daten', $theID);
$stars = $data['stars'] ?: false;

if($stars) {
	$stars = explode('.', $stars);
	$full_stars = $stars[0];
	$half_star = isset($stars[1]) ? true : false;
}

?>

<article <?php post_class('post post--box'); ?> id="post-<?php the_ID(); ?>">
	<div class="post-inner">
        <p class="post-stars">
            <?php if($stars) { ?>
                <?php for($i=0; $i<$full_stars; $i++) { ?>
                    <?= baw_svg('solid/star') ?>
                <?php } ?>
            <?php } ?>
            <?php if($half_star) { ?>
                <?= baw_svg('solid/star-half-alt') ?>
            <?php } ?>
        </p>
		<div class="post-content">
			<?php if(! $hide_descr) { ?>
                <div class="content-wrapper">
                    <?php the_excerpt(); ?>
                    <p style="text-align: center; font-weight: 500; font-size: 1.1em;"><a data-custom-open="dyn-modal" data-content="<?= urlencode($data['text']) ?>" data-title="<?= get_the_title() ?>" data-subtitle="<?= $data['subheadline'] ?>">weiterlesen</a></p>
                </div>
			<?php } ?>

            <div class="uk-flex uk-flex-middle uk-flex-center">
                <?php if(! $hide_images) { ?>
                    <?php the_post_thumbnail(); ?>
                <?php } ?>
                <header class="post-header">
                    <p class="post-title">
                        <strong><?= get_the_title() ?></strong>
                        <br />
                        <span class="subtitle">
                            <?php if($data['subheadline']) { ?>
                                <?= $data['subheadline'] ?>
                            <?php } ?>
                        </span>
                    </p>
                </header>
            </div>
		</div>

	</div>

</article>
