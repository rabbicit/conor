@extends('layouts.plans')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
    <div class="card" style="width:24rem;">
        <div class="card-body">
            <form action="{{route('store.plan')}}" method="post">
                @csrf 
                <div class="form-group">
                    <label for="plan name">Plan Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Plan Name">
                </div>
                <div class="form-group">
                    <label for="cost">Cost:</label>
                    <input type="text" class="form-control" name="cost" placeholder="Enter Cost">
                </div>
                <div class="form-group">
                    <label for="upload">Max Items:</label>
                    <input type="text" class="form-control" name="max_upload" placeholder="Max upload items">
                </div>
                <div class="form-group">
                    <label for="cost">Plan Description:</label>
                    <input type="text" class="form-control" name="description" placeholder="Enter Description">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection