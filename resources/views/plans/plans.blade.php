@extends('layouts.plans')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Packages
                    <a class="btn btn-info btn-lg btn-block" href="{{route('create.plan')}}">Create new Package</a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($plans)
                                @foreach($plans as $plan)
                                <tr>
                                    <td>{{$plan->id}}</td>
                                    <td>{{ $plan->name }}</td>
                                    <td>${{ number_format($plan->cost, 2) }} / year</td>
                                    <td>{{ $plan->description }}</td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .card-header {
	display: flex;
	justify-content: space-between;
	align-items: center;
}
</style>
@endsection