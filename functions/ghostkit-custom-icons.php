<?php

add_filter( 'gkt_icons_list', 'my_gkt_icons' );
function my_gkt_icons( $icons ) {
    $icons['my-icons-pack'] = array(
        'name' => 'JUNG Icons',
        'icons' => array(
            array(
                'keys' => '',
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="10.5" viewBox="0 0 14 10.5" fill="none"><path id="arrow-right" d="M19.008,13.833H7.583a.583.583,0,0,1,0-1.167H19.008L15.338,9a.583.583,0,0,1,.825-.825l4.667,4.667a.583.583,0,0,1,0,.825l-4.667,4.667a.583.583,0,0,1-.825-.825Z" transform="translate(-7 -8)" fill="currentColor"/></svg>',
            ),
            array(
                'keys' => '',
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="10.5" height="14" viewBox="0 0 10.5 14" fill="none"><path id="arrow-right" d="M19.008,13.833H7.583a.583.583,0,0,1,0-1.167H19.008L15.338,9a.583.583,0,0,1,.825-.825l4.667,4.667a.583.583,0,0,1,0,.825l-4.667,4.667a.583.583,0,0,1-.825-.825Z" transform="translate(18.5 -7) rotate(90)" fill="currentColor"/></svg>',
            ),
            array(
                'keys' => '',
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="44" height="44" viewBox="0 0 44 44"><defs><filter id="checkmark-circle" x="0" y="0" width="44" height="44" filterUnits="userSpaceOnUse"><feOffset input="SourceAlpha"/><feGaussianBlur stdDeviation="2" result="blur"/><feFlood flood-color="#00fff2"/><feComposite operator="in" in2="blur"/><feComposite in="SourceGraphic"/></filter></defs><g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#checkmark-circle)"><path id="checkmark-circle-2" data-name="checkmark-circle" d="M18,34A16,16,0,1,1,34,18,16,16,0,0,1,18,34Zm0-1.6A14.4,14.4,0,1,0,3.6,18,14.4,14.4,0,0,0,18,32.4Zm5.034-18.966a.8.8,0,0,1,1.131,1.131l-8,8a.8.8,0,0,1-1.131,0l-3.2-3.2a.8.8,0,0,1,1.131-1.131L15.6,20.869Z" transform="translate(4 4)" fill="#0ea9a1"/></g></svg>',
            ),
        ),
    );

    return $icons;
}
