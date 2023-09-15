  <!-- register form start -->
  <?php
    // echo "<pre>";
    // print_r($EditRes['Data'][0]);
    // echo "</pre>";

    ?>
  <div class="row mt-5">
      <div class="col-lg-4 offset-lg-4 ">
          <div class="card border-primary mb-3">
              <div class="card-header text-center">EditUser</div>
              <div class="card-body ">
                  <form method="post" enctype="multipart/form-data">
                      <div class="row mt-3">
                          <div class="col">
                              <input type="text" value="<?php echo  $EditRes['Data'][0]->username; ?>" placeholder="Enter User Name" class="form-control" name="username" id="">
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
                          <!-- <div class="row mt-3">
                              <div class="col text-center">
                                  <select name="city" class="form-control" id="city">
                                      <option value="">--Select City--</option>
                                      <option value="Ahmedabad">Ahmedabad</option>
                                      <option value="Surat">Surat</option>
                                      <option value="Baroda">Baroda</option>
                                  </select>
                              </div>
                          </div> -->
                          <div class="row mt-3">
                              <div class="col text-center">
                                  <select name="city" class="form-control" id="city">

                                      <option value="">--Select City--</option>
                                      <?php
                                        foreach ($CitiesData['Data'] as $key => $value) { ?>

                                          <option <?php if ($value->cityid == $EditRes['Data'][0]->city) {
                                                        echo "selected";
                                                    } ?> value="<?php echo $value->cityid; ?>"><?php echo $value->cityname; ?>
                                          </option>
                                      <?php }
                                        ?>

                                      <!-- <option value="Ahmedabad">Ahmedabad</option>
                       <optio n value="Surat">Surat</option> -->
                                  </select>
                              </div>
                          </div>
                          <div class="row mt-3">
                              <div class="col">
                                  <label for="address">Address</label>
                                  <textarea name="address" id="address" class="form-control" cols="30" rows="3"><?php echo $EditRes['Data'][0]->address; ?></textarea>
                              </div>
                          </div>
                          <?php

                            // print_r($EditRes['Data'][0]);
                            ?>
                          <div class="row mt-3">
                              <div class="col">
                                  <label for="profile_pic
                                  ">profile picture</label>
                                  <input type="file" name="prof_pic" id="prof_pic">
                                  <img src="Upload/<?php echo $EditRes['Data'][0]->prof_pic; ?>" alt="" width="100px" height="100px">
                                  <input type="hidden" name="old_profile_pic" id="old_profile_pic" value="<?php echo $EditRes['Data'][0]->prof_pic; ?>">

                              </div>
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