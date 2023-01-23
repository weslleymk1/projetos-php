<?php

    if(isset($_POST["submit"]))
    {
        // print_r('Nome:' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email:' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone:' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('Senha:' . $_POST['senha']);
        // print_r('<br>');
        // print_r('Nascimento:' . $_POST['nascimento']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha) VALUES ('$nome', '$email', '$senha')");

    header('Location: loginb.php');

    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro - Receitas Aqui</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">	

	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">

	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="cadastrob.php" method="POST">
					<span class="login100-form-title p-b-49">
						Registre-se
					</span>
					<div class="inputBox validate-input m-b-23" data-validate = "Campo obrigatório*">
						<span class="label-input100">Nome Completo:</span>

						<input type="text" name="nome" class="input100" id="nome" placeholder="Insira seu nome">

						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="inputBox validate-input m-b-23" data-validate = "Campo obrigatório*">
						<span class="label-input100">Email:</span>

						<input type="email" name="email" class="input100" id="email" placeholder="Insira seu endereço de email">

						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="inputBox validate-input m-b-23" data-validate="Campo obrigatório*">
						<span class="label-input100">Senha:</span>

						<input type="password" name="senha" class="input100"  id="senha" minlength="8" placeholder="8 caracteres minimo">

						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="inputBox validate-input" data-validate="Campo obrigatório*">
						<span class="label-input100">Confirme sua Senha:</span>

						<input type="password" class="input100" name="confirma-senha" id="confirma-senha" placeholder="Repita a senha">

						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31" id="msg-erro"></div>			
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name='submit' id="submit" class="login100-form-btn">
								Criar Conta
							</button>
						</div>
					</div>
					

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Registre-se usando:
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

					<div class="flex-col-c p-t-80">
						<span class="txt1 p-b-17">
							Já tem uma conta?
						</span>

						<a href="loginb.php" class="txt2">
							Fazer login
						</a>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

	<script src="script/validar-senha.js"></script>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/main.js"></script>

</body>
</html>