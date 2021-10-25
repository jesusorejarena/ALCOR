<?php

require_once("utilidad.class.php");

class usuario extends utilidad
{

	public $cod_usu;
	public $nom_usu;
	public $ape_usu;
	public $gen_usu;
	public $nac_usu;
	public $tip_usu;
	public $ced_usu;
	public $tel_usu;
	public $cor_usu;
	public $cla_usu;
	public $dir_usu;
	public $cod_car;
	public $fky_preseg1;
	public $re1_usu;
	public $fky_preseg2;
	public $re2_usu;
	public $est_usu;
	public $bas_usu;


	function createEmployee()
	{
		$cre_usu = date("y-m-d h:i:s");

		$this->que_bda = "INSERT INTO usuario
								(nom_usu,
								ape_usu,
								gen_usu,
								nac_usu,
								tip_usu,
								ced_usu,
								tel_usu,
								cor_usu,
								dir_usu,
								cod_car,
								cre_usu,
								est_usu,
								bas_usu)
							VALUES
								('$this->nom_usu',
								'$this->ape_usu',
								'$this->gen_usu',
								'$this->nac_usu',
								'$this->tip_usu',
								'$this->ced_usu',
								'$this->tel_usu',
								'$this->cor_usu',
								'$this->dir_usu',
								'$this->cod_car',
								'$cre_usu',
								'A',
								'A');";

		return $this->run();
	} // fin de create employee

	function createClient()
	{
		$cre_usu = date("y-m-d h:i:s");
		$clave = sha1($this->cla_usu);

		$this->que_bda = "INSERT INTO usuario
								(nom_usu,
								ape_usu,
								nac_usu,
								ced_usu,
								tel_usu,
								cor_usu,
								cla_usu,
								cod_car,
								cre_usu,
								est_usu,
								bas_usu)
							VALUES
								('$this->nom_usu',
								'$this->ape_usu',
								'$this->nac_usu',
								'$this->ced_usu',
								'$this->tel_usu',
								'$this->cor_usu',
								'$clave',
								'2',
								'$cre_usu',
								'A',
								'A');";

		return $this->run();
	} // fin de create client

	function finishRegistration()
	{
		$clave = sha1($this->cla_usu);
		$respuesta1 = sha1(strtoupper($this->re1_usu));
		$respuesta2 = sha1(strtoupper($this->re2_usu));

		$this->que_bda = "UPDATE usuario
								SET
									cla_usu='$clave',
									fky_preseg1='$this->fky_preseg1',
									re1_usu='$respuesta1',
									fky_preseg2='$this->fky_preseg2',
									re2_usu='$respuesta2'
								WHERE
									cor_usu='$this->cor_usu';";

		return $this->run();
	} // fin de finishRegistration

	function update()
	{
		$act_usu = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE usuario
								SET
									nom_usu='$this->nom_usu',
									ape_usu='$this->ape_usu',
									gen_usu='$this->gen_usu',
									nac_usu='$this->nac_usu',
									tip_usu='$this->tip_usu',
									ced_usu='$this->ced_usu',
									tel_usu='$this->tel_usu',
									cor_usu='$this->cor_usu',
									cla_usu='$this->cla_usu',
									dir_usu='$this->dir_usu',
									cod_car='$this->cod_car',
									act_usu='$act_usu',
									est_usu='$this->est_usu'
								WHERE
									cod_usu='$this->cod_usu';";

		return $this->run();
	} // fin de update

	function updatePassword()
	{
		$act_usu = date("y-m-d h:i:s");
		$clave = sha1($this->cla_usu);

		$this->que_bda = "UPDATE usuario
								SET 
									cla_usu='$clave',
									act_usu='$act_usu'
								WHERE
									cor_usu='$this->cor_usu';";

		return $this->run();
	} // fin de updatePassword

	function updateStatusA()
	{
		$act_usu = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE usuario
							SET 
								act_usu='$act_usu',
								est_usu='A'
							WHERE
								cod_usu='$this->cod_usu';";

		return $this->run();
	} // fin de updateStatusA

