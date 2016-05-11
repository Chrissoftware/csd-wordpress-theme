<?php 
    use Roots\Sage\Extras;
?>
<footer class="content-info">
    <div class="container">
        <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
    <div class="container">
        <?= Extras\getSiteBrand(); ?>.
        Copyright &copy;. <?= date( 'Y' ); ?>.
    </div>
</footer>
