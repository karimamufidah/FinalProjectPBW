<!DOCTYPE html>
<html lang="en">
           <h1 align="center">Data Tabel Feedback</h1>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Pesan</th>
                </tr>
              </thead>
              <tbody>
               <?php
        foreach($kontak as $c){
        ?>
        <tr>
          <td><?php echo $c->nama ?></td>
          <td><?php echo $c->email ?></td>
          <td><?php echo $c->pesan ?></td>
        </tr>
        <?php } ?>
              </tbody>
            </table>
</html>