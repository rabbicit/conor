<div class="trackuploads">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Upload Your Tracks</h4>
                  <p class="card-description">You can drag and drop your files here.</p>
                  <form class="forms-sample">
                      <label for="upload"><input type="file" id="upload" multiple name="tracks" wire:model="tracks"> 
                        Upload Files</label>

                        @if($tracks)
                        <div class="files">
                            <ul>
                            @foreach($tracks as $track)
                                <li>{{$track->getClientOriginalName()}} <span>{{$track->getSize()}}</span></li>
                            @endforeach
                            </ul>
                        </div>
                        @endif
                  </form>
                </div>
              </div>
        </div>
    </div>
</div>