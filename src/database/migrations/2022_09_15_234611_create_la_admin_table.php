<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('la_admin')) {
            return;
        }
        Schema::create('la_admin', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('password');
            $table->string('staff_name');
            $table->tinyInteger('is_delete')->unsigned();
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
        Schema::dropIfExists('la_admin');
    }
}
