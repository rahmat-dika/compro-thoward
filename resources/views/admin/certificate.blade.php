@extends('master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="m-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Sternics Website</a></li>
                        <li class="breadcrumb-item active">Certificate</li>
                    </ol>
                </div>
                <h4 class="page-title">Data Product Certificate</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4 row">
                        <div class="col-md-9">
                            <h4 class="header-title">Data Certificate</h4>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="mx-3 btn btn-primary rounded-pill waves-effect waves-light position-absolute end-0" data-bs-toggle="modal" data-bs-target="#add-data">
                                + Add Certificate</button>
                        </div>

                        {{-- add Certificate --}}
                        <div class="modal fade" id="add-data" tabindex="-1" aria-labelledby="myLargeModalLabel"
                            role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myLargeModalLabel">Add Data Certificate</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form action="{{ url('store-certificate') }}" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="row">
                                                @csrf
                                                <div class="col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="collectionName" class="form-label">Collection Name <span class="text-danger">*</span></label>
                                                        <input type="text" id="collectionName" name="collection_name" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="serialNumber" class="form-label">Serial Number <span class="text-danger">*</span></label>
                                                        <input type="text" id="serialNumber" name="serial_number" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="qrCodeNumber" class="form-label">QR Code Number <span class="text-danger">*</span></label>
                                                        <input type="text" id="qrCodeNumber" name="qr_code_number" class="form-control" required>
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
                                        <th>Collection Name</th>
                                        <th>Serial Number</th>
                                        <th>QR Code Number</th>
                                        <th>Certificate</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php
                                    $no = 1;
                                @endphp
                                <tbody>
                                    @foreach ($certificate  as $item)
                                        <tr>
                                            <td>{{ $no++ }}.</td>
                                            <td>{{ $item->collection_name }}</td>
                                            <td>{{ $item->serial_number }}</td>
                                            <td>{{ $item->qr_code_number }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary waves-effect waves-light get-qr" data-id="{{ $item->id }}"><i class="fas fa-qrcode"></i></button>
                                                <a target="_blank" href="{{ url('/qr-certificate/' . $item->id . '/' . $item->serial_number . '/' . $item->qr_code_number) }}" class="btn btn-info waves-effect waves-light get-qr"><i class="fas fa-link"></i></a>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-warning waves-effect waves-light"
                                                    data-bs-toggle="modal" data-bs-target="#edit-certificate{{ $item->id }}">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger waves-effect waves-light" 
                                                    data-bs-toggle="modal" data-bs-target="#del-certificate{{ $item->id }}">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                                {{-- edit certificate --}}
                                                <div class="modal fade" id="edit-certificate{{ $item->id }}" tabindex="-1"
                                                    aria-labelledby="myLargeModalLabel" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myLargeModalLabel">Edit Certificate</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <form action="{{ url('update-certificate') }}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <input type="hidden" name="id" id="id" value="{{ $item->id }}">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="mb-3">
                                                                                <label for="collectionName" class="form-label">Collection Name <span class="text-danger">*</span></label>
                                                                                <input type="text" id="collectionName" name="collection_name" value="{{ $item->collection_name }}"
                                                                                    class="form-control" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="mb-3">
                                                                                <label for="serialNumber" class="form-label">Serial Number <span class="text-danger">*</span></label>
                                                                                <input type="text" id="serialNumber" name="serial_number" value="{{ $item->serial_number }}"
                                                                                    class="form-control" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="mb-3">
                                                                                <label for="qrCodeNumber" class="form-label">QR Code Number <span class="text-danger">*</span></label>
                                                                                <input type="text" id="qrCodeNumber" name="qr_code_number" value="{{ $item->qr_code_number }}"
                                                                                    class="form-control" required>
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

                                                {{-- delete Certificate --}}
                                                <div class="modal fade" id="del-certificate{{ $item->id }}" tabindex="-1" aria-labelledby="delCertificateLabel{{ $item->id }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="text-white modal-header">
                                                                <h5 class="modal-title" id="delCertificateLabel{{ $item->id }}">
                                                                    Delete Certificate
                                                                </h5>
                                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="text-center modal-body">
                                                                <p>Are you sure deleted Certificate <strong>{{ $item->name }}</strong>?</p>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                                                                <form action="{{ url('delete-certificate') }}" method="POST" class="d-inline">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $item->id }}">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    @if(session('status'))
        <script>
            Swal.fire({
                icon: '{{ session('status') }}', // 'success', 'error', 'warning', dll.
                title: 'Success!',
                text: '{{ session('message') }}', // Pesan dari Controller
                timer: 3000,
                showConfirmButton: false
            });
        </script>
    @endif

    <script>
        $(document).on('click', '.get-qr', function () {
            let id = $(this).data('id');
            let url = "{{ url('/qr-certificate') }}/" + id;

            fetch(url)
            .then(res => res.text())
            .then(svgText => {
                let svgBlob = new Blob([svgText], { type: "image/svg+xml" });
                let url = URL.createObjectURL(svgBlob);

                let img = new Image();
                img.onload = function () {
                    let canvas = document.createElement("canvas");
                    canvas.width = img.width;
                    canvas.height = img.height;

                    let ctx = canvas.getContext("2d");
                    ctx.drawImage(img, 0, 0);

                    canvas.toBlob((blob) => {
                        let a = document.createElement("a");
                        a.href = URL.createObjectURL(blob);
                        a.download = "qr-certificate.png";
                        a.click();
                    });
                };
                img.src = url;
            });
        }); 
    </script>
@endsection
