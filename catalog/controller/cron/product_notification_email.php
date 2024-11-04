<?php
namespace Opencart\Catalog\Controller\Cron;

// Load OpenCart Framework
// define('VERSION', '4.0.0.0'); // Specify the OpenCart version

// // Paths to OpenCart's system and configuration files
// require_once('./config.php'); // Replace with actual path to your OpenCart config file
// require_once(DIR_SYSTEM . 'startup.php'); // Load OpenCart startup

// // Initialize the OpenCart registry and other components
// $registry = new \Opencart\System\Engine\Registry();
// $config = new \Opencart\System\Library\Config();
// $registry->set('config', $config);

// $db = new \Opencart\System\Library\DB(DB_DRIVER, DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
// $registry->set('db', $db);

// $mail = new \Opencart\System\Library\Mail();
// $registry->set('mail', $mail);

class ProductNotificationEmail extends \Opencart\System\Engine\Controller {

    // public function __construct($registry) {
    //     parent::__construct($registry);

    //     // Load required models
    //     $this->load->model('catalog/product');
    //     $this->load->model('catalog/notify');
    // }
    
    public function index() {
        
        print("molp");
        // Load required models
        $this->load->model('catalog/product');
        $this->load->model('catalog/notify');
        $email="nikos@gmail.com";
        $product_info=["gfsd"];

        // Fetch pending notifications
        $notifications = $this->model_catalog_notify->getPendingNotifications();

        foreach ($notifications as $notification) {
            $product_id = $notification['product_id'];
            $email = $notification['email'];

            print_r($notification);
            // Check product stock
            $product_info = $this->model_catalog_product->getProduct($product_id);

            if ($product_info && $product_info['quantity'] > 0) {
                // Send email notification
                $this->sendEmailNotification($email, $product_info);

                // Mark notification as sent or remove it
                $this->model_catalog_notify->removeNotification($notification['id']);
            }
        }
    }

    private function sendEmailNotification(string $email, array $product_info): void {
        
        if ($this->config->get('config_mail_engine')) {
            $mail_option = [
                'parameter'     => $this->config->get('config_mail_parameter'),
                'smtp_hostname' => $this->config->get('config_mail_smtp_hostname'),
                'smtp_username' => $this->config->get('config_mail_smtp_username'),
                'smtp_password' => html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8'),
                'smtp_port'     => $this->config->get('config_mail_smtp_port'),
                'smtp_timeout'  => $this->config->get('config_mail_smtp_timeout')
            ];
            print_r($mail_option);
        
        
        $subject = 'Product Back in Stock Notification';
        // $message = "Hello,\n\nThe product '{$product_info['name']}' is back in stock! You can purchase it here: {$product_info['url']}\n\nBest regards,\nYour Store Team";
        $message = "testing email.";
        print("inside th function");
        // Set up mail
        $mail = new \Opencart\System\Library\Mail($this->config->get('config_mail_engine'), $mail_option);
        $mail->setTo($email);
        $mail->setFrom('john.doe@example.org');
        $mail->setSender('fds@fsd.com');
        $mail->setSubject($subject);
        $mail->setText($message);
        $mail->send();
        }
    }
}

// Run the script
// $notify_cron = new Product_notification_email();
// $notify_cron->index();