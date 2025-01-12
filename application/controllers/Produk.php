<?php
class Produk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // Jika tidk ada tiket suruh login
        if (!$this->session->userdata('id_member')) {
            redirect('/', 'refresh');
        }
    }

    function index()
    {
        //panggil model produk
        $this->load->model("Mproduk");

        $data["produk"] = $this->Mproduk->tampil();

        $this->load->view("header");
        $this->load->view("produk_tampil", $data)/*memberikan/ mengoper data dari $data ke view produk tampil */;
        $this->load->view('footer');
    }

    function order($id_produk)
    {
        $this->load->model("Mproduk");

        // Ambil data produk berdasarkan id
        $produk = $this->Mproduk->getProdukById($id_produk);

        if ($produk) {
            // Ambil data pengguna dari session
            $nama = $this->session->userdata('nama_member'); // Pastikan 'nama' disimpan di session
            $alamat = $this->session->userdata('alamat_member'); // Pastikan 'alamat' disimpan di session

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
