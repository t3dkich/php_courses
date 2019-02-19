<?php /** @var \App\DTOs\BookDTO[] $data */ ?>
<h1>All books</h1>

<table border="1">
    <thead>
    <tr>
        <td>Title</td>
        <td>Author</td>
        <td>Genre</td>
        <td>Added by User</td>
        <td>Details</td>
    </tr>
    </thead>
    <tb>
        <?php foreach ($data as $book): ?>
            <tr>
                <td><?= $book->getTitle() ?></td>
                <td><?= $book->getAuthor() ?></td>
                <td><?= $book->getGenre_name() ?></td>
                <td><?= $book->getUsername() ?></td>
                <td><a href="book_details.php?book_id=<?= $book->getId() ?>">book details</a></td>
            </tr>
        <?php endforeach; ?>
    </tb>
</table>