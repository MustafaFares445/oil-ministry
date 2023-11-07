
@extends('masteruser.app')
@section('content')

              <!------------------ Top Section ---------------------------->
              <div class="container Basic">
                @foreach( $tables as $table)
                <div class=" TableTop">

                    <div class="TablePhoto">

                        <div class="image-overlay">
                            <div class="image-overlay-border">{{ $table->name }}</div>
                        </div>
                        <img src="{{ asset('images/' . $table->image) }}" alt="" class="img1">
                    </div>

                </div>
         @endforeach

              </div>

                    <!------------------ Bottom Section ---------------------------->
              <div class="container TableReservation ">
                <div class="row">
                      <div class="col-sm ReservPhoto">
                        <img class="TableReservImage" src="{{asset('assetcss/images/t4.jpg')}}" alt="">
                      </div>

                      <div class="col-sm inputs">
                        <div class = "validation-form">
                        <form method="POST" id="myForm" action="{{ route('reservationspost.store') }}">
                          @csrf
                          <h3 class="h-reserv">Make Reservation</h3>
                          <h6>First Name</h6>


                          <div class="form-group">
                          <input type="text" name="first_name" id="first_name"
                            placeholder="">
                            <div class="first-name-msg"></div>
                          </div>
                          <div class="form-group">
                          <h6 class="ReservInput">Last Name</h6>
                          <input type="text" name="last_name" id="last_name"
                          placeholder="">
                          <div class="last-name-msg"></div>
                        </div>
                        <div class="form-group">
                          <h6 class="ReservInput">Email</h6>
                          <input type="email" name="email" id="email"
                          placeholder="user@gmail.com">
                          <div class="email-msg"></div>
                        </div>

                        <div class="form-group">
                          <h6 class="ReservInput"> Phone Number</h6>
                          <input type="tel" name="tel_number" id="tel_number"
                          placeholder="+96398765322">
                          <div class="phone-msg"></div>
                        </div>


                        <div class="form-group">

                            {{-- <input type="datetime-local" id="date-time-input">
                            <p id="error-message" style="display: none; color: red;">Please choose a date within the next 7 days and a time between 9:00 AM and 5:00 PM.</p>

                                                          </div>--}}
                          <h6 class="ReservInput">Reservation Date</h6>
                          <input type="datetime-local" name="res_date" id="res_date"
                            placeholder="8.9.2023">
                            <p id="error-message" style="display: none; color: red;">Please choose a date within the next 7 days and a time between 9:00 AM and 5:00 PM.</p>

                        </div>
                         <h6 class="ReservInput">Chaire Number</h6>
                            <select name="chaire_id" id="chaire_id" class="form-input">

                                <option value="">Select chaire</option>
                                @if (!empty($chaires))
                                    @foreach ($chaires as $chaire)
                                        <option value="{{ $chaire->id }}">{{ $chaire->name }}</option>
                                    @endforeach
                                @endif
                            </select>

                        <h6 class="ReservInput">Table Number</h6>
                            <select name="table_id" id="table_id" class="form-input">
                                <option value="">Select table</option>
                            </select>



                        <div class="mt-6 p-4">
                            <button type="submit"
                                class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
                          </div>
                       </form>
                        </div>
                        </div>
                     </div>

                     
                  </div>
              
                   @endsection


{{-- @extends('masteruser.app')
@section('content')

          <!------------------ Top Section ---------------------------->

          <section class="ss">


   <div class="container Basic">
    @foreach( $tables as $table)
    <div class=" TableTop">

        <div class="TablePhoto">

            <div class="image-overlay">
                <div class="image-overlay-border">{{ $table->name }}</div>
            </div>
            <img src="{{ asset('assetcss/images/' . $table->image) }}" alt="" class="img1">
        </div>

    </div>
    @endforeach
  </div>


              <!------------------ Top Section ---------------------------->

              <div class="container Hero">
                <div class=" TableTop">

                    <div class="TablePhoto">

                        <div class="image-overlay">
                            <div class="image-overlay-border">Table 1</div>
                        </div>
                        <img src="images/t6.jpg" class="img1">
                    </div>
                </div>

                <div class=" TableTop">

                    <div class="TablePhoto">

                        <div class="image-overlay">
                            <div class="image-overlay-border">Table 1</div>
                        </div>
                        <img src="images/t6.jpg" class="img1">
                    </div>
                </div>
              </div>

               <!------------------ Bottom Section ---------------------------->

          <div class="container TableReservation ">
            <div class="row">
                  <div class="col-sm ReservPhoto">
                    <img class="TableReservImage" src="{{asset('assetcss/images/t4.jpg')}}" alt="">
                  </div>

<div class = "validation-form">

        <form method = "post" id="myForm">
                              <h3 class="h-reserv">Make Reservation</h3>

                                <div class="form-group">
                                  <input type="text" placeholder="First Name"  id="firstName">
                                  <div class=" -name-msg"></div>
                                </div>

                                <div class="form-group">
                                  <input type="text" placeholder="last Name"  id="lastName">
                                  <div class="last-name-msg"></div>
                              </div>
                            <div class="form-group">
                                  <input type="text" placeholder="jone@gmail.com" id="email">
                                  <div class="email-msg"></div>
                                </div>

                                <div class="form-group">
                                  <input type="text" placeholder="Phone" id="phone">
                                  <div class="phone-msg"></div>
                              </div>

                                <div class="form-group">

{{-- <input type="datetime-local" id="date-time-input">
<p id="error-message" style="display: none; color: red;">Please choose a date within the next 7 days and a time between 9:00 AM and 5:00 PM.</p>

                              {{-- </div>

                              <div class="form-group">
                                <input type="number" placeholder="chairs number" id="chairs-number">
                                <div class="chair-msg"></div>
                            </div>

                                <div class="form-group">
                                  <input type="submit" value="Submit" id="submit-btn" class="allowed-submit" disabled="desabled">
                                </div>
        </form> --}}

{{-- </div> --}}


 {{-- </div>

        </div>
        </div>

          </div>


        </section>
@endsection --}}
