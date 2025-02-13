@extends('front.layout.master')
@section('header')
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Print All Invioce</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/admin.min.css')}}">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

  <link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="icon" href="https://jmnation.com/images/jm-transparent-logo.png"></head>
<style>
    .date_picker_pair {
    width: 90%;
}


/* .sorting_disabled{
    display: none !important;
} */
table.dataTable thead .sorting_asc{
    background-image: none !important;
}

</style>


@endsection

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mt-3">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-list" style="margin-right: 10px;"></i>
                  <strong>Invoice List</strong>
                </h3>

                  <a id="download-btn" class="btn btn-primary"  style="float:right" href="{{ route('data.export') }}" >Download as excel</a>

              </div>

              <div class="row" style="margin-left:10px;margin-top:20px">
                <div class="col-md-3">
                    <div class="date_picker_pair mb-3">
                        <label for="inputSearchDate" class="form-label">Select Date</label>
                        <input type="text" class="form-control" name="daterange" id="inputSearchDate" value="01/01/2018 - 01/15/2018">
                        <input type="hidden" class='start_date' name='start_date'>
                        <input type="hidden" class='end_date' name="end_date">

                        <!-- <input type="text" name="daterange" value="01/01/2018 - 01/15/2018" /> -->
                      </div>
                  </div>

                  <div class="col-md-3">
                    <div class="form-row align-items-center offer_select_option">
                        <label for="inlineFormCustomSelect" style="margin-bottom:14px">Tipo Ricarica</label>

                        <select class="custom-select" id="ExampleSelect" name="type">
                          <option value="all">All</option>
                          <option value="International">Recharge International</option>
                          <option value="Domestic">Recharge Domestic</option>
                          <option value="Pin">Pin</option>

                        </select>
                      </div>
                  </div>
                  @if(auth()->user()->role == 'admin')
                  <div class="col-md-3" style="margin-left:15px">
                    <div class="form-row align-items-center offer_select_option">
                        <label for="inlineFormCustomSelect" style="margin-bottom:14px">Choose Retailer</label>

                        <select  data-placeholder="Select an Option"  class="custom-select reseller" id="reseller" name="type">
                            <option></option>
                         @foreach ( $resellers as $data )
                             <option value="{{ $data->id }}">{{ $data->first_name." ".$data->last_name." (".$data->id.")" }}</option>
                         @endforeach

                        </select>
                      </div>
                  </div>
                  @endif
                  <div class="col-md-2">
                    <input type="button"  onclick="filter()" value="Search" class="btn btn-success" style="margin-top:30px">
                  </div>



              </div>



              <!-- /.card-header -->

              <div class="p-3">



                <div class="recharge_input_table table-responsive p-0">
                  <table class="table table-info table-sm table-bordered table-hover table-head-fixed text-nowrap invoice_table table-striped">
                    <thead>
                      <tr>
                        @if(Auth::user()->role == 'admin' || Auth::user()->role == 'sub' )
                        <th style="background-color: black;color:white"  >Reseller</th>
                        @endif
                        <th style="background-color: black;color:white"  >Requestld</th>
                        <th style="background-color: black;color:white" >Numero</th>
                        <th style="background-color: black;color:white">Data</th>
                        <th style="background-color: black;color:white">Genere</th>
                        <th  style="background-color: black;color:white">Importo</th>
                        @if(Auth::user()->role == 'admin')
                        <th  style="background-color: black;color:white">Admin Profit</th>
                        <th  style="background-color: black;color:white">Reseller Profit</th>
                        <th  style="background-color: black;color:white">Service Charge</th>
                        @elseif(Auth::user()->role == 'reseller')
                        <th  style="background-color: black;color:white">Profit</th>
                        <th  style="background-color: black;color:white">Service Charge</th>
                        @else
                        <th  style="background-color: black;color:white">Own Profit</th>
                        <th  style="background-color: black;color:white">Admin Profit</th>
                        <th  style="background-color: black;color:white">Reseller Profit</th>
                        @endif

                        <th  style="background-color: black;color:white">Invoice</th>

                      </tr>
                    </thead>
                    <tbody  id='change'>

                    </tbody>

                    <tfoot class="thead-dark" style="background-color: black" >
                        <tr>
                          @if(Auth::user()->role == 'admin' || Auth::user()->role == 'sub')
                          <th scope="col"></th>
                          @endif
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">Total</th>
                            <th scope="col"></th>
                            @if(Auth::user()->role == 'admin')
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            @elseif(Auth::user()->role == 'reseller')
                            <th scope="col"></th>
                            <th scope="col"></th>
                            @else
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            @endif
                            <th scope="col"></th>


                          </tr>

                    </tfoot>

                  </table>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('scripts')

<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.25/api/sum().js" type="text/javascript"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>




@endsection

@section('js')
<script>


