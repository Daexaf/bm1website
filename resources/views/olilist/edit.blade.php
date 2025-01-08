@extends('layout.main')
@section('oliContent')
<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
                <h3 class="fw-bold">Edit Cabang</h3>
            </div>
        </div>
        {{-- konten table --}}
        <form action="{{ route('admin.oli.update', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Form Product Oli Edit</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="hidden" name="category_id" value="6" />
                                        <label for="name2">Name</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="name"
                                            name="name"
                                            placeholder="Enter Name"
                                            value="{{ old('name', $data->name) }}"
                                        />
                                        @error('name')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="category_type">Category</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="category_type"
                                            name="category_type"
                                            placeholder="Enter category"
                                            value="{{ old('category_type', $data->category_type) }}"
                                        />
                                        @error('category_type')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="api">API</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="api"
                                            name="api"
                                            placeholder="Enter API"
                                            value="{{ old('api', $data->api) }}"
                                        />
                                        @error('api')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="sae">SAE</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="sae"
                                            name="sae"
                                            placeholder="Enter SAE"
                                            value="{{ old('sae', $data->sae) }}"
                                        />
                                        @error('sae')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="content">Content</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="content"
                                            name="content"
                                            placeholder="Enter Content"
                                            value="{{ old('content', $data->content) }}"
                                        />
                                        @error('content')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="link1">Link 1</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="link1"
                                            name="link1"
                                            placeholder="Enter Link 1"
                                            value="{{ old('link1', $data->link1) }}"
                                        />
                                        @error('link1')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="link2">Link 2</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="link2"
                                            name="link2"
                                            placeholder="Enter Link 2"
                                            value="{{ old('link2', $data->link2) }}"
                                        />
                                        @error('link2')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="link3">Link 3</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="link3"
                                            name="link3"
                                            placeholder="Enter Link 3"
                                            value="{{ old('link3', $data->link3) }}"
                                        />
                                        @error('link3')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="link4">Link 4</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="link4"
                                            name="link4"
                                            placeholder="Enter Link 4"
                                            value="{{ old('link4', $data->link4) }}"
                                        />
                                        @error('link4')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="image1">Foto Produk</label>
                                        <input
                                            type="file"
                                            class="form-control"
                                            id="image1"
                                            name="image1"
                                        />
                                        
                                        @if ($data->image1)
                                            {{-- <small>Current Image: {{ $data->image1 }}</small> --}}
                                            <img src="{{asset('storage/product-oli/'.$data->image1)}}" width="100" height="100" alt="">
                                        @endif
                                        @error('image1')
                                            <small>{{ $message }}</small>
                                        @enderror
                                        <small>upload foto jika ingin diubah</small>
                                    </div>

                                    <div class="form-group">
                                        <label for="sni">SNI</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="sni"
                                            name="sni"
                                            placeholder="Enter SNI"
                                            value="{{ old('sni', $data->sni) }}"
                                        />
                                        @error('sni')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="npt">NPT</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="npt"
                                            name="npt"
                                            placeholder="Enter NPT"
                                            value="{{ old('npt', $data->npt) }}"
                                        />
                                        @error('npt')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="npt">NPB</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="npb"
                                            name="npb"
                                            placeholder="Enter NPB"
                                            value="{{ old('npb', $data->npb) }}"
                                        />
                                        @error('npb')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="barcode">Barcode</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="barcode"
                                            name="barcode"
                                            placeholder="Enter Barcode"
                                            value="{{ old('barcode', $data->barcode) }}"
                                        />
                                        @error('barcode')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="is_active">Is Active</label><br>
                                        <div>
                                          <input type="radio" id="is_active" name="is_active" value="1" {{ old('is_active') == 1 ? 'checked' : '' }}>
                                          <label for="is_active">Aktif</label>
                                        </div>
                                        <div>
                                          <input type="radio" id="inactive" name="is_active" value="0" {{ old('is_active') == 0 ? 'checked' : '' }}>
                                          <label for="inactive">Non-Aktif</label>
                                        </div>
                                        @error('is_active')
                                          <small>{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-success">Submit</button>
                                <button class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
