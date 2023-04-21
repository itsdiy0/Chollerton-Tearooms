<?php include "header.php" ?>
<?php include "connect.php" ?>
<?php 
    $sql = 'SELECT catID,catDesc FROM CT_category';
    $result = $conn->query($sql);
?>
<section class="findOutMoreForm">
    <p class="findOutMoreText">
            Want to hear more about us ?<br>Fill out the form below so one of our marketing members will be in touch with you as soon as possible !
    </p>
    <p class="inputWarning" id="warningMessage">
        Please fill all the inputs as they are all required <i class="fa-solid fa-face-frown"></i>
    </p>
    <?php 
    if(isset($_GET['s']) && $_GET['s']=="success"){
    ?>
    <p class="inputSuccess" id="successMessage">
        Your request has recieved by our team, we will be in touch soon <i class="fa-regular fa-face-smile"></i>
    </p>
    <?php
    }else{
      
    }
    ?>
    <form action="view_requests.php" method="POST" name="dataForm" onsubmit="return checkInputsNotEmpty()">
        <input placeholder="Full name ... *" type="text" name="fullName">
        <input placeholder="Email ... *" type="email" name="eMail">
        <input placeholder="Phone number ... *" type="number" name="pNumber">
        <input placeholder="Your address with postcode ... *" type="text" name="address">
        <h6 class="formLabel">Please select the way you prefer to be in touch with us : </h6>
        <select class="" name="sendMethod">
          <option value="email">Email</option>
          <option value="pnumber">Phone Number</option>
          <option value="post">Post</option>
        </select>
          <h6 class="formLabel">Please select the related section for your enquiry : </h6>
        <select class="" name="category">
          <?php 
    		    if ($result->num_rows > 0) {
      		    while($row = $result->fetch_assoc()) {
       		      echo '<option value="'.$row['catID'].'">'.$row['catDesc'].'</option>';
          		}
            } else {
                echo "0 results";
            }
    		    $conn->close();
          	?>
        </select>
        <textarea placeholder="Your Message ... *" name="message" rows="10"></textarea>
        <input type="submit" name="dataFormSubmit">
    </form>
</section>
<script src="js/functions.js"></script>
<?php include "footer.php" ?>
