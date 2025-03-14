<!--**********************************
    Sidebar start
***********************************-->
<div class="dlabnav">
    <div id="mensajeBienvenida" class="alert alert-primary text-center" style="display: none;">
        ¡Bienvenido, <b><span id="nombreUsuario"></span></b>!
    </div>
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a href="<?php echo site_url('/'); ?>" aria-expanded="false">
                    <i class="bi bi-grid"></i>
                    <span class="nav-text">Principal</span>
                </a>
            </li>
            <li id="participantes"><a href="<?php echo site_url('participantes'); ?>" aria-expanded="false">
                    <i class="bi bi-people"></i>
                    <span class="nav-text">Participantes</span>
                </a>
            </li>
            <li id="votaciones"><a href="<?php echo site_url('votaciones'); ?>" aria-expanded="false">
                    <i class="bi bi-star"></i>
                    <span class="nav-text">Vota aquí</span>
                </a>
            </li>
            <li id="logeo"><a href="<?php echo site_url('logeo'); ?>" aria-expanded="false">
                    <i class="bi bi-gear"></i>
                    <span class="nav-text">Login</span>
                </a>
            </li>
            <li id="listavotos"><a href="<?php echo site_url('listavotaciones'); ?>" aria-expanded="false">
                    <i class="bi bi-card-checklist"></i>
                    <span class="nav-text">Lista de votaciones</span>
                </a>
            </li>
            <li id="cerrarsesion">
                <a href="#" onclick="cerrarsesion()" aria-expanded="false">
                    <i class="bi bi-box-arrow-right"></i>
                    <span class="nav-text">Cerrar sesión</span>
                </a>
            </li>
        </ul>
        <div class="plus-box">
            <div class="d-flex align-items-center">
                <h5>Proyecto</h5>
            </div>
            <p>Demo desarrollado para el curso <b>Gestión de tecnologías informáticas en
            las organizaciones</b> de la <b>UPNA</b>.</p>
        </div>
        <div class="copyright">
            <p><strong>Grupo 1</strong> © 2025</p>
        </div>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
<script src="<?php echo site_url('public/assets/js/jmenu.js'); ?>"></script>