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
        Schema::create('majors', function (Blueprint $table) {
            $table->unsignedBigInteger('major_id')->autoIncrement();// สร้าง primary key ในรูปแบบ default
            $table->string('name', 50);
            $table->string('name_en', 50);
            $table->timestamps();
        });

        // ตัวอย่างการแทรกข้อมูลลงในตาราง
        DB::table('majors')->insert([
            [
                'name' => 'ปุ๊กกี้',
                'name_en' => 'Pookky',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'วี',
                'name_en' => 'Teahyoung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'กิ๊ก',
                'name_en' => 'Kik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'คอมแคมป์',
                'name_en' => 'Comcamp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'นมวนิลา',
                'name_en' => 'vanilla',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('majors');
    }
};
