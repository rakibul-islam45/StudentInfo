
<?php
    include_once './Register.php';
    //$nregister = new Register();
?>
<!DOCTYPE html>
<html >
<head>
    <title>Registration Form</title>
    <style>
        * {
            box-sizing: border-box;
        }
        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }
        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
        input[type=reset] {
            background-color: #FF0000;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
        .container {
            margin: auto;
            border: 3px solid #73AD21;
            padding: 10px;
            width: 60%;
            border-radius: 5px;
            background-color: #f2f2f2;
        }
        .col-25 {
            float: left;
            width: 15%;
            margin-top: 6px;
        }
        .col-75 {
            float: left;
            width: 85%;
            margin-top: 6px;
        }
        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>
<body>
<h1 style="text-align: center">Registration form</h1>
<div class="container">
    <form method="post" action="./action.php">
        <div class="row">
            <div class="col-25">
                <label for="name">
                    Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="name" name="name" placeholder="Your name..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="id">Student Id</label>
            </div>
            <div class="col-75">
                <input type="text" id="id" name="id" placeholder="Your student id..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="session">Session</label>
            </div>
            <div class="col-75">
                <input type="text" id="session" name="session" placeholder="Your session..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="department">Department</label>
            </div>
            <div class="col-75">
                <select id="department" name="department" onchange="department()">
                    <option value="CSE">CSE</option>
                    <option value="ICT">ICT</option>
                    <option value="TE">TE</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="bloodgroup">Blood Group</label>
            </div>
            <div class="col-75">
                <select id="bloodgroup" name="bloodgroup" onchange="bloodgroup()">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>

                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="phoneNo">Phone No</label>
            </div>
            <div class="col-75">
                <input type="text" id="phoneNo" name="phoneNo" placeholder="Your Phone Number..">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="homeTown">Home Town</label>
            </div>
            <div class="col-75">
                <input type="text" id="homeTown" name="homeTown" placeholder="Your Home town..">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="birthday">Birthday:</label>
            </div>
            <div class="col-75">
                <input type="date" id="birthday" name="birthday">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="email">Email</label>
            </div>
            <div class="col-75">
                <input type="email" id="email" name="email" placeholder="Your email..">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="password">Password</label>
            </div>
            <div class="col-75">
                <input type="password" id="password" name="password" placeholder="Your password..">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="image">Image</label>
            </div>
            <div class="col-75">
                <input type="file" id="image" name="image" placeholder="Select your image..">
            </div>
        </div>
        <div class="row">
            <input type="submit" value="Submit">
            <input type="reset" value="Reset" >
        </div>
    </form>
</div>
</body>
</html>

