<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => '1',
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            1 => 
            array (
                'id' => '2',
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            2 => 
            array (
                'id' => '3',
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            3 => 
            array (
                'id' => '4',
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            4 => 
            array (
                'id' => '5',
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            5 => 
            array (
                'id' => '6',
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            6 => 
            array (
                'id' => '7',
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            7 => 
            array (
                'id' => '8',
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            8 => 
            array (
                'id' => '9',
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            9 => 
            array (
                'id' => '10',
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            10 => 
            array (
                'id' => '11',
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            11 => 
            array (
                'id' => '12',
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            12 => 
            array (
                'id' => '13',
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            13 => 
            array (
                'id' => '14',
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            14 => 
            array (
                'id' => '15',
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            15 => 
            array (
                'id' => '16',
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            16 => 
            array (
                'id' => '17',
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            17 => 
            array (
                'id' => '18',
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            18 => 
            array (
                'id' => '19',
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            19 => 
            array (
                'id' => '20',
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            20 => 
            array (
                'id' => '21',
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            21 => 
            array (
                'id' => '22',
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            22 => 
            array (
                'id' => '23',
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            23 => 
            array (
                'id' => '24',
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            24 => 
            array (
                'id' => '25',
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            25 => 
            array (
                'id' => '26',
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            26 => 
            array (
                'id' => '27',
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            27 => 
            array (
                'id' => '28',
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            28 => 
            array (
                'id' => '29',
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            29 => 
            array (
                'id' => '30',
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            30 => 
            array (
                'id' => '31',
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            31 => 
            array (
                'id' => '32',
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            32 => 
            array (
                'id' => '33',
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            33 => 
            array (
                'id' => '34',
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            34 => 
            array (
                'id' => '35',
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            35 => 
            array (
                'id' => '36',
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            36 => 
            array (
                'id' => '37',
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            37 => 
            array (
                'id' => '38',
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            38 => 
            array (
                'id' => '39',
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            39 => 
            array (
                'id' => '40',
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            40 => 
            array (
                'id' => '41',
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            41 => 
            array (
                'id' => '57',
                'key' => 'browse_services',
                'table_name' => 'services',
                'created_at' => '2019-07-01 15:54:24',
                'updated_at' => '2019-07-01 15:54:24',
            ),
            42 => 
            array (
                'id' => '58',
                'key' => 'read_services',
                'table_name' => 'services',
                'created_at' => '2019-07-01 15:54:24',
                'updated_at' => '2019-07-01 15:54:24',
            ),
            43 => 
            array (
                'id' => '59',
                'key' => 'edit_services',
                'table_name' => 'services',
                'created_at' => '2019-07-01 15:54:24',
                'updated_at' => '2019-07-01 15:54:24',
            ),
            44 => 
            array (
                'id' => '60',
                'key' => 'add_services',
                'table_name' => 'services',
                'created_at' => '2019-07-01 15:54:24',
                'updated_at' => '2019-07-01 15:54:24',
            ),
            45 => 
            array (
                'id' => '61',
                'key' => 'delete_services',
                'table_name' => 'services',
                'created_at' => '2019-07-01 15:54:24',
                'updated_at' => '2019-07-01 15:54:24',
            ),
            46 => 
            array (
                'id' => '72',
                'key' => 'browse_currencies',
                'table_name' => 'currencies',
                'created_at' => '2019-07-01 19:55:32',
                'updated_at' => '2019-07-01 19:55:32',
            ),
            47 => 
            array (
                'id' => '73',
                'key' => 'read_currencies',
                'table_name' => 'currencies',
                'created_at' => '2019-07-01 19:55:32',
                'updated_at' => '2019-07-01 19:55:32',
            ),
            48 => 
            array (
                'id' => '74',
                'key' => 'edit_currencies',
                'table_name' => 'currencies',
                'created_at' => '2019-07-01 19:55:32',
                'updated_at' => '2019-07-01 19:55:32',
            ),
            49 => 
            array (
                'id' => '75',
                'key' => 'add_currencies',
                'table_name' => 'currencies',
                'created_at' => '2019-07-01 19:55:32',
                'updated_at' => '2019-07-01 19:55:32',
            ),
            50 => 
            array (
                'id' => '76',
                'key' => 'delete_currencies',
                'table_name' => 'currencies',
                'created_at' => '2019-07-01 19:55:32',
                'updated_at' => '2019-07-01 19:55:32',
            ),
            51 => 
            array (
                'id' => '77',
                'key' => 'browse_payment_methods',
                'table_name' => 'payment_methods',
                'created_at' => '2019-07-01 19:58:18',
                'updated_at' => '2019-07-01 19:58:18',
            ),
            52 => 
            array (
                'id' => '78',
                'key' => 'read_payment_methods',
                'table_name' => 'payment_methods',
                'created_at' => '2019-07-01 19:58:18',
                'updated_at' => '2019-07-01 19:58:18',
            ),
            53 => 
            array (
                'id' => '79',
                'key' => 'edit_payment_methods',
                'table_name' => 'payment_methods',
                'created_at' => '2019-07-01 19:58:18',
                'updated_at' => '2019-07-01 19:58:18',
            ),
            54 => 
            array (
                'id' => '80',
                'key' => 'add_payment_methods',
                'table_name' => 'payment_methods',
                'created_at' => '2019-07-01 19:58:18',
                'updated_at' => '2019-07-01 19:58:18',
            ),
            55 => 
            array (
                'id' => '81',
                'key' => 'delete_payment_methods',
                'table_name' => 'payment_methods',
                'created_at' => '2019-07-01 19:58:18',
                'updated_at' => '2019-07-01 19:58:18',
            ),
            56 => 
            array (
                'id' => '82',
                'key' => 'browse_conversations',
                'table_name' => 'conversations',
                'created_at' => '2019-07-02 00:08:44',
                'updated_at' => '2019-07-02 00:08:44',
            ),
            57 => 
            array (
                'id' => '83',
                'key' => 'read_conversations',
                'table_name' => 'conversations',
                'created_at' => '2019-07-02 00:08:44',
                'updated_at' => '2019-07-02 00:08:44',
            ),
            58 => 
            array (
                'id' => '84',
                'key' => 'edit_conversations',
                'table_name' => 'conversations',
                'created_at' => '2019-07-02 00:08:44',
                'updated_at' => '2019-07-02 00:08:44',
            ),
            59 => 
            array (
                'id' => '85',
                'key' => 'add_conversations',
                'table_name' => 'conversations',
                'created_at' => '2019-07-02 00:08:44',
                'updated_at' => '2019-07-02 00:08:44',
            ),
            60 => 
            array (
                'id' => '86',
                'key' => 'delete_conversations',
                'table_name' => 'conversations',
                'created_at' => '2019-07-02 00:08:44',
                'updated_at' => '2019-07-02 00:08:44',
            ),
            61 => 
            array (
                'id' => '92',
                'key' => 'browse_payments',
                'table_name' => 'payments',
                'created_at' => '2019-07-02 16:05:59',
                'updated_at' => '2019-07-02 16:05:59',
            ),
            62 => 
            array (
                'id' => '93',
                'key' => 'read_payments',
                'table_name' => 'payments',
                'created_at' => '2019-07-02 16:05:59',
                'updated_at' => '2019-07-02 16:05:59',
            ),
            63 => 
            array (
                'id' => '94',
                'key' => 'edit_payments',
                'table_name' => 'payments',
                'created_at' => '2019-07-02 16:05:59',
                'updated_at' => '2019-07-02 16:05:59',
            ),
            64 => 
            array (
                'id' => '95',
                'key' => 'add_payments',
                'table_name' => 'payments',
                'created_at' => '2019-07-02 16:05:59',
                'updated_at' => '2019-07-02 16:05:59',
            ),
            65 => 
            array (
                'id' => '96',
                'key' => 'delete_payments',
                'table_name' => 'payments',
                'created_at' => '2019-07-02 16:05:59',
                'updated_at' => '2019-07-02 16:05:59',
            ),
            66 => 
            array (
                'id' => '97',
                'key' => 'browse_deposits',
                'table_name' => 'deposits',
                'created_at' => '2019-07-03 21:44:48',
                'updated_at' => '2019-07-03 21:44:48',
            ),
            67 => 
            array (
                'id' => '98',
                'key' => 'read_deposits',
                'table_name' => 'deposits',
                'created_at' => '2019-07-03 21:44:48',
                'updated_at' => '2019-07-03 21:44:48',
            ),
            68 => 
            array (
                'id' => '99',
                'key' => 'edit_deposits',
                'table_name' => 'deposits',
                'created_at' => '2019-07-03 21:44:48',
                'updated_at' => '2019-07-03 21:44:48',
            ),
            69 => 
            array (
                'id' => '100',
                'key' => 'add_deposits',
                'table_name' => 'deposits',
                'created_at' => '2019-07-03 21:44:48',
                'updated_at' => '2019-07-03 21:44:48',
            ),
            70 => 
            array (
                'id' => '101',
                'key' => 'delete_deposits',
                'table_name' => 'deposits',
                'created_at' => '2019-07-03 21:44:48',
                'updated_at' => '2019-07-03 21:44:48',
            ),
            71 => 
            array (
                'id' => '102',
                'key' => 'browse_withdraws',
                'table_name' => 'withdraws',
                'created_at' => '2019-07-05 20:44:45',
                'updated_at' => '2019-07-05 20:44:45',
            ),
            72 => 
            array (
                'id' => '103',
                'key' => 'read_withdraws',
                'table_name' => 'withdraws',
                'created_at' => '2019-07-05 20:44:45',
                'updated_at' => '2019-07-05 20:44:45',
            ),
            73 => 
            array (
                'id' => '104',
                'key' => 'edit_withdraws',
                'table_name' => 'withdraws',
                'created_at' => '2019-07-05 20:44:45',
                'updated_at' => '2019-07-05 20:44:45',
            ),
            74 => 
            array (
                'id' => '105',
                'key' => 'add_withdraws',
                'table_name' => 'withdraws',
                'created_at' => '2019-07-05 20:44:45',
                'updated_at' => '2019-07-05 20:44:45',
            ),
            75 => 
            array (
                'id' => '106',
                'key' => 'delete_withdraws',
                'table_name' => 'withdraws',
                'created_at' => '2019-07-05 20:44:45',
                'updated_at' => '2019-07-05 20:44:45',
            ),
            76 => 
            array (
                'id' => '112',
                'key' => 'browse_service_categories',
                'table_name' => 'service_categories',
                'created_at' => '2019-07-11 10:32:01',
                'updated_at' => '2019-07-11 10:32:01',
            ),
            77 => 
            array (
                'id' => '113',
                'key' => 'read_service_categories',
                'table_name' => 'service_categories',
                'created_at' => '2019-07-11 10:32:01',
                'updated_at' => '2019-07-11 10:32:01',
            ),
            78 => 
            array (
                'id' => '114',
                'key' => 'edit_service_categories',
                'table_name' => 'service_categories',
                'created_at' => '2019-07-11 10:32:01',
                'updated_at' => '2019-07-11 10:32:01',
            ),
            79 => 
            array (
                'id' => '115',
                'key' => 'add_service_categories',
                'table_name' => 'service_categories',
                'created_at' => '2019-07-11 10:32:01',
                'updated_at' => '2019-07-11 10:32:01',
            ),
            80 => 
            array (
                'id' => '116',
                'key' => 'delete_service_categories',
                'table_name' => 'service_categories',
                'created_at' => '2019-07-11 10:32:01',
                'updated_at' => '2019-07-11 10:32:01',
            ),
            81 => 
            array (
                'id' => '117',
                'key' => 'browse_service_sub_categories',
                'table_name' => 'service_sub_categories',
                'created_at' => '2019-07-11 10:45:23',
                'updated_at' => '2019-07-11 10:45:23',
            ),
            82 => 
            array (
                'id' => '118',
                'key' => 'read_service_sub_categories',
                'table_name' => 'service_sub_categories',
                'created_at' => '2019-07-11 10:45:23',
                'updated_at' => '2019-07-11 10:45:23',
            ),
            83 => 
            array (
                'id' => '119',
                'key' => 'edit_service_sub_categories',
                'table_name' => 'service_sub_categories',
                'created_at' => '2019-07-11 10:45:23',
                'updated_at' => '2019-07-11 10:45:23',
            ),
            84 => 
            array (
                'id' => '120',
                'key' => 'add_service_sub_categories',
                'table_name' => 'service_sub_categories',
                'created_at' => '2019-07-11 10:45:23',
                'updated_at' => '2019-07-11 10:45:23',
            ),
            85 => 
            array (
                'id' => '121',
                'key' => 'delete_service_sub_categories',
                'table_name' => 'service_sub_categories',
                'created_at' => '2019-07-11 10:45:23',
                'updated_at' => '2019-07-11 10:45:23',
            ),
            86 => 
            array (
                'id' => '122',
                'key' => 'browse_notifications',
                'table_name' => 'notifications',
                'created_at' => '2019-07-21 09:06:47',
                'updated_at' => '2019-07-21 09:06:47',
            ),
            87 => 
            array (
                'id' => '123',
                'key' => 'read_notifications',
                'table_name' => 'notifications',
                'created_at' => '2019-07-21 09:06:47',
                'updated_at' => '2019-07-21 09:06:47',
            ),
            88 => 
            array (
                'id' => '124',
                'key' => 'edit_notifications',
                'table_name' => 'notifications',
                'created_at' => '2019-07-21 09:06:47',
                'updated_at' => '2019-07-21 09:06:47',
            ),
            89 => 
            array (
                'id' => '125',
                'key' => 'add_notifications',
                'table_name' => 'notifications',
                'created_at' => '2019-07-21 09:06:47',
                'updated_at' => '2019-07-21 09:06:47',
            ),
            90 => 
            array (
                'id' => '126',
                'key' => 'delete_notifications',
                'table_name' => 'notifications',
                'created_at' => '2019-07-21 09:06:47',
                'updated_at' => '2019-07-21 09:06:47',
            ),
            91 => 
            array (
                'id' => '127',
                'key' => 'browse_balances',
                'table_name' => 'balances',
                'created_at' => '2019-09-02 00:58:05',
                'updated_at' => '2019-09-02 00:58:05',
            ),
            92 => 
            array (
                'id' => '128',
                'key' => 'read_balances',
                'table_name' => 'balances',
                'created_at' => '2019-09-02 00:58:05',
                'updated_at' => '2019-09-02 00:58:05',
            ),
            93 => 
            array (
                'id' => '129',
                'key' => 'edit_balances',
                'table_name' => 'balances',
                'created_at' => '2019-09-02 00:58:05',
                'updated_at' => '2019-09-02 00:58:05',
            ),
            94 => 
            array (
                'id' => '130',
                'key' => 'add_balances',
                'table_name' => 'balances',
                'created_at' => '2019-09-02 00:58:05',
                'updated_at' => '2019-09-02 00:58:05',
            ),
            95 => 
            array (
                'id' => '131',
                'key' => 'delete_balances',
                'table_name' => 'balances',
                'created_at' => '2019-09-02 00:58:05',
                'updated_at' => '2019-09-02 00:58:05',
            ),
        ));
        
        
    }
}