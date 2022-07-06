<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Impactape
 */

get_header();
get_sidebar();
?>

<section>
    <div id="preloader">
        <div class="loaders">
            <div class="loader">
                <div class="loader-inner line-scale-party">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <div id="bloco-topo">
                <div class="text-center after">
                    <a href="#artistas" class="btn btn-outline-light"><i class="bi bi-chevron-down"></i> Veja Mais</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container py-5" id="artistas">
        <div class="row">
            <a class="col-12 col-lg-4" href="#" title="Veja sobre o artista Goutt">
                <figure class="figure">
                    <figcaption class="figure-caption">
                        <i class="bi bi-plus"></i>
                        <h3>Goutt</h3>
                    </figcaption>
                </figure>
            </a>
            <a class="col-12 col-lg-4" href="#" title="Veja sobre o artista Tenan">
                <figure class="figure">
                    <figcaption class="figure-caption">
                        <i class="bi bi-plus"></i>
                        <h3>Tenan</h3>
                    </figcaption>
                </figure>
            </a>
            <a class="col-12 col-lg-4" href="#" title="Veja sobre o artista Gogui">
                <figure class="figure">
                    <figcaption class="figure-caption">
                        <i class="bi bi-plus"></i>
                        <h3>Gogui</h3>
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>
</section>

<section>
    <div class="container" id="eventos">
        <div class="row">
            <div class="col-md-6 col-xs-12 imagem">
                <img class="img-fluid" src="<?= get_template_directory_uri() . '/assets/img/cena-2022.png'; ?>" alt="Imagem do Cena 2k22" />
            </div>
            <div class="col-md-6 col-xs-12 texto">
                <div class="bg-dark text-white d-flex align-items-center p-3">
                    <p>Outros nomes internacionais como Trippie Redd, Danileigh e Pi'erre Bourne também estão confirmados para o festival,
                        além de grandes artistas nacionais como Tasha e Tracie, Onnika, Bc Raff e o grupo Recayd Mob que se destacou como um
                        dos shows mais comentados pelo público na primeira edição e agora retorna como atração.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>