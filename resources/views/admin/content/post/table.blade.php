@extends('admin.master')

@section('title' , 'Post Table')

@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
        {{-- @if(Auth::user()->role == 'admin') --}}
        <a href="{{route('admin.post.form')}}" class="btn btn-primary">Tambah User</a>
        {{-- @endif --}}
    </div>
    <div class="box-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm glyphicon glyphicon-pencil">Edit</a>
                        <a href="" class="btn btn-danger btn-sm glyphicon glyphicon-trash">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection