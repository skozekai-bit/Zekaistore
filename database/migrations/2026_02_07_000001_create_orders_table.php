<?php
use Illuminate database migrations migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('zone_id')->constrained();
            $table->foreignId('product_id')->constrained();
            $table->decimal('price', 10, 2);
            $table->string('utr_number')->nullable();
            $table->string('status');
            $table->timestamps();

            // Indexes
            $table->index(['user_id']);
            $table->index(['zone_id']);
            $table->index(['product_id']);
            $table->index(['status']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}