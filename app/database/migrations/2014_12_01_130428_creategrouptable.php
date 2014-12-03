<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupTable
extends BaseMigration
{
    public function up()
    {
        Schema::create("group", function(Blueprint $table)
        {
            $this
                ->setTable($table)
                ->addPrimary()
                ->addString("name")
                ->addTimestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists("group");
    }
}

