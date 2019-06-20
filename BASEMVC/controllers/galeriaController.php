<?php

class galeriaController{
	public function index(){
		echo "Galeria de Fotos";
	}

	public function abrir($id){
		echo 'foto: '.$id;
	}
}