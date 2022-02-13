<div class="admin-contact">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Messages</h4>
            <p class="card-description"> You got those messages.</code>
            </p>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Details</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                    @if($messages)
                        @foreach($messages as $message)
                        <tr>
                            <td>{{$message->id}}</td>
                            <td>{{$message->name}}</td>
                            <td>{{$message->email}}</td>
                            <td>{{$message->phone}}</td>
                            <td>{{$message->comment}}</td>
                            <td>{{$message->created_at}}</td>
                        </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>
              <div class="pagination">
                {{$messages->links()}}
              </div>
            </div>
          </div>
        </div>
      </div>
</div>