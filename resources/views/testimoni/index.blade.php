@extends('layouts.base')
@section('content')
    <!-- AddTestimoniModal -->
    <div class="modal fade" id="addTestimoniModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Testimonies</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="add_testimoni_form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4">
                    <label>Name</label>
                    <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name-addon" required>
                    </div>
                    <label>Text</label>
                    <div class="input-group mb-3">
                    <input type="text" name="text" class="form-control" placeholder="Content" aria-label="Content" aria-describedby="content-addon" required>
                    </div>
                    <label>Avatar</label>
                    <div class="input-group mb-3">
                    <input type="file" name="avatar" class="form-control" placeholder="Image" aria-label="Image" aria-describedby="image-addon" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="add_testimoni_btn" class="btn bg-gradient-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <!-- EditTestimoniModal -->
    <div class="modal fade" id="editTestimoniModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Testimoni</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="edit_testimoni_form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="testimoni_id" id="testimoni_id">
                <input type="hidden" name="testimoni_avatar" id="testimoni_avatar">
                <div class="modal-body p-4">
                    <label>Name</label>
                    <div class="input-group mb-3">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name-addon" required>
                    </div>
                    <label>Text</label>
                    <div class="input-group mb-3">
                    <input type="text" name="text" id="text" class="form-control" placeholder="Text" aria-label="Text" aria-describedby="text-addon" required>
                    </div>
                    <label>Avatar</label>
                    <div class="input-group mb-3">
                    <input type="file" name="avatar" class="form-control" placeholder="Avatar" aria-label="Avatar" aria-describedby="avatar-addon">
                    </div>
                    <div class="mb-3" id="avatar">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="edit_testimoni_btn" class="btn bg-gradient-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h5 class="mb-0">All Testimonies</h5>
                            </div>
                            <button class="btn bg-gradient-primary btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#addTestimoniModal">+&nbsp; New Testimoni</button>
                        </div>
                    </div>
                    <div class="card-body" id="show_all_testimonies">
                        <div class="table-responsive">
                            {{-- <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                                    <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($testimonies as $testimonie)
                                    <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{ $testimonie->name }}</h6>
                                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                        </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $testimonie->text }}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success">Online</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                        Edit
                                        </a>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table> --}}
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
<script>
    $(function() {
        // add new testimoni ajax request
        $("#add_testimoni_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#add_testimoni_btn").text('Adding...');
            $.ajax({
            url: '{{ route('store_testimoni') }}',
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
                        'Testimoni Added Successfully!',
                        'success'
                    )
                    fetchAllTestimonies();
                    }
                    $("#add_testimoni_btn").text('Add Testimoni');
                    $("#add_testimoni_form")[0].reset();
                    $("#addTestimoniModal").modal('hide');
                }
            });
        });

        // edit testimoni ajax request
        $(document).on('click', '.editIcon', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            $.ajax({
                url: '{{ route('edit_testimoni') }}',
                method: 'get',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    $("#name").val(response.name);
                    $("#text").val(response.text);
                    $("#avatar").html(
                        `<img src="storage/testimonies/${response.avatar}" width="200" class="img-thumbnail">`);
                    $("#testimoni_id").val(response.id);
                    $("#testimoni_avatar").val(response.avatar);
                }
            });
        });

        // update testimoni ajax request
        $("#edit_testimoni_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#edit_testimoni_btn").text('Updating...');
            $.ajax({
            url: '{{ route('update_testimoni') }}',
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
                    'Testimoni Updated Successfully!',
                    'success'
                )
                fetchAllTestimonies();
                }
                $("#edit_testimoni_btn").text('Update Testimoni');
                $("#edit_testimoni_form")[0].reset();
                $("#editTestimoniModal").modal('hide');
            }
            });
        });

        // delete testimoni ajax request
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
                url: '{{ route('delete_testimoni') }}',
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
                    fetchAllTestimonies();
                }
                });
            }
            })
        });

        // fetch all testimoni ajax request
        fetchAllTestimonies();

        function fetchAllTestimonies() {
            $.ajax({
            url: '{{ route('fetchAll_testimoni') }}',
            method: 'get',
            success: function(response) {
                // location.reload();
                $("#show_all_testimonies").html(response);
                // $("table").DataTable({
                // order: [0, 'asc']
                // });
            }
            });
        }
    });
</script>
@endsection