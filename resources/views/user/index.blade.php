@extends('layouts.base')
@section('content')
    <!-- AddUserModal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="add_user_form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4">
                    <label>Name</label>
                    <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name-addon" required>
                    </div>
                    <label>Email</label>
                    <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon" required>
                    </div>
                    <label>Password</label>
                    <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" required>
                    </div>
                    <label>Role</label>
                    <select class="form-control" name="role_id">
                        @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="add_user_btn" class="btn bg-gradient-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
    </div>

    <!-- EditUserModal -->
    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" id="edit_user_form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="user_id" id="user_id">
                <div class="modal-body p-4">
                    <label>Name</label>
                    <div class="input-group mb-3">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name-addon" required>
                    </div>
                    <label>Email</label>
                    <div class="input-group mb-3">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon" required>
                    </div>
                    <label>Password</label>
                    <div class="input-group mb-3">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" required>
                    </div>
                    <label>Role</label>
                    <select class="form-control" name="role_id">
                        @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="edit_user_btn" class="btn bg-gradient-primary">Save changes</button>
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
                                <h5 class="mb-0">All Users</h5>
                            </div>
                            <button class="btn bg-gradient-primary btn-sm mb-0" data-bs-toggle="modal" data-bs-target="#addUserModal">+&nbsp; New User</button>
                        </div>
                    </div>
                    <div class="card-body" id="show_all_users">
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
<script>
    $(function() {
        // add new user ajax request
        $("#add_user_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#add_user_btn").text('Adding...');
            $.ajax({
            url: '{{ route('store_user') }}',
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
                        'User Added Successfully!',
                        'success'
                    )
                    fetchAllUsers();
                    }
                    $("#add_user_btn").text('Add User');
                    $("#add_user_form")[0].reset();
                    $("#addUserModal").modal('hide');
                }
            });
        });

        // edit user ajax request
        $(document).on('click', '.editIcon', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            $.ajax({
                url: '{{ route('edit_user') }}',
                method: 'get',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    $("#name").val(response.name);
                    $("#email").val(response.email);
                    $("#password").val(response.password);
                    $("#user_id").val(response.id);
                }
            });
        });

        // update user ajax request
        $("#edit_user_form").submit(function(e) {
            e.preventDefault();
            const fd = new FormData(this);
            $("#edit_user_btn").text('Updating...');
            $.ajax({
            url: '{{ route('update_user') }}',
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
                    'User Updated Successfully!',
                    'success'
                )
                fetchAllUsers();
                }
                $("#edit_user_btn").text('Update User');
                $("#edit_user_form")[0].reset();
                $("#editUserModal").modal('hide');
            }
            });
        });

        // delete user ajax request
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
                url: '{{ route('delete_user') }}',
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
                    fetchAllUsers();
                }
                });
            }
            })
        });

        // fetch all user ajax request
        fetchAllUsers();

        function fetchAllUsers() {
            $.ajax({
            url: '{{ route('fetchAll_user') }}',
            method: 'get',
            success: function(response) {
                $("#show_all_users").html(response);
                // $("table").DataTable({
                // order: [0, 'asc']
                // });
            }
            });
        }
    });
</script>
@endsection