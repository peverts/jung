<?php
if(! $hide_links) {
    $post_type = get_post_type_object(get_post_type());
    $post_type_labels = $post_type->labels;
    ?>

    <a class="button-plain" href="<?= esc_url( get_permalink() ) ?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="10.5" viewBox="0 0 14 10.5">
            <path id="arrow-right" d="M19.008,13.833H7.583a.583.583,0,0,1,0-1.167H19.008L15.338,9a.583.583,0,0,1,.825-.825l4.667,4.667a.583.583,0,0,1,0,.825l-4.667,4.667a.583.583,0,0,1-.825-.825Z" transform="translate(-7 -8)" fill="#0ea9a1"/>
        </svg>
        mehr erfahren
    </a>
<?php } ?>
