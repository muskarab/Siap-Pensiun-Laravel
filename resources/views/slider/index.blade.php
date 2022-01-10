@extends('layouts.base')
@section('content')
    <!-- AddSliderModal -->
    <div class="modal fade" id="addSliderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Slider</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="add_slider_form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4">
                    <label>Header</label>
                    <div class="input-group mb-3">
                    <input type="text" name="header" class="form-control" placeholder="Header" aria-label="Header" aria-describedby="header-addon" required>
                    </div>
                    <label>Content</label>
                    <div class="input-group mb-3">
                    <input type="text" name="content" class="form-control" placeholder="Content" aria-label="Content" aria-describedby="content-addon" required>
                    </div>
                    <label>Image</label>
                    <div class="input-group mb-3">
                    <input type="file" name="image" class="form-control" placeholder="Image" aria-label="Image" aria-describedby="image-addon" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="add_slider_btn" class="btn bg-gradient-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <!-- EditSliderModal -->
    <div class="modal fade" id="editSliderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Slider</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="edit_slider_form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="slider_id" id="slider_id">
                <input type="hidden" name="slider_image" id="slider_image">
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
                    <input type="file" name="image" class="form-control" placeholder="Image" aria-label="Image" aria-describedby="image-addon" required>
                    </div>
                    <div class="mb-3" id="image">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="edit_slider_btn" class="btn bg-gradient-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Sliders</h5>
                        </div>
                        <button class="btn bg-gradient-primary btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#addSliderModal">+&nbsp; New Slider</button>
                    </div>
                </div>
                <div class="card-body" id="show_all_sliders">
                    <div class="table-responsive p-0">
                        <h1 class="text-center text-secondary my-5">Loading...</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(function() {
        // add new slider ajax request
        $("#add_slider_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#add_slider_btn").text('Adding...');
            $.ajax({
            url: '{{ route('store_slider') }}',
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
                        'Slider Added Successfully!',
                        'success'
                    )
                    fetchAllSliders();
                    }
                    $("#add_slider_btn").text('Add Slider');
                    $("#add_slider_form")[0].reset();
                    $("#addSliderModal").modal('hide');
                }
            });
        });

        // edit slider ajax request
        $(document).on('click', '.editIcon', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            $.ajax({
                url: '{{ route('edit_slider') }}',
                method: 'get',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    $("#header").val(response.header);
                    $("#content").val(response.content);
                    $("#image").html(
                        `<img src="storage/sliders/${response.image}" width="200" class="img-thumbnail">`);
                    $("#slider_id").val(response.id);
                    $("#slider_image").val(response.image);
                }
            });
        });

        // update slider ajax request
        $("#edit_slider_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#edit_slider_btn").text('Updating...');
            $.ajax({
            url: '{{ route('update_slider') }}',
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
                    'Slider Updated Successfully!',
                    'success'
                )
                fetchAllSliders();
                }
                $("#edit_slider_btn").text('Update Slider');
                $("#edit_slider_form")[0].reset();
                $("#editSliderModal").modal('hide');
            }
            });
        });

        // delete slider ajax request
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
                url: '{{ route('delete_slider') }}',
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
                    fetchAllSliders();
                }
                });
            }
            })
        });

        // fetch all slider ajax request
        fetchAllSliders();

        function fetchAllSliders() {
            $.ajax({
            url: '{{ route('fetchAll_slider') }}',
            method: 'get',
            success: function(response) {
                $("#show_all_sliders").html(response);
                // $("table").DataTable({
                // order: [0, 'asc']
                // });
            }
            });
        }
    });
</script>
@endsection