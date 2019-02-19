<?php /** @var \App\DTOs\BookDTO[] $data */ ?>
<h1>My books</h1>

<table border="1">
    <thead>
    <tr>
        <td>Title</td>
        <td>Author</td>
        <td>Genre</td>
    </tr>
    </thead>
    <tb>
        <?php foreach ($data as $book): ?>
            <tr>
                <td><?= $book->getTitle() ?></td>
                <td><?= $book->getAuthor() ?></td>
                <td><?= $book->getGenre_name() ?></td>
                <td><a href="edit_book.php?id=<?= $book->getId() ?>">edit book</a></td>
                <td><a href="delete_book.php?id=<?= $book->getId() ?>">delete book</a></td>
            </tr>
        <?php endforeach; ?>
    </tb>
</table>