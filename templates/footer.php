<?php 
use Roots\Sage\Extras;
?>
<footer class="site-footer">
    <?php if( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ): ?>
    <div class="container content-info">
        <div class="row">
            <?php if( is_active_sidebar( 'footer-1' ) ): ?>
            <div class="footer-widgets">
                <?php dynamic_sidebar('footer-1'); ?>
            </div>
            <?php endif; ?>
            <?php if( is_active_sidebar( 'footer-2' ) ): ?>
            <div class="footer-widgets">
                <?php dynamic_sidebar('footer-2'); ?>
            </div>
            <?php endif; ?>
            <?php if( is_active_sidebar( 'footer-3' ) ): ?>
            <div class="footer-widgets">
                <?php dynamic_sidebar('footer-3'); ?>
            </div>
            <?php endif; ?>
            <?php if( is_active_sidebar( 'footer-4' ) ): ?>
            <div class="footer-widgets">
                <?php dynamic_sidebar('footer-4'); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>
    <div class="container colophon">
        <?= Extras\getSiteBrand(); ?>.
        Copyright &copy;. <?= date( 'Y' ); ?>.
    </div>
</footer>