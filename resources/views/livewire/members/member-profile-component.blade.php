<div class="whole-profile">
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Profile Details</h4>
              @if(Session::has('message'))
                  <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
              @endif
              <form class="forms-sample"  wire:submit.prevent="SaveProfile">
                <div class="form-group">
                  <label for="exampleInputUsername1">Email</label>
                  <input type="email" class="form-control" id="exampleInputUsername1" placeholder="Email" wire:model="email" name="email" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="name" wire:model="name" name="name">
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" class="form-control" id="phone" placeholder="Phone" wire:model="phone" name="phone">
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="Address" wire:model="address" name="address">
                </div>
                <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" class="form-control" id="city" placeholder="City" wire:model="city" name="city">
                </div>
                <div class="form-group">
                  <label for="state">State</label>
                  <input type="text" class="form-control" id="state" placeholder="State" wire:model="state" name="state">
                </div>
                <div class="form-group">
                  <label for="zip">ZipCode</label>
                  <input type="text" class="form-control" id="zip" placeholder="ZipCode" wire:model="zip" name="zip">
                </div>
                <div class="form-group">
                  <label for="country">Country</label>
                  <input type="text" class="form-control" id="country" placeholder="Country" wire:model="country" name="country">
                </div>
                <button type="submit" class="btn btn-primary me-2"> Update Details </button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Change password</h4>
                @if(Session::has('password_succ'))
                    <div class="alert alert-success">{{Session::get('password_succ')}}</div>
                @endif
                @if(Session::has('password_error'))
                    <div class="alert alert-danger">{{Session::get('password_error')}}</div>
                @endif
              <form class="forms-sample"  wire:submit.prevent="changePassword">
                <div class="form-group row">
                  <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Current Password</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="current_password" wire:model="current_password">
                    @error('current_password') <p class="text-danger">{{$message}}</p> @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">New Password</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="exampleInputConfirmPassword2" placeholder="Password" name="password" wire:model="password">
                    @error('password') <p class="text-danger">{{$message}}</p> @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleInputConfirmPassword3" class="col-sm-3 col-form-label">Confirm New Password</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="exampleInputConfirmPassword3" placeholder="Password" name="password_confirmation" wire:model="password_confirmation">
                    @error('password_confirmation') <p class="text-danger">{{$message}}</p> @enderror
                  </div>
                </div>

                <button type="submit" class="btn btn-primary me-2"> Update password </button>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>