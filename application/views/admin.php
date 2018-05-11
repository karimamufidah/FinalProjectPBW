<html>
<head>
    <title>Admin Page</title>
</head>

<body>
    
    <h1 align="center">Data Website</h1>
    
    <div align="center">
    <table width='80%' border=1>

    <tr>
        <th>Nama</th> <th>Email</th> <th>Pesan</th> <th>Update</th>
    </tr>
    <?php
        foreach($kontak as $c){
        ?>
        <tr>
          <td><?php echo $c->nama ?></td>
          <td><?php echo $c->email ?></td>
          
          <td><?php echo $c->pesan ?></td>
          <td>
                <?php echo anchor('admin/edit/'.$c->id,'Edit'); ?>
                                  <?php echo anchor('admin/hapus/'.$c->id,'Hapus'); ?>
          </td>
        </tr>
        <?php } ?>
    </table>
        </div>
</body>
</html>
