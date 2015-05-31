
<!-- /* Wordpress Query - */
this php is getting 5 posts
and category_name "beans"

for reference please check 
https://codex.wordpress.org/Function_Reference/query_posts
 -->

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts(array(
  'posts_per_page' => 5, // custom post type
         'paged'=>$paged, 'category_name' => 'beans'
        ));
?>  


<!-- /* Wordpress Query - */
 -->
     <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts(array(
  'posts_per_page' => 5, // custom post type
         'paged'=>$paged
        ));
?>  