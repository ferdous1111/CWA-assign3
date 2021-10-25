<?php
session_start();
require "./settings.php";
if(!isset($_SESSION["username"])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A IT Solution Firm" />
    <meta name="keywords" content="HTML, CSS, Database" />
    <meta name="author" content="MD Abdullah Al Mamun" />
    <link rel="stylesheet" href="./styles/style.css" />
    <title>HR Manager</title>
</head>
<body>
    <?php include "./header.inc"; ?>
    <div class="container">
        <a href="logout.php">Logout</a>
        <h2>All EOI</h2>
        <table>
            <tr>
                <th>Ref No.</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Street</th>
                <th>Suburb</th>
                <th>State</th>
                <th>Post Code</th>
                <th>Email</th>
                <th>Phone</th>
                <th>skills</th>
                <th>Status</th>
                <th colspan="2">Option</th>
            </tr>
            <?php
                $sql = "SELECT * FROM EOI";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()){?>
                    <tr>
                        <td><?php echo $row["ref_no"]; ?></td>
                        <td><?php echo $row["f_name"]; ?></td>
                        <td><?php echo $row["l_name"]; ?></td>
                        <td><?php echo $row["street"]; ?></td>
                        <td><?php echo $row["suburb"]; ?></td>
                        <td><?php echo $row["state"]; ?></td>
                        <td><?php echo $row["post_code"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                        <td><?php echo $row["skills"]." ".$row["skills_others"]; ?></td>
                        <td><?php echo $row["status"]; ?></td>
                        <td>
                            <select onchange="location=this.value">
                                <option>Choose</option>
                                <option value="change_status.php?id=<?php echo $row["id"]."&status=new";?>">New</option>
                                <option value="change_status.php?id=<?php echo $row["id"]."&status=current";?>">Current</option>
                                <option value="change_status.php?id=<?php echo $row["id"]."&status=final";?>">Final</option>
                            </select>
                        </td>
                        <td>
                            <button onclick="if(confirm('Do you want to delete this application?')){location='delete.php?id='+<?php echo $row["id"];?>}">Delete</button>
                        </td>
                    </tr>
            <?php } ?>
        </table>
        <h2>Search EOI by reference number</h2>
        <form method="post" action="manage.php">
            <input name="ref" type="text" placeholder="Input reference number">
            <input type="submit" value="Search">
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["ref"]) && strlen($_POST["ref"])>0){
                $ref = $_POST["ref"];?>
                <table>
                    <tr>
                        <th>Ref No.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Street</th>
                        <th>Suburb</th>
                        <th>State</th>
                        <th>Post Code</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>skills</th>
                        <th>Status</th>
                        <th colspan="2">Option</th>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM EOI WHERE ref_no = '$ref'";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()){?>
                            <tr>
                            <td><?php echo $row["ref_no"]; ?></td>
                            <td><?php echo $row["f_name"]; ?></td>
                            <td><?php echo $row["l_name"]; ?></td>
                            <td><?php echo $row["street"]; ?></td>
                            <td><?php echo $row["suburb"]; ?></td>
                            <td><?php echo $row["state"]; ?></td>
                            <td><?php echo $row["post_code"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo $row["phone"]; ?></td>
                            <td><?php echo $row["skills"]." ".$row["skills_others"]; ?></td>
                            <td><?php echo $row["status"]; ?></td>
                            <td>
                                <select onchange="location=this.value">
                                    <option>Choose</option>
                                    <option value="change_status.php?id=<?php echo $row["id"]."&status=new";?>">New</option>
                                    <option value="change_status.php?id=<?php echo $row["id"]."&status=current";?>">Current</option>
                                    <option value="change_status.php?id=<?php echo $row["id"]."&status=final";?>">Final</option>
                                </select>
                            </td>
                            <td>
                                <button onclick="if(confirm('Do you want to delete this application?')){location='delete.php?id='+<?php echo $row["id"];?>}">Delete</button>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
        <?php } ?>
        <h2>Search applicant by name</h2>
        <form method="post" action="manage.php">
            <input name="name" type="text" placeholder="Input name">
            <input type="submit" value="Search">
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["name"]) && strlen($_POST["name"])>1){
            $name = $_POST["name"];
            $f_part = explode(" ", $name)[0];
            $l_part = !empty(explode(" ", $name)[1]) ? explode(" ", $name)[1] : ""; 
            ?>
            <table>
                <tr>
                    <th>Ref No.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Street</th>
                    <th>Suburb</th>
                    <th>State</th>
                    <th>Post Code</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>skills</th>
                    <th>Status</th>
                    <th colspan="2">Option</th>
                </tr>
                <?php
                $sql = "SELECT * FROM EOI WHERE f_name = '$f_part' OR l_name = '$l_part'";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()){?>
                    <tr>
                        <td><?php echo $row["ref_no"]; ?></td>
                        <td><?php echo $row["f_name"]; ?></td>
                        <td><?php echo $row["l_name"]; ?></td>
                        <td><?php echo $row["street"]; ?></td>
                        <td><?php echo $row["suburb"]; ?></td>
                        <td><?php echo $row["state"]; ?></td>
                        <td><?php echo $row["post_code"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                        <td><?php echo $row["skills"]." ".$row["skills_others"]; ?></td>
                        <td><?php echo $row["status"]; ?></td>
                        <td>
                            <select onchange="location=this.value">
                                <option>Choose</option>
                                <option value="change_status.php?id=<?php echo $row["id"]."&status=new";?>">New</option>
                                <option value="change_status.php?id=<?php echo $row["id"]."&status=current";?>">Current</option>
                                <option value="change_status.php?id=<?php echo $row["id"]."&status=final";?>">Final</option>
                            </select>
                        </td>
                        <td>
                            <button onclick="if(confirm('Do you want to delete this application?')){location='delete.php?id='+<?php echo $row["id"];?>}">Delete</button>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        <?php } ?>
        <h2>Delete all EOIs by reference number.</h2>
        <form method="post" action="delete.php">
            <input name="ref" type="text" placeholder="Input EOI">
            <input type="submit" value="Delete">
        </form>
    </div>
    <?php include "./footer.inc"; ?>
    <script src="./scripts/enhancement.js"></script>
</body>
</html>