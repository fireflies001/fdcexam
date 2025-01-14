<!DOCTYPE html>
<html lang="en">
<script>
    var current = "addcontactpage"
</script>
<?php
    include './common/header.php';
?>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="collapse navbar-collapse justify-content-end"  id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#" id="addContactPage">Add Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="homePage">Contacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="logout">Logout</a>
                </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container w-25 p-3">
    
    <!-- Pills content -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
            <div class="text-center mb-3">
                <h2>ADD CONTACT</h2>
            </div>
            
            <!-- Name input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="contactname" class="form-control" placeholder="Name" required/>
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="contactemail" class="form-control"  placeholder="Email"/>
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="contactphone" class="form-control"  placeholder="Phone"/>
            </div>

            <!-- Repeat Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="contactcompany" class="form-control"  placeholder="Company"/>
            </div>

            <!-- Submit button -->
            <button class="btn btn-primary btn-block mb-3" id="AddContactForm">Submit</button>
        </div>
    </div>
    <!-- Pills content -->
    </div>

</body>
</html>