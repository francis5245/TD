<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Stylesheets -->
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                        <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    </div>
                </div>
                <h4 class="card-title mb-4">Latest Transactions</h4>
                <div class="table-responsive">
                    <div class="d-flex justify-content-end my-4">
                    <button type="button" class="mb-2 btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Ajouter</button>
                    </div>
                    <table class="table table-centered datatable dt-responsive nowrap" data-bs-page-length="5" style="width: 100%;">
                        <thead class="table-light">
                            <tr>
                                <th>Design</th>
                                <th>Prix Unitaire</th>
                                <th>ImageProd</th>
                                <th>Code</th>
                                <th>Catégorie</th>
                                <th style="width: 120px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#NZ1572</td>
                                <td>04 Apr, 2020</td>
                                <td>Walter Brown</td>
                                <td>$172</td>
                                <td><div class="badge bg-success-subtle text-success font-size-12">Paid</div></td>
                                <td>
                                    <a href="javascript:void(0);" class="me-3 text-primary" title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Ajouter un produit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Ref du produit</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prix Unitaire</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Quantité</label>
                        <input type="number" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Catégorie</label>
                        <select class="form-control">
                            <option value="1">Categorie 1</option>
                            <option value="2">Categorie 2</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Design</label>
                        <textarea class="form-control" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <h4>Image du produit</h4>
                        <input type="file" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>
