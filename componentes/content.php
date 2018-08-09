<main class="container" id="content_main">
	<!--SECCION DONATIVOS-->
	<div id="content_info">
		<div class="row">
			<p class="titulos_donaciones">Tipo de donativo:</p>
			<div class="tipo_donativos">
			<a class="waves-effect waves-light btn-large">MENSUAL</a>
			<a class="waves-effect waves-light btn-large">PUNTUAL</a>				
			</div>			
		</div>
		<div class="row">
			<p class="titulos_donaciones">¿Qué cantidad?</p>
			<div class="cantidades col m12 s12">
				<article id="opt1">
					<a class="waves-effect waves-light btn-large">10<span>€</span></a>
					<span class="descrip_causa">Alimentos para un niño durante 25 días</span>
				</article>
				<article id="opt2">			
					<a class="waves-effect waves-light btn-large">20<span>€</span></a>
					<span class="descrip_causa">Alimentos para un niño durante 25 días</span>
				</article>	
				<article id="opt3">
					<a class="waves-effect waves-light btn-large">30<span>€</span></a>
					<span class="descrip_causa">Alimentos para un niño durante 25 días</span>
				</article>
				<input type="number" name="" placeholder="Otra cantidad" id="input_cantidad" class="text-center" maxlength="5">
			</div>
			<!--CAMPAÑAS-->
			<?php require 'componentes/view_camp1.php'; ?>
			<!--<a class="waves-effect waves-light btn-large" title="" id="btn_donar">DONAR</a>-->
			<a class="waves-effect waves-light btn-large" title="" id="btn_donar">CONTINUAR</a>	
		</div>		
	</div>
	<!--FIN SECCION DONATIVOS-->

	<!--SECCION INFORMACIÓN PAGOS-->

	<div id="info_pagos">
		<p class="text-center title">TAMBIÉN PUEDES DONAR POR</p>
		<div class="row text-center" id="content_info_pagos">
			<div class="col telefono">
				<p class="titles">TELÉFONO</p>
				<P>(+34) 91 725 92 12</P>
				<P>93 237 37 63</P>
			</div>
			<div class="col border transferencia">
				<p class="titles">TRANSFERENCIA BANCARIA</p>
				<p><span class="titles">SANTANDER</span> ES74 0049 2674 59 2814342966</p>
				<p><span class="titles">LA CAIXA</span> ES21 2100 2415 42 0200140293</p>
			</div>
			<div class="col internacional">
				<P>Para transferencias internacionales <a href="" title="">Haz click aquí</a></P>
			</div>						
		</div>
	</div>
	<!--FIN SECCION INFORMACIÓN PAGOS-->

	<!--SECCION INFORMACIÓN EJEMPLO-->
	<div id="info_ejemplo">
		<div class="row">
			<div class="col m3 s12 text-center content1">
				  <i class="material-icons">lock_outline</i>
				  <p>Tu donación está en un ambiente seguro</p>
			</div>
			<div class="col m9 content2">
				<div class="row">
					<div class="col m6 s12 progress_bar">
						<p class="title">¿Cuánto desgravan las donaciones?</p>
						  <div class="progress">
						      <div class="determinate"></div>
						      <span class="line"></span>						      
						  </div>
						  <span class="dato1" id="dato1">10%</span>
						  <span class="dato2" id="dato2">0%</span>
						  <div class="col datotxt1">
						  	<span class="line"></span>
						  	<p>Hasta los primeros <strong>150€</strong></p>
						  	<span class="line2"></span>
						  </div>
						  <div class="col datotxt2">
						  	<p>De la cantidad a partir de <strong>150€</strong></p>
						  	<span class="line3"></span>
						  </div>
						  

					</div>
					<div class="col m6 s12 text-center desgravacion_content">
						<p class="title2">Ejemplo</p>
						<p class="info_mes_año"><span>Si donas 20€/Mes(240€/Año)</span></p>
						<p class="info_desgrava">Te desgravas 139,50€</p>
							<div class="info1 col">
								<span>240€</span>
							</div>
						<div class="info2">
							<p>El 75% de los primeros 150€ <br> + <br> El 30% de los siguientes 90€</p>										
						</div>								
					</div>					
				</div>		
			</div>			
		</div>
	</div>
	<!-- FIN SECCION INFORMACIÓN EJEMPLO-->

	<!--SECCION ACORDION-->
	<div class="info_acordion">
		  <ul class="collapsible">
		    <li>
		      <div class="collapsible-header">
		      	<h5>¿A quién y como llega tu donativo?</h5>
		      	<i class="material-icons">add_circle_outline</i>
		      </div>
		      <div class="collapsible-body"><span>Si tú has querido colaborar con una campaña específica, tu donativo se destinará a la financiación de proyectos de esa campaña en cuestión. En caso de que al recibir tu aportación, las necesidades ya estuvieran cubiertas, Ayuda a la Iglesia Necesitada destinará tu donativo a proyectos similares o a paliar necesidades pastorales o de emergencia en el mismo país.<br>
 
			Si no especificas el destino concreto de tu donativo, Ayuda a la Iglesia Necesitada lo destinará a las necesidades más urgentes.<br>
			 
			Los donativos que recibimos tenemos el deber moral de canalizarlos con pulcritud extrema; nos debemos a nuestros benefactores, que depositan su confianza en la gestión impecable de Ayuda a la Iglesia Necesitada y a nuestros beneficiarios, la Iglesia que sufre, que son la razón de ser de esta Fundación.<br>


			Ahora, que vas a realizar tu donativo, es importante que conozcas cuánto desgravan tus aportaciones ya que ahora desgravan más que nunca.<br>
			Los primeros 150 € anuales que donas desgravan el 75 %, es decir que hacienda te devuelve 112,5 €.<br>
			A partir de ahí, tus donativos podrán deducir el 30 %, y el 35% si el donativo es recurrente.</span></div>
		    </li>
		    <li>
		      <div class="collapsible-header">
		      	<h5>¿Cómo y cuánto desgravan tus donativos?</h5>
		      	<i class="material-icons">add_circle_outline</i></div>
		      <div class="collapsible-body">
		      	<span>Ahora, que vas a realizar tu donativo, es importante que conozcas cuánto desgravan tus aportaciones ya que ahora desgravan más que nunca.
				Los primeros 150 € anuales que donas desgravan el 75 %, es decir que hacienda te devuelve 112,5 €. 
				A partir de ahí, tus donativos podrán deducir el 30 %, y el 35% si el donativo es recurrente.
				</span>
				<img src="assets/img/img-infografia.png" alt="infografia" class="responsive-img">
				<span>
				¿Que considera Hacienda como donativo recurrente?<br>

				Se considera donativo recurrente a toda aquella cantidad entregada a la misma institución de forma mensual/anual y periódica durante al menos 4 años consecutivos y que es igual o mayor cada año.

				Todo esto significa que el coste real de tus donativos es menor que nunca, y por ello, queremos animarte a ser generoso en tus aportaciones, y que, a ser posible, te comprometas de manera mensual con los cristianos que más necesitan tu ayuda.
				</span>
