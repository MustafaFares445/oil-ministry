$(document).ready(function () {


















   //validation for First Name
   $('#first_name').on('input', function () {

      var firstName = $(this).val();
      var validName = /^[a-zA-Z ]*$/;
      if (firstName.length == 0) {

         $('.first-name-msg').addClass('invalid-msg').text("First Name is required");
         $(this).addClass('invalid-input').removeClass('valid-input');

      }
      else if (!validName.test(firstName)) {

         $('.first-name-msg').addClass('invalid-msg').text('only characters & Whitespace are allowed');
         $(this).addClass('invalid-input').removeClass('valid-input');

      }
      else {
         $('.first-name-msg').empty();
         $(this).addClass('valid-input').removeClass('invalid-input');
      }
     });

   // valiadtion for Last Name
   $('#last_name').on('input', function () {

      var secondName = $(this).val();
      var validName = /^[a-zA-Z ]*$/;
      if (secondName.length == 0) {

        $('.last-name-msg').addClass('invalid-msg').text("Last Name is required");
        $(this).addClass('invalid-input').removeClass('valid-input');
      }
      else if (!validName.test(secondName)) {

        $('.last-name-msg').addClass('invalid-msg').text('only characters & Whitespace are allowed');
        $(this).addClass('invalid-input').removeClass('valid-input');
      }
      else {
        $('.last-name-msg').empty();
        $(this).addClass('valid-input').removeClass('invalid-input');
      }
   });

   // valiadtion for Email
   $('#email').on('input', function () {

      var emailAddress = $(this).val();
      var validEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

      if (emailAddress.length == 0) {

        $('.email-msg').addClass('invalid-msg').text('Email is required');
        $(this).addClass('invalid-input').removeClass('valid-input');
      }
      else if (!validEmail.test(emailAddress)) {

        $('.email-msg').addClass('invalid-msg').text('Invalid Email Address');
        $(this).addClass('invalid-input').removeClass('valid-input');
      }
      else {
        $('.email-msg').empty();
        $(this).addClass('valid-input').removeClass('invalid-input');
     }
     });




     $('#tel_number').on('input', function () {

      var phoneNumber = $(this).val();
      var validPhone =  /^\d{10}$/;

      if ( phoneNumber.length == 0) {

        $('.phone-msg').addClass('invalid-msg').text('PhoneNumber is required');
        $(this).addClass('invalid-input').removeClass('valid-input');
      }
      else if (!validPhone.test(phoneNumber)) {

        $('.phone-msg').addClass('invalid-msg').text('Please enter 10 numbers');
        $(this).addClass('invalid-input').removeClass('valid-input');
      }
      else {
        $('.phone-msg').empty();
        $(this).addClass('valid-input').removeClass('invalid-input');
     }
     });










   // validation to submit the form
   $('input').on('input',function(e){
      if($('#myForm').find('.valid-input').length==5){

          $('#submit-btn').removeClass('allowed-submit');
          $('#submit-btn').removeAttr('disabled');
      }
     else{
          e.preventDefault();
          $('#submit-btn').attr('disabled','disabled')

         }
   });

   });



  //  $('#datepicker').datetimepicker({
  //   format: 'Y-m-d',
  //   timepicker: false,
  //   minDate: 0,
  //   maxDate: '+7D'
  // }).on('change', function(e) {
  //   var selectedDate = new Date(e.target.value);
  //   var currentDate = new Date();
  //   var nextWeek = new Date(currentDate.getTime() + (7 * 24 * 60 * 60 * 1000));

  //   if (selectedDate > nextWeek) {
  //     alert("Please choose a date within the next 7 days.");
  //     $(this).val(''); // Clear the input field
  //   }
  // });


  // Get current date
  // var currentDate = new Date();

  // // Set minimum and maximum selectable dates
  // var minDate = currentDate.toISOString().split('T')[0]; // Today's date
  // var maxDate = new Date(currentDate.getTime() + (7 * 24 * 60 * 60 * 1000)).toISOString().split('T')[0]; // Today's date + 7 days

  // // Set min and max attributes for input field
  // $('#datepicker').attr('min', minDate);
  // $('#datepicker').attr('max', maxDate);

  // // Add change event listener to input field
  // $('#datepicker').change(function() {
  //   var selectedDate = new Date($(this).val());

  //   if (selectedDate > new Date(currentDate.getTime() + (7 * 24 * 60 * 60 * 1000))) {
  //     $('#error-message').show();
  //   } else {
  //     $('#error-message').hide();}})



  // var currentDate = new Date();

  // // Set minimum and maximum selectable dates
  // var minDate = currentDate.toISOString().split('T')[0]; // Today's date
  // var maxDate = new Date(currentDate.getTime() + (7 * 24 * 60 * 60 * 1000)).toISOString().split('T')[0]; // Today's date + 7 days

  // // Set min and max attributes for input field
  // $('#datepicker').attr('min', minDate + "T00:00");
  // $('#datepicker').attr('max', maxDate + "T23:59");

  // // Add change event listener to input field
  // $('#datepicker').change(function() {
  //   var selectedDate = new Date($(this).val());

  //   if (selectedDate > new Date(currentDate.getTime() + (7 * 24 * 60 * 60 * 1000))) {
  //     $('#error-message').show();
  //   } else {
  //     $('#error-message').hide();
  //   }
  // });

   // Get current date and time
   var currentDate = new Date();

   // Set minimum and maximum selectable dates
   var minDate = new Date(currentDate.getTime() - (24 * 60 * 60 * 1000)).toISOString().split('.')[0]; // Yesterday's date
   var maxDate = new Date(currentDate.getTime() + (7 * 24 * 60 * 60 * 1000)).toISOString().split('.')[0]; // Today's date + 7 days
   var minTime = '09:00';
   var maxTime = '17:00';

   // Set min and max attributes for input field
   $('#res_date').attr('min', minDate + 'T' + minTime);
   $('#res_date').attr('max', maxDate + 'T' + maxTime);

 // Add change event listener to input field
 $('#res_date').change(function() {
    var selectedDate = new Date($(this).val());

     // Check if date is within the next 7 days
     if (selectedDate < currentDate || selectedDate > new Date(currentDate.getTime() + (7 * 24 * 60 * 60 * 1000))) {
       $('#error-message').show();
       return;
     }

     // Check if time is between 9:00 AM and 5:00 PM
     var selectedTime = selectedDate.toLocaleTimeString('en-US', {hour12: false}).slice(0, 5); // Format time as HH:mm
     if (selectedTime < minTime || selectedTime > maxTime) {
       $('#error-message').show();
       return;
     }

     // Date and time are valid, hide error message
     $('#error-message').hide();
   });
