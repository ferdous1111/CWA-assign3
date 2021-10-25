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
    <title>PHP Enhancements</title>
</head>

<body>
    <?php include "./header.inc"; ?>
    <div class="container">
        <h2>PHP Enhancements</h2>

        <section class="enhancements">

            <article>

                <h2>Authentication System</h2>
                In this website. I've created an authentication system to make sure spectator can't manage the applicant. However, authentic user manager can be made by new member entry.
                But for simplicity, I've define a username and password "admin" to check the system quickly.
                I used php session for storing authentic user information while log into the website. Destroying the session data the logged in user will be logged out. The methods I used are...
            </article>
            <aside>
                <ul>
                    <li>session_start() function</li>
                    <li>$_SESSION variable</li>
                    <li>session_destroy() function</li>
                </ul>
            </aside>
        </section>
        <section class="enhancements">
            <h2>Direct delete button</h2>
            <article>
                The requirement was only delete EOIs with a specified job reference number. I extended this ability to make a delete button on the right of every applicant row.
                So, the HR manager can delete any applicant's application by clicking the associated delete button. It will be helpful to take quick action.
            </article>
        </section>
    </div>
    <?php include "./footer.inc"; ?>
    <script src="./scripts/enhancement.js"></script>
</body>
</html>