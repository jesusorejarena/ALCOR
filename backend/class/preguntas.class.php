<?php

require_once("utilidad.class.php");

class preguntas extends utilidad
{

	function getPartOne()
	{
		$this->que_bda = "SELECT * FROM preguntas_seguridad WHERE par_pse='1';";

		return $this->run();
	} // fin de getAll


	function getPartTwo()
	{
		$this->que_bda = "SELECT * FROM preguntas_seguridad WHERE par_pse='2';";

		return $this->run();
	} // fin de getAll


	function getByCode()
	{
		$this->que_bda = "SELECT * FROM preguntas_seguridad WHERE cod_pse='$this->cod_pse';";

		return $this->run();
	} // fin de getByCode

}