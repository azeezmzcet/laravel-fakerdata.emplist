<?php

namespace App\Http\Controllers;

use App\Models\UsertableModal;

use Illuminate\Http\Request;

class UsertableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       
        $search = $request->input('search');
        $perPage = $request->input('per_page',20);
        $users = UsertableModal::query();

        if($search){
            $users->where('address', 'LIKE', '%' . $search . '%')
            ->orWhere('company', 'LIKE', '%' . $search . '%')
            ->orWhere('job_title', 'LIKE', '%' . $search . '%');

       
        }

       $users=$users->paginate($perPage)->appends(['search'=>$search,'per_page' => $perPage]);
       

        return view('usertable.index',compact('users','search','perPage'));
    }


}
