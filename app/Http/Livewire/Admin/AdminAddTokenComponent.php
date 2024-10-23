<?php

namespace App\Http\Livewire\Admin;

use App\Models\Token;
use Livewire\Component;

class AdminAddTokenComponent extends Component
{
    public $code;
    public $type;
    public $value;
    // public $cart_value;
    //public $expiry_date;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'code' => 'required|unique:tokens',
            'type' => 'required',
            'value' => 'required|numeric',
            //'cart_value' => 'required|numeric',
            //'expiry_date' => 'required'
        ]);
    }

    public function storeToken()
    {
        $this->validate([
            'code' => 'required|unique:tokens',
            'type' => 'required',
            'value' => 'required|numeric',
            // 'cart_value' => 'required|numeric',
            //'expiry_date' => 'required'
        ]);

        $token = new Token();
        $token->code = $this->code;
        $token->type = $this->type;
        $token->value = $this->value;
        //  $token->cart_value = $this->cart_value;
        // $token->expiry_date = $this->expiry_date;
        $token->save();
        session()->flash('message', 'Token code has been created successfully');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-token-component')->layout('layouts.base');
    }
}