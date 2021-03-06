<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatesTable extends Migration
{
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->unsignedInteger('amount');
            $table->string('rate_type');
            $table->foreignIdFor(app('rate_category'));
            $table->unsignedInteger('participants_limit');
            $table->foreignIdFor(app('user'), 'creator_id');
            $table->foreignIdFor(app('user'), 'updater_id');
            $table->timestamps();
        });
    }
}
