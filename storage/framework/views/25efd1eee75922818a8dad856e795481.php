<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">

  </head>
  <body>
    <div style="height: 100vh;" class="d-flex justify-content-center align-items-center flex-row">
        <div class="d-flex justify-content-center mx-4">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Specializations
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">All</a></li>
                    <li><a class="dropdown-item" href="#">Developer</a></li>
                    <li><a class="dropdown-item" href="#">Programmer</a></li>
                    <li><a class="dropdown-item" href="#">Analyst</a></li>
                    <li><a class="dropdown-item" href="#">Designer</a></li>
                </ul>
            </div>
        </div>
        <div class="mx-4"> 
            <table class="table table-striped-columns">
                <thead>
                  <tr>
                    <th scope="col">Officer Name</th>
                    <th scope="col">Specialisation</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Mark</td>
                    <td>Developer</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
  <script src="<?php echo e(asset('js/bootstrap.bundle.js')); ?>"></script>
  </body>
</html><?php /**PATH D:\LARAVEL\categorizingSample\resources\views/pageOne.blade.php ENDPATH**/ ?>