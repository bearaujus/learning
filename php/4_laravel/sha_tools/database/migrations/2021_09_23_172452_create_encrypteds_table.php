<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Decrypted;

class CreateEncryptedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encrypteds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('decrypted_id')->unsigned();
            $table->text('encrypted_text');
            $table->string('algo');

            // Fk -> decrypted
            $table->foreign('decrypted_id')
                ->references('id')
                ->on('decrypteds')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encrypteds');
    }
}
