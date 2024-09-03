<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio Personal</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="nav-container">
            <a href="#" class="nav-logo">MOB</a>
            <div class="nav-toggle" id="navToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-menu" id="navMenu">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#habilidades">Habilidades</a></li>
                <li><a href="#proyectos">Proyectos</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <section id="inicio" class="hero">
            <div class="hero-content">
                <h1>Dilan Raul Martinez Hernandez</h1>
                <div class="subtitle">Desarrollador de Software &amp; Soluciones Digitales</div>
                <p>Profesional en tecnología especializado en desarrollo de software y optimización de sistemas. Creo soluciones 
                    digitales eficientes y escalables, alineadas con objetivos de negocio. Mi enfoque combina experiencia técnica 
                    con comprensión profunda de necesidades específicas, entregando resultados que impulsan la innovación y el rendimiento.
                </p>
                <a href="{{ asset('documents/cv.pdf') }}" class="btn-download" download="CV_DilanMartinez.pdf">Descargar CV <i class="fas fa-download"></i></a>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="skills">
                    <span class="skill-tag">HTML5</span>
                    <span class="skill-tag">CSS3</span>
                    <span class="skill-tag">JavaScript</span>
                    <span class="skill-tag">Laravel</span>
                    <span class="skill-tag">ASP.net</span>
                    <span class="skill-tag">Bootstrap 5</span>
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('images/foto-perfil.jpeg') }}" alt="Tu foto de perfil" class="profile-pic">
            </div>
        </section>

        <section id="habilidades" class="skills-section">
            <h2 class="section-title">Mis Habilidades</h2>
            <div class="skills-container">
                <div class="skill-category">
                    <h3>Desarrollo Frontend</h3>
                    <div class="skill-grid">
                        <div class="skill-card">
                            <i class="fab fa-html5"></i>
                            <h4>HTML5</h4>
                            <span class="skill-level intermediate">Intermedio</span>
                        </div>
                        <div class="skill-card">
                            <i class="fab fa-css3-alt"></i>
                            <h4>CSS3</h4>
                            <span class="skill-level intermediate">Intermedio</span>
                        </div>
                        <div class="skill-card">
                            <i class="fab fa-js"></i>
                            <h4>JavaScript</h4>
                            <span class="skill-level intermediate">Intermedio</span>
                        </div>
                    </div>
                </div>
                <div class="skill-category">
                    <h3>Desarrollo Backend</h3>
                    <div class="skill-grid">
                        <div class="skill-card">
                            <i class="fab fa-windows"></i>
                            <h4>ASP.net</h4>
                            <span class="skill-level intermediate">Intermedio</span>
                        </div>
                        <div class="skill-card">
                            <i class="fab fa-laravel"></i>
                            <h4>Laravel</h4>
                            <span class="skill-level intermediate">Basico</span>
                        </div>
                        <div class="skill-card">
                            <i class="fas fa-database"></i>
                            <h4>MySQL</h4>
                            <span class="skill-level intermediate">Intermedio</span>
                        </div>
                        <div class="skill-card">
                            <i class="fas fa-server"></i>
                            <h4>SQL Server</h4>
                            <span class="skill-level intermediate">Intermedio</span>
                        </div>
                    </div>
                </div>
                <div class="skill-category">
                    <h3>Diseño UI/UX</h3>
                    <div class="skill-grid">
                        <div class="skill-card">
                            <i class="fa-solid fa-user"></i>
                            <h4>UX Design</h4>
                            <span class="skill-level intermediate">Intermedio</span>
                        </div>
                        <div class="skill-card">
                            <i class="fab fa-figma"></i>
                            <h4>Figma</h4>
                            <span class="skill-level intermediate">Intermedio</span>
                        </div>
                        <div class="skill-card">
                            <i class="fas fa-pencil-ruler"></i>
                            <h4>UI Design</h4>
                            <span class="skill-level intermediate">Intermedio</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="proyectos" class="projects-section">
            <div class="projects-header">
                <h2 class="section-title">Mis Proyectos</h2>
                <p class="section-subtitle">Descubre mi trabajo más reciente e innovador</p>
            </div>
            <div class="projects-showcase">
                <div class="project-item" style="--bg-image: url('{{ asset('images/nomina.jpg') }}');">
                    <div class="project-content">
                        <h3>Sistema de Control de pago para empleados</h3>
                        <p>Desarrollo e implementación de una solución integral para la gestión de pagos, optimizando el proceso de pago y seguimiento de empleados. 
                            Este sistema automatiza cálculos complejos y genera reportes detallados, resultando en una reducción 
                            del 30% en errores de pagos y un ahorro del 25% en tiempo administrativo. Su interfaz intuitiva y acceso seguro multiusuario 
                            mejoran significativamente la eficiencia operativa y la satisfacción de los empleados.</p>
                        <div class="project-tech">
                            <span>Asp.NET CORE</span>
                            <span>SQL Server</span>
                        </div>
                        {{-- <a href="#" class="btn-view-project">Explorar Proyecto</a> --}}
                    </div>
                </div>
                <div class="project-item" style="--bg-image: url('{{ asset('images/mantenimientos.jpg') }}');">
                    <div class="project-content">
                        <h3>Sistema de mantenimiento de condominios</h3>
                        <p>Software especializado en programar y gestionar mantenimientos de equipos críticos en condominios.
                            Implementa calendarios automáticos y alertas predictivas, reduciendo 
                            fallas en un 30% y extendiendo la vida útil de los sistemas en un 25%. Mejora la eficiencia operativa y 
                            la seguridad del condominio mediante una planificación proactiva.</p>
                        <div class="project-tech">
                            <span>Asp.NET CORE</span>
                            <span>SQL Server</span>
                        </div>
                        {{-- <a href="#" class="btn-view-project">Explorar Proyecto</a> --}}
                    </div>
                </div>
                <div class="project-item" style="--bg-image: url('{{ asset('images/mueblera.jpeg') }}');">
                    <div class="project-content">
                        <h3>Sistema de Planificacion de recursos empresariales</h3>
                        <p>ERP integral que unifica la gestión de productos, ventas y finanzas. Facilita el registro de productos, 
                            generación de cotizaciones, órdenes de compra y venta, y remisiones. Integra reportes financieros detallados 
                            sobre productos, clientes y proveedores, optimizando la toma de decisiones y la eficiencia operativa en toda la cadena de suministro.</p>
                        <div class="project-tech">
                            <span>Asp.NET FRAMEWORK</span>
                            <span>SQL Server</span>
                        </div>
                        {{-- <a href="#" class="btn-view-project">Explorar Proyecto</a> --}}
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navToggle = document.getElementById('navToggle');
        const navMenu = document.getElementById('navMenu');

        navToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
        });

        // Cerrar el menú al hacer clic en un enlace
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const projectItems = document.querySelectorAll('.project-item');

        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.3
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        projectItems.forEach(item => {
            observer.observe(item);
        });
    });
</script>