	function updateStatusI()
	{
		$act_usu = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE usuario
							SET 
								act_usu='$act_usu',
								est_usu='I'
							WHERE
								cod_usu='$this->cod_usu';";

		return $this->run();
	} // fin de updateStatusI

	function updateData()
	{
		$act_usu = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE usuario
								SET 
									tel_usu='$this->tel_usu',
									cor_usu='$this->cor_usu',
									dir_usu='$this->dir_usu',
									act_usu='$act_usu'
								WHERE
									cod_usu='$this->cod_usu';";

		return $this->run();
	} // fin de updateData

	function changePassword()
	{
		$act_usu = date("y-m-d h:i:s");
		$clave = sha1($this->cla_usu);

		$this->que_bda = "UPDATE usuario
								SET 
									cla_usu='$clave',
									act_usu='$act_usu'
								WHERE
									cod_usu='$this->cod_usu';";

		return $this->run();
	} // fin de changePassword

	function updateQuestions()
	{
		$respuesta1 = sha1(strtoupper($this->re1_usu));
		$respuesta2 = sha1(strtoupper($this->re2_usu));

		$this->que_bda = "UPDATE usuario 
											SET
												fky_preseg1='$this->fky_preseg1',
												re1_usu='$respuesta1',
												fky_preseg2='$this->fky_preseg2',
												re2_usu='$respuesta2'
											WHERE
												cod_usu='$this->cod_usu';";

		return $this->run();
	} // fin de updateQuestions

	function verifyNewUser()
	{
		$this->que_bda = "SELECT cor_usu 
									FROM 
										usuario 
									WHERE 
										cor_usu='$this->cor_usu' AND 
										cla_usu IS NULL AND 
										fky_preseg1 IS NULL AND 
										re1_usu IS NULL AND 
										fky_preseg2 IS NULL AND 
										re2_usu IS NULL;";

		return $this->run();
	} // fin de verifyNewUser

	function verifyUser()
	{
		$respuesta1 = sha1(strtoupper($this->re1_usu));
		$respuesta2 = sha1(strtoupper($this->re2_usu));

		$this->que_bda = "SELECT cor_usu,fky_preseg1,re1_usu,fky_preseg2,re2_usu
									FROM 
										usuario 
									WHERE 
										cor_usu='$this->cor_usu' AND 
										fky_preseg1='$this->fky_preseg1' AND 
										re1_usu='$respuesta1' AND 
										fky_preseg2='$this->fky_preseg2' AND 
										re2_usu='$respuesta2';";

		return $this->run();
	} // fin de verifyUser

	function restore()
	{
		$res_usu = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE usuario
								SET
									res_usu='$res_usu',
									bas_usu='A'
								WHERE
									cod_usu='$this->cod_usu';";

		return $this->run();
	} // fin de restore

	function firstDelete()
	{
		$eli_usu = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE usuario
								SET
									eli_usu='$eli_usu',
									bas_usu='B'
								WHERE
									cod_usu='$this->cod_usu';";

		return $this->run();
	} // fin de firstDelete

	function getAll()
	{
		$this->que_bda = "SELECT * FROM usuario WHERE bas_usu='A' AND cod_car != '2' ORDER BY cod_usu DESC;";

		return $this->run();
	} // fin de getAll

	function getByCode()
	{
		$this->que_bda = "SELECT * FROM usuario WHERE cod_usu='$this->cod_usu;'";

		return $this->run();
	} // fin de getByCode

	function getFirstDelete()
	{
		$this->que_bda = "SELECT * FROM usuario WHERE bas_usu='B' ORDER BY cod_usu DESC;";

		return $this->run();
	} // fin de getFirstDelete

	function getSession($cor_usu,$cla_usu)
	{
		$clave = sha1($cla_usu);

		$this->que_bda = "SELECT cod_usu,cor_usu,cla_usu,cod_car,est_usu,bas_usu 
									FROM 
										usuario 
									WHERE 
										cor_usu='$cor_usu' AND 
										cla_usu='$clave' AND 
										est_usu='A' AND 
										bas_usu='A';";

		return $this->run();
	} // fin de getSession

	function delete()
	{

		$this->que_bda = "DELETE FROM usuario
								WHERE
									cod_usu='$this->cod_usu';";

		return $this->run();
	} // fin de delete

