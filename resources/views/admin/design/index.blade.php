@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{ asset('plugins') }}/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('plugins') }}/datatables-responsive/css/responsive.bootstrap4.min.css">
@endsection

@section('content')
<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-12">
            <div class="d-md-flex">
                <ol class="breadcrumb ms-auto">
                    <li><a class="fw-normal">Dashboard</a></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="container-fluid">
    {{-- <div class="row mb-4">
        <div class="col-12">
            <a href="" class="btn btn-sm- btn-primary">Tambah User</a>
        </div>
    </div> --}}
    <div class="row">
        @if (Session::has('success'))
        <div class="col mb-4">
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        </div>
        @endif
        @if (Session::has('error'))
        <div class="col mb-4">
            <div class="alert alert-danger">
                {{Session::get('error')}}
            </div>
        </div>
        @endif

        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    Data Design
                </div>
                <div class="container-fluid">
                    <div class="row mb-4">
                        <div class="col-12">
                            <a href="{{route('design.create')}}" class="btn btn-success">Input</a>
                        </div>
                    </div>
                <div class="card-body">
                    <table id="table-users" class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Image</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody></tbody>


                    @foreach ($data as $design)
                        <tr class="text-center">

                            <td>{{ $design->id }}</td>
                            <td>{{ $design->name }}</td>
                            <td> <img width="100px" src="{{asset(''.$design->image)}}"> </td>
                            <td>{{ $design->description }}</td>

                            <td>
                                <form action="{{ route('design.destroy',$design->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('design.edit',$design->id) }}">Edit</a>
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
