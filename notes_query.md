<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts(array(
  'posts_per_page' => 5, // custom post type
         'paged'=>$paged, 'category_name' => 'beans'
        ));
?>  


     <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts(array(
  'posts_per_page' => 5, // custom post type
         'paged'=>$paged
        ));
?>  