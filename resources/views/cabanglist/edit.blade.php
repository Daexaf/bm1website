@extends('layout.main')
@section('cabangContent')
<div class="container">
    <div class="page-inner">
      <div
        class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
      >
        <div>
          <h3 class="fw-bold">Edit Cabang</h3>
        </div>
      </div>
      {{-- konten table --}}
      <form action="{{route('admin.cabang.update', ['id'=>$data->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Form Elements</div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="form-group">
                          <div class="form-group">
                            <label for="name2">Name</label>
                            <input
                              type="text"
                              class="form-control"
                              id="name"
                              name='name'
                              placeholder="Enter Name"
                              value="{{$data->name}}"
                            />
                            @error('name')
                                <small>{{$message}}</small>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label for="address">Address</label>
                            <textarea
                              class="form-control"
                              id="address"
                              name="address"
                              placeholder="Enter Address"
                              rows="4"
                            >{{ old('address', $data->address) }}</textarea>
                            @error('address')
                              <small>{{ $message }}</small>
                            @enderror
                          </div>
    
                        <div class="form-group">
                          <label for="email2">Email Address</label>
                          <input
                            type="email"
                            class="form-control"
                            id="email"
                            name="email"
                            placeholder="Enter Email"
                            value="{{$data->email}}"
                          />
                          @error('email')
                              <small>{{$message}}</small>
                          @enderror
                        </div>
    
                        <div class="form-group">
                          <label for="phone2">Phone</label>
                          <input
                            type="text"
                            class="form-control"
                            id="phone"
                            name='phone'
                            placeholder="Enter Phone"
                            value="{{$data->phone}}"
                          />
                          @error('phone')
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
      </form>
      
    </div>
  </div>
@endsection