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
            <div class="breadcrumb float-sm-left">
               <div class="sparkline13-list" style="height: 0px;">
                        <a href="{{url('/siswa/add')}}" class="btn btn-info bg-gradient-primary btn-sm pull-left"><i class="fa fa-plus-circle"></i> Tambah Siswa</a>
                        <a href="#" class="btn btn-info bg-gradient-primary btn-sm pull-left" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-download"></i> Export</a>
                        <a href="" class="btn btn-info bg-gradient-primary btn-sm pull-left"><i class="fa fa-upload"></i> Import</a>
                        <a href="{{url('/guru/recovery/')}}" class="btn btn-info bg-gradient-primary btn-sm pull-left"><i class="fa fa-trash"></i> Data Terhapus</a>
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
                        <th>NISN</th>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>JK</th>
                        <th></th>
                     </tr>
                     </thead>
                     <tbody>
                     <?php $no = 1; ?>
                     @foreach($siswa as $row)
                     <tr>
                        <td></td>
                        <td class="text-center"><?php echo $no++; ?></td>
                        <td>{{$row->nisn}}</td>
                        <td>{{$row->nis}}</td>
                        <td>{{$row->nama_siswa}}</td>
                        <td>{{@$row->kelas->nama_kelas}}</td>
                        <td width="50" class="text-center">{{$row->jk}}</td>
                        <td width="160" class="text-center">
                           <a href="{{url('siswa/update/'.$row->siswa_id)}}" class="btn btn-primary bg-gradient-primary btn-xs"><i class="fa fa-edit"></i> Edit</a>
                           <a href="{{url('siswa/delete/'.$row->siswa_id)}}" class="btn btn-danger btn-xs hapus"><i class="fa fa-trash"></i> Hapus</a>
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

<div class="modal fade" id="modal-lg">
   <div class="modal-dialog modal-sm">
      <div class="modal-content">
         <div class="modal-header">
            <div class="modal-title"><i class="far fa-file-excel"></i> Export Data</div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
         <form action="{{url('siswa/export/')}}" method="post">
         @csrf
            <div class="form-group">
               <select name="kelas_id" id="" class="form-control">
                  @foreach($kelas as $row)
                  <option value="{{$row->kelas_id}}">{{$row->nama_kelas}}</option>
                  @endforeach
               </select>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-download"></i> Download</button>            
            </div>  
         </div>
         </form>
      </div>
   </div>
</div>
@endsection
