<?php /* Template Name: Район Хорошёво-Мневники */?>
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
							<a href="tel:+7 915 118 80 80" class="main-screen__phone d-flex flex-align-center flex-justify-center">
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
							Район Хорошёво-Мневники
						</p>
						<h1 class="main-screen__title title title--huge title--black title--w-regular text-center">
							ЖК
							<br>
							премиум-класса
							от 16 миллионов
						</h1>
					</div>
					<div class="main-screen__bottom d-flex flex-justify-sb flex-align-center">
						<a href="tel:+7 915 118 80 80" class="main-scree__button button button--phone">
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
					<img src="<?= STANDART_DIR; ?>/img/main-screen-hor.jpg" alt="" class="main-screen__img">
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
				<span class="about__title-accent title title--accent">ЖК в Хорошёво-Мневниках это</span>
				приватность, эстетика и красивые виды.
			</h3>
			<div class="about__text text text--big text--black text--w-light">
				Светлые квартиры с панорамным остеклением и видами на Москву, приватные террасы, свой собственный многоуровневый двор-парк и премиум сервис: консьерж, круглосуточная охрана и 5 скоростных лифтов.
			</div>
		</div>
		<img src="<?= STANDART_DIR; ?>/img/other/about-bg-hor.jpg" alt="" class="about__img js-reveal gs-reveal-right">
	</section>

	<section class="comfort js-reveal gs-reveal" id="features">
		<div class="comfort__body container">
			<h3 class="comfort__heading title title--huge title--black title--w-regular text-center js-reveal gs-reveal-left">
			<span class="comfort__heading-accent">
				Воплощение комфорта
			</span>
				в каждом квадратном метре
			</h3>
			<div class="comfort__grid">
				<div class="comfort__card js-reveal gs-reveal-left" data-num="01">
					<h3 class="comfort__card-title text text--big text--black text--w-medium text--uppercase">
						КЛИМАТ КОНТРОЛЬ,
						СИСТЕМА УМНЫЙ ДОМ
					</h3>
					<div class="comfort__card-description text text--large text--black text--w-light">
						Все наши квартиры оснащены системой умный дом с продуманным климат контролем — зимой в квартирах тепло, а летом не жарко.
					</div>
				</div>
				<div class="comfort__card js-reveal gs-reveal-right" style="background-image: url('<?= STANDART_DIR; ?>/img/other/comfort.png')">
					<!--				<img src="<?= STANDART_DIR; ?>/img/other/comfort.png" alt="" class="comfort__card-img">-->
				</div>
				<div class="comfort__card js-reveal gs-reveal-left">

				</div>
				<div class="comfort__card js-reveal gs-reveal-left" data-num="02">
					<h3 class="comfort__card-title text text--big text--black text--w-medium text--uppercase">
						CВЕТЛЫЕ КВАРТИРЫ С ВЫСОКИМИ ПОТОЛКАМИ
					</h3>
					<div class="comfort__card-description text text--large text--black text--w-light">
						Потолки до 6 метров подарят вам ощущение простора, а панорамные окна — захватывающие виды на Москву ночью и уют днем.
					</div>
				</div>
				<div class="comfort__card js-reveal gs-reveal-right">

				</div>
				<div class="comfort__card js-reveal gs-reveal-right" data-num="03">
					<h3 class="comfort__card-title text text--big text--black text--w-medium text--uppercase">
						СОБСТВЕННЫЙ ЗАКРЫТЫЙ ДВОР-ПАРК
					</h3>
					<div class="comfort__card-description text text--large text--black text--w-light">
						Ландшафтный парк на 2.3 гектара, прогулочный променад, всесезонное озеленение и парящий мост — прямо внутри ЖК.
					</div>
				</div>
				<div class="comfort__card js-reveal gs-reveal-left" data-num="04">
					<h3 class="comfort__card-title text text--big text--black text--w-medium text--uppercase">
						ПРОДУМАННАЯ ИНФРАСТРУКТУРА
					</h3>
					<div class="comfort__card-description text text--large text--black text--w-light">
						Игровые комнаты для детей, фитнесс-центр с панорамным бассейном, кафе, рестораны, коворкинг, супермаркеты — в шаговой доступности не выходя из ЖК. А также — джакузи под открытым небом и лаунж-зона с мини-кухней.
					</div>
				</div>
				<div class="comfort__card js-reveal gs-reveal-left" style="background-image: url('<?= STANDART_DIR; ?>/img/other/comfort-hor-2.jpg')">
				</div>
				<div class="comfort__card js-reveal gs-reveal-right" data-num="05">
					<h3 class="comfort__card-title text text--big text--black text--w-medium text--uppercase">
						ДИЗАЙНЕРСКАЯ АРХИТЕКТУРА
					</h3>
					<div class="comfort__card-description text text--large text--black text--w-light">
						Архитектурный проект башен разработан ГенПро — креативным международным архитектурным бюро, работавшим над обновлением одного из первых нью-йоркских небоскребов Crown Building
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
						<span class="features__heading-accent">Хорошёво-Мневники</span>
						престижный район Москвы
					</h3>
					<div class="features__pic features__pic--mobile">
						<img src="<?= STANDART_DIR; ?>/img/other/features.jpeg" alt="" class="features__img">
					</div>
					<div class="features__description text text--big text--white text--w-light">
						Один из самых зеленых районов на севере Москвы. Помимо парка «Серебряный Бор» с благоустроенной пляжной зоной, здесь расположено еще несколько природных зон, а также Москворецкий дендропарк и Мневниковская пойма.
					</div>
					<ul class="features__list text text--big text--white text--w-regular">
						<li class="features__list-item features__list-item--walking">
							5 минут пешком от метро Хорошёво
						</li>
						<li class="features__list-item features__list-item--car">
							3 минуты до Звенигородского шоссе
						</li>
						<li class="features__list-item features__list-item--car">
							5 минут до ТТК
						</li>
					</ul>
				</div>
				<div class="features__pic js-reveal gs-reveal-right">
					<img src="<?= STANDART_DIR; ?>/img/other/features-hor.jpeg" alt="" class="features__img">
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
						Квартира-студия
					</h3>
					<p class="apartment__subtitle text text--large text--black text--w-light js-reveal gs-reveal-left">
						23 кв м, 36 этаж, с чистовой отделкой Base
					</p>
					<p class="apartment__subtitle text text--large text--black text--w-medium js-reveal gs-reveal-left">
						Сдача в 2027 году
					</p>
					<div class="apartment__photo-info apartment__photo-info--mobile js-reveal gs-reveal-right">
						<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-right">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-scheme-1-hor.png" alt="" class="apartment__scheme-img">
						</div>
						<div class="apartment__photos d-flex js-reveal gs-reveal-right">
							<div class="apartment__photo">
								<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-1-hor.png" alt="" class="apartment__photo-img">
							</div>
							<div class="apartment__photo js-reveal gs-reveal-right">
								<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-2-hor.png" alt="" class="apartment__photo-img">
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
						Светлая студия на 36 этаже с панорамным видом в сторону Москва-сити.
						<p style="color: var(--color-gray);">
							В квартире выполнена стяжка пола, стены выровнены, ошпаклеваны и окрашены базовой краской белого цвета. Проведены все коммуникации: выполнена разводка сети электроснабжения, в санузлах выполнен ввод холодной и горячей воды, отвод канализации, установлены запорные краны и заглушки.
						</p>
						<ul>
							<li>
								Панорамные окна
							</li>
							<li>
								Вид на Сити
							</li>
							<li>
								Base отделка
							</li>
							<li>
								Энергоэффективность
							</li>
							<li>
								Шумоизоляция
							</li>
							<li>
								36 этаж башни Anna
							</li>
						</ul>
					</div>
					<div class="apartment__price text text--black text--w-medium js-reveal gs-reveal-left">
						~16.800.000 руб
						<span class="text text--large text--gray text--w-regular">
						уточняйте актуальную цену
					</span>
					</div>
				</div>
				<div class="apartment__photo-info">
					<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-right">
						<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-scheme-1-hor.png" alt="" class="apartment__scheme-img">
					</div>
					<div class="apartment__photos d-flex js-reveal gs-reveal-right">
						<div class="apartment__photo">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-1-hor.png" alt="" class="apartment__photo-img">
						</div>
						<div class="apartment__photo js-reveal gs-reveal-right">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-2-hor.png" alt="" class="apartment__photo-img">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="apartment apartment--revert apartment--vertical">
		<div class="apartment__body container">
			<div class="apartment__column">
				<div class="apartment__info">
					<h3 class="apartment__title title title--big title--black title--w-regular js-reveal gs-reveal-right">
						2 комнатная квартира
					</h3>
					<p class="apartment__subtitle text text--large text--black text--w-light js-reveal gs-reveal-right">
						61 кв м, 35 этаж, с чистовой отделкой Base
					</p>
					<p class="apartment__subtitle text text--large text--black text--w-medium js-reveal gs-reveal-right">
						Сдача в 2027 году
					</p>
					<div class="apartment__photo-info apartment__photo-info--mobile">
						<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-left">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-scheme-2-hor.png" alt="" class="apartment__scheme-img">
						</div>
						<div class="apartment__photos d-flex js-reveal gs-reveal-left">
							<div class="apartment__photo">
								<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-1-hor.png" alt="" class="apartment__photo-img">
							</div>
							<div class="apartment__photo js-reveal gs-reveal-right">
								<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-3-hor.png" alt="" class="apartment__photo-img">
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
						Просторная, светлая квартира с панорамным остеклением и видами на Москва сити и внутренний двор-парк.
						<p style="color: var(--color-gray);">
							В квартирах выполнена стяжка пола, стены выровнены, ошпаклеваны и окрашены базовой краской белого цвета. Проведены все коммуникации: выполнена разводка сети электроснабжения, в санузлах выполнен ввод холодной и горячей воды, отвод канализации, установлены запорные краны и заглушки
						</p>
						<ul>
							<li>
								Панорамные окна
							</li>
							<li>
								Вид на Сити
							</li>
							<li>
								Base отделка
							</li>
							<li>
								Энергоэффективность
							</li>
							<li>
								Шумоизоляция
							</li>
							<li>
								35 этаж башни Anna
							</li>
						</ul>
					</div>
					<div class="apartment__price text text--black text--w-medium js-reveal gs-reveal-right">
						~32.600.000 руб
						<span class="text text--large text--gray text--w-regular">
						уточняйте актуальную цену
					</span>
					</div>
				</div>
				<div class="apartment__photo-info apartment__photo-info--vertical js-reveal gs-reveal-left">
					<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-left">
						<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-scheme-2-hor.png" alt="" class="apartment__scheme-img">
					</div>
					<div class="apartment__photos d-flex js-reveal gs-reveal-left">
						<div class="apartment__photo">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-1-hor.png" alt="" class="apartment__photo-img">
						</div>
						<div class="apartment__photo js-reveal gs-reveal-left">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-3-hor.png" alt="" class="apartment__photo-img">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="apartment apartment--vertical">
		<div class="apartment__body container">
			<div class="apartment__column">
				<div class="apartment__info">
					<h3 class="apartment__title title title--big title--black title--w-regular js-reveal gs-reveal-left">
						3 комнатная квартира
					</h3>
					<p class="apartment__subtitle text text--large text--black text--w-light js-reveal gs-reveal-left">
						84 кв м, 34 этаж, с чистовой отделкой Base
					</p>
					<p class="apartment__subtitle text text--large text--black text--w-medium js-reveal gs-reveal-left">
						Сдача в 2027 году
					</p>
					<div class="apartment__photo-info apartment__photo-info--mobile">
						<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-right">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-scheme-3-hor.png" alt="" class="apartment__scheme-img">
						</div>
						<div class="apartment__photos d-flex js-reveal gs-reveal-right">
							<div class="apartment__photo">
								<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-1-hor.png" alt="" class="apartment__photo-img">
							</div>
							<div class="apartment__photo js-reveal gs-reveal-right">
								<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-2-hor.png" alt="" class="apartment__photo-img">
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
						Большая, светлая и просторная квартира с панорамным остеклением в сторону Москва-сити.
						<p style="color: var(--color-gray);">
							В квартирах выполнена стяжка пола, стены выровнены, ошпаклеваны и окрашены базовой краской белого цвета. Проведены все коммуникации: выполнена разводка сети электроснабжения, в санузлах выполнен ввод холодной и горячей воды, отвод канализации, установлены запорные краны и заглушки.
						</p>
						<ul>
							<li>
								Панорамные окна
							</li>
							<li>
								Вид на Сити
							</li>
							<li>
								Base отделка
							</li>
							<li>
								Энергоэффективность
							</li>
							<li>
								Шумоизоляция
							</li>
							<li>
								34 этаж башни Anna
							</li>
						</ul>
					</div>
					<div class="apartment__price text text--black text--w-medium js-reveal gs-reveal-left">
						~44.400.000 руб
						<span class="text text--large text--gray text--w-regular">
						уточняйте актуальную цену
					</span>
					</div>
				</div>
				<div class="apartment__photo-info apartment__photo-info--vertical">
					<div class="apartment__scheme d-flex flex-justify-center js-reveal gs-reveal-right">
						<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-scheme-3-hor.png" alt="" class="apartment__scheme-img">
					</div>
					<div class="apartment__photos d-flex js-reveal gs-reveal-right">
						<div class="apartment__photo">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-1-hor.png" alt="" class="apartment__photo-img">
						</div>
						<div class="apartment__photo js-reveal gs-reveal-right">
							<img src="<?= STANDART_DIR; ?>/img/apartment/apartment-2-hor.png" alt="" class="apartment__photo-img">
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
				<a href="javascript:;" class="apartment__button button button--availability"
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