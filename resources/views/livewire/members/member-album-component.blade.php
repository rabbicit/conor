<div class="all-tracks">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="card-areas">
                <h4 class="card-title">All Albums</h4>
                <div class="card-buttons">
                    <a class="positioning btn btn-info btn-lg btn-block" href="{{route('member.addalbum')}}">Add Album</a>
                </div>
            </div>
            @if(Session::has('message'))
                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
            @endif
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Date</th>
                    <th>Publish Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @if($albums)
                        @foreach($albums as $album)
                        <tr>
                            <td>{{$album->id}}</td>
                            <td>{{$album->name}}</td>
                            <td><img src="{{$album->slug}}" alt=""></td>
                            <td>{{ date('d-M-Y', strtotime($album->created_at)) }}</td>
                            <td>{{ date('d-M-Y', strtotime($album->published_at)) }}</td>
                            <td><a href="{{route('member.aledit', ['album_id' => $album->id])}}">Edit</a></td>
                            <td><a href="#" wire:click="deleteAlbums({{$album->id}})">Delete</a></td>
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