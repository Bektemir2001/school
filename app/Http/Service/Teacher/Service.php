<?php

namespace App\Http\Service\Teacher;

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
                'role' => 1,
                'email' => $data['email'],
                'password' => $password
            ];
            $lesson_id = $data['lesson_id'];
            unset($data);
            $user = User::firstOrCreate($user);
            $data = [
                'user_id' => $user->id,
                'lesson_id' => $lesson_id,
                'password' => $password_for_use
            ];
            Teacher::create($data);
            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
            abort(500);
        }
    }
    public function update($data, $teacher){
        try {
            Db::beginTransaction();
            $user = [
                'name' => $data['name'],
                'surename' => $data['surename'],
                'email' => $data['email'],
            ];

            $lesson_id = $data['lesson_id'];
            unset($data);
            $data = [
                'lesson_id' => $lesson_id,
            ];
            $teacher->user()->update($user);
            $teacher->update($data);
            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
            abort(500);
        }
    }
}
