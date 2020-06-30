<?php
namespace ITHilbert\Employees\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class EmployeesSignatureRulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees_signature_rules')->delete();

        DB::table('employees_signature_rules')->insert(array (
            0 =>
            array (
                'id' => 1,
                'signature_rule' => 'i.A.',
                'meaning' => 'im Auftrag (i.A.)',
            ),
            1 =>
            array (
                'id' => 2,
                'signature_rule' => 'i.V.',
                'meaning' => 'in Vollmacht (i.V.)',
            ),
            2 =>
            array (
                'id' => 3,
                'signature_rule' => 'ppa.',
                'meaning' => 'Mit Prokura (ppa.)',
            ),
            3 =>
            array (
                'id' => 4,
                'signature_rule' => '',
                'meaning' => 'Geschäftsführer',
            ),
        ));


    }
}
