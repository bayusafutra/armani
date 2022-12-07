@extends('layouts.mainadm')

@section('container')
    <div class="content">
        <h1 class="text-center mb-2">Update Post Provinsi</h1>
        <h4 class="text-center mb-2">{{ $provinsi[0]->name_provinsi }}</h4>
        <a href="/provinsiadmin" class="btn btn-primary btn-lg mb-3">Data Post Provinsi</a>
        @if ($errors->any())
            <div class="alert alert-danger">
                <p class="container">UPDATE UNSUCCESFULL</p>
            </div>
        @endif
        <div class="card-body">
            <form action="/provinsiupdate" method="POST" enctype="multipart/form-data">
                @method("post")
                @csrf

                <div class="mb-3">
                    <label for="name_provinsi" class="form-label">Nama Provinsi</label>
                    <input type="text" class="form-control @error('name_provinsi') is-invalid @enderror" name="name_provinsi" id="name_provinsi" required value="{{ old('name_provinsi', $provinsi[0]->name_provinsi) }}">
                    @error('name_provinsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" style="background-color: #2A3038" name="slug" id="slug" required value="{{ old('slug', $provinsi[0]->slug) }}"/>
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="akronim" class="form-label">Akronim</label>
                    <input type="text" class="form-control @error('akronim') is-invalid @enderror" name="akronim" id="akronim" required value="{{ old('akronim', $provinsi[0]->akronim) }}">
                    @error('akronim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" value="{{ old('deskripsi', $provinsi[0]->deskripsi) }}">
                    @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="konten" class="form-label">Konten</label>
                    @error('konten')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="konten" type="hidden" name="konten" value="{{ old('konten', $provinsi[0]->konten) }}">
                    <trix-editor input="konten"></trix-editor>


                </div>

                <div class="mb-3">
                    <label for="gambar">Gambar</label>
                    <input type="hidden" name="oldImage" value="{{ $provinsi[0]->gambar }}">

                    @if ($provinsi[0]->gambar)
                        @if (strlen($provinsi[0]->gambar)>50)
                            <img src="{{ asset('storage/'.$provinsi[0]->gambar) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @else
                            <img src="/img/{{ $provinsi[0]->gambar }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                        @endif
                    @else

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
        const name_provinsi = document.querySelector('#name_provinsi');
        const slug = document.querySelector('#slug');

        name_provinsi.addEventListener('change', function(){
            fetch('/createslug?name_provinsi=' + name_provinsi.value)
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
