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
    <title>Enhancements 2</title>
</head>

<body>
    <?php include "./header.inc"; ?>
    <div class="container">
        <h2>Enhancements 2</h2>

        <section class="enhancements">

            <article>
                <h2>Identification of current page</h2>
                When a user visits a page via clicking on the navigation menu, the colore of the navigation menu will be highlighted by different color.
                To implement this feature I used session storage. After loading the page, it will check the index of the menu which was clicked before the current page loading. The core concepts of the implimention are...
            </article>
            <aside>
                <ul>
                    <li>Session storage</li>
                    <li>Set clicking menue index</li>
                    <li>Check index of the navigation menu and change it's color</li>
                </ul>
            </aside>
        </section>
        <section class="enhancements">
            <h2>"Add To Top" button</h2>
            <article>
                "Add to Top" button is a sticky button that helps visitors to navigate to the top of the page quickly. Most often it can be used to the blog or long contented pages or something like that.
                In this website. we have implimented this feature using javascript.
            </article>
        </section>
    </div>
    <?php include "./footer.inc"; ?>
    <script src="./scripts/enhancement.js"></script>
</body>
</html>