<?php include 'header.php'; ?>

<?php
// Form submit
if (isset($_POST['delete'])) {
    $delete_id = $_POST['delete_id'];
    // Validate name


    // add to database
    $sql = "DELETE FROM feedback WHERE id = {$delete_id}";

    if (mysqli_query($conn, $sql)) {
        // success
        header('Location: feedbacks.php');
    } else {
        // error
        echo 'Error: ' . mysqli_error($conn);
    }
}


$id = $_GET['id'];

$sql = 'SELECT * FROM feedback WHERE id= ' . $id;
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_assoc($result);
?>







<div class="card my-3 w-75">
    <div class="card-body text-center">
        <?php echo $feedback['body']; ?>
        <div class="text-secondary mt-2">
            By <?php echo $feedback['name']; ?> on
            <?php echo date_format(date_create($feedback['date']), 'g:ia \o\n l jS F Y'); ?>
        </div>

    </div>

    <hr>
    <div class="card-body">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="float-end">
            <input type="hidden" name="delete_id" value="<?php echo $feedback['id']; ?>">
            <input type="submit" name="delete" value="Delete" class="btn btn-danger">
        </form>
        <a href="editfeedback.php?id=<?php echo $feedback['id']; ?>" class="btn btn-primary">Edit</a>
    </div>
</div>