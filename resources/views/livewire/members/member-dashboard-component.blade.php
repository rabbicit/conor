<div class="dashboard-area">
    <div class="row">
        <div class="col-xl-4 grid-margin">
          @if($albums->image)
          <div class="card card-stat stretch-card mb-3" style="background-image:url({{asset('images/albums')}}/{{$albums->image}})">
          @else 
          <div class="card card-stat stretch-card mb-3">
          @endif
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div class="text-white">
                  <h3 class="font-weight-bold mb-0">{{$tracks->count()}}</h3>
                  <h6>Total Tracks</h6>
                  @if($albums->name)
                  <div class="badge badge-danger">{{$albums->name}}</div>
                  @else 
                  <div class="badge badge-danger">No Name</div>
                  @endif
                </div>
                <div class="flot-bar-wrapper">
                  <div id="column-chart" class="flot-chart" style="padding: 0px;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 107px; height: 88px;" width="107" height="88"></canvas><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 107px; height: 88px;" width="107" height="88"></canvas></div>
                </div>
              </div>
            </div>
          </div>
          @if(!empty($dataActive))
          @foreach($dataActive->data as $key => $value)
          @php 
            $pname = \App\Models\Plan::where('stripe_plan', $value->plan->id)->first();
            $planname = $pname->name;
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
        @endif
      </div>
        <div class="col-xl-8 stretch-card grid-margin">
          <div class="card">
            <div class="card-body pb-0">
              <h4 class="card-title mb-0">Latest Tracks</h4>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table custom-table text-dark">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Price</th>
                      <th>File Name</th>
                      <th>Date</th>
                      <th>Size</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($tracks)
                    @foreach($tracks as $track)
                    @php 
                      $size = Illuminate\Support\Facades\Storage::size('music/'.$track->file_name);
                      $size = round($size / 1024 / 1024, 1)
                    @endphp
                    <tr>
                       <td>{{$track->name}}</td>
                       <td>${{$track->price}}</td>
                       <td>{{$track->file_name}}</td>
                      <td>{{ date('d-M-Y', strtotime($track->created_at)) }}</td>
                      <td>{{$size}}MB</td>
                    </tr>
                    @endforeach
                    @endif
                  </tbody>
                </table>
              </div>
              <a class="text-black font-13 d-block pt-2 pb-2 pb-lg-0 font-weight-bold ps-4" href="{{route('member.tracks')}}">Show more</a>
            </div>
          </div>
        </div>
      </div>
</div>