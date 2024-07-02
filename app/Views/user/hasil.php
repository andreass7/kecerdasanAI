<?php $this->extend('layout/layout') ?>
<?php $this->section('content') ?>
<br><br>

<!-- view hasil -->
<div class="container mt-5">
    <h2>Desa Wisata <?= htmlspecialchars($nama_desa) ?> termasuk kategori: <b><?= htmlspecialchars($predictedClass) ?></b></h2>
    <h3>Berdasarkan Perhitungan Jarak Euclidean</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Desa Wisata</th>
                <th>Jarak Euclidean</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($distances as $distance) : ?>
                <tr>
                    <td><?= htmlspecialchars($distance['nama_desa']) ?></td>
                    <td><?= $distance['distance'] ?></td>
                    <td><?= htmlspecialchars($distance['label']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>




<?php $this->endSection() ?>