<?php /** @var \App\DTOs\GenreDTO[][]|\App\DTOs\BookDTO[][] $data */ ?>
<h1>EDIT BOOK</h1>
<form method="post">
    <input hidden name="id" value="<?= $data[1]->getId() ?>" >
    Book Title: <input required value="<?= $data[1]->getTitle() ?>" type="text" name="title"><br>
    Book Author: <input required value="<?= $data[1]->getAuthor() ?>" type="text" name="author"><br>
    Description: <textarea required name="description"><?= $data[1]->getDescription() ?></textarea><br>
    Image URL: <input required value="<?= $data[1]->getImage() ?>" type="text" name="image"><br>
    Genre:
    <select name="genre_id">
        <?php foreach ($data[0] as $genre): ?>
        <?php if($genre->getId() === $data[1]->getGenre_id()): ?>
            <option selected value="<?= $genre->getId() ?>"><?= $genre->getName() ?></option>
            <?php else: ?>
                <option value="<?= $genre->getId() ?>"><?= $genre->getName() ?></option>
            <?php endif; ?>
        <?php endforeach; ?>
    </select><br>
    <img src="<?= $data[1]->getImage() ?>"<br>
    <input type="submit" value="Edit Book!" name="edit_book">


</form>