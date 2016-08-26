<div class="row">
    <h2 class="col-md-12 text-center">Ввод персональных данных</h2>
</div>
<form method="POST" action="user/personal.data.control.php" class="col-md-4 col-md-offset-4 text-center personal-data-form">
    <input name="personalName" type="text" class="form-control auth-form_input" placeholder="Введите имя" required>
    <input min="1" max="120" name="personalAge" type="number" class="form-control auth-form_input" placeholder="Введите возраст" required>
    <textarea name="personalData" class="form-control auth-form_input" placeholder="Описание о себе" required></textarea>
    <input type="submit" class="btn btn-default" value="Сохранить">
</form>
<div class="row">
    <h2 class="col-md-12 text-center">Загрузить фото</h2>
</div>
<form method="POST" action="user/personal.data.control.php" class="col-md-4 col-md-offset-4 text-center personal-data-form" enctype="multipart/form-data">
    <input type="file" name="personalPhoto" class="form-control auth-form_input">
    <input type="submit" class="btn btn-default" value="Загрузить">
</form>