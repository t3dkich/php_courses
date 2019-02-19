<?php /** @var \App\DTOs\GenreDTO[] $data */ ?>
<h1>ADD NEW BOOK</h1>

<form method="post">
    Book Title: <input required type="text" name="title"><br>
    Book Author: <input required type="text" name="author"><br>
    Description: <textarea required name="description"></textarea><br>
    Image URL: <input required type="text" name="image"><br>
    Genre:
        <select name="genre_id">
<?php foreach ($data as $genre): ?>
    <option value="<?= $genre->getId() ?>"><?= $genre->getName() ?></option>
<?php endforeach; ?>
        </select><br>
    <input type="submit" value="Add Book!" name="add_book">
</form>