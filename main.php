<?php
	if(isset($_POST['client_name']) && isset($_POST['order_type_id']) && isset($_POST['client_phone']) && isset($_POST['order_comment'])){
		$clientName = $_POST['client_name'];
		$orderTypeId = $_POST['order_type_id'];
		$clientPhone = $_POST['client_phone'];
		$orderComment = $_POST['order_comment'];
		$sql = "INSERT INTO 
				orders (phone_number, client_name, comment, order_type_id) 
			VALUES 
				('$clientPhone', '$clientName', '$orderComment', $orderTypeId)";
		$dbInterface->db->query($sql);
	}else{
		echo 'Неверные данные';
	}
?>

<html>
	<head>
		<title>CopyCenter</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main1.css" />
	</head>
	<body class="bodypolotno">
		<div id="page">
			<!-- Меню -->
				<section id="header">
					<div class="container"> 

						<!-- Логотип -->
							<h1 id="logo"><a href="index.html">Copy Center</a></h1>
							<p> Make everything awesome</p>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a class="icon fa-home" href="index.html"><span class="nav-span">Главная </span></a></li>
								    	<li><a class="icon fa-cog" href="web.html"><span class="nav-span">Полиграфические услуги</span></a></li>
									<li><a class="icon fa-retweet" href="pechat.html"><span class="nav-span"> Печатные услуги</span></a></li>
									<li><a class="icon fa-sitemap" href="vacansii.html"><span class="nav-span"> Вакансии</span></a></li>
								</ul>
							</nav>

					</div>
					<div class="poloska">.</div>
				</section>

			<!-- Блок-часть -->
				<section id="features">
					<div class="container">
						<header>
							<p class ="Privet"> Добро пожаловать</p><br> <h2>Выберите интересующую вас категорию</h2>
						</header>
						<div class="row aln-center">
							<div class="col-4 col-6-medium col-12-small">

								<!-- Блок1 -->
									<section>
										<a href="web.html" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
										<header>
											<h3>Веб-разработка</h3>
										</header>
										<p> Любые ваши идеи воплотятся в рабочие проекты, 
										благодаря нашей профессиональной команде дизайнеров, 
										разработчиков и отладчиков. У вас нет идей? Мы поделимся своими!
										 
										 </p>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Блок2 -->
									<section>
										<a href="pechat.html" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
										<header>
											<h3> Копировальные услуги </h3>
										</header>
										<p> Здесь  вы можете заказать любые виды печатных услуг <br> Ускорьте продвижение своего веб-проекта
										качественной рекламной продукцией! 
										</p>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="vacansii.html" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
										<header>
											<h3> Работа у нас</h3>
										</header>
										<p> Вы веб-разработчик? Или дизайнер? Разбираетесь в полиграфической деятельности? 
										Или вы молоды и инициативны, и хотите попробовать себя в новой сфере? Присоединяйтесь к нам! 
										</p>
									</section>

							</div>
							
						</div>
					</div>
				</section>

			<!-- Баннер-->
				<section id="banner">
					<div class="container">
						<p> У вдохновения нет границ</p>
					</div>
				</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">

							<!-- Content -->
								<div id="content" class="col-8 col-12-medium">

									<!-- Post -->
										<article class="box post">
											<header>
												<h2> Я хочу создать эффективный рабочий веб-проект, но не знаю с чего начать</h2>
											</header>
											<img style="max-width: 98%;" src="images/pic04.jpg"/>
											<h3> Фиолетовые обои и плитка в горошек</h3>
											<p> Перед вами чистый лист бумаги и ручка. Стоит задача - создать конфетку с нуля. 
											Всё кажется простым, и головой вы понимаете, что начать не сложно. Но ручка безмолвно зависает над бумагой. Знакомо? 
											В наше время люди часто сталкиваются с творческим кризисом. 
											Даже при обилии идей, иногда не хватает знаний или навыков, чтобы воплотить их в жизнь.  
											Для таких ситуаций есть мы. Наша дружная команда дизайнеров, разработчиков, 
											smm-специалистов и маркетологов в любое время проконсультирует вас для повышения
											эффективности ваших экскизов или поможет создать чистый эксклюзивный проект с нуля "под ключ".
											Обращайтесь к нам!</p>
											<ul class="actions">
												<li><a href="left-sidebar.html " class="button icon fa-file"> Начните сейчас </a></li>
											</ul>
										</article>

									

								</div>

							<!-- Sidebar -->
								<div id="sidebar" class="col-4 col-12-medium">

									<!-- Excerpts -->
										<section>
											<ul class="divided">
												<li>

													<!-- Excerpt -->
														<article class="box excerpt">
															<header>
																<span class="date">13 Июня</span>
																<h3><a href="#">АКЦИЯ</a></h3>
															</header>
															<p> При заказе от 100 шт любая печатная продукция со скидкой 10%!</p>
														</article>

												</li>
												<li>

													<!-- Excerpt -->
														<article class="box excerpt">
															<header>
																<span class="date">2 Июня</span>
																<h3><a href="#">Изменения в УФМС</a></h3>
															</header>
															<p>УФМС Советского района утвердило приказ о сокращении количества необходимых оттисков для ксерокопии паспорта. Комплект для регистрации ИГ делается еще быстрее!</p>
														</article>

												</li>
												<li>

													<!-- Excerpt -->
														<article class="box excerpt">
															<header>
																<span class="date">13 Мая</span>
																<h3><a href="#">Изменение графика</a></h3>
															</header>
															<p>Теперь мы работаем с 9 до 18:00 каждый день! </p>
														</article>

												</li>
											</ul>
										</section>

									
								</div>

						</div>
					</div>
				</section>

			<!-- Footer -->
				<section id="footer">
					<div class="container">
						<header>
							<h2>Появились вопросы или пожелания?<strong>Свяжитесь с нами</strong></h2>
						</header>
						<div class="row">
							
							<div class="col-6 col-12-medium">
								<section>
									<p> Мы ежедневно работаем над улучшением качества наших услуг. <br>Помогите нам стать еще эффективнее!</p>
									<div class="row">
										<div class="col-6 col-12-small">
											<ul class="icons">
												<li class="icon fa-home">
													Коммунистический, 53/1<br />
													Ростов-на-Дону<br />
												    Россия 
												</li>
												<li class="icon fa-phone">
													8-951-830-72-68 
													<br>8-950-854-26-64
												</li>
												<li class="icon fa-envelope">
													<a href="#">Gebo888@bk.ru</a>
												</li>
											</ul>
										</div>
										
									<?php require('items/form.html') ?>

									</div>
								</section>
							</div>
						</div>
					</div>
					<div id="copyright" class="container">
						<ul class="links">
							<li> Копи-Центр на Коммунистическом || 2019 г. </li>
						</ul>
					</div>
				</section>

		</div>
	</body>
</html>