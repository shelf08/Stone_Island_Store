<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="about.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
	<link rel="icon" href="favicon.png" type="image/png">
	<title>SI Store | О нас</title>
</head>
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

    <div class="main-information">
		<div class="text-inform">
			Лобцов Дмитрий Александрович
			<div class="taglines">
                <div class="tagline">
                    В данный момент студент факультета компьютерных наук ВГУ
                </div>
                <div class="tagline">
                    Разработчик сайта, его владелец и представитель компании
                </div>
            </div>
            <div class="messengers">
				<div class="societe">
                    <a href="https://vk.com/shelflox">
                    <img src="vk.png" alt="" class="soc" width="40" height="40" >
                </div></a>
                <div class="societe">
                    <a href="https://t.me/shelf08">
                    <img src="tg.png" href="https://t.me/shelf08" alt="" class="soc" width="40" height="40">
                </div></a>
                <div class="societe">
                    <a href="https://www.instagram.com/shelf08/">
                    <img src="inst.png" href="https://www.instagram.com/shelf08/" alt="" class="soc" width="40" height="40">
                </div></a>
                <div class="societe">
                    <a href = "mailto:vip.lobtsov@gmail.com">
                    <img src="mail.png" href="vip.lobtsov@gmail.com" alt="" class="soc" width="40" height="40">
                </div></a>
			</div>
		</div>
		<div class="photos">
			<div class="photo">
				<img src="me.png" alt="" width="640" height="640">
			</div>
		</div>
	</div>
	<script src="script.js"></script>
</body>
</html>