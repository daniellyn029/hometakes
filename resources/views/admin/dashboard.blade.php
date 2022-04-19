@extends('main.index')

@section('css')
<style>
    .small-box {
        cursor: pointer;
    }
    .small-box-footer {
        visibility: hidden;
    }
    .bg-red {
        border-bottom: 6px solid #ca4735;
        border-right: 4px solid #ca4735;
    }
    .bg-red:hover {
        box-shadow: 0 12px 50px 0 rgba(0, 0, 0, 0.34), 0 17px 50px 0 rgba(0, 0, 0, 0.39);
        border-bottom: 1px solid #ca4735;
        border-right: 6px solid #ca4735;
    }
    .bg-red, .callout.callout-danger, .alert-danger, .alert-error, .label-danger, .modal-danger .modal-body {
        background-color: #dd4b39 !important;
    }
    .bg-yellow {
        border-bottom: 6px solid #df8f10;
        border-right: 4px solid #df8f10;
    }
    .bg-yellow:hover {
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.34), 0 17px 50px 0 rgba(0, 0, 0, 0.39);
        border-bottom: 1px solid #df8f10;
        border-right: 6px solid #df8f10;
    }
    .bg-yellow, .callout.callout-warning, .alert-warning, .label-warning, .modal-warning .modal-body {
        background-color: #f39c12 !important;
    }
    .bg-aqua {
        border-bottom: 6px solid #01a5ce;
        border-right: 4px solid #01a5ce;
    }
    .bg-aqua:hover {
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.34), 0 17px 50px 0 rgba(0, 0, 0, 0.39);
        border-bottom: 1px solid #01a5ce;
        border-right: 6px solid #01a5ce;
    }
    .bg-aqua, .callout.callout-info, .alert-info, .label-info, .modal-info .modal-body {
        background-color: #00c0ef !important;
    }
    .bg-green {
        border-bottom: 6px solid #02884c;
        border-right: 4px solid #02884c;
    }

    .bg-green:hover {
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.34), 0 17px 50px 0 rgba(0, 0, 0, 0.39);
        /* border-bottom: 1px solid #02884c; */
        border-right: 6px solid #02884c;
    }
    .bg-primary {
        border-bottom: 6px solid #2b6699;
        border-right: 4px solid #2b6699;
    }

    .bg-primary:hover {
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.34), 0 17px 50px 0 rgba(0, 0, 0, 0.39);
        border-bottom: 1px solid #2b6699;
        border-right: 6px solid #2b6699;
    }
    .bg-teal {
        border-bottom: 6px solid #2fa5a5;
        border-right: 4px solid #2fa5a5;
        background-color: #39cccc !important;
    }
    /* .bg-teal {
        background-color: #39cccc !important;
    } */

    .bg-teal:hover {
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.34), 0 17px 50px 0 rgba(0, 0, 0, 0.39);
        border-bottom: 1px solid #2fa5a5;
        border-right: 6px solid #2fa5a5;
    }
    .bg-green, .callout.callout-success, .alert-success, .label-success, .modal-success .modal-body {
        background-color: #00a65a !important;
    }
    .mar5{
        margin: 10px 0px 0px 0px;
    }
    .border{
        border-radius: 7px;
    }
</style>

@endsection

@section('content')
    <section stlye="height:auto">
        <div class="row">
            <div class="col-md-3 mar5">
                <div class="small-box bg-red border">
                    <div class="inner txt-white">
                        <h3 style="font-size: 30px !important">Pending Tours</h3>
                        <h3 style="font-size: 28px !important">{{$pending_tours[0]->row_counts}}</h3>
                    </div>
                    {{-- <div class="icon" style="top: 5px !important">&nbsp;</div> --}}
                    <span class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </span>
                </div>
            </div>  
            <div class="col-md-3 mar5">
                <div class="small-box bg-yellow border">
                    <div class="inner txt-white">
                        <h3 style="font-size: 30px !important">Completed Tours</h3>
                        <h3 style="font-size: 28px !important">{{$completed_tours[0]->row_counts}}</h3>
                    </div>
                    {{-- <div class="icon" style="top: 5px !important">&nbsp;</div> --}}
                    <span class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </span>
                </div>
            </div>
            <div class="col-md-3 mar5">
                <div class="small-box bg-aqua border">
                    <div class="inner txt-white">
                        <h3 style="font-size: 30px !important">Users</h3>
                        <h3 style="font-size: 28px !important">{{$users[0]->row_counts}}</h3>
                    </div>
                    {{-- <div class="icon" style="top: 5px !important">&nbsp;</div> --}}
                    <span class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </span>
                </div>
            </div>
            
            <div class="col-md-3 mar5">
                <div class="small-box bg-green border">
                    <div class="inner txt-white">
                        <h3 style="font-size: 30px !important">Pending Users</h3>
                        <h3 style="font-size: 28px !important">{{$pending_users[0]->row_counts}}</h3>
                    </div>
                    {{-- <div class="icon" style="top: 5px !important">&nbsp;</div> --}}
                    <span class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </span>
                </div>
            </div>
            <div class="col-md-3 mar5">
                <div class="small-box bg-primary border">
                    <div class="inner txt-white">
                        <h3 style="font-size: 30px !important">Town Tour's</h3>
                        <h3 style="font-size: 28px !important">{{$town_tours[0]->row_counts}}</h3>
                    </div>
                    {{-- <div class="icon" style="top: 5px !important">&nbsp;</div> --}}
                    <span class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </span>
                </div>
            </div>
            <div class="col-md-3 mar5">
                <div class="small-box bg-teal border">
                    <div class="inner txt-white">
                        <h3 style="font-size: 30px !important">Amenities Tour's</h3>
                        <h3 style="font-size: 28px !important">{{$amenities_tours[0]->row_counts}}</h3>
                    </div>
                    {{-- <div class="icon" style="top: 5px !important">&nbsp;</div> --}}
                    <span class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                    </span>
                </div>
            </div> 
        </div>



        {{-- <div class="container">
            <div class="row">
                <canvas id="myChart" width="400" height="400"></canvas>
            </div>
        </div> --}}

    </section>    
@endsection

{{-- @section('script')
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    </script>
@endsection --}}

