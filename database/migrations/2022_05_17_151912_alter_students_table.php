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
        Schema::table('students', function (Blueprint $table) {
            $table->renameColumn('name','fullname');
            $table->text('address')->after('birth_date');
            $table->dropColumn('GPA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->renameColumn('fullname','name');
            $table->dropColumn('address');
            $table->decimal('GPA', 3, 2)->default(1.00)->after('major');
        });
    }
};
