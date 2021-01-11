<?php
//php artisan make:model Contact -m (значение -м как раз и создает данный файл)
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
            $table->string('name');
            $table->string('email');
            $table->string('subject');
            $table->text('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
    //php artisan migrate:rollback --step=3 (возможность откатистся 3 предыдущих миграции отменятся)
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