$(function() {

    $('.reseller').select2({

    placeholder: function(){
        $(this).data('placeholder');
    }

    });

    $(".reseller").change(function(){
        fetch_table($(".start_date").val(),$(".end_date").val())

    });

    $("#ExampleSelect").change(function(){
        fetch_table($(".start_date").val(),$(".end_date").val())

    });


    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


  var start = moment().subtract(29, 'days');
  var end = moment();
  $(".start_date").val(start.format('YYYY-MM-DD'));
  $(".end_date").val(end.format('YYYY-MM-DD'));



  $('input[name="daterange"]').daterangepicker({
    startDate: start,
    endDate: end,
    ranges: {
       'Today': [moment(), moment()],
       'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
       'Last 7 Days': [moment().subtract(6, 'days'), moment()],
       'Last 30 Days': [moment().subtract(29, 'days'), moment()],
       'This Month': [moment().startOf('month'), moment().endOf('month')],
       'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    }
  }, function(start, end, label) {
     // alert('hello')

     $(".start_date").val(start.format('YYYY-MM-DD'));
     $(".end_date").val(end.format('YYYY-MM-DD'));

     fetch_table($(".start_date").val(),$(".end_date").val());

  });


    fetch_table($(".start_date").val(),$(".end_date").val())


});

document.getElementById('download-btn').addEventListener('click', function(event) {
        event.preventDefault(); // prevent default link behavior
        // get value from input field with ID 'param-input'

        var downloadLink = this.getAttribute('href') + '?start_date=' +$(".start_date").val() + '&end_date=' + $(".end_date").val()+ '&type=' + $('#ExampleSelect option:selected').val() ; // append parameter value to download link
        window.location.href = downloadLink; // trigger download
    });






function filter()
{

    fetch_table($(".start_date").val(),$(".end_date").val())
}

function fetch_table(start_date,end_date)
{

    var user_role = $("#user_role").val();

    var table = $('.invoice_table').DataTable();
    //console.log(table.column( 5 ).data().sum());
    table.destroy();

    var table = $('.invoice_table').DataTable({

      dom: 'Plfrtip',
        processing: true,
        serverSide: true,

        ordering:false,
        searchPanes: {
            orderable: false
        },

        language: {
        processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>'
        },
        columnDefs: [
    { "orderable": false, "targets": "_all" } // Applies the option to all columns
  ],
        ajax: {

            "url":'get_all_invoice',
            "type":'POST',
            dataSrc: function ( data ) {
             if(data.data.length != 0){
              total_cost = data.data[0].total_cost;
           total_admin_profit = data.data[0].total_admin_profit;
           total_reseller_profit = data.data[0].total_reseller_profit;
           total_service_charge = data.data[0].total_service_charge;
           total_own_profit = data.data[0].total_own_profit;
           total_sub_profit = data.data[0].total_sub_profit;
           }
           else{
            total_cost = 0;
            total_admin_profit = 0;
           total_reseller_profit = 0;
           total_service_charge = 0;
           total_own_profit = 0;
           total_sub_profit = 0;
           }
           return data.data;

         } ,
            "data":{
                'start_date':$(".start_date").val(),
                'end_date':$(".end_date").val(),
                'type':$('#ExampleSelect option:selected').val(),
                'retailer_id':$('#reseller option:selected').val()

            }


            },




        deferRender: true,
        columns: [
            //   {data: 'sl_no'},
            @if(Auth::user()->role == 'admin' || Auth::user()->role == 'sub')
            {data:'reseller_name',name:'reseller_name',orderable:false},
            @endif
            {data:'txid',name:'txid',orderable:false},
            {data:'number',name:'number'},
            {data:'date',name:'date'},
            {data:'recharge_type',name:'type'},
            {data:'amount',name:'amount'},
            @if(Auth::user()->role == 'admin')

            {data:'admin_com',name:'admin_com'},
            {data:'reseller_com',name:'reseller_com'},
            {data:'service',name:'service'},
            @elseif(Auth::user()->role == 'reseller')
            {data:'reseller_com',name:'reseller_com'},
            {data:'service',name:'service'},
            @else
              {data:'own_com',name:'own_com'},
              {data:'sub_profit',name:'sub_profit'},
              {data:'sub_reseller_com',name:'sub_reseller_com'},
            @endif
            {data:'invoice',name:'invoice'}


  ],

  buttons: ['excel'],

  drawCallback: function () {
            var api = this.api();

      @if(Auth::user()->role == 'admin')
        $( api.column( 5 ).footer() ).html(
          total_cost
            );
            $( api.column( 6 ).footer() ).html(
          total_admin_profit
            );

            $( api.column( 7 ).footer() ).html(
          total_reseller_profit

            );

            $( api.column( 8 ).footer() ).html(
              total_service_charge

            );
        @elseif(Auth::user()->role == 'reseller')
        $( api.column( 4 ).footer() ).html(
          total_cost
            );
            $( api.column( 5 ).footer() ).html(
          total_reseller_profit
            );

            $( api.column( 6 ).footer() ).html(
              total_service_charge
            );
        @else
        $( api.column( 5 ).footer() ).html(
          total_cost
            );
            $( api.column( 6 ).footer() ).html(
          total_own_profit
            );

            $( api.column( 7 ).footer() ).html(
              total_sub_profit
            );

            $( api.column( 8 ).footer() ).html(
              total_reseller_profit
            );
        @endif

            //datatable_sum(api, false);
        }


    });
    function exportToExcel() {
  // Retrieve the data from the server using AJAX
  $.ajax({
    url: '/data',
    type: 'POST',
    data: {
      draw: 1, // This should match the current draw value of the datatable
      start: 0, // This should be the starting index of the current page
      length: -1, // This should retrieve all the data (i.e. no pagination)
      // Add any additional parameters required by your server-side script
    },
    success: function(data) {
      // Convert the data to an array of arrays for use with xlsx
      var dataArray = [];
      var columns = Object.keys(data.data[0]);
      dataArray.push(columns);
      for (var i = 0; i < data.data.length; i++) {
        var row = [];
        for (var j = 0; j < columns.length; j++) {
          row.push(data.data[i][columns[j]]);
        }
        dataArray.push(row);
      }
      // Create the workbook and worksheet using xlsx
      var wb = XLSX.utils.book_new();
      var ws = XLSX.utils.aoa_to_sheet(dataArray);
      XLSX.utils.book_append_sheet(wb, ws, 'Data');
      // Download the Excel file
      XLSX.writeFile(wb, 'data.xlsx');
    }
  });
}



}
</script>
@endsection