</div>
		    </li>
		    <li>
		      <div class="collapsible-header">		      	
		      	<h5>¿Problemas con tu donativo?</h5>
		      	<i class="material-icons">add_circle_outline</i></div>
		      <div class="collapsible-body">
		      	<span>Si te ha surgido alguna incidencia al realizar tu donativo, aquí estamos para ayudarte:<br><br>
 
				-       Llámanos: 91 725 92 12 / 93 237 37 63 (de L a V de 7.30 a 16 h)<br>
				-       Escríbenos: info@ayudaalaiglesianecesitada.org<br><br>
				 
				En caso de que no te podamos resolver la incidencia en este momento, puedes donar haciendo una transferencia bancaria a estos números de cuenta:<br><br>
				 
				Banco Popular ES12 0075 0080 1706 0166 7548<br>
				La Caixa ES21 2100 2415 42 0200140293<br>
				Santander ES74 0049 2674 59 2814342966<br>
				Bankia ES87 2038 1115 24 6000703295<br><br>
				 
				No olvides especificar en el concepto, tu nombre y DNI y el destino de tu donativo, si es para una campaña en concreto.<br>

				¿Quieres que sea periódico pero que no sea mensual?<br><br>

				Si quieres hacer un donativo periódico pero que no sea mensual, sino trimestral, semestral o anual puedes poner en contacto con nosotros a través del teléfono 91 725 92 12 o por correo electrónico a info@ayudaalaiglesianecesitada.org
				</span>
				</div>
		    </li>
		  </ul>		
	</div>
<!-- FIN SECCION ACORDION-->

<!--SECCION INFORMATIVA DE DONACIONES-->
	<div class="info_donaciones text-center">
		<p>Tus donativos se registran a nombre de Ayuda a la Iglesia Necesitada, con número de identifación fiscal <span>R-2800175-H y domicilio en C/ Ferrer del Río, 14. 28028 Madrid</span></p>
		<p>Puedes contactar con nosotros, llamando a: 91 725 92 12 / 93 237 37 63 o escribiendo a: <a href="mailto:info@ayudaalaiglesianecesitada.org?subject=Contacto" "email me">info@ayudaalaiglesianecesitada.org</a></p>
	</div>
</main>