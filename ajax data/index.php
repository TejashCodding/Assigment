<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <div class="container">
        <div class="error_msg"></div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Add data
        </button>

        <!-- Modal -->
        <section class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">From</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body bg-dark">
                        <section class="model bg-light shadow-lg rounded mt-5 p-5" id="form">
                            Fname: <input type="text" name="name" id="fname" class="form-control">
                            lname: <input type="text" name="lname" id="lname" class="form-control">
                            Email: <input type="email" name="email" id="email" class="form-control">
                            Password: <input type="password" name="password" id="password" class="form-control">
                            Phone number: <input type="text" name="number" id="number" class="form-control">
                            <br>
                            <button class="btn btn-primary" data-dismiss="modal" id="submit">Submit</button>
                        </section>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </section>


        <!-- update model ........  -->


        <!-- Modal -->
        <section class="modal fade" id="update_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Update From</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body bg-dark">
                        <section class="model bg-light shadow-lg rounded mt-5 p-5" id="form">
                            id: <input type="hiddn" name="id" id="s_id" class="form-control">
                            Fname: <input type="text" name="update_name" id="update_fname" class="form-control">
                            lname: <input type="text" name="update_lname" id="update_lname" class="form-control">
                            Email: <input type="email" name="update_email" id="update_email" class="form-control">
                            Password: <input type="password" name="update_password" id="update_password" class="form-control">
                            Phone number: <input type="text" name="update_number" id="update_number" class="form-control">
                            <br>
                            <button class="btn btn-primary" data-dismiss="modal" id="update_btn">Submit</button>
                        </section>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </section>

        <div id="table">
            <table class="table bg-light mt-5">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fname</th>
                        <th>lname</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>number</th>
                    </tr>
                </thead>
                <tbody id="table_data">

                </tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
<script>
    $(document).ready(function() {
        get_data();

        $("#submit").on("click", function(e) {
            e.preventDefault();
            var fnames = $("#fname").val();
            var lnames = $("#lname").val();
            var emails = $("#email").val();
            var passwords = $("#password").val();
            var numbers = $("#number").val();

            if (fnames != "" || lnames != "" || emails != "" || passwords != "" || numbers != "") {
                $.ajax({
                    url: "store.php",
                    type: "POST",
                    data: {
                        checked_add: true,
                        fname: fnames,
                        lname: lnames,
                        email: emails,
                        password: passwords,
                        number: numbers,
                    },
                    success: function(response) {
                        $("#table_data").html("");
                        get_data();
                    }
                })
            } else {
                alert("plase enater all filed");
            }
        });
        $("#updatebtn").click(function() {
            var id = $(this);
            console.log(id);
        })


        function get_data() {
            let output = "";
            $.ajax({
                url: "read.php",
                type: "GET",
                dataType: 'json',
                success: function(response) {
                    // console.log(response);
                    x = response;
                    for (i = 0; i < x.length; i++) {
                        output += "<tr><td id='f_id'>" + x[i].id + "</td><td id='f_fname'>" + x[i].fname + "</td><td id='f_lname'>" + x[i].lname + "</td><td id='f_email'>" + x[i].email + "</td><td id='f_password'>" + x[i].password + "</td><td id='number'>" + x[i].number + "</td><td><button type='button' class='btn btn-success' data-toggle='modal' data-target='#update_model' id='updid' update-id='" + x[i].id + "'>Update</button></td><td><button class='btn btn-danger' id='deletebtn' del-id='" + x[i].id + "'>Delete</button></td></tr>";
                    }
                    $("#table_data").html(output);
                }
            })
        }

        // delete data 
        $('#table_data').on("click", "#deletebtn", function() {
            let id = $(this).attr('del-id');
            let mydata = {
                id: id
            }
            mythis = this;
            $.ajax({
                url: "delete.php",
                type: "POST",
                data: mydata,
                success: function(data) {
                    $(mythis).closest('tr').fadeOut(500);
                    get_data();

                }
            })
        })
        // edit -update data  fatch data
        $('#table_data').on("click", "#updid", function() {
            $("#exampleModalCenter").show();
            let id = $(this).attr('update-id');
            mydata = {
                id: id
            };
            $.ajax({
                url: "update.php",
                type: "POST",
                dataType: 'json',
                data: mydata,
                success: function(data) {
                    x = data;
                    $("#s_id").val(x.id);
                    $("#update_fname").val(x.fname);
                    $("#update_lname").val(x.lname);
                    $("#update_email").val(x.email);
                    $("#update_password").val(x.password);
                    $("#update_number").val(x.number);
                }
            })
            // Upadte data 
        });
        $("#update_btn").on("click", function(e) {
            e.preventDefault();
            var ids=$("#s_id").val();
            var fnames = $("#update_fname").val();
            var lnames = $("#update_lname").val();
            var emails = $("#update_email").val();
            var passwords = $("#update_password").val();
            var numbers = $("#update_number").val();


            if (fnames != "" || lnames != "" || emails != "" || passwords != "" || numbers != "") {
                $.ajax({
                    url: "update_data.php",
                    type: "POST",
                    dataType:'json',
                    data: {
                        update_data: true,
                        id:ids,
                        fname: fnames,
                        lname: lnames,
                        email: emails,
                        password: passwords,
                        number: numbers,
                    },
                    success:function(response){
                        if(response==1){
                            get_data();
                        }else{
                            alert("not update")
                        }
                    }
                })

            } else {
                alert("plase enater all filed");
            }
        });
    });
</script>

</html>