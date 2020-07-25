<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing', function (Blueprint $table) {
            $table->bigIncrements('id');
          
            $table->string('name');
            $table->string('mail');
            $table->string('street-address');
            $table->string('State');
            $table->string('city');
            $table->string('region');
            $table->string('postal-Code');
            $table->string('webdesign');
            $table->string('webdesigntotal');
            $table->string('digitalmarketing');
            $table->string('digitalmarketingtotal');
            $table->string('audiovisual');
            $table->string('audiovisualtotal');
            $table->string('graphicdesign');
            $table->string('graphicdesigntotal');
            $table->string('branding');
            $table->string('brandingtotal');
            $table->string('marketingstrategies');
            $table->string('marketingstrategiestotal');
            $table->string('statebilling');
            $table->string('stateVariant');
            $table->string('total');
           
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
        Schema::dropIfExists('billing');
    }
}

