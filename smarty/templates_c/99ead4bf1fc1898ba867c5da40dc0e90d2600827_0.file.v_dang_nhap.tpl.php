<?php
/* Smarty version 3.1.30, created on 2024-04-12 04:57:06
  from "C:\xampp\htdocs\WebNhac\views\v_dang_nhap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6618a3023b2254_92833549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99ead4bf1fc1898ba867c5da40dc0e90d2600827' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebNhac\\views\\v_dang_nhap.tpl',
      1 => 1514976060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6618a3023b2254_92833549 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class="container" id="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <form method="POST" action="dang_nhap.php">
                    <div class="form-group">
                        <label for="Tài khoản"></label>
                        <input type="text" name="tai_khoan" class="form-control" value="<?php if (isset($_POST['btn_dang_nhap'])) {
echo $_POST['tai_khoan'];
}?>" placeholder="Nhập tài khoản" required>
                    </div>
                    <div class="form-group">
                        <label for="Mật khẩu"></label>
                        <input type="password" name="mat_khau" class="form-control" placeholder="Nhập mật khẩu">
                    </div>
                    <button type="submit" name="btn_dang_nhap" class="btn btn-success">Đăng nhập</button> 
                </form>
            </div>
        </div>
    </div>
<?php }
}
