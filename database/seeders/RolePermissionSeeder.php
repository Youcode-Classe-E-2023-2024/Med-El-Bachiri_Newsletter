<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // roles

        $administrator = Role::create(['name' => 'admin']);
        $content_manager = Role::create(['name' => 'Content Manager']);
        $email_marketer = Role::create(['name' => 'Email Marketer']);
        $guest = Role::create(['name' => 'Guest']);

        // permissions
        $unsubscribe_user = Permission::create(['name' => 'unsubscribe user']);
        $upload_media = Permission::create(['name' => 'upload media']);
        $see_media = Permission::create(['name' => 'see media']);
        $delete_media = Permission::create(['name' => 'delete media']);
        $create_template = Permission::create(['name' => 'create template']);
        $delete_template = Permission::create(['name' => 'delete template']);
        $send_mail = Permission::create(['name' => 'send mail']);
        $manage_roles = Permission::create(['name' => 'manage roles']);
        $view_statistics = Permission::create(['name' => 'view statistics']);
        $view_subscribers = Permission::create(['name' => 'view subscribers']);
        $see_templates = Permission::create(['name' => 'see templates']);

        // assign permissions to roles
            // administrator
            $administrator->givePermissionTo([
                $manage_roles,
                $upload_media,
                $delete_media,
                $create_template,
                $delete_template,
                $send_mail,
                $unsubscribe_user,
                $view_statistics,
                $view_subscribers,
                $see_media,
                $see_templates
            ]);

            // content manager
            $content_manager->givePermissionTo([
                $upload_media,
                $delete_media,
                $see_media,
                $create_template,
                $delete_template,
                $view_subscribers,
                $view_statistics,
                $see_templates
            ]);

            // email marketer
            $email_marketer->givePermissionTo([
                $send_mail,
                $upload_media,
                $see_media,
                $delete_media,
                $view_statistics,
                $view_subscribers,
                $see_templates
            ]);

            // guest
            $guest->givePermissionTo([
                $view_statistics,
                $view_subscribers,
                $see_templates
            ]);
            //
        //
    }
}
