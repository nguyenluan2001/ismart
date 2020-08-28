<?php
require 'mvc/views/blocks/header.php';
?>
<div id="main-content-wp" class="info-account-page">
    <div class="section" id="title-page">
        <div class="clearfix">
            <a href="?page=add_cat" title="" id="add-new" class="fl-left">Thêm mới</a>
            <h3 id="index" class="fl-left">Cập nhật tài khoản</h3>
        </div>
    </div>
    <div class="wrap clearfix">
        <div id="sidebar" class="fl-left">
            <ul id="list-cat">
                <li>
                    <a href="?page=change_pass" title="">Đổi mật khẩu</a>
                </li>
                <li>
                    <a href="?page=list_post" title="">Thoát</a>
                </li>
            </ul>
        </div>
        <div id="content" class="fl-right">                       
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" action="?controller=Admin&action=Update_Info">
                        <label for="display-name">Tên hiển thị</label>
                        <input type="text" name="fullname" id="display-name" value="<?php echo $data['info']['fullname']?>">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" name="username" id="username" value="<?php echo $data['info']['username']?>">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="<?php echo $data['info']['email']?>">
                        <label for="tel">Số điện thoại</label>
                        <input type="tel" name="phone" id="tel" value="<?php echo $data['info']['phone']?>">
                        <label for="address">Địa chỉ</label>
                        <textarea name="address" id="address" ><?php echo $data['info']['address']?></textarea>
                        <button type="submit" name="btn_update" id="btn-submit">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require 'mvc/views/blocks/footer.php';
?>