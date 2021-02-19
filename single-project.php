<?php
/* 
Template Name: Single project template
*/


get_header();

//get the current slug
   $slug = pods_v( 'last', 'url');

   //get pods object
   $mypod = pods('project', $slug );

   //set our variables
   $name = $mypod->field('name');
   $permalink = $mypod->field('permalink');
   $description = $mypod->field('content');
   

?>






<?php get_footer() ?>