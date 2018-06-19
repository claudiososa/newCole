<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKeyForeingToPublications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('publications', function(Blueprint $table){
        $table->foreign('category_id')->references('id')->on('categories');
        $table->foreign('user_id')->references('id')->on('users');
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('publications', function (Blueprint $table){
          $table->dropForeign('publications_category_id_foreign');
          $table->dropForeign('publications_user_id_foreign');
        });
    }
}
