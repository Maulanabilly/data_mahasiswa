<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            [
                'nama' => 'Andi Saputra',
                'nim' => '1234567890',
                'program_studi' => 'Teknik Informatika',
                'tanggal_lahir' => '2000-05-15',
                'alamat' => 'Jl. Melati No. 10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Rina Kartika',
                'nim' => '9876543210',
                'program_studi' => 'Sistem Informasi',
                'tanggal_lahir' => '1999-12-22',
                'alamat' => 'Jl. Kenanga No. 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Budi Santoso',
                'nim' => '5678901234',
                'program_studi' => 'Manajemen Informatika',
                'tanggal_lahir' => '2001-03-08',
                'alamat' => 'Jl. Mawar No. 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dewi Lestari',
                'nim' => '6543210987',
                'program_studi' => 'Akuntansi',
                'tanggal_lahir' => '1998-07-21',
                'alamat' => 'Jl. Cempaka No. 7',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Yusuf Maulana',
                'nim' => '8765432109',
                'program_studi' => 'Teknik Mesin',
                'tanggal_lahir' => '2000-11-11',
                'alamat' => 'Jl. Pahlawan No. 8',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Joko Widodo',
                'nim' => '2345678901',
                'program_studi' => 'Pendidikan Olahraga',
                'tanggal_lahir' => '1997-04-10',
                'alamat' => 'Jl. Sukarno No. 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti Aminah',
                'nim' => '2345678902',
                'program_studi' => 'Psikologi',
                'tanggal_lahir' => '1999-09-09',
                'alamat' => 'Jl. Melur No. 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ahmad Subari',
                'nim' => '1234567891',
                'program_studi' => 'Ilmu Komunikasi',
                'tanggal_lahir' => '1998-08-08',
                'alamat' => 'Jl. Raya No. 12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Rizky Pratama',
                'nim' => '8765432102',
                'program_studi' => 'Biologi',
                'tanggal_lahir' => '2001-06-25',
                'alamat' => 'Jl. Anggrek No. 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Wulan Sari',
                'nim' => '2345678903',
                'program_studi' => 'Ekonomi',
                'tanggal_lahir' => '2000-02-12',
                'alamat' => 'Jl. Permai No. 6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Indra Pratama',
                'nim' => '9876543212',
                'program_studi' => 'Matematika',
                'tanggal_lahir' => '1997-10-15',
                'alamat' => 'Jl. Sumber No. 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Tina Novita',
                'nim' => '3456789012',
                'program_studi' => 'Teknik Elektro',
                'tanggal_lahir' => '2001-01-20',
                'alamat' => 'Jl. Mentari No. 11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Zainab Alifah',
                'nim' => '4567890123',
                'program_studi' => 'Farmasi',
                'tanggal_lahir' => '1999-05-30',
                'alamat' => 'Jl. Bunga No. 9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Dani Rahmat',
                'nim' => '6543210988',
                'program_studi' => 'Sastra Inggris',
                'tanggal_lahir' => '1996-12-13',
                'alamat' => 'Jl. Emas No. 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Laila Nur',
                'nim' => '7654321090',
                'program_studi' => 'Ilmu Hukum',
                'tanggal_lahir' => '2000-09-18',
                'alamat' => 'Jl. Pahlawan No. 14',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
