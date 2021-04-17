

<div class="container">
    <div class="container">
        <form method="POST" action="">
            <div  class="form-group row">
                <label for="inputName" class="col-sm-1-12 col-form-label">Tên đăng nhập</label>
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="inputName" id="loginName" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPass" class="col-sm-1-12 col-form-label">Password</label>
                <div class="col-sm-1-12">
                    <input type="password" class="form-control" name="inputPassword" id="loginPassword" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" id="login" name="login" value="login" class="btn btn-primary">Đăng nhập</button>
                   
                    <span>Nếu bạn chưa có tài khoản? <a href="index.php?page=register" style="color: red;">Đăng ký</a></span>
                    
                </div>
            </div>
        </form>
        
    </div>
</div>

