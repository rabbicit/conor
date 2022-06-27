<div class="dashboard-area">
    <div class="row">
        <div class="col-md-12">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
            @endif
        </div>
        @php 
        $planID = '';
        @endphp
        @if(!empty($dataActive->data))
        <div class="col-xl-6 grid-margin">
          
          @foreach($dataActive->data as $key => $value)
          @php 
            $pname = \App\Models\Plan::where('stripe_plan', $value->plan->id)->first();
            $planname = $pname->name;
            $planID = $pname->stripe_plan;
          @endphp
          <div class="card stretch-card mb-3">
            <div class="card-body d-flex flex-wrap justify-content-between">
              <div>
                <h4 class="font-weight-semibold mb-1 text-black"> Current Membership </h4>
                <h6 class="text-muted">{{$planname}}</h6>
              </div>
              <h3 class="text-success font-weight-bold">${{ $value->plan->amount/100 }} <small>/ {{ $value->plan->interval }}</small></h3>
            </div>
          </div>
          <div class="card stretch-card mb-3">
            <div class="card-body d-flex flex-wrap justify-content-between">
              <div>
                <h4 class="font-weight-semibold mb-1 text-black"> Next Renew date</h4>
                <h6 class="text-muted">{{ date('d-M-Y',$value->current_period_end) }}</h6>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      <div class="col-xl-6">

        <div class="card stretch-card mb-3">
            <div class="card-body d-flex flex-wrap justify-content-between">
              <div>
                <h4 class="font-weight-semibold mb-3 text-black"> Cancel Membership </h4>
                <form class="forms-sample" action="{{route('subscription.cancel')}}" method="post">
                    @csrf
                    <button type="submit" class='btn btn-danger me-2'>Cancel</button>
                </form>
              </div>
            </div>
          </div>
        <div class="card stretch-card mb-3">
            <div class="card-body flex-wrap justify-content-between">
              <div>
                <h4 class="font-weight-semibold mb-3 text-black">Change Membership </h4>
                <form class="forms-sample" action="{{route('subscription.update')}}" method="post">
                    @csrf
                    <select name="package" class="form-control mb-3" id="package">
                        @if($plans)
                            @foreach($plans as $plan)
                                <option value="{{$plan->stripe_plan}}" @if($plan->stripe_plan == $planID) selected @endif>{{$plan->name}}  @if($plan->stripe_plan == $planID)  - Current membership @endif</option>
                            @endforeach
                        @endif
                    </select>
                    <button type="submit" class='btn btn-primary me-2'>Apply</button>
                </form>
              </div>
            </div>
          </div>
      </div>

      @else 
        <div class="card stretch-card mb-3">
            <div class="card-body flex-wrap justify-content-between">
                <h4 class="font-weight-semibold mb-3 text-black">Membership </h4>
                <a href="{{route('start')}}" class="btn btn-primary me-2">Start New Membership</a>
            </div>
        </div>
      @endif
    </div>
</div>