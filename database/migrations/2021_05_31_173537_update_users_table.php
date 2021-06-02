<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('photo', 50)->after('password')->nullable();
            $table->string('phone', 25)->after('photo')->nullable();
            $table->string('store_name', 50)->after('phone')->nullable();
            $table->text('address')->after('store_name')->nullable();
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
            $table->dropColumn('photo');
            $table->dropColumn('phone');
            $table->dropColumn('store_name');
            $table->dropColumn('address');
        });
    }
}
