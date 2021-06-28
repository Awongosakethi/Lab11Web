<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$model = model('UserModel');
		$model->insert([
		'username' => 'awongosakethi',
		'useremail' => 'awongosakethi12@gmail.com',
		'userpassword' => password_hash('awong123', PASSWORD_DEFAULT),
		]);
	}
}
