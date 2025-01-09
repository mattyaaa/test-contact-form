<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->enum('gender', ['男性', '女性', 'その他']);
            $table->string('email')->unique();
            $table->dropColumn(['phone1', 'phone2', 'phone3']);
            $table->string('tel');
            $table->string('address');
            $table->string('building')->nullable();
            $table->string('inquiry_type');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->text('content');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
