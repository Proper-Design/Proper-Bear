<?php

// The user-defined portion of our styleguide template

?>

<section class="sg-section sg-logo">
  <h2 class="sg-section-header">Logo</h2>
  <img class="sg-logo-image" src="<?=get_field('sg_logo')['url']; ?>" alt="">
</section>

<section class="sg-section sg-colors">
  <h2 class="sg-section-header">Brand colours</h2>
  <div class="sg-color sg-color-1"></div>
  <div class="sg-color sg-color-2"></div>
  <div class="sg-color sg-color-3"></div>
  <div class="sg-color sg-color-4"></div>
  <div class="sg-color sg-color-5"></div>
</section>

<?php if(have_rows('sg_accents')): ?>
  <section class="sg-section sg-accents">
    <h2 class="sg-section-header">Visual accents</h2>
    <?php while(have_rows('sg_accents')): the_row(); ?>
      <img class="sg-accent" src="<?=get_sub_field('sg_accent')['url']; ?>">
    <?php endwhile; ?>
  </section>
<?php endif; ?>

<?php if(have_rows('sg_words')): ?>
  <section class="sg-section sg-words">
  <?php while(have_rows('sg_words')): the_row(); ?>
    <span class="sg-word"><?=get_sub_field('sg_word'); ?></span>
  <?php endwhile;?>
  </section>
<?php endif; ?>