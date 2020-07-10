<?php

namespace ITHilbert\Employees\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use ITHilbert\Employees\Entities\SiganutureRule;
use ITHilbert\LaravelKit\Entities\Anrede;
use ITHilbert\LaravelKit\Traits\VueComboBox;


class Employee extends Model {

    protected $table = 'employees';
    protected $guarded = [];
   /*  protected $fillable = ['customer_type_id', 'company_row_1', 'company_row_2', 'address_id', 'title', 'first_name', 'last_name', 'street', 'postcode', 'city', 'country', 'ustid'
    ,'phone', 'mobile', 'fax', 'email', 'web', 'invoice_type_id', 'hourly_rate', 'mileage_allowance', 'comment', 'edit_user_id'	];
 */

    use SoftDeletes;
    use VueComboBox;

    /* ComboBox */
	public function getCbCaptionAttribute(){
        return $this->getName();
	}

    public function getAnrede(){
        $anrede = Anrede::findorfail($this->anrede_id);
        return $anrede->anrede;
    }

    public function getAnredeCB(){
        return Anrede::getComboBoxData();
    }

    public function getDatenAnreden(){
        return Anrede::all();
    }

    public function getName(){
        return $this->first_name . ' '.  $this->last_name;
    }

    //Gibt einen Link zur E-Mail Adresse zurück
    public function getMailto(){
        return '<a href="mailto:' . $this->email . '">' . $this->email . '</a>';
    }

    public function getSignatureRule(){
        if(!isset($this->signature_rule_id)) return '';

        $sr = SiganutureRule::findorfail($this->signature_rule_id);

        return $sr->signature_rule;
    }

    public function getSignatureRuleCB(){
        return SiganutureRule::getComboBoxData();
    }

    public function getDatenSigantureRules(){
        return SiganutureRule::all();
    }

}

