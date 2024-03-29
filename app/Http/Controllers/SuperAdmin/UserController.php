<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Interfaces\admin\UserInterface;
use App\Mail\MyTestMail;
use App\Models\User;
use App\Models\UserMemberType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{

    private $userInterface;

    public function __construct(UserInterface $userInterface)
    {
        $this->userInterface = $userInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->userInterface->paginate();
        return view('super-admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $memberTypes = UserMemberType::all();
        return view('super-admin.users.create', compact('memberTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->userInterface->storeValidation();
        $this->userInterface->store();
        return redirect('superAdmin/users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = $this->userInterface->findById($id);
        return view('super-admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = $this->userInterface->findById($id);
        $memberTypes = UserMemberType::all();
        return view('super-admin.users.edit', compact('user', 'memberTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->userInterface->updateValidation($id);
        $this->userInterface->update($id);
        return redirect('superAdmin/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->userInterface->deleteUser($id);
        return redirect('superAdmin/users');
    }


    public function sendEmail(string $id)
    {
        $user = $this->userInterface->findById($id);
        Mail::to($user->email)->send(new MyTestMail($id));
        return redirect()->back();
    }

    public function createCertificate(string $id)
    {
        $user = $this->userInterface->findById($id);
        return view('super-admin.users.certificate-create', compact('user'));
    }

    public function storeCertificate(string $id)
    {
        // $user = $this->userInterface->findById($id);
        $this->userInterface->storeUserCertificate($id);
        return redirect("superAdmin/users/$id");
    }

    public function showCertificate(string $id)
    {
        $user = $this->userInterface->findById($id);
        return view('super-admin.users.show-certificate', compact('user'));
    }

    public function superAdminApprove(string $id)
    {
        $user = $this->userInterface->findById($id);
        $user->user_status = config('constant.user.status.superAdminApproved');
        $user->update();
        return redirect()->back();
        // dd($user);
    }

    public function superAdminMembershipAdd(string $id)
    {
        $user = $this->userInterface->findById($id);
        // Calculate the new membership expiry by adding the new duration to the current expiry
        // Convert the membership expiry to a DateTime instance
        $currentExpiry = Carbon::parse($user->membership_expiry);
        $newExpiry = $currentExpiry->addMonths(request()->new_member_expiry);
        $user->membership_expiry = $newExpiry;
        $user->update();
        return redirect()->back();
    }
}
