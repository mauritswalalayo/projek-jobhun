@extends('admin.master')

@section('title', 'Tag Form')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        <a href="{{route('admin.tag')}}" class="btn btn-danger">Kembali</a>
    </div>
    <div class="box-body">

    </div>

    <form action="" method="POST">
        <input type="hidden" name="_method" value="PATCH">
        <form action="" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token()}}">

            <div class="box-body">
                <div class="form-group">
                    <label for="title">Nama Tag:</label>
                    <input name="name" type="text" id="name" class="form-control" placeholder="Masukan Tag Anda......">
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Update</button>
            </div>
        </form>
</div>
@endsection