<?php 

if(isset($_POST['username']) && isset($_POST['password'])) {
	entrar();		
}else{
	redirecionarlogin()	;	
}
function entrar(){
	
	$usuario = $_POST['username'];
	$senha = $_POST['password'];
	$menuLatera = "";	
	
	if ($senha == "12345"){
		switch ($usuario) {
			case 'funcionario':
				$menuLatera = "view/menuLateralFuncionario.php";
				break;
			case 'sindico':
				$menuLatera = "view/menuLateralSindico.php";
				break;	 	
			case 'morador':
				$menuLatera = "view/menuLateralSindico.php";
				break;	 	 
			default:
				redirecionarlogin();
				return ;
			break;	 	
		}
		
		$logado = "SIM";
		
		$_SESSION['logado'] = $logado;
		
		include "view/header.php" ;
		include "view/menuSuperior.php";
		include $menuLatera;
		include "view/footer.php";
		
	}else{
		redirecionarlogin();
	}	
}
function redirecionarlogin()  {
	header("Location: http://localhost:8080/meucondominio/index.php")	;
	$logado = "NAO";
	$_SESSION['logado'] = $logado;
	
	$usuario = "";
}