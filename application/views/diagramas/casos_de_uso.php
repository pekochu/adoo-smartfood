<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>
		<!-- Título de la página
		============================================= -->
		<section id="page-title" class="page-title-pattern">
			<div class="container clearfix">
				<h1>Casos de uso</h1>
				<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url()?>inicio/">Inicio</a></li>
					<li class="breadcrumb-item active"><a href="<?=base_url()?>diagramas/">Diagramas</a></li>
					<li class="breadcrumb-item active" aria-current="page">Casos de usos</li>
				</ol>
			</div>
		</section>

		<!-- Contenido
		============================================= -->
		<section id="content">
			<div class="content-wrap">		
				<div class="container clearfix" data-lightbox="gallery">
                    <div class="col_two_third">
                        <h1>Caso de uso R.2</h1>
                        <span><b>Nombre: </b>Seleccionar pago Cliente registrado.</span><br />
                        <span><b>Descripción: </b>Desplegara las opciones que tiene el usuario para hacer los pagos.</span><br />
                        <span><b>Propósito: </b>Un cliente registrado es un cliente frecuente, por lo que se le facilitara su el pago escogiendo sus métodos de pago guardados.</span><br />
                        <span><b>Entradas: </b>Opción del tipo de cliente.</span><br />
                        <span><b>Salidas: </b>Método de pago.</span><br />
                        <span><b>Pre-condiciones: </b>El usuario está registrado en el sistema.</span><br />
                        <span><b>Post-condiciones: </b>El sistema tendrá la referencia de con que método de pago procederá a hacer el cobro.</span><br />
                        <span><b>Curso Básico de Acción: </b></span><br />
                        <ol style="padding: 0 15px 0 15px;margin: 0 15px 0 15px;">
                            <li>El caso de uso empieza cuando se desea hacer el pago.</li>
                            <li>El sistema detecta que el pago desea ser por un usuario registrado.</li>
                            <li>Se le desplegaran las opciones de pago específicas para el usuario registrado. (UI.06)</li>
                            <li>El usuario podrá seleccionar un tipo de pago, con tarjeta guardada, otra tarjeta PayPal o en efectivo.</li>
                            <li>El usuario confirma el pago o regresa al menú anterior.</li>
                        </ol>
                    </div>
                    <div class="col_one_third col_last">
                        <a href="<?=base_url()?>public/images/adoo/use_cases/r2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?=base_url()?>public/images/adoo/use_cases/r2.jpg" alt="Caso de uso R.2"></a><br />
                        <a href="<?=base_url()?>public/images/adoo/use_cases/ux_r2.png" data-lightbox="gallery-item"><img class="image_fade" src="<?=base_url()?>public/images/adoo/use_cases/ux_r2.png" alt="Caso de uso UX R.2"></a>
                    </div>
                    <div class="divider"><i class="icon-circle"></i></div>
                    <div class="col_two_third">
                        <h1>Caso de uso R.3</h1>
                        <span><b>Nombre: </b>Seleccionar pago Cliente tipo invitado.</span><br />
                        <span><b>Descripción: </b>Forma en la que el cliente que escoja la opción “invitado” podrá hacer el pago.</span><br />
                        <span><b>Propósito: </b>Mantener una regulación en los pagos, haciendo que los clientes sin cuenta paguen de manera natural el servicio.</span><br />
                        <span><b>Entradas: </b>Opción del tipo de cliente.</span><br />
                        <span><b>Salidas: </b>Autorización del cobro.</span><br />
                        <span><b>Pre-condiciones: </b>Ninguna.</span><br />
                        <span><b>Post-condiciones: </b>El sistema hará la referencia de la tarjeta con la cual se hará el pago, mandara al banco la autorización del cobro y esperará respuesta.</span><br />
                        <span><b>Curso Básico de Acción: </b></span><br />
                        <ol style="padding: 0 15px 0 15px;margin: 0 15px 0 15px;">
                            <li>El caso de uso empieza cuando se desea hacer el pago.</li>
                            <li>El sistema detecta que el pago desea ser por un usuario invitado.</li>
                            <li>Se le desplegaran las opciones de pago específicas para el usuario invitado (UI.07)</li>
                            <li>El usuario podrá seleccionar únicamente con tarjeta de crédito.</li>
                            <li>El usuario confirma el pago o regresa al menú anterior.</li>
                        </ol>
                    </div>
                    <div class="col_one_third col_last">
                        <a href="<?=base_url()?>public/images/adoo/use_cases/r3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?=base_url()?>public/images/adoo/use_cases/r3.jpg" alt="Caso de uso R.3"></a><br />
                        <a href="<?=base_url()?>public/images/adoo/use_cases/ux_r3.png" data-lightbox="gallery-item"><img class="image_fade" src="<?=base_url()?>public/images/adoo/use_cases/ux_r3.png" alt="Caso de uso UX R.3"></a>
                    </div>
                    <div class="divider"><i class="icon-circle"></i></div>
                    <div class="col_two_third">
                        <h1>Caso de uso R.4</h1>
                        <span><b>Nombre: </b>Mostrar hora del pedido listo.</span><br />
                        <span><b>Descripción: </b>Se le mostrara al cliente la hora en que su pedido estará listo para recogerlo.</span><br />
                        <span><b>Propósito: </b>Que el cliente pueda visualizar la hora en que su pedido este listo, así este consiente de tener que ir, tanto si lo ordeno como consumo inmediato o como una orden programada.</span><br />
                        <span><b>Entradas: </b>Selección de hora de entrega o a la brevedad.</span><br />
                        <span><b>Salidas: </b>Hora en que se podrá recoger la comida.</span><br />
                        <span><b>Pre-condiciones: </b>El usuario debe haber terminado de hacer su pedido personalizado, escoger el tipo y hora de entrega.</span><br />
                        <span><b>Post-condiciones: </b>La información será visible hasta el momento en que el pedido este listo.</span><br />
                        <span><b>Curso Básico de Acción: </b></span><br />
                        <ol style="padding: 0 15px 0 15px;margin: 0 15px 0 15px;">
                            <li>El caso de uso empieza cuando el usuario quiere realizar seguimiento del pedido.</li>
                            <li>El sistema busca si hay un usuario registrado.
                                <ol style="padding: 0 15px 0 15px;margin: 0 15px 0 15px;"><li>En caso de no haber usuario, se pedirá que ingrese código QR generado.</li></ol>
                            </li>
                            <li>El sistema mostrara descripción del pedido así como el proceso en el que se encuentra el pedido. (UI.09)</li>
                            <li>En la parte del proceso del pedido, se dará un estimado de a que hora el pedido estará completado y listo para su envió o retiro.</li>
                        </ol>
                    </div>
                    <div class="col_one_third col_last">
                        <a href="<?=base_url()?>public/images/adoo/use_cases/r4.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?=base_url()?>public/images/adoo/use_cases/r4.jpg" alt="Caso de uso R.4"></a><br />
                        <a href="<?=base_url()?>public/images/adoo/use_cases/ux_r4.png" data-lightbox="gallery-item"><img class="image_fade" src="<?=base_url()?>public/images/adoo/use_cases/ux_r4.png" alt="Caso de uso UX R.4"></a>
                    </div>
                    <div class="divider"><i class="icon-circle"></i></div>
                    <div class="col_two_third">
                        <h1>Caso de uso R.5</h1>
                        <span><b>Nombre: </b>Avisar del pedido.</span><br />
                        <span><b>Descripción: </b>El sistema mandará una notificación al cliente cuando su pedido esté listo para recogerse o para enviarse.</span><br />
                        <span><b>Propósito: </b>Mantener al cliente al tanto de su pedido, para que esté tome las medidas pertinentes.</span><br />
                        <span><b>Entradas: </b>Información del pedido.</span><br />
                        <span><b>Salidas: </b>Notificación de que la comida esta lista.</span><br />
                        <span><b>Pre-condiciones: </b>El pedido debe de haber terminado de elaborarse, prepararse para el envio, y llegado a la hora que indicado.</span><br />
                        <span><b>Post-condiciones: </b>Se esperará a que el cliente recoja su pedido.</span><br />
                        <span><b>Curso Básico de Acción: </b></span><br />
                        <ol style="padding: 0 15px 0 15px;margin: 0 15px 0 15px;">
                            <li>El caso de uso empieza cuando el cocinero indica que el pedido de un usuario está listo.</li>
                            <li>El sistema enviara una alerta a través de la app en la que el usuario tenga su cuenta activa. (UI.10)</li>
                            <li>El sistema esperara que el usuario indique como visto la notificación.</li>
                        </ol>
                    </div>
                    <div class="col_one_third col_last">
                        <a href="<?=base_url()?>public/images/adoo/use_cases/r5.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?=base_url()?>public/images/adoo/use_cases/r5.jpg" alt="Caso de uso R.5"></a><br />
                        <a href="<?=base_url()?>public/images/adoo/use_cases/ux_r5.png" data-lightbox="gallery-item"><img class="image_fade" src="<?=base_url()?>public/images/adoo/use_cases/ux_r5.png" alt="Caso de uso UX R.5"></a>
                    </div>
                    <div class="divider"><i class="icon-circle"></i></div>
                    <div class="col_two_third">
                        <h1>Caso de uso R.6</h1>
                        <span><b>Nombre: </b>Pedido en camino.</span><br />
                        <span><b>Descripción: </b>El sistema enviará una notificación al usuario cuando el pedido vaya en camino.</span><br />
                        <span><b>Pre-condiciones: </b>El cocinero deberá tomar el pedido y prepararlo, para así que así el indique al sistema que “x” pedido está listo, para que nuestro repartidor tome el pedido y lo llevé.</span><br />
                        <span><b>Post-condiciones: </b>Te enviaremos una notificación en el momento en que nuestro repartidor salga en camino hacia tu ubicación.</span><br />
                        <span><b>Curso Básico de Acción: </b></span><br />
                        <ol style="padding: 0 15px 0 15px;margin: 0 15px 0 15px;">
                            <li>El caso de uso empieza cuando el cocinero termina de preparar algún producto.</li>
                            <li>El cocinero deberá de presionar el botón de pedido listo. (UI.12)</li>
                            <li>Al repartidor se le proporcionará una lista de entregas mediante la app pero será únicamente un usuario exclusivo para él, ya que esas funciones solamente serán para su usuario.</li>
                            <li>Se le mostrarán las zonas de entrega que debe de llevar para cada producto.</li>
                            <li>El cliente podrá ver ese recorrido para así poder saber en qué parte se encuentra su producto. (UI.13)</li>
                        </ol>
                    </div>
                    <div class="col_one_third col_last">
                        <a href="<?=base_url()?>public/images/adoo/use_cases/r6.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?=base_url()?>public/images/adoo/use_cases/r6.jpg" alt="Caso de uso R.6"></a><br />
                        <a href="<?=base_url()?>public/images/adoo/use_cases/ux_r6_1.png" data-lightbox="gallery-item"><img class="image_fade" src="<?=base_url()?>public/images/adoo/use_cases/ux_r6_1.png" alt="Caso de uso UX R.6"></a>
                        <a href="<?=base_url()?>public/images/adoo/use_cases/ux_r6_2.png" data-lightbox="gallery-item"><img class="image_fade" src="<?=base_url()?>public/images/adoo/use_cases/ux_r6_2.png" alt="Caso de uso UX R.6"></a>
                    </div>
                    <div class="divider"><i class="icon-circle"></i></div>
                    <div class="col_two_third">
                        <h1>Caso de uso R.7</h1>
                        <span><b>Nombre: </b>Notificación de llegada.</span><br />
                        <span><b>Descripción: </b>El sistema mandará un aviso cuando tu pedido haya llegado.</span><br />
                        <span><b>Pre-condiciones: </b>Podrás ver el trayecto que tendrá nuestro repartidor para hacer entrega al cliente a la zona acordada por este, en el momento que el repartidor haya llegado se enviará una notificación a tu dispositivo que a llegado tu pedido.</span><br />
                        <span><b>Post-condiciones: </b>En el momento en que el usuario reciba su pedido nuestro repartidor indicara al sistema que “x” pedido fue entregado de igual manera acompañado con la confirmación del cliente.<br />De esta manera podremos realizar la confirmación en nuestro sistema.</span><br />
                        <span><b>Curso Básico de Acción: </b></span><br />
                        <ol style="padding: 0 15px 0 15px;margin: 0 15px 0 15px;">
                            <li>El repartidor presionara “estoy aquí” dentro de la app que ha llegado su producto a la ubicación que se solicitó. (UI.14)</li>
                            <li>Será obligación del repartidor verificar que el número de pedido que haya en su lista sea el mismo que los que le sean entregados por el personal de preparación.</li>
                        </ol>
                    </div>
                    <div class="col_one_third col_last">
                        <a href="<?=base_url()?>public/images/adoo/use_cases/r7.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?=base_url()?>public/images/adoo/use_cases/r7.jpg" alt="Caso de uso R.7"></a><br />
                        <a href="<?=base_url()?>public/images/adoo/use_cases/ux_r7.png" data-lightbox="gallery-item"><img class="image_fade" src="<?=base_url()?>public/images/adoo/use_cases/ux_r7.png" alt="Caso de uso UX R.7"></a>
                    </div>
                    <div class="divider"><i class="icon-circle"></i></div>
                    <div class="col_two_third">
                        <h1>Caso de uso R.8</h1>
                        <span><b>Nombre: </b>Armado de ensalada.</span><br />
                        <span><b>Descripción: </b>El usuario podrá armar su propia ensalada con los ingredientes que se le proporcionen.</span><br />
                        <span><b>Pre-condiciones: </b>Inicio de sesión por parte del usuario, este deberá tener ganas de comer alguna ensalada, abrir el apartado de armado de ensalada, la aplicación le proporcionara los ingredientes disponibles para que arme su propia ensalada.</span><br />
                        <span><b>Post-condiciones: </b>El sistema le mostrará al usuario el confirmar pedido.</span><br />
                        <span><b>Curso Básico de Acción: </b></span><br />
                        <ol style="padding: 0 15px 0 15px;margin: 0 15px 0 15px;">
                            <li>El usuario se dirigirá al apartado de realizar pedido. (UI.02)</li>
                            <li>Con elementos muy visuales podrás seleccionar el ingrediente que quieras, que dará forma a tu armado de ensaladas. (UI.03)</li>
                            <li>En caso de que sea todo lo que deseas, presionar confirmar pedido. </li>
                        </ol>
                    </div>
                    <div class="col_one_third col_last">
                    <a href="<?=base_url()?>public/images/adoo/use_cases/r8.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?=base_url()?>public/images/adoo/use_cases/r8.jpg" alt="Caso de uso R.8"></a><br />
                        <a href="<?=base_url()?>public/images/adoo/use_cases/ux_r8_1.png" data-lightbox="gallery-item"><img class="image_fade" src="<?=base_url()?>public/images/adoo/use_cases/ux_r8_1.png" alt="Caso de uso UX R.8"></a>
                        <a href="<?=base_url()?>public/images/adoo/use_cases/ux_r8_2.png" data-lightbox="gallery-item"><img class="image_fade" src="<?=base_url()?>public/images/adoo/use_cases/ux_r8_2.png" alt="Caso de uso UX R.8"></a>
                    </div>
                    <div class="divider"><i class="icon-circle"></i></div>
                    <div class="col_two_third">
                        <h1>Caso de uso R.9</h1>
                        <span><b>Nombre: </b>Órdenes a la vista.</span><br />
                        <span><b>Descripción: </b>El cocinero verá las órdenes que lleguen para así poder realizarlas.</span><br />
                        <span><b>Pre-condiciones: </b>El usuario generará un pedido que será entregado a nuestros cocineros, ellos se encargaran de la preparación del producto.</span><br />
                        <span><b>Post-condiciones: </b>El sistema le borrará de la pantalla el pedido que ya haya realizado.</span><br />
                        <span><b>Curso Básico de Acción: </b></span><br />
                        <ol style="padding: 0 15px 0 15px;margin: 0 15px 0 15px;">
                            <li>El cocinero iniciará sesión de igual manera con su inicio de sesión en la app tendrá acceso especifico hacia los pedidos que habrá.</li>
                            <li>Tendrá un listado de las ordenes que lleguen. (UI.12)</li>
                            <li>Habrá un apartado para los pedidos que van a recoger y los que sean mandados a alguna ubicación.</li>
                            <li>Basta con que el cocinero presione algún pedido para confirmar que este listo.</li>
                        </ol>
                    </div>
                    <div class="col_one_third col_last">
                        <a href="<?=base_url()?>public/images/adoo/use_cases/r9.jpg" data-lightbox="gallery-item"><img class="image_fade" src="<?=base_url()?>public/images/adoo/use_cases/r9.jpg" alt="Caso de uso R.9"></a><br />
                        <a href="<?=base_url()?>public/images/adoo/use_cases/ux_r9.png" data-lightbox="gallery-item"><img class="image_fade" src="<?=base_url()?>public/images/adoo/use_cases/ux_r9.png" alt="Caso de uso UX R.9"></a>
                    </div>
			    </div>
            </div>
		</section>
		<?= $_js ?>