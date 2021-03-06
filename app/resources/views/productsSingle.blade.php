@extends('layouts.main')

@section('content')
	<!-- Spacing -->
	<div class="a-redspacing"></div>

	<!-- Product Information -->
	<div class="c-single">
			<div class="u-container2 u-flex_wrap">
					<div class="c-single__images">
							<div class="c-single__images--big">
									<img src="/img/New folder/baraa-2.png" alt="">
							</div>
							<div class="c-single__images--slider">
										<!-- Swiper -->
											<div class="swiper-container">
													<div class="swiper-wrapper">
													<div class="swiper-slide"><img src="/img/New folder/baraa-2.png" alt=""></div>
													<div class="swiper-slide"><img src="/img/New folder/baraa-3.png" alt=""></div>
													<div class="swiper-slide"><img src="/img/New folder/baraa-4.png" alt=""></div>
													<div class="swiper-slide"><img src="/img/New folder/baraa-5.png" alt=""></div>
													<div class="swiper-slide"><img src="/img/New folder/baraa-6.png" alt=""></div>
													</div>
													<!-- Add Arrows -->
													<div class="swiper-button-next"></div>
													<div class="swiper-button-prev"></div>
											</div>
							</div>
					</div>
					<div class="c-single__info">
							<div class="c-single__info--path">
									<span id="">Дартс</span>
									<span class="dot">·</span>
									<span>Хэрэгсэл</span>
							</div>
							<h2>Барааны нэр</h2>
							<div class="u-card__content--info_rating">
									<i class="fa fa-star rating1" aria-hidden="true"></i>
									<i class="fa fa-star rating2" aria-hidden="true"></i>
									<i class="fa fa-star rating3" aria-hidden="true"></i>
									<i class="fa fa-star rating4" aria-hidden="true"></i>
									<i class="fa fa-star rating5" aria-hidden="true"></i>
							</div>
							<div class="u-hline"></div>
							<span id="p-price">150'000$</span>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae omnis aliquid est impedit excepturi, debitis illo amet ab quibusdam placeat repudiandae perspiciatis officia. Perspiciatis enim odio quae, aspernatur exercitationem officiis.</p>
							<div class="u-flex_between">
									<div class="c-single__info--quan quantity">
											<input type="number" min="0" max="99" step="1" value="1">
											<div class="c-single__info--quan_i">
													<i class="fas fa-plus-square"></i>
													<i class="fas fa-minus-square"></i>
											</div>
									</div>
									<div class="u-button">
											<a>Сагсанд хийх</a>
									</div>
									<div class="u-button_red">
											<a>Худалдаж авах</a>
									</div>
							</div>
							<div class="u-flex_between c-single__info--social">
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
			<div class="u-container2 c-single__tabs">
					<div class="tabs">

							<nav role='navigation' class="transformer-tabs">
								<ul>
									<li><a href="#tab-1" class="active">Product Information</a></li>
									<li><a href="#tab-2">Darts Technical Specification</a></li>
									<li><a href="#tab-3">Darts Profile</a></li>
									<li><a href="#tab-4">Darts Grip Characteristics</a></li>
									<li><a href="#tab-5">Darts Finish</a></li>
									<li><a href="#tab-6">General Information</a></li>
								</ul>
							</nav>

							<div id="tab-1" class="active">
									<table style="width:100%">
											<tr>
												<th>Darts</th>
												<td>x3 Darts per set</td>
											</tr>
											<tr>
												<th>Packaging</th>
												<td>Premium, Winmau Aluminum Point Protector</td>
											</tr>
											<tr>
												<th>Flights</th>
												<td>x1 Prism Alpha standard extra thick</td>
											</tr>
											<tr>
													<th>Shafts</th>
													<td>x1 Prism Force medium 7020.204</td>
												</tr>
									</table>
							</div>

							<div id="tab-2">
									<table style="width:100%">
											<tr>
												<th>Darts</th>
												<td>x3 Darts per set</td>
											</tr>
											<tr>
												<th>Packaging</th>
												<td>Premium, Winmau Aluminum Point Protector</td>
											</tr>
											<tr>
												<th>Flights</th>
												<td>x1 Prism Alpha standard extra thick</td>
											</tr>
											<tr>
													<th>Shafts</th>
													<td>x1 Prism Force medium 7020.204</td>
												</tr>
									</table>
							</div>

							<div id="tab-3">
									<table style="width:100%">
											<tr>
												<th>Darts</th>
												<td>x3 Darts per set</td>
											</tr>
											<tr>
												<th>Packaging</th>
												<td>Premium, Winmau Aluminum Point Protector</td>
											</tr>
											<tr>
												<th>Flights</th>
												<td>x1 Prism Alpha standard extra thick</td>
											</tr>
											<tr>
													<th>Shafts</th>
													<td>x1 Prism Force medium 7020.204</td>
												</tr>
									</table>
							</div>
							<div id="tab-4">
									<table style="width:100%">
											<tr>
												<th>Darts</th>
												<td>x3 Darts per set</td>
											</tr>
											<tr>
												<th>Packaging</th>
												<td>Premium, Winmau Aluminum Point Protector</td>
											</tr>
											<tr>
												<th>Flights</th>
												<td>x1 Prism Alpha standard extra thick</td>
											</tr>
											<tr>
													<th>Shafts</th>
													<td>x1 Prism Force medium 7020.204</td>
												</tr>
									</table>
							</div>
							<div id="tab-5">
									<table style="width:100%">
											<tr>
												<th>Darts</th>
												<td>x3 Darts per set</td>
											</tr>
											<tr>
												<th>Packaging</th>
												<td>Premium, Winmau Aluminum Point Protector</td>
											</tr>
											<tr>
												<th>Flights</th>
												<td>x1 Prism Alpha standard extra thick</td>
											</tr>
											<tr>
													<th>Shafts</th>
													<td>x1 Prism Force medium 7020.204</td>
												</tr>
									</table>
							</div>
							<div id="tab-6">
									<table style="width:100%">
											<tr>
												<th>Darts</th>
												<td>x3 Darts per set</td>
											</tr>
											<tr>
												<th>Packaging</th>
												<td>Premium, Winmau Aluminum Point Protector</td>
											</tr>
											<tr>
												<th>Flights</th>
												<td>x1 Prism Alpha standard extra thick</td>
											</tr>
											<tr>
													<th>Shafts</th>
													<td>x1 Prism Force medium 7020.204</td>
												</tr>
									</table>
							</div>
					</div>
			</div>
			<div class="u-container2 c-single__video">
					<iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
					</iframe>
			</div>
			<div class="u-container2 c-single__items">
					<h5>Төстэй бараанууд</h5>
					<div class="c-content__items">
							<div class="c-content__items--item">
									<div class="u-card">
											<div class="u-card__content">
													<div class="u-card__content--img">
															<img class="u-card__content--img_pri" src="/img/New folder/baraa-2.png" alt="">
															<img class="u-card__content--img_sec" src="/img/New folder/baraa-3.png" alt="">
													</div>
													<div class="u-card__content--img--hover">
															<div class="u-card__content--img--hover_box">
																	<img class="u-card__content--img--hover_box-pri" src="/img/New folder/search1.png" alt="">
																	<img class="u-card__content--img--hover_box-sec" src="/img/New folder/search5.png" alt="">
															</div>
															<div class="u-card__content--img--hover_box">
																	<img class="u-card__content--img--hover_box-pri" src="/img/New folder/heart1.png" alt="">
																	<img class="u-card__content--img--hover_box-sec" src="/img/heart5.png" alt="">
															</div>
															<div class="u-card__content--img--hover_box">
																	<img class="u-card__content--img--hover_box-pri" src="/img/New folder/compare1.png" alt="">
																	<img class="u-card__content--img--hover_box-sec" src="/img/compare3.png" alt="">
															</div>
													</div>
													<div class="u-card__content--info">
															<div class="u-card__content--info_rating">
																	<i class="fa fa-star rating1" aria-hidden="true"></i>
																	<i class="fa fa-star rating2" aria-hidden="true"></i>
																	<i class="fa fa-star rating3" aria-hidden="true"></i>
																	<i class="fa fa-star rating4" aria-hidden="true"></i>
																	<i class="fa fa-star rating5" aria-hidden="true"></i>
															</div>
															<h4>Барааны нэр</h4>
															<span id="p-type">Төрөл</span></br>
															<span id="p-price">150,000$</span>
															<span id="p-price_old">230,000$</span>
													</div>
													<button class="u-card__content--button">Сагсанд хийх <span>+</span></button>
											</div>
									</div>
							</div>
							<div class="c-content__items--item">
									<div class="u-card">
											<div class="u-card__content">
													<div class="u-card__content--img">
															<img class="u-card__content--img_pri" src="/img/New folder/baraa-2.png" alt="">
															<img class="u-card__content--img_sec" src="/img/New folder/baraa-3.png" alt="">
													</div>
													<div class="u-card__content--img--hover">
															<div class="u-card__content--img--hover_box">
																	<img class="u-card__content--img--hover_box-pri" src="/img/New folder/search1.png" alt="">
																	<img class="u-card__content--img--hover_box-sec" src="/img/New folder/search5.png" alt="">
															</div>
															<div class="u-card__content--img--hover_box">
																	<img class="u-card__content--img--hover_box-pri" src="/img/New folder/heart1.png" alt="">
																	<img class="u-card__content--img--hover_box-sec" src="/img/heart5.png" alt="">
															</div>
															<div class="u-card__content--img--hover_box">
																	<img class="u-card__content--img--hover_box-pri" src="/img/New folder/compare1.png" alt="">
																	<img class="u-card__content--img--hover_box-sec" src="/img/compare3.png" alt="">
															</div>
													</div>
													<div class="u-card__content--info">
															<div class="u-card__content--info_rating">
																	<i class="fa fa-star rating1" aria-hidden="true"></i>
																	<i class="fa fa-star rating2" aria-hidden="true"></i>
																	<i class="fa fa-star rating3" aria-hidden="true"></i>
																	<i class="fa fa-star rating4" aria-hidden="true"></i>
																	<i class="fa fa-star rating5" aria-hidden="true"></i>
															</div>
															<h4>Барааны нэр</h4>
															<span id="p-type">Төрөл</span></br>
															<span id="p-price">150,000$</span>
															<span id="p-price_old">230,000$</span>
													</div>
													<button class="u-card__content--button">Сагсанд хийх <span>+</span></button>
											</div>
									</div>
							</div>
							<div class="c-content__items--item">
									<div class="u-card">
											<div class="u-card__content">
													<div class="u-card__content--img">
															<img class="u-card__content--img_pri" src="/img/New folder/baraa-2.png" alt="">
															<img class="u-card__content--img_sec" src="/img/New folder/baraa-3.png" alt="">
													</div>
													<div class="u-card__content--img--hover">
															<div class="u-card__content--img--hover_box">
																	<img class="u-card__content--img--hover_box-pri" src="/img/New folder/search1.png" alt="">
																	<img class="u-card__content--img--hover_box-sec" src="/img/New folder/search5.png" alt="">
															</div>
															<div class="u-card__content--img--hover_box">
																	<img class="u-card__content--img--hover_box-pri" src="/img/New folder/heart1.png" alt="">
																	<img class="u-card__content--img--hover_box-sec" src="/img/heart5.png" alt="">
															</div>
															<div class="u-card__content--img--hover_box">
																	<img class="u-card__content--img--hover_box-pri" src="/img/New folder/compare1.png" alt="">
																	<img class="u-card__content--img--hover_box-sec" src="/img/compare3.png" alt="">
															</div>
													</div>
													<div class="u-card__content--info">
															<div class="u-card__content--info_rating">
																	<i class="fa fa-star rating1" aria-hidden="true"></i>
																	<i class="fa fa-star rating2" aria-hidden="true"></i>
																	<i class="fa fa-star rating3" aria-hidden="true"></i>
																	<i class="fa fa-star rating4" aria-hidden="true"></i>
																	<i class="fa fa-star rating5" aria-hidden="true"></i>
															</div>
															<h4>Барааны нэр</h4>
															<span id="p-type">Төрөл</span></br>
															<span id="p-price">150,000$</span>
															<span id="p-price_old">230,000$</span>
													</div>
													<button class="u-card__content--button">Сагсанд хийх <span>+</span></button>
											</div>
									</div>
							</div>
							<div class="c-content__items--item">
									<div class="u-card">
											<div class="u-card__content">
													<div class="u-card__content--img">
															<img class="u-card__content--img_pri" src="/img/New folder/baraa-2.png" alt="">
															<img class="u-card__content--img_sec" src="/img/New folder/baraa-3.png" alt="">
													</div>
													<div class="u-card__content--img--hover">
															<div class="u-card__content--img--hover_box">
																	<img class="u-card__content--img--hover_box-pri" src="/img/New folder/search1.png" alt="">
																	<img class="u-card__content--img--hover_box-sec" src="/img/New folder/search5.png" alt="">
															</div>
															<div class="u-card__content--img--hover_box">
																	<img class="u-card__content--img--hover_box-pri" src="/img/New folder/heart1.png" alt="">
																	<img class="u-card__content--img--hover_box-sec" src="/img/heart5.png" alt="">
															</div>
															<div class="u-card__content--img--hover_box">
																	<img class="u-card__content--img--hover_box-pri" src="/img/New folder/compare1.png" alt="">
																	<img class="u-card__content--img--hover_box-sec" src="/img/compare3.png" alt="">
															</div>
													</div>
													<div class="u-card__content--info">
															<div class="u-card__content--info_rating">
																	<i class="fa fa-star rating1" aria-hidden="true"></i>
																	<i class="fa fa-star rating2" aria-hidden="true"></i>
																	<i class="fa fa-star rating3" aria-hidden="true"></i>
																	<i class="fa fa-star rating4" aria-hidden="true"></i>
																	<i class="fa fa-star rating5" aria-hidden="true"></i>
															</div>
															<h4>Барааны нэр</h4>
															<span id="p-type">Төрөл</span></br>
															<span id="p-price">150,000$</span>
															<span id="p-price_old">230,000$</span>
													</div>
													<button class="u-card__content--button">Сагсанд хийх <span>+</span></button>
											</div>
									</div>
							</div>
					</div>
			</div>
			<div class="u-container2 c-single__comments">
					<h4>Барааны нэрэнд нийт 3 сэтгэгдэл байна.</h4>
					<div class="c-single__comments--all">
							<div class="c-single__comments--all--one">
									<div class="c-single__comments--all--one_info">
											<img src="/img/New folder/scream1.png" alt="">
											<div>
													<span>Чиний дуртай авга ах</span>
													<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus harum sequi cumque animi eum illum labore distinctio excepturi! Laboriosam aut neque illo, corrupti perferendis quisquam placeat aspernatur sequi quam dolorum.</p>
											</div>
									</div>
									<div class="c-single__comments--all--one_rating">
											<div class="u-card__content--info_rating">
													<i class="fa fa-star rating1" aria-hidden="true"></i>
													<i class="fa fa-star rating2" aria-hidden="true"></i>
													<i class="fa fa-star rating3" aria-hidden="true"></i>
													<i class="fa fa-star rating4" aria-hidden="true"></i>
													<i class="fa fa-star rating5" aria-hidden="true"></i>
											</div>
											<span>2019/12/23</span>
									</div>
							</div>
							<div class="c-single__comments--all--one">
									<div class="c-single__comments--all--one_info">
											<img src="/img/New folder/scream1.png" alt="">
											<div>
													<span>Чиний дуртай авга ах</span>
													<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus harum sequi cumque animi eum illum labore distinctio excepturi! Laboriosam aut neque illo, corrupti perferendis quisquam placeat aspernatur sequi quam dolorum.</p>
											</div>
									</div>
									<div class="c-single__comments--all--one_rating">
											<div class="u-card__content--info_rating">
													<i class="fa fa-star rating1" aria-hidden="true"></i>
													<i class="fa fa-star rating2" aria-hidden="true"></i>
													<i class="fa fa-star rating3" aria-hidden="true"></i>
													<i class="fa fa-star rating4" aria-hidden="true"></i>
													<i class="fa fa-star rating5" aria-hidden="true"></i>
											</div>
											<span>2019/12/23</span>
									</div>
							</div>
							<div class="c-single__comments--all--one">
									<div class="c-single__comments--all--one_info">
											<img src="/img/New folder/scream1.png" alt="">
											<div>
													<span>Чиний дуртай авга ах</span>
													<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus harum sequi cumque animi eum illum labore distinctio excepturi! Laboriosam aut neque illo, corrupti perferendis quisquam placeat aspernatur sequi quam dolorum.</p>
											</div>
									</div>
									<div class="c-single__comments--all--one_rating">
											<div class="u-card__content--info_rating">
													<i class="fa fa-star rating1" aria-hidden="true"></i>
													<i class="fa fa-star rating2" aria-hidden="true"></i>
													<i class="fa fa-star rating3" aria-hidden="true"></i>
													<i class="fa fa-star rating4" aria-hidden="true"></i>
													<i class="fa fa-star rating5" aria-hidden="true"></i>
											</div>
											<span>2019/12/23</span>
									</div>
							</div>
					</div>
			</div>
			<div class="u-container2 c-single__inputs">
					<h4>Сэтгэгдэл үлдээх</h4>
					<span>Таны өгөх үнэлгээ</span>
					<div class="u-card__content--info_rating">
							<i class="fa fa-star rating1" aria-hidden="true"></i>
							<i class="fa fa-star rating2" aria-hidden="true"></i>
							<i class="fa fa-star rating3" aria-hidden="true"></i>
							<i class="fa fa-star rating4" aria-hidden="true"></i>
							<i class="fa fa-star rating5" aria-hidden="true"></i>
					</div>
					<span>Таны сэтгэгдэл</span>
					<textarea name="" id="" cols="30" rows="10"></textarea>
					<span>Таны нэр *</span>
					<input type="text" name="" id="">
					<span>Таны email*</span>
					<input type="text" name="" id="">
					<div class="u-button2">Илгээх</div>
			</div>
	</div>

@endsection

@section('js')
	<!-- Script -->
	<script src="/script.js"></script>
		<!-- Swiper JS -->
		<script src="/swiper.min.js"></script>

		<!-- Materialize -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
			var swiper = new Swiper('.swiper-container', {
			slidesPerView: 3,
			spaceBetween: 30,
			slidesPerGroup: 1,
			loop: true,
			loopFillGroupWithBlank: true,
			pagination: {
					el: '.swiper-pagination',
					clickable: true,
			},
			navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
			},
			});
</script>
@endsection
