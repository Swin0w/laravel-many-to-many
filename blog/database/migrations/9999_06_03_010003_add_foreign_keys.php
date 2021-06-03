<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            
            $table -> foreign('post_id', 'commentpost')
                   -> references('id')
                   -> on('posts');
        });
        Schema::table('post_user', function (Blueprint $table) {
            
            $table -> foreign('post_id', 'postuser')
                   -> references('id')
                   -> on('posts');
            $table -> foreign('user_id', 'userpost')
                   -> references('id')
                   -> on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {
            
            $table -> dropForeign('commentpost');

        });
        Schema::table('post_user', function (Blueprint $table) {
            
            $table -> dropForeign('postuser');
            $table -> dropForeign('userpost');
        });
    }
}
