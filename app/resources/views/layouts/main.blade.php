<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="/reset.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/utilities.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="/swiper.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script defer src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		@yield('link')
    <title>Darts</title>
</head>
<body>

	<header>
			<div class="c-header u-flex_between a-relative">
					<!-- PC Header -->
					<div class="c-header__left u-flex_between">
							<img src="/img/dats.png" alt="Company Logo">
							<ul class="c-header__left--menu u-flex_between black">
									<li class="u-hover_main"><a>Нүүр</a></li>
									<li class="u-hover_main a-slow"><a>Бүтээгдэхүүн</a></li>
									<li class="u-hover_main"><a>Блог</a></li>
									<li class="u-hover_main"><a>Тоглогчид</a></li>
							</ul>
					</div>

					<div class="c-header__mobile">

							<!-- Mobile Header -->
							<div class="c-header__mobile--wrapper u__flex-container">
									<div id="mobile-toggle" class="c-header__mobile--wrapper--tabs">
											<i class="lnr lnr-menu black"></i>
									</div>
							</div>


							<!-- Mobile click navigation -->
							<div class="c-header__mobile--nav">
									<div id="mobile-nav" class="c-header__mobile--nav--tab">

											<!-- Nav Logo -->
											<div class="c-header__mobile--nav--tab--top">
													<i id="mobile-remove" class="lnr lnr-cross"></i>
											</div>

											<!-- Nav list -->
											<div class="c-header__mobile--nav--tab--list">
													<ul>
															<li><a href="/">Нүүр</a></li>
															<li><a href="/products">Бүтээгдэхүүн</a></li>
															<li><a href="/products">Блог</a></li>
															<li><a href="/products">Тамирчид</a></li>
													</ul>
											</div>
											<div class="c-footer__content--quarter">
													<h3>Холбоотой байх</h3>
													<form action="">
															<input type="text" placeholder="Email оруулна уу">
															<a><img src="/img/do-arrow2.png" alt=""></a>
													</form>
													<h3>Биднийг дагах</h3>
													<div class="u-flex_between">
															<a class="u-hover_icon">
																	<img src="/img/fb-red.png" alt="">
																	<img class="u-hover_icon--alt" src="/img/fb-alt.png" alt="">
															</a>
															<a class="u-hover_icon">
																	<img src="/img/twitter-red.png" alt="">
																	<img class="u-hover_icon--alt" src="/img/logo2-1.png" alt="">
															</a>
															<a class="u-hover_icon">
																	<img src="/img/instagram-red.png" alt="">
																	<img class="u-hover_icon--alt" src="/img/logo3-1.png" alt="">
															</a>
															<a class="u-hover_icon">
																	<img src="/img/youtube-red.png" alt="">
																	<img class="u-hover_icon--alt" src="/img/logo4-1.png" alt="">
															</a>
													</div>
											</div>
									</div>
							</div>
					</div>


					<div class="c-header__right u-flex_between">
							<form action="" class="u-search u-flex_between">
									<img src="/img/search-white.png" alt="Search Icon">
									<input class="black" type="text" placeholder="Хайх зүйлээ оруулна уу...">
							</form>
							<div class="icon-with-hover">
								<img src="/img/shopping-bag-53.png" alt="">
								<div class="bag-hover-container">
									<h3 class="p-3">Таны сагсанд байгаа бараанууд</h3>
									
									<div class="inner-bag-hover">
										<h4>Хэрэглэгчийн нэр</h4>
									<nav class="able-to-scroll">	
										<ul>
											<li><img src="/img/shopping-bag-53.png" alt="">
												<div class="inner-bag-hover-product ">
													<h6>Барааны нэр</h6>
													<div class="c-single__info--quan quantity">
														<input type="number" min="0" max="99" step="1" value="1">
														<div class="c-single__info--quan_i">
															<i class="fas fa-plus-square"></i>
															<i class="fas fa-minus-square"></i>
														</div>
													</div>
												</div>
												<p>150'000</p>	
												<button type="button" class="u-button_red-c">Хасах</button>
											</li>
											<li><img src="/img/shopping-bag-53.png" alt="">
												<div class="inner-bag-hover-product ">
													<h6>Барааны нэр</h6>
													<div class="c-single__info--quan quantity">
														<input type="number" min="0" max="99" step="1" value="1">
														<div class="c-single__info--quan_i">
															<i class="fas fa-plus-square"></i>
															<i class="fas fa-minus-square"></i>
														</div>
													</div>
												</div>
												<p>150'000</p>	
												<button type="button" class="u-button_red-c">Хасах</button>
											</li>
											<li><img src="/img/shopping-bag-53.png" alt="">
												<div class="inner-bag-hover-product ">
													<h6>Барааны нэр</h6>
													<div class="c-single__info--quan quantity">
														<input type="number" min="0" max="99" step="1" value="1">
														<div class="c-single__info--quan_i">
															<i class="fas fa-plus-square"></i>
															<i class="fas fa-minus-square"></i>
														</div>
													</div>
												</div>
												<p>150'000</p>	
												<button type="button" class="u-button_red-c">Хасах</button>
											</li>
											<li><img src="/img/shopping-bag-53.png" alt="">
												<div class="inner-bag-hover-product ">
													<h6>Барааны нэр</h6>
													<div class="c-single__info--quan quantity">
														<input type="number" min="0" max="99" step="1" value="1">
														<div class="c-single__info--quan_i">
															<i class="fas fa-plus-square"></i>
															<i class="fas fa-minus-square"></i>
														</div>
													</div>
												</div>
												<p>150'000</p>	
												<button type="button" class="u-button_red-c">Хасах</button>
											</li>
										</ul>
									</nav>	
										<div class="inner-bag-hover-tprice">Нийт дүн:300'000</div>
										<div class="purchase-section">
											<div class="u-button">Сагс руу очих</div>
											<div class="u-button_red">Сагс хоослох</div>
										</div>
									</div>
	
								</div>
							</div>

							<div class="icon-with-hover1">
							<img src="/img/account2.png" alt="">
							<div class="bag-hover-container1">
								<h3>Нэвтрэх</h3>
								<div class="inner-bag-hover1">
									<form action="/action_page.php" method="post">
										
										<div class="login-container">

										  	<input type="text" placeholder="Хэрэглэгчийн нэр" name="uname" required>
										  	<input type="password" placeholder="Нууц үг" name="psw" required>
										  	<div class="in-one-row"> 
										 		<label><input type="checkbox" checked="checked" name="remember"> Намайг сана</label>
												<span class="psw"><a href="#">Нууц үг мартсан</a></span>
										  	</div>
										  <button class="u-button_red-login" type="submit">Нэвтрэх</button>									
										</div>
									  </form>

								</div>
							</div>
							</div>
					</div>
			
	</header>


