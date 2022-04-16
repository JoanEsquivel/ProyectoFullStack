<section class="h-100 h-custom" style="background-color: #ffffff;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
                <div class="card rounded-3">
                    <img src="https://debmedia.com/blog/wp-content/uploads/2019/12/Customer-Experience-Management-Conoce-5-Herramientas-de-Utilidad-banner.jpg"
                        class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                        alt="Sample photo">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Update Customer Information</h3>

                        <form class="px-md-2" action="index.php" method="post">
                            <input type="hidden" name="accion" value="updateCustomer">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Customer ID</label>
                                <input type="text" id="form3Example1q" class="form-control" name="id_customer" value="{$id_customer}" readonly/>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Email</label>
                                <input type="text" id="form3Example1q" class="form-control" name="email" value="{$email}"/>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Name</label>
                                <input type="text" id="form3Example1q" class="form-control" name="name" value="{$name}"/>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Last Name</label>
                                <input type="text" id="form3Example1q" class="form-control" name="last_name" value="{$last_name}"/>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Phone Number</label>
                                <input type="text" id="form3Example1q" class="form-control" name="phone" value="{$phone}"/>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Date Of Birth</label>
                                <input type="date" id="birthday" name="date_of_birth" value="{$date_of_birth}">
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Address</label>
                                <input type="text" id="form3Example1q" class="form-control" name="address" value="{$address}" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Country</label>
                                <input type="text" id="form3Example1q" class="form-control" name="country" value="{$country}"/>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">City</label>
                                <input type="text" id="form3Example1q" class="form-control" name="city" value="{$city}"/>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Postal Code</label>
                                <input type="text" id="form3Example1q" class="form-control" name="postal_code" value="{$postal_code}"/>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg mb-1"
                                value="updateCustomer">Submit</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>