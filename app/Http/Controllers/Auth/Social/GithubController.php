<?php

namespace App\Http\Controllers\Auth\Social;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class GithubController extends Controller
{
    private $socialite;

    public function __construct(Socialite $socialite)
    {
        $this->socialite = $socialite;
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return $this->socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $githubUser = $this->socialite::driver('github')->user();

        $validator = $this->validator($this->getGithubUserData($githubUser));
        if ($validator->fails()) {
            return redirect()->route('register');
        }

        $user = $this->findOrCreateGithubUser($validator->validated());
        Auth::login($user, true);

        return redirect()->route('tweets.index');
    }

    public function findOrCreateGithubUser($userdata)
    {
        $user = User::where(['github_id' => $userdata['github_id']])->first() ?? User::create($userdata);

        return $user;
    }

    protected function validator($data)
    {
        return Validator::make(
            $data,
            [
                'github_id' => ['required', 'integer'],
                'name' => ['required', 'string', 'min:2','max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'username' => ['required', 'string', 'max:30', 'alpha_dash', 'min:3'],
                'avatar_url' => ['nullable'],
                'email_verified_at' => ['date'],
                'password' => ['string']
            ]
        );
    }

    protected function getGithubUserData($githubUser)
    {
        return [
            'github_id' => $githubUser->getId(),
            'name' => $githubUser->getName(),
            'username' => $githubUser->getNickname(),
            'email_verified_at' => now(),
            'password' => Hash::make(random_bytes(10)),
            'email' => $githubUser->getEmail(),
            'avatar_url' => $githubUser->getAvatar()
        ];
    }
}
