<?php

require_once("utilidad.class.php");

class instalacion extends utilidad
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
	public $fky_preseg1;
	public $re1_ado;
	public $fky_preseg2;
	public $cla_ado;
	public $dir_ado;


	function positionAdmin()
	{
		$cre_car = date("y-m-d h:i:s");

		$this->que_bda = "INSERT INTO cargo
								(nom_car,
								cre_car,
								bas_car)
							VALUES
								('Administrador',
								'$cre_car',
								'A');";

		return $this->run();
	} // fin de positionAdmin

	function employeeAdmin()
	{
		$cre_ado = date("y-m-d h:i:s");
		$clave = sha1($this->cla_ado);
		$respuesta1 = sha1(strtoupper($this->re1_ado));
		$respuesta2 = sha1(strtoupper($this->re2_ado));

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
								fky_preseg1,
								re1_ado,
								fky_preseg2,
								re2_ado,
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
								'$clave',
								'$this->dir_ado',
								'1',
								'$this->fky_preseg1',
								'$respuesta1',
								'$this->fky_preseg2',
								'$respuesta2',
								'$cre_ado',
								'A',
								'A');";

		return $this->run();
	} // fin de employeeAdmin

	function check()
	{
		$this->que_bda = "SELECT * FROM cargo;";

		return $this->run();
	} // fin de check
}