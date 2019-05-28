<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>
		<!-- Título de la página
		============================================= -->
		<section id="page-title">
			<div class="container clearfix">
				<h1>Stakeholders</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?=base_url()?>inicio/">Inicio</a></li>
					<li class="breadcrumb-item active"><a href="<?=base_url()?>diagramas/">Diagramas</a></li>
					<li class="breadcrumb-item active" aria-current="page">Stakeholders</li>
				</ol>
			</div>
		</section>

		<!-- Contenido
		============================================= -->
		<section id="content">
			<div class="content-wrap">		
				<div class="container clearfix" data-lightbox="gallery">
                    <div class="col_half">
                        <img class="image_fade" src="<?=base_url()?>public/images/adoo/stakeholders.png" alt="Stakeholders">
                    </div>
                    <div class="col_half col_last">
                        <p>Los clientes están en primera línea, son el núcleo, porque SmartFood se creó pensando en la accesibilidad de las personas para obtener alimentos saludables, naturales y que pudieran escoger los elementos de éstos de forma personalizada, con la mejor calidad y al precio justo.</p>
                        <p>En segundo lugar, podemos encontrar a los empleados y proveedores. Los empleados tienen que formarse para poder satisfacer las necesidades del cliente. La relación con los proveedores hay que saber cuidarla ya que SmartFood tiene el compromiso de obtener la mejor calidad en sus productos.</p>
                        <p>Los compromisos ambientales que están en tercera posición, pero no por ello es menos importante. SmartFood realiza su compromiso con, por ejemplo, iluminación de baja tensión, diminución de packaging (bolsas reutilizables, desechables biodegradables), optimización de transportes, mejoras de competencias energéticas en las tiendas, etc.</p>
                    </div>
                    <div class="col_full">
                        <p>En conclusión, sabemos que SmartFood es una empresa que se preocupa por sus clientes, formación de los empleados, relación con los proveedores y es una empresa responsable con el medioambiente.</p>
                    </div>
			    </div>
            </div>
		</section>
		<?= $_js ?>