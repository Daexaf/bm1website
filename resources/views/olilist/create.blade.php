@extends('layout.main')
@section('oliContent')
<div class="container">
    <div class="page-inner">
      <div
        class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
      >
        <div>
          <h3 class="fw-bold">Tambah Product Oli</h3>
        </div>
      </div>
      {{-- konten table --}}
      <form action="{{route('admin.oli.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Form Product Oli Baru</div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                          <div class="form-group">
                            <input type="hidden" name="category_id" value="6" />
                            <label for="name2">Name</label>
                            <input
                              type="text"
                              class="form-control"
                              id="name"
                              name='name'
                              placeholder="Enter Name"
                            />
                            @error('name')
                                <small>{{$message}}</small>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="category_type">Category</label>
                            <input
                              type="text"
                              class="form-control"
                              id="category_type"
                              name='category_type'
                              placeholder="enter category"
                            />
                            @error('category_type')
                                <small>{{$message}}</small>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="api">API</label>
                            <input
                              type="text"
                              class="form-control"
                              id="api"
                              name='api'
                              placeholder="enter api"
                            />
                            @error('api')
                                <small>{{$message}}</small>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="sae">SAE</label>
                            <input
                              type="text"
                              class="form-control"
                              id="sae"
                              name="sae"
                              placeholder="Enter sae"
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
                              name='content'
                              placeholder="enter content"
                            />
                            @error('content')
                                <small>{{$message}}</small>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="link1">Link 1</label>
                            <input
                              type="text"
                              class="form-control"
                              id="link1"
                              name='link1'
                              placeholder="enter link 1"
                            />
                            @error('link1')
                                <small>{{$message}}</small>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="link2">Link 2</label>
                            <input
                              type="text"
                              class="form-control"
                              id="link2"
                              name='link2'
                              placeholder="enter link 2"
                            />
                            @error('link2')
                                <small>{{$message}}</small>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="link3">Link 3</label>
                            <input
                              type="text"
                              class="form-control"
                              id="link3"
                              name='link3'
                              placeholder="enter link 3"
                            />
                            @error('link3')
                                <small>{{$message}}</small>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="link4">Link 4</label>
                            <input
                              type="text"
                              class="form-control"
                              id="link4"
                              name='link4'
                              placeholder="enter link 4"
                            />
                            @error('link4')
                                <small>{{$message}}</small>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="image1">Foto Produk</label>
                            <input type="file" class="form-control" id="image1" name="image1" />
                            @error('image1')
                                <small>{{$message}}</small>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="sni">SNI</label>
                            <input
                              type="text"
                              class="form-control"
                              id="sni"
                              name='sni'
                              placeholder="enter sni"
                            />
                            @error('sni')
                                <small>{{$message}}</small>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="npt">NPT</label>
                            <input
                              type="text"
                              class="form-control"
                              id="npt"
                              name='npt'
                              placeholder="enter npt"
                            />
                            @error('npt')
                                <small>{{$message}}</small>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="npb">NPB</label>
                            <input
                              type="text"
                              class="form-control"
                              id="npb"
                              name='npb'
                              placeholder="enter npb"
                            />
                            @error('npb')
                                <small>{{$message}}</small>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="barcode">Barcode</label>
                            <input
                              type="text"
                              class="form-control"
                              id="barcode"
                              name='barcode'
                              placeholder="enter barcode"
                            />
                            @error('barcode')
                                <small>{{$message}}</small>
                            @enderror
                          </div>
                          <input type="hidden" name="is_active" value="1" />
                    </div>
                  </div>
                <div class="card-action">
                  <button class="btn btn-success">Submit</button>
                  <button class="btn btn-danger">Cancel</button>
                </div>
              </div>
            </div>
          </div>
      </form>
      
    </div>
  </div>
@endsection