@yield('content')

<footer>
	
	<div class="sticky-filter-mphone">Filter</div>
	<div class="sticky-filter-hover">
		<h3>Он /Сар/ Өдөр</h3>	
		<nav class="sticky-filter-nav">
			<ul class="sticky-filter-list">
				<li>2020.3.10</li>
				<li>2020.3.10</li>
				<li>2020.3.10</li>
				<li>2020.3.10</li>
				<li>2020.3.10</li>
				<li>2020.3.10</li>
				<li>2020.3.10</li>
				<li>2020.3.10</li>
				<li>2020.3.10</li>
			</ul>
		</nav>
	</div>
    <div class="c-footer u-container">
	<div class="c-footer__content u-flex_wrap">
	    <div class="c-footer__content--quarter">
		<h3>Холбоосууд</h3>
		<ul>
		    <li>Нүүр</li>
		    <li>Бүтээгдэхүүн</li>
		    <li>Блог</li>
		    <li>Тоглогчид</li>
		    <li>Бидний тухай</li>
		    <li>Миний аккаунт</li>
		</ul>
	    </div>
	    <div class="c-footer__content--quarter">
		<h3>Ангилал</h3>
		<ul>
		    <li>Дартс</li>
		    <li>Дартс самбар</li>
		    <li>Хувцас</li>
		    <li>Гоёл чимэглэл</li>
		    <li>Хэрэгсэл</li>
		</ul>
	    </div>
	    <div class="c-footer__content--quarter">
		<h3>Холбоо барих</h3>
		<ul>
		    <li>
			<img class="img-home" src="/img/New folder/home.png" alt="" width="30" height="30">
			<span>Манай хаяг</span>
		    </li>
		    <li>
			<img src="/img/New folder/phone.png" alt="" width="40" height="40">
			<span>95959595</span>
		    </li>
		    <li>
			<img class="img-email" src="/img/email.png" alt="" width="20" height="20">
			<span>darts.mn@gmail.com</span>
		    </li>
		</ul>
	    </div>
	    <div class="c-footer__content--quarter">
		<h3>Холбоотой байх</h3>
		<form action="">
		    <input type="text" placeholder="Email оруулна уу">
		    <a><img src="/img/do-arrow2.png" alt=""></a>
		</form>
		<h3>Биднийг дагах</h3>
		<div class="u-flex_between">
		    <a class="u-hover_icon">
			<img src="/img/fb-red.png" alt="">
			<img class="u-hover_icon--alt" src="/img/fb-alt.png" alt="">
		    </a>
		    <a class="u-hover_icon">
			<img src="/img/twitter-red.png" alt="">
			<img class="u-hover_icon--alt" src="/img/logo2-1.png" alt="">
		    </a>
		    <a class="u-hover_icon">
			<img src="/img/instagram-red.png" alt="">
			<img class="u-hover_icon--alt" src="/img/logo3-1.png" alt="">
		    </a>
		    <a class="u-hover_icon">
			<img src="/img/youtube-red.png" alt="">
			<img class="u-hover_icon--alt" src="/img/logo4-1.png" alt="">
		    </a>
		</div>
	    </div>
	</div>
	<div class="c-footer__copyright">
	    <a href="">Үйлчилгээний нөхцөл</a>
	    ©2020 Darts.mn
	</div>
    </div>
</footer>


@yield('js')
</body>
</html>
