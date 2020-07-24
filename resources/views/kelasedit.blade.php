@extends('layouts.admin')
@section('konten')
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="border-radius: 5px;">
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
            <div class="card card-primary card-outline">
                <h3 class="card-title"><i class="fa big-icon fas fa-edit"></i> Form {{$title}}</h3>
              </div>
              <form role="form" action="{{url('kelas/update/'.$kelas->kelas_id)}}" method="post">
                  {{csrf_field()}}
                  {{method_field('PUT')}}
                  <div class="card-body row">
                     <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Nama Kelas</label>
                        <input value="{{$kelas->nama_kelas}}" style="text-transform:uppercase;" required type="text" name="nama_kelas" class="form-control" id="exampleInputEmail1" placeholder="Nama Kelas">
                     </div>
                     <div class="form-group col-md-4">
                        <label>Tahun Masuk</label>
                        <select name="tahun" class="form-control">
                           <option value="{{$kelas->tahun_ajaran_id}}">{{@$kelas->tahun->tahun_ajaran}}</option>
                           @foreach($tahun_ajaran as $row)
                           <option value="{{$row->tahun_ajaran_id}}">{{$row->tahun_ajaran}}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group col-md-4">
                        <label>Pilih Jurusan</label>
                        <select name="id_jurusan" class="form-control">
                           <option value="{{$kelas->jurusan_id}}">{{@$kelas->jurusan->nama_jurusan}}</option>
                           @foreach($jurusan as $row)
                           <option value="{{$row->jurusan_id}}">{{$row->nama_jurusan}}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group col-md-4">
                        <label>Status</label><br>
                        <div class="custom-control custom-radio">
                          <input @if($kelas->status=="1") {{"checked"}} @endif class="custom-control-input" type="radio" name="status" value="1" id="customRadio2" name="customRadio">
                          <label for="customRadio2" class="custom-control-label">Aktif</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input @if($kelas->status=="0") {{"checked"}} @endif class="custom-control-input" type="radio" name="status" value="0" id="customRadio1" name="customRadio">
                          <label for="customRadio1" class="custom-control-label">Tidak Aktif</label>
                        </div>
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
