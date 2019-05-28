<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>
		<!-- Título de la página
		============================================= -->
		<section id="page-title" class="page-title-pattern">
			<div class="container clearfix">
				<h1>RF y RNF</h1>
				<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url()?>inicio/">Inicio</a></li>
					<li class="breadcrumb-item active"><a href="<?=base_url()?>diagramas/">Diagramas</a></li>
					<li class="breadcrumb-item active" aria-current="page">Requerimientos Funcionales y No Funcionales</li>
				</ol>
			</div>
		</section>

		<!-- Contenido
		============================================= -->
		<section id="content">
			<div class="content-wrap">		
				<div class="container clearfix">
                    <div class="col_two_third">
                        <h1>Requerimientos Funcionales</h1>
                        <ol>
                            <li>El sistema deberá mostrar los resultados de las categorías en un máximo de 5 Segundos, en caso de no mostrar nada, para la búsqueda y deberá mostrarle a un usuario una opción para recargar las opciones.</li>
                            <li>El cliente registrado, podrá pagar con sus opciones de pago guardadas, con PayPal o con tarjeta de débito o crédito. </li>
                            <li>El cliente tipo invitado solo podrá pagar con tarjeta de crédito.</li>
                            <li>En caso de hacer pedido para una ser entregado en una mesa, el cliente podrá pagar en efectivo, una vez finalizado su pedido le mostrará un ticket electrónico el cual mostrará en caja y pagará el importe indicado.</li>
                            <li>El sistema mandará un aviso cuando este listo su pedido.</li>
                            <li>El sistema enviará una notificación cuando el pedido vaya en camino.</li>
                            <li>El sistema mandará un aviso cuando tu pedido haya llegado.</li>
                            <li>El usuario podrá armar su propia ensalada con los ingredientes que se le proporcionen. </li>
                            <li>El cocinero verá las órdenes que lleguen.</li>
                            <li>Las órdenes tendrán orden de importancia.</li>
                            <li>La tarifa se cobrará en pesos.</li>
                            <li>El cobro puede ser en efectivo o tarjeta.</li>
                            <li>El usuario podrá seleccionar la hora en que recogerá su pedido.</li>
                            <li>El usuario puede ver su historial de pedidos</li>
                            <li>El sistema recomendará un pedido o paquete basado en su estado de ánimo. </li>
                            <li>El sistema, para poder hacer reconocimiento facial y de estado de ánimo, contará con un API próximo a definir para poder realizar tal acción. </li>
                            <li>El cliente podrá calificar su comida y su recomendación basada en su estado de ánimo a fin de mejorar los productos ofrecidos, así como el sistema de recomendación por estado de ánimo.</li>
                        </ol>
                            <h1>Requerimientos No Funcionales</h1>
                        <ol start="18">
                            <li>El sistema debe contar con dos opciones principales, una para recoger pedido en mostrador, otra para pedir que se sirva en una mesa del restaurante.</li>
                            <li>En caso de pedir en una mesa, se deberá escanear un código QR antes de empezar a personalizar el pedido.</li>
                            <li>El sistema dividirá en categorías los ingredientes de los pedidos (como tipos de pan, vegetales que llevará, aderezos, etc).</li>
                            <li>R10. La aplicación únicamente estará en servicio de Lunes a Viernes. R11.Solo estará disponible en un horario de 8:00 am a 17:00 pm. R12. La app será compatible con el sistema operativo Android e IOS. R13.La app puede ser descargada desde play Store.</li>
                            <li>La app será desarrollado en Android y Xamarin.</li>
                            <li>Los datos se guardarán en un gestor de Base de datos Mysql. R16. Se empleará el lenguaje Java.</li>
                            <li>Cada semana se le dará mantenimiento a la app.</li>
                            <li>Conexión a internet para poder realizar las peticiones constantes a la API que devolverá información sobre el estado de ánimo o hardware capaz de ejecutar un sistema que pueda reconocer estados de animo gracias a reconocimiento de imágenes o patrones. </li>
                            <li>El sistema será compatible con Android 6.0 o superior. </li>
                            <li>La aplicación deberá distribuirse a través de una tienda de aplicaciones, i.e., Google Play. </li>
                            <li>El sistema deberá mostrar los resultados de las categorías en un máximo de 5 Segundos, en caso de no mostrar nada, para la búsqueda y deberá mostrarle a un usuario una opción para recargar las opciones.</li>
                        </ol>
                            <h1>Restricciones</h1>
                        <ol start="29">
                            <li>El cliente puede iniciar sesión con su cuenta, o como invitado.</li>
                            <li>La contraseña del cliente debe tener al menos un carácter especial, un alfabético, un numérico y la longitud a 8 caracteres.</li>
                            <li>El sistema debe cumplir las disposiciones recogidas en la ley orgánica de datos personales y en el reglamento de medidas de seguridad.</li>
                            <li>En caso de que no pueda tener su pedido en la hora que solicitó, le aparecerá un mensaje con disculpas por no poder hacerlo.</li>
                            <li>Cada usuario del Sistema deberá contar con una contraseña para el acceso al mismo.</li>
                            <li>Validación de los datos antes de ser guardados o afectados en una base de datos. </li>
                            <li>La información que se enviará a la API de reconocimiento facial o de estado de ánimo se llevará a cabo con JSON. </li>
                            <li>Los costos serán mostrados en pesos mexicanos (MXN). </li>
                            <li>La aplicación funcionará únicamente dentro de lugares seleccionados.</li>
                        </ol>
                    </div>
			    </div>
            </div>
		</section>
		<?= $_js ?>