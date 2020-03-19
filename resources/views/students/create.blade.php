@extends('layout/main')

@section('title', 'Form Tambah Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Tambah Mahasiwa</h1>

            <form method="POST" action="/students/create">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </form>

        </div>
    </div>
</div>
@endsection