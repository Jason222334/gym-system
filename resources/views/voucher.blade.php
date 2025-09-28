<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Comprobante de Pago - Gimnasio YOOFIT PERÚ</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 14px; margin: 0; padding: 20px; }
        .voucher { width: 100%; max-width: 800px; margin: 0 auto; border: 3px solid #333; padding: 25px; }
        .header { text-align: center; margin-bottom: 25px; border-bottom: 2px solid #333; padding-bottom: 15px; }
        .details { margin-bottom: 25px; }
        .detail-row { display: flex; margin-bottom: 12px; padding: 8px; background: #f9f9f9; }
        .detail-label { font-weight: bold; width: 200px; color: #333; }
        .footer { margin-top: 35px; text-align: center; border-top: 1px solid #333; padding-top: 15px; font-size: 12px; }
        .verification-section { text-align: center; margin: 25px 0; padding: 20px; background: #f0f8ff; border: 2px dashed #333; }
        .verification-code { font-family: 'Courier New', monospace; font-size: 18px; font-weight: bold; letter-spacing: 3px; color: #0066cc; }
        .signature { margin-top: 60px; border-top: 1px solid #333; width: 280px; text-align: center; padding-top: 10px; }
        .watermark { opacity: 0.1; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%) rotate(-45deg); font-size: 80px; color: #000; }
    </style>
</head>
<body>
    <div class="voucher">
        <div class="watermark">GIMNASIO YOOFIT PERÚ</div>
        
        <div class="header">
            <h1 style="margin: 0; color: #0066cc;">GIMNASIO YOOFIT PERÚ</h1>
            <h2 style="margin: 5px 0; color: #333;">COMPROBANTE DE PAGO</h2>
            <p style="margin: 0; font-size: 16px;">Fecha: {{ $date }}</p>
        </div>
        
        <div class="details">
            <div class="detail-row">
                <div class="detail-label">ID de Transacción:</div>
                <div>{{ $transactionId }}</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Nombre del Miembro:</div>
                <div>{{ $member->full_name }}</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Servicio Contratado:</div>
                <div>{{ $member->services }}</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Plan:</div>
                <div>{{ $member->plan }} Mes/es</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Monto Pagado:</div>
                <div style="font-weight: bold; color: #006600;">${{ number_format($member->amount, 2) }}</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Fecha de Pago:</div>
                <div>{{ $member->paid_date ?? date('Y-m-d') }}</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Estado:</div>
                <div style="color: {{ $member->status == 'active' ? '#006600' : '#cc0000' }}; font-weight: bold;">
                    {{ strtoupper($member->status) }}
                </div>
            </div>
        </div>
        
        <div class="verification-section">
            <h3>CÓDIGO DE VERIFICACIÓN</h3>
            <div class="verification-code">
                {{ $verificationCode }}
            </div>
            <p style="font-size: 12px; margin-top: 10px;">
                Use este código para verificar la autenticidad del comprobante
            </p>
        </div>
        
        <div style="display: flex; justify-content: space-between; margin-top: 40px;">
            <div class="signature">
                ___________________________<br>
                Firma del Miembro
            </div>
            <div class="signature">
                ___________________________<br>
                Firma del Administrador
            </div>
        </div>
        
        <div class="footer">
            <p style="margin: 5px 0;"><strong>¡Gracias por su pago!</strong></p>
            <p style="margin: 3px 0;">Gimnasio YOOFIT PERÚ - Av. Principal 123 - Tel: (01) 123-4567</p>
            <p style="margin: 3px 0;">Email: info@gimnasio-yoofit.com - Web: www.gimnasio-yoofit.com</p>
            <p style="margin: 3px 0; font-style: italic;">Este documento es un comprobante válido de pago</p>
        </div>
    </div>
</body>
</html>