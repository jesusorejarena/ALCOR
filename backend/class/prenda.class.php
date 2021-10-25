<?php

require_once("utilidad.class.php");

class prenda extends utilidad
{

	public $cod_pre;
	public $ser_pre;
	public $nom_pre;
	public $des_pre;
	public $pre_pre;
	public $est_pre;
	public $bas_pre;

	function create()
	{
		$cre_pre = date("y-m-d h:i:s");

		$this->que_bda = "INSERT INTO prenda
								(nom_pre,
								des_pre, 
								pre_pre, 
								cre_pre,
								est_pre)
							VALUES
								('$this->nom_pre', 
								'$this->des_pre', 
								'$this->pre_pre', 
								'$cre_pre',
								'A');";

		return $this->run();
	} // fin de create

	function update()
	{
		$act_pre = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE prenda
								SET
									nom_pre='$this->nom_pre',
									des_pre='$this->des_pre',
									pre_pre='$this->pre_pre',
									act_pre='$act_pre',
									est_pre='$this->est_pre'
								WHERE
									cod_pre='$this->cod_pre';";

		return $this->run();
	} // fin de update

	function updateStatusA()
	{
		$act_pre = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE prenda
							SET 
								act_pre='$act_pre',
								est_pre='A'
							WHERE
								cod_pre='$this->cod_pre';";

		return $this->run();
	} // fin de updateStatusA

	function updateStatusI()
	{
		$act_pre = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE prenda
							SET 
								act_pre='$act_pre',
								est_pre='I'
							WHERE
								cod_pre='$this->cod_pre';";

		return $this->run();
	} // fin de updateStatusI

	function getAll()
	{
		$this->que_bda = "SELECT * FROM prenda ORDER BY cod_pre DESC;";

		return $this->run();
	} // fin de getAll

	function getByCode()
	{
		$this->que_bda = "SELECT * FROM prenda WHERE cod_pre='$this->cod_pre'";

		return $this->run();
	} // fin de getByCode

	function delete()
	{
		$this->que_bda = "DELETE FROM prenda
								WHERE
									cod_pre='$this->cod_pre';";

		return $this->run();
	} // fin de delete

	public function filter()
	{
		$filter1 = ($this->cod_pre != "") ? "AND cod_pre='$this->cod_pre'" : "";
		$filter2 = ($this->nom_pre != "") ? "AND nom_pre LIKE '%$this->nom_pre%'" : "";
		$filter3 = ($this->des_pre != "") ? "AND des_pre LIKE '%$this->des_pre%'" : "";
		$filter4 = ($this->pre_pre != "") ? "AND pre_pre LIKE '%$this->pre_pre%'" : "";
		$filter5 = ($this->est_pre != "") ? "AND est_pre='$this->est_pre'" : "";

		$this->que_bda = "SELECT * FROM prenda WHERE 1=1 $filter1 $filter2 $filter3 $filter4 $filter5 ORDER BY cod_pre DESC";

		return $this->run();
	} // fin de filter

}
