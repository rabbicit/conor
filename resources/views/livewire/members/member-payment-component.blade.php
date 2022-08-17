<div class="all-tracks">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="card-areas">
                <h4 class="card-title">All Payments</h4>
            </div>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Debit</th>
                    <th>Credit</th>
                    <th>Balance</th>
                    <th>Currency</th>
                  </tr>
                </thead>
                <tbody>
                    @if($payments)
                        @foreach($payments as $payment)
                        <tr>
                            <td>{{$payment->date}}</td>
                            <td>{{$payment->description}}</td>
                            <td>{{$payment->debit}}</td>
                            <td>${{$payment->credit}}</td>
                            <td>${{$payment->balance}}</td>
                            <td>{{$payment->currency}}</td>
                        </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>
              <div class="pagination">
                {{$payments->links()}}
              </div>
            </div>
          </div>
        </div>
      </div>
</div>