<?php
namespace App\Traits;

use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;

trait FireBaseDB
{
    public function __construct()
    {
        $serviceAccount = ServiceAccount::fromJsonFile(base_path('hunar-fd156-firebase-adminsdk-2jdxy-c59f914a89.json'));
		$this->firebase = (new Factory)
				->withServiceAccount($serviceAccount)
				->withDatabaseUri('https://hunar-b4d98-default-rtdb.firebaseio.com/')
				->createDatabase();
    }
}
