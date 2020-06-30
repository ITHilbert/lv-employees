<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('anrede_id')->default(1)->comment('1 = Herr (Mr) 2 = Frau (Mrs)');
            $table->string('title',255)->nullable();
            $table->string('first_name',255)->comment('Vorname');
            $table->string('last_name',255)->nullable()->comment('Nachname');
            $table->bigInteger('signature_rule_id')->default(1);
            $table->string('street',255)->nullable()->comment('Straße');
            $table->string('postcode',255)->nullable()->comment('PLZ');
            $table->string('city',255)->nullable()->comment('Ort');
            $table->string('country',255)->nullable()->comment('Land');
            $table->string('ustid',255)->nullable()->nullable()->comment('It is a tax id');
            $table->string('phone',255)->nullable()->comment('Telefon');
            $table->string('phone2',255)->nullable()->comment('Telefon2');
            $table->string('mobile',255)->nullable()->comment('Mobile');
            $table->string('fax',255)->nullable()->comment('Fax');
            $table->string('email',255)->comment('E-mail');
            $table->string('private_email',255)->nullable()->comment('Private E-Mail');
            $table->string('skype',255)->nullable()->comment('Skype');
            $table->double('hourly_rate', 8, 2)->nullable()->comment('For a new customerload the data from the config.');
            $table->date('birthday')->nullable();
            $table->string('projects',255)->comment('Welche Projekte kann er bearbeiten');
            $table->text('comment')->nullable()->comment('Kommentar');
            $table->text('admin_comment')->nullable()->comment('Admin Kommentar');
            $table->bigInteger('edit_user_id')->nullable()->comment('The ID of the user who last edited the record');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
