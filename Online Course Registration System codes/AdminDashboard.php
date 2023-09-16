<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Admin | Student Registration</title>
<link href="../assets/css/bootstrap.css" rel="stylesheet">
<link href="../assets/css/font-awesome.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
<div class="navbar navbar-inverse set-radius-zero">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" datatarget=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#" style="color:#fff; font-size:24px;4px; line- height:24px; ">
Online Course Registration
</a>
</div>
<div class="left-div">
<i class="fa fa-user-plus login-icon"></i>
</div>
</div>
</div>
<section class="menu-section">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="navbar-collapse collapse ">
<ul id="menu-top" class="nav navbar-nav navbar-right">
<li><a href="session.php">Session</a></li>
<li><a href="semester.php">Semester </a></li>
<li><a href="department.php">Department</a></li>
<li><a href="course.php">Course</a></li>
<li><a href="student-registration.php">Registration</a></li>
<li><a href="manage-students.php">Manage Students</a></li>
<li><a href="enroll-history.php">Enroll History</a></li>
<li><a href="user-log.php">Student Logs </a></li>
<li><a href="news.php">News </a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
</div>
</div>
</div>
</section>
<div class="content-wrapper">
<div class="container">
<div class="row">
<div class="col-md-12">
<h1 class="page-head-line">Student Registration </h1>
</div>
</div>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="panel panel-default">
<div class="panel-heading">
Student Registration
</div>
<font color="green" align="center"></font>
<div class="panel-body">
<form name="dept" method="post">
    <div class="form-group">
        <label for="studentname">Student Name </label>
        <input type="text" class="form-control" id="studentname" name="studentname" placeholder="Student Name" required=""
        fdprocessedid="ez3irs">
        </div>
        <div class="form-group">
        <label for="studentregno">Student Reg No </label>
        <input type="text" class="form-control" id="studentregno" name="studentregno" onblur="userAvailability()" placeholder="Student Reg
        no" required="" fdprocessedid="oqhd7b">
        <span id="user-availability-status1" style="font-size:12px;">
        </span></div>
        <div class="form-group">
        <label for="password">Password </label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required=""
        fdprocessedid="0phz8l">
        </div>
        <button type="submit" name="submit" id="submit" class="btn btn-default"
        fdprocessedid="32izm7">Submit</button>
        </form>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>
    <footer>
        <div class="container">
        <div class="row">
        <div class="col-md-12">
        © 2023 Online Course Registration | By : <a href=""
        target="_blank">Loyalmates</a>
        </div>
        </div>
        </div>
        </footer> <script src="../assets/js/jquery-1.11.1.js"></script>
        <script src="../assets/js/bootstrap.js"></script>
        <script>
        function userAvailability() {
        $("#loaderIcon").show();
        jQuery.ajax({
        url: "check_availability.php", data:'regno='+$("#studentregno").val(), type: "POST", success:function(data){
        $("#user-availability-status1").html(data);
        $("#loaderIcon").hide();
        },error:function (){}
        });
        }
        </script></body>
        </html>
        