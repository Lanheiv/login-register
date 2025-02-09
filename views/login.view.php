<?php require("views/components/header.php"); ?>

<form method="POST">
<input type="text" name="name" value="<?= $_POST['name'] ?? '' ?>">
<input type="password" name="password">

<button>Ieiet</button>
</form>

<?php if(isset($errors["content"])) { ?>
    <p><?= $errors["content"] ?></p>
<?php } ?>

<?php require("views/components/footer.php"); ?>