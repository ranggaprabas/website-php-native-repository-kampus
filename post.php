<?php
include_once 'layouts/head.php';
require_once 'library/function.php';
$post_id = trim(stripslashes($_GET['id']));
$post = read_data("SELECT * FROM post WHERE id='$post_id'")[0];
?>
<title>Post Detail - Repository Unsika</title>

<body>
  <?php
  include_once 'layouts/header.php';
  ?>

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Post Detail</h2>
          <ol>
            <li><a href="<?= BASEURL ?>">Home</a></li>
            <li>Post</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page pt-2">
      <div class="container">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title"><?= $post['judul'] ?></h4>
            <table class="table">
              <tr>
                <th>Penulis</th>
                <td class="w-75"><?= $post['penulis'] ?></td>
              </tr>
              <tr>
                <th>Kontributor / Dosen Pembimbing</th>
                <?php
                switch ($post['kontributor']) {
                  case 1:
                    echo "<td>Arnisa Stefanie, ST, MT.</td>";
                    break;
                  case 2:
                    echo "<td>Dian Budhi Santoso, S.T., M.Eng.</td>";
                    break;
                  case 3:
                    echo "<td>Dr. Ir. Yuliarman Saragih, MT.</td>";
                    break;
                  case 4:
                    echo "<td>Ibrahim, ST, MT.</td>";
                    break;
                  case 5:
                    echo "<td>Insani Abdi Bangsa, ST., M.Sc</td>";
                    break;
                  case 6:
                    echo "<td>Ir. Lela Nurpulaela, MT.</td>";
                    break;
                  case 7:
                    echo "<td>Rahmat Hidayat, A.Md.T, S.Pd., M.Pd</td>";
                    break;
                  case 8:
                    echo "<td>Reni Rahmadewi, ST, MT.</td>";
                    break;
                  case 9:
                    echo "<td>Ulinnuha Latifa, S.T., M.T.</td>";
                    break;
                  default:
                    echo "<td>Ulinnuha Latifa, S.T., M.T.</td>";
                    break;
                }
                ?>
              </tr>
              <tr>
                <th>Penerbit</th>
                <td class="w-75"><?= $post['penerbit'] ?></td>
              </tr>
              <tr>
                <th>Kata Kunci</th>
                <td class="w-75"><?= $post['keyword'] ?></td>
              </tr>
              <tr>
                <th>Jenis Koleksi</th>
                <td>
                  <?php
                  switch ($post['jenis']) {
                    case 1:
                      echo "S1-Artikel";
                      break;

                    case 2:
                      echo "S1-Skripsi";
                      break;

                    case 3:
                      echo "S1-Dokumen Engineering";
                      break;

                    default:
                      break;
                  }
                  ?></td>
              </tr>
              <tr>
                <th>Staff Input</th>
                <td class="w-75"><?= $post['staf_input'] ?></td>
              </tr>
              <tr>
                <th>Tanggal input</th>
                <td class="w-75"><?= $post['tgl_input'] ?></td>
              </tr>
              <tr>
                <th>File</th>
                <td>
                  <a role="button" class="btn btn-outline-primary" href="<?= BASEURL ?>uploads/post/<?= $post['path']; ?>" target="_blank">Download File</a>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
  <?php
  include_once 'layouts/footer.php';
  ?>