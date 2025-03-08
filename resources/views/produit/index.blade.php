<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- jquery.vectormap css -->
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
        type="text/css" />

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>

<body>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    </div>
                </div>

                <h4 class="card-title mb-4">Latest Transactions</h4>

                <div class="table-responsive ">
                  @if(session("success") )

              {{session('success') }}
                  @endif
                    <div class="d-flex justify-content-end my-4">
                        
                        <button type="button" class="mb-2 btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Ajouter</button>
                        </div>
                    <table class="table table-centered datatable dt-responsive nowrap" data-bs-page-length="5"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="ordercheck">
                                        <label class="form-check-label mb-0" for="ordercheck">&nbsp;</label>
                                    </div>
                                </th>
                                <th>Ref</th>

                                <th>Design</th>
                                <th>Prix Unitaire</th>
                                <th>ImageProd</th>
                                <th>Code</th>
                                <th>Libelle</th>
                                <th style="width: 120px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produits as $produit )
                            <td>
                                
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="ordercheck1">
                                        <label class="form-check-label mb-0" for="ordercheck1">&nbsp;</label>
                                    </div>
                                </td>
                          
                                <td><a href="javascript: void(0);" class="text-reset fw-bold"> {{ $produit->ref }}</a> </td>
                                <td><a href="javascript: void(0);" class="text-reset fw-bold"> {{ $produit->design }}</a> </td>
                                <td>
                                    {{ $produit->pu }}
                                </td>
                                <td> {{ $produit->imageprod}}</td>
                              
                                <td>
                                    {{ $produit->categorie->code }}
                                </td>
                                <td>
                                    <div class="badge bg-success-subtle text-success  font-size-12">{{ $produit->categorie->libelle }}</div>
                                </td>
                                <td id="tooltip-container1">
                                    <a href="javascript:void(0);" class="me-3 text-primary"
                                        data-bs-container="#tooltip-container1" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Edit"><i
                                            class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger"
                                        data-bs-container="#tooltip-container1" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Delete"><i
                                            class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                        

                            </td>
                               
                                      
                                  
                
                                @endforeach
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('produit.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Ajouter un produit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Ref</label>
                            <input type="text" class="form-control" name="ref">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Design</label>
                            <input type="text" class="form-control" name="design">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Prix Unitaire</label>
                            <input type="number" class="form-control" name="pu">
                        </div>
                         
                        ...
                        <div class="mb-3">
                            <label class="form-label">Code</label>
                            <select class="form-control" name="categorie_code_id">
                                @foreach ($categories as $categorie)
                                    <option value="{{ $categorie->id }}" {{ old('categorie_code_id') == $categorie->id ? 'selected' : '' }}>{{ $categorie->code }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Libelle</label>
                            <select class="form-control" name="categorie_libelle_id">
                                @foreach ($categories as $categorie)
                                    <option value="{{ $categorie->id }}" {{ old('categorie_libelle_id') == $categorie->id ? 'selected' : '' }}>{{ $categorie->libelle }}</option>
                                @endforeach
                            </select>
                        </div>
...
                        <div class="mb-3">
                            <h4>Image du produit</h4>
                            <input type="file" class="form-control" name="images[]" multiple>
                        </div>
                    </div>
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                
                    
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>


    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- jquery.vectormap map -->
    <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>

    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <script src="assets/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>