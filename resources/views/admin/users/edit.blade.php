@extends('admin.layout.master')
@section('title', 'User Edit')

@section('content')

    <div class="">


        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit User</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <a class="btn btn-primary btn-sm" href="{{ route('user.index') }}"> {{ _('Back') }}</i></a>
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" data-validate-length-range="6" data-validate-words="2"
                                        name="name" value="{{ $user->name }}" placeholder="enter your name"
                                        required="required" />
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Profile Photo</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" class='optional' name="image" type="file" />
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Cover Photo</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" class='optional' name="cover_image" type="file" />
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="control-label col-md-3 col-sm-3 label-align">Role<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control" name="role">
                                        <option selected hidden>Select Role</option>
                                        <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin
                                        </option>
                                        <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Email<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="email" value="{{ $user->email }}" class='email'
                                        required="required" type="email" />
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Password<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="password" id="password1" name="password"
                                        title="Minimum 8 Characters Including An Upper And Lower Case Letter, A Number And A Unique Character"
                                        required />

                                    <span style="position: absolute;right:15px;top:7px;" onclick="hideshow()">
                                        <i id="slash" class="fa fa-eye-slash"></i>
                                        <i id="eye" class="fa fa-eye"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Confirm password<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="password" name="confirm_password"
                                        data-validate-linked='password' required='required' />
                                </div>
                            </div>

                            @php
                                $count = 0;
                            @endphp

                            @if(!empty(json_decode($user->billing_address)))

                                @foreach(json_decode($user->billing_address) as $key=>$address)
                                    <div class="field item form-group" id="remove-${$key}">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Billing
                                            Address-{{$key}}</label>
                                            <div class="col-md-6 col-sm-6 input-group" role="group">
                                            <input type="text" name="billinig_address[{{$key}}][billing]"
                                                value="{{$address->billing}}" class="form-control">
                                            @if ($key == 1 )
                                                <span class="btn btn-info m-0 add-billing" data-count=""="">+</span>
                                            @else
                                                <span class="btn btn-danger m-0" onclick="removed({{$key}})">x</span>

                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Shipping Address-1</label>
                                    <div class="col-md-6 col-sm-6 input-group" role="group">
                                        <input type="text" name="shipping_address[1][shipping]"
                                            value="" class="form-control">
                                        <span class="btn btn-info m-0 add-shipping"> + </span>
                                    </div>
                                </div>
                            @endif


                            <div class="billing"></div>

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Shipping Address-1</label>
                                <div class="col-md-6 col-sm-6 input-group" role="group">
                                    <input type="text" name="shipping_address[1][shipping]"
                                        value="" class="form-control">
                                    <span class="btn btn-info m-0 add-shipping"> + </span>
                                </div>
                            </div>

                            <div class="shipping"></div>

                            <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <button type='submit' class="btn btn-primary">Submit</button>
                                        <button type='reset' class="btn btn-success">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        // billing

        $(document).ready(function() {
            let count = 1;
            $('.add-billing').on('click', function() {
                count++;
                let result =
                    `
                            <div class="field item form-group" id="remove_b-${count}">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"> Billing Address-${count}</label>
                                <div class="col-md-6 col-sm-6 input-group" role="group">
                                    <input type="text" name="billing_address[${count}][billing]" class="form-control">
                                     <span class="btn btn-danger m-0" onclick="removed_b(${count})">x</span>
                                </div>

                            </div>
                            `;

                $('.billing').append(result);
            });
        });

        function removed_b(count) {
            $('#remove_b-' + count).remove();
        }

        // Shipping

        $(document).ready(function() {
            let count = 1;
            $('.add-shipping').on('click', function() {
                count++;
                let result =
                    `
                            <div class="field item form-group" id="remove-${count}">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"> Shipping Address-${count}</label>
                                <div class="col-md-6 col-sm-6 input-group" role="group">
                                    <input type="text" name="shipping_address[${count}][shipping]" class="form-control">
                                     <span class="btn btn-danger m-0" onclick="removed(${count})">x</span>
                                </div>

                            </div>
                            `;

                $('.shipping').append(result);
            });
        });

        function removed(count) {
            $('#remove-' + count).remove();
        }
    </script>
@endpush
