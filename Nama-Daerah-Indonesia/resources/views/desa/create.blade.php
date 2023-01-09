@extends('layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Desa</h1>
  </div>

  <div class="col-lg-8">
  <form method="post" action="{{ route('desa.store') }}" class="mb-5" enctype="multipart/form-data">
    @csrf
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
    <div class="mb-3">
        <label for="Kabupaten" class="form-tabel">Kabupaten</label>
        <select class="form-select" name="kabupaten_id">
            @foreach($kabupatens as $kabupaten)
            @if(old('kabupaten_id') == $kabupaten->id)
               <option value="{{ $kabupaten->id }}" selected>{{ $kabupaten->name }}</option>
               @else
               <option value="{{ $kabupaten->id }}">{{ $kabupaten->name }}</option>
               @endif
            @endforeach
        </select>
      </div>
    <div class="mb-3">
        <label for="kecamatan" class="form-tabel">Kecamatan</label>
        <select class="form-select" name="kecamatan_id">
            @foreach($kecamatans as $kecamatan)
            @if(old('kecamatan_id') == $kecamatan->id)
               <option value="{{ $kecamatan->id }}" selected>{{ $kecamatan->name }}</option>
               @else
               <option value="{{ $kecamatan->id }}">{{ $kecamatan->name }}</option>
               @endif
            @endforeach
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Create Desa</button>
  </form>
</div>
@endsection
