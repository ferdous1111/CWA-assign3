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
    <title>Enhancements</title>
</head>

<body>
    <?php include "./header.inc"; ?>
    <div class="container">
        <h2>Enhancements</h2>

        <section class="enhancements">

            <article>

                <h2>Fixed Navbar</h2>

                The navigation bar is fixed on the top of the screen. It has matching colors with the custom scrollbar.
                The navbar buttons have a hover animation and they are responsive to viewport width.
                The companny name and logo is kept on all pages to maintain consistency.
                The colors and size of each navbar elements was carefully picked, a lot of experimentation was done to
                pick a non intrusive color.
                The width of buttons and size of text is manually defined to resize according to the viewport.
            </article>
            <aside>
                <ul>
                    <li>Fixed position on top</li>
                    <li>Company Title</li>
                    <li>Thin and unintrusive Design</li>
                </ul>
            </aside>
        </section>
        <section class="enhancements">
            <h2>Custom Scrollbar</h2>
            <article>
                A scrollbar is an interaction technique or widget in which continuous text, pictures, or any other
                content can be scrolled in a predetermined direction (up, down, left, or right) on a computer display,
                window, or viewport so that all of the content can be viewed, even if only a fraction of the content can
                be seen on a device's screen at one time.
                <!-- https://en.wikipedia.org/wiki/Scrollbar#:~:text=A%20scrollbar%20is%20an%20interaction,can%20be%20seen%20on%20a -->
                We implemented our own style here.
            </article>
            <aside>
                <ul>
                    <li>scrollbar thumb</li>
                    <li>scrollbar track</li>
                    <li>scrollbar background</li>
                </ul>
            </aside>
        </section>
    </div>
    <?php include "./footer.inc"; ?>
    <script src="./scripts/enhancement.js"></script>
</body>
</html>