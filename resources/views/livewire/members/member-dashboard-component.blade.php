<div class="dashboard-area">
    <div class="row">
        <div class="col-xl-4 grid-margin">
          <div class="card card-stat stretch-card mb-3">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div class="text-white">
                  <h3 class="font-weight-bold mb-0">10</h3>
                  <h6>Total Tracks</h6>
                  <div class="badge badge-danger">40%</div>
                </div>
                <div class="flot-bar-wrapper">
                  <div id="column-chart" class="flot-chart" style="padding: 0px;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 107px; height: 88px;" width="107" height="88"></canvas><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 107px; height: 88px;" width="107" height="88"></canvas></div>
                </div>
              </div>
            </div>
          </div>
          <div class="card stretch-card mb-3">
            <div class="card-body d-flex flex-wrap justify-content-between">
              <div>
                <h4 class="font-weight-semibold mb-1 text-black"> Current Membership </h4>
                <h6 class="text-muted">Enterprise</h6>
              </div>
              <h3 class="text-success font-weight-bold">$19.99 <small>/ Year</small></h3>
            </div>
          </div>
          <div class="card stretch-card mb-3">
            <div class="card-body d-flex flex-wrap justify-content-between">
              <div>
                <h4 class="font-weight-semibold mb-1 text-black"> Next Renew date</h4>
                <h6 class="text-muted">12-02-2023</h6>
              </div>
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
                      <th>Image</th>
                      <th>Name</th>
                      <th>Date</th>
                      <th>Size</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img src="{{asset('dashboard/images/faces/face2.jpg')}}" class="me-2" alt="image"> 
                      </td> 
                       <td>Track One</td>
                      <td>12-02-2022</td>
                      <td>4MB</td>
                    </tr>
                    <tr>
                      <td>
                        <img src="{{asset('dashboard/images/faces/face2.jpg')}}" class="me-2" alt="image"> 
                      </td> 
                       <td>Track Five</td>
                      <td>12-02-2022</td>
                      <td>4MB</td>
                    </tr>
                    <tr>
                      <td>
                        <img src="{{asset('dashboard/images/faces/face2.jpg')}}" class="me-2" alt="image"> 
                      </td> 
                       <td>Track One</td>
                      <td>12-02-2022</td>
                      <td>4MB</td>
                    </tr>
                    <tr>
                      <td>
                        <img src="{{asset('dashboard/images/faces/face2.jpg')}}" class="me-2" alt="image"> 
                      </td> 
                       <td>Track Four</td>
                      <td>12-02-2022</td>
                      <td>4MB</td>
                    </tr>
                    <tr>
                      <td>
                        <img src="{{asset('dashboard/images/faces/face2.jpg')}}" class="me-2" alt="image"> 
                      </td> 
                       <td>Track Three</td>
                      <td>12-02-2022</td>
                      <td>4MB</td>
                    </tr>
                    <tr>
                      <td>
                        <img src="{{asset('dashboard/images/faces/face2.jpg')}}" class="me-2" alt="image"> 
                      </td> 
                       <td>Track Two</td>
                      <td>12-02-2022</td>
                      <td>4MB</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <a class="text-black font-13 d-block pt-2 pb-2 pb-lg-0 font-weight-bold ps-4" href="{{route('member.tracks')}}">Show more</a>
            </div>
          </div>
        </div>
      </div>
</div>