<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;
use App\Models\Token;

class UserProfileComponent extends Component
{
    public $haveTokenCode;
    public $tokenCode;
    public $discount;

    public function applyTokenCode()
    {
        $token = Token::where('code', $this->tokenCode)->where('balance', '<=', 0)->first();
        if (!$token) {
            session()->flash('token_message', 'Token Code is invalid');
            return;
        }
        // else {
        //     session()->flash('token_message', 'Successfully Recharge');
        //     return;
        // }

        session()->put('token', [
            'code' => $token->code,
            'type' => $token->type,
            'value' => $token->value,
           // 'cart_value' => $token->cart_value,
            'balance' => $token->balance

        ]);
        $token->balance = 1;
        $token->save();
        session()->flash('token_message', 'Successfully Recharge');
        session()->flash('token_message1', $token->value);
        return;
    }

    public function calculateDiscounts()
    {
        if (session()->has('token')) {
            if (Session()->get('token')['type'] == 'fixed') {
                $this->discount = session()->get('token')['value'];
            }
            // printf($this->discount);
            // $user->balance=$user->balance;
        }
    }

    public function render()
    {
        $userProfile = Profile::where('user_id', Auth::user()->id)->first();
        if (!$userProfile) {
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();
        }
        $user = User::find(Auth::user()->id);

        if (session()->has('token')) {

            $this->calculateDiscounts();
            $user->balance = $user->balance + $this->discount;
            $user->save();
            session()->forget('token');
        }

        return view('livewire.user.user-profile-component', ['user' => $user])->layout('layouts.base');
    }
}