<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'worker')->get();
        return view('User.Pages.worker-page', compact('users'));
    }

    public function latestWorker()
    {
        try {
            $users = User::where('role', 'worker')->latest()->limit(5)->get();
            return view('User.Pages.latest-worker', compact('users'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function displayContactForm($id)
    {
        try {
            $user = User::findOrFail($id);
            return view('User.Pages.contact-page', compact('user'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function storeMessage(Request $request, $id)
    {
        // Validate the form data
        $request->validate([
            'topic' => 'required|string',
            'description' => 'required|string',
            'image.*' => 'nullable|image',
            'date' => 'nullable|date',
            'time' => 'nullable|date_format:H:i:s',
        ]);


        try {
            // Create a new instance of Contact model
            $contact = new Contact([
                'topic' => $request->topic,
                'description' => $request->description,
                'sender_id' => Auth::id(),
                'receiver_id' => $id,
                'status' => 'booking'
            ]);

            // Combine date and time and assign to the contact instance
            $contact->date = $request->date;
            $contact->time = $request->time;


            if ($request->hasFile('image')) {
                $images = [];
                foreach ($request->file('image') as $image) {
                    $image_name = time() . '_' . $image->getClientOriginalName();
                    $image->move(public_path('images/contact'), $image_name);
                    $images[] = $image_name;
                }
                $contact->images = json_encode($images); // Store image names as JSON
            }

            // Save the contact instance
            $contact->save();


            // Redirect back with success message
            return redirect()->route('user.display.booking',['id'=> Auth::id()])->with('success', 'Message sent successfully');
        } catch (\Exception $e) {
            // Redirect back with error message if an exception occurs
            return redirect()->back()->with('error', $e->getMessage());
        }
    }



    public function displayBooking()
    {
        dd('here');
             try {
            $contacts = Contact::where('sender_id', auth()->id())
                ->where('status', 'booking')
                ->first();

            // if ($contacts->isEmpty()) {
            //     throw new \Exception('No booking contacts found.');
            // }

            return view('User.Pages.contact.pending-contact', compact('contacts'));
        } catch (\Exception $e) {
            // Redirect back with error message if an exception occurs
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    public function pendingContact($id)
    {
        try {
            $contacts = Contact::where('sender_id', auth()->id())->where('status', 'booking')->get();
            return view('User.Pages.contact.pending-contact', compact('contacts'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function acceptedContact($id)
    {
        try {
            $contacts = Contact::where('sender_id', auth()->id())->where('status', 'accepted')->get();
            return view('User.Pages.contact.accepted-contact', compact('contacts'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function completeContact($id)
    {
        try {
            $contacts = Contact::where('sender_id', auth()->id())->where('status', 'completed')->get();
            return view('User.Pages.contact.completed-contact', compact('contacts'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function rejectedContact()
    {
        try {
            $contacts = Contact::where('sender_id', auth()->id())->where('status', 'rejected')->get();
            return view('User.Pages.contact.rejected-contact', compact('contacts'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
