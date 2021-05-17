
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign Up</h5>
            <?php
                $errors = $this->session->flashdata('errors');
                if(!empty($errors)){
                ?>
                <div class="row">
                    <div class="col-md-12">
                    <div class="alert alert-danger text-center">
                        <?php foreach($errors as $key=>$error){ ?>
                        <?php echo "$error<br>"; ?>
                        <?php } ?>
                    </div>
                    </div>
                </div>
            <?php } ?>
            <form class="form-signin" action="<?php echo base_url('index.php/auth/proses_register'); ?>" method="post">
              <div class="form-label-group">
                  <label for="inputName">Name</label>
                <input type="text" name="name" id="text" class="form-control" placeholder="Name" required autofocus>
              </div>
              
              <div class="form-label-group">
                  <label for="inputUsername">Username</label>
                <input type="text" name="username" id="text" class="form-control" placeholder="Username" required autofocus>
              </div>

              <div class="form-label-group">
                  <label for="inputPassword">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign up</button>
            </form>
          </div>
        </div>
      </div>
    </div>