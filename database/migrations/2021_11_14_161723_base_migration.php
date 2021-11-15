<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BaseMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User', function (Blueprint $table){
            $table->id()->autoIncrement();
            $table->string('Name');
            $table->string('Surname');
            $table->string('Email');
            $table->string('Phone');
            $table->string('Address');
            $table->string('Password');
            $table->boolean('Role');
            $table->dateTime('Created_at')->nullable()->useCurrent();
            $table->dateTime('Updated_at')->nullable()->useCurrentOnUpdate();
        });

        Schema::create('Thing', function (Blueprint $table){
            $table->id()->autoIncrement();
            $table->string('Name');
            $table->integer('Price');
            $table->text('Description');
            $table->string('Img_URL');
            $table->dateTime('Created_at')->nullable()->useCurrent();
            $table->dateTime('Updated_at')->nullable()->useCurrentOnUpdate();
        });

        Schema::create('Order', function (Blueprint $table){
            $table->id()->autoIncrement();
            $table->dateTime('Date');
            $table->dateTime('Created_at')->nullable()->useCurrent();
            $table->dateTime('Updated_at')->nullable()->useCurrentOnUpdate();
        });

        Schema::create('Category', function (Blueprint $table){
            $table->id()->autoIncrement();
            $table->string('Name');
            $table->dateTime('Created_at')->nullable()->useCurrent();
            $table->dateTime('Updated_at')->nullable()->useCurrentOnUpdate();
        });

        Schema::table('Thing', function (Blueprint $table){
            $table->after('Img_URL', function ($table){
                $table->foreignId('Id_User')->constrained('User')->onDelete('cascade');
                $table->foreignId('Id_Category')->constrained('Category')->onDelete('cascade');
            });
        });

        Schema::table('Order', function (Blueprint $table){
            $table->after('Date', function ($table){
                $table->foreignId('Id_User')->constrained('User')->onDelete('cascade');
                $table->foreignId('Id_Thing')->constrained('Thing')->onDelete('cascade');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('User');
        Schema::dropIfExists('Thing');
        Schema::dropIfExists('Order');
        Schema::dropIfExists('Category');
    }
}
