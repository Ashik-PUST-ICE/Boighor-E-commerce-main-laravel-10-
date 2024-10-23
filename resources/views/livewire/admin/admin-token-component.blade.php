<div>
    <div class="container" style="padding:30px 0px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Token
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.addtoken') }}" class="btn btn-success pull-right">Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Token Code</td>
                                    <td>Token Type</td>
                                    <td>Token Value</td>
                                    {{-- <td>Token Value</td> --}}
                                    {{-- <td>Expiry Date</td> --}}
                                    <td>Action</td>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($token as $tokens)
                                    <tr>
                                        <td>{{ $tokens->id }}</td>
                                        <td>{{ $tokens->code }}</td>
                                        <td>{{ $tokens->type }}</td>
                                        @if ($tokens->type == 'fixed')
                                            <td>৳{{ $tokens->value }}</td>
                                        @else
                                            <td>{{ $tokens->value }}%</td>
                                        @endif

                                        {{-- <td>{{ $tokens->cart_value }}</td>
                                        <td>{{ $tokens->expiry_date }}</td> --}}
                                        <td>
                                            <a href="{{ route('admin.edittoken', ['token_id' => $tokens->id]) }}">
                                                <i class="fa fa-edit fa-2x"></i>
                                            </a>
                                            <a href="#"
                                                onclick="confirm('Are you sure, You want to delete this token?') || event.stopImmediatePropagation()"
                                                wire:click.prevent="deleteToken({{ $tokens->id }})"><i
                                                    class="fa fa-times fa-2x text-danger"
                                                    style="margin-left:20px;"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
