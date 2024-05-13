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
        Schema::table('posts', function (Blueprint $table) {
            // 'user_id'カラムを追加し、'users'テーブルの'id'カラムを参照する外部キー制約を追加
            $table->foreignId('user_id')->after('image')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // 'user_id'カラムを削除
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};

