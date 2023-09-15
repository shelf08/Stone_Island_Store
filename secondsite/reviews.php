<?php

require_once 'config/connect.php';


?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="reviews.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
	<link rel="icon" href="favicon.png" type="image/png">
	<title>SI Store | Отзывы</title>
</head>
<style>
    .tab{
		position:absolute;
		left:100px;
		top:180px;
    }
    .th, td{
        padding:10px;
    }
    th{
        background: #1eabd6;
        color: #fff;
    }
    .td{
        background: #1eabd6;
		color:#fff;
    }
	</style>
<body>
	<div class="header">
		<div class="logotype">
			<img src="logo.png" alt="" class="logo" >
		</div>

		<div class="nav-menu">
			<div class="menu">
				<div class="nav-item">
					<a href="main.php" class="nav-link">Главная</a>
				</div>
				<div class="nav-item">
					<a href="catalog.php" class="nav-link">Каталог</a>
				</div>
				<div class="nav-item">
					<a href="about.php" class="nav-link">О нас</a>
				</div>
				<div class="nav-item">
					<div class = "nav-link" id ="acc-Btn">Войти</div>
					<div id="acc-popup" class="acc-popup">
						<div class="acc-popup-content">
							<div class="acc-popup-header">
								<h2>Войти в личный кабинет</h2>
								<span class="acc-close">&times;</span>
							</div>
							<div class="acc-popup-body">
								<p>Логин</p>
								<div class="acc-enter">
									<input type="acc-text" class="acc-enter-form" placeholder=" ">
									<a href="#" class="acc-enter-btn"><i class="fas fa-enter"></i></a>
								</div>
								<p>Пароль</p>
								<div class="acc-enter">
									<input type="acc-text" class="acc-enter-form" placeholder=" ">
									<a href="#" class="acc-enter-btn"><i class="fas fa-enter"></i></a>
								</div>
							</div>
							<div class="acc-popup-footer">
								<button>Войти</button>
								<button><div class id = "reg-Btn">Зарегистрироваться</div></button>

								<div id="reg-popup" class="reg-popup">
									<div class="reg-popup-content">
										<div class="reg-popup-header">
											<h2>Регистрация</h2>
											<span class="reg-close">&times;</span>
										</div>
										<div class="reg-popup-body">
											<p>Логин</p>
											<div class="reg-enter">
												<input type="reg-text" class="reg-enter-form" placeholder=" ">
												<a href="#" class="reg-enter-btn"><i class="fas fa-enter"></i></a>
											</div>
											<p>Почта</p>
											<div class="reg-enter">
												<input type="reg-text" class="reg-enter-form" placeholder=" ">
												<a href="#" class="reg-enter-btn"><i class="fas fa-enter"></i></a>
											</div>
											<p>Пароль</p>
											<div class="reg-enter">
												<input type="reg-text" class="reg-enter-form" placeholder=" ">
												<a href="#" class="reg-enter-btn"><i class="fas fa-enter"></i></a>
											</div>
											<p>Повторите</p>
											<p1>пароль</p1>
											<div class="reg-enter">
												<input type="reg-text" class="reg-enter-form" placeholder=" ">
												<a href="#" class="reg-enter-btn"><i class="fas fa-enter"></i></a>
											</div>
										</div>
										<div class="reg-popup-footer">
											<button>Зарегистрироваться</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="nav-item">
					<a href="cart.php" class="nav-link">Корзина</a>
				</div>
                <div class="nav-item">
					<a href="reviews.php" class="nav-link">Отзывы</a>
				</div>
			</div>
		</div>
		<div class="nav-bt">
			<button type="button" onclick="clickHandler()" id="submit">Удалить куки</button>
		</div>
		<script>
			function deleteAllCookies() {
				const cookies = document.cookie.split(";");

				for (let i = 0; i < cookies.length; i++) {
					const cookie = cookies[i];
					const eqPos = cookie.indexOf("=");
					const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
					document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
				}
			}

			// кнопка
			document.querySelector("#submit").onclick = function () {
				deleteAllCookies();
				location.reload();
			}
		</script>
	</div>
	<div class="tab">
		<table>
			<tr>
				<th>Номер</th>
				<th>Автор</th>
				<th>Товар</th>
				<th>Комментарий</th>
			</tr>

			<?php
			    $rewiews =mysqli_query($connect,"SELECT * FROM `Отзывы`");
				$rewiews = mysqli_fetch_all($rewiews);
				foreach ($rewiews as $Отзывы){
					?>
					<tr>
				        <td><?= $Отзывы[0] ?></td>
				        <td><?= $Отзывы[1] ?></td>
				        <td><?= $Отзывы[2] ?></td>
				        <td><?= $Отзывы[3] ?></td>
						<td><a style ="color: purple;" href="update.php?id=<?=$Отзывы[0]?>">Изменить</a></td>
						<td><a style ="color: red;" href="vendor/delete.php?id=<?=$Отзывы[0]?>">Удалить</a></td>
				    </tr>
					<?php
				}
			?>
		</table>
		<form action="vendor/create.php" method="post">
			<p>Ваше имя</p>
			<input type="text" name="title">
			<p>Товар</p>
			<textarea name="description"></textarea>
			<p>Комментарий</p>
			<textarea name="price"></textarea> <br> <br>
			<button type = "submit">Добавить отзыв</button>
		</form>
	</div>
	<script src="script.js"></script>
</body>
</html>