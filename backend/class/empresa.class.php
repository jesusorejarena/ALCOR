<?php

require_once("utilidad.class.php");

class empresa extends utilidad
{

	public $cod_emp;
	public $nom_emp;
	public $tel_emp;
	public $dir_emp;
	public $cor_emp;
	public $rif_emp;
	public $hou_emp;
	public $hod_emp;


	function create()
	{

		$this->que_bda = "INSERT INTO empresa
								(cod_emp,
								nom_emp,
								tel_emp, 
								dir_emp, 
								cor_emp,
								rif_emp, 
								hou_emp, 
								hod_emp)
							VALUES
								('1',
								'$this->nom_emp', 
								'$this->tel_emp', 
								'$this->dir_emp', 
								'$this->cor_emp',
								'$this->rif_emp', 
								'$this->hou_emp', 
								'$this->hod_emp');";

		return $this->run();
	} // fin de create

	function update()
	{
		$act_emp = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE empresa
								SET
									nom_emp='$this->nom_emp',
									tel_emp='$this->tel_emp',
									dir_emp='$this->dir_emp',
									cor_emp='$this->cor_emp',
									rif_emp='$this->rif_emp',
									hou_emp='$this->hou_emp',
									hod_emp='$this->hod_emp',
									act_emp='$act_emp'
								WHERE
									cod_emp='1';";

		return $this->run();
	} // fin de update

	function getByCode()
	{
		$this->que_bda = "SELECT * FROM empresa WHERE cod_emp='1';";

		return $this->run();
	} // fin de getByCode

}