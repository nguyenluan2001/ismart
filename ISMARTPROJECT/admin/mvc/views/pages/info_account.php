
        <div id="content" class="fl-right">                       
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form action="?controller=Admin&action=Update" method="POST">
                        <label for="display-name">Tên hiển thị</label>
                        <input type="text" name="display-name" id="display-name" placeholder="<?php echo $_SESSION['admin']['fullname']?>">
                        <label for="username">Tên đăng nhập</label>
                        <input type="text" name="username" id="username" placeholder="admin" readonly="readonly">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="<?php echo $_SESSION['admin']['email']?>">
                        <label for="tel">Số điện thoại</label>
                        <input type="tel" name="tel" id="tel" placeholder="<?php echo $_SESSION['admin']['phone_number']?>">
                        <label for="address">Địa chỉ</label>
                        <textarea name="address" id="address" placeholder="<?php echo $_SESSION['admin']['address']?>"></textarea>
                        <button type="submit" name="btn-submit" id="btn-submit">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
   