@extends('admin.masterAdmin')

@section('title_area')
Daftar User | JobLink
@endsection


@section('mainContent')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Daftar User</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table" id="table_id">
                  <thead class=" text-primary">
                    <th>
                      No
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                      Password
                    </th>
                    <th>
                      Aksi
                    </th>
                  </thead>
                  <tbody>
                    <input type="hidden" value="{{$i = 1}}">
                    @foreach ($all_subject as $item)
                    <tr>
                      <td>
                            {{$i++}}
                      </td>
                      <td>
                        {{$item['email']}}
                      </td>
                      <td>
                        {{$item['password']}}
                      </td>
                      <td>
                        <button type="button" onclick="dell('{{$item['userid']}}')" class="btn btn-danger">Delete</button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

@endsection
