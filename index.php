<!DOCTYPE html>
<html lang="en">
<script>
    var current = "loginpage"
</script>
<?php
    include './common/header.php';
?>
<body>
    <div class="container w-25 p-3">

    <!-- Pills content -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
        <div class="text-center mb-3">
                <h2>CONTACT SYSTEM</h2>
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="loginName" class="form-control" placeholder="Email" />
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="loginPassword" class="form-control" placeholder="Password" />
            </div>

            <!-- 2 column grid layout -->
            <div class="row mb-4">
                <div class="col-md-6 d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check mb-3 mb-md-0">
                    <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                    <label class="form-check-label" for="loginCheck"> Remember me </label>
                </div>
                </div>

                <div class="col-md-6 d-flex justify-content-center">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
                </div>
            </div>

            <!-- Submit button -->
            <button class="btn btn-primary btn-block mb-4" id="signin">Sign in</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="#!" id="registerbtn">Register</a></p>
            </div>
        </div>
    </div>
    <!-- Pills content -->
    </div>

</body>
</html>