@extends('layouts.mainadm')

@section('container')
    <div class="container mt-5">
        <h1 class="text-center mb-5">Create Post Suku Adat</h1>

        @if (session()->has('success'))
            <div class="alert alert-success col-lg-4" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <a href="/sukuadatadmin" class="btn btn-primary btn-lg mb-3">Data Post Suku Adat</a>
        <div class="card-body">
            <form action="/sukuadatcreate" method="POST" enctype="multipart/form-data">
                @method("post")
                @csrf

                <div class="mb-3">
                    <label for="nama_suku" class="form-label">Nama Suku Adat</label>
                    <input type="text" class="form-control @error('nama_suku') is-invalid @enderror" name="nama_suku" id="nama_suku" required value="{{ old('nama_suku') }}"/>
                    @error('nama_suku')
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
                            @if (old('province_id') == $prov->id)
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
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" style="background-color: #2A3038" name="slug" id="slug" required value="{{ old('slug') }}"/>
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="deskripsi_suku" class="form-label">Deskripsi</label>
                    @error('deskripsi_suku')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="deskripsi_suku" type="hidden" name="deskripsi_suku" value="{{ old('deskripsi_suku') }}">
                    <trix-editor input="deskripsi_suku"></trix-editor>
                </div>

                <div class="mb-3">
                    <label for="gambar">Gambar</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control btn-lg @error('gambar') is-invalid @enderror" id="gambar" type="file" name="gambar" value="{{ old('gambar') }}"
                    onchange="previewImage()"/>
                    @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success btn-lg">Submit</button>
            </form>
        </div>
    </div>

    <script>
        const nama_suku = document.querySelector('#nama_suku');
        const slug = document.querySelector('#slug');

        nama_suku.addEventListener('change', function(){
            fetch('/createslugsuku?nama_suku=' + nama_suku.value)
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
