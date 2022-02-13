<div class="user-details">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Users</h4>
            @if(Session::has('message'))
                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
            @endif
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>View</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if($users)
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->comment}}</td>
                            <td><a href="#" class="badge badge-success">Edit</a> <a href="#" class="badge badge-danger" wire:click="deleteUser({{$user->id}})">Delete</a></td>
                        </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>
              <div class="pagination">
                {{$users->links()}}
              </div>
            </div>
          </div>
        </div>
      </div>
</div>