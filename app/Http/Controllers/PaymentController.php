<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Exception\CardException;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
class PaymentController extends Controller
{
    //
    public function stripe()
    {
        // dd(getUserId());
        // return view('admin.payment.stripe');
    }

    public function stripePost(Request $request)
    {
        $creditAmount = $request->creditAmount;

        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));

            $charge = Charge::create([
                "amount" => $creditAmount*100,
                "currency" => "INR",
                "source" => $request->stripeToken,
                "description" => "This is a test payment",
            ]);

            // Charge was successful
            // Update token_balance column in the users table
            $user = Auth::user();
            $newBalance = $user->token_balance + $creditAmount;
            $user->token_balance = $newBalance;
            $user->save();

            // Add new row in the transactions table
            $transaction = new Transaction();
            $transaction->user_id = $user->id;
            $transaction->type = 'credit';
            $transaction->amount = $creditAmount;
            $transaction->save();

            Session::flash('success', 'Payment Successful!');
            return redirect()->back();
        } catch (CardException $e) {
            // Card was declined or other card-related error occurred
            $error = $e->getMessage();
            Session::flash('error', 'Payment Failed: ' . $error);
            return redirect()->back();
        } catch (\Exception $e) {
            // Other exceptions occurred
            $error = $e->getMessage();
            Session::flash('error', 'Payment Failed: ' . $error);
            return redirect()->back();
        }
    }
}
