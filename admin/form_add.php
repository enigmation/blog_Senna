<?php 
    require_once 'connect.php';
    require_once 'header.php';
?>

    <div class="container">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Form Add Article</h5>
                        <form class="row g-3" action="" method="post">
                        <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="inputEmail4" required="true">
                        </div>
                        <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Category</label>
                        <input type="text" name="category" class="form-control" id="inputPassword4" required="true">
                        </div>
                        <div class="col-12">
                        <label for="inputAddress" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="inputAddress" required="true"placeholder="Description . . . ."></textarea>
                        </div>
                        <div class="col-12">
                        <label for="inputAddress2" class="form-label">Status</label>
                        <select name="status" class="form-select" required="true">
                                <option value="">Choose</option>
                                <option value="Published">Published</option>
                                <option value="Unpublished">Unpublished</option>
                        </select>
                        </div>
                        <div class="col-12 d-flex justify-content-between">
                        <a href="index.php" class="btn btn-dark">Back</a>
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
        $judul = $_POST['title'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $status = $_POST['status'];

        $queryINSERT = "INSERT INTO article(title,category,description,status) 
                        VALUES('$title','$category','$description','$status')";
    if ($connect->query($queryINSERT)){
        echo "<script> alert('Success'); window.location.href='index.php'; </script>";
    }
    }
?>

<?php 
    require_once 'footer.php';
?>