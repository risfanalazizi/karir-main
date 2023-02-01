@extends('layouts.main')

@section('content')
    @include('layouts.partials.assets')
    @include('layouts.partials.filter')
    @include('layouts.partials.detail')


    <div class="content">
        <div class="container">
            <h4>
                Lowongan pekerjaan
            </h4>
            <div class="row">
                <div class="col-2">
                    <form class="form-inline">
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" class="form-control" style="box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);"
                                aria-label="Small" placeholder="Search" aria-describedby="inputGroup-sizing-sm">
                        </div>
                    </form>
                </div>
                <div class="col-1">
                    <button type="button" class="btn btn-sm btn-light"
                        style="font-weight: 800; box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" data-bs-toggle="modal"
                        data-bs-target="#filterModal">
                        <i class="fa-sharp fa-solid fa-filter"></i>
                        Filter
                    </button>
                </div>
                <div class="col-1 ps-1 me-5">
                    <button type="button" class="btn btn-sm btn-light"
                        style="font-weight: 800; box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" data-bs-toggle="modal"
                        data-bs-target="">
                        <i class="fa-sharp fa-solid fa-trash-can"></i>
                    </button>
                </div>
                <div class="col-7 ms-5 pe-1" style="text-align: right;">
                    <button type="button" class="btn btn-sm"
                        style="font-weight: 600; box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2); background-color: #0C5045; color: white;"
                        onClick="create()">
                        <i class="fa-solid fa-plus" style="color: white;"></i>
                        Buat lowongan
                    </button>
                </div>
            </div>
            <table class="table table-sm table-striped table-light">
                <thead>
                    <tr>
                        <th scope="col">
                            <input type="checkbox">
                        </th>
                        <th scope="col">Posisi</th>
                        <th scope="col">Perusahaan</th>
                        <th scope="col">Type</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($assets as $asset)
                        <tr>
                            <th scope="row">
                                <input type="checkbox">
                            </th>
                            <td>{{ $asset->nama }}</td>
                            <td>{{ $asset->jenis }}</td>
                            <td>{{ $asset->harga }}</td>
                            <td>
                                @if ($asset->status == 'aktif')
                                    <button type="button" class="btn btn-sm btn-outline-success" disabled>Lamaran
                                        terkirim</button>
                                @else
                                    <button type="button" class="btn btn-sm btn-outline-primary" disabled>Lamaran
                                        tersedia</button>
                                @endif
                            </td>
                            <td>
                                <button type="submit" class="btn btn-sm" style="background-color: #05621c;">
                                    {{-- <i class="fa-sharp fa-solid fa-pencil" style="color: white;"></i> --}}
                                    <i class="fa-sharp fa-solid fa-paper-plane" style="color: white;"></i>
                                </button>
                                <button type="button" class="btn btn-sm" style="background-color: rgb(17, 13, 238)">
                                    <a class="nav-link " href="/detaillowongan"><i class="fa-sharp  fa-solid fa-info"
                                            style="color: white;"></i></a>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <div class="modal needs-validation" id="modal-assets" tabindex="-1" role="dialog" novalidate>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title"></h5>
                    </div>
                    <form action="{{ route('asset.store') }}" method="POST" id="form-aset">
                        <div class="modal-body">

                            @csrf
                            <input type="hidden" name="id" id="input-id-asset">
                            <div class="form-group mb-2">
                                <label for="nama-asset">Nama Aset <span></span> </label>
                                <input type="text" class="form-control" id="input-nama-asset"
                                    placeholder="Masukan Nama Aset" name="nama" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="jenis-asset">Jenis Aset</label>
                                <input type="text" class="form-control" id="input-jenis-asset"
                                    placeholder="Masukan Jenis Aset" name="jenis" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="harga-asset">Harga Aset</label>
                                <input type="text" class="form-control" id="input-harga-asset"
                                    placeholder="Masukan Harga Aset" name="harga" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="nama-asset">Status</label>
                                <select class="form-control" id="input-status-asset" name="status">
                                    <option value="aktif">Aktif</option>
                                    <option value="tidak aktif">Tidak Aktif</option>
                                </select>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script>
        const modalForm = $('#modal-assets');

        function create() {
            $('#modal-title').text('Create Form');
            $('#input-id-asset').val("");
            $('#input-nama-asset').val("");
            $('#input-jenis-asset').val("");
            $('#input-harga-asset').val("");
            $("#input-status-asset").val("");
            modalForm.modal('show');
        }

        function closeModal() {
            console.log('heheh');
            $('#input-id-asset').val();
            $('#input-nama-asset').val();
            $('#input-jenis-asset').val();
            $('#input-harga-asset').val();
            $("#input-status-asset").val();
            modalForm.modal('hide');
        }

        function edit(e) {
            $('#modal-title').text('Edit Form');
            let id = $(e).data('id');
            let nama = $(e).data('nama');
            let harga = $(e).data('harga');
            let jenis = $(e).data('jenis');
            let status = $(e).data('status');
            $('#input-id-asset').val(id);
            $('#input-nama-asset').val(nama);
            $('#input-jenis-asset').val(jenis);
            $('#input-harga-asset').val(harga);
            $("#input-status-asset").val(status).change();
            modalForm.modal('show');
        }
    </script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
@endsection
