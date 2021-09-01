<?php if($page_header['show_nav']) { ?>
    <div class="header-item header-item--nav nav uk-visible@m">
        <?php $homeActive = is_front_page() ? 'nav-home current_page_item' : 'nav-home'; ?>
        <div class="<?= $homeActive ?>">
            <a aria-label="zur Startseite" alt="zur Startseite" href="<?= home_url() ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <path id="home" d="M21.889,11.6v8.627A2.778,2.778,0,0,1,19.111,23H15.778a.556.556,0,0,1-.556-.556V15.778a.556.556,0,0,0-.556-.556H11.333a.556.556,0,0,0-.556.556v6.667a.556.556,0,0,1-.556.556H6.889a2.778,2.778,0,0,1-2.778-2.778V11.6l-.2.167A.556.556,0,0,1,3.2,10.9l9.444-7.778a.556.556,0,0,1,.706,0L22.8,10.9a.556.556,0,0,1-.706.858Zm-1.1-.909L13,4.275,5.215,10.687a.559.559,0,0,1,.007.091v9.444a1.667,1.667,0,0,0,1.667,1.667H9.667V15.778a1.667,1.667,0,0,1,1.667-1.667h3.333a1.667,1.667,0,0,1,1.667,1.667v6.111h2.778a1.667,1.667,0,0,0,1.667-1.667V10.778a.559.559,0,0,1,.007-.091Z" transform="translate(-3 -3)" fill="#0ea9a1"/>
                </svg>
            </a>
        </div>
        <nav class="nav-list" role="navigation">
            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => '')); ?>
        </nav>
    </div>
<?php } ?>
