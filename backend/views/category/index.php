<h1>Categories</h1>

<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <td>#</td>
            <td>Category</td>
            <td>Top category</td>
        </tr>
    </thead>
    <tbody>
        <?php $counter=0; ?>
        <?php foreach($data as $row) { ?>
            <tr>
                <td><?= ++$counter ?></td>
                <td><?= $row['category'] ?></td>
                <td><?= $row['top_category'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>