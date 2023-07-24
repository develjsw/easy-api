<?php

namespace App\Http\Controllers\TestApi;

use App\Http\Controllers\Controller;
use App\Http\Services\TestApi\TestService;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    protected TestService $testService;

    public function __construct(
        TestService $testService
    )
    {
        $this->testService = $testService;
    }

    /**
     * 유저 리스트 가져오기 - 수정 예정
     * @return Collection
     */
    public function getUserList(): Collection
    {
        return $this->testService->getUserList();
    }

    /**
     * 유저 단건 가져오기 - 수정 예정
     * @param $id
     * @return Collection
     */
    public function getUserOne($id): Collection
    {
        return $this->testService->getUserOne($id);
    }

    /**
     * 유저 생성 - 구현 예정
     * @return string
     */
    public function createUser(): string
    {
        return 'createUser';
    }

    /**
     * 유저 수정 - 구현 예정
     * @param $id
     * @return string
     */
    public function updateUser($id): string
    {
        return "updateUser - {$id}";
    }

    /**
     * DB CONNECTION STATUS 확인
     * @return string
     */
    public function dbConnectionStatus(): string
    {
        try {
            DB::connection()->getPdo();
            return 'Successfully connected to the database!';
        } catch (\Exception $e) {
            die("Could not connect to the database. Error: " . $e->getMessage());
        }
    }
}
