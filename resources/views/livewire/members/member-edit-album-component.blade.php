<div class="save_track_details">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Album</h4>
                    <div class="track_albams">
                        <form class="forms-sample" wire:submit.prevent="updateAlbum" enctype="multipart/form-data">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="newimage">Albam image</label>
                                        <input type="file" class="form-control" id="newimage" name="newimage" wire:model="newimage">
                                        @error('newimage') <p class="error">{{ $message }}</p> @enderror
                                        @if($newimage)
                                            <img src="{{$newimage->temporaryUrl()}}" width="400">
                                            @else
                                                @if($image)
                                                    <img src="{{asset('images/albums')}}/{{$image}}" width="400">
                                                @endif
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="albamname">Albam Name</label>
                                        <input type="text" class="form-control" id="albamname" placeholder="Albam Name" name="name" wire:model="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="published_at">Published Date</label>
                                        <input type="date" class="form-control" id="published_at" placeholder="Publish date" name="published_at" wire:model="published_at">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary me-2"> Update Album </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>