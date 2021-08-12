<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStarsTable extends Migration
{
    protected $indexes = [
        'system_id', 'constellation_id', 'region_id'
    ];
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('stars')) {
            Schema::create('stars', function (Blueprint $table) {
                $table->integer('star_id');
                $table->integer('system_id');
                $table->integer('constellation_id');
                $table->integer('region_id');
                $table->string('name');
                $table->integer('type_id');

                $table->primary(['star_id']);
                $table->index(['region_id']);
                $table->index(['constellation_id']);
                $table->index(['system_id']);

            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('stars');
    }
}
