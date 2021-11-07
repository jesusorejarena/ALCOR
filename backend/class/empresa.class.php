<?php

require_once("utilidad.class.php");

class empresa extends utilidad
{
	public $nom_emp;
	public $tel_emp;
	public $dir_emp;
	public $cor_emp;
	public $rif_emp;
	public $hou_emp;
	public $hod_emp;
	public $ban_tit_emp;
	public $ban_par_emp;
	public $tit_1_emp;
	public $par_1_emp;
	public $tit_2_emp;
	public $par_2_emp;
	public $tit_3_emp;
	public $par_3_emp;
	public $mis_emp;
	public $vis_emp;
	public $tes_tit_1_emp;
	public $tes_1_emp;
	public $tes_tit_2_emp;
	public $tes_2_emp;
	public $tes_tit_3_emp;
	public $tes_3_emp;
	public $his_emp;
	public $act_emp;

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
								hod_emp,
								ban_tit_emp,
								ban_par_emp,
								tit_1_emp,
								par_1_emp,
								tit_2_emp,
								par_2_emp,
								tit_3_emp,
								par_3_emp,
								mis_emp,
								vis_emp,
								tes_tit_1_emp,
								tes_1_emp,
								tes_tit_2_emp,
								tes_2_emp,
								tes_tit_3_emp,
								tes_3_emp,
								his_emp)
							VALUES
								('1',
								'$this->nom_emp',
								'$this->tel_emp',
								'$this->dir_emp',
								'$this->cor_emp',
								'$this->rif_emp',
								'$this->hou_emp',
								'$this->hod_emp',
								'$this->ban_tit_emp',
								'$this->ban_par_emp',
								'$this->tit_1_emp',
								'$this->par_1_emp',
								'$this->tit_2_emp',
								'$this->par_2_emp',
								'$this->tit_3_emp',
								'$this->par_3_emp',
								'$this->mis_emp',
								'$this->vis_emp',
								'$this->tes_tit_1_emp',
								'$this->tes_1_emp',
								'$this->tes_tit_2_emp',
								'$this->tes_2_emp',
								'$this->tes_tit_3_emp',
								'$this->tes_3_emp',
								'$this->his_emp');";

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
									ban_tit_emp='$this->ban_tit_emp',
									ban_par_emp='$this->ban_par_emp',
									tit_1_emp='$this->tit_1_emp',
									par_1_emp='$this->par_1_emp',
									tit_2_emp='$this->tit_2_emp',
									par_2_emp='$this->par_2_emp',
									tit_3_emp='$this->tit_3_emp',
									par_3_emp='$this->par_3_emp',
									mis_emp='$this->mis_emp',
									vis_emp='$this->vis_emp',
									tes_tit_1_emp='$this->tes_tit_1_emp',
									tes_1_emp='$this->tes_1_emp',
									tes_tit_2_emp='$this->tes_tit_2_emp',
									tes_2_emp='$this->tes_2_emp',
									tes_tit_3_emp='$this->tes_tit_3_emp',
									tes_3_emp='$this->tes_3_emp',
									his_emp='$this->his_emp',
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
