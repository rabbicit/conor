<div class="save_track_details">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Save Your Track Details</h4>
                    <p class="card-description">Write Every track details</p>
                    <div class="track_albams">
                        <form class="forms-sample" wire:submit.prevent="storeAlbum" enctype="multipart/form-data">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="albimages">Albam Image</label>
                                        <input type="file" class="form-control" id="albimages" name="newimage" wire:model="newimage">
                                        @error('tracks') <p class="error">{{ $message }}</p> @enderror
                                        @if($newimage)
                                            <img src="{{$newimage->temporaryUrl()}}" width="400">
                                            @else
                                                @if($albimage)
                                                    <img src="{{asset('images/albums')}}/{{$albimage}}" width="400">
                                                @endif
                                            @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="albamname">Albam Name</label>
                                        <input type="text" class="form-control" id="albamname" placeholder="Albam Name" name="albname" wire:model="albname">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary me-2"> Save Album </button>
                        </form>
                    </div>
                    <hr>
                    @if(Session::has('delete'))
                        <div class="alert alert-danger" role="alert">{{Session::get('delete')}}</div>
                    @endif
                    @foreach($tracks as $track)
                    <form class="forms-samples" wire:submit.prevent="storeTracks({{$loop->index}})" enctype="multipart/form-data">
                        <div class="barname">
                            <h4># {{round($loop->index + 1)}}</h4>
                            <audio controls>
                                <source src="{{$track->url}}" type="audio/mp3">
                            </audio> 
                            <i class="mdi mdi-delete" wire:click.prevent="removeFile({{$track->id}})"></i>
                        </div>
                        @if(Session::has('message'.$loop->index))
                            <div class="alert alert-success" role="alert">{{Session::get('message'.$loop->index)}}</div>
                        @endif
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Track Name</label>
                                    <input type="text" class="form-control" id="name" value="{{$track->name}}" placeholder="Name" name="name" wire:model="name.{{$loop->index}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="songwriters">Songwriters</label>
                                    <input type="text" class="form-control" id="songwriters" value="{{$track->songwriters}}" placeholder="Songwriters" name="songwriters" wire:model="songwriters.{{$loop->index}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="explicit_content">Explicit Content</label>
                                    <input type="text" class="form-control" id="explicit_content" value="{{$track->explicit_content}}" placeholder="Explicit Content" name="explicit_content" wire:model="explicit_content.{{$loop->index}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="producer">Producers</label>
                                    <input type="text" class="form-control" id="producer" value="{{$track->producer}}" placeholder="Producers" name="producer" wire:model="producer.{{$loop->index}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="featured_artist">Featured Artists</label>
                                    <input type="text" class="form-control" id="featured_artist" value="{{$track->featured_artist}}" placeholder="Featured Artists" name="featured_artist" wire:model="featured_artist.{{$loop->index}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="instrumental">Instrumental</label>
                                    <input type="text" class="form-control" id="instrumental" value="{{$track->instrumental}}" placeholder="Instrumental" name="instrumental" wire:model="instrumental.{{$loop->index}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" value="{{$track->price}}" placeholder="Price" name="price" wire:model="price.{{$loop->index}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <input type="hidden" name="track_id" value="{{$track->id}}" wire:model="track_id.{{$loop->index}}">
                                <div style="height: 20px;"></div>
                                <button type="submit" class="btn btn-primary me-2"> Save Track </button>
                            </div>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>