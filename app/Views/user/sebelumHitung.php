<?php $this->extend('layout/layout') ?>
<?php $this->section('content') ?>
<div class="container-sebelum">
    <div class="op" data-aos="fade-right" data-aos-delay="300">KRITERIA</div>
    <div class="a" data-aos="fade-right" data-aos-delay="300">
        <table class="table ">
            <thead class="table-info">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kriteria</th>
                    <th scope="col">Bobot</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Pengunjung</td>
                    <td>3</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Aktivitas Wisata</td>
                    <td>5</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Pertunjukan Seni</td>
                    <td>4</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Alat Transportasi</td>
                    <td>5</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Fasilitas</td>
                    <td>5</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="b">
        <div class="row">
            <div class="col-4">
                <div class="opp" data-aos="fade-right" data-aos-delay="300">SUB KRITERIA (Pengunjung)</div>
                <table class="table" data-aos="fade-right" data-aos-delay="300">
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
            </div>
            <div class="col-4">
                <div class="opp" data-aos="zoom-in" data-aos-delay="300">SUB KRITERIA (Aktivitas Wisata)</div>
                <table class="table " data-aos="zoom-in" data-aos-delay="300">
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
            </div>
            <div class="col-4">
                <div class="opp" data-aos="fade-left" data-aos-delay="300">SUB KRITERIA (Pertunjukan Seni)</div>
                <table class="table " data-aos="fade-left" data-aos-delay="300">
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
            </div>
            <div class="col-6">
                <div class="opp" data-aos="fade-right" data-aos-delay="300">SUB KRITERIA (Alat Transportasi)</div>
                <table class="table " data-aos="fade-right" data-aos-delay="300">
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
            </div>
            <div class="col-6">
                <div class="opp" data-aos="fade-left" data-aos-delay="300">SUB KRITERIA (Fasilitas)</div>
                <table class="table " data-aos="fade-left" data-aos-delay="300">
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
            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>