@extends('Dokumen.layouts')

@section('content')

<div class="row justify-content-center">
    <div class="col-xxl-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Update File</h4>
                <div class="flex-shrink-0">
                </div>
            </div><!-- end card header -->
            <div class="card-body">
                <p class="text-muted">Silahkan Upload Dokumen Sesuai <b>Kategori</b> Yang Anda Pilih</p>
                <div class="live-preview">
                    <form method="POST" action="{{ route('Dokumen.update', $dokumens->id) }}" id="myForm"
                        enctype="multipart/form-data">
                        @method('PUT')

                        @csrf
                        <div class="mb-3">
                            <label for="no_dokumen" class="form-label">No Dokumen</label>
                            <input name="no_dokumen" type="text" class="form-control" id="no_dokumen"
                                value="{{ $dokumens->no_dokumen }}">
                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select name="kategori" class="form-control" id="kategori">
                                @foreach ($kategoris as $kategori)
                                <option value="{{$kategori->id}}">{{ "$kategori->nama" }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nama_dokumen" class="form-label">Nama Dokumen</label>
                            <input name="nama_dokumen" type="text" class="form-control" id="nama_dokumen"
                                value="{{ $dokumens->nama_dokumen }}">
                        </div>
                        <div class="mb-3">
                            <label for="StartleaveDate" class="form-label">Terakhir Revisi</label>
                            <input name="revisi" type="date" class="form-control" data-provider="flatpickr" id="revisi"
                                value="{{ $dokumens->revisi}}">
                        </div>
                        <div class="mb-3">
                            <label for="VertimeassageInput" class="form-label">Keterangan</label>
                            <textarea name="keterangan" class="form-control" id="keterangan" rows="3"
                                value="{{ $dokumens->keterangan }}"></textarea>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title mb-0">Upload Dokumen</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                        <p class="text-muted">Upload File .pdf</p>

                                        <div class="">
                                            <div class="fallback">
                                                <input type="file" name="file"
                                                    multiple="multiple">{{ $dokumens->file_name }}
                                            </div>
                                            <!-- <div class="dz-message needsclick">
                                                <div class="mb-3">
                                                    <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                                </div>

                                                <h4>Drop files here or click to upload.</h4>
                                            </div>
                                        </div> -->

                                            <ul class="list-unstyled mb-0" id="dropzone-preview">
                                                <li class="mt-2" id="dropzone-preview-list">
                                                    <!-- This is used as the file preview template -->
                                                    <!-- <div class="border rounded">
                                                    <div class="d-flex p-2">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar-sm bg-light rounded">
                                                                <img data-dz-thumbnail class="img-fluid rounded d-block"
                                                                    src="#" alt="Dropzone-Image" />
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <div class="pt-1">
                                                                <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                                                <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                                <strong class="error text-danger"
                                                                    data-dz-errormessage></strong>
                                                            </div>
                                                        </div>
                                                        <div class="flex-shrink-0 ms-3">
                                                            <button data-dz-remove
                                                                class="btn btn-sm btn-danger">Delete</button>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                </li>
                                            </ul>
                                            <!-- end dropzon-preview -->
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                </div>
                <div class="d-none code-view">
                    <pre class="language-markup" style="height: 375px;">
<code>&lt;form action=&quot;&quot;&gt;
    &lt;div class=&quot;mb-3&quot;&gt;
        &lt;label for=&quot;employeeName&quot; class=&quot;form-label&quot;&gt;Employee Name&lt;/label&gt;
        &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;employeeName&quot; placeholder=&quot;Enter emploree name&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;mb-3&quot;&gt;
        &lt;label for=&quot;employeeUrl&quot; class=&quot;form-label&quot;&gt;Employee Department URL&lt;/label&gt;
        &lt;input type=&quot;url&quot; class=&quot;form-control&quot; id=&quot;employeeUrl&quot; placeholder=&quot;Enter emploree url&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;mb-3&quot;&gt;
        &lt;label for=&quot;StartleaveDate&quot; class=&quot;form-label&quot;&gt;Start Leave Date&lt;/label&gt;
        &lt;input type=&quot;date&quot; class=&quot;form-control&quot; id=&quot;StartleaveDate&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;mb-3&quot;&gt;
        &lt;label for=&quot;EndleaveDate&quot; class=&quot;form-label&quot;&gt;End Leave Date&lt;/label&gt;
        &lt;input type=&quot;date&quot; class=&quot;form-control&quot; id=&quot;EndleaveDate&quot;&gt;
    &lt;/div&gt;
    &lt;div class=&quot;mb-3&quot;&gt;
        &lt;label for=&quot;VertimeassageInput&quot; class=&quot;form-label&quot;&gt;Message&lt;/label&gt;
        &lt;textarea class=&quot;form-control&quot; id=&quot;VertimeassageInput&quot; rows=&quot;3&quot; placeholder=&quot;Enter your message&quot;&gt;&lt;/textarea&gt;
    &lt;/div&gt;
    &lt;div class=&quot;text-end&quot;&gt;
        &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Add Leave&lt;/button&gt;
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
                </div>
            </div>
        </div>
    </div>
    <!-- <script type="text/javascript">
        Dropzone.options.dropzone ={
            maxFilesize:1,
            acceptedFiles: ".pdf",
        };
    </script> -->
    @endsection