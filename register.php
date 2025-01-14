<!DOCTYPE html>
<html lang="en">
<script>
        var current = "registerpage"
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
            <p id="passwordErr" style="display:none;">Password does not match!</p>
            <!-- Name input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="registerName" class="form-control" placeholder="Name"/>
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="registerEmail" class="form-control"  placeholder="Email"/>
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="registerPassword" class="form-control"  placeholder="Password"/>
            </div>

            <!-- Repeat Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="registerRepeatPassword" class="form-control"  placeholder="Confirm Password"/>
            </div>

            <!-- Submit button -->
            <button class="btn btn-primary btn-block mb-3" id="registerUser">Sign up</button>
            <!-- back to login buttons -->
            <div class="text-center">
                <p>Already have an account? <a href="#!" id="backToLoginBtn">Login</a></p>
            </div>
        </div>
    </div>
    <!-- Pills content -->
    </div>
    
</body>
</html>