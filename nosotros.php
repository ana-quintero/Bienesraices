<?php 
    require 'includes/app.php';
    incluirTemplate('header'); 
?>

    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy"src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años De Experiencia
                </blockquote>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quidem officiis voluptatibus. Consequatur nemo iure amet tempora saepe ipsa officia deserunt. In error accusamus, accusantium laboriosam odit minus sed nesciunt? Nemo excepturi iure a at eveniet placeat commodi est odit repellat, molestias libero cumque veniam qui deserunt non quidem. Debitis fuga harum corporis dolorem facilis esse odit sed accusantium quia rem unde, ullam, vitae, commodi consectetur aliquid non quibusdam natus?</p>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt, enim! Aspernatur asperiores dicta, nemo, id tempore ullam dolorum suscipit optio possimus nihil officiis quae dolorem.</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
               <p>Blanditiis vel eum nobis eos libero reiciendis possimus earum iste laborum. Excepturi, fugit optio nobis eos fugiat sed dignissimos laborum ullam id!</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
               <p>Blanditiis vel eum nobis eos libero reiciendis possimus earum iste laborum. Excepturi, fugit optio nobis eos fugiat sed dignissimos laborum ullam id!</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
               <p>Blanditiis vel eum nobis eos libero reiciendis possimus earum iste laborum. Excepturi, fugit optio nobis eos fugiat sed dignissimos laborum ullam id!</p>
            </div>
        </div>
    </section>

<?php 
    incluirTemplate('footer'); 
?>  