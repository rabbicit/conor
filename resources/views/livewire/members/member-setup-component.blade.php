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
                        <div class="another-row">
                            <div class="single-pricing">
                                <input id="p1" type="radio" name="package" wire:model="package" value="p1">
                                <label for="p1"></label>
                                <div class="pricing-box">
                                    <h4>Single</h4>
                                    <p>1-2 tracks</p>
                                    <h1>9.99</h1>
                                    <h6>USD/year</h6>
                                </div>
                            </div>
                        </div>
                        <div class="another-row">
                            <div class="single-pricing">
                                <input id="p2" type="radio" name="package" wire:model="package" value="p2">
                                <label for="p2"></label>
                                <div class="pricing-box">
                                    <h4>Enterprise</h4>
                                    <p>3-6 tracks</p>
                                    <h1>19.99</h1>
                                    <h6>USD/year</h6>
                                </div>
                            </div>
                        </div>
                        <div class="another-row">
                            <div class="single-pricing">
                                <input id="p3" type="radio" name="package" wire:model="package" value="p3">
                                <label for="p3"></label>
                                <div class="pricing-box">
                                    <h4>Premium</h4>
                                    <p>7-25 tracks</p>
                                    <h1>39.99</h1>
                                    <h6>USD/year</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="error-code">
                        @error('package') <p class="text-danger">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="step-next">
                    <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="thirdStepSubmit" type="button">Next</button>
                </div>
            </div>
            <div class="single-step {{ $currentStep != 4 ? 'display-none' : '' }}" id="step-4">
                <div class="step-title">
                    <h2>Payment details</h2>
                </div>
                <div class="step-content">


                    <div x-data x-on:generate-stripe-token.window="generateStripeToken()">

                        <label for="card">
                            Credit Card
                        </label>
                        <input id="card-holder-name" type="text">
                        <div wire:ignore id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>
                    </div>
                    <div class="mt-2 text-sm text-red-500" id="card-errors">
                    
                    </div>
                </div>
                <div class="step-next">
                    <button class="btn btn-primary nextBtn btn-lg pull-right" id="submitbtn" type="button" data-secret="{{env('STRIPE_SECRET')}}">Pay Now</button>
                </div>
            </div>
        </div>
        </form>
    </div>
    <script src="https://js.stripe.com/v3/"></script>


    <script type="text/javascript">
    // Create a Stripe client. 
    var stripe = Stripe('pk_test_K2a1hO6CSnZae6dfl1KTbzgv');
    // Create an instance of Elements.
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    var style = {
        base: {
            color: '#32325d',
            lineHeight: '24px',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };

    // Create an instance of the card Element.
    var card = elements.create('card');


    window.addEventListener('stripe-update', event => {

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function (event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
    });
    const cardButton = document.getElementById('submitbtn');
    const cardHolderName = document.getElementById('card-holder-name');
    const clientSecret = cardButton.dataset.secret;

    cardButton.addEventListener('click', async (e) =>  {
        const { paymentMethod, error } = await stripe.createPaymentMethod(
            'card', card, {
                billing_details: { name: cardHolderName.value }
            }
            
        );

        stripe.createToken(card).then(function (result) {
            if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server.
                // @this.call('setPayment', setupIntent.payment_method)
                // @this.set('stripe_token', result.token.id);
                Livewire.emit('getStripeToken', result.token.id, paymentMethod.id);
                // @this.call('getStripeToken', result.token.id);
                console.log(paymentMethod);
            }
        });
    });
    </script>
</div>