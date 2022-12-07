@extends('layouts.mainadm')

@section('container')
<div class="content">
    <h1 class="text-center mb-2">Update Post Tarian Adat</h1>
    <h4 class="text-center mb-2">{{ $tariadat[0]->name_tarian }}</h4>
    <a href="/tarianadatadmin" class="btn btn-primary btn-lg mb-1">Data Post Tarian Adat</a>
    @if ($errors->any())
        <div class="alert alert-danger">
            <p class="container">UPDATE UNSUCCESFULL</p>
        </div>
    @endif
    <div class="card-body">
        <form action="/tarianadatupdate" method="POST" enctype="multipart/form-data">
            @method("post")
            @csrf

            <div class="mb-3">
                    <label for="name_tarian" class="form-label">Nama Tarian Adat</label>
                    <input type="text" class="form-control @error('name_tarian') is-invalid @enderror" name="name_tarian" id="name_tarian" required value="{{ old('name_tarian', $tariadat[0]->name_tarian) }}"/>
                    @error('name_tarian')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="mb-3">
                    <label for="province_id">Kategori Provinsi :</label>
                    <select id="province_id" class="form-select" name="province_id">
                        @foreach ($provinsi as $prov )
                            @if (old('province_id', $tariadat[0]->province_id) == $prov->id)
                                <option value="{{ $prov->id }}" selected>{{ $prov->name_provinsi }}</option>
                            @else
                                <option value="{{ $prov->id }}">{{ $prov->name_provinsi }}</option>
                            @endif
                        @endforeach
                    </select>
                    </div>
                </div>

                <div class="form-floating mb-3">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" style="background-color: #2A3038" name="slug" id="slug" required value="{{ old('slug', $tariadat[0]->slug) }}"/>
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi_tarian" class="form-label">Deskripsi</label>
                    @error('deskripsi_tarian')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="deskripsi_tarian" type="hidden" name="deskripsi_tarian" value="{{ old('deskripsi_tarian', $tariadat[0]->deskripsi_tarian) }}">
                    <trix-editor input="deskripsi_tarian"></trix-editor>
                </div>

                <div class="mb-3">
                    <label for="gambar">Gambar</label>
                    <input type="hidden" name="oldImage" value="{{ $tariadat[0]->gambar }}">

                    @if (strlen($tariadat[0]->gambar)>50)
                        <img src="{{ asset('storage/'.$tariadat[0]->gambar) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    @else
                        <img src="/img/tarianadat/{{ $tariadat[0]->gambar }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    @endif

                    <input class="form-control btn-lg @error('gambar') is-invalid @enderror" id="gambar" type="file" name="gambar" value="{{ old('gambar') }}"
                    onchange="previewImage()"/>
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

            <button type="submit" class="btn btn-success btn-lg">Update</button>
        </form>
    </div>
</div>

<script>
    const name_tarian = document.querySelector('#name_tarian');
    const slug = document.querySelector('#slug');

    name_tarian.addEventListener('change', function(){
        fetch('/createslugtari?name_tarian=' + name_tarian.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

    function previewImage(){
        const gambar = document.querySelector('#gambar');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display='block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(gambar.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }

    }
</script>
@endsection
