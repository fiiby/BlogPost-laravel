<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void    //up=insert
    {
        Schema::table('post', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');
            //specify that the suer id column is a foreign key that references the id column
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void        //down=delete
    {
        Schema::table('post', function (Blueprint $table) {
            //
        });
    }
};
