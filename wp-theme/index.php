<?php get_header(); ?>

<main class="container">
  <section class="blog-header">
    <h1>My Blog</h1>
    <p>Latest posts from my WordPress projects.</p>
  </section>

  <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
      <article class="post">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="meta">Posted on <?php the_time('F j, Y'); ?></div>
        <p><?php the_excerpt(); ?></p>
        <a class="read" href="<?php the_permalink(); ?>">Read More</a>
      </article>
    <?php endwhile; ?>
  <?php else: ?>
    <p>No posts found.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
