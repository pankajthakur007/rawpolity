<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManageMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_members', function (Blueprint $table) {
            $table->bigIncrements('id');  
            $table->string('name');
            $table->string('image');
            $table->string('member_type');
            $table->string('year')->nullable();
            $table->string('ministry')->nullable();
            $table->string('party_name')->nullable();
            $table->string('party_symbol')->nullable();
            $table->string('constituency')->nullable();
            $table->string('margin')->nullable();
            $table->string('religion')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('age')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('maritial_status')->nullable();
            $table->string('spouse')->nullable();
            $table->string('siblings')->nullable();
            $table->string('family_business')->nullable();
            $table->string('educational_qualification')->nullable();
            $table->string('category')->nullable();
            $table->string('books_written')->nullable();
            $table->string('inspirations')->nullable();
            $table->string('political_mentor')->nullable();
            $table->string('hobbies')->nullable();
            $table->string('jobs_done')->nullable();
            $table->string('food_type')->nullable();
            $table->string('personal_website')->nullable();
            $table->string('email_id')->nullable();
            $table->string('PMO_email_id')->nullable();
            $table->string('telephone')->nullable();
            $table->string('PMO_helpline')->nullable();
            $table->string('fax')->nullable();
            $table->string('office_address')->nullable();
            $table->string('residential_address')->nullable();
            $table->string('total_rating')->nullable();
            $table->string('total_raw_rating')->nullable();
            $table->string('total_votes')->nullable();
            $table->string('upliftment_in_education_and_health')->nullable();
            $table->string('law_and_order')->nullable();
            $table->string('economic_and_administrative_development')->nullable();
            $table->string('religious_and_communal_harmony')->nullable();
            $table->string('connectivity_with_people_and_grievance_redressal')->nullable();
            $table->string('member_img')->nullable();
            $table->text('description')->nullable();
            $table->string('career_type')->nullable();
            $table->integer('status')->default('1');
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
        Schema::dropIfExists('manage_members');
    }
}
