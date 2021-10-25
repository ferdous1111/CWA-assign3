<?php
    require "./settings.php";
    require "./validation.php";
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        // Create Table
        $sql = "CREATE TABLE IF NOT EXISTS EOI (
              id INT NOT NULL UNIQUE AUTO_INCREMENT,
              ref_no varchar(5) NOT NULL,
              f_name varchar(20) NOT NULL,
              l_name varchar(20) NOT NULL,
              street varchar(40) NOT NULL,
              suburb varchar(40) NOT NULL,
              state varchar(3) NOT NULL,
              post_code int(4) NOT NULL,
              email text NOT NULL,
              phone text NOT NULL,
              skills text NOT NULL,
              skills_others text NOT NULL,
              status varchar(7) NOT NULL
            )";
        $conn->query($sql);
        // Insert Data
        $ref_no = $_POST["refNum"];
        $firstName = $_POST["fname"];
        $lastName = $_POST["lname"];
        $dateOfBirth = $_POST["birthdate"];
        $gender = $_POST["gender"];
        $street = $_POST["street"];
        $suburb = $_POST["suburb"];
        $state = $_POST["state"];
        $postCode = $_POST["postcode"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $skills = $_POST["skills"];
        $skill_string = "";
        $skills_others = $_POST["otherSkills"];
        $other_skill_checked = !empty($_POST["othersSkillCheck"]) ? "on" : "off";
        $status = "new";
        for($i=0; $i < count($_POST["skills"]); $i++){
            $skill_string .=" $skills[$i],";
        }
        if(filter_ref($ref_no) && filter_name($firstName) && filter_name($lastName) && filter_dob($dateOfBirth) && filter_gender($gender) && filter_street($street) && filter_suburb($suburb) && filter_state($state) && filter_postcode($postCode) && filter_email($email) && filter_phone($phone) && is_others_skill($other_skill_checked, $skill_string)){
            $sql = "INSERT INTO EOI (ref_no, f_name, l_name, street, suburb, state, post_code, email, phone, skills, skills_others, status) VALUES
                    ('$ref_no', '$firstName', '$lastName', '$street', '$suburb', '$state', '$postCode', '$email', '$phone', '$skill_string', '$skills_others', '$status')";
            if($conn->query($sql) === TRUE){
                $last_id = $conn->insert_id;
                header("Location: confirm.php?id=$last_id");
            }else{
                echo $conn->error;
            }
        } else {
            header("Location: confirm.php?id=0");
        }
        $conn->close();
    } else {
        header("Location: apply.php");
    }
?>