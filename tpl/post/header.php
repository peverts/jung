<header class="post-header">
    <?php if(! $hide_links) { ?>
        <a href="<?= esc_url( get_permalink() ) ?>">
    <?php } ?>
        <h3 class="is-style-h3">
            <?= get_the_title(); ?>
        </h3>
    <?php if(! $hide_links) { ?>
        </a>
    <?php } ?>
</header>
