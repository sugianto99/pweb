@extends('layouts.admin')
@section('konten')
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <ol class="breadcrumb float-sm-left" style="padding-bottom:2px; ">
      <li class="breadcrumb-item"><a href="#"><i class="fa fa-chevron-circle-right"></i> <b style="font-family:'play', sans-serif;">Data Guru</b></a></li>
      <li class="breadcrumb-item active"><b>{{$title}}</b></li>
    </ol>
  </div>  
    <!-- Static Table Start -->
    <div class="data-table-area mg-tb-15">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline13-list">
            <div class="card card-primary card-outline">
                <h3 class="card-title"><i class="fa fa-plus-circle"></i> Form {{$title}}</h3>
              </div>
              <form role="form" action="{{url('guru/store')}}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <div class="card-body row">
                  <div class="col-md-8">
                     <div class="row">
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">NIK</label>
                        <input required type="text" name="nik" class="form-control" id="exampleInputEmail1" placeholder="Nomor Induk Kewarganegaraan">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">NIP</label>
                        <input required type="text" name="nip" class="form-control" id="exampleInputEmail1" placeholder="Nomor Induk Pegawai">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input required type="text" name="nama_lengkap" class="form-control" id="exampleInputEmail1" placeholder="Nama Lengkap">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input required type="text" name="alamat" class="form-control" id="exampleInputEmail1" placeholder="Alamat">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Telepon</label>
                        <input required type="text" name="telepon" class="form-control" id="exampleInputEmail1" placeholder="Telepon">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Pilih Jenjang Pendidikan</label>
                        <select name="jp_id" class="form-control">
                           <option>Pilih Jenjang Pendidikan</option>
                           @foreach($jenjang_pendidikan as $row)
                           <option value="{{$row->jp_id}}">{{$row->jenjang_pendidikan_detail}}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Status</label><br>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" checked type="radio" name="status" value="aktif" id="customRadio2" name="customRadio">
                          <label for="customRadio2" class="custom-control-label">Aktif</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" name="status" value="nonaktif" id="customRadio1" name="customRadio">
                          <label for="customRadio1" class="custom-control-label">Tidak Aktif</label>
                        </div>
                     </div>
                  </div>
                  </div>
                  <div class="col-md-4">
                  <label>FOTO PROFILE</label>
                  <div class="card card-primary card-outline">
                    <div class="sparkline13-list" style="border-style: 5px;">
                      <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                       src="{{url('dist/img/user4-128x128.jpg')}}"
                       alt="User profile picture">
                      </div>
                      <div class="form-group" style="margin-top: 10px;">
                    <div class="custom-file">
                      <input type="file" name="images" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                    </div>

                  </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
          <div class="card-footer">
            <a class="btn btn-danger bg-gradient-danger btn-sm" href="{{url('guru/')}}"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
            <button type="submit" class="btn btn-primary bg-gradient-primary btn-sm"><i class="fa fa-check"></i> Simpan</button>
          </div>
        </form>
            </div>
            <!-- /.card -->
            </div>
            </div>
         </div>
      </div>
</div>
@endsection
