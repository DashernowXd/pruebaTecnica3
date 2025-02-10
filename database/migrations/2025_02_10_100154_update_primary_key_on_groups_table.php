<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePrimaryKeyOnGroupsTable extends Migration
{
    public function up()
    {
        Schema::table('groups', function (Blueprint $table) {
            // Agregar la columna 'matricula' si no existe
            if (!Schema::hasColumn('groups', 'matricula')) {
                $table->integer('matricula')->unique();  // Agregar columna 'matricula' si no existe
            }

            // Establecer 'matricula' como la clave primaria
            $table->primary('matricula');  // Esto hará que 'matricula' sea la nueva clave primaria
        });
    }

    public function down()
    {
        Schema::table('groups', function (Blueprint $table) {
            // Eliminar la clave primaria de 'matricula'
            $table->dropPrimary('matricula');  // Especificamos la columna para eliminar la clave primaria de 'matricula'
            
            // Si deseas revertir y eliminar la columna 'matricula', descomenta la siguiente línea
            // $table->dropColumn('matricula');
        });
    }
}




