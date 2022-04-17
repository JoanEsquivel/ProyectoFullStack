<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UH CRM - Register a new user/employee</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <section class="h-100 h-custom" style="background-color: #ffffff;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card rounded-3">
                        <img src="https://media.istockphoto.com/photos/button-on-computer-keyboard-picture-id1146311489?b=1&k=20&m=1146311489&s=170667a&w=0&h=Pi3Qht78k6keoQLFHxCRZMp4eINefsdQOTnlDkNgFaA="
                            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                            alt="Sample photo">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Employee Registration</h3>

                            <form class="px-md-2" action="index.php" method="post">
                                <input type="hidden" name="accion" value="registerEmployee">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1q">User</label>
                                    <input type="text" id="form3Example1q" class="form-control" name="user" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1q">Password</label>
                                    <input type="text" id="form3Example1q" class="form-control" name="password"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1q">Name</label>
                                    <input type="text" id="form3Example1q" class="form-control" name="username"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1q">Lastname</label>
                                    <input type="text" id="form3Example1q" class="form-control" name="lastname"/>
                                </div>
                                <div class="mb-4">
                                    <select class="select" name="id_role">
                                        <option value="1" >Customer Service Rol</option>
                                        <option value="2">HR Role</option>
                                        <option value="3">WareHouse Management Rol</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg mb-1" value="registerEmployee">Submit</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>