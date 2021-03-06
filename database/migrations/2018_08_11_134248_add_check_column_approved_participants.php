<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCheckColumnApprovedParticipants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::table('approved_participants', function (Blueprint $table) {
			$table->string('check');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('approved_participants', function (Blueprint $table) {
			$table->dropColumn('check');
		});
	}
}
