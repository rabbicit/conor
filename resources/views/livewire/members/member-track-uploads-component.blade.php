<div class="trackuploads">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Upload Your Tracks</h4>
                  <p class="card-description">You can upload multiple files here.</p>
                  @if(Session::has('message'))
                      <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                  @endif
                  <form class="forms-samples" wire:submit.prevent="storeTracks" enctype="multipart/form-data">
                      <label for="upload" class="btn btn-danger btn-icon-text"><input type="file" id="upload" multiple name="tracks" wire:model="tracks" style="display:none">  <i class="mdi mdi-upload btn-icon-prepend"></i> 
                        Upload Files</label>
                        @error('tracks.*') <p class="error">{{ $message }}</p> @enderror
                        @error('tracks') <p class="error">{{ $message }}</p> @enderror

                        @if($tracks)
                        <div class="files">
                            <ul>
                            @foreach($tracks as $track)
                                <li><strong>{{$track->getClientOriginalName()}}</strong> <span>{{round($track->getSize() / 1024 / 1024, 1)}} MB</span> <i class="
                                    mdi mdi-delete" wire:click.prevent="removeFile({{$loop->index}})"></i></li>
                            @endforeach
                            </ul>
                        </div>
                        @endif 
                        <div style="height:20px;"></div>
                        <button type="submit" class="btn btn-primary btn-fw">Save Tracks</button>
                  </form>
                </div>
              </div>
        </div>
    </div>
</div>