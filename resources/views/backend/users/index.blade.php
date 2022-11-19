@extends('backend/layouts/layoutMaster')

@section('title', 'Customer List ')

@section('vendor-style')
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />

@endsection

@section('vendor-script')
    <script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/datatables-responsive/datatables.responsive.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/datatables-buttons/datatables-buttons.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/jszip/jszip.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/pdfmake/pdfmake.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/datatables-buttons/buttons.html5.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/datatables-buttons/buttons.print.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
    <script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
        <script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection

@section('page-script')
    <script src="{{asset('backend/assets/custom/js/user-index.js')}}"></script>
    <script>
        var routeIndex = "{{ route('user.index') }}";
        var routeCreate = "{{ route('user.create') }}";

        {{--var csrf_token="{{csrf_token()}}";--}}
        {{--var deleteMethod="@method('delete')";--}}

    </script>
@endsection

@section('content')
    @include('backend/layouts/sections/messages')

    <!-- Users List Table -->
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title">Customer List </h5>
        </div>
        <div class="card-datatable table-responsive">
            <table class="datatables-users table border-top">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>First Name</th>
                    <th>First Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $user->information->first_name ?? '' }}</td>
                        <td>{{ $user->information->last_name ?? '' }}</td>
                        <td>{{ $user->information->username ?? '' }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @isset($user->roles)
                                @foreach ($user->roles as $role)
                                    <span class=" me-1">
                          {{ $role->name }}
                      </span>
                                @endforeach
                            @endisset
                        </td>
                        <td>{{ $user->status=='1' ? 'Pending' : ( $user->status=='2' ? 'Active' : ( $user->status=='3' ? 'Inactive' :  ( $user->status=='4' ? 'Suspend' : ''))) }}</td>

                        <td>
                            @if (Auth::guard('admin')->user()->can('user.edit'))
                                <a class="btn btn-sm btn-icon float-start" href="{{ route('user.edit', $user->id) }}" title="Edit">
                                    <i class="bx bx-edit"></i>
                                </a>
                            @endif

                            @if (Auth::guard('admin')->user()->can('user.edit'))
                                <form class="" action="{{ route('user.destroy',$user->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a  class="btn btn-sm btn-icon delete-record text-black" title="Delete" >

                                        <i class="bx bx-trash"></i>

                                    </a>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection


