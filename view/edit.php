
<div class="container">
    
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
