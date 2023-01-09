@extends('layouts.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Desa</h1>
  </div>


@if(session()->has('success'))
    <div class="alert alert-success col-lg-6" role="alert">
    {{  session('success') }}
    </div>
@endif
  <div class="table-responsive col-lg-6">
      <a href="{{ route('desa.create') }}" class="btn btn-primary mb-3">Create New Desa</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($desas as $desa)
          <tr>
            <td>{{ $desa->id}}</td>
            <td>{{ $desa->name}}</td>

            <td>
                <a href="{{ route('desa.edit',$desa->id) }}" class="badge bg-warning">
                <span data-feather="edit"></span></a>
                <form action="{{ route('desa.destroy',$desa->id)}}" method="post" class="d-inline">
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
