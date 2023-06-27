<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="stylesu.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="index1.html" class="src" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="index.js"></script>
</head>
<body>

<!--
<?php
 include "connectsu.php";
 echo'
 <br>
 <form action="insertsu.php" method="post">
 <h2>Sign Up Form:</h2>
 <br>
 <label>First Name:</label>
 <input type="name" name="fname" placeholder="Enter Your First Name" />
 <br>
 <br>
 <label>Last Name:</labnel>
 <input type="name" name="lname" placeholder="Enter Your Last Name" />
 <br>
 <br>
<label>Email:</label>
<input type="email" name="email" placeholder="Enter Your Email" />
<br>
<br>
<input class="btn btn-lg btn-primary"  type="submit" value="Sign Up"/>
<a href="signIN.php" >Already have An Account?</a>
 </form>'
 ?> -->

<div class="d-grid">
      <button
        type="button"
        class="btn btn-primary mt-5 col-md-12"
        data-bs-toggle="modal"
        data-bs-target="#M"
      >
        Open SIGNUP Form
      </button>
    </div>

    <div class="modal" id="M">
      <div class="modal-dialog">
        <div class="modal-content">
          <h2 style="margin-left: 3cm">Feedback Form</h2>
          <div class="col-sm-12">Name
          <br />
          <input type="text" placeholder="Enter name" />
        
          <div class=" col-md-12">Email
          
          <br />
          <input id="email" type="text" placeholder="Enter email"/>
            <div class="mb-3 mt-3">
                <label for="comment">Comments:</label>
                <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
              </div>
          <div class="modal-footer">
            <button
              type="button" onclick="validateemail()"
            >
              Submit
            </button>
          </div>
          </div>
        </div>
      </div>
    </div>
 </body>