<?php
include './include/connection.php';
if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $userid = $_POST['useruniqid'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO user (firstname, lastname, useruniqid, email, phone, password, gender)";
    if(mysqli_query($conn, $sql) == TRUE){
        echo 'Data Inserted';
    } else {
        echo 'Data Not Inserted';
    }
}
?>

<section class="first_section">
    <div class="home_container">
        <h1 class="welcome_text">Welcome to my page!</h1>
        <div class="Register_and_login">
            <div class="rgisterandloginbuttondiv">
                <button type="button" id="hold" onmousedown="mouseDown()" onmouseup="mouseUp()">Registration</button>
                <button type="button" id="holdtwo" onmousedown="mousedown()" onmouseup="mouseup()">Login</button>
            </div>
            <form class="register" action="./pages/homepage.php" method="post" id="register">
                <h1>Registration</h1>
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname" required placeholder="Enter First Name Here" title="First Name">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname" required placeholder="Enter Last Name" title="Last Name">
                <label for="useruniqid">User ID</label>
                <input type="text" name="userid" id="useruniqid" required placeholder="Enter User ID" title="User ID">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required placeholder="Enter Email Address Here" title="Email Address">
                <label for="phone">Phone</label>
                <input type="number" name="phone" id="phone">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <div class="gender_input">
                    <h3 for="" class="gender_title">Gender:</h3>
                    <input type="radio" name="gender" id="male" values="male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" values="female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="other" values="other">
                    <label for="other">Other</label>
                </div>
                <!-- <select name="" id="" required>
                    <option value="">--Select Your Country--</option>
                    <option value="America">America</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Canada">Canada</option>
                    <option value="India">India</option>
                    <option value="China">China</option>
                    <option value="South Korea">South Korea</option>
                    <option value="North Korea">North Korea</option>
                    <option value="Japan">Japan</option>
                    <option value="Vutan">Vutan</option>
                    <option value="Neapl">Neapl</option>
                    <option value="Turkey">Turkey</option>
                </select> -->
                <button type="submit" name="submit">Register</button>
            </form>
            <form class="login" action="" method="post">
                <h1>Login</h1>
                <label for="email">Email</label>
                <input type="email" name="" id="email" required placeholder="Enter your email address" title="Email">
                <label for="password">Password</label>
                <input type="password" name="" id="password" required placeholder="Enter your password">
                <button type="">Login</button>
            </form>
        </div>
    </div>
</section>
<section class="second_section">
    <div class="home_container">
        <div class="foodanddescription">
            <div class="image">
                <h1>This is Flower</h1>
                <img src="./img/background/img10.jpg" alt="Image">
            </div>
            <div class="titleanddescription">
                <h1>Item Name</h1>
                <ul>
                    <li>Apple</li>
                    <li>Banana</li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php
// $sql = INSERT INTO user (firstname, lastname, useruniqid, email, phone, password, gender)
// VALUES ('','firstname','lastname','useruniqid','email','phone','password','gender')

?>
<script src="./js/jahid.js"></script>