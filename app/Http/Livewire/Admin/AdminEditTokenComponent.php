<?php

namespace App\Http\Livewire\Admin;

use App\Models\Token;
use Livewire\Component;

class AdminEditTokenComponent extends Component
{
    public $code;
    public $type;
    public $value;
   // public $cart_value;
    public $token_id;
   // public $expiry_date;


    public function mount($token_id){
        $token = Token::find($token_id);
        $this->code = $token->code;
        $this->type = $token->type;
        $this->value = $token->value;
      //  $this->cart_value = $token->cart_value;
        $this->token_id = $token->id;
       // $this->expiry_date = $token->expiry_date;

    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'code' => 'required',
            'type' => 'required',
            'value' => 'required|numeric',
           // 'cart_value' => 'required|numeric',
           // 'expiry_date' => 'required'
        ]);
    }

    public function updateToken(){
        $this->validate([
            'code' => 'required',
            'type' => 'required',
            'value' => 'required|numeric',
            //'cart_value' => 'required|numeric',
            //'expiry_date' => 'required'
        ]);
        $token = Token::find($this->token_id);
        $token->code = $this->code;
        $token->type = $this->type;
        $token->value = $this->value;
       // $token->cart_value = $this->cart_value;
       // $token->expiry_date = $this->expiry_date;
        $token->save();
        session()->flash('message','Token code has been updated successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-token-component')->layout('layouts.base');
    }
}