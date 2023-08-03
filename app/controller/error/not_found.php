<?php
namespace WebSiteToYou\App\Controller\Error;
class NotFound extends \WebSiteToYou\System\Library\Controller {
	public function index(): void {
		//$this->loading->language('error/not_found');

		//$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			//'text' => $this->language->get('text_home'),
			//'href' => $this->url->link('common/home', 'language=' . $this->config->get('config_language'))
		];

		if (isset($this->request->get['route'])) {
			$url_data = $this->request->get;

			$route = $url_data['route'];

			unset($url_data['route']);

			$url = '';

			if ($url_data) {
				$url .= '&' . urldecode(http_build_query($url_data, '', '&'));
			}

			$data['breadcrumbs'][] = [
				//'text' => $this->language->get('heading_title'),
				'href' => $this->url->link($route, $url)
			];
		}

		$data['continue'] = $this->url->link('common/home', 'language=' . $this->config->get('config_language'));

		//$data['column_left'] = $this->loading->controller('common/column_left');
		//$data['column_right'] = $this->loading->controller('common/column_right');
		//$data['content_top'] = $this->loading->controller('common/content_top');
		//$data['content_bottom'] = $this->loading->controller('common/content_bottom');
		$data['footer'] = $this->loading->controller('common/footer');
		$data['header'] = $this->loading->controller('common/header');

		$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

		$this->response->setOutput($this->loading->view('error/not_found', $data));
	}
}