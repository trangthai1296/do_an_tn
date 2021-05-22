<?php

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'tenphongban' => 'phòng đào tạo',
            'matruongphong' => '1',
            'sdt' => '9999999999',
            'diachi' => 'Phòng B1',
        ]);

        DB::table('departments')->insert([
            'tenphongban' => 'phòng kinh doanh',
            'matruongphong' => '2',
            'sdt' => '1345765456',
            'diachi' => 'Phòng B2',
        ]);

        DB::table('departments')->insert([
            'tenphongban' => 'phòng kế hoạch',
            'matruongphong' => '3',
            'sdt' => '5678765678',
            'diachi' => 'Phòng B3',
        ]);
        DB::table('departments')->insert([
            'tenphongban' => 'phòng nhân sự',
            'matruongphong' => '4',
            'sdt' => '3456788765',
            'diachi' => 'Phòng B4',
        ]);
    }
}
