@extends('layout.main')
@section('bautContent')
<div class="container">
    <div class="page-inner">
      <div
        class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
      >
        <div>
          <h3 class="fw-bold">Edit Produk Baut</h3>
        </div>
      </div>
      {{-- konten table --}}
      <form action="{{route('admin.baut.update', ['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Form Edit Produk Baut</div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                          <input type="hidden" name="category_id" value="7" />
                          <label for="coding">Coding</label>
                          <input
                            type="text"
                            class="form-control"
                            id="coding"
                            name="coding"
                            placeholder="Masukkan Coding"
                            value="{{ old('coding', $data->coding) }}"
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
                            value="{{ old('kode', $data->kode) }}"
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
                            value="{{ old('keterangan', $data->keterangan) }}"
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
                          >{{ old('deskripsi', $data->deskripsi) }}</textarea>
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
                            value="{{ old('ukuran', $data->ukuran) }}"
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
                            value="{{ old('kunci', $data->kunci) }}"
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
                            value="{{ old('link1', $data->link1) }}"
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
                            value="{{ old('link2', $data->link2) }}"
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
                            value="{{ old('link3', $data->link3) }}"
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
                            value="{{ old('link4', $data->link4) }}"
                          />
                          @error('link4')
                              <small>{{$message}}</small>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="image1">Foto</label>
                          <input type="file" class="form-control" id="image1" name="image1" />
                          @if($data->image1)
                            <small>Current Image: {{$data->image1}}</small>
                          @endif
                          @error('image1')
                              <small>{{$message}}</small>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="image_modal1">Foto Penggunaan 1</label>
                          <input type="file" class="form-control" id="image_modal1" name="image_modal1" />
                          @if($data->image_modal1)
                            <small>Current Image: {{$data->image_modal1}}</small>
                          @endif
                          @error('image_modal1')
                              <small>{{$message}}</small>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="image_modal2">Foto Penggunaan 2</label>
                          <input type="file" class="form-control" id="image_modal2" name="image_modal2" />
                          @if($data->image_modal2)
                            <small>Current Image: {{$data->image_modal2}}</small>
                          @endif
                          @error('image_modal2')
                              <small>{{$message}}</small>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="image_modal3">Foto Penggunaan 3</label>
                          <input type="file" class="form-control" id="image_modal3" name="image_modal3" />
                          @if($data->image_modal3)
                            <small>Current Image: {{$data->image3}}</small>
                          @endif
                          @error('image_modal3')
                              <small>{{$message}}</small>
                          @enderror
                        </div>
                    </div>
                  </div>
                <div class="card-action">
                  <button class="btn btn-success">Update</button>
                  <button class="btn btn-danger" type="reset">Cancel</button>
                </div>
              </div>
            </div>
          </div>
      </form>
      
    </div>
  </div>
@endsection
