<?php

class BoilerplateTest extends TestCase {
  /**
   * Checks admins are created and they are recognized as admins
   */
  public function testAdminCreations() {
    $admins = Config::get('boilerplate.admins');
    foreach ($admins as $email => $pw) {
      $user = User::where('email', $email)->first();
      $this->assertNotNull($user);
      $this->assertTrue($user->isAdmin());
    }
  }
}