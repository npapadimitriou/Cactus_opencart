<?php
namespace Opencart\Catalog\Model\Catalog;
/**
 * Class Notify
 *
 * @package Opencart\Catalog\Model\Catalog
 */
class Notify extends \Opencart\System\Engine\Model {
	/**
	 * Add Notify
	 *
	 * @param string $email
	 * @param int $product_id
	 *
	 * @return void
	 */
	public function addNotification(string $email, int $product_id): void {
		// $this->db->query("DELETE FROM `" . DB_PREFIX . "customer_wishlist` WHERE `customer_id` = '" . (int)$customer_id . "' AND `store_id` = '" . (int)$this->config->get('config_store_id') . "' AND `product_id` = '" . (int)$product_id . "'");
        // print("inside addNotification where email is $email and product id  is $product_id ");
		$this->db->query("INSERT INTO `" . DB_PREFIX . "notification_email_requests` SET `product_id` = '" . (int)$product_id . "', `email` = '" . $email . "', `created_at` = NOW()");
	}

    public function getPendingNotifications(): array {
        $query = $this->db->query("SELECT n.* 
                                    FROM `" . DB_PREFIX . "notification_email_requests` AS n
                                    LEFT JOIN `" . DB_PREFIX . "product` AS p 
                                    ON n.product_id = p.product_id
                                    WHERE n.notified = 0 AND p.quantity >= 1");
    
        return $query->rows;
    }
    public function removeNotification(int $notification_id): void {
        $this->db->query("UPDATE `" . DB_PREFIX . "notification_email_requests` 
        SET `notified` = 1 
        WHERE `id` = " . (int)$notification_id);    }

}