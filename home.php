<div class="container my-5">
    <div class="row d-flex justfy-content-space-between">
        <div class="col-md-8">
            <div class="card card-dark">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <hr>
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="active bg-secondary"></li>
                            <li data-target="#carousel" data-slide-to="1" class="bg-secondary"></li>
                            <li data-target="#carousel" data-slide-to="2" class="bg-secondary"></li>
                        </ol>
                        <div class="carousel-inner">
                            <?php showPopulerArticles(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once 'sidebar.php'; ?>
    </div>
    <div class="row d-flex justify-content-between">

        <div class="col-lg-8">
            <div class="card card-dark">
                <div class="card-body">
                    <h5 class="card-title text-light">
                        Ulasan Berita Blog Kuh
                    </h5>
                    <hr class="text-light">
                    <?php showPopulerUlasan(); ?>
                </div>
            </div>
        </div>
    </div>