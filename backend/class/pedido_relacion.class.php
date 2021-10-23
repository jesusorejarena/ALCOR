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

	/* 	function update()
	{
		$this->que_bda = "UPDATE pedido_relacion
								SET
									cod_ped='$this->cod_ped',
									cod_pre='$this->cod_pre',
									can_ped_rel='$this->can_ped_rel'
								WHERE
									cod_ped_rel='$this->cod_ped_rel';";

		return $this->run();
	} // fin de update

	function getAll()
	{
		$this->que_bda = "SELECT * FROM pedido_relacion WHERE bas_ped='A'";

		return $this->run();
	} // fin de getAll

	function getByCode()
	{
		$this->que_bda = "SELECT * FROM pedido_relacion WHERE cod_ped_rel='$this->cod_ped_rel'";

		return $this->run();
	} // fin de getByCode

	function delete()
	{
		$this->que_bda = "DELETE FROM pedido_relacion
								WHERE
									cod_ped_rel='$this->cod_ped_rel';";

		return $this->run();
	} // fin de delete

	public function filter()
	{
		$filter1 = ($this->cod_ped_rel != "") ? "AND cod_ped_rel='$this->cod_ped_rel'" : "";
		$filter2 = ($this->pre_ped != "") ? "AND pre_ped LIKE '%$this->pre_ped%'" : "";
		$filter3 = ($this->est_ped != "") ? "AND est_ped='$this->est_ped'" : "";

		$this->que_bda = "SELECT * FROM pedido_relacion WHERE 1=1 $filter1 $filter2 $filter3";

		return $this->run();
	} // fin de filter
 */
}
