@extends('layout.main')
@section('oliContent')
<div class="container">
    <div class="page-inner">
      <div
        class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
      >
        <div>
          <h3 class="fw-bold mb-3">Data Product Oli</h3>
        </div>
      </div>
      {{-- konten table --}}
      <div class="row">
        <div class="col-md-12">
            <a href="{{route('admin.oli.create')}}" class="btn btn-primary mb-3">Tambah Data</a>
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Product Oli List</h4>
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
                      <th>Name</th>
                      <th>API</th>
                      <th>SAE</th>
                      <th>Content</th>
                      <th>Link 1</th>
                      <th>Link 2</th>
                      <th>Link 3</th>
                      <th>Link 4</th>
                      <th>Image 1</th>
                      <th>SNI</th>
                      <th>NPT</th>
                      <th>NPB</th>
                      <th>Barcode</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $item)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->api}}</td>
                      <td>{{$item->sae}}</td>
                      <td>{{$item->content}}</td>
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
                        @if($item->link4)
                            <a href="{{ $item->link4 }}" target="_blank">{{ $item->link4 }}</a>
                        @else
                            -
                        @endif
                    </td>
                    <td>
                      @if($item->image1)
                        <img src="{{ asset('storage/product-oli/'.$item->image1) }}" width="100" alt="">
                      @else
                        -
                      @endif
                    </td>
                      <td>{{$item->sni}}</td>
                      <td>{{$item->npt}}</td>
                      <td>{{$item->npb}}</td>
                      <td>{{$item->barcode}}</td>
                      <td>
                        <a href="{{route('admin.oli.edit', ['id'=>$item->id])}}" class="btn btn-primary"><i class="fas fa-pen"> Edit</i></a>
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
                            <p>Apakah kamu yakin ingin menghapus data <b>{{$item->name}}</b>?</p>
                          </div>
                          <div class="modal-footer">
                            <form action="{{route('admin.oli.delete',['id'=>$item->id])}}" method="POST">
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