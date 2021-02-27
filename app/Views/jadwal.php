<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Kalender</h4>
                  <p class="card-category">Kalender kegiatan kamu</p>
                </div>
                <div class="card-body">
                  <div id='calendar'></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?= $this->endSection(); ?>