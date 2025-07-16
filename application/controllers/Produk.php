<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Memuat semua model yang akan digunakan di awal
        $this->load->model("Mproduk");
        $this->load->model("Msaw");
        
        // Cek sesi login
        if (!$this->session->userdata('id_member')) {
         redirect('/', 'refresh');
        }
    }

    public function index()
    {
        // Menampilkan semua produk
        $data["produk"] = $this->Mproduk->tampil();

        $this->load->view("header");
        $this->load->view("produk_tampil", $data);
        $this->load->view('footer');
    }

    public function kategori($tipe_mobil)
    {
        // Menampilkan produk berdasarkan tipe mobil
        $data['produk'] = $this->Mproduk->tampil_berdasarkan_tipe($tipe_mobil);
        $data['tipe_mobil'] = $tipe_mobil;

        $this->load->view("header");
        $this->load->view("produk_kategori", $data);
        $this->load->view('footer');
    }

    public function rekomendasi()
    {
        // Menjalankan perhitungan SAW untuk SEMUA produk
        $data['hasil_rekomendasi'] = $this->Msaw->hitung_saw();

        $this->load->view("header");
        $this->load->view("rekomendasi_tampil", $data);
        $this->load->view('footer');
    }

    // ======================================================
    // FUNGSI PENTING YANG DITAMBAHKAN
    // ======================================================
    public function rekomendasi_filter($tipe_mobil)
    {
        // Menjalankan perhitungan SAW HANYA untuk produk yang difilter
        // Kirim parameter $tipe_mobil ke model
        $data['hasil_rekomendasi'] = $this->Msaw->hitung_saw($tipe_mobil);
        
        // Tampilkan hasilnya di view yang sama
        $this->load->view("header");
        $this->load->view("rekomendasi_tampil", $data); 
        $this->load->view('footer');
    }

    public function detail($id_produk)
    {
        $data['produk'] = $this->Mproduk->detail($id_produk);

        $this->load->view("header");
        $this->load->view("produk_detail", $data);
        $this->load->view('footer');
    }

    public function order($id_produk)
    {
        $produk = $this->Mproduk->getProdukById($id_produk);

        if ($produk) {
            $nama = $this->session->userdata('nama_member');
            $alamat = $this->session->userdata('alamat_member');
            $pesan = 
                "Pembelian Sparepart - Morodadi Radiator" . "\n" .
                "Nama: " . $nama . "\n" .
                "Alamat: " . $alamat . "\n" .
                "Nama Barang: " . $produk['nama_produk'] . "\n" .
                "Harga: Rp " . number_format($produk['harga_produk']) . "\n" .
                "Jumlah: 1";

            $nomor_wa = "6285172042004";

            redirect("https://api.whatsapp.com/send?phone=" . $nomor_wa . "&text=" . urlencode($pesan));
          // Format pesan WhatsApp
$pesan = 
    "Pembelian Sparepart - Morodadi Radiator%0A" .
    "Nama: " . $nama . "%0A" .
    "Alamat: " . $alamat . "%0A" .
    "Nama Barang: " . $produk['nama_produk'] . "%0A" .
    "Harga: Rp " . number_format($produk['harga_produk'], 0, ',', '.') . "%0A" .
    "Jumlah: 1"; 

// Nomor WhatsApp tujuan
$nomor_wa = "6285172042004";

// Link foto profil WhatsApp (ganti dengan URL foto profil yang valid)
$foto_profil = "https://example.com/foto-profil.jpg"; // Ubah URL sesuai foto Anda

// Redirect ke WhatsApp dengan foto profil dan teks
redirect("https://api.whatsapp.com/send?phone=" . $nomor_wa . "&text=" . $pesan . "&media=" . $foto_profil);
        } else {
            show_404();
        }
    }
}

