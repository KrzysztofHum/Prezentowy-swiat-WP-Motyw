<?php
/**
 * The template for displaying the footer
 * @package Prezentowy_Swiat_Starter
 */
?>
<footer class="bg-[#302836] text-white flex flex-col">
  <div class="flex md:px-16 px-4 md:flex-row flex-col">
    <div class="md:basis-2/3 flex flex-wrap justify-between md:pr-16 md:py-16 py-4">
      <div>
        <p class="mb-2 text-2xl">Ślub</p>
        <div class="flex flex-col">
          <a href="<?php echo esc_url( home_url( '/kategoria/zaproszenia-slubne' ) ); ?>">Zaproszenia ślubne</a>
          <a href="<?php echo esc_url( home_url( '/kategoria/podziekowania-slubne' ) ); ?>">Podziękowania ślubne</a>
          <a href="<?php echo esc_url( home_url( '/kategoria/parapetia-dodatki-slubne' ) ); ?>">Parapetia i dodatki ślubne</a>
        </div>
      </div>
      <div>
        <p class="mb-2 text-2xl">Chrzest</p>
        <div class="flex flex-col">
          <a href="<?php echo esc_url( home_url( '/kategoria/zaproszenia-na-chrzest' ) ); ?>">Zaproszenia na chrzest</a>
          <a href="<?php echo esc_url( home_url( '/kategoria/dekoracje-na-chrzest' ) ); ?>">Dekoracje na chrzest</a>
          <a href="<?php echo esc_url( home_url( '/kategoria/parapetia-dodatki-chrzest' ) ); ?>">Parapetia i dodatki chrzest</a>
        </div>
      </div>
      <div>
        <p class="mb-2 text-2xl">Komunia</p>
        <div class="flex flex-col">
          <a href="<?php echo esc_url( home_url( '/kategoria/zaproszenia-komunijne' ) ); ?>">Zaproszenia komunijne</a>
          <a href="<?php echo esc_url( home_url( '/kategoria/podziekowania-komunijne' ) ); ?>">Podziękowania komunijne</a>
          <a href="<?php echo esc_url( home_url( '/kategoria/parapetia-dodatki-komunijne' ) ); ?>">Parapetia i dodatki komunijne</a>
        </div>
      </div>
    </div>
    <div class="md:basis-1/3 md:border-l md:border-l-white-opacity-11">
      <div class="md:pl-12 md:py-8 py-4">
        <p class="mb-2 text-2xl">Kontakt:</p>
        <div class="leading-6">
          <p>Prezentowy Świat</p>
          <p>+48 512 722 333</p>
          <p><a href="mailto:dodajemail@wp.pl" class="text-white">dodajemail@wp.pl</a></p>
        </div>
      </div>
      <div class="md:border-t md:border-t-white-opacity-11 md:pl-12 md:py-8 py-4">
        <p>Dołącz do grupy z pomysłami prezentowymi na Facebooku.</p>
        <div class="flex pt-3">
          <a href="https://www.facebook.com" target="_blank" rel="noopener noreferrer" class="border rounded-full p-2 text-blue-600 hover:text-blue-800">
            <!-- Facebook Icon SVG -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14" viewBox="0 0 24 24" fill="currentColor">
              <path d="M22 12.07C22 6.48 17.52 2 12 2S2 6.48 2 12.07c0 5 3.66 9.13 8.44 9.93v-7.03H7.9v-2.9h2.54V9.41c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.44 2.9h-2.34v7.03C18.34 21.2 22 17.07 22 12.07z"/>
            </svg>
          </a>
          <a href="https://www.instagram.com" target="_blank" rel="noopener noreferrer" class="ml-3 border rounded-full p-2 text-pink-500 hover:text-pink-700">
            <!-- Instagram Icon SVG -->
            <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14" viewBox="0 0 24 24" fill="currentColor">
              <path d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm0 1.5A4.25 4.25 0 003.5 7.75v8.5A4.25 4.25 0 007.75 20.5h8.5a4.25 4.25 0 004.25-4.25v-8.5A4.25 4.25 0 0016.25 3.5h-8.5z"/>
              <path d="M12 7a5 5 0 110 10 5 5 0 010-10zm0 1.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM17.75 6a1.25 1.25 0 110 2.5 1.25 1.25 0 010-2.5z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="flex flex-col md:flex-row justify-between border-t border-t-white-opacity-11 md:py-5 py-2 md:px-16 px-4">
    <div class="flex md:flex-row-reverse">
      <a class="px-3" href="<?php echo esc_url( home_url( '/polityka-prywatnosci' ) ); ?>">Polityka Prywatności</a>
      <a class="px-3" href="<?php echo esc_url( home_url( '/regulamin' ) ); ?>">Regulamin</a>
    </div>
    <div class="my-2 md:my-0">
      <p>&copy; <?php echo date('Y'); ?> Prezentowy Świat. All Rights reserved.</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
