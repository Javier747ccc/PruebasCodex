<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Centralita Externa Profesional | No Pierdas Ninguna Llamada</title>
  <meta name="description" content="Centralita externa para empresas: filtramos llamadas, redirigimos a cada departamento y respondemos por email. Ahorra costes y no pierdas oportunidades." />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Source+Sans+3:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    :root{
      --primary:#0b3d91;
      --secondary:#00a8e8;
      --dark:#1a1a1a;
      --light:#ffffff;
      --gray:#f5f5f5;
      --font-head:'Montserrat', sans-serif;
      --font-body:'Source Sans 3', sans-serif;
    }
    *{box-sizing:border-box;}
    body{margin:0;font-family:var(--font-body);color:var(--dark);background:var(--light);line-height:1.6;}
    h1,h2,h3,h4{font-family:var(--font-head);margin:0 0 .5em;line-height:1.2;color:var(--primary);}    
    p{margin:0 0 1em;}
    a{color:var(--secondary);text-decoration:none;}
    img{max-width:100%;height:auto;display:block;}
    .container{width:90%;max-width:1200px;margin:0 auto;}
    header{background:var(--light);position:sticky;top:0;z-index:999;box-shadow:0 1px 4px rgba(0,0,0,.06);} 
    .nav{display:flex;align-items:center;justify-content:space-between;padding:1rem 0;}
    .nav a.logo{font-weight:700;font-size:1.15rem;color:var(--primary);letter-spacing:.5px;}
    .nav ul{list-style:none;margin:0;padding:0;display:flex;gap:1.2rem;}
    .nav li a{font-weight:500;color:var(--dark);} 
    .nav li a:hover{color:var(--secondary);}    
    /* Hero */
    .hero{background:linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);color:var(--light);padding:7rem 0 6rem;position:relative;overflow:hidden;}
    .hero:after{content:"";position:absolute;right:-10%;top:-10%;width:45%;height:140%;background:rgba(255,255,255,.06);transform:rotate(18deg);}    
    .hero h1{font-size:2.6rem;color:var(--light);white-space:nowrap;}    
    .hero p{font-size:1.15rem;margin-bottom:2rem;color:#e9f3ff;max-width:100%;}
    .btn{display:inline-block;padding:1rem 2rem;border-radius:6px;font-weight:600;transition:all .2s ease;border:2px solid transparent;}
    .btn-primary{background:var(--secondary);color:var(--light);}    
    .btn-primary:hover{background:transparent;border-color:var(--light);}    
    .btn-outline{background:transparent;color:var(--light);border-color:var(--light);}    
    .btn-outline:hover{background:var(--light);color:var(--primary);}   
    /* Sections */
    section{padding:5rem 0;}
    .alt{background:var(--gray);}    
    .grid{display:grid;gap:2.5rem;}
    .grid-2{grid-template-columns:repeat(auto-fit,minmax(280px,1fr));}
    .card{background:var(--light);border-radius:12px;box-shadow:0 6px 16px rgba(0,0,0,.06);padding:2rem;}
    .icon{font-size:2.2rem;margin-bottom:.6rem;color:var(--secondary);}   
    .quote{font-style:italic;border-left:4px solid var(--secondary);padding-left:1rem;margin:1.2rem 0;}
    /* Pricing */
    .pricing{display:grid;gap:2rem;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));}
    .plan{background:var(--light);border-radius:14px;padding:2.5rem 2rem;box-shadow:0 8px 20px rgba(0,0,0,.08);position:relative;}
    .plan.highlight{border:3px solid var(--secondary);}
    .plan h3{margin-bottom:.2rem;}
    .price{font-size:2rem;font-weight:700;color:var(--primary);margin:.8rem 0 1rem;}
    .plan ul{list-style:none;padding:0;margin:0 0 2rem;}
    .plan ul li{margin:.45rem 0;}
    .badge{position:absolute;top:-12px;right:20px;background:var(--secondary);color:var(--light);padding:.3rem .7rem;border-radius:32px;font-size:.75rem;font-weight:600;letter-spacing:.3px;}
    /* FAQ */
    details{background:var(--light);border:1px solid #e2e2e2;border-radius:8px;margin-bottom:1rem;padding:1rem 1.2rem;}
    summary{cursor:pointer;font-weight:600;color:var(--primary);}    
    /* Contact */
    form{display:grid;gap:1rem;max-width:560px;}
    input,textarea{padding:.9rem 1rem;border:1px solid #d8d8d8;border-radius:6px;font-family:var(--font-body);font-size:1rem;}
    textarea{min-height:140px;resize:vertical;}
    footer{background:var(--dark);color:#cfcfcf;padding:3rem 0 2rem;font-size:.9rem;}
    footer a{color:#cfcfcf;}
    .legal{font-size:.8rem;margin-top:1.2rem;color:#a5a5a5;}
    /* Utilities */
    .center{text-align:center;}
    .mt-2{margin-top:2rem;}
    .mt-3{margin-top:3rem;}
    .sr-only{position:absolute;width:1px;height:1px;padding:0;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0;}
    @media (max-width:768px){
      .hero{padding:5rem 0 4rem;}
      .hero h1{font-size:2rem;}
    }
    /* ===== Responsive tweaks ===== */
    @media (max-width:768px){
      .hero h1{font-size:clamp(1.8rem,7vw,2.2rem);white-space:normal;}
      .hero p{font-size:1rem;max-width:90vw;}
      .container{width:92%;}
      .grid-2{grid-template-columns:1fr;}
    }
    @media (max-width:480px){
      body{font-size:15px;}
      .btn{padding:.85rem 1.4rem;font-size:.95rem;}
      .nav ul{display:none;position:fixed;top:60px;right:0;background:var(--light);flex-direction:column;gap:0;border-left:1px solid #eee;box-shadow:-2px 0 8px rgba(0,0,0,.06);width:210px;padding:1rem;}
      .nav ul.show{display:flex;}
      .hamburger{display:block;cursor:pointer;border:none;background:none;font-size:1.6rem;color:var(--primary);}
    }
    @media (min-width:481px){
      .hamburger{display:none;}
    }
  </style>
</head>
<body>
<header>
  <div class="container nav">
    <a href="#inicio" class="logo">Tu Centralita Externa</a>
    <nav>
      <ul>
        <li><a href="#beneficios">Beneficios</a></li>
        <li><a href="#como-funciona">Cómo funciona</a></li>
        <li><a href="#planes">Planes</a></li>
        <li><a href="#faq">FAQ</a></li>
        <li><a href="#contacto" class="btn btn-primary" style="padding:.6rem 1rem;">Contactar</a></li>
      </ul>
    </nav>
  </div>
  <style>
    /* --- aquí van todos tus estilos existentes --- */

    /* ===== Estilos de alertas ===== */
    .alert {
      padding: 1rem;
      border-radius: 6px;
      margin-bottom: 1.5rem;
      text-align: center;
      font-weight: 500;
    }
    .alert.success { background: #e6ffed; color: #2d662d; }
    .alert.error   { background: #ffe6e6; color: #662d2d; }
  </style>
</header>

<!-- Hero -->
<section class="hero" id="inicio">
  <div class="container">
    <h1>Como rentabilizar mi negocio con una centralita externa</h1>
    <p>Deja de perder llamadas y oportunidades. Nos encargamos de atender, filtrar y redirigir cada llamada a quien corresponde. Tú te centras en tu negocio; nosotros en que nadie se quede sin respuesta.</p>
    <a href="#contacto" class="btn btn-outline">Quiero más información</a>
  </div>
</section>

<!-- Beneficios -->
<section id="beneficios" class="alt">
  <div class="container">
    <h2 class="center">Beneficios clave</h2>
    <div class="grid grid-2 mt-3">
      <div class="card">
        <div class="icon">📞</div>
        <h3>No pierdas llamadas cuando te vas de vacaciones</h3>
        <p>Me voy de vacaciones o cierro unos días y <strong>no pierdo llamadas</strong>. Nuestra centralita externa permanece activa y redirige la información donde haga falta.</p>
      </div>
      <div class="card">
        <div class="icon">⏰</div>
        <h3>Atención 8 horas al día</h3>
        <p>Atención 8 horas al día. Nos encargamos de no perder ni una sola llamada, enviando cada comunicación al departamento correspondiente y filtrando las que no interesan.</p>
      </div>
      <div class="card">
        <div class="icon">✉️</div>
        <h3>Enviamos correos electrónicos como respuesta</h3>
        <p>Si lo prefieres, te enviamos correos electrónicos como resumen de llamadas y mensajes recibidos, para que tengas todo bajo control y por escrito.</p>
      </div>
      <div class="card">
        <div class="icon">📅</div>
        <h3>Todos los días del año laborables</h3>
        <p>Estamos disponibles todos los días del año de lunes a viernes, excepto festivos. Así garantizas continuidad sin tener que gestionar bajas, turnos o sustituciones.</p>
      </div>
      <div class="card">
        <div class="icon">💶</div>
        <h3>Ahorra costes fijos</h3>
        <p>Olvídate de pagar seguros sociales: esta es la respuesta. Solo pagas por el servicio, sin cargas laborales, sin imprevistos.</p>
      </div>
      <div class="card">
        <div class="icon">📊</div>
        <h3>Informes y métricas</h3>
        <p>Registros detallados, estadísticas de llamadas atendidas, tiempos de respuesta y motivos de contacto.</p>
      </div>
    </div>
  </div>
</section>

<!-- Cómo funciona -->
<section id="como-funciona">
  <div class="container">
    <h2 class="center">¿Cómo funciona?</h2>
    <div class="grid grid-2 mt-3">
      <div>
        <h3>1. Configuración inicial</h3>
        <p>Definimos contigo horarios, departamentos, protocolos de filtrado y scripts de atención.</p>
        <h3>2. Desvío de llamadas</h3>
        <p>Rediriges tu número principal a nuestra centralita externa. Nosotros contestamos bajo tu nombre comercial.</p>
        <h3>3. Gestión inteligente</h3>
        <p>Filtramos llamadas comerciales, priorizamos urgencias y transferimos o registramos según tus instrucciones.</p>
        <h3>4. Reporte y seguimiento</h3>
        <p>Recibes resúmenes por email y acceso a un panel con métricas clave (opcional).</p>
      </div>
      <div>
        <div class="quote">“Desde que externalizamos la centralita, no hemos perdido un solo cliente por falta de respuesta. Y el ahorro en personal ha sido enorme.”</div>
        <p><strong>— Laura G., Directora de Operaciones</strong></p>
        <img src="https://images.unsplash.com/photo-1581091012184-7c54c1b22168?auto=format&fit=crop&w=1200&q=60" alt="Agente atendiendo llamadas" />
      </div>
    </div>
  </div>
</section>

<!-- Planes -->
<section id="planes" class="alt">
  <div class="container">
    <h2 class="center">Planes y tarifas</h2>
    <p class="center">Transparencia total. Solo pagas por lo que necesitas.</p>
    <div class="pricing mt-3">
      <div class="plan">
        <h3>Starter</h3>
        <div class="price">€89/mes</div>
        <ul>
          <li>Hasta 80 llamadas/mes</li>
          <li>Horario: 9:00 - 17:00</li>
          <li>Resumen diario por email</li>
          <li>1 departamento de desvío</li>
        </ul>
        <a href="#contacto" class="btn btn-primary">Lo quiero</a>
      </div>
      <div class="plan highlight">
        <span class="badge">Más popular</span>
        <h3>Business</h3>
        <div class="price">€149/mes</div>
        <ul>
          <li>Hasta 200 llamadas/mes</li>
          <li>Horario: 8:00 - 18:00</li>
          <li>Filtrado avanzado y scripts personalizados</li>
          <li>Hasta 3 departamentos</li>
        </ul>
        <a href="#contacto" class="btn btn-primary">Contratar ahora</a>
      </div>
      <div class="plan">
        <h3>Enterprise</h3>
        <div class="price">A medida</div>
        <ul>
          <li>Llamadas ilimitadas</li>
          <li>Integraciones CRM & SLA personalizados</li>
          <li>Horarios extendidos y multi-idioma</li>
          <li>Gestor dedicado</li>
        </ul>
        <a href="#contacto" class="btn btn-primary">Pedir presupuesto</a>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq">
  <div class="container">
    <h2 class="center">Preguntas frecuentes</h2>
    <div class="mt-3">
      <details>
        <summary>¿Qué pasa si recibo más llamadas de las incluidas en mi plan?</summary>
        <p>No se corta el servicio. Aplicamos una tarifa por llamada adicional previamente acordada.</p>
      </details>
      <details>
        <summary>¿Puedo cambiar de plan cuando quiera?</summary>
        <p>Sí, puedes escalar o reducir tu plan con un aviso de 15 días.</p>
      </details>
      <details>
        <summary>¿Cómo gestionáis la protección de datos (RGPD)?</summary>
        <p>Firmamos acuerdos de confidencialidad y tratamos datos según el RGPD, con registros y protocolos internos auditables.</p>
      </details>
      <details>
        <summary>¿Ofrecéis servicio en festivos o fines de semana?</summary>
        <p>Podemos ofrecerlo bajo presupuesto especial. Pregúntanos y te preparamos una propuesta.</p>
      </details>
    </div>
  </div>
</section>

<section id="contacto" class="alt">
  <div class="container">
    <h2 class="center">Hablemos</h2>
    <p class="center">Cuéntanos qué necesitas y te responderemos en menos de 24 horas.</p>

    <!-- Mostrar mensaje tras enviar -->
    <?php if (isset($_GET['enviado'])): ?>
      <?php if ($_GET['enviado'] == '1'): ?>
        <div class="alert success">¡Gracias! Nos pondremos en contacto contigo.</div>
      <?php else: ?>
        <div class="alert error">Error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.</div>
      <?php endif; ?>
    <?php endif; ?>

    <form action="contact.php" method="post" class="mt-3">
      <label for="nombre" class="sr-only">Nombre</label>
      <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>

      <label for="email" class="sr-only">Email</label>
      <input type="email" id="email" name="email" placeholder="Tu email" required>

      <label for="tel" class="sr-only">Teléfono</label>
      <input type="tel" id="tel" name="telefono" placeholder="Tu teléfono">

      <label for="mensaje" class="sr-only">Mensaje</label>
      <textarea id="mensaje" name="mensaje" placeholder="Cuéntanos tu caso"></textarea>

      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>
</section>

<footer>
  <div class="container center">
    <p><strong>Tu Centralita Externa</strong> · Atención telefónica profesional para empresas</p>
    <p><a href="#">Aviso legal</a> · <a href="#">Política de privacidad</a> · <a href="#">Cookies</a></p>
    <p class="legal">© <span id="year"></span> Tu Centralita Externa. Todos los derechos reservados.</p>
  </div>
</footer>

<script>
  document.getElementById('year').textContent = new Date().getFullYear();
</script>
</body>
</html>
