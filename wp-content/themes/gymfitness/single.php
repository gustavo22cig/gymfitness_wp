<?php get_header(); ?>

<main class="contenedor seccion con-sidebar">
    <section class="contenido-principal">
        <?php
        get_template_part('template-parts/pagina');
        ?>
    </section>
    <aside>
        <h2>sidebar aqui</h2>
    </aside>
    
    
</main>

<?php get_footer();?>