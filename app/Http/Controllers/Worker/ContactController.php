<?php

namespace App\Http\Controllers\Worker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use Yajra\DataTables\DataTables;

class ContactController extends Controller
{
    public function getBookingContact()
    {
        $contacts = Contact::where('receiver_id', auth()->id())
                    ->where('status', 'booking')
                    ->select(['id', 'topic', 'description', 'sender_id', 'receiver_id', 'date', 'time', 'status']);

        return DataTables::of($contacts)
            ->addColumn('action', function ($contact) {
                return '<a href="' . route('worker.display.single.message', ['id' => $contact->id]) . '" class="btn btn-primary btn-sm">View</a>
                        <a href="' . route('worker.accept.booking', ['id' => $contact->id]) . '" class="btn btn-success btn-sm">Accept</a>
                        <a href="' . route('worker.accept.decline', ['id' => $contact->id]) . '" class="btn btn-danger btn-sm">Decline</a>';
            })
            ->editColumn('sender_id', function ($contact) {
                return $contact->sender->name; // Assuming you have a sender relationship in your Contact model
            })
            ->editColumn('receiver_id', function ($contact) {
                return $contact->receiver->name; // Assuming you have a receiver relationship in your Contact model
            })
            ->editColumn('date', function ($contact) {
                // Check if $contact->date is not null and is not an empty string
                if ($contact->date) {
                    // Convert string date to DateTime object
                    $date = new \DateTime($contact->date);
                    return $date->format('Y-m-d');
                } else {
                    return '';
                }
            })
            ->editColumn('time', function ($contact) {
                // Check if $contact->time is not null and is not an empty string
                if ($contact->time) {
                    // Convert string time to DateTime object
                    $time = new \DateTime($contact->time);
                    return $time->format('H:i:s');
                } else {
                    return '';
                }
            })
            ->make(true);
    }

    public function getPendingContact()
    {
        $contacts = Contact::where('receiver_id', auth()->id())
                    ->where('status', 'accepted')
                    ->select(['id', 'topic', 'description', 'sender_id', 'receiver_id', 'date', 'time', 'status']);

        return DataTables::of($contacts)
            ->addColumn('action', function ($contact) {
                return '<a href="' . route('worker.display.single.message', ['id' => $contact->id]) . '" class="btn btn-primary btn-sm">View</a>';
                        // <a href="' . route('worker.accept.booking', ['id' => $contact->id]) . '" class="btn btn-success btn-sm">Accept</a>
                        // <a href="' . route('worker.accept.decline', ['id' => $contact->id]) . '" class="btn btn-danger btn-sm">Decline</a>';
            })
            ->editColumn('sender_id', function ($contact) {
                return $contact->sender->name; // Assuming you have a sender relationship in your Contact model
            })
            ->editColumn('receiver_id', function ($contact) {
                return $contact->receiver->name; // Assuming you have a receiver relationship in your Contact model
            })
            ->editColumn('date', function ($contact) {
                // Check if $contact->date is not null and is not an empty string
                if ($contact->date) {
                    // Convert string date to DateTime object
                    $date = new \DateTime($contact->date);
                    return $date->format('Y-m-d');
                } else {
                    return '';
                }
            })
            ->editColumn('time', function ($contact) {
                // Check if $contact->time is not null and is not an empty string
                if ($contact->time) {
                    // Convert string time to DateTime object
                    $time = new \DateTime($contact->time);
                    return $time->format('H:i:s');
                } else {
                    return '';
                }
            })
            ->make(true);
    }

