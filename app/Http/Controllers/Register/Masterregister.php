<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registerload;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Masterregister extends Controller
{
    public function master_register()
    {
        return view('master_register');
    }

    public function register_data(Request $request)
    {
        $register_data = $request->validate([
            'full_name'     => 'required|string|max:255',
            'user_name'     => 'required|email|unique:register_master,user_name',
            'user_mobile'   => 'required|string|max:15',
            'user_password' => 'required|string|min:8',
            'user_role'     => 'required|integer',
        ]);

        $inserted_data = Registerload::create([
            'full_name'   => $register_data['full_name'],
            'password'    => Hash::make($register_data['user_password']),
            'user_name'   => $register_data['user_name'],
            'mobile'      => $register_data['user_mobile'],
            'role'        => $register_data['user_role'],
            'otp'         => '123456',
            'user_status' => 1,
        ]);

        return response()->json([
            'status'  => true,
            'message' => 'Registration successful',
            'data'    => $inserted_data,
        ], 201);
    }

    public function Employee_list()
    {
        
        $employee_list = Registerload::where('user_status', 1)->get();
        return view('Employee_list', compact('employee_list'));
    }

    public function edit_employee_details(Request $request, $id)
    {
        $employee = Registerload::findOrFail($id);

        $employee->update([
            'full_name'   => $request->full_name,
            'user_name'   => $request->user_name,
            'mobile'      => $request->mobile,
            'role'        => $request->role,
            'user_status' => $request->user_status,
        ]);

        return redirect()
            ->back()
            ->with('success', 'Employee updated successfully');
    }

   public function authenticate(Request $request)
{
    $validate_credentials = $request->validate([
        'useremail' => 'required|email',
        'userpassword' => 'required',
    ]);

    $user = Registerload::where(
        'user_name',
        $validate_credentials['useremail']
    )->first();

    if (!$user) {
        return response()->json([
            'status' => false,
            'message' => 'Invalid email or password.',
        ], 401);
    }

    // IMPORTANT: database column is PASSWORD
    if (!Hash::check(
        $validate_credentials['userpassword'],
        $user->getAttribute('PASSWORD')
    )) {
        return response()->json([
            'status' => false,
            'message' => 'Invalid email or password.',
        ], 401);
    }

    Auth::login($user);

    $request->session()->regenerate();

    return response()->json([
        'status' => true,
        'message' => 'Login successfully',
    ]);
}
}
