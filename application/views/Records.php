<section class="pt-4" style="min-height: calc(100vh - 204px);">
  <div class="row text-center mx-auto" style="width: 95%;">
    <?php foreach ($records as $record): ?>
    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
      <a class="downloadBox card p-4 mb-4 bg-white" href="<?= $record->link ?>" download>
        <?= $record->title ?>
      </a>
    </div>
    <?php endforeach; ?>
  </row>
</section>