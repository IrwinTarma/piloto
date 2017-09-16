<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <?php if (false) : ?>
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ access()->user()->picture }}" class="img-circle" alt="User Image" />
            </div><!--pull-left-->
            <div class="pull-left info">
                <p>{{ access()->user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('strings.backend.general.status.online') }}</a>
            </div><!--pull-left-->
        </div><!--user-panel-->
        <?php endif; ?>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('menus.backend.sidebar.general') }}</li>

            <li class="{{ Active::pattern('admin/dashboard') }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>{{ trans('menus.backend.sidebar.dashboard') }}</span>
                </a>
            </li>

            @permissions(['manage-users', 'manage-roles'])
            <li class="{{ Active::pattern('admin/access/*') }} treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>{{ trans('menus.backend.access.title') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu {{ Active::pattern('admin/access/*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/access/*', 'display: block;') }}">
                    @permission('manage-users')
                        <li class="{{ Active::pattern('admin/access/user*') }}">
                            <a href="{{ route('admin.access.user.index') }}">
                                <i class="fa fa-circle-o"></i>
                                <span>{{ trans('labels.backend.access.users.management') }}</span>
                            </a>
                        </li>
                    @endauth

                    @permission('manage-roles')
                        <li class="{{ Active::pattern('admin/access/role*') }}">
                            <a href="{{ route('admin.access.role.index') }}">
                                <i class="fa fa-circle-o"></i>
                                <span>{{ trans('labels.backend.access.roles.management') }}</span>
                            </a>
                        </li>
                    @endauth
                </ul>
            </li>
            @endauth

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list"></i>
                    <span>Mantenimiento</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="">
                        <a href="{{ route('provedor.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>Proveedores</span>
                        </a>
                    </li>                   
                    <li class="">
                        <a href="{{ route('almacen.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>Almacenes</span>
                        </a>
                    </li>  
                    <li class="">
                        <a href="{{ route('medida.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>Medidas</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('tipo.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>Tipos</span>
                        </a>
                    </li>  
                    <li class="">
                        <a href="{{ route('subtipo.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>Sub-Tipos</span>
                        </a>
                    </li> 
                    <li class="">
                        <a href="{{ route('tipo.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>Productos</span>
                        </a>
                    </li> 
                    <li class="">
                        <a href="{{ route('cliente.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>Clientes</span>
                        </a>
                    </li>  
                     
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list"></i>
                    <span>Configuraciones</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="">
                        <a href="{{ route('provedor.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>Conf. Almacenes</span>
                        </a>
                    </li>                   
                    <li class="">
                        <a href="{{ route('almacen.index') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>Conf. Medida - Precio</span>
                        </a>
                    </li>  
                </ul>
            </li>


            <li class="header">Procesos</li>

            <!--li class="treeview">
                <a href="#">
                    <i class="fa fa-list"></i>
                    <span>Compras</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Compras</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Devoluciones</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Abonos</span>
                        </a>
                    </li>
                </ul>
            </li-->
        
        
            <!--li class="treeview">
                <a href="#">
                    <i class="fa fa-list"></i>
                    <span>Comercialización</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li>
                        <a href="#">
                            <i class="fa fa-circle-o"></i>
                            <span>Bandeja de Recepcion</span>
                        </a>
                    </li>


                </ul>
            </li-->

            <li class="treeview">
                <a href="#">
                  <i class="fa fa-list"></i>
                  <span>Almacen</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li>
                      <a href="#">
                        <i class="fa fa-circle-o"></i>
                        <span>Ingreso a Almacén</span>
                      </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
              <a href="#">
                  <i class="fa fa-list"></i>
                  <span>Reportes</span>
                  <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li>
                  <a href="{{ route('reportes.compra') }}">
                    <i class="fa fa-circle-o"></i>
                    <span>Compras</span>
                  </a>
                </li>
                <li>
                  <a href="{{ route('reportes.resumen') }}">
                    <i class="fa fa-circle-o"></i>
                    <span>Stock de Materia Prima</span>
                  </a>
                </li>
                <li>
                <a href="{{ route('reportes.telas') }}">
                  <i class="fa fa-circle-o"></i>
                  <span>Stock de Tela Producida</span>
                </a>
                </li>
                 <li>
                <a href="{{ route('reportes.despacho_tintoreria') }}">
                  <i class="fa fa-circle-o"></i>
                  <span>Stock de Tela en Tintoreria</span>
                </a>
                </li>
                <li>
                <a href="{{ route('reportes.planeamientos') }}">
                  <i class="fa fa-circle-o"></i>
                  <span>Planeamientos</span>
                </a>
                </li>
                <li>
                <a href="{{ route('reportes.produccion') }}">
                  <i class="fa fa-circle-o"></i>
                  <span>Produccion</span>
                </a>
              </li>
              <li>
              <a href="/reportes/proveedor_tela_deuda">
                  <i class="fa fa-circle-o"></i>
                  <span>Deuda de Tintoreria</span>
                </a>
                  
              </li>
              </ul>
            </li>

            <li class="header">{{ trans('menus.backend.sidebar.system') }}</li>

            <li class="{{ Active::pattern('admin/log-viewer*') }} treeview">
                <a href="#">
                    <i class="fa fa-list"></i>
                    <span>{{ trans('menus.backend.log-viewer.main') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu {{ Active::pattern('admin/log-viewer*', 'menu-open') }}" style="display: none; {{ Active::pattern('admin/log-viewer*', 'display: block;') }}">
                    <li class="{{ Active::pattern('admin/log-viewer') }}">
                        <a href="{{ route('admin.log-viewer::dashboard') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('menus.backend.log-viewer.dashboard') }}</span>
                        </a>
                    </li>

                    <li class="{{ Active::pattern('admin/log-viewer/logs') }}">
                        <a href="{{ route('admin.log-viewer::logs.list') }}">
                            <i class="fa fa-circle-o"></i>
                            <span>{{ trans('menus.backend.log-viewer.logs') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->

        <!-- search form (Optional) -->
        {{ Form::open(['route' => 'admin.search.index', 'method' => 'get', 'class' => 'sidebar-form']) }}
            <div class="input-group">
                {{ Form::text('q', Request::get('q'), ['class' => 'form-control', 'required' => 'required', 'placeholder' => trans('strings.backend.general.search_placeholder')]) }}

                  <span class="input-group-btn">
                    <button type='submit' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                  </span><!--input-group-btn-->
            </div><!--input-group-->
        {{ Form::close() }}
        <!-- /.search form -->

    </section><!-- /.sidebar -->
</aside>
