@extends('front.layout.master')
@section('header')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bus</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('css/admin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flixbus.css') }}">

    <link rel="icon" href="{{ asset('images/jm-transparent-logo.png') }}">
    <link rel="icon" href="https://jmnation.com/images/jm-transparent-logo.png">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <style>
        .ticket-info {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            padding: 20px;
            border-radius: 5px;
            width: 100%;
        }

        .ticket-info .modal-title {
            margin-bottom: 10px;
        }

        .ticket-info h5 {
            font-size: 18px;
            font-weight: bold;
        }

        .top-info,
        .bottom-info {
            display: flex;
            justify-content: space-between;
        }

        .top-info {
            margin-bottom: 20px;
        }

    </style>
</head>

@endsection

@section('content')

<div class="content-wrapper">


    <section class="content">
        <div class="container-fluid">
            <div class="search-filter">
                <div class="input-wrapper">
                    <label for="fromDropdown">From:</label>
                    <select id="fromDropdown" class="select2-dropdown">
                        <option value="" selected disabled>Select from</option>
                        @foreach($cities as $city)
                            <option value="{{ $city->city_id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-wrapper">
                    <label for="destinationDropdown">Destination:</label>
                    <select id="destinationDropdown" class="select2-dropdown">
                        <option value="" selected disabled>Select destination</option>
                        @foreach($cities as $city)
                            <option value="{{ $city->city_id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-wrapper">
                    <label for="departureDate">Departure Date:</label>
                    <input type="text" id="departureDate" class="datepicker" placeholder="Select">
                </div>
                <div class="input-wrapper">
                    <label for="adultCount">Adults:</label>
                    <select id="adultCount" class="select2-dropdown">
                        <option value="1">1 Adult</option>
                        <option value="2">2 Adults</option>
                        <option value="3">3 Adult</option>
                        <option value="4">4 Adults</option>
                        <option value="5">5 Adult</option>
                    </select>
                </div>

                <div class="input-wrapper">
                    <label for="childCount">Children:</label>
                    <select id="childCount" class="select2-dropdown">
                        <option value="0">No Children</option>
                        <option value="1">1 Child</option>
                        <option value="2">2 Children</option>
                        <option value="3">3 Children</option>
                        <option value="4">4 Children</option>
                        <option value="5">5 Children</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <button class="search-button">Search</button>
            </div>

            <div>
                <div class="bus-list">

                </div>
            </div>

        </div>


        <div class="modal fade" id="ticketForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="ticket-info">
                            <div id="ticketInfoContainer"></div>
                        </div>

                    </div>
                    <div class="modal-body">
                        <form id="passengerForm">
                            <div id="passengerContainer"></div>
                            <input type="hidden" id="trip_uid" name="trip_uid">
                            <input type="hidden" id="adult" name="adult">
                            <input type="hidden" id="children" name="children">
                            <input type="hidden" id="departure_date" name="departure_date">
                            <input type="hidden" id="ticket_price" name="ticket_price">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="hideForm()">Close</button>
                        <button type="button" class="btn btn-primary" onclick="submitFormData()">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="loading-overlay" class="overlay">
                <div class="loader"></div>
            </div>
</div>

@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

@endsection


