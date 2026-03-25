<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            🚀 Panel de Control
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <!-- Bienvenida -->
            <div style="background: linear-gradient(135deg, #10b981, #0d9488); border-radius: 1rem; padding: 2.5rem; color: white; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.15);">
                <h1 style="font-size: 2rem; font-weight: 800; margin-bottom: 0.5rem;">
                    ¡Hola, {{ Auth::user()->name }}! 👋
                </h1>
                <p style="font-size: 1rem; opacity: 0.9;">
                    Has accedido exitosamente al <strong>Dashboard</strong>. Esta área es exclusiva para usuarios registrados.
                </p>
            </div>

            <!-- Tarjetas -->
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem;">

                <div style="background: white; border-radius: 1rem; padding: 2rem; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border-top: 4px solid #6366f1;">
                    <div style="font-size: 2.5rem; margin-bottom: 0.75rem;">📊</div>
                    <h3 style="font-weight: 700; font-size: 1.1rem; color: #1f2937; margin-bottom: 0.25rem;">Estadísticas</h3>
                    <p style="color: #6b7280; font-size: 0.875rem;">Revisa el rendimiento general del sistema.</p>
                </div>

                <div style="background: white; border-radius: 1rem; padding: 2rem; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border-top: 4px solid #f59e0b;">
                    <div style="font-size: 2.5rem; margin-bottom: 0.75rem;">⚙️</div>
                    <h3 style="font-weight: 700; font-size: 1.1rem; color: #1f2937; margin-bottom: 0.25rem;">Configuración</h3>
                    <p style="color: #6b7280; font-size: 0.875rem;">Ajusta las preferencias de tu cuenta.</p>
                </div>

                <div style="background: white; border-radius: 1rem; padding: 2rem; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border-top: 4px solid #ec4899;">
                    <div style="font-size: 2.5rem; margin-bottom: 0.75rem;">🔔</div>
                    <h3 style="font-weight: 700; font-size: 1.1rem; color: #1f2937; margin-bottom: 0.25rem;">Notificaciones</h3>
                    <p style="color: #6b7280; font-size: 0.875rem;">Mantente al día con los últimos avisos.</p>
                </div>

            </div>

            <!-- Info del usuario -->
            <div style="background: white; border-radius: 1rem; padding: 1.5rem 2rem; box-shadow: 0 4px 15px rgba(0,0,0,0.08); display: flex; align-items: center; gap: 1rem;">
                <div style="background: #6366f1; color: white; border-radius: 50%; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; font-size: 1.25rem; font-weight: 700; flex-shrink: 0;">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                <div>
                    <p style="font-weight: 700; color: #1f2937; margin: 0;">{{ Auth::user()->name }}</p>
                    <p style="color: #6b7280; font-size: 0.875rem; margin: 0;">{{ Auth::user()->email }}</p>
                </div>
                <div style="margin-left: auto;">
                    <span style="background: #d1fae5; color: #065f46; padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 600;">
                        ✅ Sesión activa
                    </span>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>