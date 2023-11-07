@extends('masteruser.app')
@section('content')
<section class="main" id="main">
    <h1 class="heading_menu"> our <span> main menu </span></h1>

     <div class="box_container1">
        @foreach( $categories as $category)
   <div class="box">
        <img class="ph_main" src="{{asset($category->image)}}" alt="">
   <div class="content">
   <h3 class="name_main">{{$category->name}}</h3>
   <a href="{{route('submainmenu',$category)}}" class="btn_see_more">See More</a>
         </div>
       </div>


       @endforeach
   </div>
   </section>
@endsection
