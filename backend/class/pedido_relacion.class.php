<?php

require_once("utilidad.class.php");

class pedido_relacion extends utilidad
{
	public $cod_ped_rel;
	public $cod_ped;
	public $cod_pre;
	public $can_ped_rel;

	function create()
	{
		$this->que_bda = "INSERT INTO pedido_relacion
								(cod_ped,
								cod_pre,
								can_ped_rel)
							VALUES
								('$this->cod_ped',
								'$this->cod_pre',
								'$this->can_ped_rel');";

		return $this->run();
	} // fin de create

	function getByCodeOrder()
	{
		$this->que_bda = "SELECT * FROM pedido_relacion WHERE cod_ped='$this->cod_ped'";

		return $this->run();
	} // fin de getByCodeOrder

}
