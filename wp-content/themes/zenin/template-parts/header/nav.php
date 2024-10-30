<?php

/**
 * Navigation Bar > Header
 * 
 * @package Zenin
 */
?>

<nav class="header-nav">
  <div class="w-screen h-14 flex justify-between bg-[#101419] px-10">
    <div class="my-auto">
      <?php
      if (function_exists('the_custom_logo')) {
        the_custom_logo();
      }
      ?>
    </div>
    <div class="flex gap-8 my-auto text-white">
      <a href="">Home</a>
      <a href="">About</a>
      <a href="">Works</a>
      <a href="">Contact</a>
    </div>
  </div>
</nav>