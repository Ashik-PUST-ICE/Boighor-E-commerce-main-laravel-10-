<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Profile
                    </div>
                    <div class="panel-body">
                        <div class="col-md-4">
                            @if ($user->profile->image)
                                <img src="{{ asset('assets/images/profile') }}/{{ $user->profile->image }}"
                                    width="100%" />
                            @else
                                <img src="{{ asset('assets/images/profile/girl.jpg') }}" width="100%" />
                            @endif
                        </div>
                        <div class="col-md-8">
                            <p><b>Name: </b>{{ $user->name }}</p>
                            <p><b>Email: </b>{{ $user->email }}</p>
                            <p><b>Mobile: </b>{{ $user->profile->mobile }}</p>
                            <hr>
                            {{-- <p><b>Line1:</b>{{$user->profile->line1}}</p> --}}
                            {{-- <p><b>Line2:</b>{{$user->profile->line2}}</p> --}}
                            <p><b>City: </b>{{ $user->profile->city }}</p>
                            <p><b>Province: </b>{{ $user->profile->province }}</p>
                            <p><b>Country: </b>{{ $user->profile->country }}</p>
                            <p><b>Zip Code: </b>{{ $user->profile->zipcode }}</p>
                            <br>

                            @if (Session::has('token'))
                                <p><b>Balance: </b>{{ number_format($user->balance, 2) }}</p>
                                {{-- <p class="summary-info"><span class="title">Discount
                                        ({{ Session::get('token')['balance'] }})
                                    </span><b class="index"> - ৳{{ number_format($discount, 2) }}</b></p>
                                <p class="summary-info"><span class="title">Subtotal with Discount </span><b
                                        class="index">৳{{ number_format($discount, 2) }}</b></p> --}}
                            @else
                                {{-- <p><b>Balance: </b>{{ $user->balance }}</p> --}}
                                <p><b>Balance: </b>{{ number_format($user->balance, 2) }}</p>
                            @endif

                            <br>
                            <br>


                            <div class="checkout-info">
                                @if (!Session::has('token'))
                                    <label class="checkbox-field">
                                        <input class="frm-input " name="have-code" id="have-code" value="1"
                                            type="checkbox" wire:model="haveTokenCode"><span> Recharge</span>
                                    </label>


                                    @if ($haveTokenCode == 1)
                                        <div class="summary-item">
                                            <form wire:submit.prevent="applyTokenCode">
                                                {{-- <form> --}}
                                                <h4 class="title-box">Token Code</h4>
                                                @if (Session::has('token_message'))
                                                    <div class="alert alert-danger" role="danger">
                                                        {{ Session::get('token_message') }} {{ Session::get('token_message1') }} &#2547;</div>
                                                    {{-- <p class="summary-info"><span class="title">Discount
                                                        </span><b class="index"> -
                                                            ৳{{ number_format($discount, 3) }}</b></p> --}}
                                                @endif

                                                <p class="row-in-form">
                                                    <label for="token-code">Enter you token code</label>
                                                    <input type="text" name="token-code" wire:model="tokenCode" />
                                                </p>
                                                <button type="submit" class="btn btn-small">Apply</button>
                                            </form>



                                        </div>
                                    @endif
                                @endif



                                <a href="{{ route('user.editprofile') }}" class="btn btn-info pull-right">Update
                                    Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
