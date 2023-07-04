<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPassportInfoToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('place_of_birth',255);
            $table->string('country_of_residence',255);
            $table->string('passport_no',255);
            $table->date('issue_date');
            $table->date('expiry_date');
            $table->string('place_of_issue',255);
            $table->date('arrival_date');
            $table->string('profession',255)->nullable();
            $table->string('organization',255)->nullable();
            $table->string('visa_duration',255);
            $table->tinyInteger('visa_status');
            $table->string('passport_picture');
            $table->string('personal_picture');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->tinyInteger('room_type');
            $table->date('extra_night_check_in_date');
            $table->date('extra_night_check_out_date');
            $table->tinyInteger('extra_night_room_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
