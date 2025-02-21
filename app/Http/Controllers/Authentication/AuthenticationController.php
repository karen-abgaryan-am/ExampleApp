<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\Authentication\UserLoginRequest;
use App\Http\Requests\Authentication\UserLogoutRequest;
use App\Http\Requests\Authentication\UserProfileRequest;
use App\Http\Requests\Authentication\UserRegisterRequest;
use App\Http\Resources\Authentication\UserResource;
use App\Services\Authentication\Actions\UserLoginAction;
use App\Services\Authentication\Actions\UserLogoutAction;
use App\Services\Authentication\Actions\UserProfileAction;
use App\Services\Authentication\Actions\UserRegisterAction;
use App\Services\Authentication\DTO\UserLoginDTO;
use App\Services\Authentication\DTO\UserRegisterDTO;
use Illuminate\Http\JsonResponse;

class AuthenticationController extends Controller
{
    public function register(UserRegisterRequest $request, UserRegisterAction $action): UserResource
    {
        $dto = new UserRegisterDto($request);
        $user = $action->run($dto);

        return new UserResource($user);
    }

    public function login(UserLoginRequest $request,  UserLoginAction $action): JsonResponse
    {
        $dto = new UserLoginDto($request);

        return response()->json($action->run($dto));
    }

    public function profile(UserProfileRequest $request, UserProfileAction $action): UserResource
    {
        return new UserResource($action->run());
    }

    public function logout(UserLogoutRequest $request, UserLogoutAction $action): JsonResponse
    {
        return response()->json($action->run());
    }
}
