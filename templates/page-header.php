<?php use Roots\Sage\Titles; ?>

<?php if( ! is_front_page() ): ?>
<header class="page-header">
  <h1><?= Titles\title(); ?></h1>
</header>
<?php endif; ?>
