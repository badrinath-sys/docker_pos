<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {

        $result['data'] = Feedback::all();
        return view('admin/feedback', $result);

    }
    public function delete(Request $request, $id)
    {
        $model = Feedback::find($id);
        $model->delete();
        $request->session()->flash('message', 'Feedback deleted');
        return redirect('admin/feedback');
    }
}