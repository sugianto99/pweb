@extends('layouts.admin')
@section('konten')
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <ol class="breadcrumb float-sm-left" style="padding-bottom:2px; ">
      <li class="breadcrumb-item"><a href="#"><i class="fa fa-chevron-circle-right"></i> <b>Tenaga Pendidik</b></a></li>
      <li class="breadcrumb-item active"><b>{{$title}}</b></li>
    </ol>
  </div> 
    <!-- Static Table Start -->
    <div class="data-table-area mg-tb-15">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- <div class="panel">
              <div class="panel panel-primary card-outline" style="height: 0px;"></div> -->
              <div class="sparkline13-list" style="height: 0px;">
               <a href="{{url('/wali-kelas/add')}}" class="btn btn-info bg-gradient-primary bg-gradient-dange btn-sm pull-right"><i class="fa fa-plus-circle"></i> Tambah Wali Kelas</a>
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
                        <th>Nama Guru</th>
                        <th>Wali Kelas</th>
                        <th></th>
                     </tr>
                     </thead>
                     <tbody>
                     <?php $no = 1; ?>
                     @foreach($walikelas as $row)
                     <tr>
                      <td></td>
                        <td>{{$no++}}</td>
                        <td>{{@$row->guru->nama_lengkap}}</td>
                        <td>{{@$row->kelas->nama_kelas}}</td>
                        <td class="text-center">
                           <a href="{{url('wali-kelas/edit/'.$row->walikelas_id)}}" class="btn btn-primary bg-gradient-primary bg-gradient-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                           <a href="{{url('wali-kelas/delete/'.$row->walikelas_id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
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
</div></div>
@endsection
