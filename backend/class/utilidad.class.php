<?php

class utilidad
{

	private $nom_ser;
	private $usu_ser;
	private $cla_ser;
	private $nom_bda;
	private $con_bda;
	public  $que_bda;
	public  $puntero;
	public  $contador;
	public  $resultado;

	public function __construct()
	{
		$this->nom_ser = "localhost";
		$this->usu_ser = "root";
		$this->cla_ser = "";
		$this->nom_bda = "db_sip";
		$this->connect();
		ini_set("date.timezone", "America/Caracas");
	}

	public function connect()
	{
		$this->con_bda = new mysqli($this->nom_ser, $this->usu_ser, $this->cla_ser, $this->nom_bda);
	}

	public function run()
	{
		echo $this->que_bda;
		return $this->con_bda->query($this->que_bda);
	}

	public function assignValue()
	{
		foreach ($_REQUEST as $atributo => $valor) {
			$this->$atributo = $valor;
		}
	}

	public function extractData()
	{
		return $this->puntero->fetch_assoc();
	}

	public function count()
	{
		return $this->contador->num_rows;
	}

	public function message($message)
	{
		require_once("../../frontend/views/tema_controladores.php");

		headerr("Comprobando...");

		if ($this->resultado == true) {
			echo "
					<div class='alert alert-success py-5 my-5'>
						<strong>$message</strong>.
					</div>
				";
		} else {
			echo "
					<div class='alert alert-danger py-5 my-5'>
						<strong>¡Fallo!</strong> $message <br>
					</div>";
		}

		footer();
	}
}