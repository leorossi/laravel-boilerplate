<?php

/**
 * Admin users
 * ==============
 *
 * Add admin user with email/password in the $admins array
 */

$admins = [];
$admins['admin@example.com'] = 'admin';

/**
 * Roles
 * ==============
 * The first role is the admin.
 * Add other roles as you like in the $roles array
 */

$roles = [];
$roles['admin'] = 'Admin';
$roles['superuser'] = 'Super User';
$roles['default'] = 'Normal User';

return array(
  'admins' => $admins,
  'roles' => $roles
);