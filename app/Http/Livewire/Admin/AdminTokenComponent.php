<?php

namespace App\Http\Livewire\Admin;

//use App\Models\Coupon;
use App\Models\Token;
use Livewire\Component;
//use App\Models\Token;

class AdminTokenComponent extends Component
{

    public function deleteToken($token_id){
        $token = Token::find($token_id);
        $token->delete();
        session()->flash('message','token has been deleted successfully');
    }
    public function render()
    {
        $token = Token::all();
        return view('livewire.admin.admin-token-component',['token'=>$token])->layout('layouts.base');
    }
}