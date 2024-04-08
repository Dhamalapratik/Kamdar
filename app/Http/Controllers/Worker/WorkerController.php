<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use Yajra\DataTables\DataTables;

class WorkerController extends Controller
{

    public function index()
    {
        return view('Worker.Pages.MainDashboard.Dashboard');
    }
    public function displayBooking()
    {
        $contacts = Contact::where('receiver_id', auth()->id())->where('status', 'pending')->get();
        return view('Worker.Pages.Dashboard.Booking.index', compact('contacts'));
    }




    public function displayUsers()
    {
        $users = User::all();
        return view('Worker.Pages.Dashboard.User.index', compact('users'));
    }

    public function acceptBooking($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->status = 'accepted';
            $contact->save();
            return redirect()->route('worker.display.booking');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function displayPending()
    {

        try {
            $contacts = Contact::where('receiver_id', auth()->id())->where('status', 'accepted')->get();
            return view('Worker.Pages.Dashboard.Pending.index', compact('contacts'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function acceptPending($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->status = 'completed';
            $contact->save();
            return redirect()->route('worker.display.booking');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function displayAccepted()
    {

        try {
            $contacts = Contact::where('receiver_id', auth()->id())->where('status', 'completed')->get();
            return view('Worker.Pages.Dashboard.Completed.index', compact('contacts'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function displayReject()
    {

        try {
            $contacts = Contact::where('receiver_id', auth()->id())->where('status', 'rejected')->get();
            return view('Worker.Pages.Dashboard.Rejected.index', compact('contacts'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function displayDecline()
    {

        try {
            $contacts = Contact::where('receiver_id', auth()->id())->where('status', 'declined')->get();
            return view('Worker.Pages.Dashboard.Decline.index', compact('contacts'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function acceptReject($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->status = 'rejected';
            $contact->save();
            return redirect()->route('worker.display.booking');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function acceptDecline($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->status = 'declined';
            $contact->save();
            return redirect()->route('worker.display.booking');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function displaySingleMessage($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $sender = User::findOrFail($contact->sender_id);
            dd($contact);
            return view('Worker.Pages.Dashboard.message.single-message', compact('contact', 'sender')); // Pass sender information to the view
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
