<?php /** @var \App\DTOs\UserDTO $data */ ?>
<h1>Hello, <?= $data->getFull_name() ?></h1>

<a href="add_book.php">Add new book</a> | <a href="logout.php">logout</a><br><br>

<a href="my_books.php">My Books</a><br>
<a href="all_books.php">All Books</a>