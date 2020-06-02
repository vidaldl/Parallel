@if($orders->find(17)->display == 1)
<div class="top-cart-content">
  <div class="top-cart-title">
    <h4 style="color: #444;">Shopping Cart</h4>
  </div>

  <div class="top-cart-items" style="max-height: 500px; overflow: scroll;">
    @foreach(Cart::content() as $item)
    <div class="top-cart-item clearfix">
      <div class="top-cart-item-image">

           <a href="{{route('shop.show', $item->id)}}"><img src="{{'/storage/' . $item->model->img_primaria}}" /></a>

      </div>
      <div class="top-cart-item-desc">
        <a href="{{route('shop.show', $item->id)}}">{{$item->name}}</a>
        <span class="top-cart-item-price">${{$item->price}}</span>
        <span class="top-cart-item-quantity">x {{$item->qty}}</span>
      </div>
    </div>
    @endforeach
  </div>
  <div class="top-cart-action clearfix">
    <span class="fleft top-checkout-price">${{Cart::subtotal()}}</span>
    <a href="{{route('cart')}}" style="color: white;" class="button button-3d button-small nomargin fright">View Cart</a>
  </div>
</div>
@endif
