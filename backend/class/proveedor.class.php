<?php

require_once("utilidad.class.php");

class proveedor extends utilidad
{

	public $cod_edo;
	public $nom_edo;
	public $des_edo;
	public $dir_edo;
	public $tel_edo;
	public $cor_edo;
	public $tip_edo;
	public $rif_edo;
	public $est_edo;
	public $bas_edo;


	function create()
	{
		$cre_edo = date("y-m-d h:i:s");

		$this->que_bda = "INSERT INTO proveedor
								(nom_edo, 
								des_edo, 
								dir_edo, 
								tel_edo, 
								cor_edo, 
								tip_edo, 
								rif_edo,
								cre_edo,
								est_edo,
								bas_edo)
							VALUES
								('$this->nom_edo', 
								'$this->des_edo', 
								'$this->dir_edo', 
								'$this->tel_edo', 
								'$this->cor_edo', 
								'$this->tip_edo', 
								'$this->rif_edo',
								'$cre_edo',
								'A',
								'A');";

		return $this->run();
	} // fin de create

	function update()
	{
		$act_edo = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE proveedor
								SET
									nom_edo='$this->nom_edo',
									des_edo='$this->des_edo',
									dir_edo='$this->dir_edo',
									tel_edo='$this->tel_edo',
									cor_edo='$this->cor_edo',
									tip_edo='$this->tip_edo',
									rif_edo='$this->rif_edo',
									act_edo='$act_edo',
									est_edo='$this->est_edo'
								WHERE
									cod_edo='$this->cod_edo';";

		return $this->run();
	} // fin de update

	function updateStatusA()
	{
		$act_edo = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE proveedor
							SET 
								act_edo='$act_edo',
								est_edo='A'
							WHERE
								cod_edo='$this->cod_edo';";

		return $this->run();
	} // fin de updateStatusA

	function updateStatusI()
	{
		$act_edo = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE proveedor
							SET 
								act_edo='$act_edo',
								est_edo='I'
							WHERE
								cod_edo='$this->cod_edo';";

		return $this->run();
	} // fin de updateStatusI

	function restore()
	{
		$res_edo = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE proveedor
								SET
									res_edo='$res_edo',
									bas_edo='A'
								WHERE
									cod_edo='$this->cod_edo';";

		return $this->run();
	} // fin de restore

	function firstDelete()
	{
		$eli_edo = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE proveedor
								SET
									eli_edo='$eli_edo',
									bas_edo='B'
								WHERE
									cod_edo='$this->cod_edo' ORDER BY cod_edo DESC;";

		return $this->run();
	} // fin de firstDelete

	function getAll()
	{
		$this->que_bda = "SELECT * FROM proveedor WHERE bas_edo='A' ORDER BY cod_edo DESC;";

		return $this->run();
	} // fin de getAll

	function getAllActive()
	{
		$this->que_bda = "SELECT * FROM proveedor WHERE est_edo='A' AND bas_edo='A' ORDER BY cod_edo DESC;";

		return $this->run();
	} // fin de getAllActive

	function getByCode()
	{
		$this->que_bda = "SELECT * FROM proveedor WHERE cod_edo='$this->cod_edo'";

		return $this->run();
	} // fin de getByCode

	function getFirstDelete()
	{
		$this->que_bda = "SELECT * FROM proveedor WHERE bas_edo='B' ORDER BY cod_edo DESC;";

		return $this->run();
	} // fin de getFirstDelete

	function delete()
	{
		$this->que_bda = "DELETE FROM proveedor
								WHERE
									cod_edo='$this->cod_edo';";

		return $this->run();
	} // fin de delete

	public function filter()
	{
		$filter1 = ($this->cod_edo != "") ? "AND cod_edo='$this->cod_edo'" : "";
		$filter2 = ($this->nom_edo != "") ? "AND nom_edo LIKE '%$this->nom_edo%'" : "";
		$filter3 = ($this->des_edo != "") ? "AND des_edo LIKE '%$this->des_edo%'" : "";
		$filter4 = ($this->dir_edo != "") ? "AND dir_edo LIKE '%$this->dir_edo%'" : "";
		$filter5 = ($this->tel_edo != "") ? "AND tel_edo LIKE '%$this->tel_edo%'" : "";
		$filter6 = ($this->cor_edo != "") ? "AND cor_edo LIKE '%$this->cor_edo%'" : "";
		$filter7 = ($this->tip_edo != "") ? "AND tip_edo='$this->tip_edo'" : "";
		$filter8 = ($this->rif_edo != "") ? "AND rif_edo LIKE '%$this->rif_edo%'" : "";
		$filter9 = ($this->est_edo != "") ? "AND est_edo='$this->est_edo'" : "";
		$filter10 = ($this->bas_edo != "") ? "AND bas_edo='$this->bas_edo'" : "";

		$this->que_bda = "SELECT * FROM proveedor WHERE 1=1 $filter1 $filter2 $filter3 $filter4 $filter5 $filter6 $filter7 $filter8 $filter9 $filter10 ORDER BY cod_edo DESC;";

		return $this->run();
	} // fin de filter

	function getBackup()
	{
		$this->que_bda = "SELECT * FROM proveedor_resp ORDER BY cod_edo DESC;";

		return $this->run();
	} // fin de getBackup

	function filterBackup()
	{

		$filter1 = ($this->cod_edo != "") ? "AND cod_edo='$this->cod_edo'" : "";
		$filter2 = ($this->nom_edo != "") ? "AND nom_edo LIKE '%$this->nom_edo%'" : "";
		$filter3 = ($this->des_edo != "") ? "AND des_edo LIKE '%$this->des_edo%'" : "";
		$filter4 = ($this->dir_edo != "") ? "AND dir_edo LIKE '%$this->dir_edo%'" : "";
		$filter5 = ($this->tel_edo != "") ? "AND tel_edo LIKE '%$this->tel_edo%'" : "";
		$filter6 = ($this->cor_edo != "") ? "AND cor_edo LIKE '%$this->cor_edo%'" : "";
		$filter7 = ($this->tip_edo != "") ? "AND tip_edo='$this->tip_edo'" : "";
		$filter8 = ($this->rif_edo != "") ? "AND rif_edo LIKE '%$this->rif_edo%'" : "";
		$filter9 = ($this->est_edo != "") ? "AND est_edo='$this->est_edo'" : "";
		$filter10 = ($this->bas_edo != "") ? "AND bas_edo='$this->bas_edo'" : "";

		$this->que_bda = "SELECT * FROM proveedor_resp WHERE 1=1 $filter1 $filter2 $filter3 $filter4 $filter5 $filter6 $filter7 $filter8 $filter9 $filter10 ORDER BY cod_edo DESC;";

		return $this->run();
	} // fin de filterBackup

}