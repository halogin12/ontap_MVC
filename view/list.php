
<div class="container">
    
    <form method="POST" action="">
        <table class="table table-head-bg-success table-striped table-hover">
            <thead>
                <tr>
                    
                    <th scope="col">ID</th>
                    <th scope="col">Mã nhân viên: </th>
                    <th scope="col">Tên nhân viên: </th>
                    <th scope="col">Số điện thoại: </th>
                    <th scope="col">Email: </th>
                    <th scope="col">Địa chỉ: </th>
                </tr>
            </thead>
            <tbody>
            
                <?php
                    foreach($result as $key => $value){
                ?>
                    <tr>
                        <td><?php echo $value['id'];?></td>
                        <td><?php echo $value['maNV'];?></td>
                        <td><?php echo $value['tenNV'];?></td>
                        <td><?php echo $value['SDT'];?></td>
                        <td><?php echo $value['email'];?></td>
                        <td><?php echo $value['diaChi'];?></td>
                    </tr>
                <?php
                    }
                ?>
            
            </tbody>
        </table>
    </form>
    
</div>
