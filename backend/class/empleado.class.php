<?php

require_once("utilidad.class.php");

class empleado extends utilidad
{

	public $cod_ado;
	public $nom_ado;
	public $ape_ado;
	public $gen_ado;
	public $nac_ado;
	public $tip_ado;
	public $ced_ado;
	public $tel_ado;
	public $cor_ado;
	public $cla_ado;
	public $dir_ado;
	public $cod_car;
	public $est_ado;
	public $bas_ado;


	function create()
	{
		$cre_ado = date("y-m-d h:i:s");

		$this->que_bda = "INSERT INTO empleado
								(nom_ado, 
								ape_ado, 
								gen_ado, 
								nac_ado,
								tip_ado, 
								ced_ado, 
								tel_ado, 
								cor_ado, 
								cla_ado, 
								dir_ado, 
								cod_car, 
								cre_ado,
								est_ado,
								bas_ado)
							VALUES
								('$this->nom_ado', 
								'$this->ape_ado', 
								'$this->gen_ado', 
								'$this->nac_ado',  
								'$this->tip_ado',  
								'$this->ced_ado', 
								'$this->tel_ado', 
								'$this->cor_ado',  
								'$this->cla_ado', 
								'$this->dir_ado', 
								'$this->cod_car', 
								'$cre_ado',
								'A',
								'A');";

		return $this->run();
	} // fin de create

	function update()
	{
		$act_ado = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE empleado
								SET
									nom_ado='$this->nom_ado',
									ape_ado='$this->ape_ado',
									gen_ado='$this->gen_ado',
									nac_ado='$this->nac_ado',
									tip_ado='$this->tip_ado',
									ced_ado='$this->ced_ado',
									tel_ado='$this->tel_ado',
									cor_ado='$this->cor_ado',
									cla_ado='$this->cla_ado',
									dir_ado='$this->dir_ado',
									cod_car='$this->cod_car',
									act_ado='$act_ado',
									est_ado='$this->est_ado'
								WHERE
									cod_ado='$this->cod_ado';";

		return $this->run();
	} // fin de update

	function updateData()
	{
		$act_ado = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE empleado
								SET 
									tel_ado='$this->tel_ado',
									cor_ado='$this->cor_ado',
									dir_ado='$this->dir_ado',
									act_ado='$act_ado'
								WHERE
									cod_ado='$this->cod_ado';";

		return $this->run();
	} // fin de updateData

	function updatePassword()
	{
		$act_ado = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE empleado
								SET 
									cla_ado='$this->cla_ado',
									act_ado='$act_ado'
								WHERE
									cod_ado='$this->cod_ado';";

		return $this->run();
	} // fin de updatePassword

	function restore()
	{
		$res_ado = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE empleado
								SET
									res_ado='$res_ado',
									bas_ado='A'
								WHERE
									cod_ado='$this->cod_ado';";

		return $this->run();
	} // fin de restore

	function firstDelete()
	{
		$eli_ado = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE empleado
								SET
									eli_ado='$eli_ado',
									bas_ado='B'
								WHERE
									cod_ado='$this->cod_ado';";

		return $this->run();
	} // fin de firstDelete

	function getAll()
	{
		$this->que_bda = "SELECT * FROM empleado WHERE bas_ado='A'";

		return $this->run();
	} // fin de getAll

	function getByCode()
	{
		$this->que_bda = "SELECT * FROM empleado WHERE cod_ado='$this->cod_ado'";

		return $this->run();
	} // fin de getByCode

	function getFirstDelete()
	{
		$this->que_bda = "SELECT * FROM empleado WHERE bas_ado='B'";

		return $this->run();
	} // fin de getFirstDelete

	function getSession($cor_ado, $cla_ado)
	{
		$this->que_bda = "SELECT cod_ado, cor_ado, cla_ado, cod_car, est_ado, bas_ado 
									FROM 
										empleado 
									WHERE 
										cor_ado='$cor_ado' AND 
										cla_ado='$cla_ado' AND 
										est_ado='A' AND 
										bas_ado='A';";

		return $this->run();
	} // fin de getSession

