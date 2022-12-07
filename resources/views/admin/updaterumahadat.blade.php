@extends('layouts.mainadm')

@section('container')
<div class="content">
    <h1 class="text-center mb-2">Update Post Rumah Adat</h1>
    <h4 class="text-center mb-2">{{ $rumahadat[0]->name_rumahadat }}</h4>
    <a href="/rumahadatadmin" class="btn btn-primary btn-lg mb-1">Data Post Rumah Adat</a>
    @if ($errors->any())
        <div class="alert alert-danger">
            <p class="container">UPDATE UNSUCCESFULL</p>
        </div>
    @endif
    <div class="card-body">
        <form action="/rumahadatupdate" method="POST" enctype="multipart/form-data">
            @method("post")
            @csrf

            <div class="mb-3">
                    <label for="name_rumahadat" class="form-label">Nama Rumah Adat</label>
                    <input type="text" class="form-control @error('name_rumahadat') is-invalid @enderror" name="name_rumahadat" id="name_rumahadat" required value="{{ old('name_rumahadat', $rumahadat[0]->name_rumahadat) }}">
                    @error('name_rumahadat')
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
                            @if (old('province_id', $rumahadat[0]->province_id) == $prov->id)
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
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" style="background-color: #2A3038" name="slug" id="slug" required value="{{ old('slug', $rumahadat[0]->slug) }}"/>
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi_rumah_adat" class="form-label">Deskripsi</label>
                    @error('deskripsi_rumah_adat')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="deskripsi_rumah_adat" type="hidden" name="deskripsi_rumah_adat" value="{{ old('deskripsi_rumah_adat', $rumahadat[0]->deskripsi_rumah_adat) }}"/>
                    <trix-editor input="deskripsi_rumah_adat"></trix-editor>
                </div>

                <div class="mb-3">
                    <label for="gambar">Gambar</label>
                    <input type="hidden" name="oldImage" value="{{ $rumahadat[0]->gambar }}">

                    @if (strlen($rumahadat[0]->gambar)>50)
                        <img src="{{ asset('storage/'.$rumahadat[0]->gambar) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    @else
                        <img src="/img/rumahadat/{{ $rumahadat[0]->gambar }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
    const name_rumahadat = document.querySelector('#name_rumahadat');
    const slug = document.querySelector('#slug');

    name_rumahadat.addEventListener('change', function(){
        fetch('/createslugrumah?name_rumahadat=' + name_rumahadat.value)
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
