<time class="updated" datetime="<?= get_post_time('c', true); ?>"><span><?= __('Date:','sage'); ?></span> <?= get_the_date(); ?></time>
<p class="byline author vcard"><?= __('Posted By:', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></p>