	function delete()
	{

		$this->que_bda = "DELETE FROM empleado
								WHERE
									cod_ado='$this->cod_ado';";

		return $this->run();
	} // fin de delete

	function filter()
	{

		$filter1 = ($this->cod_ado != "") ? "AND cod_ado LIKE '%$this->cod_ado%'" : "";
		$filter2 = ($this->nom_ado != "") ? "AND nom_ado LIKE '%$this->nom_ado%'" : "";
		$filter3 = ($this->ape_ado != "") ? "AND ape_ado LIKE '%$this->ape_ado%'" : "";
		$filter4 = ($this->gen_ado != "") ? "AND gen_ado='$this->gen_ado'" : "";
		$filter5 = ($this->tip_ado != "") ? "AND tip_ado='$this->tip_ado'" : "";
		$filter6 = ($this->ced_ado != "") ? "AND ced_ado LIKE '%$this->ced_ado%'" : "";
		$filter7 = ($this->tel_ado != "") ? "AND tel_ado LIKE '%$this->tel_ado%'" : "";
		$filter8 = ($this->cor_ado != "") ? "AND cor_ado LIKE '%$this->cor_ado%'" : "";
		$filter9 = ($this->dir_ado != "") ? "AND dir_ado LIKE '%$this->dir_ado%'" : "";
		$filter10 = ($this->cod_car != "") ? "AND cod_car='$this->cod_car'" : "";
		$filter11 = ($this->est_ado != "") ? "AND est_ado='$this->est_ado'" : "";
		$filter12 = ($this->bas_ado != "") ? "AND bas_ado='$this->bas_ado'" : "";

		$this->que_bda = "SELECT * FROM empleado WHERE 1=1 $filter1 $filter2 $filter3 $filter4 $filter5 $filter6 $filter7 $filter8 $filter9 $filter10 $filter11 $filter12;";

		return $this->run();
	} // fin de filter

	function checkData()
	{
		$this->que_bda = "SELECT * FROM empleado 
											WHERE 
												cor_ado='$this->cor_ado' AND 
												ced_ado='$this->ced_ado' AND 
												tel_ado='$this->tel_ado' AND 
												nac_ado='$this->nac_ado' AND 
												est_ado='A' AND 
												bas_ado='A';";

		return $this->run();
	} // fin de Comprobar Datos

	function getBackup()
	{
		$this->que_bda = "SELECT * FROM empleado_resp;";

		return $this->run();
	} // fin de getBackup

	function filterBackup()
	{

		$filter1 = ($this->cod_ado != "") ? "AND cod_ado LIKE '%$this->cod_ado%'" : "";
		$filter2 = ($this->nom_ado != "") ? "AND nom_ado LIKE '%$this->nom_ado%'" : "";
		$filter3 = ($this->ape_ado != "") ? "AND ape_ado LIKE '%$this->ape_ado%'" : "";
		$filter4 = ($this->gen_ado != "") ? "AND gen_ado='$this->gen_ado'" : "";
		$filter5 = ($this->tip_ado != "") ? "AND tip_ado='$this->tip_ado'" : "";
		$filter6 = ($this->ced_ado != "") ? "AND ced_ado LIKE '%$this->ced_ado%'" : "";
		$filter7 = ($this->tel_ado != "") ? "AND tel_ado LIKE '%$this->tel_ado%'" : "";
		$filter8 = ($this->cor_ado != "") ? "AND cor_ado LIKE '%$this->cor_ado%'" : "";
		$filter9 = ($this->dir_ado != "") ? "AND dir_ado LIKE '%$this->dir_ado%'" : "";
		$filter10 = ($this->cod_car != "") ? "AND cod_car='$this->cod_car'" : "";
		$filter11 = ($this->est_ado != "") ? "AND est_ado='$this->est_ado'" : "";
		$filter12 = ($this->bas_ado != "") ? "AND bas_ado='$this->bas_ado'" : "";

		$this->que_bda = "SELECT * FROM empleado_resp WHERE 1=1 $filter1 $filter2 $filter3 $filter4 $filter5 $filter6 $filter7 $filter8 $filter9 $filter10 $filter11 $filter12;";

		return $this->run();
	} // fin de filterBackup

}