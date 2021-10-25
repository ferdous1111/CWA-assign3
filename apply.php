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
    <title>Apply for the post</title>
</head>

<body>
    <!-- this is header section -->
    <?php include "./header.inc"; ?>
    <!-- this is content section -->
    <div class="container">
        <section class="apply">
            <h2>Apply</h2>

            <p>Submit the fields carefully. Our HR team will contact you as soon as possible.</p>
            <form id="jobApplication" method="POST" action="processEOI.php">
                <fieldset>
                    <legend>Application Form</legend>
                    <p>
                        <label for="refNum" title="can be found on the jobs page">Job Reference Number</label>
                        <input id="refNum" name="refNum" type="text" required="required" readonly="readonly" size="3" maxlength="5"
                               pattern="[a-zA-z0-9]{5}" />
                    </p>
                    <p>
                        <label for="fname">First Name</label>
                        <input id="fname" name="fname" type="text" maxlength="20" size="19" required="required"
                            pattern="^[a-zA-Z\s]+$" />
                    </p>
                    <p>
                        <label for="lname">Last Name</label>
                        <input id="lname" name="lname" type="text" maxlength="20" size="19" required="required"
                            pattern="^[a-zA-Z\s]+$" />
                    </p>
                    <p>
                        <label>Date of Birth
                            <input id="date" type="text" name="birthdate" size="6" required="required" placeholder="dd/mmyyyy"
                                pattern="^\d{1,2}[/]\d{1,2}[/]\d{2,4}$" />
                        </label>
                    </p>
                    <fieldset id="gender">
                        <legend>Gender</legend>
                        <label>
                            <input type="radio" name="gender" value="male" required="required" />
                            Male
                        </label>
                        <label>
                            <input type="radio" name="gender" value="female" required="required" />
                            Female
                        </label>
                        <label>
                            <input type="radio" name="gender" value="other" required="required" />
                            Other
                        </label>
                    </fieldset>
                    <p>
                        <label for="street">Street Address <br>
                            <input id="street" type="text" name="street" maxlength="40" size="40" required="required">
                        </label>
                    </p>
                    <p>
                        <label for="suburb">Subrub/Town <br>
                            <input id="suburb" type="text" name="suburb" maxlength="40" size="40" required="required">
                        </label>
                    </p>
                    <p>
                        <label for="state">State
                            <select name="state" id="state" required="required">
                                <option value="">Please Select</option>
                                <option value="vic">VIC</option>
                                <option value="nsw">NSW</option>
                                <option value="qld">QLD</option>
                                <option value="nt">NT</option>
                                <option value="wa">WA</option>
                                <option value="sa">SA</option>
                                <option value="tas">TAS</option>
                                <option value="act">ACT</option>
                            </select>
                        </label>
                    </p>
                    <p>
                        <label title="4 digits">Postcode
                            <input id="postcode" type="text" name="postcode" size="2" maxlength="4" pattern="^\d{4}"
                                required="required">
                        </label>
                    </p>
                    <p>
                        <label>Email
                            <input id="email" type="text" name="email" size="10" pattern="^[a-z0-9.]+[@]{1}[a-z0-9.]+$"
                                required="required">
                        </label>
                    </p>
                    <p>
                        <label>Phone Number
                            <input id="phone" type="text" name="phone" maxlength="17" pattern="^[+]?[\s\d]{10,16}"
                                required="required">
                        </label>
                    </p>

                    <fieldset>
                        <legend>Skills</legend>
                        <label class="checkSkills">HTML-CSS-JavaScript
                            <input type="checkbox" name="skills[]" value="HTMLcssJavaScript" />
                        </label>
                        <label class="checkSkills">Ruby on Rails
                            <input type="checkbox" name="skills[]" value="rubyOnRails" />
                        </label>
                        <label class="checkSkills">Problem solving
                            <input type="checkbox" name="skills[]" value="problemSolving" />
                        </label>
                        <label class="checkSkills">Git
                            <input type="checkbox" name="skills[]" value="Git" />
                        </label>
                        <br />
                        <label class="checkSkills">Communicatoin
                            <input type="checkbox" name="skills[]" value="commuincation">
                        </label>
                        <label class="checkSkills">Teamwork
                            <input type="checkbox" name="skills[]" value="teamwork">
                        </label>
                        <label class="checkSkills">Data modeling and database design
                            <input type="checkbox" name="skills[]" value="datamodeling">
                        </label>
                        <label class="checkSkills">Database backup and recovery
                            <input type="checkbox" name="skills[]" value="backuprecovery">
                        </label>
                        <br>
                        <label class="checkSkills">Server Side Scripting
                            <input type="checkbox" name="skills[]" value="serverscripting">
                        </label>
                        <label class="checkSkills">Structured Query Language
                            <input type="checkbox" name="skills[]" value="sql">
                        </label>
                        <label class="checkSkills">No-Sql
                            <input type="checkbox" name="skills[]" value="nosql">
                        </label>
                        <label class="checkSkills">JSON
                            <input type="checkbox" name="skills[]" value="json">
                        </label>
                        <label class="checkSkills">Project Management
                            <input type="checkbox" name="skills[]" value="projectManagement">
                        </label>
                        <label class="checkSkills">Storage management technique
                            <input type="checkbox" name="skills[]" value="storagetec">
                        </label>
                        <br>
                        <br>
                        <label>Other Skills
                            <input name="othersSkillCheck" id="isOtherSkills" type="checkbox">
                            <br/>
                            <textarea id="otherSkills" name="otherSkills" cols="30" rows="6"
                                placeholder="Write your other skills"></textarea>
                        </label>
                    </fieldset>

                    <div>
                        <input id="privacyPolicy" type="checkbox" required>
                        <label for="privacyPolicy">I acknowlege and accept the terms of the <a
                                href="https://google.com">privacy-policy</a> of AB IT Limited</label>
                    </div>

                    <input type="submit" class="animated-button" value="Submit" />
                    <input type="reset" class="animated-button" value="Reset" />
                </fieldset>
            </form>
            <span id="warning"></span>
        </section>
    </div>
    <!-- this is footer section -->
    <?php include "./footer.inc"; ?>
</body>
     <script src="./scripts/enhancement.js"></script>
     <script src="scripts/apply.js"></script>
</html>