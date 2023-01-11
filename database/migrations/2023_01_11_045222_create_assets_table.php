<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
@@ -15,6 +15,10 @@ public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis');
            $table->integer('harga');
            $table->string('status', 20);
            $table->timestamps();
        });
    }
@@ -28,4 +32,4 @@ public function down()
    {
        Schema::dropIfExists('assets');
    };
}
