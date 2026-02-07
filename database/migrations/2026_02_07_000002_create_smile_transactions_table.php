<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Schema;

class CreateSmileTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smile_transactions', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('transaction_id')->unique(); // Unique transaction identifier
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key referencing users
            $table->decimal('amount', 10, 2); // Transaction amount
            $table->string('status'); // Transaction status
            $table->text('error_message')->nullable(); // Error message, if any
            $table->json('metadata')->nullable(); // JSON field for additional data
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('smile_transactions');
    }
}