<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => '1',
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => '1',
                'server_side' => '0',
                'details' => NULL,
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => '1',
                'server_side' => '0',
                'details' => NULL,
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            2 => 
            array (
                'id' => '3',
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => '1',
                'server_side' => '0',
                'details' => NULL,
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            3 => 
            array (
                'id' => '4',
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'TCG\\Voyager\\Models\\Category',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => '1',
                'server_side' => '0',
                'details' => NULL,
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            4 => 
            array (
                'id' => '5',
                'name' => 'posts',
                'slug' => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => 'voyager-news',
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => '1',
                'server_side' => '0',
                'details' => NULL,
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            5 => 
            array (
                'id' => '6',
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Page',
                'display_name_plural' => 'Pages',
                'icon' => 'voyager-file-text',
                'model_name' => 'TCG\\Voyager\\Models\\Page',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => '1',
                'server_side' => '0',
                'details' => NULL,
                'created_at' => '2019-06-30 18:59:02',
                'updated_at' => '2019-06-30 18:59:02',
            ),
            6 => 
            array (
                'id' => '10',
                'name' => 'services',
                'slug' => 'services',
                'display_name_singular' => 'Service',
                'display_name_plural' => 'Services',
                'icon' => 'voyager-truck',
                'model_name' => 'App\\Service',
                'policy_name' => 'TCG\\Voyager\\Policies\\ServicePolicy',
                'controller' => 'App\\Http\\Controllers\\Voyager\\ServiceController',
                'description' => NULL,
                'generate_permissions' => '1',
                'server_side' => '0',
                'details' => '{"order_column":"the_status","order_display_column":"the_status","order_direction":"desc","default_search_key":"the_status","scope":null}',
                'created_at' => '2019-07-01 15:54:24',
                'updated_at' => '2019-09-05 11:37:40',
            ),
            7 => 
            array (
                'id' => '13',
                'name' => 'currencies',
                'slug' => 'currencies',
                'display_name_singular' => 'Currency',
                'display_name_plural' => 'Currencies',
                'icon' => NULL,
                'model_name' => 'App\\Currency',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => '1',
                'server_side' => '0',
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-07-01 19:55:32',
                'updated_at' => '2019-08-13 22:30:30',
            ),
            8 => 
            array (
                'id' => '14',
                'name' => 'payment_methods',
                'slug' => 'payment-methods',
                'display_name_singular' => 'Payment Method',
                'display_name_plural' => 'Payment Methods',
                'icon' => NULL,
                'model_name' => 'App\\PaymentMethod',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => '1',
                'server_side' => '0',
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-07-01 19:58:18',
                'updated_at' => '2019-07-01 19:58:18',
            ),
            9 => 
            array (
                'id' => '15',
                'name' => 'conversations',
                'slug' => 'conversations',
                'display_name_singular' => 'Conversation',
                'display_name_plural' => 'Conversations',
                'icon' => NULL,
                'model_name' => 'App\\Conversation',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Voyager\\ConversationController',
                'description' => NULL,
                'generate_permissions' => '1',
                'server_side' => '0',
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-07-02 00:08:44',
                'updated_at' => '2019-07-02 01:39:46',
            ),
            10 => 
            array (
                'id' => '17',
                'name' => 'payments',
                'slug' => 'payments',
                'display_name_singular' => 'Payment',
                'display_name_plural' => 'Payments',
                'icon' => NULL,
                'model_name' => 'App\\Payment',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\Voyager\\PaymentController',
                'description' => NULL,
                'generate_permissions' => '1',
                'server_side' => '0',
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-07-02 16:05:59',
                'updated_at' => '2019-07-11 17:25:57',
            ),
            11 => 
            array (
                'id' => '18',
                'name' => 'deposits',
                'slug' => 'deposits',
                'display_name_singular' => 'Deposit',
                'display_name_plural' => 'Deposits',
                'icon' => 'voyager-paper-plane',
                'model_name' => 'App\\Deposit',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => '1',
                'server_side' => '1',
                'details' => '{"order_column":"the_queue","order_display_column":"the_queue","order_direction":"asc","default_search_key":"the_queue","scope":null}',
                'created_at' => '2019-07-03 21:44:48',
                'updated_at' => '2019-08-25 04:06:27',
            ),
            12 => 
            array (
                'id' => '19',
                'name' => 'withdraws',
                'slug' => 'withdraws',
                'display_name_singular' => 'Withdraw',
                'display_name_plural' => 'Withdraws',
                'icon' => NULL,
                'model_name' => 'App\\Withdraw',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => '1',
                'server_side' => '0',
                'details' => '{"order_column":"the_queue","order_display_column":"the_queue","order_direction":"asc","default_search_key":"the_queue","scope":null}',
                'created_at' => '2019-07-05 20:44:45',
                'updated_at' => '2019-07-05 20:55:02',
            ),
            13 => 
            array (
                'id' => '22',
                'name' => 'service_categories',
                'slug' => 'service-categories',
                'display_name_singular' => 'Service Category',
                'display_name_plural' => 'Service Categories',
                'icon' => NULL,
                'model_name' => 'App\\ServiceCategory',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => '1',
                'server_side' => '0',
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-07-11 10:32:01',
                'updated_at' => '2019-07-11 10:34:50',
            ),
            14 => 
            array (
                'id' => '23',
                'name' => 'service_sub_categories',
                'slug' => 'service-sub-categories',
                'display_name_singular' => 'Service Sub Category',
                'display_name_plural' => 'Service Sub Categories',
                'icon' => NULL,
                'model_name' => 'App\\ServiceSubCategory',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => '1',
                'server_side' => '0',
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-07-11 10:45:23',
                'updated_at' => '2019-07-11 10:46:33',
            ),
            15 => 
            array (
                'id' => '24',
                'name' => 'notifications',
                'slug' => 'notifications',
                'display_name_singular' => 'Notification',
                'display_name_plural' => 'Notifications',
                'icon' => NULL,
                'model_name' => 'App\\Notification',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => '1',
                'server_side' => '0',
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-07-21 09:06:47',
                'updated_at' => '2019-07-21 09:07:48',
            ),
            16 => 
            array (
                'id' => '25',
                'name' => 'balances',
                'slug' => 'balances',
                'display_name_singular' => 'Balance',
                'display_name_plural' => 'Balances',
                'icon' => NULL,
                'model_name' => 'App\\Balance',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => '1',
                'server_side' => '0',
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-09-02 00:58:05',
                'updated_at' => '2019-09-02 00:58:05',
            ),
        ));
        
        
    }
}