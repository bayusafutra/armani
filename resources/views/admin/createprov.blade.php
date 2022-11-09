@extends('layouts.mainadm')

@section('container')
    <div class="container mt-5">
        <h1 class="text-center mb-5">Create Post Provinsi</h1>
        <a href="/provinsiadmin" class="btn btn-primary btn-lg mb-3">Data Post Provinsi</a>
        <div class="card-body">
            <form action="/provinsicreate" method="POST">
                @method("post")
                @csrf
                <div class="mb-3">
                    <label for="Nama" class="form-label">Nama Provinsi</label>
                    <input type="text" class="form-control" name=name_provinsi>
                </div>

                <div class="mb-3">
                    <fieldset>
                        <div class="mb-3">
                        <label for="user_id" class="form-label">Author</label>
                        <select id="user_id" class="form-select" name="user_id">
                            @foreach ($user as $author )
                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                            @endforeach
                        </select>
                        </div>
                    </fieldset>
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" name=slug>
                </div>

                <div class="mb-3">
                    <label for="akronim" class="form-label">Akronim</label>
                    <input type="text" class="form-control" name=akronim>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" name=deskripsi>
                </div>

                <div class="mb-3">
                    <label for="konten" class="form-label">Konten</label>
                    <input type="text" class="form-control" name=konten>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="text" class="form-control" name=gambar>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error )
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button type="submit" class="btn btn-success btn-lg">Submit</button>
            </form>
        </div>
    </div>
@endsection
