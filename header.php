<?php
/**
 * The header for our theme
 * @package Prezentowy_Swiat_Starter
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<script>
  // Mobile menu toggle
  document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    btn.addEventListener('click', function() {
      menu.classList.toggle('hidden');
    });
  });
</script>
<nav class="shadow-[0_20px_20px_0_rgba(0,0,0,0.04)] bg-[#ffebeb]">
  <div class="max-w-1400 mx-auto p-4 flex items-center justify-between">
    <div class="flex items-center">
      <!-- Hamburger Button -->
      <button id="mobile-menu-btn" class="text-black md:hidden focus:outline-none pr-4">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path id="mobile-menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
      <!-- Logo -->
      <a href="<?php echo home_url('/'); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo" width="300" height="70">
      </a>
    </div>
    <!-- Basket -->
    <a href="<?php echo wc_get_cart_url(); ?>" class="relative group">
      <!-- SVG icon -->
      <svg width="54" height="54" viewBox="0 0 48 48" fill="none">
        <circle cx="24" cy="24" r="23.5" fill="white" stroke="#DBDADC" />
        <ellipse cx="19.7276" cy="36.7065" rx="1.09091" ry="1.16159" stroke="#302836" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-primary transition-colors duration-200" />
        <ellipse cx="31.7276" cy="36.7065" rx="1.09091" ry="1.16159" stroke="#302836" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-primary transition-colors duration-200" />
        <path d="M11 13.4746H15.3636L18.2873 29.0283C18.4932 30.1321 19.4124 30.9201 20.4691 30.8985H31.0727C32.1294 30.9201 33.0487 30.1321 33.2545 29.0283L35 19.2826H16.4545" stroke="#302836" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-primary transition-colors duration-200" />
      </svg>
      <span class="absolute top-0 right-0 bg-primary text-white text-xs rounded-full w-5 h-5 flex items-center justify-center"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
    </a>
  </div>
  <!-- Desktop Menu -->
  <div class="hidden md:flex space-x-10 pt-4 text-xl">
    <?php
      $menu_items = [
        ['slug' => 'kategoria/slub', 'label' => 'Ślub'],
        ['slug' => 'kategoria/chrzest', 'label' => 'Chrzest'],
        ['slug' => 'kategoria/komunia', 'label' => 'Komunia'],
        ['slug' => 'kategoria/dekoracje', 'label' => 'Dekoracje'],
        ['slug' => 'kategoria/prezenty', 'label' => 'Prezenty'],
        ['slug' => 'blog', 'label' => 'Blog'],
      ];
      foreach ( $menu_items as $item ) {
        echo '<a href="' . esc_url( home_url( '/' . $item['slug'] ) ) . '" class="font-semibold text-black hover:text-primary transition-colors duration-300">' . esc_html( $item['label'] ) . '</a>';
      }
    ?>
  </div>
  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden p-4 grid grid-cols-2 gap-4">
    <?php foreach ( $menu_items as $item ) : ?>
      <a href="<?php echo esc_url( home_url( '/' . $item['slug'] ) ); ?>" class="group block text-center">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/category/dodatki.png'; ?>" alt="<?php echo esc_attr( $item['label'] ); ?>" class="w-full h-auto object-cover">
        <p class="mt-2 text-black group-hover:text-primary transition-colors duration-300"><?php echo esc_html( $item['label'] ); ?></p>
      </a>
    <?php endforeach; ?>
  </div>
</nav>
