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
        $admin_role = Role::create(['name' => 'admin']);
        $editor_role = Role::create(['name' => 'editor']);

        // permissions
        $unsubscribe_user = Permission::create(['name' => 'unsubscribe user']);
        $upload_media = Permission::create(['name' => 'upload media']);
        $delete_media = Permission::create(['name' => 'delete media']);
        $crete_template = Permission::create(['name' => 'create template']);
        $delete_template = Permission::create(['name' => 'delete template']);
        $send_mail = Permission::create(['name' => 'send mail']);
        $assign_role = Permission::create(['name' => 'assign role']);

        // assign permissions to roles
            // admin
            $admin_role->givePermissionTo([
                $assign_role,

                $upload_media,
                $delete_media,
                $crete_template,
                $delete_template,
                $send_mail,
                $unsubscribe_user
            ]);

            // editor
            $editor_role->givePermissionTo([
                $upload_media,
                $delete_media,
                $crete_template,
                $delete_template,
                $send_mail,
                $unsubscribe_user
            ]);
        //
    }
}