@section('js')
<script>
    var passengerContainer = $('#passengerContainer');
    var ticketInfoContainer = $('#ticketInfoContainer');
    const loadingOverlay = document.getElementById('loading-overlay');

    function showTicketForm(uid,from,to,price) {

        $("#trip_uid").val(uid)
        $("#adult").val(parseInt($('#adultCount').val()))
        $("#children").val(parseInt($('#childCount').val()))
        $("#departure_date").val( $('#departureDate').val())
        $("#ticket_price").val(price);
        var adultCount = parseInt($('#adultCount').val());
        var childCount = parseInt($('#childCount').val());
        var totalPassenger = adultCount+childCount

        passengerContainer.empty();
        ticketInfoContainer.empty();

        var ticketInfo =`
    <div class="top-info">
        <h5 class="modal-title" id="fromCity">From:${from} </h5>
        <h5 class="modal-title" id="ticketCount">Total Ticket: ${totalPassenger}</h5>
    </div>
    <div class="bottom-info">
        <h5 class="modal-title" id="toCity">To: ${to}</h5>
        <h5 class="modal-title" id="ticketPrice">Ticket Price: €${price} * ${totalPassenger} = €${price * totalPassenger}</h5>
    </div>
`;
ticketInfoContainer.append(ticketInfo);
        for (var j = 1; j <= adultCount; j++) {
            generatePassengerForm(j, 'adult');
        }
        for (var j = 1; j <= childCount; j++) {
            generatePassengerForm(j, 'child');
        }
        var passengerEmailHtml = '<div class="form-group">' +
            '<label for="email">Email</label>' +
            '<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">' +
            '</div>';
        passengerContainer.append(passengerEmailHtml);
        $("#ticketForm").modal('show')

    }

    function submitFormData() {
    var formData = new FormData($('#passengerForm')[0]);
    loadingOverlay.style.display = 'flex';
    $.ajax({
        type: 'POST',
        url: '/reservation',
        data: formData,
        processData: false,  // Important!
        contentType: false,  // Important!
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         },
        success: function (response) {
            // handle success
            loadingOverlay.style.display = 'none';
            if(response.code == 200){
                alert('Ticket purchase successfully');
                $("#ticketForm").modal('hide')
                window.location.href = '/bus-ticket-list';
            }
            else{
                alert("Error occurred while purchasing ticket");
            }
        },
        error: function (response) {
            // handle error
            console.log(response);
        }
    });
}


    function hideForm() {

        $("#ticketForm").modal('hide')
    }

    function generatePassengerForm(index, passengerType) {
    var passengerHtml = '<div class="form-group">' +
        '<label for="firstName' + index + '">Passenger ' + index + ' First Name</label>' +
        '<input type="text" class="form-control" name="passengers[' + (index - 1) + '][firstname]" id="firstName' + index +
        '" placeholder="Enter first name">' +
        '</div>' +
        '<div class="form-group">' +
        '<label for="lastName' + index + '">Passenger ' + index + ' Last Name</label>' +
        '<input type="text" class="form-control" name="passengers[' + (index - 1) + '][lastname]" id="lastName' + index +
        '" placeholder="Enter last name">' +
        '</div>' +
        '<input type="hidden" name="passengers[' + (index - 1) + '][type]" value="' + passengerType + '">';

    passengerContainer.append(passengerHtml);
}



    $(document).ready(function () {
        // Initialize Select2 for dropdowns
        $('.select2-dropdown').select2({
            placeholder: 'Select'
        });

        // Initialize Datepicker for departure date
        $('#departureDate').datepicker({
            dateFormat: 'dd.mm.yy'
        });
        //showTicketForm


        $('.search-button2').on('click', function () {

        })


        // Search button click event
        $('.search-button').on('click', function () {
            // Retrieve the search parameters
            var from = $('#fromDropdown').val();
            var destination = $('#destinationDropdown').val();
            var departureDate = $('#departureDate').val();
            var adultCount = $('#adultCount').val();
            var childCount = $('#childCount').val();
            loadingOverlay.style.display = 'flex';
            // Make the AJAX request
            $.ajax({
                url: '/api/search-trip',
                type: 'GET',
                data: {
                    from: from,
                    destination: destination,
                    departureDate: departureDate,
                    adultCount: adultCount,
                    childCount: childCount
                },
                success: function (response) {
                    // Clear the existing bus-list container
                    $('.bus-list').empty();

                    // Iterate over the trips in the response
                    response.trips.forEach(function (trip) {
                        var from = trip.from.name;
                        var to = trip.to.name;

                        // Iterate over the items within each trip
                        trip.items.forEach(function (item) {
                            var departureTimestamp = item.departure
                                .timestamp;
                            var arrivalTimestamp = item.arrival.timestamp;
                            var seatsAvailable = item.available.seats;
                            var price = item.price_average;
                            var uid = item.uid;

                            // Format the departure and arrival times
                            var departureTime = new Date(
                                departureTimestamp *
                                1000).toLocaleTimeString('en-US', {
                                hour: 'numeric',
                                minute: 'numeric',
                                hour12: true
                            });
                            var arrivalTime = new Date(arrivalTimestamp *
                                1000).toLocaleTimeString('en-US', {
                                hour: 'numeric',
                                minute: 'numeric',
                                hour12: true
                            });

                            // Create the dynamic HTML for each trip item
                            var listItemHtml = `
                <div class="row">
                    <div class="col-12">
                        <div class="search_search-result-item__QMkfR undefined">
                            <ul class="search_result-content__bPyB1">
                                <li>
                                    <div>
                                        <div class="search_points__lYyyV">
                                            <p>Starting Point: <span>${from}</span></p>
                                            <p>End Point: <span>${to}</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="search_item-content__ydL0p">
                                        <h6>Departure time</h6>
                                        <p>${departureTime}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="search_item-content__ydL0p">
                                        <h6>Arrival time</h6>
                                        <p>${arrivalTime}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="search_item-content__ydL0p">
                                        <h6>Seats Available</h6>
                                        <p>${seatsAvailable}</p>
                                    </div>
                                </li>
                                <li class="search_price-detail-action__gb7Rh">
    <h3 class="search_price__lHdmm search_purple__ypyVN">€${price}</h3>
    <div class="search_detail-action__RxciC"><button onclick="showTicketForm ('${uid}','${from}','${to}','${price}')" class="btn btn-primary" style="font-family: Montserrat, Bangla600, sans-serif;">Continue</button></div>
</li>

                            </ul>
                        </div>
                    </div>
                </div>
            `;

                            // Append the dynamic HTML to the bus-list container
                            $('.bus-list').append(listItemHtml);
                        });
                    });
                    loadingOverlay.style.display = 'none';
                },


                error: function (error) {
                    loadingOverlay.style.display = 'none';
                    console.error(error);
                }
            });
        });

    });

</script>
@endsection
