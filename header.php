<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta name="apple-mobile-web-app-title" content="<?= bloginfo('name') ?>">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php /*
	<link rel="preload" href="<?= get_bloginfo('template_url') ?>/dist/fonts/source-sans-pro-v13-latin-regular.woff2" as="font" crossorigin="anonymous" />
	<link rel="preload" href="<?= get_bloginfo('template_url') ?>/dist/fonts/source-sans-pro-v13-latin-600.woff2" as="font" crossorigin="anonymous" />
	<link rel="preload" href="<?= get_bloginfo('template_url') ?>/dist/fonts/source-sans-pro-v13-latin-700.woff2" as="font" crossorigin="anonymous" />
	*/ ?>

    <!-- USERLIKE -->
    <script async type="text/javascript" src="https://userlike-cdn-widgets.s3-eu-west-1.amazonaws.com/17ba65613d1a4811a32e1533cb8c52b50b3db691771a4201b197a3a62d240bd3.js"></script>

	<?php wp_head(); ?>

</head>


<?php
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// Globale Einstellungen werden geladen

$global_social		= get_field('opt_socialmedia', 'option') ?: false;
$global_contact		= get_field('opt_contact', 'option') ?: false;

$global_logos 		= get_field('opt_logos', 'option') ?: false;
$global_header 		= get_field('opt_header', 'option') ?: false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$override_logos		= get_field('override_logos') ? get_field('instance_logos')['opt_logos'] : false;
$override_header	= get_field('override_header') ? get_field('instance_header')['opt_header'] : false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$page_logos		= $override_logos ?: $global_logos;
$page_header	= $override_header ?: $global_header;

// ----------------------------------------------------------------------
?>


<body <?php body_class('w-body'); ?>>

	<?php /* if($page_header['show_socialmedia'] && $global_social) { ?>
		<div class="header-meta">
			<div class="header-meta-inner">
				<div class="header-meta-item">
					<?php $social_profiles = $global_social;
					include 'tpl/partials/social.php'; ?>
				</div>
			</div>
		</div>
	<?php } */?>

	<header class="header header--sticky" id="header" role="banner">
        <div class="alignwide uk-flex uk-flex-between uk-flex-middle">
            <div class="header-col">
                <div class="header-item logo-wrapper">
                    <?php include_once 'tpl/partials/logo-function.php'; ?>
                    <?php include 'tpl/partials/logo.php'; ?>
                </div>
            </div>
            <div class="header-col">
                <?php /* include 'tpl/partials/header-nav.php';  */?>
                <?php include 'tpl/partials/calltoaction.php'; ?>
                <?php include 'tpl/partials/header-contact.php'; ?>
                <?php include 'tpl/partials/header-lang.php'; ?>
                <div class="contact-box uk-flex uk-flex-middle uk-visible@s">
                    <div class="img-wrapper">
                        <img src="<?= $global_contact['zentrale_kontaktperson_header']['bild']['url']; ?>" alt="" />
                    </div>
                    <div>
                        <span class="name">Sprich mit <?= $global_contact['zentrale_kontaktperson_header']['name']; ?>.</span>
                        <span class="telefon"><?= $global_contact['zentrale_kontaktperson_header']['telefonnummer']; ?></span>
                    </div>
                    <a href="mailto:<?= $global_contact['zentrale_kontaktperson_header']['e-mail']; ?>" class="mail-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="15.411" viewBox="0 0 22 15.411">
                            <path id="mail" d="M4.031,19.146a1.643,1.643,0,0,0,.719.164h16.5a1.643,1.643,0,0,0,.719-.164l-6.5-6.117L13.35,14.775a.55.55,0,0,1-.7,0l-2.119-1.745-6.5,6.117Zm-.774-.781.016-.015,6.4-6.025L3.3,7.075q-.021-.017-.04-.036A1.644,1.644,0,0,0,3.1,7.75v9.911a1.644,1.644,0,0,0,.157.7Zm19.485,0a1.644,1.644,0,0,0,.157-.7V7.75a1.644,1.644,0,0,0-.161-.711q-.019.019-.04.036l-6.375,5.25,6.4,6.025.016.015ZM21.959,6.26a1.644,1.644,0,0,0-.709-.16H4.75a1.644,1.644,0,0,0-.709.16L13,13.637,21.959,6.26ZM4.75,5h16.5A2.75,2.75,0,0,1,24,7.75v9.911a2.75,2.75,0,0,1-2.75,2.75H4.75A2.75,2.75,0,0,1,2,17.661V7.75A2.75,2.75,0,0,1,4.75,5Z" transform="translate(-2 -5)" fill="#fff"/>
                        </svg>
                    </a>
                </div>
                <?php /* include 'tpl/partials/header-nav-mobile.php'; */ ?>
            </div>
        </div>
	</header>

    <a href="tel:<?= $global_contact['zentrale_kontaktperson_header']['telefonnummer']; ?>" class="jetzt-anrufen uk-hidden@s">
        <?= baw_svg('solid/phone-alt'); ?>
    </a>
