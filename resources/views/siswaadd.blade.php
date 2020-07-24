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
                <h3 class="card-title"><i class="fa fa-plus-circle"></i> Input Data Siswa</h3>
              @if ($errors->any())
               <div class="alert alert-warning bg-white alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><em>
                  <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                  </ul>
                  </em>
               </div>
               @endif
              <form role="form" action="{{url('siswa/store')}}" method="post">
                  {{csrf_field()}}
                  
                  <div class="card-body row">
                     <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">NIS</label>
                        <input required type="text" name="nis" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIS">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">NISN</label>
                        <input required type="text" name="nisn" class="form-control" id="exampleInputPassword1" placeholder="Masukan NISN">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Nama Siswa</label>
                        <input required type="text" name="nama_siswa" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama Siswa">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Alamat</label>
                        <input required type="text" name="alamat" class="form-control" id="exampleInputPassword1" placeholder="Masukan Alamat">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Kelas</label>
                        <select required name="id_kelas" class="form-control kelas">
                           <option>Pilih Kelas</option>
                           @foreach($kelas as $row)
                           <option value="{{$row->kelas_id}}">{{$row->nama_kelas}}</option>
                           @endforeach
                        </select>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Jurusan</label>
                        <input disabled type="text" class="form-control" id="exampleInputPassword1" placeholder="Silahkan Pilih Kelas">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Jenis Kelamin</label><br>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" name="jk" value="L" id="customRadio2" name="customRadio">
                          <label for="customRadio2" class="custom-control-label">Laki-laki</label>
                        </div>    
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" name="jk" value="P" id="customRadio1" name="customRadio">
                          <label for="customRadio1" class="custom-control-label">Perempuan</label>
                        </div>
                                         
                     </div>
                  </div>
                <div class="card-footer">
                <a class="btn btn-danger bg-gradient-danger btn-sm" href="{{url('siswa/')}}"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
                  <button type="submit" class="btn btn-primary bg-gradient-primary btn-sm"><i class="fa fa-check"></i> Simpan</button>
                </div>
              </form>
            </div>
            </div>
         </div>
      </div>
</div>
@endsection
