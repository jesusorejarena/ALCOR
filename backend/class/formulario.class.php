<?php

require_once("utilidad.class.php");

class formulario extends utilidad
{

	public $cod_for;
	public $nom_for;
	public $ape_for;
	public $tel_for;
	public $cor_for;
	public $asu_for;


	function create()
	{
		$cre_for = date("y-m-d h:i:s");

		$this->que_bda = "INSERT INTO formulario 
								(nom_for,
								ape_for,
								tel_for,
								cor_for,
								asu_for,
								cre_for)
							VALUES
								('$this->nom_for',
								'$this->ape_for',
								'$this->tel_for',
								'$this->cor_for',
								'$this->asu_for',
								'$cre_for');";

		return $this->run();
	} // fin de create

	function getAll()
	{
		$this->que_bda = "SELECT * FROM formulario ORDER BY cod_for DESC;";

		return $this->run();
	} // fin de getAll

	function delete()
	{
		$this->que_bda = "DELETE FROM formulario WHERE cod_for='$this->cod_for';";

		return $this->run();
	} // fin de delete

	public function filter()
	{

		$filter1 = ($this->cod_for != "") ? "AND cod_for='$this->cod_for'" : "";
		$filter2 = ($this->nom_for != "") ? "AND nom_for LIKE '%$this->nom_for%'" : "";
		$filter3 = ($this->ape_for != "") ? "AND ape_for LIKE '%$this->ape_for%'" : "";
		$filter4 = ($this->tel_for != "") ? "AND tel_for LIKE '%$this->tel_for%'" : "";
		$filter5 = ($this->cor_for != "") ? "AND cor_for LIKE '%$this->cor_for%'" : "";
		$filter6 = ($this->asu_for != "") ? "AND asu_for LIKE '%$this->asu_for%'" : "";

		$this->que_bda = "SELECT * FROM formulario WHERE 1=1 $filter1 $filter2 $filter3 $filter4 $filter4 $filter5 $filter6 ORDER BY cod_for DESC;";

		return $this->run();
	} // fin de filter

	function getBackup()
	{
		$this->que_bda = "SELECT * FROM formulario_resp ORDER BY cod_for DESC;";

		return $this->run();
	} // fin de getBackup

	function filterBackup()
	{

		$filter1 = ($this->cod_for != "") ? "AND cod_for='$this->cod_for'" : "";
		$filter2 = ($this->nom_for != "") ? "AND nom_for LIKE '%$this->nom_for%'" : "";
		$filter3 = ($this->ape_for != "") ? "AND ape_for LIKE '%$this->ape_for%'" : "";
		$filter4 = ($this->tel_for != "") ? "AND tel_for LIKE '%$this->tel_for%'" : "";
		$filter5 = ($this->cor_for != "") ? "AND cor_for LIKE '%$this->cor_for%'" : "";
		$filter6 = ($this->asu_for != "") ? "AND asu_for LIKE '%$this->asu_for%'" : "";

		$this->que_bda = "SELECT * FROM formulario_resp WHERE 1=1 $filter1 $filter2 $filter3 $filter4 $filter4 $filter5 $filter6 ORDER BY cod_for DESC;";

		return $this->run();
	} // fin de filterBackup

}
