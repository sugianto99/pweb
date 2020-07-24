@extends('layouts.admin')
@section('konten')
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <ol class="breadcrumb float-sm-left" style="padding-bottom:2px; ">
      <li class="breadcrumb-item"><a href="#"><i class="fa fa-chevron-circle-right"></i> Siswa</a></li>
      <li class="breadcrumb-item active">{{$title}} </li>
   </ol>
</div>
 <!-- Static Table Start -->
    <div class="data-table-area mg-tb-15">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline13-list">
                  <a href="{{url('/kelas/add')}}" class="btn btn-info bg-gradient-primary btn-sm pull-right"><i class="fa fa-plus-circle"></i> Input Data</a>
                  <a href="" class="btn btn-info bg-gradient-primary btn-sm pull-right"><i class="fa fa-trash"></i> Terhapus</a>
            </div>
            <div class="sparkline13-list">
                  <div class="table-responsiv">
                   <div class="datatable-dashv1-list custom-datatable-overright">   
                      <div id="toolbar">
                        <select class="form-control">
                          <option value="">Export Basic</option>
                          <option value="all">Export All</option>
                          <option value="selected">Export Selected</option>
                        </select>
                      </div>
                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" class="table table-striped table-bordered first">
                        <thead class="bg-primary">
                          <tr>
                            <th data-field="state" data-checkbox="true"></th>
                  <th class="text-center">No</th>
                  <th>Nama Kelas</th>
                  <th>Tahun Masuk</th>
                  <th>Jurusan</th>
                  <th>Status</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  @foreach($kelas as $row)
                  <tr>
                    <td></td>
                     <td>{{$no++}}</td>
                     <td style="text-transform: uppercase;">{{$row->nama_kelas}}</td>
                     <td>{{@$row->tahunajaran->tahun_ajaran}}</td>
                     <td>{{@$row->jurusan->nama_jurusan}}</td>
                     <td class="text-center">
                        @if($row->status==1)
                        <span class="badge badge-primary">Aktif</span>
                        @elseif($row->status==0)
                        <span class="badge badge-danger">Tidak Aktif</span>
                        @endif
                     </td>
                     <td class="text-center" width="250">
                        <a href="{{url('kelas/edit/'.$row->kelas_id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                        <a href="{{url('kelas/delete/'.$row->kelas_id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
                     </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          </div>
         </div>
      </div>
    </div>
</div>
@endsection
