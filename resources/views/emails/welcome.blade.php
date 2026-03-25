<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"></head>
<body style="font-family: Arial, sans-serif; background:#f3f4f6; padding: 2rem;">
    <div style="max-width:600px; margin:auto; background:white; border-radius:12px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.1);">
        
        <div style="background: linear-gradient(135deg, #10b981, #0d9488); padding: 2rem; text-align:center;">
            <h1 style="color:white; margin:0; font-size:1.8rem;">¡Bienvenido! 🎉</h1>
        </div>

        <div style="padding: 2rem;">
            <p style="font-size:1.1rem; color:#1f2937;">Hola, <strong>{{ $user->name }}</strong>:</p>
            <p style="color:#4b5563;">Tu cuenta ha sido creada exitosamente en <strong>Activity9</strong>. Ya puedes acceder al sistema con tu correo y contraseña.</p>

            <div style="background:#f0fdf4; border-left:4px solid #10b981; padding:1rem; border-radius:4px; margin: 1.5rem 0;">
                <p style="margin:0; color:#065f46;">✅ Cuenta registrada correctamente</p>
            </div>

            <a href="{{ url('/login') }}" style="display:inline-block; background:#10b981; color:white; padding:0.75rem 2rem; border-radius:8px; text-decoration:none; font-weight:bold; margin-top:1rem;">
                Ir al Login →
            </a>
        </div>

        <div style="background:#f9fafb; padding:1rem; text-align:center; color:#9ca3af; font-size:0.8rem;">
            Este correo fue enviado automáticamente, por favor no respondas.
        </div>
    </div>
</body>
</html>