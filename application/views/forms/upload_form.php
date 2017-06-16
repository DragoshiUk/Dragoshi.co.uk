<div id="form_container" class="container">

    <h2>Upload</h2>

    <form action="do_upload" enctype="multipart/form-data" method="post" accept-charset="utf-8">
        <div class="form-group">
        <label for="file-upload">Choose an image</label>
        <input id="file-upload" class="form-control-file" type="file" name="userfile" size="20" />

        <div class="form-group">
        <label for="file-description">Description</label>
        <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Upload</button>
    </form>
</div>
