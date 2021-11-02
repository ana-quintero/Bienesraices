<?php 
    require 'includes/app.php';
    incluirTemplate('header'); 
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Guia Para La Decoración de Tu Hogar</h1>


        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>


        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quidem officiis voluptatibus. Consequatur nemo iure amet tempora saepe ipsa officia deserunt. In error accusamus, accusantium laboriosam odit minus sed nesciunt? Nemo excepturi iure a at eveniet placeat commodi est odit repellat, molestias libero cumque veniam qui deserunt non quidem. Debitis fuga harum corporis dolorem facilis esse odit sed accusantium quia rem unde, ullam, vitae, commodi consectetur aliquid non quibusdam natus?</p>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt, enim! Aspernatur asperiores dicta, nemo, id tempore ullam dolorum suscipit optio possimus nihil officiis quae dolorem.</p>
        </div>
    </main>

<?php 
    incluirTemplate('footer'); 
?>  