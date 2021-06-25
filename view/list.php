
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
                    
                    <button class="btn btn-success" data-toggle="modal" data-target="#modalinsert"> Thêm</button>
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
                            <!-- <a href=" index.php?page=list&method=destroy&id=<?php echo $value['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa học viên?');"  class="btn btn-danger">
                                Xóa
                            </a> -->
                            <button class="btn btn-success" data-toggle="modal" data-target="#modalupdate"> Sửa</button>
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


    <div class="modal" tabindex="-1" role="dialog" id="modalinsert">
      <div class="modal-dialog" >
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Edit</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>

      <div class="modal-body">
        <form action="" method="post" role="form">
        
            <div class="form-group">
                <label for="">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="">
            </div>

            <div class="form-group">
                <label for="">Tên nhân viên</label>
                <input type="text" class="form-control" id="name" name="name" value="">
            </div>

            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="phone" name="phone" value="">
            </div>

            <div class="form-group">
                <label for="">email</label>
                <input type="text" class="form-control" id="email" name="email" value="">
            </div>

            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="addres" name="addres" value="">
            </div>
                

            <button type="submit"  name="add" class="btn btn-primary">Update</button>
        </form>
    </div>

<!--  -->
    <div class="modal" tabindex="-1" role="dialog" id="modalupdate">
      <div class="modal-dialog" >
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Update</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>

      <div class="modal-body">
        <form action="" method="post" role="form">
        <legend>Edit</legend>
        <?php 
            foreach ($result as $key => $value){
        ?>
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" class="form-control" id="id" name="id" value="<?php echo $value['id'];?>" readonly>
        </div>

        <div class="form-group">
            <label for="">Tên nhân viên</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $value['name'];?>">
        </div>

        <div class="form-group">
            <label for="">Số điện thoại</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $value['phone'];?>">
        </div>

        <div class="form-group">
            <label for="">email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $value['email'];?>">
        </div>

        <div class="form-group">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" id="addres" name="addres" value="<?php echo $value['addres'];?>">
        </div>
            
        <?php } ?>
        
    
        <button type="submit"  name="update" class="btn btn-primary">Update</button>
    </form>
    </div>

</div>
</div>
</div>


    
    
    
    
</div>
    
</div>
