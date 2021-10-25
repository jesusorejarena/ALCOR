<?php

require_once("utilidad.class.php");

class pedido extends utilidad
{

	public $cod_ped;
	public $pre_ped;
	public $cod_usu;
	public $cre_ped;
	public $act_ped;
	public $eli_ped;
	public $res_ped;
	public $est_ped;


	function create()
	{
		$cre_ped = date("y-m-d h:i:s");

		$this->que_bda = "INSERT INTO pedido
								(pre_ped,
								cod_usu,
								cre_ped,
								est_ped)
							VALUES
								(0,
								'$this->cod_usu',
								'$cre_ped',
								'P');";

		return $this->run();
	} // fin de create

	function updateStatusV()
	{

		$this->que_bda = "UPDATE pedido
							SET 
								pre_ped='$this->pre_ped',
								est_ped='V'
							WHERE
								cod_ped='$this->cod_ped';";

		return $this->run();
	} // fin de updateStatusV

	function updateStatusT()
	{
		$act_ped = date("y-m-d h:i:s");

		$this->que_bda = "UPDATE pedido
							SET 
								act_ped='$act_ped',
								est_ped='T'
							WHERE
								cod_ped='$this->cod_ped';";

		return $this->run();
	} // fin de updateStatusT

	function getAllOrderT()
	{
		$this->que_bda = "SELECT * FROM pedido WHERE est_ped='T' ORDER BY cod_ped DESC;";

		return $this->run();
	} // fin de getAll

	function getOrderByCode()
	{
		$this->que_bda = "SELECT * FROM pedido WHERE cod_ped='$this->cod_ped';";

		return $this->run();
	} // fin de getOrderByCode

	function getOrderByCodeUser()
	{
		$this->que_bda = "SELECT * FROM pedido WHERE cod_usu='$this->cod_usu' AND cod_ped='$this->cod_ped';";

		return $this->run();
	} // fin de getOrderByCodeUser

	function getFirstOrderV()
	{
		$this->que_bda = "SELECT * FROM pedido WHERE est_ped='V' ORDER BY cod_ped ASC;";

		return $this->run();
	} // fin de getFirstOrderP

	function getLastOrderP()
	{
		$this->que_bda = "SELECT * FROM pedido WHERE cod_usu='$this->cod_usu' AND est_ped='P' ORDER BY cre_ped DESC LIMIT 1;";

		return $this->run();
	} // fin de getLastOrderP

	function getLastOrderPUnlimited()
	{
		$this->que_bda = "SELECT * FROM pedido WHERE cod_usu='$this->cod_usu' AND est_ped='P' ORDER BY cre_ped ASC;";

		return $this->run();
	} // fin de getLastOrderPUnlimited

	function getLastOrderVUnlimited()
	{
		$this->que_bda = "SELECT * FROM pedido WHERE cod_usu='$this->cod_usu' AND est_ped='V' ORDER BY cre_ped DESC;";

		return $this->run();
	} // fin de getLastOrderVUnlimited

	function getLastOrderTLimited()
	{
		$this->que_bda = "SELECT * FROM pedido WHERE cod_usu='$this->cod_usu' AND est_ped='T' ORDER BY act_ped DESC LIMIT 3;";

		return $this->run();
	} // fin de getLastOrderTLimited

	function delete()
	{
		$this->que_bda = "DELETE FROM pedido WHERE cod_ped='$this->cod_ped';";

		return $this->run();
	} // fin de delete

	public function filter()
	{
		$filter1 = ($this->cod_ped != "") ? "AND cod_ped='$this->cod_ped'" : "";
		$filter2 = ($this->cod_usu != "") ? "AND cod_usu='$this->cod_usu'" : "";
		$filter3 = ($this->pre_ped != "") ? "AND pre_ped LIKE '%$this->pre_ped%'" : "";
		$filter4 = ($this->est_ped != "") ? "AND est_ped='$this->est_ped'" : "";

		$this->que_bda = "SELECT * FROM pedido WHERE 1=1 $filter1 $filter2 $filter3 $filter4;";

		return $this->run();
	} // fin de filter

}
