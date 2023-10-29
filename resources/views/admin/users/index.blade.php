

@extends('admin.layout.master')
@section('title', 'User List')

@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
                <h2>User List</h2>
                <ul class="nav navbar-right panel_toolbox">
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
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                            <td>Cover Photo</td>
                            <td>Profile Photo</td>
                            <td>{{$user->role}}</td>
                            <td>{{$user->email}}</td>
                            <td>Status</td>
                            <td>Action</td>
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
