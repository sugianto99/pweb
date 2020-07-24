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
              <form role="form" action="{{url('jurusan/update/'.$jurusan->jurusan_id)}}" method="post">
                  {{csrf_field()}}
                  {{method_field('PUT')}}
                  <div class="card-body row">
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Kode Jurusan</label>
                        <input  value="{{$jurusan->singkatan}}" required type="text" name="singkatan" class="form-control" id="exampleInputEmail1" placeholder="Contoh : TKJ">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Nama Jurusan</label>
                        <input value="{{$jurusan->nama_jurusan}}" style="text-transform: capitalize;" required type="text" name="nama_jurusan" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Jurusan">
                     </div>
                  </div>
                <div class="card-footer">
                  <a class="btn btn-danger bg-gradient-danger btn-sm" href="{{url('jurusan/')}}"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
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
