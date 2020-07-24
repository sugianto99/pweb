@extends('layouts.admin')
@section('konten')
 <div class="main">
  <!-- MAIN CONTENT -->
    <div class="code-editor-area mg-tb-15">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="border-top-style: 12px; color: rgba(192, 12, 11);">
            <div class="code-editor-single responsive-mg-b-30">
              <h3 class="card-title text-primary"><i class="fa fa-globe"></i> Sistem Informasi Akademik</h3>
                <p class="panel-heading">
                  <span class="title"><b style="font-size: 20px;">{{Auth::user()->name}}</b></span><br>
                  <span>Visitors Over Time</span>
                </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 border-top-style primary">
            <div class="code-editor-single shadow-reset">
              <h3 class="card-title text-primary"><i class="fa fa-user"></i> Informasi Pengguna</h3>
                <p class="panel-heading">
                  <span>Masuk sebagai : </span><br>
                  <span class="panel-title"><b style="font-size: 20px;"><i class="fa fa-user"></i> {{Auth::user()->name}}</b></span>        
                </p>
              </div>
            </div>
          </div>
       </div>
    </div>
    <div class="content">
      <div class="col-lg-3 col-6">
        <div class="panel panel-headline">
          <div class="panel-heading bg-warning">
            <div class="inner">
              <h3><i class="fa fa-graduation-cap"></i> {{@$jumlah_guru}}</h3>
              <p>Tenaga Pendidik</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
              <a href="#" class="panel-headline">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="panel panel-headline">
          <div class="panel-heading bg-success">
            <div class="inner">
              <h3><i class="fa fa-users"></i> {{@$jumlah_siswa}}<sup style="font-size: 20px"></sup></h3>
                <p>Siswa</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
          <style>
            .small-box a{
              color: white;
            }
          </style>
      <div class="col-lg-3 col-6">
        <div class="panel panel-headline">
          <div class="panel-heading bg-info">
            <div class="inner text-white">
              <h3><i class="fa fa-bars"></i> {{@$jumlah_kelas}}</h3>
                <p>Kelas</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
              <a href="#" class="small-box-footer text-white" style="color: white;">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="panel panel-headline">
          <div class="panel-heading bg-danger">
              <div class="inner">
                <h3><i class="fa fa-cog"></i> {{@$jumlah_jurusan}}</h3>
                  <p>Jurusan</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
  </div><br><br><br><br><br><br><br><br>

@endsection
