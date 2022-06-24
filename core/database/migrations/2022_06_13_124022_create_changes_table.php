<?php



use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;



class CreateChangesTable extends Migration

{

    /**

     * Run the migrations.

     *

     * @return void

     */

    public function up()

    {

        Schema::create('changes', function (Blueprint $table) {

            $table->id();

            $table->string('title_arabic');
            $table->string('date_arabic');
            $table->string('title_english');
            $table->string('date_english');
            $table->string('file_ar');
            $table->string('file_en');
            $table->string('section');

            $table->timestamps();

        });

    }



    /**

     * Reverse the migrations.

     *

     * @return void

     */

    public function down()

    {

        Schema::dropIfExists('changes');

    }

}
