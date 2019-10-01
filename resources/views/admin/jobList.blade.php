@extends('admin.masterAdmin')

@section('title_area')
List Job | JobLink
@endsection


@section('mainContent')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">List Job</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table" id="table_id">
                  <thead class=" text-primary">
                    <th>
                      No
                    </th>
                    <th>
                      Nama Perusahaan
                    </th>
                    <th>
                      Lokasi
                    </th>
                    <th>
                      Posisi
                    </th>
                    <th>
                      Waktu Bekerja
                    </th>
                  </thead>
                  <tbody>
                    <input type="hidden" value="{{$i = 1}}">
                    @foreach ($all_jobs as $item)
                    <tr>
                      <td>
                        {{$i++}}
                      </td>
                      <td>
                        {{$item['namaPerusahaan']}}
                      </td>
                      <td>
                        {{$item['lokasi']}}
                      </td>
                      <td>
                        {{$item['posisi']}}
                      </td>
                      <td>
                        {{$item['waktuBekerja']}}
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
