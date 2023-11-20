<?php
 while(have_posts()) : the_post(); 
    the_title('<h1 class="text-center text-primary">', '</h1>');

    if(has_post_thumbnail()){
        the_post_thumbnail('full', array('class'=>'img-destacada'));
    }

    // if(is_single()){

    //     $hora_inicio = get_field('hora_inicio');
    //     $hora_fin = get_field('hora_fin');
        
    //     echo '<p>';
    //     echo the_field('dias_clase');
    //     echo ' - '.$hora_inicio.' a '.$hora_fin.'</p>';

    // }
    
    the_content();

endwhile;