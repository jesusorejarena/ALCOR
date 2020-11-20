<?php

require_once("utilidad.class.php");

class producto extends utilidad
{

	public $cod_pro;
	public $ser_pro;
	public $nom_pro;
	public $des_pro;
	public $pre_pro;
	public $can_pro;
	public $est_pro;
	public $bas_pro;


	function create()
	{
		$cre_pro = date("y-m-d h:i:s");

		$this->que_bda = "INSERT INTO producto
								(nom_pro,
								des_pro, 
								pre_pro, 
								can_pro, 
								cod_edo,
								cre_pro,
								est_pro, 
								bas_pro)
							VALUES
								('$this->nom_pro', 
								'$this->des_pro', 
								'$this->pre_pro', 
								'$this->can_pro', 
								'$this->cod_edo',
								'$cre_pro',
								'A',
								'A');";

		return $this->run();
	} // fin de create

	function update()
	{
		$act_pro = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE producto
								SET
									nom_pro='$this->nom_pro',
									des_pro='$this->des_pro',
									pre_pro='$this->pre_pro',
									can_pro='$this->can_pro',
									cod_edo='$this->cod_edo',
									act_pro='$act_pro',
									est_pro='$this->est_pro'
								WHERE
									cod_pro='$this->cod_pro';";

		return $this->run();
	} // fin de update

	function updateStatusA()
	{
		$act_pro = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE producto
							SET 
								act_pro='$act_pro',
								est_pro='A'
							WHERE
								cod_pro='$this->cod_pro';";

		return $this->run();
	} // fin de updateStatusA

	function updateStatusI()
	{
		$act_pro = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE producto
							SET 
								act_pro='$act_pro',
								est_pro='I'
							WHERE
								cod_pro='$this->cod_pro';";

		return $this->run();
	} // fin de updateStatusI

	function restore()
	{
		$res_pro = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE producto
								SET
									res_pro='$res_pro',
									bas_pro='A'
								WHERE
									cod_pro='$this->cod_pro';";

		return $this->run();
	} // fin de restore

	function firstDelete()
	{
		$eli_pro = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE producto
								SET
									eli_pro='$eli_pro',
									bas_pro='B'
								WHERE
									cod_pro='$this->cod_pro';";

		return $this->run();
	} // fin de firstDelete

	function sale()
	{
		$this->que_bda = "UPDATE producto
								SET
									can_pro='$this->can_pro'
								WHERE
									cod_pro='$this->cod_pro';";

		return $this->run();
	} // fin de sale

	function getAll()
	{
		$this->que_bda = "SELECT * FROM producto WHERE bas_pro='A'";

		return $this->run();
	} // fin de getAll

	function getAllActive()
	{
		$this->que_bda = "SELECT * FROM producto WHERE est_pro='A' AND bas_pro='A';";

		return $this->run();
	} // fin de getAllActive

	function getByCode()
	{
		$this->que_bda = "SELECT * FROM producto WHERE cod_pro='$this->cod_pro'";

		return $this->run();
	} // fin de getByCode

	function getFirstDelete()
	{
		$this->que_bda = "SELECT * FROM producto WHERE bas_pro='B'";

		return $this->run();
	} // fin de getFirstDelete

	function delete()
	{
		$this->que_bda = "DELETE FROM producto
								WHERE
									cod_pro='$this->cod_pro';";

		return $this->run();
	} // fin de delete

	public function filter()
	{
		$filter1 = ($this->cod_pro != "") ? "AND cod_pro='$this->cod_pro'" : "";
		$filter2 = ($this->nom_pro != "") ? "AND nom_pro LIKE '%$this->nom_pro%'" : "";
		$filter3 = ($this->des_pro != "") ? "AND des_pro LIKE '%$this->des_pro%'" : "";
		$filter4 = ($this->pre_pro != "") ? "AND pre_pro LIKE '%$this->pre_pro%'" : "";
		$filter5 = ($this->can_pro != "") ? "AND can_pro LIKE '%$this->can_pro%'" : "";
		$filter6 = ($this->cod_edo != "") ? "AND cod_edo='$this->cod_edo'" : "";
		$filter7 = ($this->est_pro != "") ? "AND est_pro='$this->est_pro'" : "";
		$filter8 = ($this->bas_pro != "") ? "AND bas_pro='$this->bas_pro'" : "";

		$this->que_bda = "SELECT * FROM producto WHERE 1=1 $filter1 $filter2 $filter3 $filter4 $filter5 $filter6 $filter7 $filter8";

		return $this->run();
	} // fin de filter

	function getBackup()
	{
		$this->que_bda = "SELECT * FROM producto_resp;";

		return $this->run();
	} // fin de getBackup

	function filterBackup()
	{

		$filter1 = ($this->cod_pro != "") ? "AND cod_pro='$this->cod_pro'" : "";
		$filter2 = ($this->nom_pro != "") ? "AND nom_pro LIKE '%$this->nom_pro%'" : "";
		$filter3 = ($this->des_pro != "") ? "AND des_pro LIKE '%$this->des_pro%'" : "";
		$filter4 = ($this->pre_pro != "") ? "AND pre_pro LIKE '%$this->pre_pro%'" : "";
		$filter5 = ($this->can_pro != "") ? "AND can_pro LIKE '%$this->can_pro%'" : "";
		$filter6 = ($this->cod_edo != "") ? "AND cod_edo='$this->cod_edo'" : "";
		$filter7 = ($this->est_pro != "") ? "AND est_pro='$this->est_pro'" : "";
		$filter8 = ($this->bas_pro != "") ? "AND bas_pro='$this->bas_pro'" : "";

		$this->que_bda = "SELECT * FROM producto_resp WHERE 1=1 $filter1 $filter2 $filter3 $filter4 $filter5 $filter6 $filter7 $filter8";

		return $this->run();
	} // fin de filterBackup

}