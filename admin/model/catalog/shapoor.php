<?php
class ModelCatalogShapoor extends Model {
	public function addItem($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "shapoor SET titel = '" . $this->db->escape($data['titel']) . "',  id= '" . (int)$data['id']."' ");

		$review_id = $this->db->getLastId();

		$this->cache->delete('product');

		return $review_id;
	}

	public function editItem($review_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "shapoor SET titel = '" . $this->db->escape($data['titel']) . "',  id= '" . (int)$data['id']."'");

		$this->cache->delete('product');
	}

	public function deleteItem($review_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "shapoor WHERE review_id = '" . (int)$review_id . "'");

		$this->cache->delete('product');
	}

	public function getItem($review_id) {
		$query = $this->db->query("SELECT DISTINCT *, (SELECT pd.name FROM " . DB_PREFIX . "shapoor WEREN id='".(int)$review_id ."'");
 
		return $query->row;
	}
	public function getItems() {
		$query = $this->db->query("SELECT * FROM `os_shapoor`");
		$this->require->get($query);
		
		return $query->fetch_assoc();
	}

	
}