@extends('layout.main')
@section('bautContent')
<div class="container">
    <div class="page-inner">
      <div
        class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
      >
        <div>
          <h3 class="fw-bold mb-3">Data Product Baut</h3>
        </div>
      </div>
      {{-- konten table --}}
      <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between mb-3">
              <!-- Tombol Tambah Data -->
              <a href="{{route('admin.baut.create')}}" class="btn btn-primary mb-3">Tambah Data</a>
              <!-- Form Pencarian -->
              <form action="{{route('admin.baut.index')}}" method="GET" class="d-flex">
                <div class="input-group input-group-sm float-right" style="width: 100%; max-width: 300px;">
                  <input type="text" name="search" class="form-control" placeholder="Cari data" value="{{$req->get('search')}}">
                  <div class="input-group-append mt-1 ml-2">
                    <button type="submit" class="btn btn-default mr-2">
                      <i class="fas fa-search fa-2x"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Product Baut List</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table
                  id="basic-datatables"
                  class="display table table-striped table-hover"
                >
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Category</th>
                    <th>Coding</th>
                    <th>Code</th>
                    <th>Keterangan</th>
                    <th>Deskripsi</th>
                    <th>Ukuran</th>
                    <th>Kunci</th>
                    <th>Link 1</th>
                    <th>Link 2</th>
                    <th>Link 3</th>
                    <th>Foto</th>
                    <th>Penggunaan 1</th>
                    <th>Penggunaan 2</th>
                    <th>Penggunaan 3</th>
                    <th>Barcode</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->category_type }}</td>
                      <td>{{ $item->coding }}</td>
                      <td>{{ $item->kode }}</td>
                      <td>{{ $item->keterangan }}</td>
                      <td>{{ $item->deskripsi }}</td>
                      <td>{{ $item->ukuran }}</td>
                      <td>{{ $item->kunci }}</td>
                      <td>
                        @if($item->link1)
                          <a href="{{ $item->link1 }}" target="_blank">{{ $item->link1 }}</a>
                        @else
                          -
                        @endif
                      </td>
                      <td>
                        @if($item->link2)
                          <a href="{{ $item->link2 }}" target="_blank">{{ $item->link2 }}</a>
                        @else
                          -
                        @endif
                      </td>
                      <td>
                        @if($item->link3)
                          <a href="{{ $item->link3 }}" target="_blank">{{ $item->link3 }}</a>
                        @else
                          -
                        @endif
                      </td>
                      <td>
                        @if($item->image1)
                          <img src="{{ asset('storage/product-baut/'.$item->image1) }}" width="100" alt="">
                        @else
                          -
                        @endif
                      </td>
                      <td>
                        @if($item->image_modal1)
                          <img src="{{ asset('storage/product-baut-modal/'.$item->image_modal1) }}" width="100" alt="">
                        @else
                          -
                        @endif
                      </td>
                      <td>
                        @if($item->image_modal2)
                          <img src="{{ asset('storage/product-baut-modal/'.$item->image_modal2) }}" width="100" alt="">
                        @else
                          -
                        @endif
                      </td>
                      <td>
                        @if($item->image_modal3)
                          <img src="{{ asset('storage/product-baut-modal/'.$item->image_modal3) }}" width="100" alt="">
                        @else
                          -
                        @endif
                      </td>
                      <td>{{ $item->barcode }}</td>
                      <td>{{ $item->price }}</td>
                      <td>
                        @if($item->is_active)
                            <p>Aktif</p>
                        @else
                          <p>Non Aktif</p>
                        @endif
                      </td>
                      <td>
                        <a href="{{route('admin.baut.edit', ['id'=>$item->id])}}" class="btn btn-primary"><i class="fas fa-pen"> Edit</i></a>
                        <a data-bs-toggle="modal" data-bs-target="#Modal-hapus{{$item->id}}" class="btn btn-danger"><i class="fas fa-trash-alt"> Delete</i></a>
                      </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="Modal-hapus{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Konfirmasi Hapus Data</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Apakah kamu yakin ingin menghapus data <b>{{$item->coding}}</b>?</p>
                          </div>
                          <div class="modal-footer">
                            <form action="{{route('admin.baut.delete',['id'=>$item->id])}}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                              <button type="submit" class="btn btn-primary">Ya</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection