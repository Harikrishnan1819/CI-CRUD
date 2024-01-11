<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Blog Sample</title>
</head>
<body>
<div class="container">
    <div class="row">

    <div class="card mt-5">
        <div class="card-header">
            <h5 class="card-title">Blog <a data-bs-toggle="modal" data-bs-target="#createModal" href="#" class="btn btn-primary float-end ">Create new</a></h5>
        </div>
        <!--Create Modal -->
        <div class="modal fade" id="createModal" tabindex="-1" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="CreateModalLabel">Create Blog</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <!--Create Form-->
                        <form>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    <!--End Create Form-->
                    </div>
                </div>
            </div>
        </div>
<!--End Create Modal-->

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th style="width: 50vh">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>1</th>
                    <td>Test title</td>
                    <td>Description</td>
                    <td>Active</td>
                    <td>

                        <!-- View Modal -->
                        <button type="button" class="btn btn-info"  data-bs-toggle="modal" data-bs-target="#ViewModal">View</button>
                        <div class="modal fade" id="ViewModal" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="ViewModalLabel">View Modal</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!--View Form-->
                                        <form>
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" class="form-control" id="title" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea class="form-control" id="description" rows="3" readonly></textarea>
                                            </div>
                                        </form>
                                        <!--End View Form-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End View Modal-->

                        <!-- Edit Modal -->
                        <button type="submit" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#EditModal">Edit</button>
                        <div class="modal fade" id="EditModal" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="EditModalLabel">Edit Modal</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!--Edit Form-->
                                        <form>
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" class="form-control" id="title" name="title">
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                        <!--End Edit Form-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Edit Modal-->

                        <!-- Delete Modal -->
                        <button class="btn btn-danger" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#DeleteModal">Delete</button>
                        <div class="modal fade" id="DeleteModal" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="DeleteModalLabel">Delete Modal</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!--Delete Form-->
                                        <form>
                                            <div class="row">
                                                <div class="col sm-12">
                                                    Are you sure to delete
                                                </div>
                                            </div>
                                            <div style="float: right">
                                            <button type="button" class="btn btn-primary" >Yes</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                            </div>
                                        </form>
                                        <!--End Delete Form-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Delete Modal-->

                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>