<?php
/**
 * The template for displaying single posts
 * @package Prezentowy_Swiat_Starter
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- Breadcrumbs -->
  <nav class="max-w-7xl mx-auto py-8 px-4">
    <ul class="flex items-center space-x-2 text-gray-600">
      <li><a href="<?php echo home_url(); ?>" class="hover:text-primary transition-colors duration-300">Strona główna</a></li>
      <li><span class="text-4xl">&#183;</span></li>
      <li><a href="<?php echo home_url( '/blog' ); ?>" class="hover:text-primary transition-colors duration-300">Artykuły</a></li>
      <li><span class="text-4xl">&#183;</span></li>
      <li class="text-primary font-semibold"><?php the_title(); ?></li>
    </ul>
  </nav>

  <main>
    <article class="max-w-7xl mx-auto px-4">

      <!-- Featured image -->
      <?php if ( has_post_thumbnail() ) : ?>
        <div class="flex justify-center">
          <?php the_post_thumbnail( 'full', [
            'class' => 'shadow-md max-h-[400px] object-cover w-full',
            'loading' => 'lazy'
          ] ); ?>
        </div>
      <?php endif; ?>

      <div class="max-w-2xl mx-auto sm:px-4 bg-white py-4">

        <!-- Title -->
        <h1 class="text-4xl font-bold my-4 leading-tight"><?php the_title(); ?></h1>

        <!-- Meta -->
        <div class="text-sm text-gray-500 mb-6">
          <p>
            Utworzone przez 
            <span class="font-semibold text-gray-700"><?php the_author(); ?></span>
            | 
            <time datetime="<?php echo get_the_date( 'c' ); ?>">
              <?php echo get_the_date( 'j F Y' ); ?>
            </time>
          </p>
        </div>

        <!-- Content -->
        <section class="prose lg:prose-xl max-w-none">
          <?php the_content(); ?>
        </section>

      </div>

    </article>
  </main>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
