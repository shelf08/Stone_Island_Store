<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
	<link rel="icon" href="favicon.png" type="image/png">
	<title>SI Store | Главная</title>
</head>

<body>
	<div class="header">
		<div class="logotype">
			<img src="logo.png" alt="" class="logo">
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
			Stone Island Store
			<div class="tagline">
				Крупнейший магазин SI в Черноземье
			</div>
			<div class="tagline">
				У нас закупается сын маминой подруги
			</div>
		</div>
		<div class="photos">
			<div class="new-collection">
				SI-2023 Collection
			</div>
			<div class="photo-model">
				<img src="model.png" alt="">
			</div>
			<div class="others-photo-model">
				<img src="others model.png" alt="">
			</div>
		</div>
	</div>
	
	<script src="script.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#ffffff",
      "text": "#000000"
    },
    "button": {
      "background": "#71ceeb"
    }
  },
  "theme": "classic",
  "position": "bottom-right",
  "type": "opt-out",
  "content": {
    "message": "Наш сайт использует cookies. Настоятельно просим вас принять их.",
	"allow":"Yes!",
    "deny": "No!",
    "link": "O cookies"
  },
  onInitialise: function (status) {
    var type = this.options.type;
    var didConsent = this.hasConsented();
    if (type == 'opt-in' && didConsent) {
		console.log(Загружаем);
    }
    if (type == 'opt-out' && !didConsent) {
		console.log(Отгружаем);
    }
    },
    onStatusChange: function(status, chosenBefore) {
    var type = this.options.type;
    var didConsent = this.hasConsented();
    if (type == 'opt-in' && didConsent) {
		console.log(Загружаем);
    }
    if (type == 'opt-out' && !didConsent) {
		console.log(Отгружаем);
    }
    },
    onRevokeChoice: function() {
    var type = this.options.type;
    if (type == 'opt-in') {
		console.log(Загружаем);
    }
    if (type == 'opt-out') {
		console.log(Отгружаем);
    }
    }
});
</script>
</body>

</html>