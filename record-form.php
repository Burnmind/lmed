<? $pageType = 'record-form'; ?>
<? require 'header.php' ?>
<section class="form-block conteiner">
<link rel="stylesheet" type="text/css" href="scss/common/record-form.scss">
<div class="conteiner form-conteiner">
	<form name="record-form-write" method="post" action="#">
		<input type="text" name="your-name" value="Ваше имя" size="40"> <br>
		<input type="text" name="telephone" value="Телефон" size="10"> <br>
		<input type="text" name="comment" value="Комментарий" size="250"> <br>
	</form>
</div>
</section>
<? require 'partials/contacts.php' ?>
<? require 'footer.php' ?>