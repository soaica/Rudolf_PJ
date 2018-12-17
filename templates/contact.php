<?php
/*
   Template Name: Contact
*/
   while (have_posts()): the_post();
   	 echo "Nôi dung:". $post->ID;
   endwhile;

   echo "<pre>";
   print_r($posts);
   echo "</pre>";

