
<div class="container">
    
    <form action="">
        <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Nhập từ khóa</div>
                            <input type="text" name="key" class="form-control" id="" placeholder="" />
                        </div>
                    </div>
                    <button type="submit" name="search" class="btn">Tìm kiếm</button>
                </form>
                <div class="text-right">
                    <a href="index.php?page=list&method=add" class="btn btn-success">
                        Thêm
                    </a>
                </div>
        <table class="table table-head-bg-success table-striped table-hover">
            <thead>
                <tr>
                    
                    <th scope="col">ID</th>
                    <th scope="col">Tên nhân viên: </th>
                    <th scope="col">Số điện thoại: </th>
                    <th scope="col">Email: </th>
                    <th scope="col">Địa chỉ: </th>
                    <th scope="col">Xoá </th>
                    <th scope="col">Sửa </th>
                    
                </tr>
            </thead>
            <tbody>
            
                <?php
                    foreach($result as $key => $value){
                ?>
                    <tr>
                        <td><?php echo $value['id'];?></td>
                        <td><?php echo $value['name'];?></td>
                        <td><?php echo $value['phone'];?></td>
                        <td><?php echo $value['email'];?></td>
                        <td><?php echo $value['addres'];?></td>

                        <td>
                            <a href=" index.php?page=list&method=destroy&id=<?php echo $value['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa học viên?');"  class="btn btn-danger">
                                Xóa
                            </a>
                        </td>

                        <td>
                            <a href="index.php?page=list&method=update&id=<?php echo $value['id']; ?>" class="btn btn-danger">
                                Sửa
                            </a>
                            <!-- onclick="return confirm('Bạn có chắc chắn muốn xóa học viên?');" -->
                        </td>
                    </tr>
                <?php
                    }
                ?>
            
            </tbody>
        </table>
    </form>
    
</div>
