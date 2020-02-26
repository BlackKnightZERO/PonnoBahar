<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Invoice;

class InvoiceController extends Controller
{
    public function generateInvoice()
    {
    	 $customer = Invoice::makeParty([
    	     'name' => 'John Doe',
    	 ]);

    	 $item = Invoice::makeItem('Your service or product title')->pricePerUnit(9.99);

    	 return Invoice::make()->buyer($customer)->addItem($item)->stream();
    }
}
