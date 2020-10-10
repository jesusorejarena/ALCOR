<?php

require_once("utilidad.class.php");

class modulo extends utilidad
{

	public $cod_mod;
	public $cod_car;
	public $nom_mod;
	public $url_mod;
	public $est_mod;
	public $bas_mod;


	function create()
	{
		$cre_mod = date("y-m-d h:i:s");

		$this->que_bda = "INSERT INTO modulo
								(nom_mod,
								url_mod,
								cre_mod,
								est_mod,
								bas_mod)
							VALUES
								('$this->nom_mod',
								'$this->url_mod',
								'$cre_mod',
								'A',
								'A');";

		return $this->run();
	} // fin de create

	function update()
	{
		$act_mod = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE modulo
								SET
									act_mod='$act_mod',
									est_mod='$this->est_mod'
								WHERE
									cod_mod='$this->cod_mod';";

		return $this->run();
	} // fin de update

	function restore()
	{
		$res_mod = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE modulo
								SET
									res_mod='$res_mod',
									bas_mod='A'
								WHERE
									cod_mod='$this->cod_mod';";

		return $this->run();
	} // fin de restore

	function firstDelete()
	{
		$eli_mod = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE modulo
								SET
									eli_mod='$eli_mod',
									bas_mod='B'
								WHERE
									cod_mod='$this->cod_mod';";

		return $this->run();
	} // fin de firstDelete

	function sale()
	{
		$this->que_bda = "UPDATE modulo
								SET
									est_mod='$this->est_mod'
								WHERE
									cod_mod='$this->cod_mod';";

		return $this->run();
	} // fin de sale

	function getAll()
	{
		$this->que_bda = "SELECT * FROM modulo WHERE bas_mod='A';";

		return $this->run();
	} // fin de getAll

	function getAllActive()
	{
		$this->que_bda = "SELECT * FROM modulo WHERE est_mod='A' AND bas_mod='A';";

		return $this->run();
	} // fin de getAllActive

	function getByCode()
	{
		$this->que_bda = "SELECT * FROM modulo WHERE cod_mod='$this->cod_mod';";

		return $this->run();
	} // fin de getByCode

	function checkModule()
	{
		$this->que_bda = "SELECT * FROM modulo WHERE nom_mod='$this->nom_mod';";

		return $this->run();
	} // fin de checkModule

	function getMenu()
	{
		$this->que_bda = "SELECT * FROM modulo WHERE cod_mod='$this->cod_mod' AND est_mod='A' AND bas_mod='A';";

		return $this->run();
	} // fin de getMenu

	function getFirstDelete()
	{
		$this->que_bda = "SELECT * FROM modulo WHERE bas_mod='B';";

		return $this->run();
	} // fin de getFirstDelete

	function delete()
	{
		$this->que_bda = "DELETE FROM modulo
								WHERE
									cod_mod='$this->cod_mod';";

		return $this->run();
	} // fin de delete

	public function filter()
	{
		$filter1 = ($this->cod_mod != "") ? "AND cod_mod='$this->cod_mod'" : "";
		$filter2 = ($this->nom_mod != "") ? "AND nom_mod LIKE '%$this->nom_mod%'" : "";
		$filter3 = ($this->est_mod != "") ? "AND est_mod='$this->est_mod'" : "";
		$filter4 = ($this->bas_mod != "") ? "AND bas_mod='$this->bas_mod'" : "";

		$this->que_bda = "SELECT * FROM modulo WHERE 1=1 $filter1 $filter2 $filter3 $filter4;";

		return $this->run();
	} // fin de filter

	function getBackup()
	{
		$this->que_bda = "SELECT * FROM modulo_resp;";

		return $this->run();
	} // fin de getBackup

	function filterBackup()
	{

		$filter1 = ($this->cod_mod != "") ? "AND cod_mod='$this->cod_mod'" : "";
		$filter2 = ($this->nom_mod != "") ? "AND nom_mod LIKE '%$this->nom_mod%'" : "";
		$filter3 = ($this->est_mod != "") ? "AND est_mod='$this->est_mod'" : "";
		$filter4 = ($this->bas_mod != "") ? "AND bas_mod='$this->bas_mod'" : "";

		$this->que_bda = "SELECT * FROM modulo_resp WHERE 1=1 $filter1 $filter2 $filter3 $filter4;";

		return $this->run();
	} // fin de filterBackup

}