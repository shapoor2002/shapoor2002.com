<?php
class ControllerCommonShapoor extends Controller {
	public function index() {
        $this->load->language('common/shapoor');
        $this->load->model('extension/extension');

		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		$data['text_error']=$this->language->get('text_error');

        
		// $this->load->model('catalog/shapoor');
		// $data['categories'] = array();
		// // $category=$this->model_catalog_shapoor->getCategory(0);
		// $categories=$this->model_catalog_shapoor->getCategories();
		// $data['titel']=$categories;
		// // if(isset($categories)){
		// // 	foreach($categories as $value){
		// // 		$data['titel']=$value['0'];
		// // 	}
		// // }
	

		$this->response->setOutput($this->load->view('common/shapoor', $data));
	}
}