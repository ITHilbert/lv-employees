<?php
namespace ITHilbert\Employees\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class EmployeesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->delete();

        DB::table('employees')->insert(array (
            0 =>
            array (
                'id' => 1,
                'user_id' => 1,
                'anrede_id' => 1,
                'title' => NULL,
                'first_name' => 'admin',
                'last_name' => NULL,
                'signature_rule_id' => 4,
                'street' => NULL,
                'postcode' => NULL,
                'city' => NULL,
                'country' => NULL,
                'ustid' => NULL,
                'phone' => NULL,
                'phone2' => NULL,
                'mobile' => NULL,
                'fax' => NULL,
                'email' => 'admin@admin.com',
                'private_email' => NULL,
                'skype' => NULL,
                'hourly_rate' => NULL,
                'birthday' => NULL,
                'comment' => NULL,
                'admin_comment' => NULL,
                'edit_user_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2020-02-14 00:00:00',
                'updated_at' => '2020-02-14 00:00:00',
            ),
        ));


    }
}
