<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaryaatiPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caryaati_packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            // $table->string('contact_period')
            $table->string('monthly_price')->default(0);
            $table->string('yearly_price')->default(0);
            $table->string('no_of_cars')->nullable();
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
        Schema::dropIfExists('caryaati_packages');
    }
}
