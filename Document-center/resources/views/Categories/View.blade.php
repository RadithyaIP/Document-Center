@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">{{ $kategoris->nama }}</h4>
                <div class="flex-shrink-0">
                    <div class="dropdown card-header-dropdown">
                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="fw-semibold text-uppercase fs-12">Sort by:
                            </span><span class="text-muted">Today<i class="mdi mdi-chevron-down ms-1"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Today</a>
                            <a class="dropdown-item" href="#">Yesterday</a>
                            <a class="dropdown-item" href="#">Last 7 Days</a>
                            <a class="dropdown-item" href="#">Last 30 Days</a>
                            <a class="dropdown-item" href="#">This Month</a>
                            <a class="dropdown-item" href="#">Last Month</a>
                        </div>
                    </div>
                </div>
            </div><!-- end card header -->

            <div class="card-body">
                <div class="table-responsive table-card">
                    <table class="table table-hover table-centered align-middle table-nowrap mb-0">
                        <tbody>
                            @foreach($dokumens as $dokumen)
                            @if($users->divisi_id == $dokumen->divisi 
                            && $dokumen->kategori_id == $kategoris->id
                            && $dokumen->is_active == '1')
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <h5 class="fs-14 my-1"><a href="{{ route('Dokumen.show', $dokumen->id) }}"
                                                    class="text-reset">{{"$dokumen->nama_dokumen"}}</a></h5>
                                            <!-- <span class="text-muted"></span> -->
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-muted">Nomor Dokumen</span>
                                    <h5 class="fs-14 my-1 fw-normal">{{"$dokumen->no_dokumen"}}</h5>
                                </td>

                                <td>
                                    <a href="{{ route('downloadFile', $dokumen->file_name) }}">
                                        <button type="submit" class="btn btn-primary">
                                            Download
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('viewFile', $dokumen->file_name) }}">
                                        <button type="submit" class="btn btn-primary">
                                            View
                                        </button>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('Dokumen.show', $dokumen->id) }}">
                                        <button type="submit" class="btn btn-primary">
                                            Details
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                            <!-- <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-sm bg-light rounded p-1 me-2">
                                            <img src="assets/images/products/img-1.png" alt=""
                                                class="img-fluid d-block" />
                                        </div>
                                        <div>
                                            <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html"
                                                    class="text-reset">Branded T-Shirts</a></h5>
                                            <span class="text-muted">24 Apr 2021</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="fs-14 my-1 fw-normal">$29.00</h5>
                                    <span class="text-muted">Price</span>
                                </td>
                                <td>
                                    <h5 class="fs-14 my-1 fw-normal">62</h5>
                                    <span class="text-muted">Orders</span>
                                </td>
                                <td>
                                    <h5 class="fs-14 my-1 fw-normal">510</h5>
                                    <span class="text-muted">Stock</span>
                                </td>
                                <td>
                                    <h5 class="fs-14 my-1 fw-normal">$1,798</h5>
                                    <span class="text-muted">Amount</span>
                                </td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>

                <div class="align-items-center mt-4 pt-2 justify-content-between d-flex">
                    <div class="flex-shrink-0">
                        <div class="text-muted">
                            Showing <span class="fw-semibold">5</span> of <span class="fw-semibold">25</span> Results
                        </div>
                    </div>
                    <ul class="pagination pagination-separated pagination-sm mb-0">
                        <li class="page-item disabled">
                            <a href="#" class="page-link">←</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">1</a>
                        </li>
                        <li class="page-item active">
                            <a href="#" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">3</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">→</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div> <!-- end row-->

@endsection