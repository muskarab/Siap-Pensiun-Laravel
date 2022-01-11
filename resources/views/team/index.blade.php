@extends('layouts.base')
@section('content')
    <!-- AddTeamModal -->
    <div class="modal fade" id="addTeamModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Teams</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="add_team_form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4">
                    <label>Name</label>
                    <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Header" aria-label="Header" aria-describedby="header-addon" required>
                    </div>
                    <label>Position</label>
                    <div class="input-group mb-3">
                    <input type="text" name="position" class="form-control" placeholder="Content" aria-label="Content" aria-describedby="content-addon" required>
                    </div>
                    <label>Avatar</label>
                    <div class="input-group mb-3">
                    <input type="file" name="avatar" class="form-control" placeholder="Image" aria-label="Image" aria-describedby="image-addon" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="add_team_btn" class="btn bg-gradient-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <!-- EditTeamModal -->
    <div class="modal fade" id="editTeamModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Team</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="edit_team_form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="team_id" id="team_id">
                <input type="hidden" name="team_avatar" id="team_avatar">
                <div class="modal-body p-4">
                    <label>Name</label>
                    <div class="input-group mb-3">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name-addon" required>
                    </div>
                    <label>Position</label>
                    <div class="input-group mb-3">
                    <input type="text" name="position" id="position" class="form-control" placeholder="Position" aria-label="Position" aria-describedby="position-addon" required>
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
                    <button type="submit" id="edit_team_btn" class="btn bg-gradient-primary">Save changes</button>
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
                            <h5 class="mb-0">All Teams</h5>
                        </div>
                        <button class="btn bg-gradient-primary btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#addTeamModal">+&nbsp; New Team</button>
                    </div>
                </div>
                <div class="card-body" id="show_all_teams">
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
        // add new team ajax request
        $("#add_team_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#add_team_btn").text('Adding...');
            $.ajax({
            url: '{{ route('store_team') }}',
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
                        'Team Added Successfully!',
                        'success'
                    )
                    fetchAllTeams();
                    }
                    $("#add_team_btn").text('Add Team');
                    $("#add_team_form")[0].reset();
                    $("#addTeamModal").modal('hide');
                }
            });
        });

        // edit team ajax request
        $(document).on('click', '.editIcon', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            $.ajax({
                url: '{{ route('edit_team') }}',
                method: 'get',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    $("#name").val(response.name);
                    $("#position").val(response.position);
                    $("#avatar").html(
                        `<img src="storage/teams/${response.avatar}" width="200" class="img-thumbnail">`);
                    $("#team_id").val(response.id);
                    $("#team_avatar").val(response.avatar);
                }
            });
        });

        // update team ajax request
        $("#edit_team_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#edit_team_btn").text('Updating...');
            $.ajax({
            url: '{{ route('update_team') }}',
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
                    'Team Updated Successfully!',
                    'success'
                )
                fetchAllTeams();
                }
                $("#edit_team_btn").text('Update Team');
                $("#edit_team_form")[0].reset();
                $("#editTeamModal").modal('hide');
            }
            });
        });

        // delete team ajax request
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
                url: '{{ route('delete_team') }}',
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
                    fetchAllTeams();
                }
                });
            }
            })
        });

        // fetch all team ajax request
        fetchAllTeams();

        function fetchAllTeams() {
            $.ajax({
            url: '{{ route('fetchAll_team') }}',
            method: 'get',
            success: function(response) {
                $("#show_all_teams").html(response);
                // $("table").DataTable({
                // order: [0, 'asc']
                // });
            }
            });
        }
    });
</script>
@endsection