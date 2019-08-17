<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Datafunc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datafunc', function (Blueprint $table) {

            $table->increments('id');
            $table->string('csname')->nullable();
            $table->string('no_job')->nullable();
            $table->string('bl_number')->nullable();
            $table->text('ponumber')->nullable();
            $table->text('ibd_num')->nullable();
            $table->date('tglterimaibd')->nullable();
            $table->text('businesunit')->nullable();
            $table->text('descofgoods')->nullable();
            $table->date('pre_alert')->nullable();
            $table->text('city')->nullable();
            $table->date('docs_coml_date')->nullable();
            $table->text('inv_num')->nullable();
            $table->date('inv_date')->nullable();
            $table->text('branch')->nullable();
            $table->text('prtofdiscarge')->nullable();
            $table->text('shipper')->nullable();
            $table->text('consigne')->nullable();
            $table->text('notify')->nullable();
            $table->text('supplier')->nullable();
            $table->date('atd')->nullable();
            $table->date('eta')->nullable();
            $table->date('ata')->nullable();
            $table->text('lartas')->nullable();
            $table->text('type_permit')->nullable();
            $table->date('permit_star')->nullable();
            $table->date('permit_ready')->nullable();
            $table->text('jenisbl')->nullable();
            $table->text('softcopy')->nullable();
            $table->date('tglteimasoft')->nullable();
            $table->text('hardcopy')->nullable();
            $table->date('tgltrimahard')->nullable();
            $table->text('carier')->nullable();
            $table->text('pieces')->nullable();
            $table->string('pkg')->nullable();
            $table->string('grossweight')->nullable();
            $table->string('cubicmeter')->nullable();
            $table->string('texabeleweight')->nullable();
            $table->string('total_container_20')->nullable();
            $table->string('total_container_40')->nullable();
            $table->string('total_container_40h')->nullable();
            $table->string('total_container_20ref')->nullable();
            $table->string('total_container_40ref')->nullable();
            $table->string('total_container_45')->nullable();
            $table->string('sum_container')->nullable();
            $table->string('total_teus')->nullable();
            $table->text('type')->nullable();
            $table->date('coo')->nullable();
            $table->date('insurance')->nullable();
            $table->date('cipl')->nullable();
            $table->date('coa')->nullable();
            $table->date('hc')->nullable();
            $table->date('phyto')->nullable();
            $table->date('ls')->nullable();
            $table->date('rekombpom')->nullable();
            $table->date('kt2')->nullable();
            $table->date('kt9')->nullable();
            $table->date('responlartas')->nullable();
            $table->date('Recs_respon_lartas')->nullable();
/////////////////////////////////////////////////////////////////
            $table->text('ajunumber')->nullable();
            $table->date('pibaprofdata')->nullable();
            $table->date('inputtglinftransfer')->nullable();
            $table->date('manifest')->nullable();
            $table->date('bc11')->nullable();
            $table->date('resc_sppb')->nullable();
//////////////////////////////////////////////////////////////////
            $table->text('lokasigudang')->nullable();
            $table->date('planpickupdo')->nullable();
            $table->date('pengantardo')->nullable();
            $table->date('actualdo')->nullable();
            $table->date('noa')->nullable();
            $table->text('finishstripinf')->nullable();
            $table->date('gateoutcy')->nullable();
            $table->text('level1')->nullable();
            $table->text('level2')->nullable();
            $table->text('jobstatus')->nullable();
            $table->text('remarkjob')->nullable();
            $table->text('departemen')->nullable();
/////////////////////////////////////////////////////////////////
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
        Schema::dropIfExists('datafunc');
    }
}
