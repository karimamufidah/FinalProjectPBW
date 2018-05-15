<html>
<head>
  <title>Edit User Data</title>
</head>

<body>
  <a href="feedback/">Kembali</a>
  <br/><br/>

  <?php foreach($kontak as $c){ ?>
    <form action="<?php echo base_url(). 'feedback/update'; ?>" method="post">
      <table border="0">
        <tr>
        <input type="hidden" name="id" value="<?php echo $c->id ?>">  
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama" value=<?php echo $c->nama;?>></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="email" value=<?php echo $c->email;?>></td>
        </tr>
        <tr>
          <td>Pesan</td>
          <td><input type="text" name="pesan" value=<?php echo $c->pesan;?>></td>
        </tr>
        <tr>
          <td><input type="submit" name="update" value="Update"></td>
        </tr>
      </table>
    <?php } ?>
    </form>
  </body>
  </html>
