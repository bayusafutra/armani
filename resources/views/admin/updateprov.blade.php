@extends('layouts.mainadm')

@section('container')
    <div class="content">
        <h1 class="text-center mb-2">Update Post Provinsi</h1>
        <h4 class="text-center mb-2">{{ $provinsi[0]->name_provinsi }}</h4>
        <a href="/provinsiadmin" class="btn btn-primary btn-lg mb-3">Data Post Provinsi</a>
        @if ($errors->any())
            <div class="alert alert-danger">
                <p class="container">UPDATE UNSUCCESFULL</p>
                <ul>
                    @foreach ($errors->all() as $error )
                        <li>
                            {{ $error }}
                         </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-body">
            <form action="/provinsiupdate" method="POST">
                @method("post")
                @csrf
                <div class="mb-3">
                    <label for="Nama" class="form-label">Nama Provinsi</label>
                    <input type="text" class="form-control" name=name_provinsi value="{{ $provinsi[0]->name_provinsi }}">
                </div>
                <div class="mb-3">
                    <fieldset>
                        <div class="mb-3">
                        <label for="user_id" class="form-label">Author</label>
                        <select id="user_id" class="form-select" name="user_id">
                            <option value="">Pilih Author</option>
                            @foreach ($user as $author )
                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                            @endforeach
                        </select>
                        </div>
                    </fieldset>
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" name=slug value="{{ $provinsi[0]->slug }}">
                </div>

                <div class="mb-3">
                    <input type="hidden" class="form-control" name=slugid value="{{ $provinsi[0]->slug }}">
                </div>

                <div class="mb-3">
                    <label for="akronim" class="form-label">Akronim</label>
                    <input type="text" class="form-control" name=akronim value="{{ $provinsi[0]->akronim }}">
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" name=deskripsi value="{{ $provinsi[0]->deskripsi }}">
                </div>

                <div class="mb-3">
                    <label for="konten" class="form-label">Konten</label>
                    <input type="text" class="form-control" name=konten value="{{ $provinsi[0]->konten }}">
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="text" class="form-control" name=gambar value="{{ $provinsi[0]->gambar }}">
                </div>

                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error )
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <button type="submit" class="btn btn-success btn-lg">Update</button>
            </form>
        </div>
    </div>
@endsection
