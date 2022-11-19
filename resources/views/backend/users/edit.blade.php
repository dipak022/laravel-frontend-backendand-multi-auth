


@extends('backend/layouts/layoutMaster')

@section('title', 'Edit customer')

@section('vendor-style')
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}"/>

    <link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}"/>
@endsection

@section('vendor-script')


    <script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')

    <script src="{{asset('backend/assets/custom/js/user-edit.js')}}"></script>


@endsection

@section('content')
    @include('backend/layouts/sections/messages')

    <div class="row">
        <!-- FormValidation -->
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit Customer</h5>
                    @if (Auth::guard('admin')->user()->can('user.view'))
                        <small class="text-muted float-end">
                            <a href="{{ route('user.index') }}" class="btn btn-primary">
                                <div>Customer List</div>
                            </a>
                        </small>
                    @endif
                </div>
                <div class="card-body">
                    <form id="editUser" class="row g-3" action="{{ route('user.update', $user->id) }}" method="POST">
                        @method('PUT')
                        @csrf

                        <div class="col-md-6">
                            <label class="form-label" for="first_name">First Name</label>
                            <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name"
                                   name="first_name" placeholder="Enter First Name"  value="{{ $user->information->first_name ?? '' }}">
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                            @enderror

                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="last_name">Last Name</label>
                            <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name"
                                   name="last_name" placeholder="Enter Last Name"  value="{{ $user->information->last_name ?? '' }}">
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                            @enderror

                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="email">Email</label>
                            <input autocomplete="new-password" type="email"
                                   class="form-control @error('email') is-invalid @enderror" id="email"
                                   name="email" placeholder="Enter Email"  value="{{ $user->email }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                            @enderror

                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="user_name">User Name</label>
                            <input type="text" class="form-control @error('user_name') is-invalid @enderror" id="user_name"
                                   name="user_name" placeholder="Enter Last Name"  value="{{ $user->information->username ?? '' }}">
                            @error('user_name')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                            @enderror

                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="roles">Select Role</label>
                            <select  name="roles" id="roles" class="select2 form-select">
                                <option value="" disabled selected>Select</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}" {{   $user->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="userRole"> Status</label>
                            <select id="status" name="status" class="form-select">
                                <option value="" disabled selected>Select status</option>
                                <option value="1" {{$user->status=='1' ? 'selected' : ''}} >Pending</option>
                                <option value="2" {{$user->status=='2' ? 'selected' : ''}} >Active</option>
                                <option value="3" {{$user->status=='3' ? 'selected' : ''}} >Inactive</option>
                                <option value="4" {{$user->status=='4' ? 'selected' : ''}} >Suspend </option>

                            </select>
                            @error('status')
                            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="form-password-toggle">
                                <label class="form-label" for="new_password">New Password</label>
                                <div class="input-group input-group-merge @error('new_password') is-invalid @enderror">
                                    <input autocomplete="new-password" class="form-control" type="password"
                                           id="new_password" name="new_password"
                                           placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                           aria-describedby="multicol-password2"/>
                                    <span class="input-group-text cursor-pointer" id="multicol-password2"><i
                                            class="bx bx-hide"></i></span>
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-password-toggle">
                                <label class="form-label" for="new_password_confirmation">Confirm Password</label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="password" id="new_password_confirmation"
                                           name="new_password_confirmation"
                                           placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                           aria-describedby="multicol-confirm-password2"/>
                                    <span class="input-group-text cursor-pointer" id="multicol-confirm-password2"><i
                                            class="bx bx-hide"></i></span>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <button type="submit" name="submitButton" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /FormValidation -->
    </div>
@endsection
