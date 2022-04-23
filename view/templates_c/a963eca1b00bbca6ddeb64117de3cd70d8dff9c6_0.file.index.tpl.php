<?php
/* Smarty version 4.1.0, created on 2022-04-17 10:58:03
  from 'C:\xampp\htdocs\proyectoPrograFinal\view\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625bd69bebb338_66048709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a963eca1b00bbca6ddeb64117de3cd70d8dff9c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoPrograFinal\\view\\templates\\index.tpl',
      1 => 1650185880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625bd69bebb338_66048709 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="about">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <!-- <h2>Your username is: <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</h2>
                <h2>Your role is: <?php echo $_smarty_tpl->tpl_vars['role']->value;?>
</h2>
                <p class="lead">Thanks for your hardword everyday!</p> -->
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">You are logged in as: <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</h4>
                    <p>Your role in the organization is: <?php echo $_smarty_tpl->tpl_vars['role']->value;?>
</p>
                    <hr>
                    <p class="mb-0">Avoid typing sensitive information on public computers, such as those in a public library or an internet café.  Spyware may be installed on these computers that record your every keystroke.  Also, you never know who may be watching your activity.  Never select the feature that automatically signs you on to email or check any box to  “Remember my Password” on websites.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <h2>What is CRM?</h2>
                <p class="lead">Customer relationship management (CRM) is a technology for managing all your company’s relationships and interactions with customers and potential customers. The goal is simple: Improve business relationships to grow your business. A CRM system helps companies stay connected to customers, streamline processes, and improve profitability.

                    When people talk about CRM, they are usually referring to a CRM system, a tool that helps with contact management, sales management, agent productivity, and more. CRM tools can now be used to manage customer relationships across the entire customer lifecycle, spanning marketing, sales, digital commerce, and customer service interactions.
                    
                    A CRM solution helps you focus on your organization’s relationships with individual people — including customers, service users, colleagues, or suppliers — throughout your lifecycle with them, including finding new customers, winning their business, and providing support and additional services throughout the relationship.</p>
            </div>
        </div>
    </div>
</section>

<div id="table" class="container-lg"></div>

<?php }
}
