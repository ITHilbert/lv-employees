<?php

namespace ITHilbert\Employees\Entities;

use Illuminate\Database\Eloquent\Model;
use ITHilbert\LaravelKit\Traits\VueComboBox;

class SiganutureRule extends Model
{
    protected $table = 'employees_signature_rules';
    protected $guarded = [];
    public $timestamps = false;

    use VueComboBox;

     /* ComboBox */
	public function getCbCaptionAttribute(){
		return $this->meaning;
	}



}
