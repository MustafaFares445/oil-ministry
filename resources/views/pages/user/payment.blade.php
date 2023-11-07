@extends('masteruser.app')
@section('content')

    
    <div class="container mtn_container">
        <div class="payment_container mtn">
            <div class="payment_left_side_mtn">
             <div class="payment_card">
              <div class="payment_card_line_mtn"></div>
              <div class="payment_buttons_mtn"></div>
             </div>
             <div class="payment_post">
              <div class="payment_post_line"></div>
              <div class="payment_screen">
               <div class="payment_dollar_mtn">s.p</div>
              </div>
              <div class="payment_numbers"></div>
              <div class="payment_numbers_line2"></div>
             </div>
            </div>
            <div class="payment_right_side">
             <div class="payment_new">MTN</div>
    
              <svg viewBox="0 0 451.846 451.847" height="512" width="512" xmlns="http://www.w3.org/2000/svg" class="payment_arrow">
                <path fill="#cfcfcf" data-old_color="#000000" class="active-path" data-original="#000000" d="M345.441 248.292L151.154 442.573c-12.359 12.365-32.397 12.365-44.75 0-12.354-12.354-12.354-32.391 0-44.744L278.318 225.92 106.409 54.017c-12.354-12.359-12.354-32.394 0-44.748 12.354-12.359 32.391-12.359 44.75 0l194.287 194.284c6.177 6.18 9.262 14.271 9.262 22.366 0 8.099-3.091 16.196-9.267 22.373z"></path></svg>
    
            </div>
        </div>
        <div class="payment_container syriatel">
            <div class="payment_left_side_syriatel">
             <div class="payment_card">
              <div class="payment_card_line_syriatel"></div>
              <div class="payment_buttons_syriatel"></div>
             </div>
             <div class="payment_post">
              <div class="payment_post_line"></div>
              <div class="payment_screen">
               <div class="payment_dollar_syriatel">s.p</div>
              </div>
              <div class="payment_numbers"></div>
              <div class="payment_numbers_line2"></div>
             </div>
            </div>
            <div class="payment_right_side">
             <div class="payment_new">Syriatel</div>
    
              <svg viewBox="0 0 451.846 451.847" height="512" width="512" xmlns="http://www.w3.org/2000/svg" class="payment_arrow">
                <path fill="#cfcfcf" data-old_color="#000000" class="active-path" data-original="#000000" d="M345.441 248.292L151.154 442.573c-12.359 12.365-32.397 12.365-44.75 0-12.354-12.354-12.354-32.391 0-44.744L278.318 225.92 106.409 54.017c-12.354-12.359-12.354-32.394 0-44.748 12.354-12.359 32.391-12.359 44.75 0l194.287 194.284c6.177 6.18 9.262 14.271 9.262 22.366 0 8.099-3.091 16.196-9.267 22.373z"></path></svg>
    
            </div>
        </div>
     </div>




    <div class="container cash_container">



    <a  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    <div class="card_cash work">
        <div class="img_section">
        <svg xmlns="http://www.w3.org/2000/svg" height="77" width="76"><path fill-rule="nonzero" fill="#3F9CBB" d="m60.91 71.846 12.314-19.892c3.317-5.36 3.78-13.818-2.31-19.908l-26.36-26.36c-4.457-4.457-12.586-6.843-19.908-2.31L4.753 15.69c-5.4 3.343-6.275 10.854-1.779 15.35a7.773 7.773 0 0 0 7.346 2.035l7.783-1.945a3.947 3.947 0 0 1 3.731 1.033l22.602 22.602c.97.97 1.367 2.4 1.033 3.732l-1.945 7.782a7.775 7.775 0 0 0 2.037 7.349c4.49 4.49 12.003 3.624 15.349-1.782Zm-24.227-46.12-1.891-1.892-1.892 1.892a2.342 2.342 0 0 1-3.312-3.312l1.892-1.892-1.892-1.891a2.342 2.342 0 0 1 3.312-3.312l1.892 1.891 1.891-1.891a2.342 2.342 0 0 1 3.312 3.312l-1.891 1.891 1.891 1.892a2.342 2.342 0 0 1-3.312 3.312Zm14.19 14.19a2.343 2.343 0 1 1 3.315-3.312 2.343 2.343 0 0 1-3.314 3.312Zm0 7.096a2.343 2.343 0 0 1 3.313-3.312 2.343 2.343 0 0 1-3.312 3.312Zm7.096-7.095a2.343 2.343 0 1 1 3.312 0 2.343 2.343 0 0 1-3.312 0Zm0 7.095a2.343 2.343 0 0 1 3.312-3.312 2.343 2.343 0 0 1-3.312 3.312Z"></path></svg>                </div>
        <div class="card_cash_desc">
        <div class="card_cash_header">
        <div class="card_cash_title"></div>
        <div class="card_cash_menu">
        <div class="dot"></div>
        <div class="dot"></div>
          <div class="dot"></div>
          </div>
        </div>
        
        <div class="card_cash_time">Cash</div>
        {{-- <p class="recent">Last Week-36hrs</p> --}}
     </div>
    </div>
    </a>
    
    <a data-bs-toggle="modal" data-bs-target="#staticBackdropresto">
    <div class="card_cash work">
        <div class="img_section">
        <svg xmlns="http://www.w3.org/2000/svg" height="77" width="76"><path fill-rule="nonzero" fill="#3F9CBB" d="m60.91 71.846 12.314-19.892c3.317-5.36 3.78-13.818-2.31-19.908l-26.36-26.36c-4.457-4.457-12.586-6.843-19.908-2.31L4.753 15.69c-5.4 3.343-6.275 10.854-1.779 15.35a7.773 7.773 0 0 0 7.346 2.035l7.783-1.945a3.947 3.947 0 0 1 3.731 1.033l22.602 22.602c.97.97 1.367 2.4 1.033 3.732l-1.945 7.782a7.775 7.775 0 0 0 2.037 7.349c4.49 4.49 12.003 3.624 15.349-1.782Zm-24.227-46.12-1.891-1.892-1.892 1.892a2.342 2.342 0 0 1-3.312-3.312l1.892-1.892-1.892-1.891a2.342 2.342 0 0 1 3.312-3.312l1.892 1.891 1.891-1.891a2.342 2.342 0 0 1 3.312 3.312l-1.891 1.891 1.891 1.892a2.342 2.342 0 0 1-3.312 3.312Zm14.19 14.19a2.343 2.343 0 1 1 3.315-3.312 2.343 2.343 0 0 1-3.314 3.312Zm0 7.096a2.343 2.343 0 0 1 3.313-3.312 2.343 2.343 0 0 1-3.312 3.312Zm7.096-7.095a2.343 2.343 0 1 1 3.312 0 2.343 2.343 0 0 1-3.312 0Zm0 7.095a2.343 2.343 0 0 1 3.312-3.312 2.343 2.343 0 0 1-3.312 3.312Z"></path></svg>                </div>
        <div class="card_cash_desc">
        <div class="card_cash_header">
        <div class="card_cash_title"></div>
        <div class="card_cash_menu">
        <div class="dot"></div>
        <div class="dot"></div>
          <div class="dot"></div>
          </div>
        </div>
        <div class="card_cash_time">Resturant</div>
        {{-- <p class="recent">Last Week-36hrs</p> --}}
     </div>

    </div>
</a>

</div>


{{-- modal cash --}}
<div class="modal" tabindex="-1" id="staticBackdrop">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Cash</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{-- <p>Modal body text goes here.</p> --}}
          <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="form_container ">
                <div class="form_box">
                    <label for="exampleInputEmail1" class="form_label">Phone</label>
                    <input type="text" class="form_input " name="phone" placeholder="Enter Phone">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
              
                
               
            </div>
            {{-- <button type="submit" class="btn btn_save">save</button> --}}
      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger">Save</button>
        </div>
    </form>
      </div>
    </div>
  </div>



{{-- modal resto --}}
  <div class="modal" tabindex="-1" id="staticBackdropresto">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Cash</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Welcome To Our Restaurant.. We Are Waiting</p>
          {{-- <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <div class="form_container ">
                <div class="form_box">
                    <label for="exampleInputEmail1" class="form_label">Phone</label>
                    <input type="text" class="form_input " name="phone" placeholder="Enter Phone">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
              
                
               
            </div> --}}
            {{-- <button type="submit" class="btn btn_save">save</button> --}}
      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-danger">Save</button> --}}
        </div>
    {{-- </form> --}}
      </div>
    </div>
  </div>

@endsection