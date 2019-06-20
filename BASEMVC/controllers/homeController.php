<?php 
class homeController extends controller{


	public function index(){

		$aulas = new Aulas();
		$professor = new Professores();

		$dados = [
			'qt' => $professor->getQtd(),

		];


		$this->loadTemplate('home', $dados);
		
	}
	
}