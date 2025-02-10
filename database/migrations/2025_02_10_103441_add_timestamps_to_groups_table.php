<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTimestampsToGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('groups', function (Blueprint $table) {
            $table->timestamps();  // Esto añadirá las columnas 'created_at' y 'updated_at'
        });
    }
    
    public function down()
    {
        Schema::table('groups', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
    
}
