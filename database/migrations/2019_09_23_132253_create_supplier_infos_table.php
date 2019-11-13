<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('corporate_name');
            $table->string('adress');
            $table->string('default_payement');
            $table->string('default_currency');
            $table->string('numero_siret');
            $table->string('tva_intracom');
            $table->string('contacts');
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
        Schema::dropIfExists('supplier_infos');
    }
}
