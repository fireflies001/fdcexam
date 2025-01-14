
if(current == "homepage") {
    getContact();
}
console.log(current)
if(current == "editcontactpage") {
    getContactData();
}

registerInput()
function registerInput(){
    $(document).ready(function(){
        $("#registerbtn").click(function(){
            document.location.replace('register.php')
        });

        $("#registerUser").click(function(){
            registerUser();
        });

        $("#signin").click(function(){
            signIn();
        });
        $("#edit").click(function(){
            console.log("edit")
        });

        $("#AddContactForm").click(function(){
            AddContact();
        });
        $("#EditContactForm").click(function(){
            editContactForm();
        });

        $("#backToLoginBtn").click(function(){
            document.location.replace('index.php')
        });

        $("#addContactPage").click(function(){
            document.location.replace('addContact.php')
        });
        $("#homePage").click(function(){
            document.location.replace('home.php')
        });


        $("#logout").click(function(){
            localStorage.removeItem('email');
            document.location.replace('index.php')
        });
    });
}

function registerUser() {
    $(document).ready(function(){
        var name = document.getElementById("registerName").value;
        var email = document.getElementById("registerEmail").value;
        var password = document.getElementById("registerPassword").value;
        var confirmpassword = document.getElementById("registerRepeatPassword").value;

        if(password == confirmpassword) {
            $("#passwordErr").hide();
            
            $.ajax({
                type: "POST",
                url: "./backend/api/registerApi.php",
                data: {name: name, email:email, password: password},
                success: function(data) {
                   if(data == 1 || data == "1") {
                    document.location.replace('index.php')
                   }
                }, error: function (err) {
                    console.log(err)
                }
            })
        } else {
            $("#passwordErr").show();
        }
    });
    
}

function signIn() {
    $(document).ready(function(){
        var email = document.getElementById("loginName").value;
        var password = document.getElementById("loginPassword").value;

        $.ajax({
            type: "POST",
            url: "./backend/api/loginApi.php",
            data: {email:email, password: password},
            success: function(data) {
               if(data == 1 || data == "1") {
                localStorage.setItem('email', email);
                document.location.replace('home.php');
               }
            }, error: function (err) {
                console.log(err)
            }
        })
    });
}


function AddContact() {
    $(document).ready(function(){
        var loggedEmail = localStorage.getItem('email');
        var contactname    = document.getElementById("contactname").value;
        var contactemail = document.getElementById("contactemail").value;
        var contactphone = document.getElementById("contactphone").value;
        var contactcompany = document.getElementById("contactcompany").value;
        $.ajax({
            type: "POST",
            url: "./backend/api/addcontact.php",
            data: {contactname:contactname, contactemail: contactemail, contactphone:contactphone, contactcompany:contactcompany, loggedEmail:loggedEmail},
            success: function(data) {
               if(data == 1 || data == "1") {
                document.location.replace('home.php');
               }
            }, error: function (err) {
                console.log(err)
            }
        })
    });
}

function deleteContact(data) {
    $(document).ready(function(){
        var contactphone = data
        $.ajax({
            type: "POST",
            url: "./backend/api/deleteContact.php",
            data: {contactphone:contactphone},
            success: function(data) {
               if(data == 1 || data == "1") {
                location.reload();
               }
            }, error: function (err) {
                console.log(err)
            }
        })
    });
}

function editContact(data) {
    localStorage.setItem('editId', data);
    document.location.replace('editContact.php');

}
function getContactData(){
    var editId = localStorage.getItem('editId');
    $(document).ready(function(){
        $.ajax({
            type: "POST",
            url: "./backend/api/getindividualcontact.php",
            data: {contactId:editId},
            success: function(data) {
                var datas = JSON.parse(data);
                contactname.value = datas[0][1];
                contactemail.value = datas[0][2];
                contactphone.value = datas[0][3];
                contactcompany.value = datas[0][4];
            }, error: function (err) {
                console.log(err)
            }
        })
    });
}

function editContactForm(data) {
    $(document).ready(function(){
        var editId = localStorage.getItem('editId');
        var contactname    = document.getElementById("contactname").value;
        var contactemail = document.getElementById("contactemail").value;
        var contactphone = document.getElementById("contactphone").value;
        var contactcompany = document.getElementById("contactcompany").value;
        $.ajax({
            type: "POST",
            url: "./backend/api/editcontact.php",
            data: {contactname:contactname, contactemail: contactemail, contactphone:contactphone, contactcompany:contactcompany, editId:editId},
            success: function(data) {
               if(data == 1 || data == "1") {
                document.location.replace('home.php');
               }
            }, error: function (err) {
                console.log(err)
            }
        })
    });
}

function searchContact() {
    
}

function getContact() {
    $(document).ready(function(){
        var loggedEmail = localStorage.getItem('email');
        $.ajax({
            type: "POST",
            url: "./backend/api/getContact.php",
            data: {loggedEmail:loggedEmail},
            success: function(data) {
               var datas = JSON.parse(data);
               console.log(datas.length)
               
               for(var i= 0; i< datas.length; i++) {
                var tr = document.createElement('tr');
                var td1 = tr.appendChild(document.createElement('td'));
                var td2 = tr.appendChild(document.createElement('td'));
                var td3 = tr.appendChild(document.createElement('td'));
                var td4 = tr.appendChild(document.createElement('td'));
                var td5 = tr.appendChild(document.createElement('td'));
                td1.innerHTML = datas[i][1];
                td2.innerHTML = datas[i][2];
                td3.innerHTML = datas[i][4];
                td4.innerHTML = datas[i][3];
                td5.innerHTML = `<button onclick='editContact("${datas[i][0]}")'>edit</button> | 
    <button onclick='deleteContact("${datas[i][4]}")'>delete</button>`;

                document.getElementById("tbl").appendChild(tr);
               }
               
            }, error: function (err) {
                console.log(err)
            }
        })
    });
    
}