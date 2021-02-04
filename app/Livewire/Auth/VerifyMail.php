<?php

namespace App\Livewire\Auth;

use App\Provider\RouteServiceProvider;
use Illuminate\Http\Request;
use Livewire\Component;

class VerifyMail extends Component
{
    public function render()
    {
        return view('livewire.auth.verify-mail');
    }

    public function checkForVerification(): void
    {
        if (request()->user()->hasVerifiedEmail()) {
            $this->redirect(
                route('home')
            );
        }
    }

    public function sendVerificationMail(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }
}
