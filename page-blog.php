<?php
/**
 * Blog listing template with pagination
 * Template Name: Blog Page
 * @package Prezentowy_Swiat_Starter
 */
get_header();

$paged = max( 1, get_query_var('paged') );
$query = new WP_Query([
  'post_type' => 'post',
  'posts_per_page' => 6,
  'paged' => $paged,
]);
?>
<main class="max-w-7xl mx-auto p-4">
  <h1 class="mb-4 p-4 text-5xl font-medium">Blog</h1>
  <div class="grid grid-cols-1 gap-4 p-4 sm:grid-cols-2 lg:grid-cols-3">
    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <article class="bg-white shadow-md rounded-lg overflow-hidden">
        <a href="<?php the_permalink(); ?>">
          <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('medium', ['class'=>'w-full h-auto']);
          } else {
            echo '<img src="' . get_template_directory_uri() . '/assets/images/blog-placeholder.jpg" class="w-full h-auto">';
          } ?>
        </a>
        <div class="p-4">
          <h2 class="text-xl font-semibold mb-2">
            <a href="<?php the_permalink(); ?>" class="hover:text-primary transition-colors duration-300"><?php the_title(); ?></a>
          </h2>
          <p class="text-gray-700 text-sm mb-4"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
          <a href="<?php the_permalink(); ?>" class="text-primary hover:text-black font-semibold group inline-flex items-center transition-transform duration-300">
            CZYTAJ WIĘCEJ...
            <span class="inline-block transform translate-x-0 opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-transform duration-300">&gt;</span>
          </a>
        </div>
      </article>
    <?php endwhile; wp_reset_postdata(); else: ?>
      <p>Brak wpisów do wyświetlenia.</p>
    <?php endif; ?>
  </div>

  <div class="pagination flex justify-center mt-8">
    <?php
echo paginate_links([
  'total' => $query->max_num_pages,
  'current' => $paged,
  'mid_size' => 1,
  'prev_text' => '&laquo; Poprzednia',
  'next_text' => 'Następna &raquo;',
  'type' => 'list',
]);
?>
  </div>
</main>
<?php get_footer(); ?>
