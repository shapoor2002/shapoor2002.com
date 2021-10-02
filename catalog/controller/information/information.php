<?php
class ControllerInformationInformation extends Controller {
	public function index() {
		$this->load->language('information/information');

		$this->load->model('catalog/information');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		if (isset($this->request->get['information_id'])) {
			$information_id = (int)$this->request->get['information_id'];
		} else {
			$information_id = 0;
		}

		$information_info = $this->model_catalog_information->getInformation($information_id);

		if ($information_info) {
			$this->document->setTitle($information_info['meta_title']);
			$this->document->setDescription($information_info['meta_description']);
			$this->document->setKeywords($information_info['meta_keyword']);
			
			$data['breadcrumbs'][] = array(
				'text' => $information_info['title'],
				'href' => $this->url->link('information/information', 'information_id=' .  $information_id)
			);

			$data['heading_title'] = $information_info['title'];

			$data['button_continue'] = $this->language->get('button_continue');

			$data['description'] = html_entity_decode($information_info['description'], ENT_QUOTES, 'UTF-8');

			$data['continue'] = $this->url->link('common/home');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			
			$data['text_titel1'] = $this->language->get('text_titel1');
			$data['text_titel2'] = $this->language->get('text_titel2');
			$data['text_titel3'] = $this->language->get('text_titel3');
			$data['text_titel4'] = $this->language->get('text_titel4');
			$data['text_first_name'] = $this->language->get('text_first_name');
			$data['text_last_name'] = $this->language->get('text_last_name');
			$data['first_name'] = $this->language->get('first_name');
			$data['last_name'] = $this->language->get('last_name');
			$data['text_phone'] = $this->language->get('text_phone');
			$data['phone'] = $this->language->get('phone');
			$data['text_email'] = $this->language->get('text_email');
			$data['email'] = $this->language->get('email');
			$data['text_addres'] = $this->language->get('text_addres');
			$data['addres'] = $this->language->get('addres');
			$data['text_ravsh'] = $this->language->get('text_ravsh');
			$data['ravsh'] = $this->language->get('ravsh');
			$data['text_btn'] = $this->language->get('text_btn');
			$data['x100'] = $this->language->get('x100');
			$data['x75'] = $this->language->get('x75');
			$data['JavaScript'] = $this->language->get('JavaScript');
			$data['HTML'] = $this->language->get('HTML');
			$data['CSS3'] = $this->language->get('CSS3');
			$data['UI_UX'] = $this->language->get('UI_UX');
			$data['SQL_Server'] = $this->language->get('SQL_Server');
			$data['Jqouery'] = $this->language->get('Jqouery');
			$data['BootStrap4'] = $this->language->get('BootStrap4');
			$data['Ajax'] = $this->language->get('Ajax');
			$data['khabari'] = $this->language->get('khabari');
			$data['foroshgahi'] = $this->language->get('foroshgahi');
			$data['shabake_agtmaai'] = $this->language->get('shabake_agtmaai');
			$data['shakhsisazi'] = $this->language->get('shakhsisazi');
			$data['url_pdf'] = $this->language->get('url_pdf');
			$data['url_img'] = $this->language->get('url_img');
			$data['url_inista'] = $this->language->get('url_inista');

			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');
			$data['abuot_shapoor'] = $this->load->controller('common/abuot_shapoor');
			$this->response->setOutput($this->load->view('information/information', $data));
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('information/information', 'information_id=' . $information_id)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$data['heading_title'] = $this->language->get('text_error');
echo $data['text_titel1'];
			$data['text_error'] = $this->language->get('text_error');
			

			$data['button_continue'] = $this->language->get('button_continue');

			$data['continue'] = $this->url->link('common/home');

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}

	public function agree() {
		$this->load->model('catalog/information');

		if (isset($this->request->get['information_id'])) {
			$information_id = (int)$this->request->get['information_id'];
		} else {
			$information_id = 0;
		}

		$output = '';

		$information_info = $this->model_catalog_information->getInformation($information_id);

		if ($information_info) {
			$output .= html_entity_decode($information_info['description'], ENT_QUOTES, 'UTF-8') . "\n";
		}

		$this->response->setOutput($output);
	}
}