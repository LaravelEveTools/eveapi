<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefreshTokenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('refresh_tokens')) {
            Schema::create('refresh_tokens', function (Blueprint $table) {
                $table->bigInteger('character_id');
                $table->smallInteger('version');
                $table->integer('user_id');
                $table->mediumText('refresh_token');
                $table->longText('scopes');
                $table->text('token');
                $table->char('character_owner_hash', 255);
                $table->timestamps();
                $table->softDeletes();
                $table->primary(['character_id']);
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
        Schema::dropIfExists('refresh_token');
    }
}
