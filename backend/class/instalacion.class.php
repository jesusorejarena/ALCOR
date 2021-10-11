<?php

require_once("utilidad.class.php");

class instalacion extends utilidad
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
	public $fky_preseg1;
	public $re1_usu;
	public $fky_preseg2;
	public $cla_usu;
	public $dir_usu;


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
								'A'),
								('Cliente',
								'$cre_car',
								'A');";

		return $this->run();
	} // fin de positionAdmin

	function employeeAdmin()
	{
		$cre_usu = date("y-m-d h:i:s");
		$clave = sha1($this->cla_usu);
		$respuesta1 = sha1(strtoupper($this->re1_usu));
		$respuesta2 = sha1(strtoupper($this->re2_usu));

		$this->que_bda = "INSERT INTO usuario
								(nom_usu, 
								ape_usu, 
								gen_usu, 
								nac_usu,
								tip_usu, 
								ced_usu, 
								tel_usu, 
								cor_usu, 
								cla_usu, 
								dir_usu, 
								cod_car,
								fky_preseg1,
								re1_usu,
								fky_preseg2,
								re2_usu,
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
								'$clave',
								'$this->dir_usu',
								'1',
								'$this->fky_preseg1',
								'$respuesta1',
								'$this->fky_preseg2',
								'$respuesta2',
								'$cre_usu',
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
