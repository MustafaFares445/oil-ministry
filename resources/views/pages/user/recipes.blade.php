@extends('masteruser.app')
@section('content')


<div class="container Recipe">
    <div class="row">
      <div class="col-sm">
            <h1 class="NumRecip">01</h1>
            <h6 class="HeadRecip"> BANANA PANCAKE</h6>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, sequi? <br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, porro.
            </p>
      </div>

      <div class="col-sm">
             <img src="{{asset('assetcss/images/pancake.jpg')}}"  class="imgRecip">
      </div>

    </div>
  </div>


  <div class="container Recipe2">
    <div class="row">
      <div class="col-sm">
            <h1 class="NumRecip">02</h1>
            <h6 class="HeadRecip">WATERMELLON JUICE</h6>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, sequi? <br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, porro.
            </p>
      </div>

      <div class="col-sm">
             <img src="{{asset('assetcss/images/watermelon1.jpg')}}"  class="imgRecip">
      </div>

    </div>
  </div>

  <div class="container Recipe3">
    <div class="row">
      <div class="col-sm">
            <h1 class="NumRecip">03</h1>
            <h6 class="HeadRecip"> ROASTED CHICKEN</h6>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, sequi? <br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, porro.
            </p>
      </div>

      <div class="col-sm">
             <img src="{{asset('assetcss/images/chicken2.jpg')}}"  class="imgRecip">
      </div>

    </div>
  </div>


  <div class="container Recipe3">
    @foreach( $recipes as $recipe)
    <div class="row">

      <div class="col-sm">
            <h1 class="NumRecip">03</h1>
            <h6 class="HeadRecip"> ROASTED CHICKEN</h6>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, sequi? <br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, porro.
            </p>
      </div>

      <div class="col-sm">
             <img src="{{asset($recipe->image)}}" class="imgRecip">
      </div>

    </div>
    @endforeach
  </div>
@endsection



