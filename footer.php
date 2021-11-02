<?php
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// Globale Einstellungen werden geladen

$global_social		= get_field('opt_socialmedia', 'option') ?: false;
$global_contact		= get_field('opt_contact', 'option') ?: false;
$global_support		= get_field('opt_support', 'option') ?: false;

$global_logos 		= get_field('opt_logos', 'option') ?: false;
$global_footer 		= get_field('opt_footer', 'option') ?: false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$override_logos		= get_field('override_logos') ? get_field('instance_logos')['opt_logos'] : false;
$override_footer	= get_field('override_footer') ? get_field('instance_footer')['opt_footer'] : false;
$override_support	= get_field('override_support') ? get_field('instance_support')['opt_support'] : false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$page_logos		= $override_logos ?: $global_logos;
$page_footer	= $override_footer ?: $global_footer;
$page_support	= $override_support ?: $global_support;

// ----------------------------------------------------------------------
?>

<?php
    $shuffledArray = $global_contact['ansprechpartner'][array_rand($global_contact['ansprechpartner'])];
?>

<footer class="footer" id="footer">
	<div class="footer-inner">
		<div class="uk-grid uk-grid-collapse" id="kontakt">
            <div class="uk-width-1-3@l col-ansprechpartner">
                <span class="teaser">Ihr Ansprechpartner</span>
                <div class="img-wrapper">
                    <img src="<?= $shuffledArray['bild']['url']; ?>" alt="" />
                </div>
                <div class="content-wrapper">
                    <!--
                    <?php $social_profiles = $global_contact['zentrale_kontaktperson']['socials'];
                    include 'tpl/partials/social.php'; ?>
                    -->
                    <h3 class="is-style-h3 name"><?= $shuffledArray['name']; ?></h3>
                    <span class="bereich"><?= $shuffledArray['bereich']; ?></span>
                </div>
                <a class="mail-btn" href="mailto:<?= $shuffledArray['e-mail']; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="15.411" viewBox="0 0 22 15.411">
                        <path id="mail" d="M4.031,19.146a1.643,1.643,0,0,0,.719.164h16.5a1.643,1.643,0,0,0,.719-.164l-6.5-6.117L13.35,14.775a.55.55,0,0,1-.7,0l-2.119-1.745-6.5,6.117Zm-.774-.781.016-.015,6.4-6.025L3.3,7.075q-.021-.017-.04-.036A1.644,1.644,0,0,0,3.1,7.75v9.911a1.644,1.644,0,0,0,.157.7Zm19.485,0a1.644,1.644,0,0,0,.157-.7V7.75a1.644,1.644,0,0,0-.161-.711q-.019.019-.04.036l-6.375,5.25,6.4,6.025.016.015ZM21.959,6.26a1.644,1.644,0,0,0-.709-.16H4.75a1.644,1.644,0,0,0-.709.16L13,13.637,21.959,6.26ZM4.75,5h16.5A2.75,2.75,0,0,1,24,7.75v9.911a2.75,2.75,0,0,1-2.75,2.75H4.75A2.75,2.75,0,0,1,2,17.661V7.75A2.75,2.75,0,0,1,4.75,5Z" transform="translate(-2 -5)" fill="#fff"/>
                    </svg>
                </a>
            </div>
            <div class="uk-width-2-3@l col-footer-information">
                <div class="socials">
                    <?php $social_profiles = $global_social;
                    include 'tpl/partials/social.php'; ?>
                </div>
                <div>
                    <h6 class="is-style-subheadline has-primary-color has-text-color">Kontakt aufnehmen</h6>
                    <h2 class="is-style-h2-big-margin has-dark-color has-text-color">
                        Wir sind bereit, Ihre <br />
                        Ideen zu Realisieren.
                    </h2>
                    <div class="contact-wrapper">
                        <a class="contact" href="tel:<?= $global_contact['telefonnummer']; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28.994" height="29.004" viewBox="0 0 28.994 29.004">
                                <path id="phone" d="M3.45,5.624V8.533A21.021,21.021,0,0,0,24.47,29.554h2.9a2.175,2.175,0,0,0,2.175-2.175V23.661A2.175,2.175,0,0,0,28.057,21.6L23.443,20.06a2.175,2.175,0,0,0-2.5.857L19.889,22.5a2.175,2.175,0,0,1-2.5.857l-2.211-.737a7.149,7.149,0,0,1-4.637-4.9l-.909-3.333a2.175,2.175,0,0,1,1.41-2.635l.874-.291a1.958,1.958,0,0,0,1.312-2.179l-.669-4.015A2.175,2.175,0,0,0,10.417,3.45H5.624A2.175,2.175,0,0,0,3.45,5.624ZM2,5.624A3.624,3.624,0,0,1,5.624,2h4.792a3.624,3.624,0,0,1,3.575,3.028l.669,4.015a3.407,3.407,0,0,1-2.283,3.793l-.874.291a.725.725,0,0,0-.47.878l.909,3.333a5.7,5.7,0,0,0,3.7,3.908l2.211.737a.725.725,0,0,0,.832-.286l1.057-1.585A3.624,3.624,0,0,1,23.9,18.684l4.615,1.538a3.624,3.624,0,0,1,2.478,3.438V27.38A3.624,3.624,0,0,1,27.37,31h-2.9A22.47,22.47,0,0,1,2,8.533Z" transform="translate(-2 -2)" fill="#0ea9a1"/>
                            </svg>
                            <?= $global_contact['telefonnummer']; ?>
                        </a>
                        <br />
                        <a class="contact" href="mailto:<?= $global_contact['email_adresse']; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28.994" height="20.31" viewBox="0 0 28.994 20.31">
                                <path id="mail" d="M4.677,23.644a2.166,2.166,0,0,0,.947.216H27.37a2.166,2.166,0,0,0,.947-.216l-8.566-8.062-2.793,2.3a.725.725,0,0,1-.922,0l-2.793-2.3L4.677,23.644Zm-1.02-1.03.021-.02,8.437-7.941-8.4-6.919q-.027-.023-.052-.047a2.166,2.166,0,0,0-.212.937V21.686a2.166,2.166,0,0,0,.207.928Zm25.68,0a2.166,2.166,0,0,0,.207-.928V8.624a2.166,2.166,0,0,0-.212-.937q-.025.025-.052.047l-8.4,6.919,8.437,7.941.021.02ZM28.3,6.66a2.166,2.166,0,0,0-.934-.21H5.624a2.166,2.166,0,0,0-.934.21L16.5,16.384,28.3,6.66ZM5.624,5H27.37a3.624,3.624,0,0,1,3.624,3.624V21.686A3.624,3.624,0,0,1,27.37,25.31H5.624A3.624,3.624,0,0,1,2,21.686V8.624A3.624,3.624,0,0,1,5.624,5Z" transform="translate(-2 -5)" fill="#0ea9a1"/>
                            </svg>
                            <?= $global_contact['email_adresse']; ?>
                        </a>
                        <br />
                        <span class="contact">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17.809" height="29.141" viewBox="0 0 17.809 29.141">
                              <path id="pin" d="M15.095,20.772a8.9,8.9,0,1,1,1.619,0v10.56a.809.809,0,1,1-1.619,0V20.772ZM15.9,19.19A7.285,7.285,0,1,0,8.619,11.9,7.285,7.285,0,0,0,15.9,19.19Z" transform="translate(-7 -3)" fill="#0ea9a1"/>
                            </svg>
                            <?= $global_contact['firmenname']; ?> <br />
                            <?= $global_contact['anschrift']['strasse']; ?>, <?= $global_contact['anschrift']['plz']; ?> <?= $global_contact['anschrift']['ort']; ?>
                        </span>
                    </div>
                </div>
                <div class="meta-footer uk-flex uk-flex-between uk-flex-wrap">
                    <span>&copy; <?= $global_contact['firmenname']; ?> <?= get_the_date('Y'); ?></span>
                    <?php wp_nav_menu(array('theme_location' => 'footer', 'container' => false, 'fallback_cb' => false)); ?>
                </div>
            </div>
            <!--
			<?php if($page_footer['show_contact'] && $global_contact) { ?>
				<div class="uk-width-1-2@m uk-width-auto@l">
					<div class="footer-item footer-contact">
						<?php include 'tpl/partials/contact.php'; ?>
					</div>
				</div>
			<?php } ?>
			<?php if($page_footer['footer_text']) { ?>
				<div class="uk-width-1-2@m uk-width-1-3@l">
					<div class="footer-item footer-text">
						<?= $global_footer['footer_text'] ?>
					</div>
				</div>
			<?php } ?>
			<div class="uk-width-auto@l uk-text-right@l">
				<?php if($page_footer['show_logo'] && $page_logos) { ?>
					<div class="footer-item footer-logo">
						<?php include_once 'tpl/partials/logo-function.php'; ?>
						<?php include 'tpl/partials/logo.php'; ?>
					</div>
				<?php } ?>
				<?php if(has_nav_menu('footer')) { ?>
					<div><div class="footer-item footer-menu">
						<?php wp_nav_menu(array('theme_location' => 'footer', 'container' => false, 'fallback_cb' => false)); ?>
					</div></div>
				<?php } ?>
				<?php if($page_footer['show_socialmedia'] && $global_social) { ?>
					<div><div class="footer-item footer-social">
						<?php $social_profiles = $global_social;
						include 'tpl/partials/social.php'; ?>
					</div></div>
				<?php } ?>
			</div>
			-->
		</div>
	</div>
</footer>

<?php
include 'tpl/partials/offcanvas.php';
wp_footer() ;
?>

</body>
</html>
