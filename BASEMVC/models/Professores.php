<?php

class Professores extends model{

	

	public function getQtd(){
		
		$qt = $this->db->query("SELECT COUNT(*) AS c FROM professores");

		if($qt->rowCount() > 0){
			$qtd = $qt->fetch();
			return $qtd['c'];
		}else{
			return 0;
		}

		
	}
}