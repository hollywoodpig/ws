<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/main.css">
	<title>Профиль Anon</title>
</head>
<body>
	<header class="header">
		<div class="container">
			<div class="header__content">
				<a href="index.php" class="logo">
					<img class="logo__img" src="assets/img/logo-light.png" alt="">
				</a>
				<div class="header__inline">
					<a href="app-add.php" class="btn">Создать заявку</a>
					<a href="logout.php" class="btn btn_outline">Выйти</a>
				</div>
			</div>
		</div>
	</header>
	<main class="main">
		<!-- профиль -->
		<section class="section">
			<div class="container">
				<div class="section__heading">
					<h1 class="section__title">Добро пожаловать, Anon. Вот ваши заявки:</h1>
				</div>
				<div class="section__content">
					<!-- фильтр -->
					<div class="space-b">
						<form class="form-inline">
							<select class="input" name="filter">
								<option selected disabled >Показывать только по статусу</option>
								<option value="Новая">Новая</option>
								<option value="Решена">Решена</option>
								<option value="Отклонена">Отклонена</option>
							</select>
							<button class="btn">Вывести</button>
						</form>
					</div>
					<!-- заявки пользователя -->
					<div class="table">
						<table>
							<tbody>
								<!-- заголовки таблицы -->
								<tr>
									<th>№</th>
									<th>Название</th>
									<th>Статус</th>
									<th>Категория</th>
									<th>Время</th>
									<th>Описание</th>
									<th>Действие</th>
								</tr>
								<!-- 1 ряд -->
								<tr>
									<td><p class="">1</p></td>
									<td><p class="">Убейте меня пожалуйста</a></td>
									<td><p class="">Отклонена</p></td>
									<td><p class="">Суицид</p></td>
									<td><p class="">19.06.18</p></td>
									<td><p class="">Help me, i ain't got no brains, i can feel no pain</p></td>
									<td><a href="app-delete.php" class="link link_disabled">Удалить</a></td>
								</tr>
								<!-- 2 ряд -->
								<tr>
									<td><p class="">2</p></td>
									<td><p class="">Убейте меня пожалуйста</a></td>
									<td><p class="">Новая</p></td>
									<td><p class="">Суицид</p></td>
									<td><p class="">19.06.18</p></td>
									<td><p class="">Help me, i ain't got no brains, i can feel no pain</p></td>
									<td><a href="app-delete.php" class="link link_danger">Удалить</a></td>
								</tr>
								<!-- 3 ряд -->
								<tr>
									<td><p class="">3</p></td>
									<td><p class="">Убейте меня пожалуйста</a></td>
									<td><p class="">Новая</p></td>
									<td><p class="">Суицид</p></td>
									<td><p class="">19.06.18</p></td>
									<td><p class="">Help me, i ain't got no brains, i can feel no pain</p></td>
									<td><a href="app-delete.php" class="link link_danger">Удалить</a></td>
								</tr>
								<!-- 4 ряд -->
								<tr>
									<td><p class="">4</p></td>
									<td><p class="">Убейте меня пожалуйста</a></td>
									<td><p class="">Новая</p></td>
									<td><p class="">Суицид</p></td>
									<td><p class="">19.06.18</p></td>
									<td><p class="">Help me, i ain't got no brains, i can feel no pain</p></td>
									<td><a href="app-delete.php" class="link link_danger">Удалить</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
	</main>
	<footer class="footer">
		<div class="container">
			<div class="footer__content">
				<small class="">2022. Никита Кирша</small>
			</div>
		</div>
	</footer>
	
	<script src="assets/js/main.js"></script>
</body>
</html>