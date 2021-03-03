<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Pesan Ruangan</h4>
            <p class="card-category">Pesan Ruangan Kamu</p>
          </div>
          <div class="card-body">
            <form>

              <div class="col-md">
                <div class="form-group">
                  <label class="bmd-label-floating">Username</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-md">
                <div class="form-group">
                  <label class="bmd-label-floating">Email address</label>
                  <input type="email" class="form-control">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>
                    <b>Keterangan</b>
                  </label>
                  <div class="form-group">
                    <label class="bmd-label-floating"> Tuliskan keterangan jika ada informasi tambahan.</label>
                    <textarea class="form-control" rows="5"></textarea>
                  </div>
                </div>
              </div>

              <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>