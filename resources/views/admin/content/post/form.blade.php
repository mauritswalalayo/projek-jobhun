@extends('admin.master')

@section('title', 'Post Form')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <a href="{{route('admin.post')}}" class="btn btn-danger">Kembali</a>
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
                <label for="title">Judul :</label>
                <input name="title" type="text" id="title" class="form-control" placeholder="Masukan Title Anda......">
            </div>
            <div class="form-group">
                <label for="content">Isi Konten :</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label>Tag</label>
                <select class="form-control select2" name="tags[]" multiple="multiple" data-placeholder="Select tag"
                    style="width: 100%;">
                    <option value="" selected="selected"></option>
                </select>
            </div>


        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">Tambah Data</button>
        </div>
    </form>
    </div>

@endsection