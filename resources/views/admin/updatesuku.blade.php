@extends('layouts.mainadm')

@section('container')
<div class="content">
    <h1 class="text-center mb-2">Update Post Suku Adat</h1>
    <h4 class="text-center mb-2">{{ $sukuadat[0]->nama_suku }}</h4>
    <a href="/sukuadatadmin" class="btn btn-primary btn-lg mb-1">Data Post Suku Adat</a>
    <div class="card-body">
        <form action="/sukuadatupdate" method="POST">
            @method("post")
            @csrf
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama Suku Adat</label>
                <input type="text" class="form-control" name=nama_suku value="{{ $sukuadat[0]->nama_suku }}">
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
                <fieldset>
                    <div class="mb-3">
                    <label for="province_id" class="form-label">Kategori Provinsi :</label>
                    <select id="province_id" class="form-select" name="province_id">
                        @foreach ($provinsi as $prov )
                            <option value="{{ $prov->id }}">{{ $prov->name_provinsi }}</option>
                        @endforeach
                    </select>
                    </div>
                </fieldset>
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" name=slug value="{{ $sukuadat[0]->slug }}">
            </div>

            <div class="mb-3">
                <input type="hidden" class="form-control" name=slugid value="{{ $sukuadat[0]->slug }}">
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" name=deskripsi_suku value="{{ $sukuadat[0]->deskripsi_suku }}">
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="text" class="form-control" name=gambar value="{{ $sukuadat[0]->gambar }}">
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
            <button type="submit" class="btn btn-success btn-lg">Update</button>
        </form>
    </div>
</div>
@endsection
