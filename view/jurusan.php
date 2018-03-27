
    <div class="alert alert-dark" role="alert">
      <a href="index.php">Home</a> / Jurusan
    </div>
    <h2 class="mb-4">Jurusan</h2>
    <button class="btn btn-primary mb-4" type="button" name="button" data-toggle="modal" data-target="#create-item">Tambah Data</button>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Kode Jurusan</th>
          <th>Nama Jurusan</th>
          <th>Opsi</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
    <!--modal tambah data -->
    <div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-center" id="myModalLabel">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
          <form data-toggle="validator" action="controller/create2.php" method="POST">
          <div class="form-group">
            <label class="control-label" for="title">Kode Jurusan</label>
            <input type="text" name="kode" class="form-control" data-error="Kode jurusan harus diisi!" required />
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label class="control-label" for="namajurusan">Nama Jurusan</label>
            <input type="text" name="namajurusan" class="form-control" data-error="Nama jurusan harus diisi" required></input>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary crud-submit">Simpan</button>
          </div>
          </form>
          </div>
        </div>
      </div>
    </div>
    <!-- modal edit data -->
    <div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="myModalLabel">Edit Item</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <form data-toggle="validator" action="controller/update.php" method="put">
          <input type="hidden" name="id2" class="edit-id"></input>
          <div class="form-group">
            <label class="control-label" for="kode">Kode Jurusan</label>
            <input type="text" name="kode" class="form-control" disabled="yes"> </input>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <label class="control-label" for="namajurusan">Nama Jurusan</label>
            <input type="text" name="jurusan" class="form-control" data-error="Nama jurusan harus diisi" required></input>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary crud-submit-edit ">Submit</button>
          </div>
          </form>
          </div>
        </div>
      </div>
    </div>
