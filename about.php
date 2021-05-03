<?
$breadcrumbs = [
    [
        'NAME' => 'Главная',
        'URL'  => '/',
    ],
    [
        'NAME' => 'О клинике',
        'URL'  => '/about.php',
    ]
];

$pageType = 'about-page';
?>
<? require 'header.php' ?>
<section class="container gallery-wrapper">
	<div class="container">
	<h3 class="title-ab">О КЛИНИКЕ</h3>
	<div class="row gallery justify-content-center justify-content-lg-start">
		<div class="gallery-column">
			<img src="public/img/photo.png"  class="img-fluid titleimg">
			<div class="d-flex flex-wrap min-gallery">
                <img src="public/img/photo.png" class="img-fluid minipho" alt="">
                <img src="public/img/photo.png" class="img-fluid minipho" alt="">
                <img src="public/img/photo.png" class="img-fluid minipho" alt="">
                <img src="public/img/photo.png" class="img-fluid minipho" alt="">
                <img src="public/img/photo.png" class="img-fluid minipho" alt="">
                <img src="public/img/photo.png" class="img-fluid minipho" alt="">
			</div>
		</div>
		<div class="description-column">
            <p>Наша клиника отличается особым отношением к&nbsp;своим пациентам. Прекрасное современное инновационное оснощение, уникальные передоыфе технологии, грамотные специалисты и&nbsp;уютная обстановка позволили нам завоевать признание и&nbsp;любовь наших пациентов. Мы&nbsp;в&nbsp;первую очередь заботимся о&nbsp;вашем здоровье. Стоматология для нас&nbsp;&mdash; это не&nbsp;только работа, но&nbsp;и&nbsp;признание.</p>
			<p>Мы&nbsp;успешно осуществляем весь комплекс стоматологических услуг с&nbsp;максимальным комфортом для пациентов</p>
			<p>Мы&nbsp;используем только самое передовое оборудование швейцарского производства.</p>
		</div>
	</div>
		<h3 class="title-ab licenset">ЛИЦЕНЗИИ</h3>
		<div class="row">
            <img src="public/img/photo.png" class="img-fluid minipho licensetimg" alt="">
            <img src="public/img/photo.png" class="img-fluid minipho licensetimg" alt="">
            <img src="public/img/photo.png" class="img-fluid minipho licensetimg" alt="">
            <img src="public/img/photo.png" class="img-fluid minipho licensetimg" alt="">
            <img src="public/img/photo.png" class="img-fluid minipho licensetimg" alt="">
            <img src="public/img/photo.png" class="img-fluid minipho licensetimg" alt="">
		</div>
	</div>
</section>
<? require 'partials/contacts.php' ?>
<? require 'footer.php' ?>
