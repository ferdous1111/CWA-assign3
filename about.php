<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A IT Solution Firm"/>
	<meta name="keywords"	 content="HTML, CSS, Database"/>
	<meta name="author" 	 content="MD Abdullah Al Mamun"/>
    <link rel="stylesheet" href="./styles/style.css" />
    <title>About MD Abdullah Al Mamun</title>
</head>

<body>
    <?php include "./header.inc"; ?>
    <div class="container">
        <h2>About</h2>
        <div class="info">
            <section class="profile-image-area">
                <h6>MD Abdullah Al Mamun</h6>
                <img id="photo" src="./images/profile.jpg" alt="Mamun"><br>
            </section>
            <section class="info-area">
                <h2>Personal Informtaion</h2>
                <dl>
                    <dt>Name</dt>
                    <dd>MD Abdullah Al Mamun</dd>
                    <dt>Student ID</dt>
                    <dd>103533949</dd>
                    <dt>Tutor's Name</dt>
                    <dd>Guangming Cui</dd>
                    <dt>Course</dt>
                    <dd>Bachelor of Computer Science</dd>
                    <dt>Major</dt>
                    <dd>Network Design</dd>
                    <dt>Unit</dt>
                    <dd>COS10011 Creating Web Apps</dd>
                    <dt>Email</dt>
                    <dd><a href="mailto:103533949@student.swin.edu.au">Student E-mail</a></dd>
                </dl>
            </section>
        </div>
        <h2>Hobbies:</h2>
        <ul>
            <li>Listening Music</li>
            <li>Reading Books</li>
            <li>Watching Movies</li>
        </ul>
        <h2>Favourite Movies:</h2>
        <ol type="1">
            <li>Pre Destination</li>
            <li>Mission Impossible</li>
            <li>Iron Man</li>
        </ol>
        <section class="time-table">
            <h3>My Timetable</h3>
            <table>
                <tr>
                    <th>Day</th>
                    <th>Time</th>
                    <th>Unit</th>
                </tr>
                <tr>
                    <td>Monday</td>
                    <td>10:00am to 11:00am</td>
                    <td>Network Administration(Lecture)</td>
                </tr>
                <tr>
                    <td>Monday</td>
                    <td>2:00pm to 3:00pm </td>
                    <td>Creating Web Applicartions(Lecture)</td>
                </tr>
                <tr>
                    <td>Monday</td>
                    <td>5:30pm to 8.30pm</td>
                    <td>Network Administration(Lab)</td>
                </tr>
                <tr>
                    <td>Tuesday</td>
                    <td>9:00am to 10.00am</td>
                    <td>Introduction to Programming(Lecture)</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>12:30pm to 2:30pm</td>
                    <td>Introduction to Programming(Lab)</td>
                </tr>
                <tr>
                    <td>Wednesday</td>
                    <td>5:30pm to 7:30pm</td>
                    <td>Creating Web Applications(Lab)</td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td>9:00am to 11:00am</td>
                    <td>Computer & Logic Essentials(Lecture)</td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td>11:00am to 12:00pm</td>
                    <td>Introduction to Programming(Help Desk)</td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td>12:30pm to 2:30pm</td>
                    <td>Computer & Logic Essentials(Tutorial)</td>
                </tr>
                <tr>
                    <td>Thursday</td>
                    <td>2:30pm to 4:30pm</td>
                    <td>Introduction to Programming(Workshop)</td>
                </tr>
            </table>
        </section>
    </div>
    <?php include "./footer.inc"; ?>
     <script src="./scripts/enhancement.js"></script>
</body>
</html>