    public function getCompletedContact()
    {
        $contacts = Contact::where('receiver_id', auth()->id())
                    ->where('status', 'completed')
                    ->select(['id', 'topic', 'description', 'sender_id', 'receiver_id', 'date', 'time', 'status']);

        return DataTables::of($contacts)
            ->addColumn('action', function ($contact) {
                return '<a href="' . route('worker.display.single.message', ['id' => $contact->id]) . '" class="btn btn-primary btn-sm">View</a>';
                        // <a href="' . route('worker.accept.booking', ['id' => $contact->id]) . '" class="btn btn-success btn-sm">Accept</a>
                        // <a href="' . route('worker.accept.decline', ['id' => $contact->id]) . '" class="btn btn-danger btn-sm">Decline</a>';
            })
            ->editColumn('sender_id', function ($contact) {
                return $contact->sender->name; // Assuming you have a sender relationship in your Contact model
            })
            ->editColumn('receiver_id', function ($contact) {
                return $contact->receiver->name; // Assuming you have a receiver relationship in your Contact model
            })
            ->editColumn('date', function ($contact) {
                // Check if $contact->date is not null and is not an empty string
                if ($contact->date) {
                    // Convert string date to DateTime object
                    $date = new \DateTime($contact->date);
                    return $date->format('Y-m-d');
                } else {
                    return '';
                }
            })
            ->editColumn('time', function ($contact) {
                // Check if $contact->time is not null and is not an empty string
                if ($contact->time) {
                    // Convert string time to DateTime object
                    $time = new \DateTime($contact->time);
                    return $time->format('H:i:s');
                } else {
                    return '';
                }
            })
            ->make(true);
    }

    public function getRejectedContact()
    {
        $contacts = Contact::where('receiver_id', auth()->id())
                    ->where('status', 'rejected')
                    ->select(['id', 'topic', 'description', 'sender_id', 'receiver_id', 'date', 'time', 'status']);

        return DataTables::of($contacts)
            ->addColumn('action', function ($contact) {
                return '<a href="' . route('worker.display.single.message', ['id' => $contact->id]) . '" class="btn btn-primary btn-sm">View</a>';
                        // <a href="' . route('worker.accept.booking', ['id' => $contact->id]) . '" class="btn btn-success btn-sm">Accept</a>
                        // <a href="' . route('worker.accept.decline', ['id' => $contact->id]) . '" class="btn btn-danger btn-sm">Decline</a>';
            })
            ->editColumn('sender_id', function ($contact) {
                return $contact->sender->name; // Assuming you have a sender relationship in your Contact model
            })
            ->editColumn('receiver_id', function ($contact) {
                return $contact->receiver->name; // Assuming you have a receiver relationship in your Contact model
            })
            ->editColumn('date', function ($contact) {
                // Check if $contact->date is not null and is not an empty string
                if ($contact->date) {
                    // Convert string date to DateTime object
                    $date = new \DateTime($contact->date);
                    return $date->format('Y-m-d');
                } else {
                    return '';
                }
            })
            ->editColumn('time', function ($contact) {
                // Check if $contact->time is not null and is not an empty string
                if ($contact->time) {
                    // Convert string time to DateTime object
                    $time = new \DateTime($contact->time);
                    return $time->format('H:i:s');
                } else {
                    return '';
                }
            })
            ->make(true);
    }

    public function getDeclinedContact()
    {
        $contacts = Contact::where('receiver_id', auth()->id())
                    ->where('status', 'declined')
                    ->select(['id', 'topic', 'description', 'sender_id', 'receiver_id', 'date', 'time', 'status']);

        return DataTables::of($contacts)
            ->addColumn('action', function ($contact) {
                return '<a href="' . route('worker.display.single.message', ['id' => $contact->id]) . '" class="btn btn-primary btn-sm">View</a>';
                        // <a href="' . route('worker.accept.booking', ['id' => $contact->id]) . '" class="btn btn-success btn-sm">Accept</a>
                        // <a href="' . route('worker.accept.decline', ['id' => $contact->id]) . '" class="btn btn-danger btn-sm">Decline</a>';
            })
            ->editColumn('sender_id', function ($contact) {
                return $contact->sender->name; // Assuming you have a sender relationship in your Contact model
            })
            ->editColumn('receiver_id', function ($contact) {
                return $contact->receiver->name; // Assuming you have a receiver relationship in your Contact model
            })
            ->editColumn('date', function ($contact) {
                // Check if $contact->date is not null and is not an empty string
                if ($contact->date) {
                    // Convert string date to DateTime object
                    $date = new \DateTime($contact->date);
                    return $date->format('Y-m-d');
                } else {
                    return '';
                }
            })
            ->editColumn('time', function ($contact) {
                // Check if $contact->time is not null and is not an empty string
                if ($contact->time) {
                    // Convert string time to DateTime object
                    $time = new \DateTime($contact->time);
                    return $time->format('H:i:s');
                } else {
                    return '';
                }
            })
            ->make(true);
    }


}
