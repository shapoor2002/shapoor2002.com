<?php
class ControllerCatalogShapoor extends Controller {
	public function index(){
		$data=array();
		$this->load->language('catalog/shapoor');
		$this->load->model('catalog/shapoor');
		//text
		
		$data['titel2']=$this->language->get('titel2');
		$data['text_list']=$this->language->get('text_list');
		$data['text_error']=$this->language->get('text_error');
		$data['input_name']=$this->language->get('input_name');
		$data['submit']=$this->language->get('submit');
		//url
		$data['form_add']=$this->url->link('controller/shapoor/add','token=' . $this->session->data['token'],true);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		

		
		$data['items']=$this->model_catalog_shapoor->getItems();
		// var_dump($data['items']);
		

		$this->response->setOutput($this->load->view('catalog/shapoor', $data));
	}
	public function add($data){
		$this->load->model('catalog/shapoor');

		$res=$this->model_catalog_shapoor->add($data);
		$data['res']=$res;
		return $data['res'];
			
		}
}