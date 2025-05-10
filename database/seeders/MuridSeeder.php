<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menonaktifkan pemeriksaan foreign key untuk sementara
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        // Menghapus semua data murid yang sudah ada
        DB::table('murids')->truncate();

        // Data murid yang akan dimasukkan
        $muridData = [
            ['Andi Saputra', 'L', 'XI RPL 1', '1001', '089876543210', '2006-03-15'],
            ['Budi Prakoso', 'L', 'XI RPL 1', '1002', '089765432109', '2006-06-22'],
            ['Cindy Amelia', 'P', 'XI RPL 1', '1003', '089654321098', '2006-08-19'],
            ['Deni Ramadhan', 'L', 'XI RPL 1', '1004', '089543210987', '2006-12-01'],
            ['Eka Putri', 'P', 'XI RPL 1', '1005', '089432109876', '2006-09-10'],
            ['Farhan Maulana', 'L', 'XI RPL 1', '1006', '089321098765', '2006-01-25'],
            ['Gina Rahmawati', 'P', 'XI RPL 1', '1007', '089210987654', '2006-04-17'],
            ['Hendra Saputra', 'L', 'XI RPL 1', '1008', '089109876543', '2006-05-06'],
            ['Indah Permata', 'P', 'XI RPL 1', '1009', '089098765432', '2006-11-29'],
            ['Joko Santoso', 'L', 'XI RPL 1', '1010', '088987654321', '2006-07-13'],
            ['Kevin Aditya', 'L', 'XI RPL 1', '1011', '088876543210', '2006-10-01'],
            ['Lilis Nuraini', 'P', 'XI RPL 1', '1012', '088765432109', '2006-02-05'],
            ['Miftah Huda', 'L', 'XI RPL 1', '1013', '088654321098', '2006-12-30'],
            ['Nia Lestari', 'P', 'XI RPL 1', '1014', '088543210987', '2006-03-23'],
            ['Oki Pratama', 'L', 'XI RPL 1', '1015', '088432109876', '2006-06-12'],
            ['Putri Ayu', 'P', 'XI RPL 2', '1016', '088321098765', '2006-08-28'],
            ['Qory Amalia', 'P', 'XI RPL 2', '1017', '088210987654', '2006-09-14'],
            ['Rian Kurniawan', 'L', 'XI RPL 2', '1018', '088109876543', '2006-07-07'],
            ['Sinta Wulandari', 'P', 'XI RPL 2', '1019', '088098765432', '2006-01-03'],
            ['Tegar Wahyudi', 'L', 'XI RPL 2', '1020', '087987654321', '2006-02-27'],
            ['Ulya Fitriana', 'P', 'XI RPL 2', '1021', '087876543210', '2006-05-16'],
            ['Vina Zahra', 'P', 'XI RPL 2', '1022', '087765432109', '2006-03-05'],
            ['Wahyu Hidayat', 'L', 'XI RPL 2', '1023', '087654321098', '2006-10-20'],
            ['Xena Azzahra', 'P', 'XI RPL 2', '1024', '087543210987', '2006-06-30'],
            ['Yoga Pratama', 'L', 'XI RPL 2', '1025', '087432109876', '2006-04-22'],
            ['Zahra Kusuma', 'P', 'XI RPL 2', '1026', '087321098765', '2006-09-25'],
            ['Aldi Fernando', 'L', 'XI RPL 2', '1027', '087210987654', '2006-05-31'],
            ['Bella Anjani', 'P', 'XI RPL 2', '1028', '087109876543', '2006-07-18'],
            ['Candra Setiawan', 'L', 'XI RPL 2', '1029', '087098765432', '2006-08-03'],
            ['Dita Marlina', 'P', 'XI RPL 2', '1030', '086987654321', '2006-10-11'],
            ['Evan Yulianto', 'L', 'XI RPL 3', '1031', '086876543210', '2006-01-20'],
            ['Fira Nurhaliza', 'P', 'XI RPL 3', '1032', '086765432109', '2006-04-08'],
            ['Galih Permadi', 'L', 'XI RPL 3', '1033', '086654321098', '2006-06-02'],
            ['Hilda Rosanti', 'P', 'XI RPL 3', '1034', '086543210987', '2006-07-24'],
            ['Irfan Maulana', 'L', 'XI RPL 3', '1035', '086432109876', '2006-03-12'],
            ['Jessica Andini', 'P', 'XI RPL 3', '1036', '086321098765', '2006-08-07'],
            ['Kiki Susanto', 'L', 'XI RPL 3', '1037', '086210987654', '2006-10-26'],
            ['Lia Kurniasih', 'P', 'XI RPL 3', '1038', '086109876543', '2006-05-03'],
            ['Mario Anggoro', 'L', 'XI RPL 3', '1039', '086098765432', '2006-11-14'],
            ['Niken Maharani', 'P', 'XI RPL 3', '1040', '085987654321', '2006-12-05'],
            ['Oka Wira', 'L', 'XI RPL 3', '1041', '085876543210', '2006-09-17'],
            ['Prita Salsabila', 'P', 'XI RPL 3', '1042', '085765432109', '2006-04-13'],
            ['Qasim Rahman', 'L', 'XI RPL 3', '1043', '085654321098', '2006-07-30'],
            ['Rani Oktaviani', 'P', 'XI RPL 3', '1044', '085543210987', '2006-01-10'],
            ['Syahrul Anam', 'L', 'XI RPL 3', '1045', '085432109876', '2006-02-22'],
        ];

        $id_user = 16; // Mulai dari id_user = 16

        foreach ($muridData as $data) {
            // Cek jika nis sudah ada
            $existingMurid = DB::table('murids')->where('nis', $data[3])->first();

            // Jika nis belum ada, baru masukkan data
            if (!$existingMurid) {
                DB::table('murids')->insert([
                    'id_user' => $id_user++,
                    'nama' => $data[0],
                    'jenis_kelamin' => $data[1],
                    'kelas' => $data[2],
                    'nis' => $data[3],
                    'no_telp' => $data[4],
                    'tgl_lahir' => $data[5],
                ]);
            } else {
                // Mengabaikan data jika nis sudah ada
                echo "Skipping duplicate NIS: {$data[3]}\n"; // Output jika ada duplikat
            }
        }

        // Mengaktifkan kembali pemeriksaan foreign key
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}