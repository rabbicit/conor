<div class="membership-pagearea">
    <div class="intro intro-mini full-width jIntro bg-blog" id="anchor00">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="text-center">
                <h1 class="primary-title">Complete Steps</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="container">
        <form class="form-horizontal" wire:submit.prevent="submitForm" method="POST" id="register_form" enctype="multipart/form-data">
            @csrf
        <div class="total-steps">
            <div class="single-step {{ $currentStep != 1 ? 'display-none' : '' }}" id="step-1">
                <div class="step-title">
                    <h2>Are you an Artist or Producer?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Omnia peccata paria dicitis. Sed virtutem ipsam inchoavit, nihil amplius. Si longus, levis; Memini vero, inquam; Quis hoc dicit? Aliter enim explicari, quod quaeritur, non potest.</p>
                </div>
                <div class="step-content">
                    <div class="total-artist">
                        <div class="single-artist">
                            <input type="radio" id="artist" name="position" value="artist" wire:model="position">
                            <label for="artist">
                                <h4>Artist</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Omnia peccata paria dicitis.</p>
                            </label>
                        </div>
                        <div class="single-artist">
                            <input type="radio" id="producer" name="position" value="producer" wire:model="position">
                            <label for="producer">
                                <h4>Producer</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Omnia peccata paria dicitis.</p>
                            </label>
                        </div>
                    </div>
                    <div class="error-code">
                        @error('position') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="step-next">
                    <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button">Next</button>
                </div>
            </div>
            <div class="single-step {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">
                <div class="step-title">
                    <h2>Let's Get the Basics</h2>
                </div>
                <div class="step-content">
                    <div class="user-details">
                        <input type="text" name="phone" placeholder="Phone Number" required wire:model="phone">
                        <div class="error-code">
                            @error('phone') <p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                        <input type="text" name="address" placeholder="Address" required wire:model="address">
                        <div class="error-code">
                            @error('address') <p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <select name="country" class="countries order-alpha include-US presel-US" id="countryId" wire:model="country">
                                    <option value="">Select Country</option>
                                    @foreach($countries as $key=>$val)
                                        <option value="{{$key}}">{{$val}}</option>
                                    @endforeach
                                </select>
                                <div class="error-code">
                                    @error('country') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <select name="state" class="states order-alpha" id="stateId" wire:model="state" >
                                    <option value="st">Select State</option>
                                    @foreach($states as $key=>$val)
                                        <option value="{{$key}}">{{$val}}</option>
                                    @endforeach
                                </select>
                                <div class="error-code">
                                    @error('state') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <select name="city" class="cities order-alpha" id="cityId" wire:model="city">
                                    <option value="s">Select City</option>
                                    @foreach($cities as $key=>$val)
                                        <option value="{{$key}}">{{$val}}</option>
                                    @endforeach
                                </select>
                                <div class="error-code">
                                    @error('city') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="zipcode" placeholder="Zip Code" wire:model="zipcode">
                                <div class="error-code">
                                    @error('zipcode') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step-next">
                    <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="secondStepSubmit" type="button">Next</button>
                </div>
            </div>
            <div class="single-step {{ $currentStep != 3 ? 'display-none' : '' }}" id="step-3">
                <div class="step-title">
                    <h2>Select Packages</h2>
                </div>
                <div class="package-pricing">
                    <div class="pricing-packages">

                        @foreach($plans as $plan)
                        <div class="another-row">
                            <div class="single-pricing">
                                <input id="p1" type="radio" name="package" wire:model="package" value="{{ route('plans.show', $plan->slug) }}">
                                <label for="p1"></label>
                                <div class="pricing-box">
                                    <h4>{{ $plan->name }}</h4>
                                    <p>{{ $plan->description }}</p>
                                    <h1>{{ number_format($plan->cost, 2) }}</h1>
                                    <h6>USD/year</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="error-code">
                        @error('package') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="step-next">
                    <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="thirdStepSubmit" type="button">Next</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>