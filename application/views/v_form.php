<!DOCTYPE html>
<html>

<head>
    <title>Membuat form validation dengan Codeigniter </title>
</head>

<body>
    <h1>Membuat Form Validation dengan CodeIgniter</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('form/action'); ?>

    <label>Nama</label><br />
    <input type="text" name="jeneng"><br />

    <label>Email</label><br />
    <input type="text" name="imail"><br />

    <label>Konfirmasi Email</label><br />
    <input type="text" name="konfir_imail"><br />

    <input type="submit" value="Simpan">
    </form>
</body>

</html>