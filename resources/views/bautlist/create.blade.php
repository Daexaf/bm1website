@extends('layout.main')
@section('bautContent')
<div class="container">
    <div class="page-inner">
      <div
        class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
      >
        <div>
          <h3 class="fw-bold">Tambah Produk Baut</h3>
        </div>
      </div>
      {{-- konten table --}}
      <form action="{{route('admin.baut.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Form Produk Baut Baru</div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                          <input type="hidden" name="category_id" value="7" />
                          <div class="form-group">
                            <label for="category_type">Category Type</label>
                            <input
                              type="text"
                              class="form-control"
                              id="category_type"
                              name="category_type"
                              placeholder="Masukkan category"
                            />
                            @error('category_type')
                                <small>{{$message}}</small>
                            @enderror
                          </div>
                          
                          <div class="form-group">
                          <label for="coding">Coding</label>
                          <input
                            type="text"
                            class="form-control"
                            id="coding"
                            name="coding"
                            placeholder="Masukkan Coding"
                          />
                          @error('coding')
                              <small>{{$message}}</small>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="kode">Kode</label>
                          <input
                            type="text"
                            class="form-control"
                            id="kode"
                            name="kode"
                            placeholder="Masukkan Code"
                          />
                          @error('kode')
                              <small>{{$message}}</small>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="keterangan">Keterangan</label>
                          <input
                            type="text"
                            class="form-control"
                            id="keterangan"
                            name="keterangan"
                            placeholder="Masukkan Keterangan"
                          />
                          @error('keterangan')
                              <small>{{$message}}</small>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="deskripsi">Deskripsi</label>
                          <textarea
                            class="form-control"
                            id="deskripsi"
                            name="deskripsi"
                            placeholder="Masukkan Deskripsi"
                          ></textarea>
                          @error('deskripsi')
                              <small>{{$message}}</small>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="ukuran">Ukuran</label>
                          <input
                            type="text"
                            class="form-control"
                            id="ukuran"
                            name="ukuran"
                            placeholder="Masukkan Ukuran"
                          />
                          @error('ukuran')
                              <small>{{$message}}</small>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="kunci">Kunci</label>
                          <input
                            type="text"
                            class="form-control"
                            id="kunci"
                            name="kunci"
                            placeholder="Masukkan Kunci"
                          />
                          @error('kunci')
                              <small>{{$message}}</small>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="link1">Link 1</label>
                          <input
                            type="text"
                            class="form-control"
                            id="link1"
                            name="link1"
                            placeholder="Masukkan Link 1"
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
                            name="link2"
                            placeholder="Masukkan Link 2"
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
                            name="link3"
                            placeholder="Masukkan Link 3"
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
                            name="link4"
                            placeholder="Masukkan Link 4"
                          />
                          @error('link4')
                              <small>{{$message}}</small>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="image1">Foto</label>
                          <input type="file" class="form-control" id="image1" name="image1" />
                          @error('image1')
                              <small>{{$message}}</small>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="image_modal1">Foto Penggunaan 1</label>
                          <input type="file" class="form-control" id="image_modal1" name="image_modal1" />
                          @error('image_modal1')
                              <small>{{$message}}</small>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="image_modal2">Foto Penggunaan 2</label>
                          <input type="file" class="form-control" id="image_modal2" name="image_modal2" />
                          @error('image_modal2')
                              <small>{{$message}}</small>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="image_modal3">Foto Penggunaan 3</label>
                          <input type="file" class="form-control" id="image_modal3" name="image_modal3" />
                          @error('image_modal3')
                              <small>{{$message}}</small>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="barcode">Barcode</label>
                          <input
                            type="text"
                            class="form-control"
                            id="barcode"
                            name="barcode"
                            placeholder="Masukkan barcode"
                          />
                          @error('barcode')
                              <small>{{$message}}</small>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="price">Price</label>
                          <input type="number" step="500" name="price" id="price" class="form-control"
                          value="{{ old('price', $data->price ?? '') }}">
                        </div>
                        @error('price')
                          <small>{{$message}}</small>
                        @enderror
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
