<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('title', 200)->nullable();
            $table->string('site_name', 200)->nullable();
            $table->text('site_desc')->nullable();
            $table->string('email', 128)->nullable();
            $table->string('support_email')->nullable();
            $table->string('mobile', 128)->nullable();
            $table->integer('balance_reg')->nullable();
            $table->integer('email_notify')->nullable();
            $table->integer('sms_notify')->nullable();
            $table->integer('kyc')->nullable();
            $table->integer('transfer_charge')->nullable();
            $table->string('transfer_chargep', 32)->nullable();
            $table->string('min_transfer', 10)->nullable();
            $table->string('merchant_charge', 11)->nullable();
            $table->string('merchant_chargep', 32)->nullable();
            $table->string('invoice_charge', 11)->nullable();
            $table->string('invoice_chargep', 32)->nullable();
            $table->string('product_charge', 11)->nullable();
            $table->string('product_chargep', 32)->nullable();
            $table->string('single_charge', 11)->nullable();
            $table->string('single_chargep', 32)->nullable();
            $table->string('donation_charge', 11)->nullable();
            $table->string('donation_chargep', 32)->nullable();
            $table->string('subscription_charge', 11)->nullable();
            $table->string('subscription_chargep', 32)->nullable();
            $table->string('bill_charge', 32)->nullable();
            $table->string('bill_chargep', 32)->nullable();
            $table->string('virtual_createcharge', 32)->nullable();
            $table->string('virtual_createchargep', 32)->nullable();
            $table->string('virtual_charge', 32)->nullable();
            $table->string('virtual_chargep', 32)->nullable();
            $table->integer('email_verification')->nullable();
            $table->integer('sms_verification')->nullable();
            $table->integer('registration')->nullable();
            $table->string('withdraw_charge', 191)->nullable();
            $table->string('withdraw_chargep', 32)->nullable();
            $table->string('withdraw_limit', 32)->nullable();
            $table->string('starter_limit', 32)->nullable();
            $table->string('withdraw_duration', 32)->nullable();
            $table->integer('merchant');
            $table->integer('transfer')->default(1);
            $table->integer('request_money')->default(1);
            $table->integer('invoice')->default(1);
            $table->integer('store')->default(1);
            $table->integer('donation')->default(1);
            $table->integer('single')->default(1);
            $table->integer('subscription')->default(1);
            $table->integer('bill')->nullable()->default(1);
            $table->integer('vcard')->nullable();
            $table->text('livechat')->nullable();
            $table->integer('language')->nullable()->default(0);
            $table->integer('recaptcha')->nullable()->default(0);
            $table->string('next_settlement', 32)->nullable();
            $table->string('duration', 32)->nullable();
            $table->string('xperiod', 32)->nullable();
            $table->string('period', 32)->nullable();
            $table->integer('vc_no')->nullable();
            $table->double('vc_min')->nullable();
            $table->double('vc_max')->nullable();
            $table->text('btc_wallet')->nullable();
            $table->string('btc_sell', 32)->nullable();
            $table->string('btc_buy', 32)->nullable();
            $table->text('eth_wallet')->nullable();
            $table->string('eth_buy', 32)->nullable();
            $table->string('eth_sell', 32)->nullable();
            $table->integer('ethereum')->nullable();
            $table->integer('min_btcsell')->nullable();
            $table->integer('min_btcbuy')->nullable();
            $table->integer('min_ethsell')->nullable();
            $table->integer('min_ethbuy')->nullable();
            $table->integer('bitcoin')->nullable();
            $table->string('btc_charge', 32)->nullable();
            $table->string('eth_charge', 32)->nullable();
            $table->string('stripe_chargebacks', 32)->nullable();
            $table->text('welcome_message')->nullable();
            $table->integer('stripe_connect')->default(0);
            $table->string('lock_code', 32)->nullable();
            $table->integer('kyc_restriction')->nullable();
            $table->integer('country_restriction')->nullable();
            $table->string('debit_currency', 3)->nullable();
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('updated_at')->default('0000-00-00 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
