<?php
/* Smarty version 4.1.0, created on 2022-04-16 22:00:54
  from 'C:\xampp\htdocs\proyectoPrograFinal\view\templates\updateCustomerForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625b2076c98965_95794886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f1c2da79d851780013d5c8dd659cb650161a725' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoPrograFinal\\view\\templates\\updateCustomerForm.tpl',
      1 => 1650139248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625b2076c98965_95794886 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="h-100 h-custom" style="background-color: #ffffff;">
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
                                <input type="text" id="form3Example1q" class="form-control" name="id_customer" value="<?php echo $_smarty_tpl->tpl_vars['id_customer']->value;?>
" readonly/>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Email</label>
                                <input type="text" id="form3Example1q" class="form-control" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"/>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Name</label>
                                <input type="text" id="form3Example1q" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Last Name</label>
                                <input type="text" id="form3Example1q" class="form-control" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>
"/>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Phone Number</label>
                                <input type="text" id="form3Example1q" class="form-control" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
"/>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Date Of Birth</label>
                                <input type="date" id="birthday" name="date_of_birth" value="<?php echo $_smarty_tpl->tpl_vars['date_of_birth']->value;?>
">
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Address</label>
                                <input type="text" id="form3Example1q" class="form-control" name="address" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
" />
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Country</label>
                                <input type="text" id="form3Example1q" class="form-control" name="country" value="<?php echo $_smarty_tpl->tpl_vars['country']->value;?>
"/>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">City</label>
                                <input type="text" id="form3Example1q" class="form-control" name="city" value="<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
"/>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example1q">Postal Code</label>
                                <input type="text" id="form3Example1q" class="form-control" name="postal_code" value="<?php echo $_smarty_tpl->tpl_vars['postal_code']->value;?>
"/>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg mb-1"
                                value="updateCustomer">Submit</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section><?php }
}
