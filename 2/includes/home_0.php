<!-- <div class="global-container">
    <div class="card-form">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Family_Ursidae_four_species.jpg" alt="" class="card-form">
        <div class="card login-form">
            <form method="post" action="checklogin.php">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="email" class="form-control text-input" id="exampleInputEmail1">

                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control text-input" id="exampleInputPassword1">

                <label for="exampleInputPassword1" class="form-label">Login sebagai</label>
                <select name="type" class="form-select form-control">
                    <option value=1>Petugas</option>
                    <option value=2>Dosen</option>
                    <option value=3>Mahasiswa</option>
                </select>

                <label>
                    <input name="login" id="login" type="submit" value="Login" class="btn btn-block btn-primary form-control">
                </label>
            </form>
        </div>
    </div>
</div> -->

<div class="global-container">
    <div class="card" style="width:400px">
        <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Family_Ursidae_four_species.jpg" alt="Card image" style="width:100%">
        <div class="card-body">
            <form method="post" action="checklogin.php">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="email" class="form-control text-input" id="exampleInputEmail1">

                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control text-input" id="exampleInputPassword1">

                <label for="exampleInputPassword1" class="form-label">Login sebagai</label>
                <select name="type" class="form-select form-control">
                    <option value=1>Petugas</option>
                    <option value=2>Dosen</option>
                    <option value=3>Mahasiswa</option>
                </select>
                <br>
                <div class="d-grid gap-2">
                    <label>
                        <input name="login" id="login" type="submit" value="Login" class="btn btn-block btn-primary form-control">
                    </label>
                </div>
            </form>
        </div>
    </div>
</div>