
<div class="container">
    
        <form class="navbar-left navbar-form nav-search mr-md-3" action="">
			<div class="input-group">
				<input type="text" placeholder="Search ..." class="form-control">
				<div class="input-group-append">
					<span class="input-group-text">
						<i class="la la-search search-icon"></i>
					</span>
				</div>
			</div>
		</form>

    <form action="">
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
                            <a href="index.php?page=list&method=destroy&id=<?php echo $value['id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa học viên?');" class="btn btn-danger">
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
