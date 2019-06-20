<?php

class Core{
	public function run(){
		// 1 = controller
		// 2 = action
		// 3 = parameters
		//controller = contatoController
		// action = index -> index da página de contatos

		$url = '/'; //-> ao digitar oednereço é adicionada a barra marcando o inicio
		if(isset($_GET['url'])){ //verificando se foi setada alguma coisa no endereço
			$url .=$_GET['url']; // se foi setado, junta com a / (url.com/exemplo/exemplo)
		}

		$param = [];
		//verificar se algo foi enviado
		if(!empty($url) && $url != '/'){
			$url = explode('/', $url);
			array_shift($url);

			$currentController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[0]) && !empty($url[0])){
				$currentAction = $url[0];
				array_shift($url);
			} else {
				$currentAction = 'index';
			}

			if(count($url) > 0){
				$param = $url;
			}

			

		}else{ // se a url está vazia e é diferente de uma barra,então o home e inde serão da página home
			$currentController = 'homeController'; 
			$currentAction = 'index';
		}

		$access = new $currentController();
		call_user_func_array(array($access, $currentAction), $param);







		// print_r($url);
		// echo '<hr>';

		// echo "Controller: ".$currentController.'<br>';
		// echo "Action: ".$currentAction.'<br>';
		// echo "Param".print_r($param, true);





	}
}