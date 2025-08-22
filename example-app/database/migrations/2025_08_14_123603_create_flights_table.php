<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'sku')->unique();
            $table->string(column: 'name');
            $table->text(column: 'discription')->nullable();
            $table->decimal(column: 'price', total: 10, places: 2);
            $table->boolean(column: 'available')->default(value: true);
            $table->timestamps();
        });
        DB::table('products')->insert(values: [
            [
                'sku' => 'NU001',
                'name' => 'Áo thun nữ basic',
                'description' => 'Áo thun nữ chất liệu cotton, kiểu dáng đơn giản dễ phối đồ.',
                'price' => 150000,
                'available' => true,
            ],
            [
                'sku' => 'NU002',
                'name' => 'Váy xòe hoa nhí',
                'description' => 'Váy xòe họa tiết hoa nhí, phù hợp đi chơi, dạo phố.',
                'price' => 320000,
                'available' => true,
            ],
            [
                'sku' => 'NU003',
                'name' => 'Quần jean nữ rách gối',
                'description' => 'Quần jean nữ kiểu rách gối cá tính, chất liệu denim.',
                'price' => 280000,
                'available' => true,
            ],
            [
                'sku' => 'NU004',
                'name' => 'Áo sơ mi nữ trắng',
                'description' => 'Áo sơ mi nữ màu trắng, phù hợp đi làm, đi học.',
                'price' => 210000,
                'available' => true,
            ],
            [
                'sku' => 'NU005',
                'name' => 'Chân váy chữ A',
                'description' => 'Chân váy chữ A đơn giản, dễ phối với nhiều loại áo.',
                'price' => 190000,
                'available' => true,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
