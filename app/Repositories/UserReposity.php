<?php namespace App\Repositories;

use App\Models\User;

class UserRepository extends BaseRepository{

  	private function save($user, $inputs){		
		
	}
        public function update($inputs, $user){		
		$user->confirmed = isset($inputs['confirmed']);

		$this->save($user, $inputs);
	}

	public function destroyUser(User $user){
		$user->comments()->delete();
		
		$user->delete();
	}
}
