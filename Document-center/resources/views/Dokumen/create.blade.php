@extends('Dokumen.layouts')

@section('content')

<div class="row justify-content-center">
    <div class="col-xxl-6">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Upload File</h4>
                <div class="flex-shrink-0">
                </div>
            </div><!-- end card header -->
            <div class="card-body">
                <p class="text-muted">Silahkan Upload Dokumen Sesuai <b>Kategori</b> Yang Anda Pilih</p>
                <div class="live-preview">
                    <form action="{{ route('Dokumen.store') }}" id="myForm">
                        @csrf
                        <div class="mb-3">
                            <label for="no_dokumen" class="form-label">No Dokumen</label>
                            <input type="text" class="form-control" id="no_dokumen" placeholder="Enter Nomor Dokumen">
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
                            <label for="user_id" class="form-label">User</label>
                            <select name="user_id" class="form-control" id="kategori">
                                <option value="{{$users->id}}">{{ "$users->name" }}</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="divisi" class="form-label">Divisi</label>
                            <select name="divisi" class="form-control" id="divisi">
                                <option value="{{$users->divisi_id}}">{{ "$users->divisi_id" }}</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nama_dokumen" class="form-label">Nama Dokumen</label>
                            <input type="text" class="form-control" id="nama_dokumen" placeholder="Enter Nama Dokumen">
                        </div>
                        <div class="mb-3">
                            <label for="StartleaveDate" class="form-label">Terakhir Revisi</label>
                            <input type="date" class="form-control" data-provider="flatpickr" id="revisi">
                        </div>
                        <div class="mb-3">
                            <label for="VertimeassageInput" class="form-label">Keterangan</label>
                            <textarea class="form-control" id="keterangan" rows="3"
                                placeholder="Enter your message"></textarea>
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
    @endsection