<div class="save_track_details">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Save Your Track Details</h4>
                    <p class="card-description">Write Every track details</p>
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
                                    <label for="name">Track title</label>
                                    <input type="text" class="form-control" id="name" value="{{$track->name}}" placeholder="Track title " name="name" wire:model="name.{{$loop->index}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="songwriters">Songwriters (You can write multiple name using comma.)</label>
                                    <input type="text" class="form-control" id="songwriters" value="{{$track->songwriters}}" placeholder="Songwriters" name="songwriters" wire:model="songwriters.{{$loop->index}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="explicit_content">Explicit Content</label>
                                    <select class="form-control" id="explicit_content" name="explicit_content" wire:model="explicit_content.{{$loop->index}}">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
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
                                    <label for="featured_artist">Extra (Featured) Artist</label>
                                    <input type="text" class="form-control" id="featured_artist" value="{{$track->featured_artist}}" placeholder="Featured Artist" name="featured_artist" wire:model="featured_artist.{{$loop->index}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="track_version">Track version</label>
                                    <select name="track_version" id="track_version" class="form-control" wire:model="track_version.{{$loop->index}}">
                                        <option value="Original">Original</option>
                                        <option value="Acoustic version">Acoustic version</option>
                                        <option value="Demo">Demo</option>
                                        <option value="Extended version">Extended version</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="contain_lyrics">Does this track contain any lyrics?</label>
                                    <input type="radio" value="Yes" name="contain_lyrics" wire:model="contain_lyrics.{{$loop->index}}">Yes<br>
                                    <input type="radio" value="No" name="contain_lyrics" wire:model="contain_lyrics.{{$loop->index}}">No
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="isrc_number">ISRC number</label>
                                    <input type="radio" value="I dont have on ISRC number for this track. please provide me with a free once" name="isrc_number" wire:model="isrc_number.{{$loop->index}}">I don't have on ISRC number for this track. please provide me with a free once<br>
                                    <input type="radio" value="1" name="isrc_number" wire:model="isrc_number.{{$loop->index}}">I already have my own ISRC number I would like to use for this track
                                    @if($isrc_number[$loop->index] != 'I dont have on ISRC number for this track. please provide me with a free once')
                                        <input type="text" name="irc_new" placeholder="IRC Number" class="form-control" wire:model="isrc_numbers.{{$loop->index}}">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="track_created">How was your track created?</label>
                                    <input type="radio" value="It's a complete original" name="track_created" wire:model="track_created.{{$loop->index}}">It's a complete original<br>
                                    <input type="radio" value="It's a cover of another artist's song" name="track_created" wire:model="track_created.{{$loop->index}}">It's a cover of another artist's song<br>
                                    <input type="radio" value="It contains a simple by another musician or is a remix of another artist's song" name="track_created" wire:model="track_created.{{$loop->index}}">It contains a simple by another musician or is a remix of another artist's song<br>
                                    <input type="radio" value="It contains a beat created by another musician" name="track_created" wire:model="track_created.{{$loop->index}}">It contains a beat created by another musician
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="instrumental">Instrumental</label>
                                    <select class="form-control" id="instrumental" name="instrumental" wire:model="instrumental.{{$loop->index}}">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" value="{{$track->price}}" placeholder="Price" name="price" wire:model="price.{{$loop->index}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="album_id">Assign to Album</label>
                                    <select name="album_id" id="album_id" wire:model="album_id" class="form-control">
                                        @if($albums)
                                            @foreach($albums as $album)
                                                <option value="{{$album->id}}">{{$album->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <input type="hidden" name="track_id" value="{{$track->id}}" wire:model="track_id.{{$loop->index}}">
                                <div style="height: 20px;"></div>
                                <button wire:click="copyDetails({{$loop->index}})" type="button" class="btn btn-primary me-2"> Copy Details to other tracks </button>
                                <button type="submit" class="btn btn-primary me-2"> Distribute </button>
                            </div>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>