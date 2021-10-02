<?php
class ControllerShapoor extends Controller {
	public function index() {
        $this->load->language('common/shapoor');
        $this->load->model('common/shapoor');

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

        $data['titel']=$this->language->get('titel');

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}