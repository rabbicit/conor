@extends('layouts.mhistory')
@section('content')
<div class="all-tracks">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="card-areas">
                <h4 class="card-title">Balance History</h4>
            </div>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Invoice number</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Email</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Next Renew</th>
                    <th>Status</th>
                    <th>Download</th>
                  </tr>
                </thead>
                {{-- {{ dd($invoices) }} --}}
                {{-- {{ dd($activity) }} --}}
                {{-- {{ dd($balance) }} --}}
                <tbody>
                    @if($invoices)
                    @foreach($invoices->data as $key => $value)
                    {{-- {{dd($value)}} --}}
                    <tr>
                        <td>{{$value->number}}</td>
                        <td>{{$value->customer_name}}</td>
                        <td>{{$value->lines->data[0]->description}}</td>
                        <td>${{ $value->total/100 }}</td>
                        <td>{{$value->customer_email}}</td>
                        <td>{{date('d-M-Y',$value->period_start)}}</td>
                        <td>{{date('d-M-Y',$value->lines->data[0]->period->end)}}</td>
                        <td>{{date('d-M-Y',$value->lines->data[0]->period->end)}}</td>
                        <td>{{$value->status}}</td>
                        <td><a target="_blank" href="{{$value->invoice_pdf}}">Download</a></td>
                    </tr>
                    @endforeach
                    @else 
                    <tr>
                        <td>No Item found.</td>
                    </tr>
                    @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection