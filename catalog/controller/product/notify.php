<?php
namespace Opencart\Catalog\Controller\Product;
/**
 * Class Compare
 *
 * @package Opencart\Catalog\Controller\Product
 */
class Notify extends \Opencart\System\Engine\Controller {
	/**
	 * @return void
*/
    public function index(): void {
        // print("inside notify index");

        $json = [];
         // Check if the required POST parameters (product_id and email) are set
		 if (isset($this->request->post['product_id']) && isset($this->request->post['email'])) {
            $product_id = (int)$this->request->post['product_id'];
            $email = $this->request->post['email'];

            // Validate email format
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Load the Notify model
                $this->load->model('catalog/notify');

                // Call the addNotification method in the Notify model
                $this->model_catalog_notify->addNotification($email, $product_id);

                // Prepare a success message for JSON response
                $json['success'] = 'You will be notified when this product is back in stock.';
            } else {
                // Invalid email format
                $json['error'] = 'Invalid email address.';
            }
        } else {
            // Missing required data
            $json['error'] = 'Product ID or email is missing.';
        }

        // Set response headers to JSON
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    




}
