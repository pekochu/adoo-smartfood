<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>
		<!-- Título de la página
		============================================= -->
		<section id="page-title" class="page-title-pattern">
			<div class="container clearfix">
				<h1>Diagrama de paquetes</h1>
				<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url()?>inicio/">Inicio</a></li>
					<li class="breadcrumb-item active"><a href="<?=base_url()?>diagramas/">Diagramas</a></li>
					<li class="breadcrumb-item active" aria-current="page">Diagrama de paquetes</li>
				</ol>
			</div>
		</section>

		<!-- Contenido
		============================================= -->
		<section id="content">
			<div class="content-wrap">		
				<div class="container clearfix" data-lightbox="gallery">
                    <div class="col_two_third">
                        <h1>Vista de cada paquete en el proyecto</h1>
                        <p>Concretamente se utilizaría un patrón de arquitectura de software Modelo Vista Controlador (MVC) por la facilidad y organización de esta. Utilizando la herramienta Visua Paradigm sólo nos permitió crear cada paquete, sin embargo, no pudimos descubrir como "agregar" los archivos que irían dentro de estos paquetes.</p>
                    </div>
                    <div class="col_one_third col_last">
                        <a href="<?=base_url()?>public/images/adoo/Diagrama de paquetes 1.png" data-lightbox="gallery-item"><img class="image_fade" src="<?=base_url()?>public/images/adoo/Diagrama de paquetes 1.png" alt="Gallery Thumb 1"></a>
                    </div>
			    </div>
            </div>
		</section>
		<?= $_js ?>