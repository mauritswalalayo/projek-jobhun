@extends('admin.master')

@section('title', 'Form')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <a href="{{route('admin.user')}}" class="btn btn-danger">Kembali</a>
    </div>
    <div class="box-body">

        {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
    @endif --}}

</div>


<form action="" method="POST">
    <input type="hidden" name="_method" value="PATCH">

    <form action="" method="POST">

        <input type="hidden" name="_token" value="{{ csrf_token()}}">
        <div class="box-body">
            <div class="form-group">
                <label for="name">Nama:</label>
                <input name="name" type="text" id="name" class="form-control" placeholder="Masukan Nama Anda......">
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input name="email" type="email" id="email" class="form-control" placeholder="Masukan Email Anda......">
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">Tambah Data</button>
        </div>
    </form>
    </div>

@endsection