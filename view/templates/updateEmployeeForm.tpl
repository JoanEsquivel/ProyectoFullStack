<section class="h-100 h-custom" style="background-color: #ffffff;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
                <div class="card rounded-3">
                    <img src="https://debmedia.com/blog/wp-content/uploads/2019/12/Customer-Experience-Management-Conoce-5-Herramientas-de-Utilidad-banner.jpg"
                        class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                        alt="Sample photo">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Update Employee Information</h3>

                        <form class="px-md-2" action="index.php" method="post">
                            <input type="hidden" name="accion" value="updateEmployee">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Customer ID</label>
                                <input type="text" id="form3Example1q" class="form-control" name="id_user" value="{$id_user}" readonly/>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">User</label>
                                <input type="text" id="form3Example1q" class="form-control" name="user" value="{$usern}"/>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Name</label>
                                <input type="text" id="form3Example1q" class="form-control" name="username" value="{$username}"/>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Last Name</label>
                                <input type="text" id="form3Example1q" class="form-control" name="lastname" value="{$lastname}"/>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">ID Role (1 CS,2  HR, 3 WM)</label>
                                <input type="text" id="form3Example1q" class="form-control" name="id_role" value="{$id_role}"/>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Vacation Days</label>
                                <input type="text" id="form3Example1q" class="form-control" name="vacation_days" value="{$vacation_days }"/>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg mb-1"
                                value="updateEmployee">Submit</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>