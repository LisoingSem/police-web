<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
      /**
       * Run the migrations.
       *
       * @return void
       */
      public function up()
      {
            Schema::create('module_permissions', function (Blueprint $table) {
                  $table->increments('id');
                  $table->string('parent_name')->nullable();
                  $table->integer('parent_id')->nullable();
                  $table->string('name')->nullable();
                  $table->integer('sort_no')->nullable();
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
            Schema::dropIfExists('module_permissions');
      }
};
