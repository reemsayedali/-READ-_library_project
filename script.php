<header>
    <div class="container">
        <h1>READ</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="books.php">Books</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
<footer>
    <div class="container">
        <p>&copy; 2024 READ Library. All rights reserved.</p>
    </div>
</footer>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books - READ Library</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="main-content">
        <h1>Our Book Collection</h1>
        <div class="book-list">
            <div class="book-item">
                <h2>Book Title 1</h2>
                <p>Author: Author Name</p>
                <p>Description: Lorem ipsum dolor sit amet...</p>
            </div>
            <div class="book-item">
                <h2>Book Title 2</h2>
                <p>Author: Author Name</p>
                <p>Description: Lorem ipsum dolor sit amet...</p>
            </div>
            <!-- Add more books as needed -->
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
