<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Reservation Form - Dine In </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/css/smart-forms.css">
    <link rel="stylesheet" href="path/to/css/font-awesome.min.css">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">   
    <!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


  </head>
  <body>
    
  <div class="container">
  <div class="wrapper">

  @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
  @endif

  <div class="form-header header-primary"> 
      <h4><i class="fa fa-calendar"></i>Make Dine In Reservations in Minutes</h4>
    </div>
  
    <!-- OUR BOOKING FORM MARKUP -->

  <form method="post" action="/reservation" id="booking-form"> 
    @csrf
  <div class="form-group">
    <label for="exampleFormControlSelect1">Choose a Restaurant :</label>
    <select class="form-control" id="exampleFormControlSelect1" name="resto">
      <option value="Raa Cha">Raa Cha</option>
      <option value="Sushi Tei">Sushi Tei</option>
      <option value="Bebek Tepi Sawah ">Bebek Tepi Sawah</option>
    </select>
  </div>

  <div class="form-group">
    <label for="guestname">Please Enter Your Name</label>
    <input type="text" class="form-control" name="guestname" placeholder="Full Name">
  </div>

  <div class="form-group">
    <label for="guestemail">Email Address</label>
    <input type="text" class="form-control" name="guestmail" placeholder="@something.com">
  </div>

  <div class="form-group">
    <label for="guestelephone">Telephone / Mobile Phone</label>
    <input type="number" class="form-control" name="guesttelephone" placeholder="Phone Number">
  </div>

  <div class="form-group">
    <label for="adults">Number of People</label>
    <input type="number" class="form-control" name="adults" placeholder="Number Of People">
  </div>

  <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date">Date</label>
        <input class="form-control" id="date" name="reserv_date" placeholder="MM/DD/YYY" type="date"/>
      </div>

  <div class="form-group">
  <label for="time">Reservation time</label>
  <input class="form-control" id="time" name="reserv_time" placeholder="00:00" type="time"/>
  <b-form-timepicker v-model="value" locale="en"></b-form-timepicker>
  </div>

  <div class="form-group">
  <label for="comment">Anything we should know about</label>
  <textarea class="form-control" id="comment" name="comment" placeholder="" type="text"></textarea>
  <small>Please be as descriptive as possible</small>
  </div>
  
  <h3 class="tagline">Deposit of Rp 50.000 (Will be returned upon arrival)</h3>

  <div class="form-group">
    <label for="payment method">Choose Payment Method :</label>
    <select class="form-control" id="payment method" name="payment">
      <option name="ovo">OVO - 082251388752</option>
      <option name="gopay">GoPay - 082251388752</option>
      <option name="shopeepay">ShopeePay - 082251388752</option>
    </select>
  </div>
  
  <div class="form-footer">
          <!-- <button type="button" onclick="alert('Reserved!')">Confirm Reservation</button> -->
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-danger">Cancel</button>
      </div>
    </div>
  </div>  
</form>
</div>
</div>

</body>
<script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>

</html>