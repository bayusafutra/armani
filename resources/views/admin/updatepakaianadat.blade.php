@extends('layouts.mainadm')

@section('container')
<div class="content">
    <h1 class="text-center mb-2">Update Post Pakaian Adat</h1>
    <h4 class="text-center mb-2">{{ $pakaianadat[0]->name_pakaian }}</h4>
    <a href="/pakaianadatadmin" class="btn btn-primary btn-lg mb-1">Data Post Pakaian Adat</a>
    <div class="card-body">
        <form action="/pakaianadatupdate" method="POST">
            @method("post")
            @csrf
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama Pakaian Adat</label>
                <input type="text" class="form-control" name=name_pakaian value="{{ $pakaianadat[0]->name_pakaian }}">
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
                <input type="text" class="form-control" name=slug value="{{ $pakaianadat[0]->slug }}">
            </div>

            <div class="mb-3">
                <input type="hidden" class="form-control" name=slugid value="{{ $pakaianadat[0]->slug }}">
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" name=deskripsi_pakaian value="{{ $pakaianadat[0]->deskripsi_pakaian }}">
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="text" class="form-control" name=gambar value="{{ $pakaianadat[0]->gambar }}">
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
