<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/** CSS child dépend du parent */
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'astra-child-style',
        get_stylesheet_uri(),
        [ 'astra-theme-css' ],
        wp_get_theme()->get( 'Version' )
    );
}, 20 );

/** Kill tout le footer Astra puis injecter le tien */
add_action( 'wp', function () {
    // Supprime toutes les callbacks déjà ajoutées au hook astra_footer
    remove_all_actions( 'astra_footer' );

    // Ajoute TON footer
    add_action( 'astra_footer', 'astra_child_footer_markup' );
} );

function astra_child_footer_markup() { ?>
    <footer class="site-footer ast-container">
        <div class="footer-grid">
            <div class="footer-col">
                <h4>À propos</h4>
                <p>Nous créons des sites rapides et accessibles.</p>
            </div>
            <div class="footer-col">
                <h4>Liens</h4>
                <ul>
                    <li><a href="/boutique">Boutique</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/mentions-legales">Mentions légales</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Suivez-nous</h4>
                <p>
                    <a href="https://instagram.com" target="_blank" rel="noopener">Instagram</a> •
                    <a href="https://facebook.com" target="_blank" rel="noopener">Facebook</a>
                </p>
                <p class="copy">© <?php echo date('Y'); ?> — Mon Entreprise</p>
            </div>
        </div>
    </footer>
<?php }
