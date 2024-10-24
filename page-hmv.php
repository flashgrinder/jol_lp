<?php /* Template Name: Район Фрунзенская набережная */?>
<?php get_header(); ?>

	<section class="main-screen">
		<div class="main-screen__body container">
			<div class="main-screen__column">
				<div class="main-screen__info js-reveal gs-reveal-left d-flex d-flex-column flex-align-center flex-justify-sb">
					<div class="main-screen__header d-flex flex-justify-sb flex-align-center">
						<a href="/" class="main-screen__logo">
							<img src="<?= STANDART_DIR; ?>/img/logo.png" alt="" class="main-screen__logo">
						</a>
						<div class="main-screen__actions d-flex flex-align-center">
							<a href="tel:+7 915 118-80-80" class="main-screen__phone d-flex flex-align-center flex-justify-center">
								<svg class="main-screen__phone-icon" width="27px" height="29px">
									<use href="<?= STANDART_DIR; ?>/img/svgsprite/sprite.symbol.svg#phone-button"></use>
								</svg>
							</a>
							<div class="main-screen__nav-btn-wrap d-flex flex-align-center flex-justify-center">
								<button class="mobile-nav__btn mobile-nav__btn--main-screen js-mobile-nav-btn-main-screen">
									<div class="mobile-nav__btn-icon js-mobile-nav-icon-main-screen"></div>
								</button>
							</div>
						</div>
					</div>
					<div class="main-screen__info-center">
						<p class="main-screen__subtitle text text--big text--black text--w-light text-center">
							Фрунзенская
						</p>
						<h1 class="main-screen__title title title--huge title--black title--w-regular text-center">
							Элитный
							<br>
							клубный город-парк
							от 166 миллионов
						</h1>
					</div>
					<div class="main-screen__bottom d-flex flex-justify-sb flex-align-center">
						<a href="tel:+7 915 118-80-80" class="main-scree__button button button--phone">
						<span class="button__icon">
							<svg class="button__phone-icon" width="23px" height="25px">
								<use href="<?= STANDART_DIR; ?>/img/svgsprite/sprite.symbol.svg#phone-button"></use>
							</svg>
						</span>
						</a>
						<a href="javascript:;" class="main-screen__button-catalog button button--catalog" data-hystmodal="#feedback">
							<span class="button__text text text--medium text--black text--w-light">
								Запросить полный каталог квартир
							</span>
								<span class="button__pic">
								<span class="button__pic-wrap">
									<img src="<?= STANDART_DIR; ?>/img/button-catalog.jpg" alt="Запросить полный каталог квартир" class="button__img">
								</span>
								<span class="button__arrow">
									<svg class="button__arrow-svg" width="18px" height="18px">
										<use href="<?= STANDART_DIR; ?>/img/svgsprite/sprite.symbol.svg#button-arrow-catalog"></use>
									</svg>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="main-screen__pic js-reveal gs-reveal-right">
					<img src="<?= STANDART_DIR; ?>/img/main-screen-hmv.jpg" alt="" class="main-screen__img">
				</div>
				<a href="#apartments" class="main-screen__mobile-action">
				<span>
					Смотреть
					<br>
					квартиры
				</span>
					<span class="main-screen__mobile-action-icon">
					<svg class="main-screen__arrow-icon" width="13" height="15px">
						<use href="<?= STANDART_DIR; ?>/img/svgsprite/sprite.symbol.svg#arrow-down"></use>
					</svg>
				</span>
				</a>
			</div>
		</div>
	</section>

	<section class="about js-reveal gs-reveal-left" id="about">
		<div class="about__body container">
			<h3 class="about__title title--black title--w-regular">
				Клубный город-парк на Фрунзенской
				<br>
				<span class="about__title-accent title title--accent">единственный и неповторимый.</span>
			</h3>
			<div class="about__text text text--big text--black text--w-light">
				Для резидентов создан собственный просторный витражный парк площадью 3,1 гектара, где царит атмосфера загородной тишины и безмятежности. Это самый большой в элитном классе парк — он занимает 70% всей территории. Дома скрыты от посторонних глаз и шума мегаполиса обильной зеленью и окружены парадной сталинской застройкой.
			</div>
		</div>
		<img src="<?= STANDART_DIR; ?>/img/other/about-bg-hmv.jpg" alt="" class="about__img js-reveal gs-reveal-right">
	</section>

	<section class="comfort js-reveal gs-reveal" id="features">
		<div class="comfort__body container">
			<h3 class="comfort__heading title title--huge title--black title--w-regular text-center js-reveal gs-reveal-left">
			<span class="comfort__heading-accent">
				Статус и комфорт
			</span>
				в каждом квадратном метре
			</h3>
			<div class="comfort__grid">
				<div class="comfort__card js-reveal gs-reveal-left" data-num="01">
					<h3 class="comfort__card-title text text--big text--black text--w-medium text--uppercase">
						ПРЕМИАЛЬНЫЕ СИСТЕМЫ КОМФОРТА В КВАРТИРАХ
					</h3>
					<div class="comfort__card-description text text--large text--black text--w-light">
						Продвинутая система вентиляции, индивидуальные системы кондиционирования, центральная система увлажнения и вода уровня бутилированной из под крана.
					</div>
				</div>
				<div class="comfort__card js-reveal gs-reveal-right" style="background-image: url('<?= STANDART_DIR; ?>/img/other/comfort.png')">
					<!--				<img src="<?= STANDART_DIR; ?>/img/other/comfort.png" alt="" class="comfort__card-img">-->
				</div>
				<div class="comfort__card js-reveal gs-reveal-left">

				</div>
				<div class="comfort__card js-reveal gs-reveal-left" data-num="02">
					<h3 class="comfort__card-title text text--big text--black text--w-medium text--uppercase">
						ЭЛИТНЫЙ СЕРВИС УРОВНЯ 5 ЗВЕЗДОЧНЫХ ОТЕЛЕЙ
					</h3>
					<div class="comfort__card-description text text--large text--black text--w-light">
						Мытье окон и фасадов 2 раза в год, услуги курьеров и химчистки, сезонный шиномонтаж и хранение колес, клининг квартир, а также услуги сантехника, электрика и плотника не покидая территорию ЖК.
					</div>
				</div>
				<div class="comfort__card js-reveal gs-reveal-right">

				</div>
				<div class="comfort__card js-reveal gs-reveal-right" data-num="03">
					<h3 class="comfort__card-title text text--big text--black text--w-medium text--uppercase">
						СОБСТВЕННЫЙ ПРИВАТНЫЙ ДВОР-ПАРК
					</h3>
					<div class="comfort__card-description text text--large text--black text--w-light">
						Самый большой среди элитных проектов витражный парк под высокими соснами занимает 70% всей территории. В нём сочетаются открытые и уединённые пространства.
						<br>
						Площадь парка — 3,1 гектара.
					</div>
				</div>
				<div class="comfort__card js-reveal gs-reveal-left" data-num="04">
					<h3 class="comfort__card-title text text--big text--black text--w-medium text--uppercase">
						УНИКАЛЬНАЯ КЛУБНАЯ ИНФРАСТРУКТУРА
					</h3>
					<div class="comfort__card-description text text--large text--black text--w-light">
						Комплексная и разнообразная инфраструктура для спорта, отдыха и общения формирует атмосферу закрытого камерного клуба для своих, где каждый найдёт себе занятие по душе.
					</div>
				</div>
				<div class="comfort__card js-reveal gs-reveal-left" style="background-image: url('<?= STANDART_DIR; ?>/img/other/comfort-hmv-2.jpg')">
				</div>
				<div class="comfort__card js-reveal gs-reveal-right" data-num="05">
					<h3 class="comfort__card-title text text--big text--black text--w-medium text--uppercase">
						ШИРОКИЙ ВЫБОР РОСКОШНЫХ КВАРТИР
					</h3>
					<div class="comfort__card-description text text--large text--black text--w-light">
						Помимо стандартных планировок, мы можем предложить квартиры с частным бассейном, видовыми террасами, каминами, патио а также виллы и сити-хаусы с высокими потолками (до 7 метров)
					</div>
				</div>
				<div class="comfort__card js-reveal gs-reveal-right">

				</div>
			</div>
		</div>
	</section>

	<section class="features">
		<div class="features__body container">
			<div class="features__column">
				<div class="features__info d-flex d-flex-column flex-justify-sb js-reveal gs-reveal-left">
					<h3 class="features__heading title title--white title--w-regular">
						<span class="features__heading-accent">Хамовники — </span>
						престижный район Москвы
					</h3>
					<div class="features__pic features__pic--mobile">
						<img src="<?= STANDART_DIR; ?>/img/other/features.jpeg" alt="" class="features__img">
					</div>
					<div class="features__description text text--big text--white text--w-light">
						Сейчас Хамовники пользуются популярностью из- за центрального расположения, хорошей экологии и транспортной доступности.
					</div>
					<ul class="features__list text text--big text--white text--w-regular">
						<li class="features__list-item features__list-item--walking">
							1 минута пешком до Москвы-реки
						</li>
						<li class="features__list-item features__list-item--walking">
							6 минут пешком до парка Горького
						</li>
						<li class="features__list-item features__list-item--car">
							5 минут до Кремля
						</li>
						<li class="features__list-item features__list-item--car">
							4 минуты до комплекса Лужники
						</li>
						<li class="features__list-item features__list-item--car">
							4 минуты до Воробьевых гор
						</li>
					</ul>
				</div>
				<div class="features__pic js-reveal gs-reveal-right">
					<img src="<?= STANDART_DIR; ?>/img/other/features-hmv.jpeg" alt="" class="features__img">
				</div>
			</div>
		</div>
	</section>

	<section class="gallery js-reveal gs-reveal" id="gallery">
		<div class="gallery__body">
			<div class="gallery__heading-wrap container">
				<h3 class="gallery__heading title title--black title--w-regular text-center">
					Галерея жилого комплекса
				</h3>
			</div>
			<div class="gallery__slider-wrap">
				<div class="gallery__splide splide js-gallery-init-slider">
					<div class="gallery__splide-track splide__track">
						<ul class="gallery__splide-list splide__list">
							<li class="gallery__splide-slide splide__slide">
								<img src="<?= STANDART_DIR; ?>/img/gallery/slide-1.jpg" alt="" class="gallery__photo">
							</li>
							<li class="gallery__splide-slide splide__slide">
								<img src="<?= STANDART_DIR; ?>/img/gallery/slide-2.jpg" alt="" class="gallery__photo">
							</li>
							<li class="gallery__splide-slide splide__slide">
								<img src="<?= STANDART_DIR; ?>/img/gallery/slide-3.jpg" alt="" class="gallery__photo">
							</li>
							<li class="gallery__splide-slide splide__slide">
								<img src="<?= STANDART_DIR; ?>/img/gallery/slide-4.jpg" alt="" class="gallery__photo">
							</li>
						</ul>
						<ul class="splide__pagination gallery__pagination"></ul>
					</div>
					<div class="gallery__splide-arrows splide__arrows">
						<button class="gallery__splide-arrow gallery__splide-arrow--prev splide__arrow splide__arrow--prev">
							<svg class="gallery__arrow-icon" width="100%" height="30px">
								<use href="<?= STANDART_DIR; ?>/img/svgsprite/sprite.symbol.svg#arrow-prev"></use>
							</svg>
						</button>
						<button class="gallery__splide-arrow gallery__splide-arrow--next splide__arrow splide__arrow--next">
							<svg class="gallery__arrow-icon" width="100%" height="30px">
								<use href="<?= STANDART_DIR; ?>/img/svgsprite/sprite.symbol.svg#arrow-next"></use>
							</svg>
						</button>
					</div>
				</div>
				<h3 class="gallery__text text text--large text--white text--w-regular js-reveal gs-reveal">
					Вид из панорамных окон
				</h3>
			</div>
		</div>
	</section>

	<section class="apartment" id="apartments">
		<div class="apartment__body container">
			<div class="apartment__column">
				<div class="apartment__info">
					<h3 class="apartment__title title title--big title--black title--w-regular js-reveal gs-reveal-left">
						1 комнатная квартира
					</h3>
					<p class="apartment__subtitle text text--large text--black text--w-light js-reveal gs-reveal-left">
						66,5 кв м, 5 этаж, с чистовой отделкой
					</p>
					<p class="apartment__subtitle text text--large text--black text--w-medium js-reveal gs-reveal-left">
						Сдача в 2027 году
					</p>
					<div class="apartment__photo-info apartment__photo-info--mobile js-reveal gs-reveal-right">
						<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-right">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-scheme-1-hmv.png" alt="" class="apartment__scheme-img">
						</div>
						<div class="apartment__photos d-flex js-reveal gs-reveal-right">
							<div class="apartment__photo">
								<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-1.png" alt="" class="apartment__photo-img">
							</div>
							<div class="apartment__photo js-reveal gs-reveal-right">
								<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-2.png" alt="" class="apartment__photo-img">
							</div>
						</div>
					</div>
					<div class="apartment__actions js-reveal gs-reveal-left">
						<a href="tel:+7 915 118 80 80" class="apartment__button button button--availability">
							Уточнить доступность
							<span class="button__icon">
							<svg class="button__phone-icon" width="37px" height="41px">
								<use href="<?= STANDART_DIR; ?>/img/svgsprite/sprite.symbol.svg#phone-button"></use>
							</svg>
						</span>
						</a>
					</div>
					<div class="apartment__wysiwyg wysiwyg wysiwyg--apartment js-reveal gs-reveal-left">
						Просторная, светлая квартира c одной большой спальней, и видом на двор-парк.
						<p style="color: var(--color-gray);">
							В каждой квартире ЖК установлены окна с зеркальным покрытием, которые пропускают свет, но берегут вашу приватность.
						</p>
						<p style="color: var(--color-gray);">
							Все системы комфорта (вентиляция, кондиционирование и даже канализация)  и лифты работают бесшумно.
						</p>
						<ul>
							<li>
								Зеркальные окна
							</li>
							<li>
								Вид на двор-парк
							</li>
							<li>
								Чистовая отделка
							</li>
							<li>
								Потолки 3,4 метра
							</li>
							<li>
								Шумоизоляция
							</li>
						</ul>
					</div>
					<div class="apartment__price text text--black text--w-medium js-reveal gs-reveal-left">
						~166.290.000 руб
						<span class="text text--large text--gray text--w-regular">
						уточняйте актуальную цену
					</span>
					</div>
				</div>
				<div class="apartment__photo-info">
					<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-right">
						<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-scheme-1-hmv.png" alt="" class="apartment__scheme-img">
					</div>
					<div class="apartment__photos d-flex js-reveal gs-reveal-right">
						<div class="apartment__photo">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-1.png" alt="" class="apartment__photo-img">
						</div>
						<div class="apartment__photo js-reveal gs-reveal-right">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-2.png" alt="" class="apartment__photo-img">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="apartment apartment--revert">
		<div class="apartment__body container">
			<div class="apartment__column">
				<div class="apartment__info">
					<h3 class="apartment__title title title--big title--black title--w-regular js-reveal gs-reveal-right">
						2 комнатная квартира
					</h3>
					<p class="apartment__subtitle text text--large text--black text--w-light js-reveal gs-reveal-right">
						118,6 кв м, 9 этаж, с чистовой отделкой
					</p>
					<p class="apartment__subtitle text text--large text--black text--w-medium js-reveal gs-reveal-right">
						Сдача в 2027 году
					</p>
					<div class="apartment__photo-info apartment__photo-info--mobile">
						<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-left">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-scheme-2-hmv.png" alt="" class="apartment__scheme-img">
						</div>
						<div class="apartment__photos d-flex js-reveal gs-reveal-left">
							<div class="apartment__photo">
								<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-1-hmv.png" alt="" class="apartment__photo-img">
							</div>
							<div class="apartment__photo js-reveal gs-reveal-right">
								<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-2-hmv.png" alt="" class="apartment__photo-img">
							</div>
						</div>
					</div>
					<div class="apartment__actions js-reveal gs-reveal-left">
						<a href="tel:+7 915 118 80 80" class="apartment__button button button--availability">
							Уточнить доступность
							<span class="button__icon">
							<svg class="button__phone-icon" width="37px" height="41px">
								<use href="<?= STANDART_DIR; ?>/img/svgsprite/sprite.symbol.svg#phone-button"></use>
							</svg>
						</span>
						</a>
					</div>
					<div class="apartment__wysiwyg wysiwyg wysiwyg--apartment js-reveal gs-reveal-right">
						Просторная, светлая квартира с 2 мастер спальнями и видом на двор-парк.
						<p style="color: var(--color-gray);">
							В каждой квартире ЖК установлены окна с зеркальным покрытием, которые пропускают свет, но берегут вашу приватность.
						</p>
						<p style="color: var(--color-gray);">
							Все системы комфорта (вентиляция, кондиционирование и даже канализация)  и лифты работают бесшумно.
						</p>
						<ul>
							<li>
								Зеркальные окна
							</li>
							<li>
								Вид на двор-парк
							</li>
							<li>
								Чистовая отделка
							</li>
							<li>
								Потолки 3,4 метра
							</li>
							<li>
								Шумоизоляция
							</li>
						</ul>
					</div>
					<div class="apartment__price text text--black text--w-medium js-reveal gs-reveal-right">
						~285.900.000 руб
						<span class="text text--large text--gray text--w-regular">
						уточняйте актуальную цену
					</span>
					</div>
				</div>
				<div class="apartment__photo-info js-reveal gs-reveal-left">
					<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-left">
						<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-scheme-2-hmv.png" alt="" class="apartment__scheme-img">
					</div>
					<div class="apartment__photos d-flex js-reveal gs-reveal-left">
						<div class="apartment__photo">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-1-hmv.png" alt="" class="apartment__photo-img">
						</div>
						<div class="apartment__photo js-reveal gs-reveal-left">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-2-hmv.png" alt="" class="apartment__photo-img">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="apartment">
		<div class="apartment__body container">
			<div class="apartment__column">
				<div class="apartment__info">
					<h3 class="apartment__title title title--big title--black title--w-regular js-reveal gs-reveal-left">
						2 комнатная квартира
					</h3>
					<p class="apartment__subtitle text text--large text--black text--w-light js-reveal gs-reveal-left">
						108,1 кв м, 10 этаж, с чистовой отделкой
					</p>
					<p class="apartment__subtitle text text--large text--black text--w-medium js-reveal gs-reveal-left">
						Сдача в 2027 году
					</p>
					<div class="apartment__photo-info apartment__photo-info--mobile">
						<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-right">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-scheme-3-hmv.png" alt="" class="apartment__scheme-img">
						</div>
						<div class="apartment__photos d-flex js-reveal gs-reveal-right">
							<div class="apartment__photo">
								<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-1-hmv.png" alt="" class="apartment__photo-img">
							</div>
							<div class="apartment__photo js-reveal gs-reveal-right">
								<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-2-hmv.png" alt="" class="apartment__photo-img">
							</div>
						</div>
					</div>
					<div class="apartment__actions js-reveal gs-reveal-left">
						<a href="tel:+7 915 118 80 80" class="apartment__button button button--availability">
							Уточнить доступность
							<span class="button__icon">
							<svg class="button__phone-icon" width="37px" height="41px">
								<use href="<?= STANDART_DIR; ?>/img/svgsprite/sprite.symbol.svg#phone-button"></use>
							</svg>
						</span>
						</a>
					</div>
					<div class="apartment__wysiwyg wysiwyg wysiwyg--apartment js-reveal gs-reveal-left">
						Просторная, светлая квартира с 2 мастер спальнями, видом на набережную и балконом.
						<p style="color: var(--color-gray);">
							В каждой квартире ЖК установлены окна с зеркальным покрытием, которые пропускают свет, но берегут вашу приватность.
						</p>
						<p style="color: var(--color-gray);">
							Все системы комфорта (вентиляция, кондиционирование и даже канализация)  и лифты работают бесшумно.
						</p>
						<ul>
							<li>
								Зеркальные окна
							</li>
							<li>
								Вид на набережную
							</li>
							<li>
								Чистовая отделка
							</li>
							<li>
								Потолки 3,4 метра
							</li>
							<li>
								Балкон
							</li>
							<li>
								Шумоизоляция
							</li>
						</ul>
					</div>
					<div class="apartment__price text text--black text--w-medium js-reveal gs-reveal-left">
						~318.930.000 руб
						<span class="text text--large text--gray text--w-regular">
						уточняйте актуальную цену
					</span>
					</div>
				</div>
				<div class="apartment__photo-info apartment__photo-info--vertical">
					<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-right">
						<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-scheme-3-hmv.png" alt="" class="apartment__scheme-img">
					</div>
					<div class="apartment__photos d-flex js-reveal gs-reveal-right">
						<div class="apartment__photo">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-1-hmv.png" alt="" class="apartment__photo-img">
						</div>
						<div class="apartment__photo js-reveal gs-reveal-right">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-2-hmv.png" alt="" class="apartment__photo-img">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="consult" id="contacts">
		<div class="consult__body container">
			<h3 class="consult__title title title--super-huge title--black title--w-regular text-center js-reveal gs-reveal-left">
				Не нашли <span class="consult__title-accent title title--accent">подходящий</span> вариант?
			</h3>
			<div class="consult__subtitle text text--big text--black text--w-light text-center js-reveal gs-reveal-right">
				Свяжитесь с нами любым удобным для вас способом и наш эксперт поможет вам подобрать квартиру вашей мечты в этом ЖК или из 2000 других объектов.
			</div>
			<div class="consult__action js-reveal gs-reveal">
				<a href="tel:+7 915 118 80 80" class="apartment__button button button--availability"
				   data-hystmodal="#feedback">
					Получить консультацию
					<span class="button__icon">
					<svg class="button__home-icon" width="49px" height="49px">
						<use href="<?= STANDART_DIR; ?>/img/svgsprite/sprite.symbol.svg#home"></use>
					</svg>
				</span>
				</a>
			</div>
			<div class="consult__text text text--large text--black text--w-light text-center js-reveal gs-reveal">
				Консультация по подбору бесплатная и не обязывает к покупке.
				<br>
				Мы против спам-звонков, поэтому не беспокоим более 1 раза.
			</div>
		</div>
	</section>
	
<?php get_footer(); ?>