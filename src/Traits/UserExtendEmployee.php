<?php

namespace ITHilbert\Employees\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use ITHilbert\Employees\Entities\Employee;
use ITHilbert\LaravelKit\Entities\Log;

trait UserExtendEmployee
{



    protected static function boot()
    {
        parent::boot();

        parent::created(function ($user) {
            $emp = new Employee;
            $emp->user_id = $user->id;
            $emp->last_name = $user->name;
            $emp->email = $user->email;

            $emp->save();
        });

        parent::deleted(function($user){
            $emp = Employee::where('user_id', $user->id)->first();
            $emp->delete();
        });
    }


    public function Employee(){
        return Employee::where('user_id', parent::id)->first();
    }


}
