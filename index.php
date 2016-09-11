<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Forms</title>
</head>
<body>
	
	<form action="#">
  <p><i>Пожалуйста, заполните форму. Обязательные поля помечены </i><em>*</em></p>
  <fieldset>
    <legend>Контактная информация</legend>
      <label for="name">Имя <em>*</em></label>
      <input id="name"><br>
      <label for="telephone">Телефон</label>
      <input id="telephone"><br>
      <label for="email">Email <em>*</em></label>
      <input id="email"><br>
  </fieldset>
  <fieldset>
    <legend>Персональная информация</legend>
      <label for="age">Возраст<em>*</em></label>
      <input id="age"><br>
      <label for="gender">Пол</label>
      <select id="gender">
        <option value="female">Женщина</option>
        <option value="male">Мужчина</option>
      </select><br>
      <label for="comments">Перечислите личные качества</label>
      <textarea id="comments"></textarea>
  </fieldset>

  <fieldset>
    <legend>Выберите ваших любимых животных</legend>
    <label for="zebra"><input id="zebra" type="checkbox"> Зебра</label>
    <label for="cat"><input id="cat" type="checkbox"> Кошак</label>
    <label for="anaconda"><input id="anaconda" type="checkbox"> Анаконда</label>
    <label for="human"><input id="human" type="checkbox"> Человек</label>
    <label for="elephant"><input id="elephant" type="checkbox"> Слон</label>
    <label for="wildebeest"><input id="wildebeest" type="checkbox"> Антилопа</label>
    <label for="pigeon"><input id="pigeon" type="checkbox"> Голубь</label>
    <label for="crab"><input id="crab" type="checkbox"> Краб</label>
  </fieldset>
  <p><input type="submit" value="Отправить информацию"></p>
</form>

</body>
</html>