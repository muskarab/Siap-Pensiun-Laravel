@extends('layouts.base')
@section('content')
    <!-- AddArticleModal -->
    <div class="modal fade" id="addArticleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Article</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="add_article_form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4">
                    <label>Header</label>
                    <div class="input-group mb-3">
                    <input type="text" name="header" class="form-control" placeholder="Header" aria-label="Header" aria-describedby="header-addon" required>
                    </div>
                    <label>Content</label>
                    <div class="input-group mb-3">
                    {{-- <input type="text" name="content" class="form-control" placeholder="Content" aria-label="Content" aria-describedby="content-addon" required> --}}
                    <textarea name="content" id="content" cols="50" rows="10"></textarea>
                    </div>
                    <label>Image</label>
                    <div class="input-group mb-3">
                    <input type="file" name="image" class="form-control" placeholder="Image" aria-label="Image" aria-describedby="image-addon" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="add_article_btn" class="btn bg-gradient-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <!-- EditArticleModal -->
    <div class="modal fade" id="editArticleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Article</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="edit_article_form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="article_id" id="article_id">
                <input type="hidden" name="article_image" id="article_image">
                <div class="modal-body p-4">
                    <label>Header</label>
                    <div class="input-group mb-3">
                    <input type="text" name="header" id="header" class="form-control" placeholder="Header" aria-label="Header" aria-describedby="header-addon" required>
                    </div>
                    <label>Content</label>
                    <div class="input-group mb-3">
                    <input type="text" name="content" id="content" class="form-control" placeholder="Content" aria-label="Content" aria-describedby="content-addon" required>
                    </div>
                    <label>Image</label>
                    <div class="input-group mb-3">
                    <input type="file" name="image" class="form-control" placeholder="Image" aria-label="Image" aria-describedby="image-addon">
                    </div>
                    <div class="mb-3" id="image">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="edit_article_btn" class="btn bg-gradient-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <div class="container-fluid py4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h5 class="mb-0">All Articles</h5>
                            </div>
                            <button class="btn bg-gradient-primary btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#addArticleModal">+&nbsp; New Article</button>
                        </div>
                    </div>
                    <div class="card-body" id="show_all_articles">
                        <div class="table-responsive p-0">
                            <h1 class="text-center text-secondary my-5">Loading...</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
    $(function() {
        CKEDITOR.replace( 'content' );
        // add new article ajax request
        $("#add_article_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#add_article_btn").text('Adding...');
            $.ajax({
            url: '{{ route('store_article') }}',
            method: 'post',
            data: fd,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
                success: function(response) {
                    if (response.status == 200) {
                    Swal.fire(
                        'Added!',
                        'Article Added Successfully!',
                        'success'
                    )
                    fetchAllArticles();
                    }
                    $("#add_article_btn").text('Add Article');
                    $("#add_article_form")[0].reset();
                    $("#addArticleModal").modal('hide');
                }
            });
        });

        // edit article ajax request
        $(document).on('click', '.editIcon', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            $.ajax({
                url: '{{ route('edit_article') }}',
                method: 'get',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    $("#header").val(response.header);
                    $("#content").val(response.content);
                    $("#image").html(
                        `<img src="storage/articles/${response.image}" width="200" class="img-thumbnail">`);
                    $("#article_id").val(response.id);
                    $("#article_image").val(response.image);
                }
            });
        });

        // update article ajax request
        $("#edit_article_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#edit_article_btn").text('Updating...');
            $.ajax({
            url: '{{ route('update_article') }}',
            method: 'post',
            data: fd,
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                if (response.status == 200) {
                Swal.fire(
                    'Updated!',
                    'Article Updated Successfully!',
                    'success'
                )
                fetchAllArticles();
                }
                $("#edit_article_btn").text('Update Article');
                $("#edit_article_form")[0].reset();
                $("#editArticleModal").modal('hide');
            }
            });
        });

        // delete article ajax request
        $(document).on('click', '.deleteIcon', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            let csrf = '{{ csrf_token() }}';
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                url: '{{ route('delete_article') }}',
                method: 'delete',
                data: {
                    id: id,
                    _token: csrf
                },
                success: function(response) {
                    console.log(response);
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                    fetchAllArticles();
                }
                });
            }
            })
        });

        // fetch all article ajax request
        fetchAllArticles();

        function fetchAllArticles() {
            $.ajax({
            url: '{{ route('fetchAll_article') }}',
            method: 'get',
            success: function(response) {
                $("#show_all_articles").html(response);
                // $("table").DataTable({
                // order: [0, 'asc']
                // });
            }
            });
        }
    });
</script>
@endsection