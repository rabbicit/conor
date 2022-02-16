<div class="admin-dashboard">

    <div class="row">
        <div class="col-xl-4 grid-margin">
          <div class="card card-stat stretch-card mb-3">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div class="text-white">
                  <h3 class="font-weight-bold mb-0">$168.90</h3>
                  <h6>This Month</h6>
                  <div class="badge badge-danger">23%</div>
                </div>
                <div class="flot-bar-wrapper">
                  <div id="column-chart" class="flot-chart"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="card stretch-card mb-3">
            <div class="card-body d-flex flex-wrap justify-content-between">
              <div>
                <h4 class="font-weight-semibold mb-1 text-black"> Member Profit </h4>
                <h6 class="text-muted">Average Weekly Profit</h6>
              </div>
              <h3 class="text-success font-weight-bold">+168.900</h3>
            </div>
          </div>
          <div class="card stretch-card mb-3">
            <div class="card-body d-flex flex-wrap justify-content-between">
              <div>
                <h4 class="font-weight-semibold mb-1 text-black"> Total Profit </h4>
                <h6 class="text-muted">Weekly Customer Orders</h6>
              </div>
              <h3 class="text-success font-weight-bold">+6890.00</h3>
            </div>
          </div>
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
              <a class="text-black font-13 d-block pt-2 pb-2 pb-lg-0 font-weight-bold ps-4" href="{{route('admin.tracks')}}">Show more</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-xl-4 stretch-card grid-margin">
          <div class="card">
            <div class="card-body">
              <div class="card-title mb-2">Upcoming events (3)</div>
              <h3 class="mb-3">23 september 2019</h3>
              <div class="d-flex border-bottom border-top py-3">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" checked /></label>
                </div>
                <div class="ps-2">
                  <span class="font-12 text-muted">Tue, Mar 5, 9.30am</span>
                  <p class="m-0 text-black"> Hey I attached some new PSD files… </p>
                </div>
              </div>
              <div class="d-flex border-bottom py-3">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" /></label>
                </div>
                <div class="ps-2">
                  <span class="font-12 text-muted">Mon, Mar 11, 4.30 PM</span>
                  <p class="m-0 text-black"> Discuss performance with manager </p>
                </div>
              </div>
              <div class="d-flex border-bottom py-3">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" /></label>
                </div>
                <div class="ps-2">
                  <span class="font-12 text-muted">Tue, Mar 5, 9.30am</span>
                  <p class="m-0 text-black">Meeting with Alisa</p>
                </div>
              </div>
              <div class="d-flex pt-3">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" /></label>
                </div>
                <div class="ps-2">
                  <span class="font-12 text-muted">Mon, Mar 11, 4.30 PM</span>
                  <p class="m-0 text-black"> Hey I attached some new PSD files… </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4 stretch-card grid-margin">
          <div class="card">
            <div class="card-body">
              <div class="d-flex border-bottom mb-4 pb-2">
                <div class="hexagon">
                  <div class="hex-mid hexagon-warning">
                    <i class="mdi mdi-clock-outline"></i>
                  </div>
                </div>
                <div class="ps-4">
                  <h4 class="font-weight-bold text-warning mb-0"> 12.45 </h4>
                  <h6 class="text-muted">Schedule Meeting</h6>
                </div>
              </div>
              <div class="d-flex border-bottom mb-4 pb-2">
                <div class="hexagon">
                  <div class="hex-mid hexagon-danger">
                    <i class="mdi mdi-account-outline"></i>
                  </div>
                </div>
                <div class="ps-4">
                  <h4 class="font-weight-bold text-danger mb-0">34568</h4>
                  <h6 class="text-muted">Profile visits</h6>
                </div>
              </div>
              <div class="d-flex border-bottom mb-4 pb-2">
                <div class="hexagon">
                  <div class="hex-mid hexagon-success">
                    <i class="mdi mdi-laptop-chromebook"></i>
                  </div>
                </div>
                <div class="ps-4">
                  <h4 class="font-weight-bold text-success mb-0"> 33.50% </h4>
                  <h6 class="text-muted">Bounce Rate</h6>
                </div>
              </div>
              <div class="d-flex border-bottom mb-4 pb-2">
                <div class="hexagon">
                  <div class="hex-mid hexagon-info">
                    <i class="mdi mdi-clock-outline"></i>
                  </div>
                </div>
                <div class="ps-4">
                  <h4 class="font-weight-bold text-info mb-0">12.45</h4>
                  <h6 class="text-muted">Schedule Meeting</h6>
                </div>
              </div>
              <div class="d-flex">
                <div class="hexagon">
                  <div class="hex-mid hexagon-primary">
                    <i class="mdi mdi-timer-sand"></i>
                  </div>
                </div>
                <div class="ps-4">
                  <h4 class="font-weight-bold text-primary mb-0"> 12.45 </h4>
                  <h6 class="text-muted mb-0">Browser Usage</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-xl-4 stretch-card grid-margin">
          <div class="card color-card-wrapper">
            <div class="card-body">
              <img class="img-fluid card-top-img w-100" src="{{asset('dashboard/images/dashboard/img_5.jpg')}}" alt="" />
              <div class="d-flex flex-wrap justify-content-around color-card-outer">
                <div class="col-6 p-0 mb-4">
                  <div class="color-card primary m-auto">
                    <i class="mdi mdi-clock-outline"></i>
                    <p class="font-weight-semibold mb-0">Delivered</p>
                    <span class="small">15 Packages</span>
                  </div>
                </div>
                <div class="col-6 p-0 mb-4">
                  <div class="color-card bg-success m-auto">
                    <i class="mdi mdi-tshirt-crew"></i>
                    <p class="font-weight-semibold mb-0">Ordered</p>
                    <span class="small">72 Items</span>
                  </div>
                </div>
                <div class="col-6 p-0">
                  <div class="color-card bg-info m-auto">
                    <i class="mdi mdi-trophy-outline"></i>
                    <p class="font-weight-semibold mb-0">Arrived</p>
                    <span class="small">34 Upgraded</span>
                  </div>
                </div>
                <div class="col-6 p-0">
                  <div class="color-card bg-danger m-auto">
                    <i class="mdi mdi-presentation"></i>
                    <p class="font-weight-semibold mb-0">Reported</p>
                    <span class="small">72 Support</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>