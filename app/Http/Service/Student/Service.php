<?php

namespace App\Http\Service\Student;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Service
{
    public function store($data){
        try {
            Db::beginTransaction();
            $password = Str::random(8);
            $password_for_use = $password;
            $password = Hash::make($password);
            $user = [
                'name' => $data['name'],
                'surename' => $data['surename'],
                'role' => 0,
                'email'=>$data['email'],
                'password' => $password
            ];
            $klass_id = $data['klass_id'];
            unset($data);
            $user = User::firstOrCreate($user);
            $data = [
                'user_id' => $user->id,
                'klass_id' => $klass_id,
                'password' => $password_for_use
            ];
            Student::create($data);
            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
            abort(500);

        }
    }
    public function update($data, $student){
        try {
            Db::beginTransaction();
            $user = [
                'name' => $data['name'],
                'surename' => $data['surename'],
                'email'=>$data['email'],
            ];

            $klass_id = $data['klass_id'];
            unset($data);
            $data = [
                'klass_id' => $klass_id,
            ];
            $student->user()->update($user);
            $student->update($data);
            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
            abort(500);
        }
    }
}
