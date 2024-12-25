<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource. โชว์รายการหน้าที่ การสั่งซื่อ index 
     */
    public function index()
    {
        return "User Page";
    }

    /**
     * Show the form for creating a new resource. โชว์ฟอร์ม
     */
    public function create()  
    {
        //มีช่องให้กรอก กรอกเสร็จปุบ ตกลง ทำงานที่ store
    }

    /**
     * Store a newly created resource in storage. เก็บลงฐานข้อมูล
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $user)
    {
        return "User Page".$user;
        // show แสดงรายละเอียดสินค้า มีสินค้า1 ชิ้น
    }

    /**
     * Show the form for editing the specified resource.  edit เป็นฟอร์ม
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.    edit เป็นstorage 
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.   การจัดการลบในฐานข้อมูล
     */
    public function destroy(User $user)
    {
        //
    }
}
