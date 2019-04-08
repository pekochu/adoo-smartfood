<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>
        <!-- Pie de página
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">
					<div class="col_two_third">
						<div class="col_one_third">
							<div class="widget clearfix">
								<img src="<?=base_url()?>public/images/Logo_white.svg" alt="" class="footer-logo">
								<p>Página de documentación e información sobre el proyecto de ADOO "SmartFood".</p>
								<div style="background: url('<?=base_url()?>public/images/world-map.png') no-repeat center center; background-size: 100%;">
									<address>
										<strong>ESCOM - IPN</strong><br>
										Av. Juan de Dios Bátiz S/N<br>
										Gustavo A. Madero, CDMX, Nueva Industrial Vallejo, 07738<br>
									</address>
									<abbr title="Phone Number"><strong>Phone:</strong></abbr> ---<br>
									<abbr title="Fax"><strong>Fax:</strong></abbr> ---<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> ---
								</div>

							</div>

						</div>

						<!-- Publicaciones recientes
						============================================= -->
						<div class="col_one_third col_last">

							<div class="widget clearfix">
								<h4>Publicaciones recientes</h4>

								<div id="post-list-footer">
									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">¡Hola mundo!</a></h4>
											</div>
											<ul class="entry-meta">
												<li><?= date('d/m/Y') ?></li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="col_one_third col_last">

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-lg-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Visitas</h5>
								</div>

								<div class="col-lg-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Descargas</h5>
								</div>

							</div>

						</div>

						<div class="widget subscribe-widget clearfix">
							<h5><strong>Esto es sólo para llenar espacio</strong>.</h5>
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="icon-email2"></i></div>
									</div>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Escribe tu correo">
									<div class="input-group-append">
										<button class="btn btn-success" type="submit">Suscribirme</button>
									</div>
								</div>
							</form>
						</div>
						<!--
						<div class="widget clearfix" style="margin-bottom: -20px;">
							<div class="row">
								<div class="col-lg-6 clearfix bottommargin-sm">
									<a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
								</div>
								<div class="col-lg-6 clearfix">
									<a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
								</div>
							</div>
						</div>-->
					</div>
				</div>
			</div>
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; <?= date('Y') ?> Todos los derechos reservados. Peko Inc.<br>
						<div class="copyright-links"><a href="#">ToS</a> / <a href="#">Política de Privacidad</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<!--
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>-->
							<a href="https://twitter.com" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="https://github.com" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>
							<!--
							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>-->
						</div>

						<div class="clear"></div>

						<i class="fa fa-envelope"></i> --- <span class="middot">&middot;</span> <i class="fa fa-telegram"></i> ---
					</div>

				</div>

			</div>
		</footer>
	</div>
	<div id="gotoTop" class="icon-angle-up"></div>
</body>
</html>