<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the user id exists, for example update.php?id=1 will get the user with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $first = isset($_POST['first']) ? $_POST['first'] : '';
        $last = isset($_POST['last']) ? $_POST['last'] : '';
        
        // Update the record
        $stmt = $pdo->prepare('UPDATE users SET id = ?, email_id = ?, first_name = ?, last_name = ? WHERE id = ?');
        $stmt->execute([$id, $email, $first, $last, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    // Get the user from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$user) {
        exit('User does not exist!');
    }
} else {
    exit('No ID specified!');
}
?>

<?=template_header('Read')?>

<div class="content update">
	<h2>Update User #<?=$user['id']?></h2>
    <form action="update-user.php?id=<?=$user['id']?>" method="post">
        <label for="id">ID</label>
        <label for="email">Email</label>
        <input type="text" name="id" value="<?=$user['id']?>" id="id">
        <input type="text" name="email" value="<?=$user['email_id']?>" id="email">
        <label for="first">First Name</label>
        <label for="last">Last Name</label>
        <input type="text" name="first" value="<?=$user['first_name']?>" id="first">
        <input type="text" name="last" value="<?=$user['last_name']?>" id="last">

        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>