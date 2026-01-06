@extends('master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="m-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Sternics Website</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                </div>
                <h4 class="page-title">Data Product Sternics</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4 row">
                        <div class="col-md-9">
                            <h4 class="header-title">Data Products</h4>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="mx-3 btn btn-primary rounded-pill waves-effect waves-light position-absolute end-0" data-bs-toggle="modal" data-bs-target="#add-data">
                                + Add Products</button>
                        </div>

                        {{-- add Products --}}
                        <div class="modal fade" id="add-data" tabindex="-1" aria-labelledby="myLargeModalLabel"
                            role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myLargeModalLabel">Add Data Product</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ url('store-prod') }}" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="row">
                                                @csrf
                                                <div class="col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="productName" class="form-label">Product Name <span class="text-danger">*</span></label>
                                                        <input type="text" id="productName" name="product_name"
                                                            class="form-control" placeholder="sternics" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                                                        <input type="text" id="description" name="description" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="mb-3">
                                                        <label for="photo" class="form-label">Photo <span class="text-danger">*(jpg, jpeg, png)</span></label>
                                                        <input type="file" id="photo" name="photo" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="mb-3">
                                                        <label for="type" class="form-label">Type <span class="text-danger">*</span></label>
                                                        <select class="form-select" id="type" name="type" required>
                                                            <option value="">-- Pilih --</option>
                                                            <option value="Dash Cam">Dash Cam</option>
                                                            <option value="Smart Board">Smart Board</option>
                                                            <option value="EV Charger">EV Charger</option>
                                                            <option value="Laptop Power Bank">Laptop Power Bank</option>
                                                            <option value="Dongle And Accessories">Dongle And Accessories</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Product Name</th>
                                        <th>Photo</th>
                                        <th>Desctiption</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php
                                    $no = 1;
                                @endphp
                                <tbody>
                                    @foreach ($products  as $item)
                                        <tr>
                                            <td>{{ $no++ }}.</td>
                                            <td>{{ $item->product_name }}</td>
                                            <td><a target="_blank" href="{{ asset($item->photo) }}">View Photo</a></td>
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->type }}</td>
                                            <td>
                                                <button type="button" class="btn btn-warning waves-effect waves-light"
                                                    data-bs-toggle="modal" data-bs-target="#edit-product{{ $item->id }}">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light" 
                                                    data-bs-toggle="modal" data-bs-target="#del-product{{ $item->id }}">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                                {{-- edit products --}}
                                                <div class="modal fade" id="edit-product{{ $item->id }}" tabindex="-1"
                                                    aria-labelledby="myLargeModalLabel" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myLargeModalLabel">Edit Product</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <form action="{{ url('update-prod') }}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="id" id="id" value="{{ $item->id }}">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="mb-3">
                                                                                <label for="productName" class="form-label">Product Name <span class="text-danger">*</span></label>
                                                                                <input type="text" id="productName" name="product_name" value="{{ $item->product_name }}"
                                                                                    class="form-control" placeholder="sternics" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="mb-3">
                                                                                <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                                                                                <input type="text" id="description" name="description" class="form-control" required value="{{ $item->description }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <div class="mb-3">
                                                                                <label for="photo" class="form-label">Photo</label>
                                                                                <input type="file" id="photo" name="photo" class="form-control">
                                                                                @if ($item->photo)
                                                                                    <a target="_blank" href="{{ asset($item->photo) }}">View Old Photo</a>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <div class="mb-3">
                                                                                <label for="type" class="form-label">Type <span class="text-danger">*</span></label>
                                                                                <select class="form-select" id="type" name="type" required>
                                                                                    <option value="">-- Pilih --</option>
                                                                                    <option @if ($item->type === 'Dash Cam')@selected(true)@endif value="Dash Cam">Dash Cam</option>
                                                                                    <option @if ($item->type === 'Smart Board')@selected(true)@endif value="Smart Board">Smart Board</option>
                                                                                    <option @if ($item->type === 'EV Charger')@selected (true)@endif value="EV Charger">EV Charger</option>
                                                                                    <option @if ($item->type === 'Laptop Power Bank')@selected(true)@endif value="Laptop Power Bank">Laptop Power Bank</option>
                                                                                    <option @if ($item->type === 'Dongle And Accessories')@selected(true)@endif value="Dongle And Accessories">Dongle & Accessories</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- delete products --}}
                                                <div class="modal fade" id="del-product{{ $item->id }}" tabindex="-1" aria-labelledby="delProductLabel{{ $item->id }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="text-white modal-header">
                                                                <h5 class="modal-title" id="delProductLabel{{ $item->id }}">
                                                                    Delete Product
                                                                </h5>
                                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="text-center modal-body">
                                                                <p>Are you sure deleted product <strong>{{ $item->name }}</strong>?</p>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                                                                <form action="{{ url('delete-prod') }}" method="POST" class="d-inline">
                                                                    @csrf
                                                                    <input type="hidden" name="id_product" value="{{ $item->id }}">
                                                                    <button type="submit" class="btn btn-danger">
                                                                        Delete
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('status'))
        <script>
            Swal.fire({
                icon: '{{ session('status') }}',
                title: 'Success!',
                text: '{{ session('message') }}',
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif
@endsection
