<?php
$breadcrumbs = [
    [
        'NAME' => 'Главная',
        'URL' => '/',
    ],
    [
        'NAME' => 'Наши врачи',
        'URL' => '/doctor-list.php',
    ],
    [
        'NAME' => 'Иванова Елена Вениаминовна',
        'URL' => '/doctor.php',
    ]
];

$pageType = 'doctor-page'; ?>
<? require 'header.php' ?>
<section class="container">
    <h1 class="title">Иванова Елена Вениаминовна</h1>
	<div class="doctor-card d-flex flex-wrap">
		<div class="image-wrapper">
			<img src="public/img/doctor.jpg" alt="" class="img-fluid">
			<div class="btn-wrapper d-flex justify-content-center">
                <a href="#" type="button"
                   data-bs-toggle="modal" data-bs-target="#recordFormModal"
                   class="btn button-primary-violet"> Записаться на прием</a>
            </div>
		</div>
		<div class="description-wrapper">
			<div class="position">Стоматолог&nbsp;&mdash; ортопед</div>
			<div class="experience">Опыт работы&nbsp;&mdash; 10&nbsp;лет</div>
			<div class="description">Врач высшей категории, специалист в&nbsp;области ортопедии. Постоянно повышает
                свою квалификацию,
                регулярно посещает международные симпозиумы, семинары, конгрессы, повышает свое мастерство.</div>
		</div>
	</div>
</section>
<? require 'footer.php' ?>
