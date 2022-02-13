<?php

namespace App\Http\Livewire\Members;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Stripe\Customer;
use Stripe\Stripe;

class MemberSetupComponent extends Component
{
    public $currentStep = 1;
    public $country;
    public $state;
    public $position;
    public $phone;
    public $address;
    public $city;
    public $zipcode;
    public $package;
    public $stripeToken;
    public $paymentMethod;
    public $stripe_token;

    protected $listeners = ['getStripeToken'];
    
    public function getCountries(){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://geodata.solutions/api/api.php?type=getCountries',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $output = json_decode($response, true);

        return $output['result'];
    }

    public function changeCountry(){
        $country = $this->country;
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://geodata.solutions/api/api.php?type=getStates&countryId='.$country,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        $output = json_decode($response, true);

        if(!empty($output['result'])){
            return $output['result'];
        }else{
            return array();
        }
    }

    public function changeState(){
        $country = $this->country;
        $state = $this->state;
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://geodata.solutions/api/api.php?type=getStates&countryId='.$country.'&stateId='.$state,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        $output = json_decode($response, true);

        if(!empty($output['result'])){
            return $output['result'];
        }else{
            return array();
        }
    }

    public function firstStepSubmit(){
        $validatedData = $this->validate([
            'position' => 'required',
        ]);
        $this->currentStep = 2;
    }
    public function secondStepSubmit(){
        $validatedData = $this->validate([
            'phone' => 'required',
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zipcode' => 'required',
        ]);
        $user = User::find(Auth::user()->id);
        $user->address = $this->address;
        $user->country = $this->country;
        $user->country = $this->country;
        $user->state = $this->state;
        $user->zip = $this->zipcode;
        $user->phone = $this->phone;
        $user->save();
  
        $this->currentStep = 3;
    }

    public function thirdStepSubmit(){
        $validatedData = $this->validate([
            'package' => 'required',
        ]);
  
        $this->currentStep = 4;
        $this->dispatchBrowserEvent('stripe-update');
    }

    public function submitForm(){
        $validatedData = $this->validate([
            'package' => 'required',
        ]);
        $user = Auth::user();
        $token = $this->stripe_token;
        $paymentMethod = $this->paymentMethod;
        // var_dump($paymentMethod);

        try{
            Stripe::setApiKey(env('STRIPE_KEY'));
            if(is_null($user->stripe_id)){
                $stripeCustomer = $user->createAsStripeCustomer([
                    'source' =>  $token
                ]);
            }

            Customer::createSource(
                $user->stripe_id,
                ['source' => $token]
            );

            $user->newSubscription('test','10')
            ->create($paymentMethod, [
                'email' => $user->email,
            ]);

        } catch (Exception $e) {
            // return back()->with('success',$e->getMessage());
        }
  
        // $this->clearForm();
  
        // $this->currentStep = 1;
    }
    

    public function back($step){
        $this->currentStep = $step;    
    }

    public function clearForm(){
        $this->name = '';
        $this->price = '';
        $this->detail = '';
        $this->status = 1;
    }

    

    public function getStripeToken($stripeToken, $paymentMethod){
        $this->stripe_token = $stripeToken;
        $paymentMethod = $paymentMethod;
        $this->submitForm();
    }

    public function render()
    {
        return view('livewire.members.member-setup-component', ['countries' => $this->getCountries(), 'states' => $this->changeCountry(), 'cities' => $this->changeState() ])->layout('layouts.base');
    }
}


