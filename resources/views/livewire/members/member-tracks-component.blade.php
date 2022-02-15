<div class="all-tracks">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="card-areas">
                <h4 class="card-title">All Tracks</h4>
                <div class="card-buttons">
                    <a class="positioning btn btn-info btn-lg btn-block" href="{{route('member.adtrack')}}">Add Tracks</a>
                    <a class="positioning2 btn btn-primary btn-lg btn-block" href="{{route('member.save')}}">Edit Tracks</a>
                </div>
            </div>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Songwriters</th>
                    <th>Explicit Content</th>
                    <th>Price</th>
                    <th>Producer</th>
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
                            <td>{{$track->id}}</td>
                            <td>{{$track->name}}</td>
                            <td>{{$track->songwriters}}</td>
                            <td>{{$track->explicit_content}}</td>
                            <td>${{$track->price}}</td>
                            <td>{{$track->producer}}</td>
                            <td>{{$track->file_name}}</td>
                            <td>{{ date('d-M-Y', strtotime($track->created_at)) }}</td>
                            <td>{{$size}}MB</td>
                        </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>
              <div class="pagination">
                {{$tracks->links()}}
              </div>
            </div>
          </div>
        </div>
      </div>
</div>