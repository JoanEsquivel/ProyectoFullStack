<?php
/* Smarty version 4.1.0, created on 2022-04-16 11:20:01
  from 'C:\xampp\htdocs\proyectoPrograFinal\view\templates\registerCustomerForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625a8a41183ab0_05451379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbe4149255af2f32d40d281f47a4da9c4a8a7df9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoPrograFinal\\view\\templates\\registerCustomerForm.tpl',
      1 => 1650099973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625a8a41183ab0_05451379 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="h-100 h-custom" style="background-color: #ffffff;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
                <div class="card rounded-3">
                    <img src="https://debmedia.com/blog/wp-content/uploads/2019/12/Customer-Experience-Management-Conoce-5-Herramientas-de-Utilidad-banner.jpg"
                        class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                        alt="Sample photo">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Customer Information</h3>

                        <form class="px-md-2" action="index.php" method="post">
                            <input type="hidden" name="accion" value="registerCustomer">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Email</label>
                                <input type="text" id="form3Example1q" class="form-control" name="email" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Name</label>
                                <input type="text" id="form3Example1q" class="form-control" name="name" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Last Name</label>
                                <input type="text" id="form3Example1q" class="form-control" name="last_name" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Phone Number</label>
                                <input type="text" id="form3Example1q" class="form-control" name="phone" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Date Of Birth</label>
                                <input type="date" id="birthday" name="date_of_birth">
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Address</label>
                                <input type="text" id="form3Example1q" class="form-control" name="address" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Country</label>
                                <input type="text" id="form3Example1q" class="form-control" name="country" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">City</label>
                                <input type="text" id="form3Example1q" class="form-control" name="city" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Postal Code</label>
                                <input type="text" id="form3Example1q" class="form-control" name="postal_code" />
                            </div>
                            <button type="submit" class="btn btn-success btn-lg mb-1"
                                value="registerCustomer">Submit</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section><?php }
}
