@extends('layouts.admin')
@section('konten')
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <ol class="breadcrumb float-sm-left" style="padding-bottom:2px; ">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-chevron-circle-right"></i> Jurusan</a></li>
        <li class="breadcrumb-item active">{{$title}} </li>
      </ol>
    </div>
  <!-- Static Table Start -->
    <div class="data-table-area mg-tb-15">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline13-list">
                <h3 class="card-title"><i class="fa big-icon fas fa-edit"></i> Form {{$title}}</h3>
              <form role="form" action="{{url('mata-pelajaran/update/'.$mapel->mata_pelajaran_id)}}" method="post">
                  {{csrf_field()}}
                  {{method_field('PUT')}}
                  <div class="card-body row">
                     <div class="form-group col-md-2">
                        <label for="exampleInputEmail1">Kode</label>
                        <input value="{{$mapel->kode_mapel}}" required type="text" name="kode_mapel" class="form-control" id="exampleInputEmail1" placeholder="Kode">
                     </div>
                     <div class="form-group col-md-5">
                        <label for="exampleInputEmail1">Mata Pelajaran</label>
                        <input value="{{$mapel->nama_mapel}}" required type="text" name="nama_mapel" class="form-control" id="exampleInputEmail1" placeholder="Nama Pelajaran">
                     </div>
                     <div class="form-group col-md-5">
                        <label for="exampleInputPassword1">Pilih Jenis Pelajaran</label>
                        <select name="jenis_mapel" class="form-control">
                            <option selected value="{{$mapel->jenis_mapel}}">{{$mapel->jenis_mapel}}</option>
                            <option value="Normatif">Normatif</option>
                            <option value="Adaptif">Adaptif</option>
                            <option value="Produktif">Produktif</option>
                        </select>
                     </div>
                  </div>
                <div class="card-footer">
                  <a class="btn btn-danger bg-gradient-danger btn-sm" href="{{url('kelas/')}}"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
                  <button type="submit" class="btn btn-primary bg-gradient-primary btn-sm"><i class="fa fa-check"></i> Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
         </div>
      </div>
</div>
@endsection
