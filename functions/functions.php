<?php require_once('db.php'); ?>
<?php

    function set_message($msg){
        if(!empty($msg)){
            $_SESSION['message'] = $msg;
        }else{
            $msg = "";
        }
    }

    function display_message(){
        if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
    }

    function redirect($location){
        header("Location: $location");
    }

    function query($sql){
        global $connection;

        return mysqli_query($connection,$sql);
    }

    function confirm($result){
        global $connection;
        if(!$result){
            die("Query Failed".mysqli_error($connection));
        }
    }
    function escape_string($string){
        global $connection;
        return mysqli_real_escape_string($connection,$string);
    }

    function fetch_array($result){
        return mysqli_fetch_array($result);
    }
    /********************************************Front End Functions************************************************** */

    // get products
/*
    function get_products(){
        $query = query("SELECT *FROM products");
        confirm($query);
        while($row = fetch_array($query)){
            $products = <<<DELIMETER
            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                <a href="item.php?id={$row['product_id']}"><img style="height:200px;width:240px" src="{$row['product_image']}" alt="">
                    <div class="caption">
                        <h4 class="pull-right">&#8377;{$row['product_price']}</h4><br>
                        <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
                        </h4>
                        <p>{$row['shor_desc']}</p>
                        <a class="btn btn-primary" target="_blank" href="../resources/cart.php?add={$row['product_id']}">Add To Cart</a>    
                    </div>
                </div>
            </div>
        DELIMETER;
            echo $products;
        }
    }

    function get_categories(){
        $query = query("SELECT * FROM categories");
        confirm($query);
        while($row = mysqli_fetch_array($query)){
            
            $category_links = <<<DELIMETER
            <a href='category.php?id={$row['cat_id']}' class = 'list-group-item'>{$row['cat_title']}</a>

            DELIMETER;

            echo $category_links;

        }
    }
    function get_products_in_cat_page(){
        $query = query("SELECT *FROM products WHERE product_category_id =".escape_string($_GET['product_category_id'])."");
        confirm($query);
        while($row = fetch_array($query)){
            $products = <<<DELIMETER
            <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img style="height:200px;width:240px"src="{$row['product_image']}" alt="">
                <div class="caption">
                    <h3>{$row['product_title']}</h3>
                    <p>{$row['shor_desc']}</p>
                    <p>
                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                    </p>
                </div>
            </div>
        </div>

        DELIMETER;
            echo $products;
        }
    }

    function get_products_in_shop_page(){
        $query = query("SELECT *FROM products");
        confirm($query);
        while($row = fetch_array($query)){
            $products = <<<DELIMETER
            <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img style="height:200px;width:240px"src="{$row['product_image']}" alt="">
                <div class="caption">
                    <h3>{$row['product_title']}</h3>
                    <p>{$row['shor_desc']}</p>
                    <p>
                        <a href="#" class="btn btn-primary">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-default">More Info</a>
                    </p>
                </div>
            </div>
        </div>

        DELIMETER;
            echo $products;
        }
    }
*/
function user_signup()
{
		$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "gomeal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
 {
  die("Connection failed: " . $conn->connect_error);
 }
        if(isset($_POST['Signupbtn']))
        {
		
		$firstname = escape_string($_POST['fname']);
		$lastname = escape_string($_POST['lname']);
		$Mobilenumber = escape_string($_POST['mnum']);
		$emailaddress = escape_string($_POST['useremail']);
		$password = escape_string($_POST['password']);
		$sql = "INSERT INTO users (firstName, lastName, emailID, phoneNumber, userpassword) 
		VALUES('$firstname','$lastname','$emailaddress',$Mobilenumber,'$password')";
        if ($conn->query($sql) === TRUE)
         {
         echo "<strong>New record created successfully</strong>";
        } 
        else
        {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
		       
    
        }
}

function sendContactQuery(){
    global $conn;
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['messages'];
    $sql = "INSERT INTO contact (firstname,lastname,email,phone,subject,Message) values('$firstName','$lastName','$email','$phoneNumber','$subject','$message')";
    if ($conn->query($sql) === TRUE)
    {
    echo "<strong>Message Send Successfully</strong>";
   } 
   else
   {
   echo "Error: " . $sql . "<br>" . $conn->error;
   }
    header("Location:#");
}
if(isset($_POST['sendContBtn'])){
    sendContactQuery();
}
// function send_message()
//     {

    
//         if(isset($_POST['submit']))
//         {
//             $to = "GoMeal4u@gmail.com";
//             $from_name = $_POST['name'];
//             $subject = $_POST['subject'];
//             $email = $_POST['email'];
//             $message = $_POST['message'];

//             $headers = "From :{$from_name} {$email}";

//             $result = mail($to,$subject,$message,$headers);
//             if(!$result)
//             {
//                 echo "ERROR";
//             }else
//             {
//                 echo "SENT";
//             }
//         }
//     }
    

    function login_user(){
        if(isset($_POST['submit'])){    
            $usermail = escape_string($_POST['useremail']);
            $userpass = escape_string($_POST['password']);
    
            $query = query("SELECT * FROM users WHERE emailID = '{$usermail}' AND userpassword = '{$userpass}'");
            confirm($query);
        
       
                if(mysqli_fetch_array($query)==0){
                    set_message("Your Password or Username are wrong");
                    redirect("login.php");
                }
                else{
                    $_SESSION['username'] = $usermail;
                    set_message("Welcome to Admin ");
                    redirect("authenticate.php");
                }
    
            }
        }
        function restaurant_reg(){
            $sql = "SELECT MAX(post_id) AS max from post";
            global $connection;
            $result = $connection->query($sql);
            $row = mysqli_fetch_array( $result  );
            $largestNumber = $row['max'];
            return $largestNumber;
        }
        if(isset($_POST['addPostSubmitBtn'])){
            $userId =  '';
            $postTitle = $_POST['postTitle'];
            $postMessage = $_POST['postMessage'];
            // $postImage = $_POST['postImages'];
            $file = $_FILES['file'];
        
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];
            $fileType = $_FILES['file']['type'];
            // echo $fileName;
            $fileExt = explode('.',$fileName);
            $fileActualExt = strtolower(end($fileExt));
    
            $allowed = array('jpeg','jpg','png','pdf');
            if(in_array($fileActualExt,$allowed)){
                if($fileError === 0){
                    if($fileSize < 500000){
                        // $fileNameNew = uniqid('',true).".".$fileActualExt;
                        $maxpostID = getPostID();
                        $maxpostID = $maxpostID+1;
                        $fileDestination = '../img/uploads/'.$maxpostID.'.'.$fileActualExt;
                        $dbFileName = $maxpostID.'.'.$fileActualExt;
                        move_uploaded_file($fileTmpName,$fileDestination);
                    }else{
                        echo "Your file is too big";
                    }
                }else{
                    echo "There was an error while uploading your file";
                }
            }else{
                echo "You cannot upload file of this type";
            }
    
            global $connection;
            echo  $_SESSION['alumni_id_session'];
            if(isset($_SESSION['stud_id_session'])){
                $userId = $_SESSION['stud_id_session'];
                $sql = "INSERT INTO post (poster_id , poster_type , post_title ,post_message, post_img1)
                 VALUES ('$userId' , 'Student' , '$postTitle', '$postMessage','$dbFileName')";
                if ($connection->query($sql) === TRUE) {
                    header("Location:#");
                }
                
            }else if(isset($_SESSION['alumni_id_session'])){
                $userId = $_SESSION['alumni_id_session'];
                $sql = "INSERT INTO post (poster_id , poster_type , post_title ,post_message, post_img1)
                 VALUES ('$userId' , 'Alumni' , '$postTitle', '$postMessage','$dbFileName')";
                if ($connection->query($sql) === TRUE) {
                    header("Location:../");
                }
                
            }else{
                echo "<script>alert(\"Login or Sign up to add Posts.\");</script>";
            }
        }


































    /*******************************************Back End Functions************************************************** */
?>