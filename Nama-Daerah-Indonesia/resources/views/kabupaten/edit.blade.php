@extends('layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Provinsi</h1>
  </div>

  <div class="col-lg-8">
  <form method="post" action="{{ route('kabupaten.update', $kabupaten->id) }}" class="mb-5"
    enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
      <label for="name" class="form-label">Nama</label>
      <input type="text" class="form-control" id="name"
      name="name">
    </div>
    <div class="mb-3">
        <label for="provinsi" class="form-tabel">Provinsi</label>
        <select class="form-select" name="provinsi_id">
            @foreach($provinsis as $provinsi)
            @if(old('provinsi_id') == $provinsi->id)
               <option value="{{ $provinsi->id }}" selected>{{ $provinsi->name }}</option>
               @else
               <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
               @endif
            @endforeach
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Update Provinsi</button>
  </form>
</div>
@endsection
