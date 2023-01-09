@extends('layouts.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kecamatan</h1>
  </div>


@if(session()->has('success'))
    <div class="alert alert-success col-lg-6" role="alert">
    {{  session('success') }}
    </div>
@endif
  <div class="table-responsive col-lg-6">
      <a href="{{ route('kecamatan.create') }}" class="btn btn-primary mb-3">Create New Kecamatan</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>

          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($kecamatans as $kecamatan)
          <tr>
            <td>{{ $kecamatan->id}}</td>
            <td>{{ $kecamatan->name}}</td>

            <td>
                <a href="{{ route('kecamatan.edit',$kecamatan->id) }}" class="badge bg-warning">
                <span data-feather="edit"></span></a>
                <form action="{{ route('kecamatan.destroy',$kecamatan->id)}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')">
                <span data-feather="x-circle"></span></button>
                </form>
            </td>
          </tr>
          @endforeach

      </tbody>
    </table>
  </div>
@endsection
