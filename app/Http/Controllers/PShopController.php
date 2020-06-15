<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReceiptInfo;
use App\Receipt;

class PShopController extends Controller
{
   public function index() {
     return view('pshop.index')
     ->with('receipts', Receipt::all())
     ->with('receipt_info', ReceiptInfo::find(1));
   }


   public function viewReceipt($id) {
     return view('pshop.receipts.view')
     ->with('receipt_info', ReceiptInfo::find(1))
     ->with('receipt', Receipt::find($id));
   }
}
