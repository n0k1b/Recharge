@extends('front.layout.master')
@section('header')

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Recharge Italy</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/admin.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="icon" href="https://jmnation.com/images/jm-transparent-logo.png"></head>

@endsection


@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid recharge-page">

        <div class="recharge-box">

          <div class="card card-outline card-primary">

            <div class="card-body">
              <h3 class="text-center mb-5">Indice Brand Pin</h3>
              <div class="row">
                <div class="col-md-6">
                  {{-- <form action="domestic_pin" method="post"> --}}
                    <form id="pin_form">
                    @csrf
                    <div class="form-group">
                      <label>Brand</label>

                      <div class="brand-select-list">
                        <button type="button" class="selected-brand text-left" name="selected_brand" value=""></button>
                        <div class="brandUlLiContainer">
                          <ul id="brandUlList" style="max-height: 200px; overflow: auto;"></ul>
                        </div>
                      </div>
                      <input type="hidden" name="operator" id="op">
                      <select id="operator" class="brand-dropdown" value="" style="width: 100%;">
                        <option id="test" value="VODAFONE" data-thumbnail="{{ asset('images/vodafone.png') }}"> VODAFONE</option>
                        <option id="test" value="TIM" data-thumbnail="{{ asset('images/tim.jpg') }}">TIM</option>
                        <option value="RABONA" data-thumbnail="{{ asset('images/rabona.png') }}">RABONA</option>
                        <option value="LYCAMOBILE" data-thumbnail="{{ asset('images/lyca.png') }}">LYCAMOBILE</option>
                        <option value="Daily Telecom" data-thumbnail="{{ asset('images/daily.png') }}">Daily Telecom</option>
                        <option value="UNOMOBILE" data-thumbnail="{{ asset('images/uno.png') }}">UNO MOBILE</option>
                        <option value="PAYSAFE" data-thumbnail="{{ asset('images/pay.png') }}">PAYSAFE</option>
                        <option value="Amazon" data-thumbnail="{{ asset('images/amazon.png') }}">Amazon</option>
                        <option value="SKY" data-thumbnail="{{ asset('images/sky.png') }}">SKY</option>
                        <option value="Telecom" data-thumbnail="{{ asset('images/telecom.png') }}">Telecom Italia</option>
                        <option value="Linkem" data-thumbnail="{{ asset('images/linkem.png') }}">Linkem</option>
                        <option value="Phoneall" data-thumbnail="{{ asset('images/phone.png') }}">Phoneall</option>
                        <option value="BestCard" data-thumbnail="{{ asset('images/Tim-Carta.png') }}">BestCard</option>
                        <option value="PiùRicarica" data-thumbnail="{{ asset('images/piu.jpg') }}">PiùRicarica</option>
                        <option value="Freecom" data-thumbnail="{{ asset('images/freedom.png') }}">Freecom</option>
                        <option value="BWIN" data-thumbnail="{{ asset('images/bwin.png') }}">BWIN</option>
                        <option value="GD" data-thumbnail="{{ asset('images/gd.png') }}">GD</option>
                        <option value="POKERSTARS" data-thumbnail="{{ asset('images/star.png') }}">POKERSTARS</option>
                        <option value="WILLIAM" data-thumbnail="{{ asset('images/william.png') }}">WILLIAM HILL</option>
                        <option value="BETSSON" data-thumbnail="{{ asset('images/betsson.png') }}">BETSSON</option>
                        <option value="BETFLAG" data-thumbnail="{{ asset('images/betflag.png') }}">BETFLAG</option>
                        <option value="STANLEYBET" data-thumbnail="{{ asset('images/stanley.png') }}">STANLEYBET</option>
                        <option value="NowTel" data-thumbnail="{{ asset('images/nowtell.png') }}">NowTel</option>
                        <option value="CloudItalia" data-thumbnail="{{ asset('images/cloud.png') }}">CloudItalia</option>
                        <option value="OnShop" data-thumbnail="{{ asset('images/on.png') }}">OnShop</option>
                        <option value="Party" data-thumbnail="{{ asset('images/party.png') }}">Party Poker</option>
                        <option value="Much" data-thumbnail="{{ asset('images/much.png') }}">Much Better</option>
                        <option value="MICROSOFT" data-thumbnail="{{ asset('images/microsoft.png') }}">MICROSOFT</option>
                        <option value="TRAVELMATE" data-thumbnail="{{ asset('images/travelmate.png') }}">TRAVELMATE</option>
                        <option value="SONY" data-thumbnail="{{ asset('images/sony.png') }}">SONY</option>
                        <option value="NINTENDO" data-thumbnail="{{ asset('images/nintendo.png') }}">NINTENDO</option>
                        <option value="DAZN" data-thumbnail="{{ asset('images/dazn.png') }}">DAZN</option>
                        <option value="VOLAGRATIS" data-thumbnail="{{ asset('images/vola.png') }}">VOLAGRATIS</option>
                        <option value="SIXTHCONTINENT" data-thumbnail="{{ asset('images/sixth.png') }}">SIXTHCONTINENT</option>
                        <option value="NETFLIX" data-thumbnail="{{ asset('images/netflix.png') }}">NETFLIX</option>
                        <option value="EUROSPORT" data-thumbnail="{{ asset('images/euro.png') }}">EUROSPORT</option>
                        <option value="SPOTIFY" data-thumbnail="{{ asset('images/spotify.png') }}">SPOTIFY</option>
                        <option value="WISHCARD" data-thumbnail="{{ asset('images/wish.png') }}">WISHCARD</option>
                        <option value="HELBIZ" data-thumbnail="{{ asset('images/helbiz.png') }}">HELBIZ</option>
                        <option value="LIBON" data-thumbnail="{{ asset('images/libon.png') }}">LIBON</option>
                        <option value="YOUNG" data-thumbnail="{{ asset('images/young.png') }}">YOUNG</option>
                        <option value="ROBLOX" data-thumbnail="{{ asset('images/roblox.png') }}">ROBLOX</option>
                        <option value="EA" data-thumbnail="{{ asset('images/ea.png') }}">EA</option>
                        <option value="FORK" data-thumbnail="{{ asset('images/fork.png') }}">THE FORK</option>
                        <option value="STEAM" data-thumbnail="{{ asset('images/STREAM.jpeg') }}">STEAM</option>
                        <option value="ZALANDO" data-thumbnail="{{ asset('images/ZALANDO.png') }}">ZALANDO</option>
                        <option value="AIRBNB" data-thumbnail="{{ asset('images/Airbnb.png') }}">AIRBNB</option>
                      </select>
                    </div>
                    <div id="price">
                      <label for="">Amount</label>
                      <select id="amounts" name="amount" class="form-control amounts">

                      </select>
                    </div>
                    {{-- <div class="mb-3">
                      <label for="inputAmount" class="form-label">Service Charge in EURO</label>
                      <input type="text" class="form-control" id="inputAmount" step="any" name="service" placeholder="Please Enter Service Charge">
                    </div> --}}
                    <div class="mt-3">
                      <input type="submit" class="btn btn-info" style="width: 100%;" value="Get Pin">
                    </div>

                  </form>
                </div>
                <div class="col-md-6">
                  <div class="last_recharge_table">
                    <div class="last_recharge_table_head text-center">
                      <h5><strong>Last 10 Recharge</strong></h5>
                    </div>

                    <div class="card-body table-responsive p-0">
                      <table class=" table table-sm table-bordered table-hover">
                        <thead>
                          <tr class="table-danger">
                            <th>Pin</th>
                            <th>Operator</th>
                            <th>Amount</th>

                            <th>Profit</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($data as $item)
                          <tr class="bg-ocean">
                            <td>{{ $item->pin_number }}</td>

                            <td>{{ $item->operator }}</td>
                            <td>{{ $item->amount }}</td>
                            @if(auth()->user()->role == 'admin')
                            <td>{{ $item->admin_com }}</td>
                            @else
                            <td>{{ $item->reseller_com }}</td>
                            @endif
                            <td> <a class="btn btn-success" href="recharge_invoice/{{ $item->id }}"> Invoice</a> </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>




            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.login-box -->

      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection

@section('scripts')

@endsection

@section('js')

<script type="text/javascript">

     $(function(){
        $(".pin_details").hide()
        var toast = document.querySelector('.iziToast');
        var message = sessionStorage.getItem('message');
        sessionStorage.removeItem('message');

        if(toast)
                {
                iziToast.hide({}, toast);
                }
        if ( sessionStorage.getItem('error') ) {
            sessionStorage.removeItem('error');

                iziToast.error({
                    backgroundColor:"#D12C09",
                    messageColor:'white',
                    iconColor:'white',
                    titleColor:'white',
                    titleSize:'18',
                    messageSize:'18',
                    color:'white',
                    position:'topCenter',
                    timeout: 30000,
                    title: 'Error',
                    message: message,


                });

                //console.log(response.message);

            }

            if ( sessionStorage.getItem('success') ) {
            sessionStorage.removeItem('success');


            iziToast.success({
                    backgroundColor:"Green",
                    messageColor:'white',
                    iconColor:'white',
                    titleColor:'white',
                    titleSize:'18',
                    messageSize:'18',
                    color:'white',
                    position:'topCenter',
                    timeout: 50000,
                    title: 'Success',
                    message: message,

                });
                //console.log(response.message);

            }
     });

    //test for iterating over child elements
    var dropdownArray = [];
    $('.brand-dropdown option').each(function(){
      var img = $(this).attr("data-thumbnail");
      var text = this.innerText;
      var value = $(this).val();
      var item = '<li name="op" id="test"><img src="'+ img +'" alt="" value="'+value+'"/><span>'+ text +'</span></li>';
      dropdownArray.push(item);

    })

    $('#brandUlList').html(dropdownArray);

    // default if needed
    // $('.selected-brand').html(dropdownArray[0]);
    $('.selected-brand').html('Select Brand');
    $('.selected-brand').attr('value', '');

    //change button stuff on click
    $('#brandUlList li').click(function(){
       var img = $(this).find('img').attr("src");
       var value = $(this).find('img').attr('value');
       var text = this.innerText;
       var item = '<li><img src="'+ img +'" alt="" /><span>'+ text +'</span></li>';
      $('.selected-brand').html(item);
      $('#op').attr('value', text);
      $('.selected-brand').attr('value', value).trigger('change');
      $(".brandUlLiContainer").toggle();

      $('#amounts').empty();

      $.ajax({
 type: "POST",
 url: "/check-pins", // url to request
 data:{
            _token:'{{ csrf_token() }}',
            id: value,
        },
  cache: false,
  dataType: 'json',
 success : function(response){
  $(response).each(function(index,item){
    var data = '<option value='+item.ean+'>'+item.product+'</option>';
    $('#amounts').append('<option value='+item.ean+','+item.amount+'>'+item.product+' '+item.amount +' Euro</option>');
  })
 }
});

      $(".phone_number").show();
    });

    $(".selected-brand").click(function(){
          $(".brandUlLiContainer").toggle();
    });

    function selectAmount(amount) {
      $('#inputAmount').val(amount);
    }

    $(".phone_number").hide();

    $(".recharge_amount").hide();

    $(document).on('keyup', '.myNumber', function () {
      if ( $(this).val().length >= 10 ) {
        $(".recharge_amount").show();
      }
      else {
        $(".recharge_amount").hide();
      }
    });

    $( "#pin_form" ).submit(function( event ) {
        event.preventDefault();

        swal({
  title: "Are you sure?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {

          var formdata = new FormData();
        formdata.append('amount',$("#amounts").val());
        formdata.append('operator',$("#op").val());




      $.ajax({
        processData: false,
        contentType: false,
        url: "domestic_pin",
        type:"POST",
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
        data: formdata,
        beforeSend: function () {
            $('.cover-spin').show(0)
            },
        complete: function () { // Set our complete callback, adding the .hidden class and hiding the spinner.
            $('.cover-spin').hide(0)
            },
        success:function(response){
            $('.cover-spin').hide(0);



            if(response.status==true)
            {
               // get_table();

                location.reload();
                sessionStorage.setItem('success',true);
                sessionStorage.setItem('message',response.message);
              // $("#pin_number").text(response.pin_number)


            }
            else
            {
                location.reload();
                sessionStorage.setItem('error',true);
                sessionStorage.setItem('message',response.message);
            }


        },
       });

  } else {

  }
  });

    });


</script>
@endsection
