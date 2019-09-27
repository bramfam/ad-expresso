<?php
namespace App\Billing ;
interface PaymentGateway { 
	public function charge();
	public function return_account_number();
}