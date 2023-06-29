<?php
$id = $_GET['id'];
?>

<div class="container my-5">
    <div class="row d-flex justify-content-between">
        <div class="col-8">
            <?php detailArticle($id);?>
        </div>
        <?php
        require_once 'sidebar.php';
        ?>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-title"></div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            <img src="img/kobo.jpg" class="img-circle">
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <textarea name="comment" class="form-control mt-3" placeholder="Komen disini gan"></textarea>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary float-right mt-4">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>>.row>.col-md-2
</div>

<!-- <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <hr>
                    <img src="img/chainsaw-man.png" class="img-thumbnail">
                </div>
            </div> -->