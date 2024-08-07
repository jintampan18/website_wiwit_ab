<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\MessageInterface;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    private $message;

    public function __construct(MessageInterface $message)
    {
        $this->message = $message;
    }

    public function index()
    {
        return view('admin.message.index', [
            'messages' => $this->message->getAll()
        ]);
    }

    public function show($id)
    {
        return response()->json($this->message->getById($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => ['required'],
            'email'   => ['required', 'email'],
            'message' => ['required']
        ]);

        try {
            $this->message->store($request->all());
            return redirect()->route('admin.message.index')->with('success', 'Message has been sent successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.message.index')->with('error', 'Message failed to send');
        }
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name'    => ['required'],
            'email'   => ['required', 'email'],
            'message' => ['required']
        ]);

        try {
            $this->message->update($id, $request->all());
            return redirect()->route('admin.message.index')->with('success', 'Message has been updated successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.message.index')->with('error', 'Message failed to update');
        }
    }

    public function destroy($id)
    {
        try {
            $this->message->destroy($id);
            return redirect()->route('admin.message.index')->with('success', 'Message has been deleted successfully');
        } catch (\Throwable $th) {
            return redirect()->route('admin.message.index')->with('error', 'Message failed to delete');
        }
    }
}
