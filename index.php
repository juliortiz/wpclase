<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" />
  </head>
  <body>
    <h1><?php bloginfo('name') ?></h1>

      <?php if(have_posts()): ?>
        <section class="posts" >
        <?php while(have_posts()): the_post(); ?>
          <article class="post">
            <h2>
              <?php the_title(); ?> - asd
            </h2>
            <span><?php the_date(); ?></span>
            <span><?php the_author(); ?></span>
            <p>
              <?php the_content(); ?>
            </p>
            <a href="<?php the_permalink(); ?>">Ver mas...</a>
          </article>
        <?php endwhile; ?>
        </section>
      <?php else: ?>
        NO HAY :(
      <?php endif; ?>

  </body>
</html>
