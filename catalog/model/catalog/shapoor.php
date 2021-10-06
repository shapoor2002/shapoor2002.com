<?php
class ModelCatalogShapoor extends Model {
	

	public function getAllRowes() {
		$query = $this->db->query("SELECT * FROM '" . DB_PREFIX . "shapoor' ;");

		return $query->rows;
	}

	
}