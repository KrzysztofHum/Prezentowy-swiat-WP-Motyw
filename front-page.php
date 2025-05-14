<?php
/**
 * Template Name: Front Page
 * Description: Strona główna z sekcjami kategorii, zaproszeń i bloga
 * @package Prezentowy_Swiat_Starter
 */
get_header();

// Dane kategorii
$cats = [
  ['slug'=>'zaproszenia','label'=>'Zaproszenia','img'=>'category/zaproszenia.png'],
  ['slug'=>'pudelka-na-obraczki','label'=>'Pudełka na obrączki','img'=>'category/pudelka.png'],
  ['slug'=>'dekoracje','label'=>'Dekoracje','img'=>'category/dekoracje.png'],
  ['slug'=>'parapetia-dodatki-slubne','label'=>'Dodatki ślubne','img'=>'category/dodatki.png'],
  ['slug'=>'pudelka-na-pieniadze','label'=>'Pudełka na pieniądze','img'=>'category/pieniadze.png'],
  ['slug'=>'podziekowania','label'=>'Podziękowania','img'=>'category/pieniadze.png'],
];

// Dane zaproszeń
$inv = [
  ['slug'=>'zaproszenia-slubne','label'=>'Zaproszenia Ślubne','img'=>'category/zaproszenia.png'],
  ['slug'=>'zaproszenia-komunijne','label'=>'Zaproszenia Komunijne','img'=>'category/zaproszenia.png'],
  ['slug'=>'zaproszenia-urodzinowe','label'=>'Zaproszenia na Chrzest','img'=>'category/zaproszenia.png'],
];

// Zapytywanie wpisów na blogu
$recent = new WP_Query(['posts_per_page'=>3]);
?>

<main class="bg-slate-50">
  <h1 class="text-center p-3 bg-primary text-white uppercase">
    Prezentowy Świat - Eleganckie zaproszenia i wspaniałe dekoracje - Twoje marzenia
  </h1>
  <div class="max-w-7xl mx-auto">

    <!-- Category Section -->
    <section class="section mt-16">
      <p class="section-title">Przeglądaj wszystkie produkty i usługi.</p>
      <p class="section-subtitle">Akcesoria na przyjęcie podzielone na kategorie produktów. Wszystko co możesz załatwić przez internet znajdziesz u nas.</p>
      <div class="grid grid-cols-2 gap-10 p-4 sm:grid-cols-3 lg:grid-cols-6 mt-10">
        <?php foreach ( $cats as $cat ) : ?>
          <a href="<?php echo esc_url(home_url('/kategoria/'.$cat['slug'])); ?>" class="hover:text-primary transition-colors duration-300 flex flex-col items-center text-center">
            <img src="<?php echo get_template_directory_uri().'/assets/images/'.$cat['img']; ?>" alt="<?php echo esc_attr($cat['label']); ?>" class="w-[150px] h-[150px] object-cover rounded-full">
            <h2 class="text-xl font-semibold m-1"><?php echo esc_html($cat['label']); ?></h2>
          </a>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- Invitations Section -->
    <section class="section">
      <p class="section-title">Zaproszenia</p>
      <p class="section-subtitle">Przeglądaj najczęściej kupowane zaproszenia na ślub, komunie, urodziny.</p>
      <div class="grid grid-cols-1 gap-10 lg:grid-cols-3 p-4 mt-10">
        <?php foreach ( $inv as $item ) : ?>
          <a href="<?php echo esc_url(home_url('/kategoria/'.$item['slug'])); ?>" class="hover:text-primary transition-colors duration-300">
            <img src="<?php echo get_template_directory_uri().'/assets/images/'.$item['img']; ?>" alt="<?php echo esc_attr($item['label']); ?>" class="w-[350px] h-[300px] object-cover rounded-lg">
            <h2 class="text-xl font-semibold m-1"><?php echo esc_html($item['label']); ?></h2>
          </a>
        <?php endforeach; ?>
      </div>
      <a href="<?php echo esc_url(home_url('/kategoria/zaproszenia')); ?>" class="section-btn inline-block bg-primary text-white px-4 py-2 rounded mt-4">Zobacz Wszystkie</a>
    </section>

    <!-- Blog Section -->
    <section class="section">
      <p class="section-title">Blog</p>
      <p class="section-subtitle">Najlepsze artykuły, dowiesz się jak urządzić doskonałą imprezę.</p>
      <div class="grid grid-cols-1 gap-4 p-4 sm:grid-cols-2 lg:grid-cols-3">
        <?php if ( $recent->have_posts() ) : while ( $recent->have_posts() ) : $recent->the_post(); ?>
          <article class="bg-white shadow-md rounded-lg overflow-hidden">
            <a href="<?php the_permalink(); ?>">
              <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail('medium', ['class'=>'w-full h-auto']);
              } else {
                echo '<img src="'.get_template_directory_uri().'/assets/images/blog-placeholder.jpg" class="w-full h-auto">';
              } ?>
            </a>
            <div class="p-4 flex flex-col">
              <h2 class="text-xl font-semibold mb-2"><a href="<?php the_permalink(); ?>" class="hover:text-primary transition-colors duration-300"><?php the_title(); ?></a></h2>
              <p class="text-gray-700 text-sm mb-4"><?php echo wp_trim_words(get_the_excerpt(),20,'...'); ?></p>
              <a href="<?php the_permalink(); ?>" class="text-primary hover:text-black font-semibold group inline-flex items-center transition-transform duration-300">
                CZYTAJ WIĘCEJ...<span class="inline-block transform translate-x-0 opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-transform duration-300">&gt;</span>
              </a>
            </div>
          </article>
        <?php endwhile; wp_reset_postdata(); endif; ?>
      </div>
      <a href="<?php echo esc_url(home_url('/blog')); ?>" class="section-btn inline-block bg-primary text-white px-4 py-2 rounded mt-4">Zobacz Wszystkie Wpisy</a>
    </section>

  </div>
</main>

<?php get_footer(); ?>
