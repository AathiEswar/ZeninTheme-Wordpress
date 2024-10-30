<?php

/** 
 * Main Template File 
 * 
 * @package Zenin
 * 
 */

/* gets the header.php file ( add the extra name as arg to use special headers ) */
get_header();
?>

<div class="content">
  This is the body content
  <?php
  // check if the post or page has a Featured Image assigned to it.
  if (has_post_thumbnail()) {
    the_post_thumbnail();
  }
  ?>
</div>

<?php
/* gets the footer.php file ( add the extra name as arg to use special footers ) */
get_footer();
?>