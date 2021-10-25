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

	function getBackup()
	{
		$this->que_bda = "SELECT * FROM empresa_resp ORDER BY cod_emp DESC;";

		return $this->run();
	} // fin de getByCode

	function filterBackup()
	{
		$filter1 = ($this->cod_emp != "") ? "AND cod_emp='$this->cod_emp'" : "";
		$filter2 = ($this->nom_emp != "") ? "AND nom_emp LIKE '%$this->nom_emp%'" : "";
		$filter3 = ($this->tel_emp != "") ? "AND tel_emp LIKE '%$this->tel_emp%'" : "";
		$filter4 = ($this->dir_emp != "") ? "AND dir_emp LIKE '%$this->dir_emp%'" : "";
		$filter5 = ($this->cor_emp != "") ? "AND cor_emp LIKE '%$this->cor_emp%'" : "";
		$filter6 = ($this->rif_emp != "") ? "AND rif_emp LIKE '%$this->rif_emp%'" : "";
		$filter7 = ($this->hou_emp != "") ? "AND hou_emp LIKE '%$this->hou_emp%'" : "";
		$filter8 = ($this->hod_emp != "") ? "AND hod_emp LIKE '%$this->hod_emp%'" : "";

		$this->que_bda = "SELECT * FROM empresa_resp WHERE	1=1 $filter1 $filter2 $filter3 $filter4 $filter5 $filter6 $filter7 $filter8 ORDER BY cod_emp DESC;";

		return $this->run();
	} // fin de filterBackup

}