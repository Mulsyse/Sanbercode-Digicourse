<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameReleseYearToReleaseYearInFilmsTable extends Migration
{
    public function up()
    {
        Schema::table('films', function (Blueprint $table) {
            //$table->renameColumn('relese_year', 'release_year');
        });
    }

    public function down()
    {
        Schema::table('films', function (Blueprint $table) {
            //$table->renameColumn('release_year', 'relese_year');
        });
    }
}