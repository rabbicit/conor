<div class="save_track_details">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit Payment</h4>
                    <div class="track_albams">
                        <form class="forms-sample" wire:submit.prevent="editPayment" enctype="multipart/form-data">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Select User</label>
                                        <select name="user_id" id="user_id" class="form-control" wire:model="user_id">
                                            @foreach($users as $user)
                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="albamname">Date</label>
                                        <input type="date" class="form-control" id="date" placeholder="Date" name="date" wire:model="date">
                                        @error('date') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea  class="form-control" id="description" placeholder="Description" name="description" wire:model="description" cols="30" rows="10"></textarea>
                                        @error('description') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="debit">Debit</label>
                                        <input type="text" class="form-control" id="debit" placeholder="Debit" name="debit" wire:model="debit">
                                        @error('debit') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="credit">Credit</label>
                                        <input type="text" class="form-control" id="credit" placeholder="Credit" name="credit" wire:model="credit">
                                        @error('credit') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="balance">Balance</label>
                                        <input type="text" class="form-control" id="balance" placeholder="Balance" name="balance" wire:model="balance">
                                        @error('balance') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="currency">Currency</label>
                                        <select class="form-control" id="currency" name="currency" wire:model="currency">
                                            <option value="USD">USD</option>
                                            <option value="EUR">EUR</option>
                                        </select>
                                        @error('currency') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary me-2"> Update Payment </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>