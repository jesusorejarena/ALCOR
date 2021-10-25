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


	function getAll()
	{
		$this->que_bda = "SELECT * FROM modulo";

		return $this->run();
	} // fin de getAll

	function getAllActive()
	{
		$this->que_bda = "SELECT * FROM modulo;";

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
		$this->que_bda = "SELECT * FROM modulo WHERE cod_mod='$this->cod_mod';";

		return $this->run();
	} // fin de getMenu

	public function filter()
	{
		$filter1 = ($this->cod_mod != "") ? "AND cod_mod='$this->cod_mod'" : "";
		$filter2 = ($this->nom_mod != "") ? "AND nom_mod LIKE '%$this->nom_mod%'" : "";

		$this->que_bda = "SELECT * FROM modulo WHERE 1=1 $filter1 $filter2;";

		return $this->run();
	} // fin de filter

}