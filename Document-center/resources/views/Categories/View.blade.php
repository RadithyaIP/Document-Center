@extends('Dokumen.layouts')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">{{ "$kategoris->nama" }}</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="DokumenList">
                    <div class="row g-4 mb-3">
                        <div class="col-sm-auto">
                            <div>
                                <button type="button" class="btn btn-success edit-btn" data-bs-toggle="modal"
                                    id="create-btn" data-bs-target="#showModal"><i
                                        class="ri-add-line align-bottom me-1"></i>
                                    Add</button>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive table-card mt-3 mb-1">
                        <table class="table align-middle table-nowrap" id="DokumenTable">

                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 50px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="checkAll"
                                                value="option">
                                        </div>
                                    </th>
                                    <th class="sort" data-sort="user">User</th>
                                    <th class="sort" data-sort="no_dokumen">No Dokumen</th>
                                    <th class="sort" data-sort="nama_dokumen">Nama Dokumen</th>
                                    <th class="sort" data-sort="revisi">Revisi Dokumen</th>
                                    <th class="sort" data-sort="status">Delivery Status</th>
                                    <th class="sort" data-sort="action">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list form-check-all">
                                <?php
                                $i = 0;
                                ?>
                                @foreach($dokumens as $dokumen)
                                @if($users->divisi_id == $dokumen->divisi
                                && $dokumen->kategori_id == $kategoris->id
                                && $dokumen->is_active == '1')
                                <?php
                                    $i++;
                            ?>
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="chk_child"
                                                value="option1">
                                        </div>
                                    </th>
                                    <td class="id" style="display:none;"><a href="javascript:void(0);"
                                            class="fw-medium link-primary">#VZ2101</a></td>
                                    <td class="user_id">{{ "$users->name" }}</td>
                                    <td class="no_dokumen">{{"$dokumen->no_dokumen"}}</td>
                                    <td class="nama_dokumen">{{"$dokumen->nama_dokumen"}}</td>
                                    <td class="revisi">{{"$dokumen->created_at"}}</td>
                                    <td class="status"><span
                                            class="badge badge-soft-success text-uppercase">Active</span></td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <div class="edit">
                                                <button class="btn btn-sm btn-success edit-item-btn"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#showModal{{ $dokumen->id }}">Edit</button>
                                            </div>
                                            <div class="details">
                                                <button type="button" class="btn btn-sm btn-success"
                                                    data-bs-toggle="modal" data-bs-target="#flipModal">Details</button>
                                            </div>
                                            <div class="download">
                                                <a href="{{ route('downloadFile', $dokumen->file_name) }}">
                                                    <button type="submit" class="btn btn-sm btn-success">
                                                        Download
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="view">
                                                <a href="{{ route('viewFile', $dokumen->file_name) }}">
                                                    <button type="submit" class="btn btn-sm btn-primary">
                                                        View
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="remove">

                                                <button type="submit" class="btn btn-sm btn-danger remove-item-btn"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modal_delete">Remove</button>

                                                <!-- Modal Popup untuk delete-->

                                                <div class="modal fade" id="modal_delete">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content" style="margin-top:100px;">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" style="text-align:center;">
                                                                    Anda yakin akan menghapus data ini.. ?</h4>
                                                            </div>

                                                            <div class="modal-footer"
                                                                style="margin:0px; border-top:0px; text-align:center;">
                                                                <form
                                                                    action="{{ route('Dokumen.destroy', $dokumen->id) }}"
                                                                    method="POST">

                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                                        id="delete_link"
                                                                        data-bs-target="#deleteRecordModal">Hapus
                                                                    </button>

                                                                </form>

                                                                <button type="button" class="btn btn-light btn-sm"
                                                                    data-bs-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                </form>
                                                <!-- Javascript untuk popup modal Delete-->
                                                <script type="text/javascript">
                                                function confirm_modal(delete_url) {
                                                    $('#modal_delete').modal('show', {
                                                        backdrop: 'static'
                                                    });
                                                    document.getElementById('delete_link').setAttribute('href',
                                                        delete_url);
                                                }
                                                </script>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                <!-- edit Modal -->
                                <div class="modal fade" id="showModal{{ $dokumen->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header bg-light p-3">
                                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close" id="close-modal"></button>
                                            </div>
                                            <form method="POST" action="{{ route('dokumen.update', $dokumen->id) }}"
                                                id="myForm" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">

                                                    <div class="mb-3" id="modal-id">
                                                        <label for="no_dokumen" class="form-label">No Dokumen</label>
                                                        <input type="text" name="no_dokumen" class="form-control"
                                                            value="{{$dokumen->no_dokumen}}" />
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="kategori" class="form-label">Kategori</label>
                                                        <select name="kategori" class="form-control" id="kategori">
                                                            @foreach ($kateg as $kategs)
                                                            <option value="{{$kategs->id}}">{{ "$kategs->nama" }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="user_id" class="form-label">User</label>
                                                        <select name="user_id" class="form-control" id="user_id">
                                                            <option value="{{$users->id}}">{{ "$users->name" }}</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="divisi" class="form-label">Divisi</label>
                                                        <select name="divisi" class="form-control" id="divisi">
                                                            @foreach ($divisis as $divisi)
                                                            @if ($divisi->id == $users->divisi_id)
                                                            <option value="{{$users->divisi_id}}">{{ "$divisi->nama" }}
                                                            </option>
                                                            @endif
                                                            @endforeach

                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="nama_dokumen" class="form-label">Nama
                                                            Dokumen</label>
                                                        <input type="text" name="nama_dokumen" class="form-control"
                                                            value="{{$dokumen->nama_dokumen}}" required />
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="revisi" class="form-label">Revisi
                                                            Dokumen</label>
                                                        <input type="date" name="revisi" class="form-control"
                                                            required />
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="VertimeassageInput"
                                                            class="form-label">Keterangan</label>
                                                        <input type="" name="keterangan" id="keterangan"
                                                            class="form-control" value="{{$dokumen->keterangan}}"
                                                            required />
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-success"
                                                            id="edit-btn">Update</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <div class="noresult" style="display: none">
                            <div class="text-center">
                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                    colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                </lord-icon>
                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                    orders for you search.</p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <div class="pagination-wrap hstack gap-2">
                            <a class="page-item pagination-prev disabled" href="#">
                                Previous
                            </a>
                            <ul class="pagination listjs-pagination mb-0"></ul>
                            <a class="page-item pagination-next" href="#">
                                Next
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end col -->
</div>

<!-- add modal -->
<div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    id="close-modal"></button>
            </div>
            <form method="POST" action="{{ route('Dokumen.store') }}" id="myForm" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">

                    <div class="mb-3" id="modal-id">
                        <label for="no_dokumen" class="form-label">No Dokumen</label>
                        <input name="no_dokumen" type="text" class="form-control" id="no_dokumen"
                            placeholder="Enter Nomor Dokumen">
                    </div>

                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        @foreach ($kateg as $kategori)
                        @if($kategori->id == $kategoris->id)
                        <input name="" value="{{$kategori->nama}}" class="form-control" id="" readonly>
                        <input hidden name="kategori" value="{{$kategori->id}}" class="form-control" id="kategori"
                            readonly>
                        @endif
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User</label>
                        <select name="user_id" class="form-control" id="user_id">
                            <option value="{{$users->id}}">{{ "$users->name" }}</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="divisi" class="form-label">Divisi</label>
                        <select name="divisi" class="form-control" id="divisi">
                            @foreach ($divisis as $divisi)
                            @if ($divisi->id == $users->divisi_id)
                            <option value="{{$users->divisi_id}}">{{ "$divisi->nama" }}</option>
                            @endif
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="nama_dokumen" class="form-label">Nama Dokumen</label>
                        <input name="nama_dokumen" type="text" class="form-control" id="nama_dokumen"
                            placeholder="Enter Nama Dokumen">
                    </div>

                    <div class="mb-3">
                        <label for="StartleaveDate" class="form-label">Terakhir Revisi</label>
                        <input name="revisi" type="date" class="form-control" data-provider="flatpickr" id="revisi">
                    </div>

                    <div class="mb-3">
                        <label for="VertimeassageInput" class="form-label">Keterangan</label>
                        <input name="keterangan" class="form-control" id="keterangan" rows="3"
                            placeholder="Enter your message">
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Upload Dokumen</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <p class="text-muted">Upload File .pdf</p>

                                <div class="">
                                    <div class="fallback">
                                        <input type="file" name="file" multiple="multiple">
                                    </div>

                                    <ul class="list-unstyled mb-0" id="dropzone-preview">
                                        <li class="mt-2" id="dropzone-preview-list">

                                        </li>
                                    </ul>
                                    <!-- end dropzon-preview -->
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div> <!-- end col -->
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Add Dokumen</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Detail -->

@if($realCount != 0)
<div id="flipModal" class="modal fade flip" tabindex="-1" aria-labelledby="flipModalLabel" aria-hidden="true"
    style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="flipModalLabel">Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <div class="modal-body">
                        <div
                            class="mb-3" id="modal-id">
                            <label for="no_dokumen" class="form-label">No Dokumen</label>
                            <input type="text" name="no_dokumen" class="form-control" value="{{$dokumen->no_dokumen}}"
                                readonly />
                    </div>

                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select name="kategori" class="form-control" id="kategori" readonly>
                            @foreach ($kateg as $kategs)
                            <option value="{{$kategs->id}}">{{ "$kategs->nama" }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User</label>
                        <select name="user_id" class="form-control" id="user_id" readonly>
                            <option value="{{$users->id}}">{{ "$users->name" }}</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="divisi" class="form-label">Divisi</label>
                        <select name="divisi" class="form-control" id="divisi" readonly>
                            @foreach ($divisis as $divisi)
                            @if ($divisi->id == $users->divisi_id)
                            <option value="{{$users->divisi_id}}">{{ "$divisi->nama" }}
                            </option>
                            @endif
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="nama_dokumen" class="form-label">Nama Dokumen</label>
                        <input type="text" name="nama_dokumen" class="form-control" value="{{$dokumen->nama_dokumen}}"
                            required readonly />
                    </div>

                    <div class="mb-3">
                        <label for="revisi" class="form-label">Revisi Dokumen</label>
                        <input type="" name="revisi" id="revisi" class="form-control" value="{{$dokumen->created_at}}"
                            required readonly />
                    </div>

                    <div class="mb-3">
                        <label for="VertimeassageInput" class="form-label">Keterangan</label>
                        <input type="" name="keterangan" id="keterangan" class="form-control"
                            value="{{$dokumen->keterangan}}" required readonly />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endif



@endsection