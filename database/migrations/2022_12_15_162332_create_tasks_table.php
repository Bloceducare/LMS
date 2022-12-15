<?php

use App\Models\Group;
use App\Models\Track;
use App\Models\Cohort;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->ulid('reference')->unique();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->string('link')->nullable();
            $table->timestamp('deadline')->nullable();
            $table->foreignIdFor(Cohort::class)->nullable();
            $table->foreignIdFor(Track::class)->nullable();
            $table->foreignIdFor(Group::class)->nullable();
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
        Schema::dropIfExists('tasks');
    }
};