	function filter()
	{

		$filter1 = ($this->cod_usu != "") ? "AND cod_usu LIKE '%$this->cod_usu%'" : "";
		$filter2 = ($this->nom_usu != "") ? "AND nom_usu LIKE '%$this->nom_usu%'" : "";
		$filter3 = ($this->ape_usu != "") ? "AND ape_usu LIKE '%$this->ape_usu%'" : "";
		$filter4 = ($this->gen_usu != "") ? "AND gen_usu='$this->gen_usu'" : "";
		$filter5 = ($this->tip_usu != "") ? "AND tip_usu='$this->tip_usu'" : "";
		$filter6 = ($this->ced_usu != "") ? "AND ced_usu LIKE '%$this->ced_usu%'" : "";
		$filter7 = ($this->tel_usu != "") ? "AND tel_usu LIKE '%$this->tel_usu%'" : "";
		$filter8 = ($this->cor_usu != "") ? "AND cor_usu LIKE '%$this->cor_usu%'" : "";
		$filter9 = ($this->dir_usu != "") ? "AND dir_usu LIKE '%$this->dir_usu%'" : "";
		$filter10 = ($this->cod_car != "") ? "AND cod_car='$this->cod_car'" : "";
		$filter11 = ($this->est_usu != "") ? "AND est_usu='$this->est_usu'" : "";
		$filter12 = ($this->bas_usu != "") ? "AND bas_usu='$this->bas_usu'" : "";

		$this->que_bda = "SELECT * FROM usuario WHERE 1=1 $filter1 $filter2 $filter3 $filter4 $filter5 $filter6 $filter7 $filter8 $filter9 $filter10 $filter11 $filter12 ORDER BY cod_usu DESC;";

		return $this->run();
	} // fin de filter

	function checkData()
	{
		$this->que_bda = "SELECT * FROM usuario 
											WHERE 
												cor_usu='$this->cor_usu' AND 
												ced_usu='$this->ced_usu' AND 
												tel_usu='$this->tel_usu' AND 
												nac_usu='$this->nac_usu' AND 
												est_usu='A' AND 
												bas_usu='A';";

		return $this->run();
	} // fin de Comprobar Datos

	function getBackup()
	{
		$this->que_bda = "SELECT * FROM usuario_resp ORDER BY cod_usu DESC;";

		return $this->run();
	} // fin de getBackup

	function filterBackup()
	{

		$filter1 = ($this->cod_usu != "") ? "AND cod_usu LIKE '%$this->cod_usu%'" : "";
		$filter2 = ($this->nom_usu != "") ? "AND nom_usu LIKE '%$this->nom_usu%'" : "";
		$filter3 = ($this->ape_usu != "") ? "AND ape_usu LIKE '%$this->ape_usu%'" : "";
		$filter4 = ($this->gen_usu != "") ? "AND gen_usu='$this->gen_usu'" : "";
		$filter5 = ($this->tip_usu != "") ? "AND tip_usu='$this->tip_usu'" : "";
		$filter6 = ($this->ced_usu != "") ? "AND ced_usu LIKE '%$this->ced_usu%'" : "";
		$filter7 = ($this->tel_usu != "") ? "AND tel_usu LIKE '%$this->tel_usu%'" : "";
		$filter8 = ($this->cor_usu != "") ? "AND cor_usu LIKE '%$this->cor_usu%'" : "";
		$filter9 = ($this->dir_usu != "") ? "AND dir_usu LIKE '%$this->dir_usu%'" : "";
		$filter10 = ($this->cod_car != "") ? "AND cod_car='$this->cod_car'" : "";
		$filter11 = ($this->est_usu != "") ? "AND est_usu='$this->est_usu'" : "";
		$filter12 = ($this->bas_usu != "") ? "AND bas_usu='$this->bas_usu'" : "";

		$this->que_bda = "SELECT * FROM usuario_resp WHERE 1=1 $filter1 $filter2 $filter3 $filter4 $filter5 $filter6 $filter7 $filter8 $filter9 $filter10 $filter11 $filter12 ORDER BY cod_usu DESC;";

		return $this->run();
	} // fin de filterBackup

}