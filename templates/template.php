<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking lot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
      <h1 class="text-center mb-3">Parkplatz</h1>
        <form action="index.php?a=add" method="post" class="mb-4">
          <div class="mb-3">
              <input
                  type="text"
                  name="kennzeichen"
                  class="form-control"
                  placeholder="Kennzeichen"
                  required
              >
          </div>

          <div class="mb-3">
              <label class="form-label d-block fw-bold">Typ:</label>

              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="typ" id="typ_pkw" value="pkw" required>
                  <label class="form-check-label" for="typ_pkw">Pkw</label>
              </div>

              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="typ" id="typ_transporter" value="transporter">
                  <label class="form-check-label" for="typ_transporter">Transporter</label>
              </div>
              <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="typ" id="typ_motorrad" value="motorrad">
                  <label class="form-check-label" for="typ_motorrad">Motorrad</label>
              </div>

          </div>

          <button class="btn btn-primary">Einparken</button>
      </form>

      <hr>

      <form action="index.php?a=remove" method="post" class="mb-4">
          <div class="mb-3">
              <input
                  type="text"
                  name="kennzeichen"
                  class="form-control"
                  placeholder="Kennzeichen"
                  required
              >
          </div>

          <button class="btn btn-danger">Ausparken</button>
      </form>

      <?php if(isset($msg)) { ?>
        <hr>
        <div class="alert alert-info">
            <?= $msg ?>
        </div>
      <?php } ?>

      <table class="table table-striped table-bordered">
          <thead class="table-dark">
              <tr class="text-center">
                  <th>Kennzeichen</th>
                  <th>Eingeparkt</th>
                  <th>Typ</th>
                  <th>Parkplatznummer</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach($_SESSION['parkplatz']->getFahrzeuge() as $fahzeug) { ?>
                  <tr class="text-center">
                      <td><?= $fahzeug->getKennzeichen() ?></td>
                      <td><?= date('d.m.y H:i:s', $fahzeug->getParkenStart()) ?></td>
                      <td><?= $fahzeug->getType() ?></td>
                      <td><?= $fahzeug->getParkNummer() ?></td>
                  </tr>
              <?php } ?>
          </tbody>
      </table>

    </div>
</body>
</html>
