<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\PartnerInterface;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    private $partner;

    public function __construct(PartnerInterface $partner)
    {
        $this->partner = $partner;
    }

    public function index()
    {
        return view('admin.partner.index', [
            'partners' => $this->partner->getAll()
        ]);
    }

    public function show($id)
    {
        return response()->json($this->partner->getById($id));
    }

    public function store(Request $request)
    {
        $this->partner->store($request->all());
        return redirect()->route('admin.partner.index')->with('success', 'Partner created successfully');
    }

    public function update($id, Request $request)
    {
        $this->partner->update($id, $request->all());
        return redirect()->route('admin.partner.index')->with('success', 'Partner updated successfully');
    }

    public function destroy($id)
    {
        $this->partner->destroy($id);
        return redirect()->route('admin.partner.index')->with('success', 'Partner deleted successfully');
    }
}
