<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
    var current = "homepage"
</script>
    <?php
        include './common/header.php'
    ?>
</head>
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
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Company</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody id="tbl">
                
            </tbody>
        </table>
    </div>

</body>
</html>