<!-- ========== Service Sidebar Area (Start) ========== -->
<div class="sidebar">

    <!-- Service Categories -->
    <div class="category sidebar-item">

        <div class="sidebar-heading">
            <h2>nuestros servicios</h2>
        </div>

        <div class="box-container">
            <a href="{{ route('pages.services.empacado') }}"
               class="{{ setActiveRoute('pages.services.empacado') }}">
                <span>
                    <i class="fas fa-caret-right"></i>Empacado y envasado
                </span>
            </a>
            <a href="{{ route('pages.services.ingenieria') }}"
               class="{{ setActiveRoute('pages.services.ingenieria') }}">
                <span>
                    <i class="fas fa-caret-right"></i>Ingeniería y mantenimiento
                </span>
            </a>
        </div>

    </div>

</div>
<!-- ========== Service Sidebar Area (End) ========== -->