<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Toastr CSS -->

    <link href="
    https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css
    " rel="stylesheet">

</head>

<body>
    <div class="container mt-2">


        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><strong>New User</strong></div>
                    <div class="card-body">
                        <form id="userForm" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Name *" required>
                                </div>
                                <div class="col">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email *" required>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col input-group">
                                    <span class="input-group-text" id="basic-addon1">+91</span>
                                    <input type="text" class="form-control" id="phone" name="phone" required
                                        placeholder="Phone" aria-describedby="basic-addon1">
                                </div>
                                <div class="col">
                                    <select class="form-select" name="role_id" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col">
                                    <input type="file" class="form-control" id="profile_image" name="profile_image"
                                        accept="image/*" placeholder="Profile Image">
                                </div>
                                <div class="col">
                                    <textarea class="form-control" id="description" name="description" rows="3" required
                                        placeholder="Enter Description"></textarea>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Users List</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Description</th>
                                    <th>Role</th>
                                    <th>Profile Image</th>
                                </tr>
                            </thead>
                            <tbody id="userTableBody"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Include Toastr.js -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="
        https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js
        "></script>

    <!-- Include Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Include Bootstrap JS (optional for some components) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>

    {{-- include form handling script --}}
    <script src="{{ asset('js/FormHandler.js') }}"></script>

</body>
