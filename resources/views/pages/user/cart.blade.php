@extends('masteruser.app')
@section('content')

            <section>
                <div class="container">
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" >#</th>
                                <th scope="col" >product_name</th>
                                <th scope="col" >price </th>
                                <th scope="col" >quantity</th>
                                <th scope="col" >pro</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($cartProducts as $cart)

                                <tr class="">
                                    {{-- @foreach ($cartItemIds as $cartItemId) --}}
                            {{-- @dd($cartItemIds); --}}
                            {{-- <p>{{ $cartItemId }}</p> --}}
                            <th scope="row" >{{ $cart->pivot->id }}</th>
                            {{-- @endforeach --}}
                                    {{-- <th scope="row" >{{ $cart->id }}</th> --}}
                                    {{-- <th scope="row" >{{ $cart->user_id }}</th> --}}
                                    <th  >{{ $cart->name }}</th>
                                    <td >{{ $cart->pivot->price }}</td>
                                    <td >{{ $cart->pivot->quantity }}</td>
                                    <td  >
                                        <form action="{{ route('cart.destroy',$cart->pivot->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn_delete" type="submit" style="color:red; !important">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                    <div style="   display: flex;    padding-top: 30px;">
                    <p style="font-size: x-large; color: red; display: flex; align-items: center;  margin-right: 230px;">
                    Total Price: {{  $totalPrice}}
                    </p>
                    <form action="{{ route('cart.delete_all') }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn_contact" type="submit">Delete All Item</button>
                    </form>
                    </div>


                </div>

                <div style=" display: flex;">
                    <form action="{{route('cart.delete_all')}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn_contact" >payment</button>
                </form>
                <form action="{{ route('cart.store') }}" method="POST">
                    @csrf
                    <button class="btn_contact" type="submit" style="
                    margin-left: 15px;">Save</button>
                </form>
                </div>
            </div>

            </section>

{{--
            @foreach ($bills as $bill)
    <h2>Bill ID: {{ $bill->id }}</h2>
    <ul>
        @foreach ($bill->cart->products as $product)
            <li>Product: {{ $product->name }}</li>
            <li>Quantity: {{ $product->pivot->quantity }}</li>
            <li>Price: {{ $product->pivot->price }}</li>
        @endforeach
    </ul>
@endforeach --}}

@endsection



{{--
@extends('masteruser.app')
@section('content')
    <div class="container">



    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
          <tr class="">
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>


        </tbody>
      </table>


    </div>

    @endsection --}}
