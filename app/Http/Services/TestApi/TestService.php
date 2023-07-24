<?php

namespace App\Http\Services\TestApi;

use App\Http\Services\BaseService;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class TestService extends BaseService
{
    /* TODO : 쿼리 빌더로 변경 후 Resource Class를 통해 공통 형식 만들어 반환 예정 */

    public function getUserList(): Collection
    {
        return User::all(); // 엘로퀀트(Eloquent) ORM
        // return DB::table('users')->get(); // 쿼리 빌더
    }

    public function getUserOne($id): Collection
    {
        return User::where('member_cd', $id)
                    ->get();
    }
}
