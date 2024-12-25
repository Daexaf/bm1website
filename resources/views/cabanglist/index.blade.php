@extends('layout.main')
@section('cabangContent')
<div class="container">
    <div class="page-inner">
      <div
        class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
      >
        <div>
          <h3 class="fw-bold mb-3">Data Cabang</h3>
        </div>
      </div>
      {{-- konten table --}}
      <div class="row">
        <div class="col-md-12">
            <a href="{{route('cabang.create')}}" class="btn btn-primary mb-3">Tambah Data</a>
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">cabang List</h4>
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
                      <th>Address</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $item)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->address}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->phone}}</td>
                      <td>
                        <a href="{{route('cabang.edit', ['id'=>$item->id])}}" class="btn btn-primary"><i class="fas fa-pen"> Edit</i></a>
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
                            <p>Apakah kamu yakin ingin menghapus data cabang {{$item->name}}<b></b></p>
                          </div>
                          <div class="modal-footer">
                            <form action="{{route('cabang.delete',['id'=>$item->id])}}" method="POST">
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