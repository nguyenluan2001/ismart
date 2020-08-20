<div id="content" class="fl-right">
    <div class="section" id="title-page">
        <div class="clearfix">
            <h3 id="index" class="fl-left">Danh sách bài viết</h3>
            <a href="?page=add_cat" title="" id="add-new" class="fl-left">Thêm mới</a>
        </div>
    </div>
    <div class="section" id="detail-page">
        <div class="section-detail">
            <div class="filter-wp clearfix">
                <ul class="post-status fl-left">
                    <li class="all"><a href="">Tất cả <span class="count">(10)</span></a> |</li>
                    <li class="publish"><a href="">Đã đăng <span class="count">(5)</span></a> |</li>
                    <li class="pending"><a href="">Chờ xét duyệt <span class="count">(5)</span></a></li>
                    <li class="trash"><a href="">Thùng rác <span class="count">(0)</span></a></li>
                </ul>
                <form method="GET" class="form-s fl-right">
                    <input type="text" name="s" id="s">
                    <input type="submit" name="sm_s" value="Tìm kiếm">
                </form>
            </div>
            <div class="actions">
                <form method="GET" action="" class="form-actions">
                    <select name="actions">
                        <option value="0">Tác vụ</option>
                        <option value="1">Chỉnh sửa</option>
                        <option value="2">Bỏ vào thủng rác</option>
                    </select>
                    <input type="submit" name="sm_action" value="Áp dụng">
                </form>
            </div>
            <div class="table-responsive">
                <table class="table list-table-wp">
                    <thead>
                        <tr>
                            <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                            <td><span class="thead-text">STT</span></td>
                            <td><span class="thead-text">Tiêu đề</span></td>
                            <td><span class="thead-text">Danh mục</span></td>
                            <td><span class="thead-text">Trạng thái</span></td>
                            <td><span class="thead-text">Người tạo</span></td>
                            <td><span class="thead-text">Thời gian</span></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count=1; foreach ($data['list_posts'] as $item) { ?>
                            <tr>
                                <td><input type="checkbox" name="checkItem" class="checkItem"></td>
                                <td><span class="tbody-text"><?php echo $count?></h3></span>
                                <td class="clearfix">
                                    <div class="tb-title fl-left">
                                        <a href="?controller=Posts&action=Detail_Post&id=<?php echo $item['id']?>" title=""><?php echo $item['title']?></a>
                                    </div>
                                    <ul class="list-operation fl-right">
                                        <li><a href="" title="Sửa" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                        <li><a href="" title="Xóa" class="delete"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                    </ul>
                                </td>
                                <td><span class="tbody-text">Danh mục 1</span></td>
                                <td><span class="tbody-text">Hoạt động</span></td>
                                <td><span class="tbody-text">Admin</span></td>
                                <td><span class="tbody-text"><?php echo $item['created_at']?></span></td>
                            </tr>
                        <?php $count++; } ?>


                    </tbody>
                    <tfoot>
                        <tr>
                            <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                            <td><span class="tfoot-text">STT</span></td>
                            <td><span class="tfoot-text">Tiêu đề</span></td>
                            <td><span class="tfoot-text">Danh mục</span></td>
                            <td><span class="tfoot-text">Trạng thái</span></td>
                            <td><span class="tfoot-text">Người tạo</span></td>
                            <td><span class="tfoot-text">Thời gian</span></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
    <div class="section" id="paging-wp">
        <div class="section-detail clearfix">
            <ul id="list-paging" class="fl-right">
                <li>
                    <a href="" title="">
                        <</a> </li> <li>
                            <a href="" title="">1</a>
                </li>
                <li>
                    <a href="" title="">2</a>
                </li>
                <li>
                    <a href="" title="">3</a>
                </li>
                <li>
                    <a href="" title="">></a>
                </li>
            </ul>
        </div>
    </div>
</div>