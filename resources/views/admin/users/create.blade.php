@extends('admin.layout.master')
@section('title', 'User Create')

@section('content')

    <div class="">


        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Create User</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <a class="btn btn-primary btn-sm" href="{{ route('user.index') }}"> {{ _('Back') }}</i></a>
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                            @csrf

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" data-validate-length-range="6" data-validate-words="2"
                                        name="name" placeholder="enter your name" required="required" />
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
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Email<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="email" class='email' required="required"
                                        type="email" />
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Password<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="password" id="password1" name="password"
                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}"
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

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Billing Address </label>
                                <div class="col-md-6 col-sm-6">
                                    <textarea name='billing_address' class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Shipping Address </label>
                                <div class="col-md-6 col-sm-6">
                                    <textarea name='shipping_address' class="form-control"></textarea>
                                </div>
                            </div>
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
