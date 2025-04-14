<?php 
	require('php/quantityClients.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
		<title>БПОО ГПОУ "Профессиональный колледж г.Новокузнецка"</title>
		<link rel="stylesheet" type="text/css" href="styles/header.css"/>
		<link rel="stylesheet" type="text/css" href="styles/media/mediaHead.css"/>
		<link rel="stylesheet" type="text/css" href="styles/origin.css"/>
		<link rel="stylesheet" type="text/css" href="styles/information.css"/>
		<link rel="stylesheet" type="text/css" href="styles/prof.css"/>
		<link rel="stylesheet" type="text/css" href="styles/events.css"/>
		<link rel="stylesheet" type="text/css" href="styles/partners.css"/>
		<link rel="stylesheet" type="text/css" href="styles/accessible.css"/>
		<link rel="stylesheet" type="text/css" href="styles/education.css"/>
		<link rel="stylesheet" type="text/css" href="styles/courses.css"/>
		<link rel="stylesheet" type="text/css" href="styles/passcourse.css"/>
		<link rel="stylesheet" type="text/css" href="styles/homepage.css"/>
		<link rel="stylesheet" type="text/css" href="styles/virt.css"/>
		<link rel="stylesheet" type="text/css" href="styles/error.css"/>
		<link rel="stylesheet" type="text/css" href="styles/modal.css"/>
		<link rel="stylesheet" type="text/css" href="styles/footer.css"/>
		<link rel="stylesheet" type="text/css" href="styles/media/mediaHome.css"/>
		<link rel="stylesheet" type="text/css" href="styles/media/mediaBasicinf.css"/>
		<link rel="stylesheet" type="text/css" href="styles/media/mediaEducation.css"/>
		<link rel="stylesheet" type="text/css" href="styles/media/mediaProf.css"/>
		<link rel="stylesheet" type="text/css" href="styles/media/mediaEvents.css"/>
		<link rel="stylesheet" type="text/css" href="styles/media/mediaPartners.css"/>
		<link rel="stylesheet" type="text/css" href="styles/media/mediaFooter.css"/>
		<link rel="stylesheet" type="text/css" href="styles/media/mediaVirt.css"/>
		<script type="text/javascript" src="js/modal.js"></script>
		<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
		<script src="https://kit.fontawesome.com/13c2a574f8.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js" integrity="sha512-HaoDYc3PGduguBWOSToNc0AWGHBi2Y432Ssp3wNIdlOzrunCtB2qq6FrhtPbo+PlbvRbyi86dr5VQx61eg/daQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script>
			( function ( d ) {
				var s=d.createElement("script");
				s.setAttribute("data-language", "ru");
				s.setAttribute("data-position", 1);
				s.setAttribute("data-size", "large");
				s.setAttribute("data-color", "#fcdd51");
				s.setAttribute("data-type", "3");

				s.setAttribute("data-account", "qhrSB9S3j8");
				s.setAttribute("src", "https://cdn.userway.org/widget.js");
				(d.body || d.head).appendChild(s);
			})(document);
		 </script>
	</head>
	<body>
		<header>
			<a href="https://pkgn.ru">
				<img src="images/klogonew.png" class="klogo">
			</a>
	    	<div class="container">
	    		<div class="navbar__wrap">
	    			<div class="logo">
	    				<a href="index.php" id="logo" onclick="window.scrollTo(0,0);">
	    					<img src="images/logo.png" />
	    				</a>
	    			</div>		
	    			<ul class="menu" id="menu">
	    				<li>
	    					<a href="#basicInformation" onclick="window.scrollTo(0,0);">Основные сведения</a>
	    				</li>
	    				<li>
	    					<a href="#education" onclick="window.scrollTo(0,0);">Образование</a>
	    				</li>
	    				<li>
	    					<a href="#careerGuidance" onclick="window.scrollTo(0,0);">Профориентация</a>
	    				</li>
	    				<li>
	    					<a href="#events" onclick="window.scrollTo(0,0);">Мероприятия</a>
	    				</li>
	    				<li>
	    					<a href="#partners" onclick="window.scrollTo(0,0);">Партнеры</a>
	    				</li>
	    				<li>
	    					<a href="#accessibleEnvironment" onclick="window.scrollTo(0,0);">Доступная среда</a>
	    				</li>
	    				<p class="phone-line">
	    					<span>Горячая линия</span>
	    					<br />
	    					<br />
	    					Телефон горячей линии по вопросам поступления и обучения инвалидов и лиц с ОВЗ:
	    					<br />
	    					<br />
	    					<span>8(3843)32-87-47,<br /> 8-908-947-11-47</span>
	    				</p>
	    				<li class="icon-head">
	    					<a href="https://vk.com/bpoo42" target="_blank" class="vklogo">
	    						<i class="fa-brands fa-vk fa-xl" style="color: #000000;"></i>
	    					</a>
	    				</li>
	    				<li class="icon-head">
	    					<a href="https://t.me/bpoo42" target="_blank" class="vklogo">
	    						<i class="fa-brands fa-telegram fa-xl" style="color: #000000;"></i>
	    					</a>
	    				</li>
	    				<li class="icon-head">
	    					<a href="https://ok.ru/bpoopkgn " target="_blank" class="vklogo">
	    						<i class="fa-brands fa-odnoklassniki fa-xl" style="color: #000000;"></i>
	    					</a>
	    				</li>
	    				<li>
	    					<img src="images/Phone.png" id="show-modal" class="ico-phone">
	    				</li>
	    			</ul>
	    			<div class="hamb">
	    				<div class="hamb__field" id="hamb">
	    					<span class="bar"></span>
	    					<span class="bar"></span>
	    					<span class="bar"></span>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    	<div class="popup" id="popup"></div>	
		</header>
		<main id="app">
			<div class="homepage">
				<div class="swiper mySwiper">
		    		<div class="parallax-bg" data-swiper-parallax="-23%"></div>
		    		<div class="swiper-wrapper">
		      			<div class="swiper-slide">
		      				<div class="first-slide">
		      					<div class="info-first-slide">
		      						<div class="first-slide-text">
		      							<p class="first-slide-tittle">
		      								Базовая профессиональная образовательная организация обеспечивающая поддержку региональной системы инклюзивного профессионального образования инвалидов и лиц с ОВЗ в Кемеровской области - Кузбассе
		      							</p>
		      							<p class="first-slide-second-tittle">
		      								Цель БПОО
		      							</p>
		      							<p class="first-slide-target">
		      								Координация развития инклюзивного СПО и ПО в Кемеровской области - Кузбассе, разработка и внедрение региональной модели сетевого взаимодействия с ПОО Кузбасса для обеспечения условий доступности получения СПО и ПО для инвалидов и лиц с ОВЗ.
		      							</p>
		      						</div>
		      					</div>
		      				</div>
		      			</div>
		      			<div class="swiper-slide">
		      				<div class="second-slide">
		      					<div class="info-second-slide">
		      						<div class="second-slide-text">
		      							<p class="second-slide-tittle">
		      								Задачи БПОО
		      							</p>
		      							<ul class="second-slide-tasks">
		      								<li>
		      									Разработка и реализация комплекса мер по профессиональной ориентации инвалидов	и лиц с ОВЗ в целях выбора ими профессии / специальности с учетом их способностей и склонностей
		      								</li>
		      								<li>
		      									Содействие в создании условий доступности в ПОО Кузбасса, в том числе через организацию сетевого взаимодействия
		      								</li>
		      								<li>
		      									Реализация мероприятий по сопровождению инвалидов и лиц с ОВЗ при освоении образовательных программ СПО и ПО, содействие в их последующем трудоустройстве
		      								</li>
		      							</ul>
		      						</div>
		      					</div>
		      				</div>
		      			</div>
		      			<div class="swiper-slide">
		      				<div class="subsequent-slide third-slide">
		      					
		      				</div>
		      			</div>
						  <div class="swiper-slide">
		      				<a  href="documents/homepage/sertifikatbpoo.pdf" class="subsequent-slide fourth-slide">
		      					
							</a>
		      			</div>
		      		</div>
		    		<div class="swiper-button-next"></div>
		    		<div class="swiper-button-prev"></div>
		    		<div class="swiper-pagination"></div>
		  		</div>
		  		<div class="homepage-info-wrapper">
		  			<div class="vid-wrapper">
		  				<video controls autoplay muted>
		      				<source src="videos/aboutbpoo2.mp4" type="video/mp4" />
		      			</video>
		  			</div>

					<div class="bpoo-contacts">
						<div>
							<i class="fa-solid fa-location-dot"></i> <p>654015, Кемеровская область-Кузбасс, г.Новокузнецк, ул.Метёлкина,д.17</p>
							<i class="fa-solid fa-calendar-days"></i> <p>График работы:<br>С понедельника по пятницу с 8:30 до 16:30<br>С 12:00 до 12:48 - обед<br>Суббота, воскресенье - выходные дни</p>
							<i class="fa-solid fa-envelope"></i> <a href="mailto:bpoo@pkgn.ru">bpoo@pkgn.ru</a>
							<i class="fa-solid fa-phone"></i> <a href="tel:8(3843)32-87-47">Горячая линия - 8(3843)32-87-47</a>
							<i class="fa-brands fa-vk"></i> <a href="https://vk.com/bpoo42">Группа в ВК</a>
							<i class="fa-brands fa-telegram"></i> <a href="https://t.me/bpoo42">Группа в Telegram</a>
							<i class="fa-brands fa-odnoklassniki"></i> <a href="https://ok.ru/bpoopkgn">Группа в одноклассниках</a>
						</div>
						<div>
							<img src="documents/homepage/images/Кухарь.jpg"> <p><b>Кухарь Елена Владимировна - </b>руководитель отдела инклюзивного и дополнительного образования, руководитель Базовой профессиональной образовательной организации Кузбасса</p>
							<img src="documents/homepage/images/Огородова.jpg"> <p><b>Огородова Дарья Андреевна - </b>методист БПОО</p>
							<img src="documents/homepage/images/Климович.JPG"> <p><b>Климович Никита Сергеевич - </b>техник-программист БПОО</p>
							<img src="documents/homepage/images/Пинигина.jpg"> <p><b>Пинигина Татьяна Владимировна - </b>педагог-психолог</p>
							<img src="documents/homepage/images/Калиничева.jpg"> <p><b>Калиничева Светлана Ивановна - </b>педагог-психолог</p>
							<img src="documents/homepage/images/Головкина.jpg"> <p><b>Головкина Лира Ивановна - </b>тьютор</p>
							<img src="documents/homepage/images/Золотарёва.jpg"> <p><b>Золотарева Галина Сергеевна - </b>социальный педагог</p>
						</div>
					</div>

		  			<!--<div class="bpoo-first-info">
		  				<div>
		  					<p>
		  						&nbsp;&nbsp;<span>Базовая профессиональная образовательная организация</span> (далее - БПОО) - это статус, который присваивается профессиональной образовательной организации (далее - ПОО) на основании решения высшего государственного органа исполнительной власти субъекта Российской Федерации.
		  					</p>
		  					<a href="documents/homepage/rsio_prikaz1.pdf" target="_blank">Приказ об утверждении базовой профессиональной образовательной организации, обеспечивающей поддержку региональной системы инклюзивного профессионального образования инвалидов</a>
		  				</div>
		  				<img src="images/prikaz1.jpg" />
		  			</div>-->
		  			<div class="bpoo-second-info">
						<div>
		  				<a href="documents/homepage/prikaz2.pdf" target="_blank"><img src="images/prikaz2.jpg" /></a>
						</div>
						<div>	
		  					<p>
							  	&nbsp;&nbsp;<span>Базовая профессиональная образовательная организация</span> (далее - БПОО) - это статус, который присваивается профессиональной образовательной организации (далее - ПОО) на основании решения высшего государственного органа исполнительной власти субъекта Российской Федерации.
								<br>
								<br>
		  						&nbsp;&nbsp;Деятельность Структурного подразделения <span>БПОО</span> в Кемеровской области - Кузбассе направлена на развитие и формирование в регионе сети ПОО, в которых обеспечены условия доступности получения качественного среднего профессионального образования (далее - СПО) и профессионального обучения (далее - ПО) для инвалидов и лиц с ОВЗ.
		  						<br />
		  						<br />
								&nbsp;&nbsp;Отдел инклюзивного и дополнительного образования <span>БПОО</span> координирует деятельность ПОО в Кемеровской области - Кузбассе, включая организационные мероприятия по профориентации, сопровождению и содействию в последующем трудоустройстве инвалидов и лиц с ОВЗ при получении ими СПО и ПО, а также содействию в создании условий доступности СПО и ПО в ПОО субъекта Российской Федерации.

		  					</p>
		  				</div>
		  			</div>

					<div class="bpoo-second-info">
					<div>
		  				<img src="images/БПОО СПТ.png" />
						<a href="https://spt42.kemobl.ru/" target="_blank">ГПОУ «Сибирский политехнический техникум»</a>
						<!--<img src="images/sertifikatSPT.png" />-->
						<a href="documents/homepage/sertifikatSPT.pdf" target="_blank">
		  					<img src="images/sertifikatSPT.png" />
						</a>
					</div>
					<div>
		  				<img src="images/Приказ БПОО ЛКПТ.png" />
						<a href="https://lkpt.kemobl.ru/bpoo-kuzbassa-lkpt/" target="_blank">ГПОУ «Ленинск-Кузнецкий политехнический техникум»</a>
						</div>
					</div>

		  			<!--<div class="sertificate">
					  	<a href="documents/homepage/sertifikatbpoo.pdf" target="_blank">
		  					<img src="images/sertifikat.jpg" />
						</a>
		  			</div>-->
		  		</div>
			</div>
		</main>
		<footer>
			<p class="count-visits">Количество посетивших сайт: <?php echo $intClients; ?></p>
			<video preload="auto" autoplay muted loop>
				<source src="videos/footer.mp4" type="video/mp4" />
			</video>
			<div class="smooth-video"></div>
			<div class="info-tittle-footer">
				<p>Полезные ссылки</p>
				<div class="line"></div>
			</div>
			<div class="footer-lists">
				<ul>
					<li>
						<a href="https://www.ufz-kemerovo.ru/" target="_blank">
							Министерство труда и занятости населения Кузбасса
						</a>
					</li>
					<li>
						<a href="http://dsznko.ru/" target="_blank">
							Министерство Социальной Защиты Населения Кузбасса
						</a>
					</li>
					<li>
						<a href="https://mincult-kuzbass.ru/" target="_blank">
							Министерство культуры и национальной политики Кузбасса
						</a>
					</li>
					<li>
						<a href="https://minsport-kuzbass.ru/" target="_blank">
							Министерство физической культуры и спорта Кузбасса
						</a>
					</li>
					<li>
						<a href="https://www.voi.ru/o_nas/regionalnye_organizaci/oblasti_rf/kemerovskaya_oblast" target="_blank">
							Кемеровская областная организация Общероссийской общественной организации "Всероссийское общество инвалидов"
						</a>
					</li>
					<li>
						<a href="https://kuzrc.ru/" target="_blank">
							Государственная организация образования «Кузбасский региональный центр психолого-педагогической, медицинской и социальной помощи «Здоровье и развитие личности»
						</a>
					</li>
					<li>
						<a href="https://42.gbmse.ru/" target="_blank">
							Федеральное казенное учреждение "Главное бюро медико-социальной экспертизы по Кемеровской области - Кузбассу" Министерства труда и социальной защиты Российской Федерации
						</a>
					</li>
					<li>
						<a href="https://copp.ruobr.ru/" target="_blank">
							ГПОУ Сибирский политехнический техникум Центр Опережающей профессиональной подготовки (ЦОПП)
						</a>
					</li>
					<li>
						<a href="https://www.kemsu.ru/" target="_blank">
							ФГБОУ ВО «Кемеровский государственный университет»
						</a>
					</li>
				</ul>
				<ul>
					<li>
						<a href="http://kemerovo.vordi.org/" target="_blank">
							Региональное отделение Кемеровской области "Всероссийской организации родителей детей-инвалидов и инвалидов старше 18 лет с ментальными и иными нарушениями, нуждающихся в представительстве своих интересов (ВОРДИ)"
						</a>
					</li>
					<li>
						<a href="https://vk.com/club100078067" target="_blank">
							Кемеровская региональная общественная организация родителей детей с особенностями в развитии "Наши дети - наша гордость"
						</a>
					</li>
					<li>
						<a href="https://www.kemredcross.ru/" target="_blank">
							Новокузнецкое местное отделение Общероссийской общественной организации «Российский Красный Крест» 
						</a>
					</li>
					<li>
						<a href="https://vk.com/slp_42" target="_blank">
							Кемеровская региональная общественная организация «Служба лечебной педагогики» 
						</a>
					</li>
					<li>
						<a href="https://abilympics-kuzbass.ru/" target="_blank">
							Центр развития движения "Абилимпикс" в Кузбассе Государственное казенное учреждение образования "Центр обеспечения организационно-технической, социально-экономической и воспитательной работы" 
						</a>
					</li>
					<li>
						<a href="https://www.ksai.ru/" target="_blank">
							ФГБОУ ВО Кузбасская государственная сельскохозяйственная академия 
						</a>
					</li>
				</ul>
				<div class="address">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1178.8483702909555!2d87.2139254251312!3d53.777085847477025!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42d0c390ef1caf11%3A0x8617ebaa19b953b9!2z0YPQuy4g0JzQtdGC0LXQu9C60LjQvdCwLCAxNywg0J3QvtCy0L7QutGD0LfQvdC10YbQuiwg0JrQtdC80LXRgNC-0LLRgdC60LDRjyDQvtCx0LsuLCA2NTQwMzQ!5e0!3m2!1sru!2sru!4v1682076934561!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					<div class="info-tittle-address">
						<p>Адрес</p>
						<div class="line"></div>
					</div>
					<div class="address-text">
						<div class="first-address">
							<p>Учебный корпус №1:</p>
							<p>телефон: 8(3843)37-59-74,</p>
							<p>г. Новокузнецк,<br /> ул. Метелкина, д. 17</p>
						</div>
						<div class="second-address">
							<p>Учебный корпус №2:</p>
							<p>телефон: 8(3843)37-59-57,</p>
							<p>г. Новокузнецк,<br /> ул. Обнорского, д. 92 </p>
						</div>

					</div>
				</div>
			</div>
			<div class="footer-logo">
				<ul> 
					<li>
						<a href="https://edu.gov.ru/" target="_blank">
							<img src="images/orel_logo-w.png" />
						</a>
					</li>
					<li>
						<a href="https://образование42.рф/" target="_blank">
							<img src="images/minobrkuz.png" />
						</a>
					</li>
					<li>
						<a href="https://firpo.ru/" target="_blank">
							<img src="images/firpo.svg" style="background-color: #306ee2; height:80px; border-radius: 4px;" />
						</a>
					</li>
					<li>
						<a href="https://fmc-spo.ru/" target="_blank">
							<img src="images/fmcio.svg" style="height:60px;" />
						</a>
					</li>
					<li>
						<a href="https://наука42.рф/" target="_blank">
							<img src="images/nauka42.webp" style="height:60px;" />
						</a>
					</li>
					<li>
						<a href="https://kuzdrav.ru/" target="_blank">
							<img src="images/minzdrav.png" />
						</a>
					</li>
					<li>
						<a href="http://вог-кузбасс.рф/" target="_blank">
							<img src="images/vog.svg" />
						</a>
					</li>
					<li>
						<a href="http://kemoovos.ru/" target="_blank">
							<img src="images/vos.png" style="height:80px; border-radius: 4px;" />
						</a>
					</li>
					<li>
						<a href="http://crdp.kmr.socinfo.ru/" target="_blank">
							<img src="images/mku.png" />
						</a>
					</li>
					<li>
						<a href="https://pkgn.ru" target="_blank">
							<img src="images/klogonew.png" />
						</a>
					</li>
				</ul>
			</div>
		</footer>
		<script src=" https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js "></script>
		<script type="text/javascript" src="js/spa/route.js"></script>
		<script type="text/javascript" src="js/spa/router.js"></script>
		<script type="text/javascript" src="js/spa/app.js"></script>
		<script type="text/javascript" src="js/slide.js"></script>
		<script type="text/javascript" src="js/events.js"></script>
		<script type="text/javascript" src="js/header.js"></script>
		<script type="text/javascript" src="js/scrol.js"></script>
		<script src="https://forms.yandex.ru/_static/embed.js"></script>
		<script>
		    (function () {
		        // создаём модальное окно
		        var modal = $modal({
		  			title: 'Горячая линия',
		  			content: '<p>Телефон горячей линии по вопросам поступления и обучения инвалидов и лиц с ОВЗ:<br/><br/> <span>8(3843)32-87-47, 8-908-947-11-47</span></p>'
				});
		        // при клике по кнопке #show-modal
		        document.querySelector('#show-modal').addEventListener('click', function () {
		        // отобразим модальное окно
		            modal.show();
		        });
		    })(); 
		</script>
		<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
		<script>
		    var swiper = new Swiper(".mySwiper", {
		      speed: 600,
		      parallax: true,
		      loop: true,
		      pagination: {
		        el: ".swiper-pagination",
		        clickable: true,
		      },
		      navigation: {
		        nextEl: ".swiper-button-next",
		        prevEl: ".swiper-button-prev",
		      },
		    });
		</script>
	</body>
</html>