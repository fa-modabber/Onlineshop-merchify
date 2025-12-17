<?php

namespace App\Http\Controllers\Admin;

use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::all();
        return view('Admin.coupons.index', compact('coupons'));
    }

    public function create()
    {
        return view('Admin.coupons.create');
    }

    public function store(Request $request)
    {
        try {
            $expired_at = $request->expired_at ? convert_jalali_to_gregorian_date($request->expired_at) : null;
        } catch (\Exception $e) {
            return redirect()->route('admin.coupons.create')->with('error', 'تاریخ انقضا صحیح نیست');
        }

        $request->merge([
            'expired_at' => $expired_at,
        ]);
        $request->validate([
            'code' => 'required|string|unique:coupons,code',
            'percentage' => 'required|integer',
            'expired_at' => 'required|date_format:Y-m-d H:i:s'
        ]);
        Coupon::create([
            'code' => $request->code,
            'percentage' => $request->percentage,
            'expired_at' => $request->expired_at
        ]);
        return redirect()->route('admin.coupons.index')->with('success', 'کد تخفیف با موفقیت ایجاد شد');
    }

    public function edit(Coupon $coupon)
    {
        return view('Admin.coupons.edit', compact('coupon'));
    }

    public function update(Request $request, Coupon $coupon)
    {

        try {
            $expired_at = $request->expired_at ? convert_jalali_to_gregorian_date($request->expired_at) : null;
        } catch (\Exception $e) {
            return redirect()->route('admin.coupons.update')->with('error', 'تاریخ انقضا صحیح نیست');
        }

        $request->merge([
            'expired_at' => $expired_at,
        ]);

        $request->validate([
            'code' => 'required|string|unique:coupons,code,' . $coupon->id,
            'percentage' => 'required|integer',
            'expired_at' => 'required|date_format:Y-m-d H:i:s'
        ]);

        $coupon->update([
            'code' => $request->code,
            'percentage' => $request->percentage,
            'expired_at' => $request->expired_at
        ]);
        return redirect()->route('admin.coupons.index')->with('success', 'کد تخفیف با موفقیت آپدیت شد');
    }

    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return redirect()->route('admin.coupons.index')->with('warning', 'کد تخفیف با موفقیت حذف شد');
    }
}
