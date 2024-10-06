@extends('admin.layouts.master')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('vendor.desboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">product</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body table-responsive">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Product ID</th>
                            <th>Review</th>
                            <th>Rating</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($ratings as $rating)
                        @dd($rating);
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>
{{--                                    <img src="{{ asset(optional($rating->ratingReview)->image) }}" width="100"></td>--}}
                                <td>{{ optional($rating->ratingReview)->name }}</td>
                                <td>{{ optional($rating->ratingReview)->email }}</td>
                                <td>{{ optional($rating->ratingReview)->review }}</td>
                                <td>{{ optional($rating->ratingReview)->rating }}</td>
                                <td>
{{--                                    <a href="{{ route('vendor.product.edit', $product->id) }}" class="btn btn-primary" title="Edit"><i class="fas fa-edit"></i></a>--}}
                                    <a href="#deleteModal{{ $rating->id }}" class="btn btn-danger" data-toggle="modal" title="Delete"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <!-- Delete product Modal -->
                            <div class="modal fade" id="deleteModal{{ $rating->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Are tou sure you want to delete ?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('rating-review.delete', $rating->id) }}" method="POST">
                                                @csrf
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-danger">Permanent Delete</button>
                                            </form>

                                        </div>
                                        <div class="modal-footer">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>S.N</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->


        </div>
    </section>
@endsection

@section('scripts')
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection

