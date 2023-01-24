<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login - Receitas Aqui</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="http://localhost/projetosphp/receitasaqui/media/favicon.ico" type="image/x-icon">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/projetosphp/receitasaqui/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/projetosphp/receitasaqui/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/projetosphp/receitasaqui/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/projetosphp/receitasaqui/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="http://localhost/projetosphp/receitasaqui/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/projetosphp/receitasaqui/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/projetosphp/receitasaqui/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="http://localhost/projetosphp/receitasaqui/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/projetosphp/receitasaqui/css/util.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/projetosphp/receitasaqui/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<a href="http://localhost/projetosphp/receitasaqui/index.php">Voltar</a>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form action="http://localhost/projetosphp/receitasaqui/paginas/testLogin.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="inputBox validate-input m-b-23" data-validate = "Campo obrigatório*">
						<span class="label-input100">Usuário</span>
						<input class="input100" type="email" name="email" placeholder="Endereço de email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="inputBox validate-input" data-validate="Campo obrigatório*">
						<span class="label-input100">Senha</span>
						<input class="input100" type="password" name="senha" placeholder="Escreva sua senha">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Esqueceu a senha?
						</a>
					</div>			
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name='submit' id="submit" class="login100-form-btn">
								Entrar
							</button>
						</div>
					</div>
					

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Faça login usando:
						</span>
					</div>

					<div class="flex-c-m">

						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Não tem uma conta?
						</span>

						<a href="cadastrob.php" class="txt2">Cadastre-se</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="http://localhost/projetosphp/receitasaqui/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/projetosphp/receitasaqui/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/projetosphp/receitasaqui/vendor/bootstrap/js/popper.js"></script>
	<script src="http://localhost/projetosphp/receitasaqui/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/projetosphp/receitasaqui/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/projetosphp/receitasaqui/vendor/daterangepicker/moment.min.js"></script>
	<script src="http://localhost/projetosphp/receitasaqui/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/projetosphp/receitasaqui/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="http://localhost/projetosphp/receitasaqui/js/main.js"></script>

</body>
</html>