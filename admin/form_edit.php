<?php 
    require_once 'connect.php';
    require_once 'header.php';

    $id = $_GET['id'];
    $querySelectById = "SELECT * FROM article WHERE id='$id'";
    $result = $connect->query($querySelectById);
    $row = $result->fetch_assoc();

    $judul = $row['id'];
    $judul = $row['title'];
    $judul = $row['category'];
    $judul = $row['description'];
    $judul = $row['status'];
?>

    <div class="container">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Edit Article</h5>
                        <form class="row g-3" action="" method="post">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Title</label>
                        <input type="text" name="title" value="<?=$title?>" class="form-control" id="inputEmail4" required="true">
                        </div>
                        <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Category</label>
                        <input type="text" name="category" value="<?=$category?>" class="form-control" id="inputPassword4" required="true">
                        </div>
                        <div class="col-12">
                        <label for="inputAddress" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="inputAddress" required="true"placeholder="Description . . . ."><?=$category?></textarea>
                        </div>
                        <div class="col-12">
                        <label for="inputAddress2" class="form-label">Status</label>
                        <select name="status" class="form-select" required="true">
                                <option value="">Choose</option>
                                <option value="Published" <?php if($status == "Published") echo "Selected"; ?>>Published</option>
                                <option value="Unpublished" <?php if($status == "Uublished") echo "Selected"; ?>>Unpublished</option>
                        </select>
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                        <a href="index.php" class="btn btn-dark">Bacl</a>
                        </div>
                        <div class="col-12">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
    if (isset($_POST['submit'])){
        $id = $_POST['id'];
        $judul = $_POST['title'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $status = $_POST['status'];

        $queryINSERT = "UPDATE article SET title=$title,category=$category,description=$description,status=$status
                        WHERE id='$id'";
    if ($connect->query($queryINSERT)){
        echo "<script> alert('Success'); window.location.href='index.php'; </script>";
    }
    }
?>

<?php 
    require_once 'footer.php';
?>