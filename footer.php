<footer>
	<div class="footer-Cont">
		<ul class="footer--Cont--Ul">
			<li class="listCont">
				<label class="title"><i class="el el-ok-sign"></i>Confianza</label>
				<figure class="listSub">
					<img src="http://www.afip.gob.ar/genericos/f960NM/documentos/img3.jpg" alt="">
				</figure>
			</li>
			<li class="listCont">
				<label class="title"><i class="el el-credit-card"></i>Facilidades de pago</label>
				<figure class="listSub">
					<img src="<?php bloginfo('template_url'); ?>/img/sm.png" alt="">
				</figure>
			</li>
			<li class="listCont">
				<label class="title"><i class="el el-unlock-alt"></i>Sitio seguro</label>
				<figure class="listSub">
					<img src="<?php bloginfo('template_url'); ?>/img/secure.jpg" alt="">
				</figure>
			</li>
			<li class="listCont">
				<label  class="title"><i class="el el-file-edit"></i>Contacto</label>
				<div class="listCont">
					<ul class="listSubCont">
						<li class="list">4864-2742</li>
						<li class="list">6088-7480</li>
						<li class="list">Lun a Vie de 8 a 20hs.</li>
						<li class="list">Sábabados de 9 a 15hs.</li>
					</ul>
				</div>
			</li>
		</ul>
		<div class="derechosFooter">
			<div class="derechosFooter--Iz">
				<span class="title">2013 - 2015 Amaruviajes.com - Todos los derechos reservados</span>
			</div>
			<div class="derechosFooter--De">
				<span class="title">Desarrollado por viaintimedia</span>
			</div>
		</div>
		</div>

</footer>
<script>
		
	function on() {
		setTimeout(function(){
			$("body").remove('svg');
			$(".on").css("display","none");
			
		}, 5000);
	}
	on();

	function toClick(click, show){
		$(click).on('click', function(){
			$(".menu--Mobil").slideToggle();
		});
	}

	toClick($(".clickMenu"));

</script>
</body>
</html>