@extends('layouts.mainadm')

@section('container')
<div class="content">
    <h1 class="text-center mb-2">Update Post Senjata Daerah</h1>
    <h4 class="text-center mb-2">{{ $senjataadat[0]->name_senjata }}</h4>
    <a href="/senjataadatadmin" class="btn btn-primary btn-lg mb-1">Data Post Senjata Daerah</a>
    @if ($errors->any())
        <div class="alert alert-danger">
            <p class="container">UPDATE UNSUCCESFULL</p>
        </div>
    @endif
    <div class="card-body">
        <form action="/senjataadatupdate" method="POST" enctype="multipart/form-data">
            @method("post")
            @csrf

            <div class="mb-3">
                    <label for="name_senjata" class="form-label">Nama Senjata Daerah</label>
                    <input type="text" class="form-control @error('name_senjata') is-invalid @enderror" name="name_senjata" id="name_senjata" required value="{{ old('name_senjata', $senjataadat[0]->name_senjata) }}"/>
                    @error('name_senjata')
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
                            @if (old('province_id', $senjataadat[0]->province_id) == $prov->id)
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
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" style="background-color: #2A3038" name="slug" id="slug" required value="{{ old('slug', $senjataadat[0]->slug) }}"/>
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi_senjata" class="form-label">Deskripsi</label>
                    @error('deskripsi_senjata')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="deskripsi_senjata" type="hidden" name="deskripsi_senjata" value="{{ old('deskripsi_senjata', $senjataadat[0]->deskripsi_senjata) }}">
                    <trix-editor input="deskripsi_senjata"></trix-editor>
                </div>

                <div class="mb-3">
                    <label for="gambar">Gambar</label>
                    <input type="hidden" name="oldImage" value="{{ $senjataadat[0]->gambar }}">

                    @if (strlen($senjataadat[0]->gambar)>50)
                        <img src="{{ asset('storage/'.$senjataadat[0]->gambar) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    @else
                        <img src="/img/senjata/{{ $senjataadat[0]->gambar }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
    const name_senjata = document.querySelector('#name_senjata');
    const slug = document.querySelector('#slug');

    name_senjata.addEventListener('change', function(){
        fetch('/createslugsenjata?name_senjata=' + name_senjata.value)
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
