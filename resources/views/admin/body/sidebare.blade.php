@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="index.html">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('backend/images/logo1.png') }}" alt="">

                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="{{ $route == 'dashboard' ? 'active' : '' }}">
                <a href="{{ url('admin/dashboard') }}">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="treeview {{ $prefix == '/brand' ? 'active' : '' }}">
                <a href="#">
                    <i data-feather="briefcase"></i>
                    <span>Marques</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route == 'all.brand' ? 'active' : '' }}"><a href="{{ route('all.brand') }}">
                            <i class="ti-more"></i>toutes les marques</a></li>

                </ul>
            </li>

            <li class="treeview" {{ $prefix == '/category' ? 'active' : '' }}>
                <a href="#">
                    <i data-feather="folder-plus"></i> <span>Catégories</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route == 'all.category' ? 'active' : '' }}"><a
                            href="{{ route('all.category') }}"><i class="ti-more"></i>Liste des Catégories</a></li>
                    <li class="{{ $route == 'all.subcategory' ? 'active' : '' }}"><a
                            href="{{ route('all.subcategory') }}"><i class="ti-more"></i>Liste des
                            sub-Catégories</a></li>
                    <li class="{{ $route == 'all.subsubcategory' ? 'active' : '' }}"><a
                            href=" {{ route('all.subsubcategory') }}"><i class="ti-more"></i>Liste des
                            Sub->SubCatégories</a></li>


                </ul>
            </li>

            <li class="treeview {{ $prefix == '/product' ? 'active' : '' }}  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Des produits</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route == 'add-product' ? 'active' : '' }}"><a
                            href="{{ route('add-product') }}"><i class="ti-more"></i>Ajouter des produits</a></li>

                    <li class="{{ $route == 'manage-product' ? 'active' : '' }}"><a
                            href="{{ route('manage-product') }}"><i class="ti-more"></i>Gérer les produits</a></li>

                </ul>
            </li>

            <li class="treeview {{ $prefix == '/slider' ? 'active' : '' }}  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Slider</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route == 'manage-slider' ? 'active' : '' }}"><a
                            href="{{ route('manage-slider') }}"><i class="ti-more"></i>Gérer Slider</a></li>



                </ul>
            </li>

            <li class="treeview {{ $prefix == '/shipping' ? 'active' : '' }}  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Zone d'expedition</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route == 'manage-division' ? 'active' : '' }}"><a
                            href="{{ route('manage-division') }}"><i class="ti-more"></i>Ship Division</a></li>

                    <li class="{{ $route == 'manage-district' ? 'active' : '' }}"><a
                            href="{{ route('manage-district') }}"><i class="ti-more"></i>Ship District</a></li>

                    <li class="{{ $route == 'manage-state' ? 'active' : '' }}"><a
                            href="{{ route('manage-state') }}"><i class="ti-more"></i>Ship State</a></li>



                </ul>
            </li>
            <li class="treeview">
            <li class="treeview {{ $prefix == '/orders' ? 'active' : '' }}  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Orders </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route == 'pending-orders' ? 'active' : '' }}"><a
                            href="{{ route('pending-orders') }}"><i class="ti-more"></i>Les ordres en attente</a>
                    </li>
                    <li class="{{ $route == 'confirmed-orders' ? 'active' : '' }}"><a
                            href="{{ route('confirmed-orders') }}"><i class="ti-more"></i>Ordres confirmés</a></li>

                    <li class="{{ $route == 'processing-orders' ? 'active' : '' }}"><a
                            href="{{ route('processing-orders') }}"><i class="ti-more"></i>Commandes de
                            traitement</a></li>

                    <li class="{{ $route == 'picked-orders' ? 'active' : '' }}"><a
                            href="{{ route('picked-orders') }}"><i class="ti-more"></i> Commandes sortant</a></li>

                    <li class="{{ $route == 'shipped-orders' ? 'active' : '' }}"><a
                            href="{{ route('shipped-orders') }}"><i class="ti-more"></i> Commandes expédiées</a></li>

                    <li class="{{ $route == 'delivered-orders' ? 'active' : '' }}"><a
                            href="{{ route('delivered-orders') }}"><i class="ti-more"></i> Commandes livrées</a></li>

                    <li class="{{ $route == 'cancel-orders' ? 'active' : '' }}"><a
                            href="{{ route('cancel-orders') }}"><i class="ti-more"></i> Annuler les commandes</a>
                    </li>
                </ul>
            </li>
            <li class="treeview {{ $prefix == '/return' ? 'active' : '' }}  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Commande de retour</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route == 'return.request' ? 'active' : '' }}"><a
                            href="{{ route('return.request') }}"><i class="ti-more"></i>Demande de retour</a></li>

                    <li class="{{ $route == 'all.request' ? 'active' : '' }}"><a
                            href="{{ route('all.request') }}"><i class="ti-more"></i>Toutes les demandes</a></li>


                </ul>
            </li>
            <li class="treeview {{ $prefix == '/review' ? 'active' : '' }}  ">
                <a href="#">
                    <i data-feather="file"></i>
                    <span>Manage Review</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ $route == 'pending.review' ? 'active' : '' }}"><a
                            href="{{ route('pending.review') }}"><i class="ti-more"></i>Pending Review</a></li>

                    <li class="{{ $route == 'publish.review' ? 'active' : '' }}"><a
                            href="{{ route('publish.review') }}"><i class="ti-more"></i>Publish Review</a></li>


                </ul>
            </li>


    </section>

    <div class="sidebar-footer">
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title=""
            data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title=""
            data-original-title="Email"><i class="ti-email"></i></a>
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title=""
            data-original-title="Logout"><i class="ti-lock"></i></a>
    </div>
</aside>
