<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->longText('sub_po_no')->nullable();
            $table->longText('delivery_date')->nullable();
            $table->longText('hit_po_no')->nullable();
            $table->longText('delivery_hit_po')->nullable();
            $table->longText('color')->nullable();
            $table->longText('size')->nullable();
            $table->longText('ratio')->nullable();
            $table->bigInteger('qty')->nullable();
            $table->bigInteger('total_qty')->nullable();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
