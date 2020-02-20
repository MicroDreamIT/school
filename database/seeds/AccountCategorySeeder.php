<?php

use Illuminate\Database\Seeder;

class AccountCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['Bank Accounts',''],
            ['Bank OCC A/c',''],
            ['Bank OD A/c',''],
            ['Branch / Divisions',''],
            ['Cash-in-Hand',''],
            ['Current Assets',''],
            ['Current Liabilities',''],
            ['Direct Expenses',''],
            ['Direct Incomes',''],
            ['Duties & Taxes',''],
            ['Expenses (Direct)',''],
            ['Expenses (Indirect)',''],
            ['Fixed Assets',''],
            ['Income (Direct)',''],
            ['Income (Indirect)',''],
            ['Indirect Expenses',''],
            ['Indirect Incomes',''],
            ['Investments',''],
            ['Loans & Advances (Assets)',''],
            ['Loans (Liability)',''],
            ['Misc. Expenses (ASSET)',''],
            ['Provisions',''],
            ['Purchase Accounts',''],
            ['Reserves & Surplus',''],
            ['Retained Earnings',''],
            ['Secured Loans',''],
            ['Stock-in-Hand',''],
            ['Sundry Creditors',''],
            ['Sundry Debtors',''],
            ['Suspense A/c',''],
            ['Unsecured Loans',''],

        ];

        foreach($data as $obj){
            DB::table('account_categories')->insert([
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'created_by' => 1,
                'ac_name' => $obj[0],
                'ac_type' => $obj[1],
                'status' => 1
            ]);
        }
    }
}
