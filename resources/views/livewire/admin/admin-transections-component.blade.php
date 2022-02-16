<div class="user-details">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Subscriptions</h4>
            @if(Session::has('message'))
                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
            @endif
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Package</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Starting Date</th>
                    <th>Ending Date</th>
                  </tr>
                </thead>
                <tbody>
                    @if($subscriptions)
                        @foreach($subscriptions as $subscription)
                        @php 
                            $stripe = new \Stripe\StripeClient(env("STRIPE_SECRET"));
                            $user =  \App\Models\User::where('id', $subscription->user_id)->first();
                            $dataActive = $stripe->subscriptions->all(['customer' => $user->stripe_id]);
                        @endphp
                        @foreach($dataActive->data as $key => $value)
                        @php 
                            $pname = \App\Models\Plan::where('stripe_plan', $value->plan->id)->first();
                            $planname = $pname->name;
                        @endphp
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$planname}}</td>
                            <td>${{ $value->plan->amount/100 }} / {{ $value->plan->interval }}</td>
                            <td>{{ $subscription->stripe_status }}</td>
                            <td>{{ date('d-M-Y',$value->current_period_start) }}</td>
                            <td>{{ date('d-M-Y',$value->current_period_end) }}</td>
                        </tr>
                        @endforeach
                  @endforeach
                  @endif
                </tbody>
              </table>
              <div class="pagination">
                {{$subscriptions->links()}}
              </div>
            </div>
          </div>
        </div>
      </div>
</div>