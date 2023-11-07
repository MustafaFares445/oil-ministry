<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" /> --}}


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">






    <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assetcss/home/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assetcss/home/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assetcss/home/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assetcss/home/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
     <link rel="stylesheet" href="{{asset('assetcss/home/css/style.css')}}">



     <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    {{-- link for recipes --}}
     <link rel="stylesheet" href="{{asset('css/recipes.css')}}">

    {{-- link for menu --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
     <link rel="stylesheet" href="{{asset('css/menu.css')}}">

    {{-- table --}}

    <link href="{{asset('home/css/bootstrap.min.css')}}" rel="stylesheet">
    {{-- for idea reserve ajax and query --}}
    <meta name="_token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="{{asset('css/payment.css')}}">

</head>


<body   style="background-color: white;">


@include('masteruser.header')
@if(session()->has('danger'))
<div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 alert_dang" role="alert">
  <span class="font-medium"></span>{{session()->get('danger')}}
</div>
@endif
@if(session()->has('success'))
<div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 alert_succ" role="alert">
  <span class="font-medium"></span> {{session()->get('success')}}
</div>
@endif
@yield('content')

@include('masteruser.footer')



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assetcss/home/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('js/validate.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('assetcss/home/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('assetcss/home/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('assetcss/home/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('assetcss/home/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('assetcss/home/lib/tempusdominus/js/moment.min.js')}}"></script>
<script src="{{asset('assetcss/home/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
<script src="{{asset('assetcss/home/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('assetcss/home/js/main.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     @yield('script')



     <script src="{{ asset('assetcss/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assetcss/js/bootstrap.min.js') }}"></script>
<script>
    $.ajaxSetup({
         headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
         }
   });

   $(document).ready(function(){
        $("#chaire_id").change(function(){
            var chaire_id = $(this).val();

            if (chaire_id == "") {
                var chaire_id = 0;
            }

            $.ajax({
                url: '{{ url("/fetch-states/") }}/'+chaire_id,
                type: 'post',
                dataType: 'json',
                success: function(response) {
                    $('#table_id').find('option:not(:first)').remove();
                    $('#city').find('option:not(:first)').remove();

                    if (response['tables'].length > 0) {
                        $.each(response['tables'], function(key,value){
                            $("#table_id").append("<option value='"+value['id']+"'>"+value['name']+"</option>")
                        });
                    }
                }
            });
        });

    });
</script>

</body>

</html>
