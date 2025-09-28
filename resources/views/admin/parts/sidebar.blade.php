<div class="sidebar">
    <div class="user-welcome">
        @if (session('name'))
            {{"Bienvenido, ". session('name') . " (" . session('role') . ")"}}
        @endif
    </div>
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <i class="fa fa-house"></i>
            <a class="item-heading" href="/admin/dashboard"><span>Dashboard</span></a>
            
        </div>
        
        <div class="accordion-item">
          <div class="accordion-header" id="manage-members">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#manage-members-collapse" aria-expanded="false" aria-controls="flush-collapseOne">
                    <i class="fa fa-users"></i>
                    <span class="item-heading">Administrar Miembros</span>
                </button>
            </div>
        </div>
        <div id="manage-members-collapse" class="accordion-collapse collapse" aria-labelledby="manage-members" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">

                <div>
                    <a href="{{route('members.index')}}">
                        <i class="fa-solid fa-arrow-right-long"></i>
                        Listar Todos los Miembros
                    </a>
                </div>
                <div>
                    <a  href="{{route('members.create')}}">
                        <i class="fa-solid fa-arrow-right-long"></i>
                        Formulario de Registro de Miembros
                    </a>
                </div>
                <div>
                    <a href="/admin/manage-member">
                        <i class="fa-solid fa-arrow-right-long"></i>
                        Manejo de Miembros
                    </a>
                </div>

            </div>
        </div>

        {{--  Gym Equipments --}}
        <div class="accordion-item">
            <div class="accordion-header" id="gym-equipments">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gym-equipments-collapse" aria-expanded="false" aria-controls="flush-collapseOne">
                      <i class="fa fa-users"></i>
                      <span class="item-heading">Equipos de Gimnasio</span>
                      <span class="plus">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="plus">
                        <i class="fa fa-plus"></i>
                    </span>
                  </button>
              </div>
          </div>
          <div id="gym-equipments-collapse" class="accordion-collapse collapse" aria-labelledby="gym-equipments" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
  
                  <div>
                      <a href="{{ route('equipments.index')}}">
                          <i class="fa-solid fa-arrow-right-long"></i>
                          Listar Equipos de Gimnasio
                      </a>
                  </div>
                  <div>
                      <a href="{{ route('equipments.create') }}">
                          <i class="fa-solid fa-arrow-right-long"></i>
                          Agregar Equipo
                      </a>
                  </div>
                  <div>
                      <a href="/admin/manage-equipments">
                          <i class="fa-solid fa-arrow-right-long"></i>
                          Manejo de Equipos
                      </a>
                  </div>
  
              </div>
          </div>

          {{-- Attendance --}}
            <div class="accordion-item">
                <div class="accordion-header" id="flush-attendance">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-attendance" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="fa fa-users"></i>
                        <span class="item-heading">Asistencia</span>
                        <span class="plus">
                            <i class="fa fa-plus"></i>
                        </span>
                    </button>
                </div>
            </div>
            <div id="flush-collapse-attendance" class="accordion-collapse collapse" aria-labelledby="flush-attendance" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
  
                    <div>
                        <a href="/admin/attendance">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            Check In/Out
                        </a>
                    </div>
                    <div>
                        <a href="/admin/attendance-view">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            Ver
                        </a>
                    </div>  
              </div>
            </div>

            
            {{-- Manage Customer Progress --}}
            <div class="accordion-item">
                <i class="fa fa-list-check"></i>
                <a class="item-heading" href="/admin/member-progress"><span>Administrar Progreso de Miembros</span></a>
                
            </div>
            
            {{-- Member's Status --}}
            <div class="accordion-item">
                <i class="fa fa-eye"></i>
                <a class="item-heading" href="/admin/member-status"><span>Estado de Miembros</span></a>
                
            </div >
            
            
            {{-- Payments --}}
            <div class="accordion-item">
                <i class="fa fa-hand-holding-dollar"></i>
                <a class="item-heading" href="/admin/payments"><span>Pagos</span></a>
                
            </div >
            
            {{-- Staff Management --}}
            <div class="accordion-item">
                <i class="fa fa-suitcase"></i>
                <a class="item-heading" href="{{ route('staff.index') }}"><span>Administrar Personal</span></a>
                
            </div>
            
            {{-- Reports --}}
            <div class="accordion-item">
                <div class="accordion-header" id="flush-reports">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-reports" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="fa fa-users"></i>
                        <span class="item-heading">Reportes</span>
                        <span class="plus">
                            <i class="fa fa-plus"></i>
                        </span>
                    </button>
                </div>
            </div>
            <div id="flush-collapse-reports" class="accordion-collapse collapse" aria-labelledby="flush-reports" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
  
                    <div>
                        <a href="/admin/reports">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            Reporte de Miembros
                        </a>
                    </div>  
                    <div>
                        <a href="/admin/progress-reports">
                            <i class="fa-solid fa-arrow-right-long"></i>
                            Reporte de Progreso de Miembros
                        </a>
                    </div>  
              </div>
            </div>

            {{-- Logging Out --}}
            <div class="accordion-item">
                <a class="item-heading" href="/logout">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span>Cerrar Sesión</span>
                </a>
            </div>
        
    </div>

</div>