<?php
namespace Opencart\Catalog\Controller\Product;
/**
 * Class Thumb
 *
 * @package Opencart\Catalog\Controller\Product
 */
class Thumb extends \Opencart\System\Engine\Controller {
	/**
	 * @param array<string, mixed> $data
	 *
	 * @return string
	 */
	public function index(array $data): string {
		
		$this->load->language('product/thumb');
		$data['cart'] = $this->url->link('common/cart.info', 'language=' . $this->config->get('config_language'));
		
		$data['cart_add'] = $this->url->link('checkout/cart.add', 'language=' . $this->config->get('config_language'));
		$data['wishlist_add'] = $this->url->link('account/wishlist.add', 'language=' . $this->config->get('config_language'));
		$data['compare_add'] = $this->url->link('product/compare.add', 'language=' . $this->config->get('config_language'));
		$data['notify'] = $this->url->link('product/notify', 'language=' . $this->config->get('config_language'));

		$data['review_status'] = (int)$this->config->get('config_review_status');
		
		print("here starts thumb");
		print_r($data);
		return $this->load->view('product/thumb', $data);
	}
}
