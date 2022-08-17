<div class="admin-dashboard">
    <div class="row">
        <div class="col-xl-12 stretch-card grid-margin">
          <div class="card">
            <div class="card-body pb-0">
              <h4 class="card-title mb-0">All Payments</h4>
              @if(Session::has('message'))
                  <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
              @endif
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table custom-table text-dark">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Date</th>
                      <th>Description</th>
                      <th>Debit</th>
                      <th>Credit</th>
                      <th>Balance</th>
                      <th>Currency</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if($payments)
                      @foreach($payments as $payment)
                        <tr>
                          <td>{{$payment->getUser->name}}</td>
                          <td>{{$payment->date}}</td>
                          <td>{{$payment->description}}</td>
                          <td>{{$payment->debit}}</td>
                          <td>{{$payment->credit}}</td>
                          <td>{{$payment->balance}}</td>
                          <td>{{$payment->currency}}</td>
                          <td><a class="btn btn-success" href="{{route('admin.editpayment', ['payment_id' => $payment->id])}}">Edit</a></td>
                          <td><button class="btn btn-danger" wire:click="DeleteID({{$payment->id}})" data-toggle="modal" data-target="#exampleModal">Delete</button></td>
                        </tr>
                      @endforeach
                    @endif
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="9">
                      {{ $payments->links() }}
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
    {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

      <div class="modal-dialog" role="document">

          <div class="modal-content">

              <div class="modal-header">

                  <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>

                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                       <span aria-hidden="true close-btn">×</span>

                  </button>

              </div>

             <div class="modal-body">

                  <p>Are you sure want to delete?</p>

              </div>

              <div class="modal-footer">

                  <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>

                  <button type="button" wire:click.prevent="deletePayment()" class="btn btn-danger close-modal" data-dismiss="modal">Yes, Delete</button>

              </div>

          </div>

      </div>

    </div>
</div>