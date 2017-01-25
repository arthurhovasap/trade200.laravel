<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\DatabaseManager;

class CreateUserTable extends Migration
{
    protected $table = 'tbl_user';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->integer('role_id', 2);
            $table->integer('company_id', 11);
            $table->integer('post_id', 3);
            $table->integer('status_id', 3);
            $table->string('name');
            $table->string('email', 100)->unique();
            $table->string('email_work', 100);
            $table->string('email_home', 100);
            $table->string('tel_home', 20);
            $table->string('tel_work', 20);
            $table->string('password', 60);
            $table->integer('created_dt', 11);
            $table->integer('updated_dt', 11);
            $table->integer('by_user_id', 11);
            $table->index('status_id', 'post_id', 'company_id', 'role_id');
            $table->foreign('post_id')->references('id')->on('tbl_post');
            $table->foreign('company_id')->references('id')->on('tbl_company');
            $table->foreign('role_id')->references('id')->on('tbl_role');
            $table->foreign('status_id')->references('id')->on('tbl_status');
            $table->rememberToken();
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
        Schema::drop($this->table);
    }
}
