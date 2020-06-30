<?php

namespace ITHilbert\Employees\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //DB::table('permissions')->delete();

        DB::table('permissions')->insert(array (
            0 =>
            array (
                'permission' => 'Mitarbeiterverwaltung',
                'permission_display' => 'Mitarbeiterverwaltung'
            )
        ));
    }
}
