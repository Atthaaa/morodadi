<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msaw extends CI_Model {

    public function hitung_saw()
    {
        // Langkah 1: Ambil semua kriteria dan bobotnya
        $kriteria = $this->db->get('kriteria')->result_array();
        $bobot = array();
        $jenis = array();
        foreach ($kriteria as $k) {
            $bobot[$k['id_kriteria']] = $k['bobot'];
            $jenis[$k['id_kriteria']] = $k['jenis'];
        }

        // Langkah 2: Ambil semua data produk dan penilaiannya
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('penilaian_produk', 'produk.id_produk = penilaian_produk.id_produk');
        $query = $this->db->get();
        $penilaian = $query->result_array();

        // Susun ke dalam matriks keputusan (X)
        $matriks_x = array();
        foreach ($penilaian as $p) {
            $matriks_x[$p['id_produk']]['id_produk'] = $p['id_produk'];
            $matriks_x[$p['id_produk']]['nama_produk'] = $p['nama_produk'];
            $matriks_x[$p['id_produk']]['data_kriteria'][$p['id_kriteria']] = $p['nilai'];
        }

        // Langkah 3: Cari nilai MAX (untuk benefit) dan MIN (untuk cost)
        $nilai_max = array();
        $nilai_min = array();
        foreach ($kriteria as $k) {
            $id_k = $k['id_kriteria'];
            $nilai_max[$id_k] = 0;
            $nilai_min[$id_k] = 99999999; // Gunakan angka yang sangat besar
            foreach ($matriks_x as $id_produk => $val) {
                if (isset($val['data_kriteria'][$id_k])) {
                    if ($val['data_kriteria'][$id_k] > $nilai_max[$id_k]) {
                        $nilai_max[$id_k] = $val['data_kriteria'][$id_k];
                    }
                    if ($val['data_kriteria'][$id_k] < $nilai_min[$id_k]) {
                        $nilai_min[$id_k] = $val['data_kriteria'][$id_k];
                    }
                }
            }
        }
        
        // Langkah 4: Hitung Matriks Normalisasi (R)
        $matriks_r = array();
        foreach ($matriks_x as $id_produk => $val) {
            foreach ($kriteria as $k) {
                $id_k = $k['id_kriteria'];
                if(isset($val['data_kriteria'][$id_k])) {
                    $nilai_x = $val['data_kriteria'][$id_k];
                    if ($jenis[$id_k] == 'benefit') {
                        // Hindari pembagian dengan nol
                        $matriks_r[$id_produk][$id_k] = ($nilai_max[$id_k] > 0) ? $nilai_x / $nilai_max[$id_k] : 0;
                    } elseif ($jenis[$id_k] == 'cost') {
                        // Hindari pembagian dengan nol
                        $matriks_r[$id_produk][$id_k] = ($nilai_x > 0) ? $nilai_min[$id_k] / $nilai_x : 0;
                    }
                }
            }
        }

        // Langkah 5: Hitung Nilai Akhir (V) dan Lakukan Perankingan
        $hasil_akhir = array();
        foreach ($matriks_r as $id_produk => $val) {
            $skor_v = 0;
            foreach($val as $id_k => $nilai_r) {
                $skor_v += ($nilai_r * $bobot[$id_k]);
            }
            $hasil_akhir[] = array(
                'id_produk' => $id_produk,
                'nama_produk' => $matriks_x[$id_produk]['nama_produk'],
                'skor_saw' => $skor_v
            );
        }

        // Urutkan hasil dari skor tertinggi ke terendah
        usort($hasil_akhir, function($a, $b) {
            return $b['skor_saw'] <=> $a['skor_saw'];
        });

        return $hasil_akhir;
    }
}