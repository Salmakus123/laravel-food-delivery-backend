<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //phone
            $table->string('phone')->nullable();
            //address
            $table->string('address')->nullable();
            //roles
            $table->string('roles')->default('user');
            //lisence_plate
            $table->string('lisence_plate')->nullable();
            //restaurant_name
            $table->string('restaurant_name')->nullable();
            //restraurant_address
            $table->string('restrauran_address')->nullable();
            //photo
            $table->string('photo')->nullable();
            //latlong
            $table->string('latlong')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('roles');
            $table->dropColumn('lisence_plate');
            $table->dropColumn('restraurant_name');
            $table->dropColumn('restraurant_address');
            $table->dropColumn('photo');
            $table->dropColumn('latlog');
        });
    }
};
