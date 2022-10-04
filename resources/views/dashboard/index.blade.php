@extends('layout.app')

@section('title')
    Dashboard
@endsection

@section('content')

<section class="content-header"></section>

    <div class="row">
        <div class="col-lg-3 col-6">
    
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{$guru->count()}}</h3>
                    <p>Data Guru</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-alt"></i>
                </div>
                <a href="{{route('guru.store')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    
        <div class="col-lg-3 col-6">
    
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{$kelas->count()}}<sup style="font-size: 20px"></sup></h3>
                    <p>Data Kelas</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{route('kelas.store')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    
        <div class="col-lg-3 col-6">
    
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{$mapel->count()}}</h3>
                    <p>Data Mapel</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{route('mapel.store')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    
        <div class="col-lg-3 col-6">
    
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{$siswa->count()}}</h3>
                    <p>Data Siswa</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{route('siswa.store')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    
    </div>

@endsection
