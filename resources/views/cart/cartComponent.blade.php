<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <h2 class="active" style="color: #000000">Shopping Cart</h2>
            </ol>
        </div>

        <div class="table-responsive cart_info delete-cart-url " data-url="{{route('product.deleteCart')}}">
            <table class="table table-condensed update-cart-url" data-url="{{route('product.updateCart')}}">
                <thead>
                    <tr class="cart_menu">
                        <td class='id'>ID</td>
                        <td class="image" >Image</td>
                        <td class="description">Name</td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Sub Total</td>
                        <td class="text-center">Action</td>
                    </tr>
                </thead>
                
                <tbody>
                    @php
                        $total=0;
                    @endphp

                    @foreach ($carts as $id=>$cart )
                        @php
                            $total += $cart['price'] * $cart['quantity'];
                        @endphp

                        <tr>
                            <td>{{$id}}</td>
                            <td class="cart_product" style="margin-right: 10px">
                                <a href=""><img src="{{config('app.base_url').$cart['image']}}" alt="" class="image_cart_item"></a>
                            </td>

                            <td class="cart_description">
                                <h4><a href="">{{$cart['name']}}</a></h4>
                                
                            </td>
                            <td class="cart_price">
                                <p>${{$cart['price']}}</p>
                            </td>


                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    
                                    {{-- <a class="cart_quantity_up" href=""> + </a> --}}
                                    
                                    <input class="cart_quantity_input quantity" type="number" name="quantity" min="1" value="{{$cart['quantity']}}" autocomplete="off" size="2">

                                    {{-- <a class="cart_quantity_down" href=""> - </a> --}}
                                </div>
                            </td>

                            
                            <td class="cart_total">
                                <p class="cart_total_price">${{$cart['price'] * $cart['quantity']}}</p>
                            </td>
                            
                            
                        

                            <td class="text-center" >
                                <button class="btn btn-info" style="margin-right: 15px;" >
                                    <a class="update-cart" data-id="{{$id}}" href="" style="text-align: center; color: #ffffff;">Update</i></a>
                                </button>
                            
                                <button class="btn btn-danger"  >
                                    <a class="delete-cart"  data-id="{{$id}}" href="" style="text-align: center; color: #ffffff;">Delete</i></a>
                                </button>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="row text-center">
                <h2>Sum total: {{$total}}</h2>
            </div>
        </div>

        
    </div>
</section> <!--/#cart_items-->