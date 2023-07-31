@php
    
    $id = Auth::id();
    $lvl = DB::select('select 
                            level_id
                        from 
                            admins
                        where user_id = ?',
        [$id]);
@endphp

<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('index') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('borrower.index') }}" class=" waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>Borrowers</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('bank.index') }}" class=" waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>Banks</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('loan.index') }}" class=" waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>Loans</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.index') }}" class=" waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>Admins</span>
                    </a>
                </li>
                @if ($lvl[0]->level_id <= 4)
                    <li class="menu-title">Pages</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="ri-account-circle-line"></i>
                            <span>Authentication</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('verify.borrower') }}">Borrower</a></li>
                            <li><a href="{{ route('verify.bank') }}">Bank</a></li>
                            @if ($lvl[0]->level_id <= 2)
                                <li><a href="{{ route('create.admin') }}">New Admin</a></li>
                            @endif
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
