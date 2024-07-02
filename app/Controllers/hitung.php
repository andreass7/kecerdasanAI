<?php

namespace App\Controllers;

use App\Models\hitungModels;
use CodeIgniter\Controller;

class hitung extends BaseController
{
    // private $data = [
    //     [1, 3, 1, 3, 3],  // Nganggring
    //     [3, 1, 1, 5, 5], // Pancoh
    //     [3, 1, 1, 5, 5], // Kelor
    //     [3, 3, 1, 5, 5], // Kampung Iklim
    //     [5, 3, 3, 5, 5]   // Gamplong
    // ];

    // private $labels = ["Tidak Favorit", "Tidak Favorit", "Tidak Favorit", "Favorit", "Favorit"];

    // private $desa_nama = ["Nganggring", "Pancoh", "Kelor", "Kampung Iklim Karang Tanjung", "Gamplong"];



    // private function euclidean_distance($a, $b)
    // {
    //     $sum = 0;
    //     for ($i = 0; $i < count($a); $i++) {
    //         $sum += pow(($a[$i] - $b[$i]), 2);
    //     }
    //     return sqrt($sum);
    // }

    // private function knn_predict($new_data, $k)
    // {
    //     $distances = [];
    //     for ($i = 0; $i < count($this->data); $i++) {
    //         $distance = $this->euclidean_distance($this->data[$i], $new_data);
    //         $distances[] = ['distance' => $distance, 'label' => $this->labels[$i], 'index' => $i];
    //     }
    //     usort($distances, function ($a, $b) {
    //         return $a['distance'] <=> $b['distance'];
    //     });
    //     $nearest_labels = array_column(array_slice($distances, 0, $k), 'label');
    //     $counts = array_count_values($nearest_labels);
    //     arsort($counts);
    //     return ['result' => array_key_first($counts), 'distances' => $distances];
    // }

    // public function predict()
    // {
    //     $nama_desa = $this->request->getPost('nama_desa');
    //     $k1 = floatval($this->request->getPost('k1'));
    //     $k2 = floatval($this->request->getPost('k2'));
    //     $k3 = floatval($this->request->getPost('k3'));
    //     $k4 = floatval($this->request->getPost('k4'));
    //     $k5 = floatval($this->request->getPost('k5'));
    //     $new_data = [$k1, $k2, $k3, $k4, $k5];

    //     $k = 3; // Menggunakan k=3
    //     $prediction = $this->knn_predict($new_data, $k);
    //     $result = $prediction['result'];
    //     $distances = $prediction['distances'];

    //     return view('user/hasil', [
    //         'nama_desa' => $nama_desa,
    //         'result' => $result,
    //         'distances' => $distances,
    //         'desa_nama' => $this->desa_nama
    //     ]);
    // }
    public function petunjukhitung()
    {
        return view('user/sebelumHitung');
    }
    public function hitung()
    {
        return view('user/perhitungan');
    }
    public function classify()
    {
        $datasetModel = new hitungModels();

        // Ambil data sampel dari database
        $dataSamples = $datasetModel->findAll();

        if (!$dataSamples) {
            // Jika tidak ada data sampel, tampilkan pesan error
            return redirect()->back()->with('error', 'Data sampel tidak ditemukan');
        }

        // Ambil input dari form
        $nama_desa = $this->request->getPost('nama_desa');
        $k1 = $this->request->getPost('k1');
        $k2 = $this->request->getPost('k2');
        $k3 = $this->request->getPost('k3');
        $k4 = $this->request->getPost('k4');
        $k5 = $this->request->getPost('k5');

        $input = [$k1, $k2, $k3, $k4, $k5];
        $distances = [];

        // Hitung jarak Euclidean
        foreach ($dataSamples as $index => $sample) {
            $distance = 0;
            $distance += pow($sample['k1'] - $input[0], 2);
            $distance += pow($sample['k2'] - $input[1], 2);
            $distance += pow($sample['k3'] - $input[2], 2);
            $distance += pow($sample['k4'] - $input[3], 2);
            $distance += pow($sample['k5'] - $input[4], 2);
            $distance = sqrt($distance);
            $distances[] = ['distance' => $distance, 'label' => $sample['label'], 'nama_desa' => $sample['nama_desa']];
        }

        // Urutkan berdasarkan jarak
        usort($distances, function ($a, $b) {
            return $a['distance'] <=> $b['distance'];
        });

        // Ambil k tetangga terdekat
        $k = 3;
        $neighbors = array_slice($distances, 0, $k);

        // Tentukan kelas mayoritas
        $classes = array_column($neighbors, 'label');
        $classCounts = array_count_values($classes);
        $predictedClass = array_search(max($classCounts), $classCounts);

        // Simpan data input ke database dengan label yang diprediksi
        $data = [
            'nama_desa' => $nama_desa,
            'k1' => $k1,
            'k2' => $k2,
            'k3' => $k3,
            'k4' => $k4,
            'k5' => $k5,
            'label' => $predictedClass
        ];

        if (!$datasetModel->insert($data)) {
            // Jika penyimpanan gagal, tampilkan pesan error
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan data');
        }

        // Tampilkan hasil
        return view('user/hasil', [
            'predictedClass' => $predictedClass,
            'neighbors' => $neighbors,
            'distances' => $distances,
            'nama_desa' => $nama_desa
        ]);
    }
}
