<?php
/** @var array $breadcrumbs */
?>
<? if (!empty($breadcrumbs)): ?>
    <? $lastKey = array_key_last($breadcrumbs); ?>
    <div class="container">
        <div class="breadcrumbs d-flex flex-wrap align-items-center">
            <? foreach ($breadcrumbs as $key => $breadcrumb): ?>
                <? if ($key != $lastKey): ?>
                    <a href="<?= $breadcrumb['URL'] ?>"><?= $breadcrumb['NAME'] ?></a>
                    <div class="separator"></div>
                <? else: ?>
                    <span><?= $breadcrumb['NAME'] ?></span>
                <? endif ?>
            <? endforeach ?>
        </div>
    </div>
<? endif ?>
