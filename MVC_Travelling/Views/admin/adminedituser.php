  <!-- register form start -->
  <div class="row mt-5">
      <div class="col-lg-4 offset-lg-4 ">
          <div class="card border-primary mb-3">
              <div class="card-header text-center">Registration</div>
              <div class="card-body ">
                  <form method="post">
                      <div class="row mt-3">
                          <div class="col">
                              <input type="text" value="<?php echo $EditRes['Data'][0]->username; ?>" placeholder="Enter User Name" class="form-control" name="username" id="">
                          </div>
                      </div>
                      <div class="row mt-3">
                          <div class="col">
                              <input type="password" value="<?php echo $EditRes['Data'][0]->username; ?>" placeholder="Enter Password" class="form-control" name="password" id="">
                          </div>
                      </div>
                      <div class="row mt-3">
                          <div class="col">
                              <input type="email" value="<?php echo $EditRes['Data'][0]->email; ?>" placeholder="Enter email" class="form-control" name="email" id="">
                          </div>
                      </div>
                      <div class="row mt-3">
                          <div class="col">
                              <input type="tel" value="<?php echo $EditRes['Data'][0]->mobileno; ?>" placeholder="Enter mobileno" class="form-control" name="mobileno" id="">
                          </div>
                      </div>
                      <div class="row mt-3">
                          <div class="col text-center">
                              <input type="radio" name="gender" id="male" value="male" <?php if ($EditRes['Data'][0]->gender == 'male') {
                                                                                            echo "checked";
                                                                                        } ?>><label for="male">male</label>
                              <input type="radio" name="gender" id="female" value="female" <?php if ($EditRes['Data'][0]->gender == 'female') {
                                                                                                echo "checked";
                                                                                            } ?>><label for="female">female</label>
                          </div>
                      </div>
                      <div class="row mt-3">
                          <div class="col">
                              <label for="">hobby</label><br>
                              <?php
                                $hobbyData = explode(",", $EditRes['Data'][0]->hobby);
                                // echo "<pre>";
                                // print_r($hobbyData);
                                // echo "</pre>";
                                ?>


                              <input type="checkbox" name="hobby[]" id="Cricket" <?php if (in_array("Cricket", $hobbyData)) {
                                                                                        echo "checked";
                                                                                    } ?> value="Cricket"> <label for="Cricket">Cricket</label>
                              <input type="checkbox" name="hobby[]" <?php if (in_array("Music", $hobbyData)) {
                                                                        echo "checked";
                                                                    } ?> id="Reading" value="Reading "> <label for="Music">Music</label>
                              <input type="checkbox" name="hobby[]" <?php if (in_array("Reading", $hobbyData)) {
                                                                        echo "checked";
                                                                    } ?> id="reading" value="reading"> <label for="reading">Reading</label>
                              <input type="checkbox" name="hobby[]" <?php if (in_array("Travelling", $hobbyData)) {
                                                                        echo "checked";
                                                                    } ?> id="Travelling " value="Travelling "> <label for="Travelling ">Travelling</label>

                          </div>


                          <div class="col-md-6 offset-4">
                              <button type="submit" name="update" class="btn btn-success">Update</button>
                              <button type="reset" value="Cancel" class="btn btn-danger">Cancel</button>
                          </div>
                  </form>
              </div>
          </div>
      </div>
  </div>

  <!-- register form end -->