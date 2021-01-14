<section class="container">
    <div class="row">
        <div class="d-flex justify-content-center text-center">
            <form class="g-3 p-5 bg-light" method="post" action="index.php">
                <div class="col-12">
                    <label for="nik-name" class="form-label">Nik Name</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="display: block;"><i class="fas fa-user"></i></div>
                        </div>
                        <input type="email" class="form-control" name="nik-name" id="nik-name">
                    </div>
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="display: block;"><i class="fas fa-envelope"></i></div>
                        </div>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                </div>
                <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="display: block;"><i class="fas fa-key"></i></div>
                        </div>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                </div>
                <div class="col-12">
                    <label for="repeat-password" class="form-label">Repeat Password</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="display: block;"><i class="fas fa-key"></i></div>
                        </div>
                        <input type="password" class="form-control" name="repeat-password" id="repeat-password">
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</section>