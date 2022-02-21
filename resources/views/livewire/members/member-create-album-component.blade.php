<div class="save_track_details">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Album</h4>
                    <div class="track_albams">
                        <form class="forms-sample" wire:submit.prevent="storeAlbum" enctype="multipart/form-data">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Albam Image</label>
                                        <input type="file" class="form-control" id="image" name="image" wire:model="image">
                                        @error('image') <p class="text-danger">{{ $message }}</p> @enderror
                                        @if($image)
                                            <img src="{{$image->temporaryUrl()}}" width="400">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="albamname">Albam Name</label>
                                        <input type="text" class="form-control" id="albamname" placeholder="Albam Name" name="name" wire:model="name">
                                        @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="published_at">Publish Date</label>
                                        <input type="date" class="form-control" id="published_at" placeholder="Albam Name" name="published_at" wire:model="published_at">
                                        @error('published_at') <p class="text-danger">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary me-2"> Save Album </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>