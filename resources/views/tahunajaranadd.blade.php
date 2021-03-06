@extends('layouts.admin')
@section('konten')
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <ol class="breadcrumb float-sm-left" style="padding-bottom:2px; ">
         <li class="breadcrumb-item"><a href="#"><i class="fa fa-chevron-circle-right"></i> Akademik</a></li>
         <li class="breadcrumb-item active">{{$title}} </li>
      </ol>
   </div>
   <!-- Static Table Start -->
    <div class="data-table-area mg-tb-15">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline13-list">
                <h3 class="card-title"><i class="fa fa-plus-circle"></i> Form {{$title}}</h3>
                <form role="form" action="{{url('tahun-ajaran/store')}}" method="post">
                  {{csrf_field()}}
                  <div class="card-body row">
                     <div class="form-group col-md-12">
                        <label for="exampleInputEmail1">Tahun Ajaran</label>
                        <input required type="text" name="tahun_ajaran" class="form-control" id="exampleInputEmail1" placeholder="Misal : 2019/2020">
                     </div>
                  </div>
                    <div class="card-footer">
                    <button class="btn btn-danger btn-sm bg-gradient-danger" onclick="location(href:'blabla')"><i class="fa fa-chevron-circle-left"></i> Kembali</button>
                    <button type="submit" class="btn btn-primary bg-gradient-primary btn-sm"><i class="fa fa-check"></i> Simpan</button>
                    </div>
                </form>
            </div>
            </div>
         </div>
      </div>
</div>
@endsection
