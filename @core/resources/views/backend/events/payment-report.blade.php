@extends('backend.admin-master')
@section('site-title')
    {{__('Payment Report')}}
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-12 mt-5">
                @include('backend.partials.message')
                @if(!empty($error_msg))
                    <div class="alert alert-danger">{{$error_msg}}</div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__("Payment Report")}}</h4>
                        <form action="{{route('admin.event.payment.report')}}" method="get" enctype="multipart/form-data" id="report_generate_form">
                            <input type="hidden" name="page" value="1">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="start_date">{{__('Start Date')}}</label>
                                        <input type="date" name="start_date" value="{{$start_date}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="end_date">{{__('End Date')}}</label>
                                        <input type="date" name="end_date" value="{{$end_date}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="payment_status">{{__('Payment Status')}}</label>
                                        <select name="payment_status" id="order_status" class="form-control">
                                            <option value="">{{__('All')}}</option>
                                            <option @if( $payment_status == 'pending') selected @endif value="pending">{{__('Pending')}}</option>
                                            <option @if( $payment_status == 'complete') selected @endif value="complete">{{__('Complete')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label for="items">{{__('Items')}}</label>
                                        <select name="items" id="items" class="form-control">
                                            <option @if( $items == '10') selected @endif value="10">{{__('10')}}</option>
                                            <option @if( $items == '20') selected @endif value="20">{{__('20')}}</option>
                                            <option @if( $items == '50') selected @endif value="50">{{__('50')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <button id="search" type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Submit')}}</button>
                                    @if(!empty($order_data) && count($order_data) > 0)
                                        <button type="button" class="btn btn-secondary mt-4 pr-4 pl-4" id="download_as_csv"><i class="fas fa-download"></i> {{__('CSV')}}</button>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @if(!empty($order_data))
                    <div class="card">
                        <div class="card-body">
                            @if(count($order_data) > 0)
                                <div class="table-wrap">
                                    <table class="table table-bordered">
                                        <thead>
                                        <th>{{__('Attendance ID')}}</th>
                                        <th>{{__('Billing Name')}}</th>
                                        <th>{{__('Billing Email')}}</th>
                                        <th>{{__('Event Name')}}</th>
                                        <th>{{__('Amount')}}</th>
                                        <th>{{__('Payment Processor')}}</th>
                                        <th>{{__('Payment Status')}}</th>
                                        <th>{{__('Transaction ID')}}</th>
                                        <th>{{__('Date')}}</th>
                                        </thead>
                                        <tbody>
                                        @foreach($order_data as $data)
                                            <tr>
                                                <td>{{$data->attendance_id}}</td>
                                                <td>{{$data->name}}</td>
                                                <td>{{$data->email}}</td>
                                                <td>{{$data->event_name}}</td>
                                                <td>{{amount_with_currency_symbol($data->event_cost)}}</td>
                                                <td><strong>{{ucwords(str_replace('_',' ',$data->package_gateway))}}</strong></td>
                                                <td>
                                                    @if($data->status == 'pending')
                                                        <span class="alert alert-warning text-capitalize">{{$data->status}}</span>
                                                    @else
                                                        <span class="alert alert-success text-capitalize">{{$data->status}}</span>
                                                    @endif
                                                </td>
                                                <td>{{$data->transaction_id}}</td>
                                                <td>{{date_format($data->created_at,'d M Y')}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="pagination-wrapper report-pagination">
                                    {!! $order_data->links() !!}
                                </div>
                            @else
                                <div class="alert alert-warning">{{__('No Item Found')}}</div>
                            @endif
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        (function($){
            "use strict";
            $(document).ready(function (){
                <x-btn.search/>
                $(document).on('click','.report-pagination nav ul li a',function (e){
                    e.preventDefault();
                    var el = $(this);
                    var href = el.attr('href');
                    var match = href.match(/(:?=)\d+/);
                    var pageNumber = match != null ? match[0].replace('=',' ') : '';
                    $('input[name="page"]').val(pageNumber.trim());
                    $('#report_generate_form').trigger('submit');
                });

                $(document).on('click','#download_as_csv',function (e){
                    e.preventDefault();
                    exportTableToCSV('payment-logs-report.csv');
                });

                function downloadCSV(csv, filename) {
                    var csvFile;
                    var downloadLink;

                    // CSV file
                    csvFile = new Blob([csv], {type: "text/csv"});

                    // Download link
                    downloadLink = document.createElement("a");

                    // File name
                    downloadLink.download = filename;

                    // Create a link to the file
                    downloadLink.href = window.URL.createObjectURL(csvFile);

                    // Hide download link
                    downloadLink.style.display = "none";

                    // Add the link to DOM
                    document.body.appendChild(downloadLink);

                    // Click download link
                    downloadLink.dispatchEvent(new MouseEvent('click'));
                }

                function exportTableToCSV(filename) {
                    var csv = [];
                    var rows = document.querySelectorAll("table tr");

                    for (var i = 0; i < rows.length; i++) {
                        var row = [], cols = rows[i].querySelectorAll("td, th");

                        for (var j = 0; j < cols.length; j++)
                            row.push(cols[j].innerText);

                        csv.push(row.join(","));
                    }

                    // Download CSV file
                    downloadCSV(csv.join("\n"), filename);
                }

            });

        })(jQuery);
    </script>
@endsection
