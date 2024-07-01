<?php $this->extend('layout/layout') ?>
<?php $this->section('content') ?>
<br><br>

<div class="container-mau-hitung mt-5" data-aos="fade-right" data-aos-delay="300">
    <h2 class="mb-3">Prediksi Desa Wisata Menggunakan Metode KNN Euclidian Distance</h2>
    <form method="post" action="/hitung">
        <!-- <div class="form-group">
            <label for="nama_desa">Nama Desa:</label>
            <input type="text" class="form-control" id="nama_desa" name="nama_desa" required>
        </div>
        <div class="form-group">
            <label for="k1">Kriteria 1:</label>
            <input type="number" class="form-control" id="k1" name="k1" required>
        </div>
        <div class="form-group">
            <label for="k2">Kriteria 2:</label>
            <input type="number" class="form-control" id="k2" name="k2" required>
        </div>
        <div class="form-group">
            <label for="k3">Kriteria 3:</label>
            <input type="number" class="form-control" id="k3" name="k3" required>
        </div>
        <div class="form-group">
            <label for="k4">Kriteria 4:</label>
            <input type="number" class="form-control" id="k4" name="k4" required>
        </div>
        <div class="form-group">
            <label for="k5">Kriteria 5:</label>
            <input type="number" class="form-control" id="k5" name="k5" required>
        </div> -->
        <div class="form-group mb-3">
            <label class="form-label" for="nama_desa">Nama Desa</label>
            <input type="text" class="form-control" id="nama_desa" name="nama_desa" placeholder="Masukkan Nama Desa" required>
        </div>
        <div class="form-group mb-3">
            <label class="form-label" for="k1">Pengunjung <span class="info" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><img src="assets/img/infoo.svg" alt=""></span></label>
            <select class="form-control" aria-label="Default select example" id="k1" name="k1" required>
                <option selected disabled>Silahkan Pilih</option>
                <option value="1">Wisata Lokal</option>
                <option value="3">Wisata Domestik</option>
                <option value="5">Wisata Mancanegara</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label class="form-label" for="k2">Aktivitas Wisata<span class="info" data-bs-toggle="modal" data-bs-target="#staticBackdrop1"><img src="assets/img/infoo.svg" alt=""></span></label>
            <select class="form-control" aria-label="Default select example" id="k2" name="k2" required>
                <option selected disabled>Silahkan Pilih</option>
                <option value="1">Rekreasi</option>
                <option value="3">Edukasi</option>
                <option value="5">Petualangan</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label class="form-label" for="k3">Pertunjukan Seni<span class="info" data-bs-toggle="modal" data-bs-target="#staticBackdrop2"><img src="assets/img/infoo.svg" alt=""></span></label>
            <select class="form-control" aria-label="Default select example" id="k3" name="k3" required>
                <option selected disabled>Silahkan Pilih</option>
                <option value="1">
                    < 1 Kali</option>
                <option value="3">2 -3 Kali</option>
                <option value="5">> 3 Kali</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label class="form-label" for="k4">Alat Transportasi<span class="info" data-bs-toggle="modal" data-bs-target="#staticBackdrop3"><img src="assets/img/infoo.svg" alt=""></span></label>
            <select class="form-control" aria-label="Default select example" id="k4" name="k4" required>
                <option selected disabled>Silahkan Pilih</option>
                <option value="3">Pribadi</option>
                <option value="5">Umum</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label class="form-label" for="k5">Fasilitas<span class="info" data-bs-toggle="modal" data-bs-target="#staticBackdrop4"><img src="assets/img/infoo.svg" alt=""></span></label>
            <select class="form-control" aria-label="Default select example" id="k5" name="k5" required>
                <option selected disabled>Silahkan Pilih</option>
                <option value="1">Kurang Lengkap</option>
                <option value="3">Cukup Lengkap</option>
                <option value="5">Lengkap</option>
            </select>
        </div>
        <button type="submit" class="form-button">Prediksi</button>
    </form>
</div>

<!-- Modal PENGUNJUNG-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mx-auto" style="width: 85%">
        <div class="modal-content p-3">
            <div style="font-family: Raleway; font-size: 16px; font-weight: 700; margin-bottom: 8px;">
                Sub Kriteria Pengunjung
            </div>
            <table class="table ">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">SUB KRITERIA</th>
                        <th scope="col">Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>WIsata Mancanegara</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Wisata Domestik</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Wisata Lokal</td>
                        <td>1</td>
                    </tr>

                </tbody>
            </table>
            <div class="text-end">
                <button type="button" class="butmodal" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal AKTIVITAS WISATA-->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mx-auto" style="width: 85%">
        <div class="modal-content p-3">
            <div style="font-family: Raleway; font-size: 16px; font-weight: 700; margin-bottom: 8px;">
                Sub Kriteria Aktivitas Wisata
            </div>
            <table class="table ">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">SUB KRITERIA</th>
                        <th scope="col">Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Petualangan</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Edukasi</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Rekreasi</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>
            <div class="text-end">
                <button type="button" class="butmodal" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal PERTUNJUKAN SENI-->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mx-auto" style="width: 85%">
        <div class="modal-content p-3">
            <div style="font-family: Raleway; font-size: 16px; font-weight: 700; margin-bottom: 8px;">
                Sub Kriteria Pertunjukan Seni
            </div>
            <table class="table ">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">SUB KRITERIA</th>
                        <th scope="col">Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>> 3 kali</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>2 - 3 Kali</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>
                            < 1 Kali</td>
                        <td>1</td>
                    </tr>

                </tbody>
            </table>
            <div class="text-end">
                <button type="button" class="butmodal" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal ALAT TRANSPORTASI-->
<div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mx-auto" style="width: 85%">
        <div class="modal-content p-3">
            <div style="font-family: Raleway; font-size: 16px; font-weight: 700; margin-bottom: 8px;">
                Sub Kriteria Alat Transportasi
            </div>
            <table class="table ">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">SUB KRITERIA</th>
                        <th scope="col">Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Umum</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Pribadi</td>
                        <td>3</td>
                    </tr>
                    <tr>

                    </tr>

                </tbody>
            </table>
            <div class="text-end">
                <button type="button" class="butmodal" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal FASILITAS-->
<div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mx-auto" style="width: 85%">
        <div class="modal-content p-3">
            <div style="font-family: Raleway; font-size: 16px; font-weight: 700; margin-bottom: 8px;">
                Sub Kriteria Fasilitas
            </div>
            <table class="table ">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">SUB KRITERIA</th>
                        <th scope="col">Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Lengkap</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Cukup Lengkap</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Kurang Lengkap</td>
                        <td>1</td>
                    </tr>

                </tbody>
            </table>
            <div class="text-end">
                <button type="button" class="butmodal" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php $this->endSection() ?>