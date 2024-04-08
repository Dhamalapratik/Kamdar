<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Like;
use Illuminate\Http\Request;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{

    public function storeRatingForm(Request $request, $id)
    {
        $request->validate([
            'rating' => 'required|numeric|min:1|max:5',
            'comment' => 'nullable|string|max:255',
        ]);

        $rating = new Rating();
        $rating->user_id = $id;
        $rating->rated_by = Auth::id();
        $rating->rating = $request->rating;
        $rating->comment = $request->comment;
        $rating->save();

        return redirect()->back()->with('success', 'Rating added successfully');
    }

    public function toggleLike(Request $request)
    {
        dd('here');
        // Retrieve the comment ID and user ID from the request
        $commentId = $request->input('comment_id');
        $userId = auth()->id(); // Assuming you have authentication and the user is logged in

        // Retrieve the comment
        $comment = Like::findOrFail($commentId);

        // Check if the user has already liked the comment
        $isLiked = $comment->likes()->where('user_id', $userId)->exists();

        if ($isLiked) {
            // If the user has already liked the comment, unlike it
            $comment->likes()->where('user_id', $userId)->delete();
            $liked = false;
        } else {
            // If the user has not liked the comment yet, like it
            $comment->likes()->create(['user_id' => $userId]);
            $liked = true;
        }

        // Return the updated like status and like count
        return response()->json([
            'liked' => $liked,
            'likes_count' => $comment->likes()->count(),
        ]);
    }
}
