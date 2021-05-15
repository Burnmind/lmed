<?
$breadcrumbs = [
    [
        'NAME' => 'Главная',
        'URL'  => '/',
    ],
    [
        'NAME' => 'Услуги стоматологии',
        'URL'  => '/services.php',
    ]
];

$pageType = 'services-page';
?>
<? require 'header.php' ?>

<? require 'partials/service-list.php' ?>

<div class="container">
    <? require 'partials/record-form.php' ?>
</div>

<? require 'footer.php' ?>
