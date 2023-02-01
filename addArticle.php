<div class="container">
    <div class="col-sm-6 mx-auto">
        <form action="/php/addArticle.php" method="post">
            <div class="mt-3 mb-3">
                <input name="title" type="text" class="form-control" placeholder="Заголовок">
            </div>
            <div class="mb-3">
                <textarea name="content" class="form-control" placeholder="Контент"></textarea>
            </div>
            <div class="mb-3">
                <input name="author" type="text" class="form-control" placeholder="Автор">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary">
            </div>
        </form>
    </div>
</div>