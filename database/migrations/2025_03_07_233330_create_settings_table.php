<?php

use App\Models\setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key'=>'_site_name',
            'label'=>'Judul Situs',
            'value'=>'Andalus',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_location',
            'label'=>'Alamat',
            'value'=>'Jl. Flores IV No. 25 RT 001/RW 010, Aren Jaya, Kec. Bekasi Timur, Kota Bekasi',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_youtube',
            'label'=>'Youtube',
            'value'=>'https://youtube.com',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_instagram',
            'label'=>'Instagram',
            'value'=>'https://instagram.com',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_x',
            'label'=>'X',
            'value'=>'https://x.com',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_facebook',
            'label'=>'Facebook',
            'value'=>'https://facebook.com',
            'type'=>'text',
        ]);

        setting::create([
            'key'=>'_site_company',
            'label'=>'Nama Perusahaan',
            'value'=>'PT. Andalus Teknologi Indonesia',
            'type'=>'text',
        ]);
        
        setting::create([
            'key'=>'_mail',
            'label'=>'E-mail',
            'value'=>'andalusteknologi@gmail.com',
            'type'=>'text',
        ]);
        
        setting::create([
            'key'=>'_phone',
            'label'=>'Telepon',
            'value'=>'+62 878 6220 1656',
            'type'=>'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
