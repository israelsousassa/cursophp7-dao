<?php

class usuarios{

	private $id;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function setId($value){
		
		$this->id = $value;
	}

	public function getId(){

		return $this->id;
	}


	public function setDeslogin($value){
		
		$this->deslogin = $value;
	}

	public function getDeslogin(){

		return $this->deslogin;
	}

	public function setDessenha($value){
		
		$this->dessenha = $value;
	}

	public function getDessenha(){

		return $this->dessenha;
	}

	public function setDtcadastro($value){
		
		$this->dtcadastro = $value;
	}

	public function getDtcadastro(){

		return $this->dtcadastro;
	}

	public function loadById($id){

		$sql = new sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE id = :ID", array(
			":ID"=> $id
	));

		if (count($results) > 0) {
			
			$row = $results[0];

			$this->setId($row['id']);
			$this->setDeslogin($row['deslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro(new DateTime ($row['dtcadastro']));
		}

	}

public function __toString(){

	return json_encode(array(
		"id" =>$this->getId(),
		"deslogin" => $this->getDeslogin(),
		"dessenha" =>$this->getDessenha(),
		"dtcadastro" =>$this->getDtcadastro()->format("d-m-Y H:i:s")

	));
}

}







?>