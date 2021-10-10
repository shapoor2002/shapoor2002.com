<?php
class ControllerCatalogShapoor extends Controller {
	public function index(){
		$data=array();
		$this->load->language('catalog/shapoor');
		$this->load->model('catalog/shapoor');
		$data['titel']=$this->language->get('titel');
		$data['text_list']=$this->language->get('text_list');

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		

		
		$data['items']=$this->model_catalog_shapoor->getItems();
		// var_dump($data['items']);
		$this->response->setOutput($this->load->view('catalog/shapoor', $data));
	}
}