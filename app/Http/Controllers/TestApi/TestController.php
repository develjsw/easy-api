<?php

namespace App\Http\Controllers\TestApi;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    // TODO : Service DI 추가 예정
    public function __construct()
    {

    }

    /**
     * 유저 리스트 가져오기 - 구현 예정
     * @return string
     */
    public function getUserList(): string
    {
        return 'getUserList';
    }

    /**
     * 유저 단건 가져오기 - 구현 예정
     * @param $id
     * @return string
     */
    public function getUserOne($id): string
    {
        return "getUserOne - {$id}";
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
}
