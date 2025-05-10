<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // Admin user
            [
                'id' => 1,
                'username' => 'admin',
                'password' => Hash::make('admin_password'), // Gantilah dengan password asli
                'role' => 'admin',
            ],
            // Guru users
            [
                'id' => 2,
                'username' => '196504121990031002',
                'password' => Hash::make('guru_password'), // Gantilah dengan password asli
                'role' => 'guru',
            ],
            [
                'id' => 3,
                'username' => '198107252005012003',
                'password' => Hash::make('guru_password'),
                'role' => 'guru',
            ],
            [
                'id' => 4,
                'username' => '199001152010012005',
                'password' => Hash::make('guru_password'),
                'role' => 'guru',
            ],
            [
                'id' => 5,
                'username' => '199208172015031001',
                'password' => Hash::make('guru_password'),
                'role' => 'guru',
            ],
            [
                'id' => 6,
                'username' => '199503062018011001',
                'password' => Hash::make('guru_password'),
                'role' => 'guru',
            ],
            [
                'id' => 7,
                'username' => '196811221990091009',
                'password' => Hash::make('guru_password'),
                'role' => 'guru',
            ],
            [
                'id' => 8,
                'username' => '197609111996071007',
                'password' => Hash::make('guru_password'),
                'role' => 'guru',
            ],
            [
                'id' => 9,
                'username' => '197203051995012003',
                'password' => Hash::make('guru_password'),
                'role' => 'guru',
            ],
            [
                'id' => 10,
                'username' => '198108101998022004',
                'password' => Hash::make('guru_password'),
                'role' => 'guru',
            ],
            [
                'id' => 11,
                'username' => '198511221999032005',
                'password' => Hash::make('guru_password'),
                'role' => 'guru',
            ],
            [
                'id' => 12,
                'username' => '197911011996042006',
                'password' => Hash::make('guru_password'),
                'role' => 'guru',
            ],
            [
                'id' => 13,
                'username' => '198910151997052007',
                'password' => Hash::make('guru_password'),
                'role' => 'guru',
            ],
            [
                'id' => 14,
                'username' => '197706301994062008',
                'password' => Hash::make('guru_password'),
                'role' => 'guru',
            ],
            [
                'id' => 15,
                'username' => '198003101995072009',
                'password' => Hash::make('guru_password'),
                'role' => 'guru',
            ],
            // Murid users
            [
                'id' => 16,
                'username' => '1001',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 17,
                'username' => '1002',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 18,
                'username' => '1003',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 19,
                'username' => '1004',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 20,
                'username' => '1005',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 21,
                'username' => '1006',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 22,
                'username' => '1007',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 23,
                'username' => '1008',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 24,
                'username' => '1009',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 25,
                'username' => '1010',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 26,
                'username' => '1011',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 27,
                'username' => '1012',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 28,
                'username' => '1013',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 29,
                'username' => '1014',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 30,
                'username' => '1015',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 31,
                'username' => '1016',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 32,
                'username' => '1017',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 33,
                'username' => '1018',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 34,
                'username' => '1019',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 35,
                'username' => '1020',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 36,
                'username' => '1021',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 37,
                'username' => '1022',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 38,
                'username' => '1023',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 39,
                'username' => '1024',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 40,
                'username' => '1025',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 41,
                'username' => '1026',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 42,
                'username' => '1027',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 43,
                'username' => '1028',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 44,
                'username' => '1029',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 45,
                'username' => '1030',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 46,
                'username' => '1031',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 47,
                'username' => '1032',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 48,
                'username' => '1033',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 49,
                'username' => '1034',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 50,
                'username' => '1035',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 51,
                'username' => '1036',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 52,
                'username' => '1037',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 53,
                'username' => '1038',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 54,
                'username' => '1039',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 55,
                'username' => '1040',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 56,
                'username' => '1041',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 57,
                'username' => '1042',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 58,
                'username' => '1043',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 59,
                'username' => '1044',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
            [
                'id' => 60,
                'username' => '1045',
                'password' => Hash::make('murid_password'),
                'role' => 'murid',
            ],
        ]);
    }

}

