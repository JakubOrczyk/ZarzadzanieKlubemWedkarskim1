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
        Schema::create('lake_fish', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('lake_id');
            $table->foreign('lake_id')->references('id')->on('lakes')->onDelete('cascade');

            $table->unsignedBigInteger('fish_id');
            $table->foreign('fish_id')->references('id')->on('fishes')->onDelete('cascade');

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
        Schema::dropIfExists('lake_fish');
    }
};
