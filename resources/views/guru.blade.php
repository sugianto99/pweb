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
                <a href="{{url('/guru/add')}}" class="btn btn-info bg-gradient-primary btn-sm pull-left"><i class="fa fa-plus-circle"></i> Input Data</a>
                <a href="" class="btn btn-info bg-gradient-primary btn-sm pull-left"><i class="fa fa-download"></i> Export Data</a>
                <a href="" class="btn btn-info bg-gradient-primary btn-sm pull-left"><i class="fa fa-upload"></i> Import Data</a>
                <a href="{{url('/guru/recovery/')}}" class="btn btn-info bg-gradient-primary btn-sm pull-left"><i class="fa fa-trash"></i> Terhapus</a></div>
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
                            <th data-field="nuptik" data-editable="true">NUPTK</th>
                            <th>Nama Lengkap</th>
                            <th>Jenjang Pendidikan</th>
                            <th>Status</th>
                            <th></th>
                          </tr>
                        </thead>
                      <tbody id="data-guru" style="padding-left: 5px;">
                      <?php $no = 1; ?>
                       @foreach($guru as $row)
                        <tr>
                        <td></td>
                        <td>{{$no++}}</td>
                        <td>   
                      {{$row->nip}}
                        </td>
                        <td>{{$row->nama_lengkap}}</td>
                        <td>{{@$row->jenjang_pendidikan->jenjang_pendidikan_detail}}</td>
                        <td class="text-center">
                      @if($row->status=="aktif")
                          <span class="badge badge-primary" style="text-transform:uppercase;">{{$row->status}}</span>
                          @else
                          <span class="badge badge-danger" style="text-transform:uppercase;">{{$row->status}}</span>
                          @endif
                        </td>
                        <td class="text-center">
                            <a href="{{url('guru/edit/'.$row->guru_id)}}" class="btn btn-success btn-xs bg-gradient-success detail-guru" data-id="{{$row->guru_id}}" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-eye"></i> Detail</a>
                            <a href="{{url('guru/edit/'.$row->guru_id)}}" class="btn btn-primary bg-gradient-primary btn-xs"><i class="fa fa-edit"></i> Edit </a>
                            <a href="{{url('guru/trash/'.$row->guru_id)}}" class="btn btn-danger btn-xs bg-gradient-danger hapus"><i class="fa fa-trash"></i> Hapus</a>
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
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div id="profileguru">
              </div> 
            </div>
          </div>
        </div>
      </div>
  @endsection
