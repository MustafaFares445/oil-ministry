@extends('masteruser.app')
@section('content')

   <h1 class="heading_types"> our <span> western meals </span></h1>
   <section class="types_foods">
    @foreach( $products as $product)
    {{-- @dd($product); --}}
     <div class="dish-box">
   <div class="types">

     <div class="row" id="row_menu">
       <div class="col">
         <div class="box_type">
           <div class="img_types">
             <img  src="{{asset($product->image)}}" alt="">
           </div>


           <div class="name-calory">
             <h3 class="h3-menu">{{$product->name}}</h3>
             <p class="num_calory"><b>{{$product->rating}}</b></p>
             <p class="num_calory"><b>{{$product->price}} $</b></p>
           </div>


           <div class="rate">
             <!-- 5 -->
             <i class="uil uil-star"></i>
             <i class="uil uil-star"></i>
             <i class="uil uil-star"></i>
             <i class="uil uil-star"></i>
             <i class="uil uil-star"></i>
           </div>


           <div class="dist-bottom-row">
             <ul>

                <form method="POST" action="{{ route('cart.add_to_cart',$product->id) }}"
                style="display: flex;">

                @csrf
                <li>
                    <input type="hidden" name="product_id" value={{  $product->id  }}>
                    <input type="hidden" name="price" value={{  $product->price  }}>
                    <button class="btn-buy" type="submit">
                        <i class=" fa fa-shopping-cart"></i>
                    </button>
               </li>
               <li style="position: absolute;right: 20px;">
                <input type="number" class="input_number" min="0" max="50"
                name="quantity"
                 placeholder="enter quntity" value="{{ $product->quantity }}">
                </li>

            </form>


             </ul>

           </div>
           <!-- <button class="btn_recipe">recipe</button> -->
           <div class="div_btn_recipe"><button class="btn_recipe"><a href="{{route('showrecipes',$product)}}" >recipe</a></button></div>
         </div>
       </div>

     </div>

   </div>

   </div>
   @endforeach
   </section>
@endsection
