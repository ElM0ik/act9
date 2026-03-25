<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"></head>
<body style="font-family: Arial, sans-serif; background:#f3f4f6; padding: 2rem;">
    <div style="max-width:600px; margin:auto; background:white; border-radius:12px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.1);">

        <div style="background: linear-gradient(135deg, #f59e0b, #ef4444); padding: 2rem; text-align:center;">
            <h1 style="color:white; margin:0; font-size:1.8rem;">⚠️ Alerta de Acceso</h1>
        </div>

        <div style="padding: 2rem;">
            <p style="font-size:1.1rem; color:#1f2937;">Hola, <strong>{{ $user->name }}</strong>:</p>
            <p style="color:#4b5563;">Se ha detectado un nuevo inicio de sesión en tu cuenta de <strong>Activity9</strong>.</p>

            <div style="background:#fff7ed; border:1px solid #fed7aa; border-radius:8px; padding:1rem; margin:1.5rem 0;">
                <p style="margin:0 0 0.5rem; font-weight:bold; color:#92400e;">Detalles del acceso:</p>
                <p style="margin:0; color:#78350f;">🕐 Fecha y hora: {{ now()->format('d/m/Y H:i:s') }}</p>
                <p style="margin:0; color:#78350f;">📧 Correo: {{ $user->email }}</p>
            </div>

            <p style="color:#6b7280; font-size:0.9rem;">Si no fuiste tú, cambia tu contraseña inmediatamente.</p>
        </div>

        <div style="background:#f9fafb; padding:1rem; text-align:center; color:#9ca3af; font-size:0.8rem;">
            Este correo fue enviado automáticamente, por favor no respondas.
        </div>
    </div>
</body>
</html>