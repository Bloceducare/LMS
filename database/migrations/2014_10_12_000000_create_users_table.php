<?php

use App\Models\Group;
use App\Models\Track;
use App\Models\Cohort;
use App\Models\Country;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->ulid('reference')->unique();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('role', 191)->default('STUDENT');
            $table->boolean("active")->default(true);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('wallet_address')->unique()->nullable();
            $table->string('resident_address')->nullable();
            $table->foreignIdFor(Cohort::class)->nullable();
            $table->foreignIdFor(Track::class)->nullable();
            $table->foreignIdFor(Country::class)->nullable();
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
        Schema::dropIfExists('users');
    }
};
