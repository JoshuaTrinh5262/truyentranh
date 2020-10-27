<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">ARTISTS</h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#add">Add</button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Detail</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Detail</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </tfoot>
          <tbody>
            <?php foreach ($artists as $artist) : ?>
              <tr>
                <td><?php echo $artist['id_artist'] ?></td>
                <td><?php echo $artist['name_artist'] ?></td>
                <td><a type="button" href="<?php echo base_url();?>admin/artist/<?php echo $artist['id_artist'] ?>" class="btn btn-primary btn-sm">Detail</a></td>
                <td><button type="submit" class="btn btn-success btn-sm" data-toggle="modal" data-target="#update">Edit</button></td>
                <td><button type="submit" class="btn btn-danger btn-sm">Delete</button></td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer"></div>
  </div>
  <!-- Add Modal-->
  <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form class="user" action="<?php echo base_url(); ?>admin/artist_add" method="post" enctype="multipart/form-data">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Artist</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Artist Name</label>
              <input type="text" class="form-control" id="artist" name="artist" placeholder="Artist Name">
            </div>
            <div class="form-group">
              <label>Author Discription</label>
              <textarea class="form-control" id="description" name="description" placeholder="Artist Description"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" type="submit">Add</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Update Modal-->
  <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="" class="user" method="post" enctype="multipart/form-data">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Artist</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Artist Name</label>
              <input type="text" class="form-control" id="artist" name="artist" placeholder="Artist name">
            </div>
            <div class="form-group">
              <label>Artist Discription</label>
              <textarea type="text" class="form-control" id="description" name="description" placeholder="Artist Description"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="">Update</a>
          </div>
        </form>
      </div>
    </div>
  </div>