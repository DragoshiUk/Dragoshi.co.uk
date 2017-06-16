<html>
    <head>
        <title>Upload Form</title>
    </head>
    <body>

        <?php echo $error;?>

        <?php echo form_open_multipart('Gallery/do_upload');?>
        <input type="file" name="userfile" size="20" />
        <br /><br />
        Description
        <br />
        <textarea name="description"></textarea>
        <br /><br />
        <input type="submit" value="upload" />
        </form>
    </body>
</html>
