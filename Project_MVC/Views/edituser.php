<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <!-- register form start -->
    <div class="row mt-5">
        <div class="col-lg-4 offset-lg-4">
            <div class="card border-primary mb-3">
                <div class="card-header text-center">Registration</div>
                <div class="card-body">
                    <?php foreach ($res as $key => $value) {
                    ?>
                        <form method="post">
                            <div class="row">
                                <div class="col">
                                    <input type="text" placeholder="Enter User Name" class="form-control" name="username" value="<?php echo $value->username; ?>" id="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="password" placeholder="Enter Password" class="form-control" name="password" value="<?php echo $value->password; ?>" id="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="email" placeholder="Enter email" class="form-control" name="email" value="<?php echo $value->email; ?>" id="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="tel" placeholder="Enter mobileno" class="form-control" name="mobileno" value="<?php echo $value->mobileno; ?>" id="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col text-center">
                                    <input type="radio" <?php if ($value->gender == "male") {
                                                            echo "checked";
                                                        } ?> name="gender" id="male" value="male"><label for="male">male</label>
                                    <input type="radio" <?php if ($value->gender == "female") {
                                                            echo "checked";
                                                        } ?>name="gender" id="female" value="female"><label for="female">female</label>
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
                                                <option <?php if ($value->city == "selectcity") {
                                                            echo "selected";
                                                        } ?> value="select city">selcetcity</option>
                                                <option <?php if ($value->city == "2") {
                                                            echo "selected";
                                                        } ?> value="2">ahmedabad</option>
                                                <option <?php if ($value->city == "3") {
                                                            echo "selected";
                                                        } ?> value="3">baroda</option>
                                                <option <?php if ($value->city == "4") {
                                                            echo "selected";
                                                        } ?> value="4">rajkot</option>
                                                <option <?php if ($value->city == "1") {
                                                            echo "selected";
                                                        } ?> value="1">junagadh</option>
                                                <option <?php if ($value->city == "5") {
                                                            echo "selected";
                                                        } ?> value="5">surat</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <label for="profile_pic">profile picture</label>
                                            <input type="file" name="prof_pic" id="prof_pic">
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col text-center">
                                            <input type="submit" class="btn btn-primary" value="Registration" name="update" id="">
                                            <input type="reset" class="btn btn-danger" name="" id="">
                                        </div>
                                    </div>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- register form end -->
</body>

</html>