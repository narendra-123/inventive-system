<?php include './includes/header.php'; ?>
<?php include './includes/inr-header.php'; ?>
<main>
    <section class="inr-bnr">
        <div class="container">
            <div class="ib-txt">
                <h1>Blog Detail</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="./">Blogs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Detail</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="inr-wpr inr-blog ib-detail">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="blog-item">
                        <figure>
                            <img src="assets/images/work.jpg" alt="Inventive">
                        </figure>
                        <ul class="list-inline bi-date">
                            <li class="list-inline-item"><i class="fas fa-clock"> </i>July 31, 2018</li>
                            <li class="list-inline-item"><i class="fas fa-user"> </i>Anil Krishna Shrestha</li>
                            <li class="list-inline-item"><i class="fas fa-comment-alt"> </i>Comments</li>
                        </ul>
                        <div class="inr-title">
                            <h3>IT Seminar 2018 </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                    <ul class="list-group ibd-list">
                        <li class="list-group-item">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                            <h6>-Lorem Ipsum</h6>
                        </li>
                        <li class="list-group-item">
                            <p>Lorem Ipsum is simply ever since the 1500s, </p>
                            <h6>-Lorem Ipsum</h6>
                        </li>
                        <li class="list-group-item">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry., </p>
                            <h6>-Lorem Ipsum</h6>
                        </li>
                        <li class="list-group-item">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. </p>
                            <h6>-Lorem Ipsum</h6>
                        </li>
                    </ul>
                </div>
                <div class="col-4">
                    <?php include './includes/recent-post.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="ibd-comment">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="section-title">
                        <h2>Leave a Comment</h2>
                    </div>
                    <div class="inr-form">
                        <form>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="6" placeholder="Your Comment here..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-cstm btn-red">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include './includes/find.php'; ?>
</main>

<?php include './includes/footer.php'; ?>