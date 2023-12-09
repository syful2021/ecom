

@extends('admin.layout.master')
@section('title', 'User List')
@push('css_link')
    {{--  Bootstrap --}}
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    {{-- database --}}
    <link href="{{asset('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css ')}}" rel="stylesheet">
    <link href="{{asset('admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css ')}}" rel="stylesheet">
    <link href="{{asset('admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css ')}}" rel="stylesheet">
    <link href="{{asset('admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css ')}}" rel="stylesheet">
    <link href="{{asset('admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css ')}}" rel="stylesheet">
@endpush

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
                <h2>User List</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <a class="btn btn-primary btn-sm" href="{{route('user.create')}}" > {{_('Create User')}}</i></a>
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>

                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th>SL</th>
                      <th>Name</th>
                      <th>Cover Photo</th>
                      <th>Profile Photo</th>
                      <th>Role</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user )

                    {{-- @if ($user->id == 11)
                    {{dd(json_decode($user->billing_address))}}

                    @endif --}}
                    
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                            <td >
                                <img src="{{ asset('storage/'.$user->cover_image) }}
                                " alt="{{__('cover photo')}}" height="40px" width="40px">
                            </td>
                            <td>
                                <img src="{{asset('storage/'.$user->image)}}" alt="{{__('photo')}}" height="40px" width="40px">
                            </td>
                            <td>{{$user->role}}</td>
                            <td>{{$user->email}}</td>

                            <td>
                                <a href="{{route('user.status',$user->id)}}" class="btn btn-sm {{$user->status == 1 ? 'btn-danger' : 'btn btn-success'}}">{{$user->status == 1 ? 'Deactive' : 'Active'}}</a>
                            </td>
                            <td>
                                <a href="{{route('user.edit', $user->id)}}" class="btn btn-outline-info btn-sm">Edit</a>
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
    </div>

@endsection

@push('js_link')

     <!-- Datatables -->
     <script src="{{asset('admin/vendors/datatables.net/js/jquery.dataTables.min.js ')}}  "></script>
     <script src="{{asset('admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js ')}}"></script>
     <script src="{{asset('admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js ')}}"></script>
     <script src="{{asset('admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js ')}}"></script>
     <script src="{{asset('admin/vendors/datatables.net-buttons/js/buttons.flash.min.js ')}}"></script>
     <script src="{{asset('admin/vendors/datatables.net-buttons/js/buttons.html5.min.js ')}}"></script>
     <script src="{{asset('admin/vendors/datatables.net-buttons/js/buttons.print.min.js ')}}"></script>
     <script src="{{asset('admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js ')}}"></script>
     <script src="{{asset('admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js ')}}"></script>
     <script src="{{asset('admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js ')}}"></script>
     <script src="{{asset('admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js ')}}"></script>
     <script src="{{asset('admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js ')}}"></script>
     <script src="{{asset('admin/vendors/jszip/dist/jszip.min.js ')}}"></script>
     <script src="{{asset('admin/vendors/pdfmake/build/pdfmake.min.js ')}}"></script>
     <script src="{{asset('admin/vendors/pdfmake/build/vfs_fonts.js ')}}"></script>


@endpush
