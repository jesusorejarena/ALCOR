<?php

require_once("utilidad.class.php");

class cargo extends utilidad
{

	public $cod_car;
	public $nom_car;
	public $est_car;
	public $bas_car;


	function create()
	{
		$cre_car = date("y-m-d h:i:s");

		$this->que_bda = "INSERT INTO cargo
								(nom_car,
								cre_car,
								bas_car)
							VALUES
								('$this->nom_car',
								'$cre_car',
								'A');";

		return $this->run();
	} // fin de create

	function update()
	{
		$act_car = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE cargo
							SET 
								nom_car='$this->nom_car',
								act_car='$act_car',
								est_car='$this->est_car'
							WHERE
								cod_car='$this->cod_car';";

		return $this->run();
	} // fin de update

	function restore()
	{
		$res_car = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE cargo
								SET
									res_car='$res_car',
									bas_car='A'
								WHERE
									cod_car='$this->cod_car';";

		return $this->run();
	} // fin de restore

	function firstDelete()
	{
		$eli_car = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE cargo
								SET
									eli_car='$eli_car',
									bas_car='B'
								WHERE
									cod_car='$this->cod_car';";

		return $this->run();
	} // fin de firstDelete

	function getAll()
	{
		$this->que_bda = "SELECT * FROM cargo WHERE bas_car='A';";

		return $this->run();
	} // fin de getAll

	function getAllActive()
	{
		$this->que_bda = "SELECT * FROM cargo WHERE est_car='A' AND bas_car='A';";

		return $this->run();
	} // fin de getAllActive

	function getByCode()
	{
		$this->que_bda = "SELECT * FROM cargo WHERE cod_car='$this->cod_car';";

		return $this->run();
	} // fin de getByCode

	function getFirstDelete()
	{
		$this->que_bda = "SELECT * FROM cargo WHERE bas_car='B';";

		return $this->run();
	} // fin de getFirstDelete

	function delete()
	{
		$this->que_bda = "DELETE FROM cargo
								WHERE
									cod_car='$this->cod_car';";

		return $this->run();
	} // fin de delete

	function filter()
	{
		$filter1 = ($this->cod_car != "") ? "AND cod_car='$this->cod_car'" : "";
		$filter2 = ($this->nom_car != "") ? "AND nom_car LIKE '%$this->nom_car%'" : "";
		$filter3 = ($this->est_car != "") ? "AND est_car='$this->est_car'" : "";
		$filter4 = ($this->bas_car != "") ? "AND bas_car='$this->bas_car'" : "";

		$this->que_bda = "SELECT * FROM cargo WHERE	1=1 $filter1 $filter2 $filter3 $filter4;";

		return $this->run();
	} // fin de filter

	function check()
	{
		$this->que_bda = "SELECT * FROM cargo;";

		return $this->run();
	} // fin de check

	function getBackup()
	{
		$this->que_bda = "SELECT * FROM cargo_resp;";

		return $this->run();
	} // fin de getBackup

	function filterBackup()
	{
		$filter1 = ($this->cod_car != "") ? "AND cod_car='$this->cod_car'" : "";
		$filter2 = ($this->nom_car != "") ? "AND nom_car LIKE '%$this->nom_car%'" : "";
		$filter3 = ($this->est_car != "") ? "AND est_car='$this->est_car'" : "";
		$filter4 = ($this->bas_car != "") ? "AND bas_car='$this->bas_car'" : "";

		$this->que_bda = "SELECT * FROM cargo_resp WHERE	1=1 $filter1 $filter2 $filter3 $filter4;";

		return $this->run();
	} // fin de filterBackup

}