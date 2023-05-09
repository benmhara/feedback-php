<?php include 'header.php'; ?>

<?php
// Set vars to empty values
$name = $email = $body = '';
$nameErr = $emailErr = $bodyErr = '';

// Form submit
if (isset($_POST['submit'])) {
    $update_id = $_POST['update_id'];
    // Validate name
    if (empty($_POST['name'])) {
        $nameErr = 'Name is required';
    } else {
        // $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $name = filter_input(
            INPUT_POST,
            'name',
            FILTER_SANITIZE_FULL_SPECIAL_CHARS
        );
    }

    // Validate email
    if (empty($_POST['email'])) {
        $emailErr = 'Email is required';
    } else {
        // $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }

    // Validate body
    if (empty($_POST['body'])) {
        $bodyErr = 'Body is required';
    } else {
        // $body = filter_var($_POST['body'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $body = filter_input(
            INPUT_POST,
            'body',
            FILTER_SANITIZE_FULL_SPECIAL_CHARS
        );
    }

    if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {
        // add to database
        $sql = "UPDATE feedback SET
        name='$name',
        email='$email',
        body='$body'
        WHERE id = {$update_id}";
        if (mysqli_query($conn, $sql)) {
            // success
            header('Location: feedbacks.php');
        } else {
            // error
            echo 'Error: ' . mysqli_error($conn);
        }
    }
}

$id = $_GET['id'];

$sql = 'SELECT * FROM feedback WHERE id= ' . $id;
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_assoc($result);
?>

<h2>Edit Feedback</h2>
<?php echo isset($name) ? $name : ''; ?>

<form method="POST" action="<?php echo htmlspecialchars(
                                $_SERVER['PHP_SELF']
                            ); ?>" class="mt-4 w-75">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo !$nameErr ?:
                                                    'is-invalid'; ?>" id="name" name="name" placeholder="Enter your name" value="<?php echo $feedback['name']; ?>">
        <div id="validationServerFeedback" class="invalid-feedback">
            Please provide a valid name.
        </div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo !$emailErr ?:
                                                    'is-invalid'; ?>" id="email" name="email" placeholder="Enter your email" value="<?php echo $feedback['email']; ?>">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control <?php echo !$bodyErr ?:
                                            'is-invalid'; ?>" id="body" name="body" placeholder="Enter your feedback"><?php echo $feedback['body']; ?></textarea>
    </div>
    <input type="hidden" name="update_id" value="<?php echo $feedback['id']; ?>">
    <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
    </div>
</form>