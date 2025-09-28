<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function generateVoucher($id)
    {
        $member = Member::findOrFail($id);
        
        // Generar código de verificación (alternativa al QR)
        $verificationCode = $this->generateVerificationCode($member);
        
        $data = [
            'member' => $member,
            'verificationCode' => $verificationCode,
            'date' => date('d/m/Y'),
            'transactionId' => 'GYM-' . $member->id . '-' . date('YmdHis')
        ];
        
        $pdf = Pdf::loadView('voucher', $data);
        
        return $pdf->download('voucher-' . $member->id . '.pdf');
    }
    
    private function generateVerificationCode($member)
    {
        // Generar un código único de verificación
        return strtoupper(substr(md5($member->id . $member->full_name . time()), 0, 12));
    }
}