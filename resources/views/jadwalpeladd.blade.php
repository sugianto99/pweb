@extends('layouts.admin')
@section('konten')
<div class="main">
  <!-- MAIN CONTENT -->
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    <ol class="breadcrumb float-sm-left" style="padding-bottom:2px; ">
         <li class="breadcrumb-item"><a href="#"><i class="fa fa-chevron-circle-right"></i> Jadwal Pelajran</a></li>
         <li class="breadcrumb-item active"><b>{{$title}}</b></li>
      </ol>
   </div>
<!-- Static Table Start -->
    <div class="data-table-area mg-tb-15">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline13-list">
                <h3 class="card-title"><i class="fa fa-plus-circle"></i> Form {{$title}}</h3>
                  <div class="card-body">
                     <div class="row">
                     <div class="col-md-12">
                     <div class="col-md-6">
                        <form action="{{url('jadwal-pelajaran/save/')}}" method="POST">
                        @csrf
                        <div class="form-group col-md">
                            <label>Hari</label>
                              <select name="hari" class="form-control">
                                 <option>Pilih Hari</option>
                                 @foreach($hari as $row)
                                 <option value="{{$row->hari_id}}">{{$row->hari}}</option>
                                 @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md">
                              <label>Tahun Ajaran</label>
                              <select name="tahun_ajaran" class="form-control">
                                 <option>Pilih Tahun Ajaran</option>
                                 @foreach($tahun_ajaran as $ta)
                                 <option value="{{$ta->tahun_ajaran_id}}">{{$ta->tahun_ajaran}}</option>
                                 @endforeach
                              </select>
                        </div>
                        <div class="form-group col-md">
                              <label for="exampleInputPassword1">Kelas</label>
                              <select name="kelas" class="form-control">
                                 <option>Pilih Kelas</option>
                                 @foreach($kelas as $row)
                                 <option value="{{$row->kelas_id}}">{{$row->nama_kelas}}</option>
                                 @endforeach
                              </select>
                        </div>             
                        <div class="form-group col-md">
                              <label for="exampleInputPassword1">Guru</label>
                              <select name="guru" class="form-control">
                                 <option>Pilih Guru</option>
                                 @foreach($guru as $row)
                                 <option value="{{$row->guru_id}}">{{$row->nama_lengkap}}</option>
                                 @endforeach
                              </select>
                        </div>
                        
                                <div class="form-group col-md">
                                <button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-check"></i> Simpan</button>
                               </div>
                    </div>
                        <div class="col-md-6">
                        <div class="form-group col-md">
                              <label for="exampleInputPassword1">Mata Pelajaran</label>
                              <select name="mata_pelajaran" class="form-control">
                                 <option>Pilih Mata Pelajaran</option>
                                 @foreach($mata_pelajaran as $row)
                                 <option value="{{$row->mata_pelajaran_id}}">{{$row->nama_mapel}}</option>
                                 @endforeach
                              </select>
                        </div>
                        <div class="form-group col-md">
                              <label for="">Jam Mulai</label>
                              <div class="input-group date" id="timepicker" data-target-input="nearest">
                                 <input name="mulai" type="time" class="form-control datetimepicker-input" data-target="#timepicker"/>
                                 <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                 </div>
                              </div>
                        </div>
                        <div class="form-group col-md">
                              <label for="">Jam Selesai</label>
                              <div class="input-group date" id="timepicker" data-target-input="nearest">
                                 <input name="selesai" type="time" class="form-control datetimepicker-input" data-target="#timepicker"/>
                                 <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="far fa-clock"></i></div>
                                 </div>
                        </div>
                    </div>
                  
                              
                           </form>
                        </div>
                     </div>
                    </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
<!-- <div class="col-md-6">
                           <div class="row">
                           <div class="form-group col-md-3">
                           <label>Tahun Ajaran</label>
                              <div class="input-group">
                              <select name="kelas" class="form-control">
                                 <option value="Normatif">Pilih Kelas</option>
                                 @foreach($kelas as $row)
                                 <option value="Produktif">{{$row->nama_kelas}}</option>
                                 @endforeach
                              </select>                           
                              </div>
                           </div>
                           
                           <div class="form-group col-md-3">
                           <label>Pilih Kelas</label>
                              <div class="input-group">
                              <select name="kelas" class="form-control">
                                 <option value="Normatif">Pilih Kelas</option>
                                 @foreach($kelas as $row)
                                 <option value="Produktif">{{$row->nama_kelas}}</option>
                                 @endforeach
                              </select>                           <div class="input-group-append">
                                    <button class="input-group-text btn-primary">
                                       <span class="fas fa-search"></span>
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </div> -->