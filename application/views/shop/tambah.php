<div class="container">
    <form action ="" method="post">
        <legend>Tambah Parfum</legend>
        <div class="mb-3">
            <label for="shop" class="form-label"> Nama Parfum</label>
            <input type="text" class="form-control" Id="shop" name="shop" style="width : 300px;">
            <div class="form-text text-danger"><? form_error('shop'); ?></div>
        </div>
        <input type="Submit" value="Submit" class="btn btn-primary"></input>
    </form>
</div>