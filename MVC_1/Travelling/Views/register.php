  <!-- register form start -->
  <div class="row mt-5">
      <div class="col-lg-4 offset-lg-4">
          <div class="card border-primary mb-3">
              <div class="card-header text-center">Registration</div>
              <div class="card-body">
                  <form method="post">
                      <div class="row">
                          <div class="col">
                              <input type="text" placeholder="Enter User Name" class="form-control" name="username" id="">
                          </div>
                      </div>
                      <div class="row mt-3">
                          <div class="col">
                              <input type="password" placeholder="Enter Password" class="form-control" name="password" id="">
                          </div>
                      </div>
                      <div class="row mt-3">
                          <div class="col">
                              <input type="email" placeholder="Enter email" class="form-control" name="email" id="">
                          </div>
                      </div>
                      <div class="row mt-3">
                          <div class="col">
                              <input type="tel" placeholder="Enter mobileno" class="form-control" name="mobileno" id="">
                          </div>
                      </div>
                      <div class="row mt-3">
                          <div class="col text-center">
                              <input type="radio" name="gender" id="male" value="male"><label for="male">male</label>
                              <input type="radio" name="gender" id="female" value="female"><label for="female">female</label>
                          </div>
                      </div>
                      <div class="row mt-3">
                          <div class="col">
                              <input type="checkbox" name="chk[]" id="Cricekt" value="Cricekt"> <label for="Cricekt">Cricekt</label>
                              <input type="checkbox" name="chk[]" id="Music" value="Music"> <label for="Music">Music</label>
                              <input type="checkbox" name="chk[]" id="Reading" value="Reading"> <label for="Reading">Reading</label>
                              <input type="checkbox" name="chk[]" id="Travelling" value="Travelling"> <label for="Travelling">Travelling</label>

                          </div>
                          <div class="row mt-3">
                              <div class="col">
                                  <label for="address">Address</label>
                                  <textarea name="address" id="address" class="form-control" cols="30" rows="3"></textarea>
                              </div>
                              <div class="row mt-3">
                                  <div class="col">
                                      <select name="city" id="">
                                          <option value="select city">selcetcity</option>
                                          <option value="ahmedabad">ahmedabad</option>
                                          <option value="baroda">baroda</option>
                                          <option value="rajkot">rajkot</option>
                                          <option value="junagadh">junagadh</option>
                                          <option value="surat">surat</option>
                                      </select>
                                  </div>
                              </div>

                              <div class="row mt-3">
                                  <div class="col text-center">
                                      <input type="submit" class="btn btn-primary" value="Registration" name="register" id="">
                                      <input type="reset" class="btn btn-danger" name="" id="">
                                  </div>
                              </div>
                  </form>
              </div>
          </div>
      </div>
  </div>

  <!-- register form end -->