<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM UH - HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://i0.wp.com/elpoderdelasideas.com/wp-content/uploads/universidad-hispanoamericana-isotipo.png?w=246&h=246&crop=1&ssl=1"
                    alt="" width="30" height="24" class="d-inline-block align-text-top">
                CRM
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    {if {$role} eq "Customer Service"}
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">New Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">All Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Customer</a>
                    </li>
                    {elseif {$role} eq "HR Partner"}
                    <li class="nav-item">
                        <a class="nav-link" href="#">Create a new employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Get all employees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vacations per employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Employees Salary</a>
                    </li>
                    {elseif {$role} eq "WareHouse Management User"}
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inventory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">merchandise income</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">merchandise outcome</a>
                    </li>
                    {/if}
                    <li class="nav-item">
                        <a class="nav-link" href="control/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="">
        <div class="container px-4 text-center">
            <h1 class="fw-bolder">Welcome to the UH - CRM </h1>
            <p class="lead">Home page to display username information</p>
        </div>
    </header>