<?php

require_once("utilidad.class.php");

class backup extends utilidad
{
	function dataBase($tables = '*')
	{
		//conexion a la base
		$this->connect();

		//tomar las tablas
		if ($tables == '*') {
			$tables = array();
			$this->que_bda = "SHOW TABLES";
			$query = $this->run();

			while ($row = $query->fetch_row()) {
				$tables[] = $row[0];
			}
		} else {
			$tables = is_array($tables) ? $tables : explode(',', $tables);
		}

		//estructura de las tablas
		$outsql = '';
		foreach ($tables as $table) {

			$this->que_bda = "SHOW CREATE TABLE $table";
			$query = $this->run();
			$row = $query->fetch_row();

			$outsql .= "\n\n" . $row[1] . ";\n\n";

			$this->que_bda = "SELECT * FROM $table";
			$query = $this->run();

			$columnCount = $query->field_count;

			for ($i = 0; $i < $columnCount; $i++) {
				while ($row = $query->fetch_row()) {
					$outsql .= "INSERT INTO $table VALUES(";
					for ($j = 0; $j < $columnCount; $j++) {
						$row[$j] = $row[$j];

						if (isset($row[$j])) {
							$outsql .= '"' . $row[$j] . '"';
						} else {
							$outsql .= '""';
						}
						if ($j < ($columnCount - 1)) {
							$outsql .= ',';
						}
					}
					$outsql .= ");\n";
				}
			}

			$outsql .= "\n";
		}

		//Guardando el archivo
		$backup_file_name = 'SIP_backup.sql';
		$fileHandler = fopen($backup_file_name, 'w+');
		fwrite($fileHandler, $outsql);
		fclose($fileHandler);

		//Descargando el archivo
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename=' . basename($backup_file_name));
		header('Content-Transfer-Encoding: binary');
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($backup_file_name));
		ob_clean();
		flush();
		readfile($backup_file_name);
		exec('rm ' . $backup_file_name);
	}
}