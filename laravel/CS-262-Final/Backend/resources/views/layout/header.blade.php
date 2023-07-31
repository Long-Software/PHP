@php
    $id = Auth::id();
    $data = App\Models\User::findOrFail($id);    
@endphp
<div class="navbar-header">
    <div class="d-flex">
        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
            <i class="ri-menu-2-line align-middle"></i>
        </button>

        <!-- App Search-->
        <form class="app-search d-none d-lg-block" action="{{ route('find.user') }}" method="POST">
            @csrf
            <div class="position-relative">
                <input type="number" class="form-control" name='user_id' placeholder="Search ..." min='1'>
                <span class="ri-search-line"></span>
            </div>
        </form>
    </div>

    <div class="d-flex">

        <div class="dropdown d-inline-block d-lg-none ms-2">
            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ri-search-line"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                aria-labelledby="page-header-search-dropdown">

                <form class="p-3" action="{{ route('find.user') }}" method="POST">
                    @csrf
                    <div class="mb-3 m-0">
                        <div class="input-group">
                            <input type="number" min='1' class="form-control" name='user_id' placeholder="Search ...">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="dropdown d-none d-lg-inline-block ms-1">
            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                <i class="ri-fullscreen-line"></i>
            </button>
        </div>

        <div class="dropdown d-inline-block user-dropdown">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle header-profile-user"
                    src="{{ !empty($data->profile_image) ? url('upload/images/' . $data->profile_image) : url('upload/no_image.jpg') }}"
                    alt="Header Avatar">
                <span class="d-none d-xl-inline-block ms-1">{{ $data->user_username }}</span>
                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <a class="dropdown-item" href="{{ route('admin.profile') }}"><i
                        class="ri-user-line align-middle me-1"></i>
                    Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}"><i
                        class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
            </div>
        </div>
    </div>
</div>
