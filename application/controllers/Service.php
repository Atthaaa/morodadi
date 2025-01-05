<?php
class Service extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // Pastikan pengguna sudah login
        if (!$this->session->userdata('id_member')) {
            redirect('/', 'refresh');
        }
    }

    // Menampilkan semua service
    function index()
    {
        $this->load->model('Mservice');
        $data['service'] = $this->Mservice->tampil();

        $this->load->view('header');
        $this->load->view('service_tampil', $data); // Kirim data service ke view
        $this->load->view('footer');
    }

    function order1($id_service = null)
{
    // Cek apakah ID service valid
    if (isset($service[$id_service])) {
        $service = $service[$id_service];

        // Ambil data pengguna dari session
        $nama = $this->session->userdata('nama_member'); // Pastikan 'nama_member' disimpan di session
        $alamat = $this->session->userdata('alamat_member'); // Pastikan 'alamat_member' disimpan di session

        // Format pesan WhatsApp
        $pesan = 
            "Reservasi Service - Morodadi Radiator%0A" .
            "Nama: " . $nama . "%0A" .
            "Alamat: " . $alamat . "%0A" .
            "Nama Service: " . $service['nama_service'] . "%0A";

                // Nomor WhatsApp tujuan
        $nomor_wa = "6285172042004";

        // Link foto profil WhatsApp (ganti dengan URL foto profil yang valid)
        $foto_profil = "https://example.com/foto-profil.jpg"; // Ubah URL sesuai foto Anda

        // Redirect ke WhatsApp dengan foto profil dan teks
        redirect("https://api.whatsapp.com/send?phone=" . $nomor_wa . "&text=" . $pesan . "&media=" . $foto_profil);

    } else {
        show_404(); // Tampilkan halaman 404 jika ID service tidak valid
    }
}

}
?>