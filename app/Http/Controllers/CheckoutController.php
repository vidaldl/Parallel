<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop\ShopItem;
use Carbon;
use Cart;
use Stripe;
use Mail;
use App\Shop\ShopSection;
use App\Order;
use App\Font;
use App\FontStyle;
use App\FooterLink;
use App\Style;
use App\MenuItem;
use App\ContenidoSectionFooter;

class CheckoutController extends Controller
{
    public function index() {
      return view('shop.checkout')
      ->with('orders', Order::all())
      ->with('menu_item', MenuItem::all())
      ->with('styles', Style::all())
      ->with('fonts', Font::all())
      ->with('font_styles', FontStyle::all())
      ->with('contenidosectionfooters', ContenidoSectionFooter::all())
      ->with('footer_links', FooterLink::all())
      ->with('shop_items', ShopItem::all());
    }

    public function pay(Request $request) {
      $price = Cart::total(null,null,'');
      $pri = intval($price);
      $email = "vidaldl@outlook.com";
      $date = Carbon\Carbon::now()->format('d-m-Y');
      $receipt = 1;

      $name =  "Leo";

      $items = Cart::content();
      $subtotal = Cart::subtotal();
      $tax = Cart::tax();
      $total = Cart::total();


      Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
       $charge = Stripe\Charge::create ([
               "amount" => $price * 100,
               "currency" => "usd",
               "source" => $request->stripeToken,
               "description" => "Compra @" . env('APP_NAME'),
               "receipt_email" => $email
       ]);

       $method = $charge->payment_method_details->type;
       $cardtype = $charge->payment_method_details->card->brand;
       $cardlast4 = $charge->payment_method_details->card->last4;

       if($charge->status == "succeeded") {
         Mail::to($email)->send(new \App\Mail\PurchasedSuccessful(
           $charge,
           $email,
           $date,
           $receipt,
           $name,
           $items,
           $subtotal,
           $tax,
           $total,
           $method,
           $cardtype,
           $cardlast4
         ));


         session()->flash('success', 'Compra Exitosa');
         return redirect()->route('checkout');

       } else {
         session()->flash('error', 'Metodo de pago no aceptado');
         return redirect()->route('checkout');
       }



    }
}
